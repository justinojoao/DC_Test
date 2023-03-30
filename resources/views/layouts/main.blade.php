<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>


        <!-- Css Bootstrap -->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

       <link rel="stylesheet" href="/css/styles.css">
       <script src="/js/scripts.js"></script>

    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
              <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand">
                    <h1>DC_TEC</h1>
                  </a>
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a href="/" class="nav-link">Home</a>
                  </li>
                  @auth
                  <li class="nav-item">
                    <a href="/vendas/create" class="nav-link">Criar Venda</a>
                  </li>
                  @endauth
                  @auth
                  <li class="nav-item">
                    <a href="/dashboard" class="nav-link">Minhas Vendas</a>
                  </li>
                  <li class="nav-item">
                    <form action="/logout" method="POST">
                        <a href="/logout" class="nav-link" onclick="event.preventDefault();
                        this.closest('form').submit();">
                        sair
                        </a>
                    </form>
                  </li>
                  @endauth
                 @guest
                 <li class="nav-item">
                    <a href="/login" class="nav-link">Entrar</a>
                  </li>
                  <li class="nav-item">
                    <a href="/register" class="nav-link">Cadastrar</a>
                  </li>
                 @endguest
                </ul>
              </div>
            </nav>
          </header>
        @yield('content')
        <footer>
            <p>DC_Tecnologia &copy;2023</p>
        </footer>
    </body>
</html>
