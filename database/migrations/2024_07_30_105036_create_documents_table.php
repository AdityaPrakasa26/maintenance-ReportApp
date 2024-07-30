<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->integer('size');
            $table->string('owner');
            $table->timestamp('modified');
            $table->timestamp('created');
            $table->string('download_permissions');
            $table->string('access');
            $table->timestamp('last_interaction');
            $table->string('last_interactor');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('documents');
    }
}
