<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Character;
use Illuminate\Support\Facades\Auth;

class CharacterController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $characters = Character::paginate(2);

        return view('admin.characters.index', ['characters' => $characters]);
    }

    public function create(){
        return view('admin.characters.create');
    }

    public function store(Request $request){
        $data = $request->only([
            'descricao',
        ]);

        $validator = $this->validator($data);

        if($validator->fails()){
            return redirect()->route('characters.create')->withErrors($validator)->withInput();
        }

        //upload image
        $request->validate(['imagem' => 'image|mimes:jpeg,jpg,png']);

        if ($request->file('imagem')) {
            $destinationPath = 'uploads/images/characters/';
            $ext = $request->imagem->extension();
            $bgImage = time() . "." . $ext;
            $request->imagem->move($destinationPath, $bgImage);
            $data['imagem'] =$destinationPath.$bgImage;
         }

         $newCharacter = new Character();
         $newCharacter->descricao = $data['descricao'];
         $newCharacter->imagem = (isset($data['imagem']) && !empty($data['imagem']) ? $data['imagem'] : '');
         $newCharacter->save();
         

        return redirect()->route('characters.index')->with('warning', 'Personagem adicionado com sucesso!');
    }

    public function edit($id){
        $character = Character::find($id);

        if($character){
            return view('admin.characters.edit', ['character' => $character]);
        }

        return redirect()->route('characters.index');

        
    }

    public function update(Request $request, $id){

        $character = Character::find($id);

        if($character){
            $data = $request->only([
                'descricao',
            ]);
    
            $validator = $this->validator($data);
    
            if($validator->fails()){
                return redirect()->route('characters.edit', ['character' => $id])->withErrors($validator);
            }
    
            //upload image
            $request->validate(['imagem' => 'image|mimes:jpeg,jpg,png']);
    
            if ($request->file('imagem')) {
                $destinationPath = 'uploads/images/characters/';
                $ext = $request->imagem->extension();
                $bgImage = time() . "." . $ext;
                $request->imagem->move($destinationPath, $bgImage);
                $data['imagem'] =$destinationPath.$bgImage;
             }
    
             $data['imagem'] = (isset($data['imagem']) && !empty($data['imagem']) ? $data['imagem'] : $character['imagem']);

             Character::whereId($id)->update($data);

             return redirect()->route('characters.index')->with('warning', 'Personagem editado com sucesso!');
        }


        return redirect()->route('characters.index');
        
    }

    public function destroy($id){

        $character = Character::find($id);

        if($character){
            $character->delete();
            return redirect()->route('characters.index')->with('warning', 'Personagem removido com sucesso!');
        }
            
        return redirect()->route('characters.index');
            
    }

    protected function validator($data){
        return Validator::make($data, [
            'descricao' => ['required', 'string', 'max:255']
        ]);
    }
}
