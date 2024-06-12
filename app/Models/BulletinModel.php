<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class BulletinModel extends Model
{
    use HasFactory;
    protected $table = 'bulletins';
    protected $primaryKey = 'id';
    protected $fillable = ['tajuk', 'tarikh', 'kepentingan', 'status', 'daripada','kepada', 'isi'];
}