<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kesalahan extends Model
{
    protected $table = 'kesalahan';
    protected $primaryKey = 'id';
    protected $fillable = ['nama', 'kategori_id', 'kod'];

    public $timestamps = false;

    public function kategori()
    {
        return $this->hasOne('App\Kategori', 'id', 'kategori_id');
    }
}
