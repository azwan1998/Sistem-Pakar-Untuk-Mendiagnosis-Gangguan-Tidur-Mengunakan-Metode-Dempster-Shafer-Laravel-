<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Evidence extends Model
{

    protected $table = "evidence";

    protected $fillable =  [
        'code', 'name'
    ];

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function problem()
    {
    	return $this->belongsToMany('App\Problem');
    }
}
