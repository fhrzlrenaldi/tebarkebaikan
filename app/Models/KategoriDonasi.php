<?php

namespace App\Models;

use App\Models\GalangDana;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KategoriDonasi extends Model
{
    use HasFactory;

    public function galangdana()
    {
        return $this->belongsTo(GalangDana::class);
    }
}
