<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{protected $table = 'products';
    protected $primaryKey = 'products_name';
    public $incrementing = false;
    protected $fillable = ['products_name', 'category', 'products_description'];
    use HasFactory;

}
