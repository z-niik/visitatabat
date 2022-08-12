<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyColumnInDocuments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('documents', function (Blueprint $table) {
            $table->dropColumn('melli_image');
            $table->dropColumn('fish_image');
            $table->dropColumn('gozarname1');
            $table->dropColumn('gozarname2');
            $table->string('gozarname_photo')->after('user_id');
            $table->string('vaksan_photo')->after('user_id');
            $table->string('team_gozarname')->after('user_id');
            $table->string('team_vaksan')->after('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('documents', function (Blueprint $table) {
            //
        });
    }
}
