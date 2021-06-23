<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePrenotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('prenotations', function (Blueprint $table) {
            $table->foreignId('user_id');
            $table->char('luogo_partenza', 255);
            $table->dateTime('partenza_at', 4);
            $table->char('luogo_arrivo', 255);
            $table->dateTime('arrivo_at', 4);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('prenotations', function (Blueprint $table) {
            $table->dropColumn('user_id');
            $table->dropColumn('luogo_partenza');
            $table->dropColumn('partenza_at');
            $table->dropColumn('luogo_arrivo');
            $table->dropColumn('arrivo_at');
        });
    }
}
