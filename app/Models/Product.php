<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $connection = 'main';

    protected $table = 'products';

    protected $primaryKey = 'product_id';

    protected $keyType = 'string';

    protected $casts = [
        'price' => 'int',
    ];
    
    protected $fillable = [
        'product_id',
        'code',
        'name',
        'price',
    ];
}
