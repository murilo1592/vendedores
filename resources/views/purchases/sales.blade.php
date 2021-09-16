@extends('vendas.master')

@section('content')
    <h4>Lista de Vendas &raquo; <b><?= $vendas[0]->name; ?></b></h4>
    <p>Atualizado em: &raquo; <?= date('d/m/Y H:m'); ?></p>
    <hr>

    <?php

    echo "<table class='table table-striped table-hover'>";

    echo "<thead class='bg-primary text-white'>
                <td><b>Data Compra</b></td>
                <td><b>Preço</b></td>
                <td><b>Comprador</b></td>
                <td><b>Status</b></td>
                <td><b>Alterar</b></td>
            </thead>";

    foreach ($vendas as $venda) {

        $dateSale = date('d/m/Y', strtotime($venda->data_sale));
        $priceSale = number_format($venda->sale_price, "2", ", ", ".");

        /* LINKS ALTERAÇÃO DE STATUS */
        $linkAlterarStatusAprovado = url('vendas/atualizar/aprovado/' . $venda->id);
        $linkAlterarStatusFaturado = url('vendas/atualizar/faturado/' . $venda->id);
        $linkAlterarStatusEnviado = url('vendas/atualizar/enviado/' . $venda->id);
        $linkAlterarStatusEntregue = url('vendas/atualizar/entregue/' . $venda->id);
        $linkAlterarStatusCancelado = url('vendas/atualizar/cancelado/' . $venda->id);

        echo "<tr>
                    <td>{$dateSale}</td>
                    <td>R$ {$priceSale}</td>
                    <td>{$venda->custumer_name}</td>
                    <td>{$venda->status}</td>
                    <td>
                        <a class='btn btn-sm btn-success' href={$linkAlterarStatusAprovado}>Aprovado</a>
                        <a class='btn btn-sm btn-primary' href={$linkAlterarStatusFaturado}>Faturado</a>
                        <a class='btn btn-sm btn-warning' href={$linkAlterarStatusEnviado}>Enviado</a>
                        <a class='btn btn-sm btn-secondary' href={$linkAlterarStatusEntregue}>Entregue</a>
                        <a class='btn btn-sm btn-danger' href={$linkAlterarStatusCancelado}>Cancelado</a>
                    </td>
                </tr>";
    }

    echo "</table>";

    ?>

@endsection
