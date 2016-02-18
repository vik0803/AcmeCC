<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Class Subscription
 *
 * @package App
 */
class Subscription extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
      'user_id',
      'product_id',
      'downloads_left',
    ];

    /**
     * @return BelongsTo
     */
    public function product()
    {
        return $this->belongsTo('App\Product', 'product_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }



}
