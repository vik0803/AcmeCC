<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SubscriptionsTest extends TestCase
{
    /** @test **/
    public function it_registers_users_for_a_subscription()
    {

        //arrange
        $this->logInAsAdmin();
        //act

        $this->actingAs();
        $this->visit('/')
          ->see('Laravel 5');

        //assert
    }
}
