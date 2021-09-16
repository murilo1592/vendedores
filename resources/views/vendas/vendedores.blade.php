@extends('vendas.master')

@section('content')

    <a class="btn btn-primary ml-auto" href="{{url('/vendedor/novo')}}">Novo Vendedor</a>
    <hr>

    <?php

    echo "<table class='table table-striped table-hover'>";

    echo "<thead class='bg-primary text-white'>
                <td><b>Nome</b></td>
                <td><b>Email</b></td>
                <td><b>Total Vendas</b></td>
                <td><b>Vendas</b></td>
                <td><b>Opções</b></td>
            </thead>";

    foreach ($vendedores as $vendedor) {

        $linkMore = url("/vendedor/vendas/{$vendedor->id}");
        $linkEditItem = url("/vendedor/edit/{$vendedor->id}");
        $linkInsertSale = url("/vendas/nova/{$vendedor->id}");
        $linkRemoveItem = url("/vendedor/remove/{$vendedor->id}");

        echo "<tr>
                    <td>{$vendedor->name}</td>
                    <td>{$vendedor->email}</td>
                    <td>{$vendedor->total_vendas}<t/d>
                    <td>
                        <a class='btn btn-sm btn-primary' href={$linkMore}>Ver Mais</a>
                        <a class='btn btn-sm btn-success' href={$linkInsertSale}>Cadastrar Venda</a>
                    </td>
                    <td>
                        <a class='btn btn-sm btn-primary' href={$linkEditItem}>Editar Vendedor</a>
                        <a class='btn btn-sm btn-outline-danger' href={$linkRemoveItem}>Remover Vendedor</a>
                    </td>
                </tr>";
    }

    echo "</table>";

    ?>

@endsection
