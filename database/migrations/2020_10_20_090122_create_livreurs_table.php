<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLivreursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('livreurs', function (Blueprint $table) {


        $table->increments('id');

        $table->string ('Nom_Personnel',150);
        $table->string ('magazine',150);
        $table->string ('E_Mail',150);
        $table->string ('ville',150);
        $table->string ('Phone',150);
        $table->string ('RC',150);
        $table->string ('RIB',150);
        $table->string ('Address');
        $table->longText ('CIN_Recto');
        $table->longText ('CIN_versso');
        $table->longText ('Site_Web');
        

        $table->integer('user_id')->unsigned();

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
      Schema::dropIfExists('livreurs');
    }
  }
