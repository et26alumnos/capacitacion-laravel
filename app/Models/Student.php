<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;


    public const CREATED_AT = 'created_timestamp';
    public const UPDATED_AT = 'updated_timestamp';

    /**
     * Tabla que será usada por el modelo
     *
     * @var string
     */
    protected $table = 'students';

    protected $primaryKey = 'student_id';

    /* Campos que pueden ser completados por el usuario */
    protected $fillable = [
        'name',
        'surname',
        'dni',
        'studying_in'
    ];

    protected $casts = [
        'enrolled_at' => 'date'
    ];
}
