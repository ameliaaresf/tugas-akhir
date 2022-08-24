<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPerceraian extends Model
{
    use HasFactory;

    protected $table = 'data_perceraians';
    protected $primarykey = 'id';
    protected $guarded = ['id'];

    public function penduduk(){
        return $this->belongsTo(DataPenduduk::class, 'id_penduduk');
    }
}
