<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\article;

class ArticlesController extends Controller
{
    public function index()
    {
        return view('articles.index');
    }

    public function create()
    {
        return view('articles.create');
    }
    public function store(Request $request)
    {
      article::create($request->all());
      
      return redirect()->route('article.index');
    }
}
