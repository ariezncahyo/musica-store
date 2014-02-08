@extends('_templates.login')
 
@section('title')
    Login Page
@stop
@section('content')
    <div class="content">
      {{ Form::open() }}
        <h4>Sign In to your registered account.</h4>
        <br/>
        @if (Session::has('login_errors'))
            <p class="alert alert-danger">
                Username or password incorrect.
            </p>
        @endif
        <br/>
        <div class="login-fields">            
          <div class="field">
            {{ Form::text('username', NULL, ['class'=>'login username-field input-xlarge', 'placeholder'=>'Username']) }}
          </div> <!-- /.field -->
          <div class="field">
            {{ Form::password('password', ['class'=>'login password-field input-xlarge', 'placeholder'=>'Password']) }}
          </div> <!-- /.field -->
        </div><!-- /.login-fields -->
        <div class="login-actions">
            <br/>
            {{ Form::submit('Sign In', ['class'=>'button btn btn-large btn-primary btn-madmin pull-right']) }}
            <br/>
        </div><!-- /.login-actions -->
      {{ Form::close() }}
    </div><!-- /.content -->
@stop