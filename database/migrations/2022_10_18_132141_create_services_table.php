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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title') ;
            $table->string('arabic_title') ;
            $table->string('short_description') ;
            $table->string('arabic_short_description') ;
            $table->text('long_description')->nullable() ;
            $table->text('arabic_long_description')->nullable() ;
            $table->string('long_description_title_color')->default('white') ;
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
        Schema::dropIfExists('services');
    }
};
