<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class ActionController extends Controller
{
  public function updateActu(Request $request, $id){
    $article = Article::findOrFail($id);
    
    $article->title = $request->title;
    $article->description = $request->description;

    if($request->file("image")){ // en php if($_FILES["image"]["name"]){ 
     //verifier si le fichier est valide ou non selon les required
     $request->validate(['image'=>'required|mimes:png,jpg,jpeg,webp|min:0|max:5048']);
     //renommer le request->image de manière unique grace à time() et mettre dans une var $filename
     $filename = time().'.'.$request->image->extension();
     //créer var $path et mettre l'image requêtée avec le storeAs cela va enregistrer dans un dossier 'images' le fichier $filename et fait un lien symbolique vers le public images
     $path = $request->file('image')->storeAs(//storeAs() allows you to control the file name. 
     'images', $filename, 'public');

     Storage::delete('public/'.$article->image_path);//supprime dans le dossier public l'image de l'article précédent sinon les images remplacées s'accumulent dans le pc
     $article->image_path = $path;//la nouvelle image 

    }  
    $article->save(); 
    return redirect('/adminActu');
    }

    public function delete(Request $request) {
      $article = Article::find($request->id);
      Storage::delete('public/'.$article->image_path);
      $article->delete();
      return redirect('/adminActu');
  }

  public function add(Request $request){
    $request->validate([
      'image'=>'required|mimes:png,jpg,jpeg,webp|min:0|max:5048'
    ]);
    $filename = time().'.'.$request->image->extension();

    $path = $request->file('image')->storeAs(
      'images', $filename, 'public'
    );
    
    $article = new Article;
    $article->title = $request->title;
    $article->description = $request->description;
    $article->image_path = $path;
    $article->save();
    return redirect('/adminActu');
  }

  public function register(Request $request){
    $user = new User;
    $user->name = $request->identifiant;
    $user->password = $request->password;
    $user->email = $request->email;
    $user->save();
    return redirect('/actualites');
  }
  public function connexion(Request $request){
    // $user = new User;
    // $user->name = $request->identifiant;
    // $user->password = $request->password;
    // $user->email = $request->email;
    // $user->save();
    return redirect('/actualites');
  }
}
