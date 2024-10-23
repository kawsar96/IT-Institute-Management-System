<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->string('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('designation');
            $table->string('nid')->nullable();
            $table->string('mobile');
            $table->string('email');
            $table->string('taddress');
            $table->string('paddress');
            $table->string('school')->nullable();
            $table->string('schoolyear')->nullable();
            $table->string('sgrade')->nullable();
            $table->string('college')->nullable();
            $table->string('collegeyear')->nullable();
            $table->string('cgrade')->nullable();
            $table->string('university')->nullable();
            $table->string('universityyear')->nullable();
            $table->string('university_major')->nullable();
            $table->string('ugrade')->nullable(); 
            $table->string('masters')->nullable();
            $table->string('mastersyear')->nullable();
            $table->string('masters_major')->nullable();
            $table->string('mgrade')->nullable(); 
            $table->string('uno');       
            $table->string('joiningdate');
            $table->string('name');

            $table->string('father');
            $table->string('fno')->nullable();
            $table->string('mother');
            $table->string('mno')->nullable();
            $table->string('gnid')->nullable();
            $table->string('gno');
            $table->string('category');
            $table->string('gender');
            $table->string('dob');
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
        Schema::dropIfExists('employees');
    }
}
