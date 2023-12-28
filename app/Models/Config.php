<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Cache;

class Config extends Model
{
    use HasFactory;

    public const CONFIG_KEY = 'config_settings';


    protected static function boot()
    {
        parent::boot();

        static::updated(function(Config $config) {
            Cache::delete(self::CONFIG_KEY);

            Cache::rememberForever(self::CONFIG_KEY, function () use($config) {
                return $config;
              });
        });

    }
}
