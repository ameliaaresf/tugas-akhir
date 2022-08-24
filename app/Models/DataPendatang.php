<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPendatang extends Model
{
    use HasFactory;

    protected $table = 'data_pendatangs';
    protected $primarykey = 'id';
    protected $guarded = ['id'];

    public function penduduk(){
        return $this->belongsTo(DataPenduduk::class, 'id_penduduk');
    }
}
