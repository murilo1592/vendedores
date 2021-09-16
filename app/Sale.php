<?php

namespace Laradev;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $table = 'sales';
    protected $fillable = [
        'vendedor_id',
        'sale_price',
        'custumer_name',
        'email_custumer',
        'data_sale',
        'status'
    ];

    public $timestamps = false;
}
