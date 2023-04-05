<?php

namespace App\Models;

use App\Models\User;
use App\Models\GalangDana;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaksi extends Model
{
    use HasFactory;


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function galangdanas()
    {
        return $this->hasMany(GalangDana::class);
    }
}
