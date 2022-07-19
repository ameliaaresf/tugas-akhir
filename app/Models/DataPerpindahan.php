<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPerpindahan extends Model
{
    use HasFactory;

    protected $table = 'data_perpindahans';
    protected $primarykey = 'id';
}
