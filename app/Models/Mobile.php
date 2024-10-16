<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobile extends Model
{
    use HasFactory;

    protected $table = 'mobiles';
    protected $fillable = [
        'admin_id',
        'brand',
        'slug',
        'model',
        'color',
        'price',
        'images',
        'description',
    ];

    public function getEncodedImagesAttribute()
    {
        return json_decode($this->images);
    }
}
