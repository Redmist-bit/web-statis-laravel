<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationToKomentarJawaban extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('komentar_jawaban', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('jawaban_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('jawaban_id')->references('id')->on('jawaban');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('komentar_jawaban', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['jawaban_id']);
            $table->dropColumn(['user_id']);
            $table->dropColumn(['jawaban_id']);
        });
    }
}
