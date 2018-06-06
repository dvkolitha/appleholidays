@extends('layouts.app')
@section('page-content')
<!-- page content -->
<!-- top tiles -->
<div class="row tile_count">
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
    <div class="count">2500</div>
    <span class="count_bottom"><i class="green">4% </i> From last Week</span>
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-clock-o"></i> Average Time</span>
    <div class="count">123.50</div>
    <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-user"></i> Total Males</span>
    <div class="count green">2,500</div>
    <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-user"></i> Total Females</span>
    <div class="count">4,567</div>
    <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
    <div class="count">2,315</div>
    <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
    <div class="count">7,325</div>
    <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
  </div>
</div>
<!-- /top tiles -->
  <div class="x_panel">
    <div class="x_title">
      <h2>Parent Details Edit <small>Click to validate</small></h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Settings 1</a>
            </li>
            <li><a href="#">Settings 2</a>
            </li>
          </ul>
        </li>
        <li><a class="close-link"><i class="fa fa-close"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">

      <!-- start form for validation -->
    <form id="demo-form"  method="POST" action="{{route('parents.update',$parent->id)}}" enctype="multipart/form-data">
                    {{ method_field('PUT') }}
                    {{csrf_field()}}  
          <label for="name">Full Name * :</label>
               @if ($errors->has('name'))
                  <span class="help-block">
                      <strong style="color:red;">{{ $errors->first('name') }}</strong >
                  </span>
               @endif
          <input type="text" id="fullname" class="form-control" name="name" required value="{{$parent->name}}" />

          <label>Gender *:</label>
           @if ($errors->has('gender'))
              <span class="help-block">
                  <strong style="color:red;">{{ $errors->first('gender') }}</strong >
              </span>
           @endif
          <p>
            @if ($parent->gender == 'male')
               Male:
               <input type="radio" class="flat" name="gender" id="" value="male" checked required  /> 
               Female:
               <input type="radio" class="flat" name="gender" id="" value="female" />
            @elseif($parent->gender == 'female')
               <input type="radio" class="flat" name="gender" id="" value="male"    /> 
               Female:
               <input type="radio" class="flat" name="gender" id=""  value="female" checked  />
             @endif
          </p>
          <label for="dob">Date Of Birth * :</label>
          @if ($errors->has('dob'))
             <span class="help-block">
                 <strong style="color:red;">{{ $errors->first('dob') }}</strong >
             </span>
          @endif
          <input type="date" id="date" class="form-control" name="dob" data-parsley-trigger="change" required value="{{$parent->dob}}" />
          <br/>
          <button type="submit" class="btn btn-primary">Submit</button>
      
     </form>
      <!-- end form for validations -->

    </div>
  </div>
<div class="clearfix"></div>
<div class="clearfix"></div>
<!-- /page content -->
@endsection
