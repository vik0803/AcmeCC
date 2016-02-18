<?php
/**
 *
 * @author      Joshua Bradshaw Matikinye
 * @email       joshua@samswebhosting.com
 * @copyright   Copyright (c) 2016 Sams Web Hosting
 */

namespace App\Transformers;

use Illuminate\Database\Eloquent\Model;


/**
 * Class SubscriptionsTransformer
 *
 * @package Transformers
 */
class SubscriptionsTransformer extends Transformer
{
    /**
     * @param Model $subscription
     *
     * @return array
     */
    public function transform(Model $subscription)
    {
        return [
          'subscription_id' => $subscription->id,
          'title' => $subscription->product->name,
          'user' => $subscription->user->username,
          'max_downloads' => $subscription->product->maximum_downloads,
          'downloads_left' => $subscription->downloads_left,
          'price' => $subscription->product->price,
          'started' => $subscription->created_at,
        ];
    }
}
