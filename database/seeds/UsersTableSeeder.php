<?php

use App\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


/**
 *
 * @author      Joshua Bradshaw Matikinye
 * @email       joshua@samswebhosting.com
 * @copyright   Copyright (c) 2016 Sams Web Hosting
 */
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createDefaultUser();
        $faker = Faker::create();

        foreach (range(2, 10) as $index) {

            User::create(
              [
                'id' => $index,
                'username' => $faker->userName,
                'email' => $faker->email,
                'date_of_birth' => $faker->dateTimeBetween(
                  '-30 years',
                  '-20 years'
                ),
                'password' => bcrypt(str_random(10)),
                'remember_token' => str_random(10),
              ]
            );
        }
    }

    private function createDefaultUser()
    {
        User::create(
          [
            'id' => 1,
            'username' => 'joshuamat',
            'email' => 'jbmatikinye@gmail.com',
            'date_of_birth' => '1982-10-08',
            'password' => '$2y$10$oT76/dGj5PcPm1LxphH9Teq.l8KuO1Y2gdCif9LRuy4tDVuy5lqYW',
            'remember_token' => '',
          ]
        );
    }
}