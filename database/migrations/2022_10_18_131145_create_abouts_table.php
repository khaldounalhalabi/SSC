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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('image') ;
            $table->string('title') ;
            $table->string('short_description') ;
            $table->string('long_description_title_color')->default('black') ;
            $table->text('long_description')->nullable() ;
            $table->string('long_description_image')->nullable() ;
            $table->string('long_description_sub_image')->nullable() ;
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
        Schema::dropIfExists('abouts');
    }
};
