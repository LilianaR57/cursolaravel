<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


class CursoController extends Controller
{
    //EJEMPLOS DE CLASE
    public function getName(){
        return view('welcome', ['name' => 'Liliana']);
    }

    public function index(){
        $name= 'Liliana';
        $lastneme = 'Reyes';
        $age = 25;
        // return view('layout.child', ['name' => $name, 'lastname' => $lastneme, 'age' => $age]);
        //return view('layout.child') ->with('name', $name)->with('lastname', $lastneme)->with('age', $age);
        return view('layout.child', compact('name', 'lastname', 'age'));
    }



    public function sumar($num1, $num2){
        return view('curso', ['La suma es: ' => $num1 + $num2]);
    }

    public function practica1()
    {
        $nombre = "Liliana Reyes";
        $num1 = 15;
        $num2 = 5;

        $suma = $num1 + $num2;
        $resta = $num1 - $num2;
        $multiplicacion = $num1 * $num2;
        $division = $num1 / $num2;

        return view('curso', compact('nombre', 'suma', 'resta', 'multiplicacion', 'division'));


    }

}





    

