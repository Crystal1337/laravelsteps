@extends('template_layout')

@section('head')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
@endsection

@section('content')

<div id="wrapper">
  <div id="page" class="container">
    <h1> New article </h1>

    <form method="POST" action="/template/articles">
      @csrf
      <div class="field">
        <label class="label" for="title">Title</label>
        <div class="control">
          <input class="input" type="text" name="title" id="title">
        </div>
      </div>

      <div class="field">
        <label class="label" for="excerpt">Excerpt</label>
        <div class="control">
          <textarea class="textarea" name="excerpt" id="excerpt"></textarea>
        </div>
      </div>

      <div class="field">
        <label class="label" for="body">Body</label>
        <div class="control">
          <textarea class="textarea" name="body" id="body"></textarea>
        </div>
      </div>

      <div class="field is-grouped">
        <div class="control">
          <button class="button is-link" type="submit">Submit</button>
        </div>
      </div>

  </div>
</div>

@endsection
