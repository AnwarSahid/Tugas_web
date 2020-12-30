<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    protected $table = 'data_penduduk';
    protected $fillable = ['nama','nik', 'tanggal_lahir','email', 'jenis_kelamin'];
}
