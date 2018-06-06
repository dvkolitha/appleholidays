@extends('layouts.app')
@section('page-content')
<!-- page content -->
    <div class="page-title">
      <div class="title_left">
        <h3>Edit User</h3>
      </div>
    </div>
    <div class="clearfix"></div>
  </span>
                <form  method="POST" action="{{route('users.update',$user->id)}}" enctype="multipart/form-data">
                   {{csrf_field()}}
                   {{ method_field('PUT') }}
                        <div class="profile_img">
                          <div id="crop-avatar">
                            <!-- Current avatar -->
                            <img class="img-responsive avatar-view" src="/images/profile-photo/{{$user->photo ? auth()->user()->profile_photo(auth()->user()->id): 'empty.jpg'}}" alt="Avatar" title="Change the avatar" style="height:200px;width:200px;">
                          </div>
                        </div>
                  <div class="form-group">
                    <label for="first_name">First Name</label>
                    @if ($errors->has('first_name'))
                        <span class="help-block">
                          <p style="color:red;">NISD<strong >{{ $errors->first('first_name') }}</strong ></p>
                        </span>
                    @endif
                    <input type="text" class="form-control" name="first_name" placeholder="Enter First Name" value="{{$user->first_name}}">
                  </div>
                  <div class="form-group">
                    <label for="middle_name">Middle Name</label>
                    <input type="text" class="form-control" name="middle_name" value="{{$user->middle_name}}" >
                  </div>
                  <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" name="last_name" value="{{$user->last_name}}">
                  </div>
                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter email" value="{{$user->email}}">
                    <small class="text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group" id="myFrame">
                    <label for="address">Address</label>
                    <textarea  class="form-control" name="address" rows="3" >{{$user->address}}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="nic_number">NIC Number</label>
                    @if ($errors->has('nic_number'))
                        <span class="help-block">
                            <strong style="color:red;">{{ $errors->first('nic_number') }}</strong >
                        </span>
                    @endif
                    <input type="number" class="form-control" name="nic_number" placeholder="Enter NIC Number" value="{{$user->nic_number}}">
                  </div>




                  <div class="form-group">
                    <label for="exampleInputFile">Upload Profile Photo</label>
                    <input type="file" class="form-control-file" name="photo_id">
                    <small class="text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                   </div>
                   <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password"  class="form-control" name="password" value="" >
                   </div>
                   <div class="form-group">
                        <label for="password">Password Confirmation</label>
                        <input type="password"  class="form-control" name="password_confirmation" >
                   </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
@include('errors.error')
    </div>


<!-- /page content -->
@endsection
