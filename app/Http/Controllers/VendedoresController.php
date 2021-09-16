<?php

namespace Laradev\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laradev\Sale;
use Laradev\Vendedor;

class VendedoresController extends Controller
{
    public function index()
    {
        $vendedores = Vendedor::all();

        foreach ($vendedores as $vendedor){

            $vendas = DB::select('SELECT * FROM sales WHERE vendedor_id = ?', [$vendedor->id]);

            $vendedor->total_vendas = !empty($vendas) ? count($vendas) : 0;
        }

        return view('vendas.vendedores')->with('vendedores', $vendedores);
    }

    public function create()
    {
        return view('vendas.create');
    }

    public function store(Request $request)
    {
        $vendedor = [
            'name' => $request->name,
            'email' => $request->email,
            'data_inclusao' => date('Y-m-d H:m:i'),
            'total_vendas' => 0
        ];

        Vendedor::create($vendedor);

        return redirect()->action('VendedoresController@index');
    }

    public function show($id)
    {
        $vendedor = Vendedor::find($id);

        if (empty($vendedor)) {

            return redirect()->action('VendedoresController@index');
        }

        return view('vendas.edit')->with('vendedor', $vendedor);
    }

    public function edit(Request $request, $id)
    {
        $vendedor = Vendedor::find($id);

        if (empty($vendedor)) {

            return redirect()->action('VendedoresController@index');
        }

        $vendedor->name = $request->name;
        $vendedor->email = $request->email;

        $vendedor->save();

        return redirect()->action('VendedoresController@index');
    }

    public function destroy($id)
    {
        DB::delete('DELETE FROM vendedores WHERE id = ?', [$id]);

        return redirect()->action('VendedoresController@index');
    }
}
