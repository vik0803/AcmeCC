<?php

use App\Product;
use App\Subscription;
use App\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

/**
 *
 * @author      Joshua Bradshaw Matikinye
 * @email       joshua@samswebhosting.com
 * @copyright   Copyright (c) 2016 Sams Web Hosting
 */
class SubscriptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();
        $userIds = User::lists('id');
        $productIds = Product::lists('id');

        foreach (range(1, 10) as $index) {

            Subscription::create(
              [
                'id' => $index,
                'user_id' => $faker->randomElement($userIds->toArray()),
                'product_id' => $faker->randomElement($productIds->toArray()),
                'downloads_left' => $faker->randomNumber(2),
              ]
            );
        }
    }
}