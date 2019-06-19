@extends('layouts.master')
<body class="hideov">
@section('content')
<div class="row">
  <form class="" action="/returnBooks" method="post">
    {{ csrf_field() }}
  <div class="col-md-6">
    <div class="panel panel-default">
      <div class="panel-heading">Enter the details</div>
      <div class="panel-body">
        <div class="form-group">
          <label for="memberId">Member ID</label>
          <input type="text" class="form-control"name="memberId" value="" id="memberId" required placeholder="Member ID">
        </div>
        <div class="form-group">
          <label for="bookId">Book ID</label>
          <input type="text" class="form-control"name="bookId" value="" id="bookId" required placeholder="Book ID">
        </div>
        <div class="form-group">
          <label for="returnDate">Return Date</label>
        <input type="date" name="returnDate" class="form-control" required id="returnDate">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary custombtn" name="button">Return Books</button>
        </div>
      </div>
    </div>
  </div>
  </form>

</div>


@endsection
</body>
