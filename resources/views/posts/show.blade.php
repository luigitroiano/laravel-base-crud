@extends('layouts.app')
@section('title')
  Show-Post
@endsection
@section('content')
  <div class="container">
    <div>{{$post->title}}</div>
    <div>{{$post->body}}</div>
  </div>
@endsection