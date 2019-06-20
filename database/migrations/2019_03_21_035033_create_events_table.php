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
            $table->bigIncrements('id');
            $table->string('title');
            $table->enum('type',['FireSide', 'iDeyaBrew', 'Hackathon', 'StartupWeekend', 'iDeyaHack', '20/20 Tech Community']);
            $table->date('date');
            $table->integer('expected_no');
            $table->integer('actual_no');
            $table->string('guestspeaker')->nullable();
            $table->float('budget');
            $table->enum('status',['upcoming','ongoing','done','cancelled','pending'])->default('pending');
            $table->float('reg_fee');
            $table->integer('no_days');
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
        Schema::dropIfExists('events');
    }
}
