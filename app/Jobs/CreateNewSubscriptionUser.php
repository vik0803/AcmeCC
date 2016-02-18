<?php

namespace App\Jobs;

use App\Product;
use App\Subscription;
use App\User;

class CreateNewSubscriptionUser extends Job
{
    /**
     * Create a new job instance.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $user = User::create(
          [
            'username' => $this->data['username'],
            'email' => $this->data['email'],
            'date_of_birth' => $this->data['dob'],
            'password' => bcrypt($this->data['password']),
          ]
        );

        $product = Product::find($this->data['product_id']);

        Subscription::create(
          [
            'user_id' => $user->id,
            'product_id' => $product->id,
            'downloads_left' => $product->maximum_downloads,
          ]
        );
    }
}
