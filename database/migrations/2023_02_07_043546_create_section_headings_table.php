<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionHeadingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_headings', function (Blueprint $table) {
            $table->id();
            $table->string('about')->nullable();
            $table->string('skill')->nullable();
            $table->string('services')->nullable();
            $table->string('services_sort_des')->nullable();
            $table->string('protfolio')->nullable();
            $table->string('protfolio_sort_des')->nullable();
            $table->string('contact')->nullable();
            $table->string('contact_sort_des')->nullable();
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
        Schema::dropIfExists('section_headings');
    }
}
