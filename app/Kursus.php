<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kursus extends Model
{
    protected $table = 'kursus';
    protected $primaryKey = 'id';
    protected $fillable = ['nama', 'tarikh', 'lokasi_id', 'tempoh'];


    public function lokasi()
    {
        return $this->hasOne('App\Lokasi', 'id', 'lokasi_id');
    }

}
