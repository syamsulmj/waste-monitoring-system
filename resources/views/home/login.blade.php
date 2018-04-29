@extends('master')

@section('content')
  <div class="container login">
    <div class="title">
      <h1>Waste Monitoring System</h1>
    </div>
    <div class="login-form">
      <form action="{{ action('HomeController@login_checking') }}" method="POST">
        {{ csrf_field() }}
        <div class="input-group mb-3 customed">
          <div class="input-group-prepend customed-logo">
            <span class="input-group-text">
              <i class="fas fa-user"></i>
            </span>
          </div>
          <input type="text" class="form-control" name="username" placeholder="Username"/>
        </div>
        <div class="input-group mb-3 customed">
          <div class="input-group-prepend customed-logo">
            <span class="input-group-text">
              <i class="fas fa-lock"></i>
            </span>
          </div>
          <input type="password" class="form-control" name="password" placeholder="Password"/>
        </div>
        @if ($errors->first('status'))
          <div class="warning-message special">
            {{ $errors->first('status') }}
          </div>
        @endif
        <div class="customed-button">
          <div>
            <a href="#" class="btn btn-light make-oval">Register</a>
            <button type="submit" class="btn btn-dark make-oval">Login</button>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection
