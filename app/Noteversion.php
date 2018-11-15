<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noteversion extends Model
{
    
        protected $table = 'note_versions';
    
        protected $fillable = [ 'text', 'user_id', 'note_id'];
    
        
        public function user()
        {
            return $this->belongsTo(User::class);
        }
        
        public function note()
        {
            return $this->belongsTo(Note::class);
        }
}
