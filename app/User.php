<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'username',
      'email',
      'date_of_birth',
      'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
      'password',
      'remember_token',
    ];

    public function permissions()
    {
        return $this->belongsToMany(
          'App\Permission',
          'user_permissions',
          'user_id',
          'permission_id'
        );
    }
}

