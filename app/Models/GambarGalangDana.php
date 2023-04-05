<?php

namespace App\Models;

use App\Models\GalangDana;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GambarGalangDana extends Model
{
    use HasFactory;

    /**
     * Get the user thgalangdanawne GambarGalangDana
     *
     * @return \Illuminate\DatabasGalangDanaoquent\Relations\BelongsTo
     */
    public function galangdana()
    {
        return $this->belongsTo(GalangDana::class);
    }
}
