@extends('vendas.master')

@section('content')

    <h2>Editar Vendedor</h2>
    <hr>

    <form action="{{url('/vendedor/edit', ['id' => $vendedor->id])}}" method="POST" autocomplete="off">

        <?= csrf_field(); ?>
        <?= method_field('PUT'); ?>

        <div class="row">

            <div class="form-group col-md-6">
                <label>Nome</label>
                <input type="text" name="name" id="name" class="form-control" value="<?= $vendedor->name; ?>"/>
            </div>

            <div class="form-group col-md-6">
                <label>Email</label>
                <input type="email" name="email" id="email" class="form-control" value="<?= $vendedor->email; ?>"/>
            </div>

        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>

    </form>

@endsection
