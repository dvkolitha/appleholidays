@extends('layouts.app')
@section('page-content')
<!-- page content -->
    <div class="page-title">
      <div class="title_left">
        <h3>Create User</h3>
      </div>
    </div>

    <div class="clearfix"></div>
       <form  method="POST" action="{{route('users.store')}}" enctype="multipart/form-data">
                   {{csrf_field()}}
                  <div class="form-group">
                    <label for="first_name">First Name</label>
                    @if ($errors->has('first_name'))
                        <span class="help-block">
                            <strong style="color:red;">{{ $errors->first('first_name') }}</strong >
                        </span>
                    @endif
                    <input type="text" class="form-control" name="first_name" placeholder="Enter First Name">
                  </div>
                  <div class="form-group">
                    <label for="middle_name">Middle Name</label>
                    <input type="text" class="form-control" name="middle_name" >
                  </div>
                  <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" name="last_name" >
                  </div>
                  <div class="form-group">
                    <label for="email">Email address</label>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong style="color:red;">{{ $errors->first('email') }}</strong >
                        </span>
                    @endif
                    <input type="email" class="form-control" name="email" placeholder="Enter email">
                    <small class="text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group">
                    <label for="address">Address</label>
                    <textarea class="form-control" name="address" rows="3"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="nic_number">NIC Number</label>
                     @if ($errors->has('nic_number'))
                        <span class="help-block">
                            <strong style="color:red;">{{ $errors->first('nic_number') }}</strong >
                        </span>
                    @endif
                    <input type="number" class="form-control" name="nic_number" placeholder="Enter NIC Number">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Upload Profile Photo</label>
                    @if ($errors->has('photo_id'))
                        <span class="help-block">
                            <strong style="color:red;">{{ $errors->first('photo_id') }}</strong >
                        </span>
                    @endif
                    <input type="file" class="form-control-file" name="photo_id">
                    <small class="text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                   </div>
                   <div class="form-group">
                        <label for="password">Password</label>
                         @if ($errors->has('password'))
                        <span class="help-block">
                            <strong style="color:red;">{{ $errors->first('password') }}</strong >
                        </span>
                    @endif
                        <input type="password"  class="form-control" name="password" >
                   </div>
                   <div class="form-group">
                        <label for="password">Password Confirmation</label>
                        <input type="password"  class="form-control" name="password_confirmation" >
                   </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                  @include('errors.error')
                </form>

    </div>


<!-- /page content -->
@endsection
