@extends('layouts/userlayout')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-primary">
        <div class="panel-heading">Login to User Panel</div>
        <div class="panel-body">
          @if ($errors != 'None')
            <div class="alert alert-danger">
              <strong>Invalid Username or Password</strong>
            </div>
          @endif
          
          {!! Form::open(array('url' => 'userlogin/login', 'class' => 'form-horizontal')) !!}
          
          {{--  <div class="form-group">
            <label for="name" class="col-lg-2 control-label">Username</label>
            <div class="col-lg-8">
              <input type="text" class="form-control" id="name" name="name">
            </div>
          </div>  --}}
           <div class="form-group">
            <label for="email" class="col-lg-2 control-label">E-mail</label>
            <div class="col-lg-8">
              <input type="text" class="form-control" id="email" name="email" required>
            </div>
          </div>
          
          <div class="form-group">
            <label for="password" class="col-lg-2 control-label">Password</label>
            <div class="col-lg-8">
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
          </div>
          
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Log in</button>
          </div>
          <br><br><br>
          {{--  <div class="alert alert-dismissible alert-warning">
             **********************************************
          </div>  --}}
          
        </div>
      </div>
    </div>
  </div>

  </div>
  
{!! Form::close() !!}
</body>
</html>
@endsection