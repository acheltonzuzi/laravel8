<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class segundoController extends Controller
{
    function idade($idade){
        return "a minha idade é: ".$idade;
    }
}
