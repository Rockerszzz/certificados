<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Dominio;

class DominioController extends Controller
{
    public function index() {

        $dominios = Dominio::all();

        return view('dashboard',['dominios' => $dominios]);

    }
}
