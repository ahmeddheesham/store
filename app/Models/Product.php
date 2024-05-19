<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'name', 'description', 'image', 'price', 'discount_price', 'category_id', 'created_at', 'updated_at'];
    protected $table = 'products';

    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
