<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class noteVersion extends Model
{
    protected $table = 'note_versions';

    protected $fillable = ['name', 'text'];
}
