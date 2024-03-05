<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StaticController extends Controller
{
    public function index()
    {
//        $articles = Article::all();
         $articles = Article::orderBy('id', 'desc')->get();
        // $articles = Article::where('id', '<', 3)->orderBy('id', 'desc')->get();
        // $articles = DB::select('SELECT * FROM `articles`');
        // $articles = Article::orderBy('id', 'desc')->take(1)->get();
        // $articles = Article::orderBy('id', 'desc')->paginate(1);

        return view('static.index')->with('articles', $articles);
        // return view('static.index', compact('title'));
    }

    public function about()
    {
        $data = [
            'params' => ['BMW', 'Audi']
        ];
        return view('static.about')->with($data);
    }
}
