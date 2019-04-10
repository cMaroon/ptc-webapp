<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_information', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('profile_photo')->default('default.svg');
            $table->string('id_admin_num')->unique();
            $table->string('firstname');
            $table->string('middlename')->nullable();
            $table->string('lastname');
            $table->string('suffixname')->nullable();
            $table->string('admin_type')->nullable();
            $table->string('sex')->nullable();
            $table->string('civil_status')->nullable();
            $table->string('citizenship')->nullable();
            $table->string('birthplace')->nullable();
            $table->string('religion')->nullable();
            $table->string('dob')->nullable();
            $table->string('ca_st_num')->nullable();
            $table->string('ca_st_name')->nullable();
            $table->string('ca_subd')->nullable();
            $table->string('ca_brgy')->nullable();
            $table->string('ca_city')->nullable();
            $table->string('ca_province')->nullable();
            $table->integer('ca_zipcode')->nullable();
            $table->integer('cd_telno')->nullable();
            $table->string('cd_mobno')->nullable();
            $table->string('cd_email')->unique();
            $table->string('emergency_contact')->nullable();
            $table->string('contact_number')->nullable();
 
            $table->timestamps();


            $table->foreign('user_id')->references('id')->on('user_admin')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_information');
    }
}
