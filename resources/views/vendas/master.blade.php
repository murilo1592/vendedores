<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vendedores</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{url('/vendedores')}}">Lara<b>Vendas</b></a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="{{url('/vendedores')}}" class="nav-link">Vendedores</a>
            </li>
{{--            <li class="nav-item">--}}
{{--                <a href="{{url('/vendedor/novo')}}" class="nav-link">Cadastro Vendedores</a>--}}
{{--            </li>--}}
            <li class="nav-item">
                <a href="{{url('/vendas')}}" class="nav-link">Vendas</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container my-4">

    @yield('content')

</div>

<script src="{{asset('js/app.js')}}"></script>

</body>
</html>
