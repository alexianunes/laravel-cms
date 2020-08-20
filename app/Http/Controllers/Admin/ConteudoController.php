<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Conteudo;

class ConteudoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $conteudos = [];

        $conteudosArray = Conteudo::get();

        foreach ($conteudosArray as $conteudo){
            $conteudos [$conteudo['nome']] = $conteudo['conteudo'];
        }


        return view('admin.conteudos.index', ['conteudo' => $conteudos]);
    }

    public function save(Request $request){

        $data = $request->only([
            'backgroundSuperior',
            'txtDestaqueTema',
            'nomeJogo',
            'frase',
            'descricao_formulario'
        ]);

        $validator = $this->validator($data);

        if($validator->fails()){
            return redirect()->route('conteudos')->withErrors($validator);
        }


        //upload image
        $request->validate(['backgroundSuperior' => 'image|mimes:jpeg,jpg,png']);

        if ($request->file('backgroundSuperior')) {
            $destinationPath = 'uploads/images/';
            $ext = $request->backgroundSuperior->extension();
            $bgImage = time() . "." . $ext;
            $request->backgroundSuperior->move($destinationPath, $bgImage);
            $data['backgroundSuperior'] =$destinationPath.$bgImage;
         }

        foreach($data as $item => $value){

            Conteudo::where('nome', $item)->update([
                'conteudo' => $value
            ]);
        }

        return redirect()->route('conteudos')->with('warning', 'Itens editados com sucesso!');
    }

    protected function validator($data){
        return Validator::make($data, [
            'txtDestaqueTema' => ['required', 'string', 'max:255'],
            'nomeJogo' => ['required', 'string', 'max:255'],
            'frase' => ['required', 'string', 'max:255'],
            'descricao_formulario' => ['required', 'string', 'max:255']
        ]);
    }
}
