<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File_upload extends Model
{
    use HasFactory;

    protected $fillable = [
            'file'
    ];
}
