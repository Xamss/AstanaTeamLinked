<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function members(){
        return $this->belongsToMany(User::class);
    }

    public function messages(){
        return $this->hasMany(Message::class);
    }

    public function creator(){
        return $this->belongsTo(User::class);
    }
}
