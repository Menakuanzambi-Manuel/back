<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;
use App\Models\Anuncio;

class HomeController extends Controller
{
    public function index(){
        return view('admin.home.card');
    }

}
