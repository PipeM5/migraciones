<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected $table = 'estudiantes';
    protected $primaryKey = 'cod_estudiante';
    public $timestamps = true;
}