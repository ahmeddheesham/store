<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'order_id', 'product_color_size_id', 'quantity', 'price', 'discount', 'created_at', 'updated_at'];
    protected $table = 'order_details';
}