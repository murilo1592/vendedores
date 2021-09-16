@extends('vendas.master')

@section('content')

    <h2>Formulário de Cadastro</h2>
    <hr>

    <form action="{{url('/vendedor/novo')}}" method="POST" autocomplete="off">

        <?= csrf_field(); ?>

        <div class="row">

            <div class="form-group col-md-6">
                <label>Nome</label>
                <input type="text" name="name" id="name" class="form-control"/>
            </div>

            <div class="form-group col-md-6">
                <label>Email</label>
                <input type="email" name="email" id="email" class="form-control"/>
            </div>

        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>

    </form>

@endsection
