<?php

namespace App\Http\Controllers;

use App\Recipe;
use App\Categoria;
use Illuminate\Http\Request;
use DB;
use Auth;
use Image;

class CategoriasController extends Controller
{
    public static function select(){
        $categorias = DB::table('categorias')->get();
    }
}
