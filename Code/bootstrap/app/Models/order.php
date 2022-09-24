<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'duration',
        'price',
    ];

    public function get_user()
    {
        return $this->belongsTo(user::class);
    }


    public function get_product()
    {
        return $this->hasMany(product::class);
    }
}
