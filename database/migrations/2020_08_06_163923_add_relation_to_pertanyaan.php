<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationToPertanyaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pertanyaan', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('jawaban_tepat_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('jawaban_tepat_id')->references('id')->on('jawaban');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pertanyaan', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['jawaban_tepat_id']);
            $table->dropColumn(['user_id']);
            $table->dropColumn(['jawaban_tepat_id']);
        });
    }
}
