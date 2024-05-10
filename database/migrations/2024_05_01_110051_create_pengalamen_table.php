<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengalamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengalaman', function (Blueprint $table) {
            $table->id('id_pengalaman');
            $table->integer('id_kandidat');
            $table->string('company_name', 100);
            $table->string('position', 100);
            $table->string('periode', 20);
            $table->string('salary', 20);
            $table->text('main_duties');
            $table->text('reason_for_leaving');
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
        Schema::dropIfExists('pengalaman');
    }
}
