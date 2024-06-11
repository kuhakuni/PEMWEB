<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {
  use HasFactory;
  protected $fillable = [
    'email',
    'username',
    'password',
    'role',
  ];

  protected $hidden = [
    'password',
    'remember_token',
  ];

  public $timestamps = false;

  // public function setPasswordAttribute($value)
  // {
  //     $this->attributes['password'] = bcrypt($value);
  // }
}
