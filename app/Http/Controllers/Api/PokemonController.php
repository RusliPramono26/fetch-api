<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pokemon;
use Illuminate\Support\Facades\Http;

class PokemonController extends Controller
{
    public function index(){
        $response = Http::get('http://pokeapi.co/api/v2/pokemon/');
        $data = $response->json();

        if($response->successfull()){
            foreach ($data as $Data) {
                // Menyimpan setiap item ke database
                $dataPokemon =  Pokemon::create([
                    'name' => $Data['name'],
                    'base_experience' => $Data['base_experience'],
                    'weight' => $Data['weight'],
                    'image_path' => $Data['image_path']
                   
                ])
                ->where('id','<',400)
                ->where('weight','>=', 100);
                return view('list',compact($dataPokemon ));        
        }
        
    }
}   
}
