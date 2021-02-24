<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rw extends Model
{
    use HasFactory;
    protected $fillable = ['id_kelurahan','rw'];
    public $timestamps = true;
    public function kelurahan()
    {
        return $this->belongsTo('App\Models\Kelurahan','id_kelurahan');
    }
    public function tracking()
    {
    return $this->hasMany('App\Models\Tracking','id_rw');
    }
}
