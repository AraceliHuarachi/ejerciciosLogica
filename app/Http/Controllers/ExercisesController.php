<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercisesController extends Controller
{
    //Ejercicio a): INTERCAMBIO DE VALORES
    public function changeValues()
    {
        $a = 7;
        $b = 8;
        echo "VALORES INICIALES:";
        echo "<br>";
        echo "a=" . $a;
        echo "<br>";
        echo "b=" . $b;
        echo "<br>";

        $a = $a + $b;
        $b = $a - $b;
        $a = $a - $b;

        echo "VALORES CAMBIADOS";
        echo "<br>";
        echo "a=" . $a;
        echo "<br>";
        echo "b=" . $b;
    }

    // Ejercicio b): MAYOR Y MENOR DE DOS NUM.
    public function dosNum(Request $request)
    {
        //
    }

    //Ejercicio c): MAYOR Y MENOR DE TRES NUM.
    public function tresNum()
    {
        //
    }
}
