<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{protected $table = 'products';
    protected $primaryKey = 'product_name';
    public $incrementing = false;
    protected $fillable = ['product_name', 'category', 'product_description'];
    use HasFactory;

}
