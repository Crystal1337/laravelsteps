<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{

    public function index()
    {
      //render a list of resource
      $articles = Article::latest()->get();

      return view('articles.index', ['articles' => $articles]);
    }

    public function show($articleID)
    {
      //show a single element of resource
      $article = Article::find($articleID);

      return view('articles.show', ['article' => $article]);
    }

    public function create()
    {
      //shows a view to create new resource
      return view('articles.create');
    }

    public function store()
    {
      //persist the new resource
      dump(request()->all());
      $article = new Article();
      $article->title = request('title');
      $article->excerpt = request('excerpt');
      $article->body = request('body');

      $article->save();

      return redirect('template/articles');
    }

    public function edit()
    {
      //show a view to edit existing resource

    }

    public function update()
    {
      //persist the edited resource

    }

    public function destroy()
    {
      //delete the resource

    }

}
