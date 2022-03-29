<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Models\Dominio;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class DominioController extends Controller
{
    public function index() {

        $dominios = Dominio::orderBy('expiracao', 'ASC')->paginate(5);
        
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
        $dominio->expiracao = $request->expiracao;
        $dominio->save();

        return redirect('/dashboard')->with('msg', 'Domínio inserido com sucesso!');

    }

    public function search(){

        $search = request('search');

            $dominios = Dominio::where([
                ['dominio', 'like', '%'.$search.'%']
            ])->get();

            return view('searchresult',['dominios' => $dominios]);
    }

    public function expira() {

        $dominios = DB::select("SELECT dominio, tipo, expiracao
        FROM dominios WHERE DATEDIFF(expiracao, CURDATE()) <= 15 ");
        
        Mail::to('suporte@arealocal.com.br')->send(new SendMail($dominios));
    }

    public function destroy($id) {

        Dominio::findOrFail($id)->delete();
        return redirect('/dashboard')->with('msg', 'Domínio excluído com sucesso!');

    }

    public function edit($id) {

        $dominio = Dominio::findOrFail($id);

        return view('edit', ['dominio' => $dominio]);

    }

    public function update(Request $request) {
    
        Dominio::findOrFail($request->id)->update($request->all());

        return redirect('/dashboard')->with('msg', 'Domínio editado com sucesso!');
    
    }
    
}