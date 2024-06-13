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
    ];

    public function reportType()
    {
        return $this->belongsTo(ReportType::class, 'ReportType_ID');
    }

    public function reportStatus()
    {
        return $this->belongsTo(ReportStatus::class, 'ReportStatus_ID');
    }


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}

class ReportType extends Model
{
    protected $table = "report_type";
    protected $fillable = ['Type'];
}

class ReportStatus extends Model
{
    protected $table = "report_status";
    protected $fillable = ['status'];
}
