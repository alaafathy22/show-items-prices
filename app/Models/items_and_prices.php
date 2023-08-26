<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Kyslik\ColumnSortable\Sortable;

class items_and_prices extends Authenticatable
{
    use HasFactory ,  Sortable;

    protected $table = "items_and_prices";

    protected $fillable = [
        'id',
        'id_item',
        'id_group',
        'name',
        'cost',
        'mount',
        'price',
        'price2',
        'price3'
    ];

}
