<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class empmodel extends Model
{
 protected $table="emp";
 protected $fillable = [
    'name','address','gender','city','hobby','dob','img'];
}
