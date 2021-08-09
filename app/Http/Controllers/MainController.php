<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    /**
     * http Methode GET
     * URL : /
     */
    public function home() {
        echo 'Welcom to this API';
    }
}
