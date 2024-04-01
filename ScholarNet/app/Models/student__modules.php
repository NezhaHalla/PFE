<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student__modules extends Model
{
    protected $fillable = ['id_student','id_module',"Note"];
    use HasFactory;
}
