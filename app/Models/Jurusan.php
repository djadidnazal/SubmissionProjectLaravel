<?php

namespace App\Models;

use App\Models\Jurusan;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $fillable = ['kode', 'nama'];
}