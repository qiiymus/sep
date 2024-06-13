<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimetableModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'kelas',
        'ustazah',
        'subject1isnin',
        'subject2isnin',
        'subject3isnin',
        'subject1selasa',
        'subject2selasa',
        'subject3selasa',
        'subject1khamis',
        'subject2khamis',
        'subject3khamis',
    ];

    protected $table = 'timetable';
}
