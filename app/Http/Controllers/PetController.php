<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    /* Retorna a lista de Pets cadastrados
    
    @return Collection
    */
    public function index() 
    {

        return Pet::get(); 

    }

    public function store(Request $request ){

        $request->validate([
            'nome'=> ['required', 'string', 'between:3,100'],
            'historia' => ['required', 'string'],
            'foto' => ['required', 'url', 'max: 1000']
        ]);

        $dadosDoPet = $request->all();
        
        return Pet::create($dadosDoPet);
    }
}
