<?php

namespace App\Http\Controllers;

use App\Recipe;
use App\Categoria;
use Illuminate\Http\Request;
use DB;
use Auth;
use Image;

class RecipesController extends Controller
{
    //
    public function index(){
        $recipes = DB::table('recipes')->get();
        $categorias = DB::table('categorias')->get();        
        $users = DB::table('users')->get();
        
        return view('recipes.index', compact('recipes', 'categorias', 'users'));
    }
    public function yours(){
        $recipes = DB::table('recipes')->get();
        $categorias = DB::table('categorias')->get();

        return view('recipes.yours', compact('recipes', 'categorias'));
    }
    public function create(){
        $categorias=Categoria::all();
        return view('recipes.create', compact('categorias'));
        return view('recipes.create');
    }
    public function store(Request $request){     
        if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $filename = time() . "." . $photo->getClientOriginalExtension();
            Image::make($photo)->resize(300, 200)->save(public_path('img/recipes/'. $filename));                                                              
        }
        $user = Auth::user('')->id;   
        Recipe::create([
            'fk_user' => $user,
            'fk_categoria' => request('fk_categoria'),
            'name' => request('name'),
            'description' => request('description'),
            'photo' => $filename,
        ]);  
        return redirect()->route('recipes.yours');
    }
}
