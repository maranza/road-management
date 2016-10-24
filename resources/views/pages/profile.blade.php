@extends('master')

@section('content')
      <div class="page-wrapper">
      <div class="container-fluid" style="background-color:white; margin:auto; width:100%;">
        <!-- Page Heading -->
        <div class="row">
          <div class="col-md-10 col-md-offset-2">
            <h2 class="page-header">
              <i class="fa fa-cab"></i>  Profile
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
          <div class="col-md-10 col-md-offset-2" style="min-height:92vh;">
            <u><h3 class="page-header text-center">User information information</h3></u>

            <div class="row">
              <div class="col-md-6 profile-info" style="padding-top:30px; padding-bottom:50px; padding-left:50px; border-top:1px solid black;">

                <div class="row">
                  <div class="col-md-12 text-center">
                    <h3>Bio Info:</h3><hr><br>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="id-image">
                      <img src="" alt="#image" />
                    </div>
                  </div>
                </div>

                <table class="table table-condensed table-bordered table-hover table-striped">
                  <tr>
                      <td><label for="name">Name:</label></td>
                      <td>{{$driver->name}} <br></td>
                  </tr>
                  <tr>
                      <td><label for="name">Surname:</label></td>
                      <td>{{$driver->surname}} <br></td>
                  </tr>
                  <tr>
                      <td><label for="name">Gender:</label></td>
                      <td>{{$driver->gender}} <br></td>
                  </tr>
                  <tr>
                      <td><label for="name">Age:</label></td>
                      <td>{{$driver->age}} <br></td>
                  </tr>
                  <tr>
                      <td><label for="name">Cell:</label></td>
                      <td>{{$driver->cell}} <br></td>
                  </tr>
                  <tr>
                      <td><label for="name">E-mail:</label></td>
                      <td>{{$driver->email}} <br></td>
                  </tr>
                  <tr>
                      <td><label for="name">Address:</label></td>
                      <td>{{$driver->address}} <br></td>
                  </tr>
                </table>

              </div><!-- ./fist colmn -->

              <div class="col-md-6 profile-info" style="padding-top:30px; padding-bottom:50px; padding-left:50px; border-top:1px solid black;">

                <div class="row">
                  <div class="col-md-12 text-center">
                    <h3>Vehicle Info:</h3><hr><br>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="id-image">
                      <img src="" alt="#image" />
                    </div>
                  </div>
                </div>

                <table class="table table-condensed table-bordered table-hover table-striped">
                  <tr>
                      <td><label for="name">vehicle-Name:</label></td>
                      <td>{{$driver->car}} <br></td>
                  </tr>
                  <tr>
                      <td><label for="name">Vehicle-Model:</label></td>
                      <td>{{$driver->model}} <br></td>
                  </tr>
                  <tr>
                      <td><label for="name">vehicle-color:</label></td>
                      <td>{{$driver->color}} <br></td>
                  </tr>
                  <tr>
                      <td><label for="name">vehicle-License:</label></td>
                      <td>{{$driver->license}} <br></td>
                  </tr>
                  <tr>
                      <td><label for="name">Alcohol-Status:</label></td>
                      <td>{{$driver->alcohol_status}} <br></td>
                  </tr>
                  <tr>
                      <td><label for="name">Speed-Status:</label></td>
                      <td>{{$driver->speed_status}} <br></td>
                  </tr>
                  <tr>
                      <td><label for="name">Speed:</label></td>
                      <td>{{$driver->speed}} <br></td>
                  </tr>
                </table>


              </div><!-- ./fist colmn -->
            </div><!---->

            </div>

          </div><!--Main Container-->
        </div><!--Main Row-->
        <!-- /.row -->
        <!-- /.container-fluid -->
        <!-- /#page-wrapper -->
      </div>
      </div>

@endsection
