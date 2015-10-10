<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cawangan extends Model
{
    protected $table = 'cawangan';
    protected $primaryKey = 'id';
    protected $fillable = ['nama'];

    public $timestamps = false;
}
