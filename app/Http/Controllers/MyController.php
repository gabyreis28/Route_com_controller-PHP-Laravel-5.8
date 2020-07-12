<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function produtos(){
        echo "<h1>Produtos</h1>";
        echo "<ol>";
        echo "<li> Notebook </li>";
        echo "<li> Impressora </li>";
        echo "<li> Mouse </li>";
        echo "</ol>";
    }
    public function getNome(){
        return "Sófica Fraser";
    }

    public function getIdade(){
        return "20 anos";
    }

    public function multiplicar($num1,$num2){
        return $num1 * $num2;
    }


}
