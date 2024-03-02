<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class users extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable=[
        "name",
        "role",
        "email",
        "password",
        "image",
    ];
    public function getRouteKeyName(){
        return 'id'; //deja par dafault //pour route model binding
    }
}
