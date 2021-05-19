<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Model\Timesheet;
use Illuminate\Support\Facades\Validator;

class TimesheetsImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        // \Log::info($collection);
        // \Log::info($collection->toArray());
        // Validator::make($collection->toArray(),[
        //     '*.num' => 'required',
        //     '*.card_num' => 'required',
        //     '*.sap_id' => 'required',
        //     '*.full_name' => 'required',
        //     '*.date_stamp' => 'required',
        //     '*.time_stamp' => 'required',
        //     '*.rfid_position' => 'required',
        //     '*.rfid_status' => 'required',
        //     '*.rfid_door' => 'required'
        // ])->validate();
        
        foreach($collection as $row)
        {
            Timesheet::create([
                'num' => $row['no'],
                'card_num' => $row['rfid_no'],
                'sap_id' => $row['sap_id'],
                'full_name' => $row['name'],
                'date_stamp' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['date_stamp']),
                'time_stamp' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['time_stamp']),
                'rfid_position' => $row['rfid_position'],
                'rfid_status' => $row['rfid_status'],
                'rfid_door' => $row['rfid_door']
            ]);
        }
    }
}
