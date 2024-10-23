<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['id', 'firstname', 'lastname' , 'designation', 'nid', 'mobile', 'email', 'taddress','paddress','school', 'schoolyear','sgrade', 'college', 'collegeyear', 'cgrade','university', 'universityyear', 'ugrade','university_major','masters', 'mastersyear', 'mgrade','masters_major', 'joiningdate', 'name', 'father', 'fno', 'mother', 'mno', 'gnid', 'gno','category', 'gender','dob'];
}
