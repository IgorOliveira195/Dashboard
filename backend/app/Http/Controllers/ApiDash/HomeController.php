<?php

namespace App\Http\Controllers\ApiDash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\Client;

class HomeController extends Controller
{
    public function index(){

        $cliente = Client::all();

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
