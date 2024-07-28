<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $articles = [
            [
                'title' => 'Mon test article',
                'content' => 'Contenu de mon premier article'
            ],
            [
                'title' => 'Mon deuxième article',
                'content' => 'Contenu de mon deuxième article'
            ],
            [
                'title' => 'Mon troisième article',
                'content' => 'Contenu de mon troisième article'
            ],
        ];

        return view('home', [
            'articles' => \App\Models\Post::all()
        ]);
    }
}
