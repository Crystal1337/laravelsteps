<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;
class PostController extends Controller
{
  function show($slug)
  {

    //  $posts = [
    //    'my-first-post' => 'Welcome. This is my first post',
    //    'my-second-post' => 'Hello again. This is my second post'
    //  ];
    //  if(!array_key_exists($post, $posts))
    //  {
    //    abort(404, 'Sorry that post does not exist');
    //  }


    //$post = DB::table('posts')->where('slug', $slug)->first();
    //if(!$post)
    //{
    //  abort(404);
    //}


    return view('post', [
      'post' => Post::where('slug', $slug)->firstOrFail()
    ]);
  }
}
