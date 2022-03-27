<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Pagination\Paginator;

use App\Models\Dominio;

class DominioController extends Controller
{
    public function index() {

        $dominios = Dominio::orderBy('created_at', 'ASC')->paginate(5);
        
        return view('dashboard',['dominios' => $dominios]);

    }
    public function create() {
        return view('create');
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

    public function search(){

        $search = request('search');

            $dominios = Dominio::where([
                ['dominio', 'like', '%'.$search.'%']
            ])->get();

            return view('searchresult',['dominios' => $dominios]);
        }
    
}