<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;
    public function barang()
    {
        return $this->hasMany(Student::class);
    }
    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }
}
