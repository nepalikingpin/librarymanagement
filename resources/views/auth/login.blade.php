@extends('layouts.app')
@section('content')
<div style=" height:1000px;background-image: url(images/background.jpg);" class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">

                <div class="panel-body">
                  <div class="panel-heading text-center form_head"><h2 class="customfont"><b>MNSS</b> Library</h2></div>
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="custom_field form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <div class="inner-addon right-addon">
                            <i class="glyphicon glyphicon-user"></i>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter your email" required autofocus>
                            </div>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>


                        <div class="custom_field form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="inner-addon right-addon">
                              <i class="glyphicon glyphicon-lock"></i>
                                <input id="password" type="password" class="form-control" name="password" required placeholder="Enter your password">
                            </div>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div>
                          <button type="submit" class="btn btn-primary btn-block custombtn">
                              Login
                          </button>
                        </div>
                        <div class="form-group">
                          <div class="row custom_field text-center" style="margin-right: 15px;">
                            <div class="col-md-6">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                              </div>
                                <div class="col-md-6">
                                  <a class="btn btn-link " href="{{ route('password.request') }}">
                                      Forgot Your Password?
                                  </a>
                                </div>
                            </div>
                          </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
