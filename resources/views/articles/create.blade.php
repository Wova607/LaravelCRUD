@extends('layout')

@section('content')
<div class="container">
<h1>Create Article</h1>
</br>

@if($errors->any())
  @foreach($errors->all() as $error)
<div class="alert alert-danger" role="alert">
  {{$error}}
</div>
  @endforeach
@endif

{{ Form::open(['route'=>['article.store']]) }}
  <div class="form-group">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <label for="headerArticle">Header of Article</label>
    <input type="text" class="form-control" name="header" id="headerArticle" placeholder="The title of my article">
  </div>
    
  <div class="form-group">
    <label for="articleText">Text for the Article</label>
    <textarea class="form-control" id="articleText" rows="3" placeholder="The text of my article" name="body"></textarea>
  </div>
  <div class="form-group">
    <label for="dateArticle">Date of publication</label>
    <input type="date" class="form-control" id="dateArticle" name="publish" >
  </div>
  <br/>
  <div class="text-right">
  <button class="btn btn-success" type="Submit">Create</button>
  </div>
{{ Form::close() }}
</div>
@endsection