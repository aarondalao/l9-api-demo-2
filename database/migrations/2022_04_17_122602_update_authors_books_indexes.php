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
        Schema::table('author_book', static function(Blueprint $table) {
            $table->unique(['author_id', 'book_id'],'author_book_unique_index');
            $table->unique(['book_id','author_id'],'book_author_unique_index');
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //  this is where I end up BEFORE sail php artisan migrate:fresh --step

        Schema::table('author_book', static function(Blueprint $table){
            $table->dropUnique('author_book_unique_index');
            $table->dropUnique('book_author_unique_index');
        });
    }
};
