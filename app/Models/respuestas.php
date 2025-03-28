<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuestas extends Model
{
    use HasFactory;

    /**
     * La tabla asociada con el modelo.
     *
     * @var string
     */
    protected $table = 'respuestas'; // Si la tabla no sigue la convención, especifícalo aquí.

    /**
     * La clave primaria de la tabla.
     *
     * @var string
     */
    protected $primaryKey = 'id'; // Cambia esto si tu clave primaria es diferente.

    /**
     * Indica si el modelo debe usar timestamps.
     *
     * @var bool
     */
    public $timestamps = false; // Desactiva esto si tu tabla no usa created_at y updated_at.

    /**
     * Los atributos que son asignables en masa.
     *
     * @var array
     */
    protected $fillable = [
        'pregunta_id',
        'respuesta_correcta',
    ];

    /**
     * Define una relación de "muchos a uno" con el modelo Preguntas.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pregunta()
    {
        return $this->belongsTo(Preguntas::class, 'pregunta_id');
    }
}
