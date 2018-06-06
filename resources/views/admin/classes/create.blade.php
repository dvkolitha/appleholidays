@extends('layouts.app')
@section('page-content')
<!-- page content -->

  <div class="x_panel">
    <div class="x_title">
      <h2>Class Registration Form <small>Click to validate</small></h2>
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
      <form id="demo-form"  method="POST" action="{{route('classes.store')}}" enctype="multipart/form-data">
                  {{csrf_field()}}  
        <label for="name">Name * :</label>
             @if ($errors->has('name'))
                <span class="help-block">
                    <strong style="color:red;">{{ $errors->first('name') }}</strong >
                </span>
             @endif
        <input type="text" id="fullname" class="form-control" name="name" required />

        <label for="year">Year * :</label>
        @if ($errors->has('year'))
           <span class="help-block">
               <strong style="color:red;">{{ $errors->first('year') }}</strong >
           </span>
        @endif
        <input type="number" id="year" class="form-control" name="year" required min="1900" max="2030" />
        <br/>
        <button type="submit" class="btn btn-primary">Submit</button>
    
      </form>
      <!-- end form for validations -->

    </div>
  </div>

<!-- /page content -->
@endsection
