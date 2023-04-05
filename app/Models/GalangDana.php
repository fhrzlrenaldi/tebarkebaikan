<?php

namespace App\Models;

use App\Models\User;
use App\Models\Transaksi;
use App\Models\KategoriDonasi;
use App\Models\BeritaGalangDana;
use App\Models\GambarGalangDana;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GalangDana extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class);
    }

    public function gambargalangdanas()
    {
        return $this->hasMany(GambarGalangDana::class);
    }

    public function kategoridonasis()
    {
        return $this->hasMany(KategoriDonasi::class);
    }

    public function beritagalangdanas()
    {
        return $this->hasMany(BeritaGalangDana::class);
    }
}
