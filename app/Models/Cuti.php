<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Cuti extends Model
{
    protected $guarded = ['id'];
    use HasFactory;
    public function user():HasOne{
        return $this->hasOne(User::class,'id','user_id');
    }

}
