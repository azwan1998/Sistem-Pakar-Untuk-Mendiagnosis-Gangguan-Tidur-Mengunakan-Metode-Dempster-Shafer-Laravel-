<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    protected $table = "problem";

    protected $fillable =  [
        'code', 'name', 'notes', 'solution'
    ];

    public function evidence()
    {
    	return $this->belongsToMany('App\Evidence');
    }
}
