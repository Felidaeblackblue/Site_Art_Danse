<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Danse;
use App\Models\Article;
use Illuminate\Support\Facades\Gate;

class NavController extends Controller
{
    public function home(){
        return view('accueil');
    }
    public function showPrice(){
        return view('tarifs');
    }
    public function showPlanning(){
        $danses = Danse::all();
        return view('planning',['danses' => $danses]);
    }
    public function showActualities(){
        $articles = Article::all();
        return view('actualites',['articles' => $articles]);
    }
    public function showContact(){
        
        return view('contact');
    }
    public function updateActu(Request $request, $id){  
        $article = Article::findOrFail($id);      
        return view('updateActu',['article' => $article]);
    }
    public function add(){
        return view('addActu');
    }

    public function register(){
        return view('register');
    }
    public function connexion(){
        return view('login');
    }

    public function admin(){
        $articles = Article::all();      
        return view('adminActu',['articles' => $articles]);
    }
                                    
}
