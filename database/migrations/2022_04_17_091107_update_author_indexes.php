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
        Schema::table('authors', function (Blueprint $table) {
            //
            $table->index(['given_name','family_name'],'given_family_name_index');
            $table->index(['family_name','given_name'],'family_given_name_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('authors', function (Blueprint $table) {
            //
            $table->dropIndex('given_family_name_index');
            $table->dropIndex('family_given_name_index');
        });
    }
};
