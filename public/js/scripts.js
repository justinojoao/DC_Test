function myFunction() {
    var x = document.querySelector("#parcelas").value;
   document.getElementById("parcDados").style.display = x == 'cartao' ? 'block' : 'none';
  }

function funcionar(parcelas) {

    var form = document.getElementById('parcelasList');

    var farm = document.createElement("h1")

    for(let i=0 ; i <= parcelas.length; i++){

        form.innerHTML = farm;
    }

}


