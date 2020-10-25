<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvatarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avatars', function (Blueprint $table) {
            // $table->id();
            $table->string('telefono',25);
            $table->text('avatar');
            // $table->timestamps(); lo tolgo da qui e metto public $timestamps =false; in Avatar.php il nostro model

            $table->unsignedBigInteger('user_id'); //creazione colonna : campo user_id
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade'); //creazione relazione con tabella user
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avatars');
    }
}
