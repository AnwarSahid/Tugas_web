<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Danadesa extends Model
{
    use HasFactory;
    protected $table='danadesa';
    protected $fillable = ['tanggal','pemasukan', 'sumber','pengeluaran', 'penggunaan','total'];
}
