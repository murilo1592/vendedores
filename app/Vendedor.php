<?php

namespace Laradev;

use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    protected $table = 'vendedores';
    protected $fillable = ['name', 'email', 'data_inclusao', 'total_vendas'];

    public $timestamps = false;
}
