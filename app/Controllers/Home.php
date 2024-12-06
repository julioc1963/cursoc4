<?php

namespace App\Controllers;

use PhpParser\Node\Expr\FuncCall;

class Home extends BaseController
{
    public function index(): string
    {
        return view('md/mdjulio');
    }
    public function webs() // para ruta con nombre
    {
        return view('md/web_rx');
    }


}
