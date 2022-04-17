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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title',128);
            $table->string('subtitle',255)->nullable();
            $table->text('description')->nullable();
            $table->string('isbn_10',10)->nullable();
            $table->string('isbn_13',13)->nullable();
            $table->unsignedMediumInteger('pages')->nullable();
            $table->unsignedMediumInteger('year_pub')->nullable();
            $table->unsignedSmallInteger('edition')->nullable();
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
        Schema::dropIfExists('books');
    }
};
