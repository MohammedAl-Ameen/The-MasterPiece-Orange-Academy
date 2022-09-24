<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public $timestamps = false;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'phone',
        'email',
        'city',
        'password',
        'image_url',
    ];


    public function get_product()
    {
        return $this->hasMany(product::class);
    }

    public function get_order()
    {
        return $this->hasMany(order::class);
    }

    public function get_comment()
    {
        return $this->hasMany(comment::class);
    }

    public function get_appeal()
    {
        return $this->hasMany(appeal::class);
    }
}
