<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocarchivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docarchives', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->mediumText('file')->nullable();
            $table->mediumText('type')->nullable();
            $table->integer('taille');
            $table->string('departement');
            $table->date('date');
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
        Schema::dropIfExists('docarchives');
    }
}
