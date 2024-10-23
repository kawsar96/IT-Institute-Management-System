<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->string('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('father');
            $table->string('mother');
            $table->string('mobile');
            $table->string('email')->nullable();
            $table->string('school')->nullable();
            $table->string('schoolyear')->nullable();
            $table->string('sgrade')->nullable();
            $table->string('college')->nullable();
            $table->string('collegeyear')->nullable();
            $table->string('cgrade')->nullable();
            $table->string('university')->nullable();
            $table->string('universityyear')->nullable();
            $table->string('ugrade')->nullable();
            $table->string('course');
            $table->string('batch')->nullable();
            $table->string('referance')->nullable();
            $table->string('gender');
            $table->string('dob');
            $table->string('admission');
            $table->string('paid');
            $table->string('due');
            $table->string('paid2');
            $table->string('name')->nullable();
            $table->string('address');
            $table->boolean('is_approved')->default(false);
            $table->string('notice')->default(false);
            $table->boolean('is_approved2')->default(false);
            $table->string('notice2')->default(false);
            $table->string('roll')->nullable();
            $table->string('transactionId')->nullable();
            $table->string('gno')->nullable();
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
        Schema::dropIfExists('students');
    }
}
