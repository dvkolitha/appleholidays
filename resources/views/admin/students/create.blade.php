@extends('layouts.app')
@section('page-content')
<!-- page content -->

  <div class="x_panel">
    <div class="x_title">
      <h2>Students Registration Form <small>Click to validate</small></h2>
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
      <form id="demo-form"  method="POST" action="{{route('students.store')}}" enctype="multipart/form-data">
                  {{csrf_field()}}  
        <label for="name">Name * :</label>
             @if ($errors->has('name'))
                <span class="help-block">
                    <strong style="color:red;">{{ $errors->first('name') }}</strong >
                </span>
             @endif
        <input type="text" id="fullname" class="form-control" name="name" required />
        <label for="city">Clity * :</label>
             @if ($errors->has('city'))
                <span class="help-block">
                    <strong style="color:red;">{{ $errors->first('city') }}</strong >
                </span>
             @endif
        <input type="text" id="fullname" class="form-control" name="city" required />
        <div class="form-group">
          <label for="class_id">Select the Class</label>
          @if ($errors->has('class_id'))
              <span class="help-block">
                  <strong style="color:red;">{{ $errors->first('class_id') }}</strong >
              </span>
          @endif
          <select class="form-control" name="class_id"  >
                   <option disabled  >Select Class</option>
               @foreach($classes as $id => $name)
                   <option value="{{ $id }}">{{ $name }}</option>
               @endforeach
          </select>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Multiple</label>
          <div class="col-md-9 col-sm-9 col-xs-12">
            <select class="select2_multiple form-control" multiple="multiple" name="parent_id[]">
                  <option selected   value="">Select Parents</option>
              @foreach($parents as $id => $name)
                  <option value="{{ $id }}">{{ $name }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <label>Gender *:</label>
         @if ($errors->has('gender'))
            <span class="help-block">
                <strong style="color:red;">{{ $errors->first('gender') }}</strong >
            </span>
         @endif
        <p>
          Male:
          <input type="radio" class="flat" name="gender" id="genderM" value="male" checked="" required /> Female:
          <input type="radio" class="flat" name="gender" id="genderF" value="female" />
        </p>
        <label for="dob">Date Of Birth * :</label>
        @if ($errors->has('dob'))
           <span class="help-block">
               <strong style="color:red;">{{ $errors->first('dob') }}</strong >
           </span>
        @endif
        <input type="date" id="date" class="form-control" name="dob" data-parsley-trigger="change" required />
        <br/>
        <button type="submit" class="btn btn-primary">Submit</button>
    
      </form>
      <!-- end form for validations -->

    </div>
  </div>

<!-- /page content -->
@endsection
