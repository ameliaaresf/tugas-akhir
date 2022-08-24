<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPenduduk extends Model
{
    use HasFactory;

    protected $table = 'data_penduduks';
    protected $primarykey = 'id';
    protected $guarded = ['id'];

    public function kematian(){
        return $this->hasOne(DataKematian::class);
    }

    public function bansos(){
        return $this->hasOne(DataBansos::class);
    }

    public function pekerja(){
        return $this->hasOne(DataPekerja::class);
    }

    public function pendatang(){
        return $this->hasOne(DataPendatang::class);
    }

    public function perceraian(){
        return $this->hasOne(DataPerceraian::class);
    }

    public function perkawinan(){
        return $this->hasOne(DataPerkawinan::class);
    }

    public function perpindahan(){
        return $this->hasOne(DataPerpindahan::class);
    }

    public function vaksin(){
        return $this->hasOne(DataVaksin::class);
    }

}

