<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preguntas extends Model
{
    use HasFactory;

    protected $table = 'preguntas';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'pregunta',
        'opcion_a',
        'opcion_b',
        'opcion_c',
        'opcion_d'
    ];

    public function respuestas()
    {
        return $this->hasMany(Respuestas::class, 'pregunta_id');
    }
}
