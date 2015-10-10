<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warganegara extends Model
{
    protected $table = 'warganegara';
    protected $primaryKey = 'id';
    protected $fillable = ['nama'];

    public $timestamps = false;
}
