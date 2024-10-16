<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAttachment extends Model
{
    use HasFactory;
    protected $table = 'product_attachments';
    protected $fillable = [
        'product_id',
        'attachment',
        'attachment_type',

    ];
}
