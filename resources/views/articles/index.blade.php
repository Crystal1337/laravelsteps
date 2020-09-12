@extends('template_layout')

@section('content')

<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
				<h2>Welcome to our website</h2>
      </div>
      @foreach($articles as $article)
      <a href="/template/articles/{{$article->id}}"><h1>{{$article->title}}</h1>
			<p><img src="../images/banner.jpg" alt="" class="image image-full" /> </p>
			<p>{{$article->excerpt}}</p></a>
      @endforeach
    </div>
	</div>
</div>

@endsection
