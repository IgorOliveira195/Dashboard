<?php

namespace App\Http\Controllers\ApiDash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $cliente = [
            [
                'id' => 1,
                'name' => 'Igor Oliveira Holanda',
                'email' => 'igor.holanda095@hotmail.com'
            ],

            [
                'id' => 2,
                'name' => 'Felipe Augusto Ramos Timoteo',
                'email' => 'atendimento@mastertag.com.br'
            ]
        ];

        $produto= [
            [
                'id' => 1,
                'name' => 'Video game',
                'value' => '10.50'
            ]
        ];

        return response()->json([
                'cliente' => $cliente,
                'produto' => $produto
            ]);
    }
}
