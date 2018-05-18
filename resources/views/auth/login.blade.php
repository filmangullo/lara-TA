@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3"> </div>
        <div class="col-md-6" style="border:1px solid darkgrey;">
            <legend style="font-size: 18px;"> Login </legend>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                    {{ csrf_field() }}            
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-12 control-label">E-Mail Address</label>
    
                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
    
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-12 control-label">Password</label>
    
                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control" name="password" required>
    
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary col-md-12">Login</button>   
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label style="padding-top:6px; padding-left:14px;">
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>                                                    
                                    </div>
                                    
                                    <div class="col-md-6" style="padding-left:0px;";>
                                        <a style="font-size:14px; padding-left: 6px;" class="btn btn-link" href="{{ route('password.request') }}">Forgot Your Password?</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>                        
                </div>
        </div>
    </div>
@endsection
