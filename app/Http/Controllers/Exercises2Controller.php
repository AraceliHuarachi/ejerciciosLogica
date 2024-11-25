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

    //Imprimir todos los valores, los pares, luego los impares hasta N
    public function parImp()
    {
        $n = 20;

        $all = "";
        $par = "";
        $imp = "";

        for ($i = 1; $i <= $n; $i++) {
            $all .= $i . " ";
            if ($i % 2 == 0) {
                $par .= $i . " ";
            } else {
                $imp .= $i . " ";
            }
        }


        $text = "N = " . $n;
        $text = $text .  "<br>";
        $text = $text .  "<br>";
        $text = $text . "TODOS LOS NUMEROS:";
        $text = $text .  "<br>";
        $text = $text . $all;
        $text = $text .  "<br>";
        $text = $text .  "<br>";
        $text = $text . "NUMEROS PARES:";
        $text = $text .  "<br>";
        $text = $text . $par;
        $text = $text .  "<br>";
        $text = $text .  "<br>";
        $text = $text . "NUMEROS IMPARES:";
        $text = $text .  "<br>";
        $text = $text . $imp;
        echo $text;
    }
}
