<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    protected $fillable = ['id_teacher','nom','id_soumestre','is_read'];

    public function teacher(){
        return $this->belongsTo(User::class);
    }

    public function students()
    {
        return $this->belongsToMany(User::class, 'student__modules', 'id_module', 'id_student');
    }

    public function soumestres(){

        return $this->belongsTo(Soumestre::class,'id_soumestre');
    }

    public function resource(){
        return $this->hasMany(Resource::class,'id_module');
    }
    public function assignments()
    {
        return $this->hasMany(Assignment::class);
    }

}
