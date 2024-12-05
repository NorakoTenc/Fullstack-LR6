<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shrine;

class ShrineController extends Controller
{
    public function index()
    {
        // Отримання всіх записів зі святилищ
        $shrines = Shrine::all();

        // Перевіряємо, чи існує Shrine of Beatrice
        $hasBeatrice = $shrines->contains('name', 'Shrine of Beatrice');
        $hasErica = $shrines->contains('name', 'Shrine of Erica');

        // Вилучаємо дублікати за полем 'name'
        $uniqueShrines = $shrines->unique('name');

        // Передаємо дані у view
        return view('shrineChoose', [
            'shrines' => $uniqueShrines,
            'hasBeatrice' => $hasBeatrice,
            'hasErica'=> $hasErica,
        ]);
    }
}
