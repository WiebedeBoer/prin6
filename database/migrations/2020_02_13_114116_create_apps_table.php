<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apps', function (Blueprint $table) {
            $table->bigIncrements('app_id');
            $table->string('app_name');  
            $table->unsignedBigInteger('app_status');          
            $table->string('app_url');
            $table->text('app_remarks')->nullable();
            $table->timestamps();            
            //foreign
            //$table->foreign('app_status')->references('app_status_id')->on('app_status');
            //ALTER TABLE `apps` ADD FOREIGN KEY (`app_status`) REFERENCES `app_status`(`app_status_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apps');
    }
}
