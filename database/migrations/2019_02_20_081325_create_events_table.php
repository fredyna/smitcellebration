<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('gender');
            $table->string('instance');
            $table->string('email');
            $table->string('phone_number');
            $table->text('address');
            $table->string('type');
            $table->string('workshop')->nullable();
            $table->boolean('payment')->default(false);
            $table->boolean('attend')->default(false);
            $table->timestamps();

            $table->unique(['email', 'type']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
