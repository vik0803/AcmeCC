<?php

namespace App\Http\Controllers\Api;

use App\Subscription;
use App\Http\Requests;
use App\Transformers\SubscriptionsTransformer;

/**
 * Class SubscriptionsController
 *
 * @package App\Http\Controllers
 */
class SubscriptionsController extends ApiController
{
    /**
     * @return mixed
     */
    public function index()
    {
        $subscriptions = Subscription::all();

        return $this->returnResourceCollectionSuccess(
          $subscriptions->all(),
          new SubscriptionsTransformer()
        );
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function show($id)
    {
        $subscription = Subscription::find($id);

        if (!$subscription) {

            return $this->returnNotFoundResponse('Subscription not found');
        }

        return $this->returnResourceSuccess(
          $subscription,
          new SubscriptionsTransformer()
        );
    }

}
