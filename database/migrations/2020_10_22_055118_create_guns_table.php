<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guns', function (Blueprint $table) {
            $table->id('gun_id')->comment('槍械編號');
            $table->string('gun_name')->comment('槍名')->unique();
            $table->string('gun_type')->comment('槍種');
            $table->string('caliber')->comment('口徑');
            $table->foreignId('company')->comment('公司名稱');
            $table->timestamps();
            $table->foreign('company')->references('company_name')->on('companys');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guns');
    }
}
