<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class income extends Model
{
    use HasFactory;
    public function person(){
        return $this->belongsTo(person::class,'provider_id','id');
    }
    use HasFactory;
    public function User(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
