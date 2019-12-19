<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RecipesController extends Controller
{
    //
    public function index(){
        $recipes = DB::table('recipes')->get();
        return view('recipes.index', compact('recipes'));
    }
}
