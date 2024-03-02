<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class publications extends Model
{
    use HasFactory;
    use softDeletes;
    protected $dates=['created_at'];
    protected $fillable=[
        "imagepub",
        "titre",
        "description",
        "role",
    ];
    public function getRouteKeyName(){
        return 'id'; //deja par dafault //pour route model binding
    }
}
