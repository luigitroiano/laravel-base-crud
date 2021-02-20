@extends('layouts.app')
@section('title')
  Post-Home
@endsection
@section('content')
  <a href="" class="btn btn-dark">Create a new post</a>
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
          <a href="">View</a>
          <a href="">Edit</a>
          <a href="">Delete</a>
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