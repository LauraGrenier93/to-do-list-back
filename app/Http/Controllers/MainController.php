<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    /**
     * http Methode GET
     * URL : /
     */
    public function home() {
        global $router;
        require_once __DIR__.'./../../../resources/views/layout/header.tpl.php';
        require_once __DIR__.'./../../../resources/views/main/home.tpl.php';
        require_once __DIR__.'./../../../resources/views/layout/footer.tpl.php';
    }
}
