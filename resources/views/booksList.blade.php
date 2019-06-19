@extends('layouts.master')

@section('content')

<div class="panel panel-default">
  <div class="panel-heading">Books List</div>
  <div class="panel-body">
    <table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th scope="col">BookID</th>
          <th scope="col">Title</th>
          <th scope="col">Edition</th>
          <th scope="col">Category</th>
          <th scope="col">Books Available</th>
      </thead>
      <tbody>

        @foreach($books as $book)
        <tr>
          <td>{{$book->bookId}}</td>
          <td>{{$book->bookTitle}}</td>
          <td>{{$book->edition}}</td>
          <td>{{$book->catName}}</td>
          <td>{{$book->totalAvail}}</td>

        </tr>
        @endforeach
  </div>
</div>


@endsection
