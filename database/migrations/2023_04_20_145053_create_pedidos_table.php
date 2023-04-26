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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id()->uniqid();
            $table->integer('identificacion')->comment('Numero identificacion del pedido');
            $table->string('usuario')->comment('Nombre de persona que realiza el pedido');
            $table->float('precio')->comment('Precio del pedido');
            $table->text('descripcion')->comment('Descripcion del pedido');
            $table->date('fecha_entrega')->comment('fecha de entrega del pedido');
            $table->enum('tienda',['D1','Ara','Exito'])->comment('Tienda fuente del pedido');
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
        Schema::dropIfExists('pedidos');
    }
};
