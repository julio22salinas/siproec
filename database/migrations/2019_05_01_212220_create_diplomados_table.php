<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiplomadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diplomados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_diplomado');
            $table->string('name_diplomado');
            $table->bigInteger('id_profesor');
            $table->bigInteger('cupos_restantes');
            $table->enum('horario',['Lunes 08:00-10:00','Martes 16:00-18:00', 'Miercoles 09:00-11:00']);    
            $table->enum('salon',['A4-301','A1-405','A3-202']);
            $table->enum('estado',['Habilitado','Deshabilitado']);    

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diplomados');
    }
}
