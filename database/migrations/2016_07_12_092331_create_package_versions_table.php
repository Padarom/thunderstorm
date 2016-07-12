<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackageVersionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_versions', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('package_id')->unsigned();

            $table->string('name');
            $table->string('updatetype');
            $table->string('versiontype');
            $table->string('license');
            
            $table->timestamp('timestamp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('package_versions');
    }
}