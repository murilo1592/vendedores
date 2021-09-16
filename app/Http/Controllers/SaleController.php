<?php

namespace Laradev\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laradev\Sale;
use Laradev\Vendedor;

class SaleController extends Controller
{
    public function index()
    {
        $vendas = Sale::all();
        return view('purchases.index')->with('vendas', $vendas);
    }

    public function create($id)
    {
        $vendedor = Vendedor::find($id);

        if (empty($vendedor)) {

            return redirect()->action('VendedoresController@index');
        }

        return view('purchases.create')->with('vendedor', $vendedor);
    }

    public function store(Request $request, $vendedor_id)
    {
        $venda = [
            'vendedor_id' => (int)$vendedor_id,
            'sale_price' => $request->sale_price,
            'custumer_name' => $request->custumer_name,
            'email_custumer' => $request->email_custumer,
            'data_sale' => date('Y-m-d H:m:i', strtotime($request->data_sale)),
            'status' => 'Aprovado'
        ];

        Sale::create($venda);

        return redirect()->action('SaleController@index');
    }

    public function show($vendedor_id)
    {
        $vendas = DB::select('SELECT s.*, v.name FROM sales s
                                    INNER JOIN  vendedores v ON v.id = s.vendedor_id
                                    WHERE vendedor_id = ? ORDER BY s.id', [$vendedor_id]);

        if (empty($vendas)) {

            return redirect()->action('VendedoresController@index');
        }

        return view('purchases.sales')->with('vendas', $vendas);
    }

    public function aprovado($venda_id)
    {
        $venda = Sale::find($venda_id);

        $venda->status = 'Aprovado';

        $venda->save();

        return redirect()->action('SaleController@show', $venda->vendedor_id);
    }

    public function faturado($venda_id)
    {
        $venda = Sale::find($venda_id);

        $venda->status = 'Faturado';

        $venda->save();

        return redirect()->action('SaleController@show', $venda->vendedor_id);
    }

    public function enviado($venda_id)
    {
        $venda = Sale::find($venda_id);

        $venda->status = 'Enviado';

        $venda->save();

        return redirect()->action('SaleController@show', $venda->vendedor_id);
    }

    public function entregue($venda_id)
    {
        $venda = Sale::find($venda_id);

        $venda->status = 'Entregue';

        $venda->save();

        return redirect()->action('SaleController@show', $venda->vendedor_id);
    }

    public function cancelado($venda_id)
    {
        $venda = Sale::find($venda_id);

        $venda->status = 'Cancelado';

        $venda->save();

        return redirect()->action('SaleController@show', $venda->vendedor_id);
    }
}
