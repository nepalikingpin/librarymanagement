@extends('layouts.master')

@section('content')

<div class="panel panel-default">
  <div class="panel-heading">Books List</div>
  <div class="panel-body">
    <table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th scope="col">Issue ID</th>
          <th scope="col">Issue Date</th>
          <th scope="col">Book Id</th>
          <th scope="col">Member Id</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          @foreach($books as $book)
          <td>{{$book->issueId}}</td>
          <td>{{$book->issueDate}}</td>
          <td>{{$book->bookId}}</td>
          <td>{{$book->memId}}</td>
          <td> <a  class="btn btn-danger"href="#">Edit</a> </td>
        </tr>
        @endforeach
  </div>
</div>


@endsection
