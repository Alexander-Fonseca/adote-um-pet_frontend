<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetController extends Controller
{
    public function index() 
    {

        return [

            [
                'nome' => 'Lulu',
            'historia' => 'conteudo da historia'
            ],
            [
                'nome' => 'Paçoca',
            'historia' => 'conteudo da historia'
            ],
            [
                'nome' => 'Princesa',
            'historia' => 'conteudo da historia'
            ],
        ];
    }
}
