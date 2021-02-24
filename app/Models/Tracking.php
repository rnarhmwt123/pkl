<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    use HasFactory;
    protected $fillable = ['id_rw','positive','meninggal','sembuh'];
    public $timestamps = true;
    public function rw()
    {
        return $this->belongsTo('App\Models\Rw','id_rw');
    }
    
}
