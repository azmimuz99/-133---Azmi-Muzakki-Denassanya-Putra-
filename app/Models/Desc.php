<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desc extends Model
{
    protected $table = 'descs';

    // Mendefinisikan relasi many-to-one dengan model Coursex
    public function coursex()
    {
        return $this->belongsTo(Coursesx::class);
    }
}
