<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ShortLink extends Model
{
    use HasFactory;

    protected $fillable = [
        'link',
        'code',
        'count',
    ];

    public static function generateUniqueCode(): string
    {
        $code = Str::random(6);

        if (static::whereCode($code)->first()) {
            return static::generateUniqueCode();
        }

        return $code;
    }

    public function getRouteKeyName(): string
    {
        return 'code';
    }
}
