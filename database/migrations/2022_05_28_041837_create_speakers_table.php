<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpeakersTable extends Migration
{

    public function up()
    {
        Schema::create('speakers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->references('id')->on('project')->onDelete('cascade');
            $table->string('speaker_name');
            $table->string('speaker_education')->nullable();
            $table->string('speaker_title')->nullable();
            $table->string('speaker_desc')->nullable();
            $table->string('speaker_day')->nullable();
            $table->string('speaker_subject')->nullable();
            $table->text('speaker_text')->nullable();
            $table->string('slug')->nullable();

            $table->string('seo_title', 250)->nullable();
            $table->string('seo_desc', 250)->nullable();
            $table->string('seo_key', 250)->nullable();

            $table->boolean('status')->default(1);
            $table->integer('rank')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('speakers');
    }
}
