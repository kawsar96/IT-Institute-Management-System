<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['id', 'firstname', 'lastname' , 'father', 'mother', 'mobile', 'email', 'school', 'schoolyear','sgrade', 'college', 'collegeyear', 'cgrade' ,'university','course', 'batch', 'universityyear','ugrade', 'referance','gender','dob', 'admission', 'paid', 'due','paid2', 'name', 'is_approved', 'notice', 'is_approved2','notice2', 'roll', 'transactionId','gno'];
}


