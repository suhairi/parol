<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    protected $table = 'details';
    protected $primaryKey = 'id';
    protected $fillable = [
        'tarikh',
        'cawangan_id',
        'warganegara_id',
        'bangsa_id',
        'kesalahan_id',
        'jantina_id',
        'jumlah'
    ];

    protected $dates = ['tarikh'];

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
