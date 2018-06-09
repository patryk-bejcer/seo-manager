<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebsitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('websites', function (Blueprint $table) {
            $table->increments('id');
            $table->string('website_name')->unique();
            $table->string('cms_type');
            $table->string('db_user');
            $table->string('db_name');
            $table->string('db_pass')->nullable();
            $table->string('db_host');
            $table->string('db_port');
            $table->string('db_prefix')->nullable();
            $table->string('db_charset');
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
        Schema::dropIfExists('websites');
    }
}
