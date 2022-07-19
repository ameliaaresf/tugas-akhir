<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPekerja extends Model
{
    use HasFactory;

    protected $table = 'data_pekerjas';
    protected $primarykey = 'id';
}
