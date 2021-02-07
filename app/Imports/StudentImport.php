<?php

namespace App\Imports;

use App\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;

class StudentImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    use Importable;
    public function model(array $row)
    {
        return new Student([
            'branch'             => @$row[0],
            'prefix'             => @$row[1],
            'thai_name'          => @$row[2],
            'institute_resident' => @$row[3],
            'eng_name'           => @$row[4],
            'sap'                => @$row[5],
            'doctor_cert'        => @$row[6],
            'id_cart'            => @$row[7],
            'member'             => @$row[8],
            'telaphone'          => @$row[9],
            'email'              => @$row[10],
            'year'               => @$row[11],
            'year_study'         => @$row[12],
            'remark'             => @$row[13]
        ]);
    }
}
