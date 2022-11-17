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
        Schema::create('recieved_emails', function (Blueprint $table) {
            $table->id();
            $table->text('body') ;
            $table->string('name')->nullable() ;
            $table->string('email') ;
            $table->string('subject')->nullable() ;
            $table->date('date') ;
            $table->string('status')->nullable()->default(null) ;
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
        Schema::dropIfExists('recieved_emails');
    }
};
