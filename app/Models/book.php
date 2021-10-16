<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;

    // protected $table = 'namatabledatabase(jika nama table tidak sesuai standarisasi)'

    protected $fillable =
                        [
                            'pengarang_id',
                            'nama_buku',
                            'jumlah_halaman',
                            'translate_judul_buku'
                        ];


    public function pengarang()
    {
        return $this->belongsTo(pengarang::class, 'pengarang_id');
    }
}
