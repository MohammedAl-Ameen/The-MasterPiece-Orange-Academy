<?php

namespace App\Models;

use App\Models\product;
use App\Models\category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image_url',
    ];

    public function get_category()
    {
        return $this->belongsToMany(category::class);
    }

    public function get_product()
    {
        return $this->hasMany(product::class);
    }
}
