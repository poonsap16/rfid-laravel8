<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = 
    [
	    'activity_id',
		'activity_name',
		'activity_acronym',
		'bigin_time',
		'end_time',
		'bigin_time_before',
		'end_time_late',
		'job_id',
		'job_type',
		'person_type',
		'work_hour'
    ];
}
