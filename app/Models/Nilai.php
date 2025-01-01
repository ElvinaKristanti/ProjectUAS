<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'mapel_id',
        'semester',
        'nilai',
    ];

    // App\Models\Nilai.php

    public function mapel()
    {
        return $this->belongsTo(Mapel::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }
}
