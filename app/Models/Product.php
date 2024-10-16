<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'admin_id',
        'category_id',
        'name',
        'in_stock',
        'is_available',
        'price',
        'discounted_price',
        'slug',
        'is_on_sale',
        'is_featured',
        'description',  
    ];

    public function productAttachments()
    {
        return $this->hasMany(ProductAttachment::class, 'product_id');
    }
}
