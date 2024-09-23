<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombres',
        'apellidos',
        'dni',
        'fecha_nacimiento',
        'direccion',
        'telefono',
        'especialidad',
    ];

    public function classrooms()
    {
        return $this->hasMany(Classroom::class);
    }
}
