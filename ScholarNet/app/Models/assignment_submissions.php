<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assignment_submissions extends Model
{
    use HasFactory;
    protected $fillable = ['fichier','assignment_id',"id_student"];

    public function student() {
        return $this->belongsTo(User::class, 'id_student');
    }

    public function assignment() {
        return $this->belongsTo(Assignment::class, 'assignment_id');
    }
}
