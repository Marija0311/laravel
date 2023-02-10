<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IzmenaNazivaKozmeticars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kozmeticars', function (Blueprint $table) {
            Schema::rename('kozmeticars', 'kozmeticari');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kozmeticars', function (Blueprint $table) {
            Schema::rename('kozmeticari', 'kozmeticars');
        });
    }
}