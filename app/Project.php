<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    
        protected $table = 'projects';
    
        protected $fillable = ['name'];




        public function noteversion()
    {
        return $this->hasMany('App\Noteversion', 'project_id');
    }
}
