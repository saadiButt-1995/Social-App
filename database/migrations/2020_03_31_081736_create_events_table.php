<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->integer('business_id');
            $table->string('name');
            $table->text('description');
            $table->float('latitude');
            $table->float('longitude');
            $table->string('image')->nullable();
            $table->integer('status');
            $table->timestamp('event_date');
            $table->time('event_time');
            $table->string('price');
            $table->integer('created_by');
            $table->integer('shared_status');
            $table->integer('is_deleted')->nullable();
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
