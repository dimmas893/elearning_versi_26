<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hasil_soal extends Model
{
    use HasFactory;

    protected $table = 'hasil_soal';
    protected $fillable = [
        'siswa_id',
        'hasil',
        'jawaban',
        'soal_id'
    ];
}
