<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultModel extends Model
{
    use HasFactory;
    protected $table = 'class';
    protected $primaryKey = 'id';
    protected $fillable = ['name','class'];
}
