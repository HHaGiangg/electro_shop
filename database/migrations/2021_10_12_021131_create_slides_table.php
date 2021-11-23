<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slides', function (Blueprint $table) {
            $table->id();
            $table->string('s_title')->nullable();
            $table->string('s_description')->nullable();
            $table->string('s_link')->nullable();
            $table->string('s_text')->nullable();
            $table->string('s_banner')->nullable();
            $table->tinyInteger('s_sort')->default(0);
            $table->tinyInteger('s_status')->default(0);
            $table->tinyInteger('s_active')->default(1);
            $table->tinyInteger('s_target')->default(1);
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
        Schema::dropIfExists('slides');
    }
}
