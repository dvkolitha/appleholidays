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
<div class="clearfix"></div>

<div class="x_panel">
  <div class="x_title">
    <h2>Email Form <small>Click to send</small></h2>
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
    <form id="demo-form"  method="POST" action="{{route('mail.send')}}" enctype="multipart/form-data"  data-parsley-validate>
                {{csrf_field()}}    

      <label for="email">Email * :</label>
      @if ($errors->has('email'))
         <span class="help-block">
             <strong style="color:red;">{{ $errors->first('email') }}</strong >
         </span>
      @endif
      <input type="email" id="email" class="form-control" name="email" data-parsley-trigger="change" required />

          <label for="studet_id">Select the Student *:</label>
          @if ($errors->has('studet_id'))
             <span class="help-block">
                 <strong style="color:red;">{{ $errors->first('studet_id') }}</strong >
             </span>
          @endif
          <select id="heard" class="form-control" required name="studet_id">
                            <option disabled  >Select Student</option>
                        @foreach($students as $id => $name)
                            <option value="{{ $id }}">{{ $name }}</option>
                        @endforeach
          </select>

          <label for="message">Message (20 chars min, 100 max) :</label>
          <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
            data-parsley-validation-threshold="10"></textarea>

          <br/>
         <button type="submit" class="btn btn-success">Send</button>

    </form>
    <!-- end form for validations -->

  </div>
</div>
<div class="clearfix"></div>

<!-- /page content -->

  @include('errors.error')
<!-- /page content -->
@endsection
