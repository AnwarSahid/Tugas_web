<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Danaswadaya extends Model
{
    use HasFactory;
    protected $table='danaswadaya';
    protected $fillable = ['tanggal','pemasukan', 'sumber','pengeluaran', 'penggunaan','total'];
}
