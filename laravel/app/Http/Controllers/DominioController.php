<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Dominio;

class DominioController extends Controller
{
    public function index() {

        $search = request('search');

        if($search) {

            $dominios = Dominio::where([
                ['dominio', 'like', '%'.$search.'%']
            ])->get();

        } else {
            $dominios = Dominio::orderBy('created_at', 'DESC')->get();
        }

        

        return view('dashboard',['dominios' => $dominios, 'search' => $search]);

    }
}
