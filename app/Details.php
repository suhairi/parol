<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    protected $table = 'details';
    protected $primaryKey = ['tarikh', 'cawangan_id'];
    protected $fillable = [
        'warganegara_id',
        'kesalahan_id',
        'jantina_id',
        'bangsa_id',

    ];

    public function cawangan()
    {
        return $this->hasOne('App\Cawangan');
    }

    public function warganegara()
    {
        return $this->hasOne('App\Warganegara');
    }

    public function kesalahan()
    {
        return $this->hasOne('App\Kesalahan');
    }

    public function jantina()
    {
        return $this->hasOne('App\Jantina');
    }

    public function bangsa()
    {
        return $this->hasOne('App\Bangsa');
    }
}
