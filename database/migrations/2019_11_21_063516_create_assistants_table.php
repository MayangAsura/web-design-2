<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssistantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assistants', function (Blueprint $table) { //nama table assistants
            $table->bigIncrements('id');
            $table->string('hari');
            $table->string('ruangan');
            $table->time('jam');
            $table->string('matakuliah');
            $table->char('sks',2);
            $table->char('kelas',2);
            $table->string('namaasisten');
            $table->timestamps(); //untuk mengisi create at dan update at jadi bisa melacak kapan data terbuat dan teredit
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assistants');
    }
}
