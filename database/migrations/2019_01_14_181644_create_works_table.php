<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('company_id')->nullable();
            $table->text('description')->nullable();
            $table->text('apply')->nullable();
            $table->integer('active')->default(1);
            $table->integer('important')->default(0);
            $table->integer('highlight')->default(0);
            $table->integer('contract')->default(0);
            $table->dateTime('from')->nullable();
            $table->integer('job_posted')->default(0);
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
        Schema::dropIfExists('works');
    }
}
