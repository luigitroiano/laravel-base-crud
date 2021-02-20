@extends('layouts.app')
@section('title')
  Post-Home
@endsection
@section('content')
  <a href="{{route('posts.create')}}" class="btn btn-dark">Create a new post</a>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>TITLE</th>
        <th>BODY</th>
        <th>ACTIONS</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($posts as $value)
      <tr>
        <td>{{$value->id}}</td>
        <td>{{$value->title}}</td>
        <td>{{$value->body}}</td>
        <td>
          <a href="{{route('posts.show',['post'=>$value->id])}}">View</a>
          <a href="{{route('posts.edit',['post'=>$value->id])}}">Edit</a>
          <form action="{{route('posts.destroy',['post'=>$value->id])}}" method="POST">
            @csrf
            @method('DELETE')
            <button><a style="color: red">Delete</a></button>
            
          </form>
          
        </td>
      </tr>
      @empty
      <tr>
        <td>No Post</td>
      </tr>
      @endforelse
    </tbody>
  </table>
@endsection