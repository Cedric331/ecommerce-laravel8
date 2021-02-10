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
      'image',
      'price',
  ];

  public function setReference()
  {
     return uniqid();
  }

  public function images()
  {
      return $this->hasMany(Image::class); 
  }
}
