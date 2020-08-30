<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=['title','description'];
    protected $table='students';
    //public $students=array('id','title','description');
}
