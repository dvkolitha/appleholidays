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
      <div class="page-title">
        <div class="title_left">
          <h3>Contacts Design</h3>
        </div>

        <div class="title_right">
          <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_content">
              <div class="row">
                
                <div class="clearfix"></div>

                <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                  <div class="well profile_view">
                    <div class="col-sm-12">
                      <h4 class="brief"><i>{{$student->name}}</i></h4>
                      <div class="left col-xs-7">
                        <h2>class = {{$class}}</h2>
                        <h2>{{$student->dob}}</h2>
                        <p><strong>Parenst Details </strong> </p>
                        @foreach($parents as $parent )
                          <ul class="list-unstyled">
                            <li> Name: {{$parent->name}} </li>
                            <li> Dob #: {{$parent->dob}}  </li>
                          </ul>
                        @endforeach()
                      </div>
                      <div class="right col-xs-5 text-center">
                        <img src="images/user.png" alt="" class="img-circle img-responsive">
                      </div>
                    </div>
                    <div class="col-xs-12 bottom text-center">
                      <div class="col-xs-12 col-sm-6 emphasis">
                        <p class="ratings">
                          <a>4.0</a>
                          <a href="#"><span class="fa fa-star"></span></a>
                          <a href="#"><span class="fa fa-star"></span></a>
                          <a href="#"><span class="fa fa-star"></span></a>
                          <a href="#"><span class="fa fa-star"></span></a>
                          <a href="#"><span class="fa fa-star-o"></span></a>
                        </p>
                      </div>
                      <div class="col-xs-12 col-sm-6 emphasis">
                        <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                          </i> <i class="fa fa-comments-o"></i> </button>
                        <button type="button" class="btn btn-primary btn-xs">
                          <i class="fa fa-user"> </i> Profile
                        </button>
                      </div>
                    </div>
                  </div>
                </div>



              </div>
            </div>
          </div>
        </div>
      </div>
   
    
   <!-- /page content -->

     @include('errors.error')
   <!-- /page content -->
   @endsection
