<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keluarmasuk extends Model
{
    protected $table = 'keluarmasuk';
    protected $primaryKey = 'id';
    protected $fillable = ['tarikh', 'cawangan_id', 'kesalahan', 'bangsa', 'jumlah'];

    protected $dates = ['tarikh'];

    public $timestamps = false;

    public function cawangan()
    {
        return $this->hasOne('App\Cawangan');
    }
}
