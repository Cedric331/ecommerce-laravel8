<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'name',
      'reference',
      'description',
      'price',
  ];

  public function setReference()
  {
     return uniqid();
  }

  public function imagePrincipal()
  {
      return $this->hasOne(Image::class); 
  }
}
