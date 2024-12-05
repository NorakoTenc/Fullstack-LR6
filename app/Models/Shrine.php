<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shrine extends Model
{
    use HasFactory;

    // Вказуємо назву таблиці
    protected $table = 'shrines';

    // Поля, які дозволено заповнювати масово
    protected $fillable = ['name', 'image', 'description'];

    // Вказуємо, що поле id є автоінкрементним
    public $incrementing = true;
}
