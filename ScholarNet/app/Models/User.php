<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */


    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'DateDeNaissance',
        'class_id',
        'image',
        'gender',
    ];

    public function modulesT(){
        return $this->hasMany(Module::class,'id_teacher');
    }

    public function resource(){
        return $this->hasMany(Resource::class,'id_teacher');
    }

    public function soumestres()
    {
        return $this->belongsToMany(Soumestre::class, 'student_soumestres', 'id_student', 'id_soumestre');
    }

    public function modules()
    {
        return $this->belongsToMany(Module::class, 'student__modules', 'id_student', 'id_module');
    }
    public function class() {
        return $this->belongsTo(Classe::class, 'class_id');
    }

    public function teacherAssignments() 
    {
        return $this->hasMany(Assignment::class, 'teacher_id');
    }

    public function studentAssignments()
    {
        return $this->belongsToMany(Assignment::class, 'assignment_student', 'student_id', 'assignment_id')
                    ->withPivot('note');
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
