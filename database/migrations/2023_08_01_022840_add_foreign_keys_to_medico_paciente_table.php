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
        Schema::table('medico_paciente', function (Blueprint $table) {
            $table->foreign(['paciente_id'], 'medico_paciente_ibfk_2')->references(['id'])->on('paciente')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['medico_id'], 'medico_paciente_ibfk_1')->references(['id'])->on('medico')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('medico_paciente', function (Blueprint $table) {
            $table->dropForeign('medico_paciente_ibfk_2');
            $table->dropForeign('medico_paciente_ibfk_1');
        });
    }
};
