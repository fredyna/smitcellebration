<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competitions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('team_name');
            $table->string('leader_name');
            $table->string('leader_gender');
            $table->string('email')->unique();
            $table->string('phone_number');
            $table->text('instance');
            $table->string('member_1')->nullable();
            $table->string('member_2')->nullable();
            $table->string('member_3')->nullable();
            $table->boolean('payment')->default(false);
            $table->boolean('attend')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('competitions');
    }
}
