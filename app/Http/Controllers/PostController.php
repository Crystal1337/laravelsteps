<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
  function show($slug)
  {
    $post = \DB::table('posts')->where('slug', $slug)->first();

  //  $posts = [
  //    'my-first-post' => 'Welcome. This is my first post',
  //    'my-second-post' => 'Hello again. This is my second post'
  //  ];
  //  if(!array_key_exists($post, $posts))
  //  {
  //    abort(404, 'Sorry that post does not exist');
  //  }
    return view('post', [
      'post' => $post
    ]);
  }
}
