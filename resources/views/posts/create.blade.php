@extends('layouts.app')
@section('title')
  Post-Create
@endsection
@section('content')
<form action="{{route('posts.store')}}" method="post">
  @csrf
  <div class="form-group">
    <label for="title">Titolo</label>
    <input type="text" name="title" id="title" class="form-control" placeholder="Inserisci titolo" aria-describedby="helpId" required>
    <small id="helpId" class="text-muted">Inserisci il titolo del post</small>
  </div>
  <div class="form-group">
    <label for="body">Body</label>
    <textarea class="form-control" name="body" id="body" rows="3" required></textarea>
    <small class="text-muted">Inserisci il body del post</small>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection