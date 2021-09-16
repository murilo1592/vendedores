@extends('vendas.master')

@section('content')

    <h3>Listagem Vendas</h3>
    <p>Atualizado em: &raquo; <?= date('d/m/Y H:m'); ?></p>
    <hr>

    <?php

    echo "<table class='table table-striped table-hover'>";

    echo "<thead class='bg-primary text-white'>
                <td><b>Data Compra</b></td>
                <td><b>Preço</b></td>
                <td><b>Comprador</b></td>
                <td><b>Status</b></td>
            </thead>";

    foreach ($vendas as $venda) {

        $dateSale = date('d/m/Y', strtotime($venda->data_sale));
        $priceSale = number_format($venda->sale_price, "2", ", ", ".");

        echo "<tr>
                    <td>{$dateSale}</td>
                    <td>R$ {$priceSale}</td>
                    <td>{$venda->custumer_name}</td>
                    <td>{$venda->status}</td>
                </tr>";
    }

    echo "</table>";

    ?>

@endsection
