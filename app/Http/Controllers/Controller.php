<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function principal(){

        $variavel = "Página Inicial";

        return view('welcome', [
            'title' => $variavel
        ]);
    }

    public function cadastro(){
        return 'CADASTRO';
    }
    
    public function login(){
        return 'LOGIN';
    }
}
