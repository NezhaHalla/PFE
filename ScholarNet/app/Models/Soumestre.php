<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soumestre extends Model
{
    use HasFactory;
    protected $fillable=['nom','filire','year'];

    public function students()
    {
        return $this->belongsToMany(User::class, 'student_soumestres', 'id_soumestre', 'id_student');
    }

    public function modules(){
        return $this->hasMany(Module::class,'id_soumestre');
    }
}

