<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;
    protected $fillable = ['titre','description','fichier','id_module','id_teacher'];

    public function teacher(){
        return $this->belongsTo(User::class );
    }

    public function module(){
        return $this->belongsTo(Module::class);
    }
}
