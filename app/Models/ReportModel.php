<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class ReportModel extends Model
{
    use HasFactory, Notifiable;

    protected $table = "activity report";
    protected $primarykey = "AR_ID";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Name',
        'Type',
        'Activity_Date',
        'StartTime',
        'EndTime',
        'Teacher_ID',
        'Location',
        'Description',
        'Report_Date',
        'ReportType_ID',
        'ReportStatus_ID',
        'id',
        'Paper_Name',

    ];

    
}

