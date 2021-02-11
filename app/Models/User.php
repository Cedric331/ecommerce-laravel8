<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends \TCG\Voyager\Models\User
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lastname',
        'firstname',
        'role_id',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


   public function getFullName()
    {
       return $this->firstname.' '.$this->lastname;
    }

    public function isAdmin()
    {
       if ($this->role_id == 1) {
          return true;
       }
       return false;
    }

    public function cart()
    {
      return $this->hasMany(Cart::class);
    }

    public function cartCount()
    {
      return $this->hasMany(Cart::class)->count();
    }
}
