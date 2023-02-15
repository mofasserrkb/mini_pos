<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sale extends Model
{
    use HasFactory;
    protected $fillable = [
      'tran_id' ,'product_id','pquantity','quantity','price',
        'stock','total_amount','customer_id','current_stock'
    ];

    public function product()
    {
       return $this->belongsTo(Product::class,'id');
    }
}
