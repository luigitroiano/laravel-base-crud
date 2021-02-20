@extends('layouts.app')
@section('title')
  Post-Create
@endsection
@section('content')
{{-- <h1>Edit {{$post->title}}</h1> --}}
<form action="{{route('posts.update', ['post'=>$post->id])}}" method="post">
  @csrf
  @method('put')
  <div class="form-group">
    <label for="title">Titolo</label>
    <input type="text" name="title" value="{{$post->title}}" id="title" class="form-control" placeholder="Inserisci titolo" aria-describedby="helpId" required>
    <small id="helpId" class="text-muted">Inserisci il titolo del post</small>
  </div>
  <div class="form-group">
    <label for="body">Body</label>
    <input type="text" class="form-control" name="body" value="{{$post->body}}" id="body" required>
    <small class="text-muted">Inserisci il body del post</small>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection