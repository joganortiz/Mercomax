<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo', 20);
            $table->binary('imagen');
            $table->string('nombre', 50);
            $table->string('slug');
            $table->decimal('precio', 10, 2);
            $table->bigInteger('stock_minimo');
            $table->text('descripcion');
            $table->string('cantidad', 10);
            $table->unsignedBigInteger('id_unidad');
            $table->foreign('id_unidad')->references('id')->on('unidades');
            $table->unsignedBigInteger('id_categoria');
            $table->foreign('id_categoria')->references('id')->on('categorias');
            $table->bigInteger('descuento')->nullable();
            $table->decimal('precio_descuento', 10, 2)->nullable();
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
        Schema::dropIfExists('productos');
    }
}
