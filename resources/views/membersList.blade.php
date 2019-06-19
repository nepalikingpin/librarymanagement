@extends('layouts.master')

@section('content')

<div class="panel panel-default">
  <div class="panel-heading">Members List</div>
  <div class="panel-body">
    <table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Contact</th>
          <th scope="col">Id No</th>
          <th scope="col">Department</th>
          <th scope="col">Address</th>
          <th scope="col">Type</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($members as $mem)
        <tr>
          <td>{{$mem->memId}}</td>
          <td>{{$mem->memName}}</td>
          <td>{{$mem->email}}</td>
          <td>{{$mem->contact}}</td>
          <td>{{$mem->cnic}}</td>
          <td>{{$mem->dept}}</td>
          <td>{{$mem->address}}</td>
          <td>{{$mem->memType}}</td>
          <td> <a class="btn btn-danger"href="#">Edit</a> </td>
        </tr>
        @endforeach
  </div>
</div>


@endsection

<!-- @section('script')
<script>
$( "#edit" ).click(function() {
  alert( "Handler for edit called." );

});
$( "#delete" ).click(function() {
  alert( "Handler for delete called." );
});
</script>
  @endsection -->
