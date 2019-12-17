@extends('layout')

@section('content')
<div class="container text-right">
</br>
<a href='/articles/create' class="btn btn-success">Create new Article</a>

</div>
</br>
@foreach($articles as $article)
<div class="jumbotron jumbotron-fluid border border-dark">
  <div class="container">
    <h1 class="display-4">{{$article->header}}</h1>
    <p class="lead">{{$article->body}}</p>
    <p class="text-right"><b>{{$article->publish}}</b></p>
  </div>
  
  <hr>
  <div class="container text-right">
<a href='/articles/{{$article->id}}/edit' class="btn btn-warning">Edite Article</a>
{{ Form::open(['route'=>['article.destroy' , $article->id], 'method'=>'DELETE']) }}
<button class="btn btn-danger">Delete Article</button>
{{ Form::close() }}
</div>
</div>
@endforeach
@endsection