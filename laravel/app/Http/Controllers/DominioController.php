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
            $dominios = Dominio::orderBy('created_at', 'ASC')->get();
        }
        return view('dashboard',['dominios' => $dominios, 'search' => $search]);

    }
    public function create() {
        return view('dominios.create');
    }
    public function store(Request $request) {

        $dominio = new Dominio;

        $dominio->dominio = $request->dominio;
        $dominio->servidor = $request->servidor;
        $dominio->ssl = $request->ssl;
        $dominio->tipo = $request->tipo;
        $dominio->automatico = $request->automatico;
        $dominio->periodo = $request->periodo;
        $dominio->created_at = $request->expiracao;
        $dominio->save();

        return redirect('/dashboard')->with('msg', 'Dominio inserido com sucesso!');

    }
}