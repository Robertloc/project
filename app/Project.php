<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    
        protected $table = 'projects';
    
        protected $fillable = ['name', 'user_id'];




        public function notes()
    {
        return $this->hasMany(Note::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

