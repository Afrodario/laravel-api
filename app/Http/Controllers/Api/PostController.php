<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //La funzione with con parametro category risolve la relazione tra tabelle specificata
        //e restituisce le informazioni relative alla categoria
        $posts = Post::with(['category'])->get();

        //Metodo di laravel di paginazione automatica, invia i dati al front, raccolti poi con una chiamata axios
        $posts = Post::paginate(3);

        //Metodo di raccolta dati da tornare alla vista in formato json, response() e json()
        return response()->json(
            [
                'results' => $posts,
                'success' => true
            ]
        );
    }

}
