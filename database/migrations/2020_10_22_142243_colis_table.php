<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ColisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string ('Nom_destinataire',150);
            $table->string ('prénom_destinataire',150);
            $table->string ('Adresse_destinataire',150);
            $table->string ('Ville_destinataire',150);
            $table->string ('phon_destinataire',150);
            $table->string ('statu',150);
            $table->string ('prix',150);



            

            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('colis');
    }
}
