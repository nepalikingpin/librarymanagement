@extends('master')

@section('content')

<div class="row">
 <div class="col-md-12">
  <br />
  <h3>Edit Record</h3>
  <br />
  @if(count($errors) > 0)

  <div class="alert alert-danger">
         <ul>
         @foreach($errors->all() as $error)
          <li>{{$error}}</li>
         @endforeach
         </ul>
  @endif
  <form method="post" action="{{action('MemberController@update', $request)}}">
   {{csrf_field()}}
   <input type="hidden" name="_method" value="PATCH" />
   <div class="form-group">
    <input type="text" name="name" class="form-control" value="{{$req->name}}" placeholder="Enter Name" />
   </div>
   <div class="form-group">
    <input type="text" name="email" class="form-control" value="{{$req->email}}" placeholder="Enter Email" />
   </div>
   <div class="form-group">
    <input type="text" name="contact" class="form-control" value="{{$req->contact}}" placeholder="Enter Contact" />
   </div>
   <div class="form-group">
    <input type="text" name="cnic" class="form-control" value="{{$req->cnic}}" placeholder="Enter Id No" />
   </div>
   <div class="form-group">
    <input type="text" name="adddress" class="form-control" value="{{$req->address}}" placeholder="Enter Address" />
   </div>
   <div class="form-group">
    <input type="text" name="dept" class="form-control" value="{{$req->dept}}" placeholder="Enter Department" />
   </div>
   <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Edit" />
   </div>
  </form>
 </div>
</div>

@endsection
