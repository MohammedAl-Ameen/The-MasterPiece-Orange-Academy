<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image_url',
    ];

    public function get_brand()
    {
        return $this->belongsToMany(brand::class);
    }
}
