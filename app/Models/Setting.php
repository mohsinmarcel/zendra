<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $table = 'settings';
    protected $fillable = [
        'key',
        'value',
        
    ];

    public static function getOption($key, $default = null)
    {
        $setting = self::where('key', '=', $key)->first();
        if ( ! $setting instanceof self) {
            return $default;
        } else {
            return $setting->value;
        }
    }
}
