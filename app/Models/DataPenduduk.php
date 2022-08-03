<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPenduduk extends Model
{
    use HasFactory;

    protected $table = 'data_penduduks';
    protected $primarykey = 'id';
    
    public function kematian(){
        $this->hasOne(DataKematian::class,'id');
    }
}

