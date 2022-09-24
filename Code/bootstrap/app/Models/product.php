<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'color',
        'rating',
        'brand_id',
        'image_url',
        'user_id',
    ];

    public function get_user()
    {
        return $this->belongsTo(user::class);
    }

    public function get_brand()
    {
        return $this->belongsTo(brand::class);
    }


    public function get_order()
    {
        return $this->belongsTo(order::class);
    }

    public function get_comment()
    {
        return $this->hasMany(comment::class);
    }
}
