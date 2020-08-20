<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('site.home');
    }

    public function save(Request $request){

        $data = $request->only([
            'nome',
            'email',
            'mensagem'
        ]);

        $validator = $this->validator($data);

        if($validator->fails()){
            return redirect()->route('site')->withErrors($validator)->withInput();
        }

        return redirect()->route('site')->with('warning', 'Contato enviado com sucesso!');
    }

    protected function validator(array $data){
        return Validator::make($data, [
            'nome' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'max:100'],
            'mensagem' => ['required', 'string', 'max:255'],
        ]);
    }
}
