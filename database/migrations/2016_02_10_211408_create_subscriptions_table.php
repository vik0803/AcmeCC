<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
          'subscriptions',
          function (Blueprint $table) {
              $table->increments('id');
              $table->integer('user_id')->unsigned()->index();
              $table->integer('product_id')->unsigned()->index();
              $table->integer('downloads_left')->unsigned();
              $table->timestamps();

              $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

              $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->onDelete('cascade');
          }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('subscriptions');
    }
}
