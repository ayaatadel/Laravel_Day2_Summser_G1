<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    // protected $table="iti_student";  // table name with another name
    protected $fillable=['name','email','address','gender','grade','image','age'];
    // protected $guarded=[''];// data that you don't updated on it

}
