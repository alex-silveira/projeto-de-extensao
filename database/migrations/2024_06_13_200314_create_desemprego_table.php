<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Desemprego', function (Blueprint $table) {
            $table->bigIncrements('id');  
            $table->unsignedBigInteger('user_id');       
            $table->string('firstname');
            $table->string('lastname');
            $table->string('phone');
            $table->date('birthdate');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('region');
            $table->string('cep');
            $table->string('education');
            $table->string('familyincome');
            $table->string('course');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users'); // Nome da chave strang: stores_user_id_foreign
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Desemprego');
    }
};
