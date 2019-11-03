<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRate3ToRating extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rating', function (Blueprint $table) {
            $table->enum('rate3', [0,1,2,3,4,5,6,7,8,9,10])->after('rate2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rating', function (Blueprint $table) {
            //
        });
    }
}
