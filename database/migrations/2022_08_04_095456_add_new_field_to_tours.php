<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewFieldToTours extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tours', function (Blueprint $table) {
            $table->string('depature_time')->after('name_start_day');
            $table->string('photo')->after('depature_time');
            $table->string('transportaion')->after('photo');
            $table->string('checkout_type')->after('transportaion');
            $table->string('modir_karvan_name')->after('address');
            $table->string('modir_karvan_phone_number')->after('modir_karvan_name');
            $table->string('rohani_karvan_name')->after('modir_karvan_phone_number');
            $table->string('rohani_karvan_phone_number')->after('rohani_karvan_name');
            $table->string('tour_name')->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tours', function (Blueprint $table) {
            //
        });
    }
}
