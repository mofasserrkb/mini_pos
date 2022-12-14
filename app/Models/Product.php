<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','description','quantity','purchase_price',
        'sales_price','image'
    ];

     public function sales()
     {
        return $this->hasMany(Sale::class,'product_id');
     }
}
