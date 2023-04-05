<?php

namespace App\Models;

use App\Models\GalangDana;
use App\Models\GambarBerita;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BeritaGalangDana extends Model
{
    use HasFactory;

    public function galangdana()
    {
        return $this->belongsTo(GalangDana::class);
    }

    public function gambarberitas()
    {
        return $this->hasMany(GambarBerita::class);
    }
}
