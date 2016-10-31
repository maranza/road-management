@extends('master')

@section('content')
      <div class="page-wrapper">
      <div class="container-fluid" style="background-color:white; margin:auto; width:100%;">
        <!-- Page Heading -->
        <div class="row">
          <div class="col-md-10 col-md-offset-2">
            <h2 class="page-header">
              <i class="fa fa-cab"></i>  Real-Time Vehicle Monitoring
            </h2>
            <ol class="breadcrumb">
              <li>
                <i class="fa fa-dashboard"></i>  <a href="#">Dashboard</a>
              </li>
              <li class="active">  <!--It was active before-->
                <i class="fa fa-table"></i> Tables
              </li>
            </ol>
          </div>
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-md-10 col-md-offset-2" style="height:92vh;">
            <u><h3 class="page-header text-center">Monitored vehicle information</h3></u>
            <div class="table-responsive">
              <table class="table table-condensed table-bordered table-striped ">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <!-- <th>Surname</th> -->
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Cell-no</th>
                    <th>E-mail</th>
                    <th>Address</th>
                    <th>Car-Name</th>
                    <th>Car-Model</th>
                    <th>Car-Color</th>
                    <th>Car-License</th>
                    <th>Alcohol-Level</th>
                    <th>Speed-Level</th>
                    <th>Speed</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach($drivers as $driver)
                  <tr class="success">
                    <td>{{$driver -> id}}</td>
                    <td>{{$driver -> name}}</td>
                    <!-- <td>{{$driver -> surname}}</td> -->
                    <td>{{$driver -> gender}}</td>
                    <td>{{$driver -> age}}</td>
                    <td>{{$driver -> cell}}</td>
                    <td>{{$driver -> email}}</td>
                    <td>{{$driver -> address}}</td>
                    <td>{{$driver -> car}}</td>
                    <td>{{$driver -> model}}</td>
                    <td>{{$driver -> color}}</td>
                    <td>{{$driver -> license}}</td>
                    @if(($driver -> alcohol_status) >=10)
                    <td class="danger">{{$driver -> alcohol_status}} %</td>
                    @else
                    <td>{{$driver -> alcohol_status}} %</td>
                    @endif


                    @if(($driver->speed_status) >= 120)
                    <td class="danger">{{$driver -> speed_status}}</td>
                    @else
                    <td>{{$driver -> speed_status}}</td>
                    @endif


                    <td>{{$driver -> speed}} km/h</td>
                  </tr>
                  @endforeach

                  <!-- <tr class="success">
                    <td>1</td>
                    <td>Oratile</td>
                    <td>Khutsoane</td>
                    <td>Male</td>
                    <td>26</td>
                    <td>0749773057</td>
                    <td>o.maranza</td>
                    <td>Mafikeng</td>
                    <td>Jeep</td>
                    <td>SRT</td>
                    <td>Black</td>
                    <td>MVP-619-GP</td>
                    <td>Normal</td>
                    <td class="danger">Alert</td>
                    <td>60 km/h</td>
                  </tr> -->

                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- /.row -->


        <!-- /.container-fluid -->


        <!-- /#page-wrapper -->

      </div>


      </div>

@endsection
