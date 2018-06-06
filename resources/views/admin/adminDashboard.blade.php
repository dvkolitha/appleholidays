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


   <div class="clearfix"></div>


   <div class="clearfix"></div>
   <div class="row"> 
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>User Table<small>Users</small></h2>
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

          <table id="datatable" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>id</th>
                <th>name</th>
                <th>address</th>
                <th>email</th>
                <th>nic_number</th>
                <th>created at</th>
              </tr>
            </thead>
            <tbody>           
              @foreach($users as $user) 
               <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->first_name}}</td>
                <td>{{$user->address}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->nic_number}}</td>
                <td>{{$user->created_at}}</td>
               </tr> 
              @endforeach         
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
   {{--  parents --}}
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Parent Table<small></small></h2>
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

          <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
            <thead>
              <tr>
                <th>id</th>
                <th>name</th>
                <th>gender</th>
                <th>dob</th>
                <th>created at</th>
              </tr>
            </thead>
            <tbody>           
              @foreach($parents as $parent) 
               <tr>
                <td>{{$parent->id}}</td>
                <td>{{$parent->name}}</td>
                <td>{{$parent->dob}}</td>
                <td>{{$parent->gender}}</td>
                <td>{{$parent->created_at}}</td>
               </tr> 
              @endforeach         
            </tbody>
          </table>
        </div>
      </div>
    </div>
   {{--  parents --}}
   {{--  classes --}}
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Class Table<small></small></h2>
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

          <table id="datatable-buttons" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>id</th>
                <th>name</th>
                <th>year</th>
                <th>created at</th>
                <th>updated at</th>
              </tr>
            </thead>
            <tbody>           
              @foreach($classes as $class)  
               <tr>
                <td>{{$class->id}}</td>
                <td>{{$class->name}}</td>
                <td>{{$class->dob}}</td>
                <td>{{$class->created_at}}</td>
                <td>{{$class->updated_at}}</td>
               </tr> 
              @endforeach         
            </tbody>
          </table>
        </div>
      </div>
    </div>
   {{--  classes --}}
   {{--  student --}}
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Student Table<small></small></h2>
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

          <table id="datatable-fixed-header" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>id</th>
                <th>name</th>
                <th>dob</th>
                <th>city</th>
                <th>created at</th>
                <th>updated at</th>
              </tr>
            </thead>
            <tbody>           
              @foreach($students as $student) 
               <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->dob}}</td>
                <td>{{$student->city}}</td>
                <td>{{$student->created_at}}</td>
                <td>{{$student->updated_at}}</td>
               </tr> 
              @endforeach         
            </tbody>
          </table>
        </div>
      </div>
    </div>
   {{--  student --}}
   </div > 
    
   <!-- /page content -->

     @include('errors.error')
   <!-- /page content -->
   @endsection
