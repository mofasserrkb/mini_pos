<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id','pquantity','quantity','price',
        'stock','total_amount','customer_id','current_stock'
    ];
    public function products()
    {
       return $this->belongsTo(Product::class,'id');
    }
}
