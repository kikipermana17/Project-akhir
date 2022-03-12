<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWisatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wisatas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kategori_id')->unsigned();
            $table->string('nama_wisata');
            $table->string('alamat');
            $table->longtext('deskripsi');
            $table->string('fasilitas');
            $table->string('slug');
            $table->bigInteger('biro_id')->unsigned();
            $table->string('cover')->nullable();
            // fk kategori
            $table->foreign('kategori_id')->references('id')
                ->on('kategoris')->onUpdate('cascade')
                ->onDelete('cascade');
            //fk biroperjalanan
            $table->foreign('biro_id')->references('id')
                ->on('biros')->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('wisatas');
    }
}
