<?php

use App\Product;
use Illuminate\Database\Seeder;

/**
 *
 * @author      Joshua Bradshaw Matikinye
 * @email       joshua@samswebhosting.com
 * @copyright   Copyright (c) 2016 Sams Web Hosting
 */
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create(
          [
            'id' => 1,
            'name' => 'Basic Subscription',
            'price' => 200,
            'maximum_downloads' => 100,
          ]
        );

        Product::create(
          [
            'id' => 2,
            'name' => 'Standard Subscription',
            'price' => 250,
            'maximum_downloads' => 250,
          ]
        );

        Product::create(
          [
            'id' => 3,
            'name' => 'Awesome Subscription',
            'price' => 400,
            'maximum_downloads' => 600,
          ]
        );
    }
}
