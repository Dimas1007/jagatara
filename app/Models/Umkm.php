<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    protected $fillable = [
        'business_name',
        'owner_name',
        'phone',
        'address',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}