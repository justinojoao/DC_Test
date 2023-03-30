<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Venda;
use App\Models\User;

class VendaController extends Controller
{
    public function index(){

        $search = request('search');

        if($search) {

            $vendas = Venda::where([
                ['vendedor', 'like', '%'.$search.'%']
            ])->get();
        } else {
            $vendas = Venda::all();
        }


        return view('welcome',['vendas' => $vendas, 'search' => $search]);
    }

    public function create(){
        return view('vendas.vender');
    }

    public function store(Request $request) {

         $venda = new Venda;

         $venda->date = $request->date;
         $venda->vendedor = $request->vendedor ;
         $venda->cliente = $request->cliente ;
         $venda->description = $request->description ;
         $venda->valor = $request->valor ;
         $venda->parcelas = $request->parcelas;

         $user = auth()->user();
         $venda->user_id = $user->id;

         $venda->save();

         return redirect('/');
    }

    public function show($id) {

        $venda = Venda::findOrFail($id);

        $vendaOwner = User::where('id', $venda->user_id)->first()->toArray();

        return view('vendas.show', ['venda' => $venda, 'vendaOwner' => $vendaOwner]);

    }

    public function dashboard() {

        $user = auth()->user();

        $vendas = $user->vendas;

        return view('vendas.dashboard', ['vendas' => $vendas]);
    }

}
