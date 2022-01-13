<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Share extends Model
{
    protected $table='share';
    use HasFactory;

    public function layDiaDanhTheoId()
    {
        return $this->belongsTo('App\Models\DiaDanh','DiaDanhId','id');
    }
}
