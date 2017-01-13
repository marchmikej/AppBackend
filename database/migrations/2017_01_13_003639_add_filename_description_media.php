<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFilenameDescriptionMedia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('media', function (Blueprint $table) {
            $table->string('description');
            $table->string('filename');
            $table->integer('file_type_id');
            $table->dropColumn('user_id');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('media', function(Blueprint $table) {
            $table->dropColumn('description');
            $table->dropColumn('filename');
            $table->string('user_id');
            $table->dropColumn('file_type_id');
        });
    }
}
