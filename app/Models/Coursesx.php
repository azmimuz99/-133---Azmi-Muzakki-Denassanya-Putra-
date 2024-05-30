<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coursesx extends Model
{
    // Tabel yang digunakan oleh model ini
    protected $table = 'coursesx';

    // Mendefinisikan relasi one-to-many dengan model Desc
    public function descs()
    {
        return $this->hasMany(Desc::class);
    }
}

