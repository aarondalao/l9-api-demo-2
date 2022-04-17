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
        Schema::table('books', function (Blueprint $table) {
            //
            $table->index(['title','isbn_10','isbn_13_print','isbn_13_ebook'],
                'title_isbn_10_13_index');
            $table->index(['isbn_10'],'isbn_10_index');
            $table->index(['isbn_13_print'],'isbn_13_print_index');
            $table->index(['isbn_13_ebook'],'isbn_13_ebook_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('books', function (Blueprint $table) {
            //
            $table->dropIndex('title_isbn_10_13_index');
            $table->dropIndex('isbn_10_index');
            $table->dropIndex('isbn_13_print_index');
            $table->dropIndex('isbn_13_ebook_index');
        });
    }
};
