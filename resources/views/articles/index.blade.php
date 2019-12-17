@extends('layout')

@section('content')
<div class="container text-right">
<a href='/articles/create' class="btn btn-success">Create new Article</a>
</div>
<div class="jumbotron jumbotron-fluid border border-dark">
  <div class="container">
    <h1 class="display-4">Header</h1>
    <p class="lead">TEXT.</p>
    <p class="text-right">date</p>
  </div>
</div>

@endsection