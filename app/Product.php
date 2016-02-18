<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'name',
      'price',
      'maximum_downloads',
    ];

    /**
     * @return BelongsToMany
     */
    public function User()
    {
        return $this->belongsToMany(
          'App\User',
          'subscriptions',
          'user_id',
          'product_id'
        );
    }

}
