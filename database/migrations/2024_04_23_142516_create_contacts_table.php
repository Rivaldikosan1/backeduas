<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->string('code', 10)->primary();
            $table->string('name', 100)->nullable(false);
            $table->string('email', 100)->unique()->nullable(false);
            $table->string('phone', 20)->nullable();
            $table->string('mobile', 20)->nullable();
            $table->string('street')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->string('country')->nullable();
            $table->string('vat')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
