<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuRelatorios extends Controller
{
    public function menu() {
        return view('menus.relatorios');
    }

}
