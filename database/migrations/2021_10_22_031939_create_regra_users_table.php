<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
class CreateRegraUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regra_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_perfume');
            $table->unsignedBigInteger('id_regra');
            $table->timestamps();
        });

        Schema::table('regra_users', function (Blueprint $table) {
            $table->foreign('id_perfume')->references('id')->on('produtos');
            $table->foreign('id_regra')->references('id')->on('regras');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regra_users');
    }
}
