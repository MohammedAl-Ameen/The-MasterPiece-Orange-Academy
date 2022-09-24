<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;


    protected $fillable = [
        'content',
        'user_id',
        'product_id',
    ];

    public function get_user()
    {
        return $this->belongsTo(user::class);
    }

    public function get_product()
    {
        return $this->belongsTo(product::class);
    }
}
