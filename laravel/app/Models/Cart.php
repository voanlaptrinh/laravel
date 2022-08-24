<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'carts';
    protected $fillable = [
    'price',
    'amount',
    'category',
    'product_id',
    'User_id',
    'total',
    ];
    public function product(){
        return $this->belongsTo(product::class);
    }
}
