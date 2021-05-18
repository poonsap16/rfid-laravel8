<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timesheet extends Model
{
    use HasFactory;
    protected $fillable = [
    'num',
    'card_num',
    'sap_id',
    'full_name',
    'date_stamp',
    'time_stamp',
    'rfid_position',
    'rfid_status',
    'rfid_door'
    ];
}
