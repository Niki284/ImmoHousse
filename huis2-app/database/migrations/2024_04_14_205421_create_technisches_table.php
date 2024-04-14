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
        Schema::create('technisches', function (Blueprint $table) {
            $table->id();
            $table->integer('woning_id');
            $table->string('bouwjaar');
            $table->string('algemene staat');
            $table->string('renovatieverplichting');
            $table->string('overstromingsgevoeligheid');
            $table->string('afgebakende_zone');
            $table->string('G(ebouw)-score');
            $table->string('P(erceel)-score');
            $table->string('certificaat_elektriciteit');
            $table->string('lift');
            $table->string('EPC');
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
        Schema::dropIfExists('technisches');
    }
};
