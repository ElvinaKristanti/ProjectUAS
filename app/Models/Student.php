<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // Relasi dengan tabel Pelajaran
    public function pelajaran()
    {
        return $this->belongsToMany(Mapel::class);
    }
    // App\Models\Student.php

    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }
}
