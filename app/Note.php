<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model

{
    protected $fillable = ['name', 'project_id', 'user_id'];
  
    public function user ()
    {
        return $this->belongsTo(User::class);
    }


    public function noteversions()
    {
        return $this->hasMany(Noteversion::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
