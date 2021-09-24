<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller{
    public function index(){
        $titulo = "Hunter x Hunter";
        $clase = "bg-home";
        return view('welcome', ['titulo' => $titulo,'clase' => $clase]);

    }

    public function informacion(){
        $titulo = "Informacion";
        $clase = "bg-info";
        return view('/seccion/informacion', ['titulo' => $titulo,'clase' => $clase]);
    }

    public function historia(){
        $titulo = "Historia";
        $clase = "bg-hisoria";
        return view('/seccion/historia', ['titulo' => $titulo,'clase' => $clase]);
    }

    public function personajes(){
        $titulo = "Personajes";
        $clase = "bg-per";
        return view('/seccion/personajes', ['titulo' => $titulo,'clase' => $clase]);
    }

    public function episodios(){
        $titulo = "Episodios";
        $clase = "bg-epi";
        return view('/seccion/episodios', ['titulo' => $titulo,'clase' => $clase]);
    }

    public function manga(){
        $titulo = "Manga";
        $clase = "bg-manga";
        return view('/seccion/manga', ['titulo' => $titulo,'clase' => $clase]);
    }

    public function opening(){
        $titulo = "Openings";
        $clase = "bg-opening";
        return view('/seccion/opening', ['titulo' => $titulo,'clase' => $clase]);
    }
}