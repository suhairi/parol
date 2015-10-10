<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bangsa extends Model
{
    protected $table = 'bangsa';
    protected $primaryKey = 'id';
    protected $fillable = ['nama'];

    public $timestamps = false;
}
