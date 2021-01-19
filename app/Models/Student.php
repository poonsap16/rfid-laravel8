<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = 
        [
            'branch',
            'prefix',
            'thai_name',
            'institute_resident',
            'eng_name',
            'sap',
            'doctor_cert',
            'id_cart',
            'member',
            'telaphone',
            'email',
            'year',
            'year_study',
            'remark'
        ];
}
