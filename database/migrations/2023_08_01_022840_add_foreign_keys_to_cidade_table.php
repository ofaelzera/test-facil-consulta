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
        Schema::table('cidade', function (Blueprint $table) {
            $table->foreign(['estado_id'], 'cidade_ibfk_1')->references(['id'])->on('estado')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cidade', function (Blueprint $table) {
            $table->dropForeign('cidade_ibfk_1');
        });
    }
};
