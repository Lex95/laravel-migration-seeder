<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFlightColumnPrenotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('prenotations', function (Blueprint $table) {
            $table->foreignId('id_volo')->after("user_id");
            $table->char('compagnia', 255)->nullable();
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
            $table->dropColumn("id_volo");
            $table->dropColumn("compagnia");
        });
    }
}
