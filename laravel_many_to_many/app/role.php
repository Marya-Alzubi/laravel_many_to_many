<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Role;
class role extends Model
{
    protected $guarded = [];
    public function users(){
        return $this->belongsToMany(User::class);
    }
}

