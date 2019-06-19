@extends('layouts.master')

@section('content')
<body class="hideov">
<div class="row">
  <form class="" action="/issueBooks" method="post">
    {{ csrf_field() }}
  <div class="col-md-6">
    <div class="panel panel-default">
      <div class="panel-heading"></div>
      <div class="panel-body">
        <div class="form-group">
          <label for="memberId">Member ID</label>
          <input type="text" class="form-control"name="memberId" value="" id="bookName" required placeholder="Member ID">
        </div>
        <div class="form-group">
          <label for="bookName">Book Name</label>
          <input type="text" class="form-control"name="bookName" value="" id="bookName" required placeholder="Book Name">
        </div>
        <div class="form-group">
          <label for="bookId">Book ID</label>
          <input type="text" class="form-control"name="bookId" value="" id="bookId" required placeholder="Book ID">
        </div>
        <div class="form-group">
          <label for="issueDate">Issue Date</label>
        <input type="date" class="form-control" name="issueDate" required id="issueDate">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary custombtn" name="button">Issue Books</button>
        </div>
      </div>
    </div>
  </div>
    </div>
  </form>


@endsection
</body>
