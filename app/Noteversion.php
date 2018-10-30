<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noteversion extends Model
{
    
        protected $table = 'note_versions';
    
        protected $fillable = ['name', 'text', 'user_id'];
    
        public function user()
        {
            return $this->belongsTo(User::class);
        }
    
}
