<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKelahiran extends Model
{
    use HasFactory;

    protected $table = 'data_kelahirans';
    protected $primarykey = 'id';
    protected $guarded = ['id'];
    
}
