<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('adresse');
            $table->string('email')->unique();
            $table->string('telephone');
            $table->string('specialite');
            $table->string('niveauEtude');
            $table->string('description');
            $table->foreignId('users_id')->constrained("users");
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
        Schema::table("cvs",function(Blueprint $table){
            $table->dropConstrainedForeignId("users_id");
        });
        Schema::dropIfExists('cvs');
    }
}
