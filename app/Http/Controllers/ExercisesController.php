<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercisesController extends Controller
{
    // Concatenacion de mensajes con echo
    public function concat()
    {
        $a = "1, ";
        $a = $a . "2, ";
        $a = $a . "3";
        echo $a;
    }
    //Ejercicio a): IN;ERCAMBIO DE VALORES
    public function changeValues()
    {
        $a = 5;
        $b = 6;
        $text = "VALORES INICIALES:";
        $text = $text . "<br>";
        $text = $text . "a=" . $a;
        $text = $text . "<br>";
        $text = $text . "b=" . $b;
        $text = $text . "<br>";
        //echo $text;

        $a = $a + $b;
        $b = $a - $b;
        $a = $a - $b;

        $text = $text . "VALORES CAMBIADOS";
        $text = $text . "<br>";
        $text = $text . "a=" . $a;
        $text = $text .  "<br>";
        $text = $text . "b=" . $b;
        echo $text;
    }

    //Ejercicio a) Forma 2:
    public function chngValues()
    {
        $a = 15;
        $b = 66;
        $text = "VALORES INICIALES:";
        $text = $text . "<br>";
        $text = $text . "a=" . $a;
        $text = $text . "<br>";
        $text = $text . "b=" . $b;
        $text = $text . "<br>";
        //echo $text;
        $c = $a;
        $a = $b;
        $b = $c;
        $text = $text . "VALORES CAMBIADOS";
        $text = $text . "<br>";
        $text = $text . "a=" . $a;
        $text = $text . "<br>";
        $text = $text . "b=" . $b;
        echo $text;
    }

    // Ejercicio b): MAYOR Y MENOR DE DOS NUM.
    public function dosNum(Request $request)
    {
        $a = 5;
        $b = 6;
        $text = "1er num:  " . $a;
        $text = $text . "<br>";
        $text = $text . "2do num: " . $b;
        $text = $text . "<br>";

        $text = $text . "Comparacion:";
        $text = $text . "<br>";

        if ($a > $b) {
            $text = $text . "El mayor = " . $a;
            $text = $text . "<br>";
            $text = $text . "El menor = " . $b;
        } else {
            $text = $text . "El mayor = " . $b;
            $text = $text . "<br>";
            $text = $text . "El menor = " . $a;
        }
        echo $text;
    }

    //Ejercicio c): MAYOR Y MENOR DE TRES NUM.
    public function tresNum()
    {
        $a = 7;
        $b = 5;
        $c = 34;
        $text = "1er num:  " . $a;
        $text = $text . "<br>";
        $text = $text . "2do num: " . $b;
        $text = $text . "<br>";
        $text = $text . "3er num: " . $c;
        $text = $text . "<br>";
        $text = $text . "<br>";
        $text = $text . "Comparacion:";
        $text = $text . "<br>";
        $text = $text . "<br>";

        if ($a > $b) {
            if ($a > $c) {
                if ($b > $c) {
                    $text = $text . $a . " - " . $b . " - " . $c;
                    $text = $text . "<br>";
                    $text = $text . "El mayor es: " . $a;
                    $text = $text . "<br>";
                    $text = $text . "El menor es: " . $c;
                } else {
                    $text = $text . $a . " - " . $c . " - " . $b;
                    $text = $text . "<br>";
                    $text = $text . "El mayor es: " . $a;
                    $text = $text . "<br>";
                    $text = $text . "El menor es: " . $b;
                }
            } else {
                $text = $text . $c . " - " . $a . " - " . $b;
                $text = $text . "<br>";
                $text = $text . "El mayor es: " . $c;
                $text = $text . "<br>";
                $text = $text . "El menor es: " . $b;
            }
        } else {
            if ($b < $c) {
                $text = $text . $c . " - " . $b . " - " . $a;
                $text = $text . "<br>";
                $text = $text . "El mayor es: " . $c;
                $text = $text . "<br>";
                $text = $text . "El menor es: " . $a;
            } else {
                if ($a < $c) {
                    $text = $text . $b . " - " . $c . " - " . $a;
                    $text = $text . "<br>";
                    $text = $text . "El mayor es: " . $b;
                    $text = $text . "<br>";
                    $text = $text . "El menor es: " . $a;
                } else {
                    $text = $text . $b . " - " . $a . " - " . $c;
                    $text = $text . "<br>";
                    $text = $text . "El mayor es: " . $b;
                    $text = $text . "<br>";
                    $text = $text . "El menor es: " . $c;
                }
            }
        }
        echo $text;
    }
}
