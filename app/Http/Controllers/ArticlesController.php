<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\article;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = article::all();
        return view('articles.index', ['articles'=>$articles]);
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

    public function edit($id)
    {
        $articleEdit = article::find($id);
        return view('articles.edit',['article'=>$articleEdit]);
    }

    public function update(Request $request, $id)
    {
        $articleEdit= article::find($id);
        $articleEdit->fill($request->all());
        $articleEdit->save();

        return redirect()->route('article.index');
    }

    public function destroy($id)
    {
        $articleDelete = article::find($id)->delete();
        return redirect()->route('article.index');
    }
}
