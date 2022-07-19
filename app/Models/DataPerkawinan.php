<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPerkawinan extends Model
{
    use HasFactory;

    protected $table = 'data_perkawinans';
    protected $primarykey = 'id';
}
