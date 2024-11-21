<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exercises2Controller extends Controller
{
    // Imprimir todos los valores hasta N
    public function for1()
    {
        $n = 20;
        for ($i = 1; $i <= $n; $i++) {
            echo $i . " - ";
        }
    }
    public function for2()
    {
        $n = -20;
        for ($i = 0; $i >= $n; $i--) {
            echo $i . " , ";
        }
    }
}
