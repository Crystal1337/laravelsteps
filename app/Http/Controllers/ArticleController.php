<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{

    public function index()
    {
      $articles = Article::latest()->get();

      return view('articles.index', ['articles' => $articles]);
    }

    public function show($articleID)
    {
      $article = Article::find($articleID);

      return view('articles.show', ['article' => $article]);
    }

}
