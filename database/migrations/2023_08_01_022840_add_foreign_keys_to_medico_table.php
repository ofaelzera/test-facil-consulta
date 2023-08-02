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
        Schema::table('medico', function (Blueprint $table) {
            $table->foreign(['cidade_id'], 'medico_ibfk_1')->references(['id'])->on('cidade')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('medico', function (Blueprint $table) {
            $table->dropForeign('medico_ibfk_1');
        });
    }
};
