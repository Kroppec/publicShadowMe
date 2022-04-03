<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('profession')->nullable();
            $table->string('organisation')->nullable();
            $table->string('task_1')->nullable();
            $table->string('task_2')->nullable();
            $table->string('task_3')->nullable();
            $table->string('step_1')->nullable();
            $table->string('step_2')->nullable();
            $table->string('step_3')->nullable();
            $table->integer('radio_1')->nullable();
            $table->string('comment_1')->nullable();
            $table->integer('radio_2')->nullable();
            $table->string('comment_2')->nullable();
            $table->integer('radio_3')->nullable();
            $table->string('comment_3')->nullable();
            $table->integer('radio_4')->nullable();
            $table->string('comment_4')->nullable();
            $table->integer('radio_5')->nullable();
            $table->string('comment_5')->nullable();
            $table->integer('radio_6')->nullable();
            $table->string('comment_6')->nullable();
            $table->string('analysis')->nullable();
            $table->boolean('submitted')->default(false);
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
        Schema::dropIfExists('submission');
    }
};
