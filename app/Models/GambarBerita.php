<?php

namespace App\Models;

use App\Models\BeritaGalangDana;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GambarBerita extends Model
{
    use HasFactory;

    public function beritagalangdana()
    {
        return $this->belongsTo(BeritaGalangDana::class);
    }
}
