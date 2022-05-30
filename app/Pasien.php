<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = "pasien";

    protected $fillable =  [
        'nama', 'usia', 'jensikel','evidence','problem' 
    ];

    // protected $fillable = ['nama','usia','jeniskel','evidence'];

    // public function setCategoryAttribute($value)
    // {
    //     $this->attributes['evidence'] = json_encode($value);
    // }

    // public function getCategoryAttribute($value)
    // {
    //     return $this->attributes['evidence'] = json_decode($value);
    // }
}
