@extends('vendas.master')

@section('content')

    <h2>Cadastro de Vendas</h2>
    <p>Vendedor &raquo; <b><?= $vendedor->name; ?></b></p>
    <hr>

    <form action="{{url('/vendas/nova', ['vendedor_id' => $vendedor])}}" method="POST" autocomplete="off">

        <?= csrf_field(); ?>

        <div class="row">

            <div class="form-group col-md-6">
                <label>Nome Comprador</label>
                <input type="text" name="custumer_name" id="custumer_name" class="form-control"/>
            </div>

            <div class="form-group col-md-6">
                <label>Email Comprador</label>
                <input type="email" name="email_custumer" id="email_custumer" class="form-control"/>
            </div>

            <div class="form-group col-md-6">
                <label>Preço de Venda</label>
                <input type="text" name="sale_price" id="sale_price" class="form-control"/>
            </div>

            <div class="form-group col-md-6">
                <label>Data da Venda</label>
                <input type="text" name="data_sale" id="data_sale" class="form-control"/>
            </div>

        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>

    </form>

@endsection
