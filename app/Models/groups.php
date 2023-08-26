<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class groups extends Authenticatable
{
    use HasFactory;
    protected $table = "groups";

    protected $fillable = [
        'id',
        'name',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

}
