<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Dashboard extends Model
{
    //
    protected $fillable = [
		'name', 'age', 'course_name', 'course_score',
		];
}
