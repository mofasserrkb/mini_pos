<?php

namespace App\Models;

use App\Models\Sale;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
