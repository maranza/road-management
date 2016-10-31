<?php
use Illuminate\Support\Facades\Input;
use Collective\Html\HtmlServiceProvider;
 ?>

@extends('master')

@if(session()->has('state'))

@section('content')
<div class="container-fluid" style="background-color:white; margin:auto; width:100%; min-height:92vh;">

  <!-- Page Heading -->
  <div class="row">
    <div class="col-md-10 col-md-offset-2">
      <u><h2 class="page-header"><i class="fa fa-lock"></i> Administration Activies</h2></u><small style="float:right; color:green">Only authorized people should view this section</small>
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


  <div class="row">
    <div class="col-md-10 col-md-offset-2">
      <!-- Heading -->
<!-- I removed header here -->
      <!-- Tabs Navigation -->
      <ul class="nav nav-tabs">
        <li class="active"><a href="#tab1" data-toggle="tab">Drivers</a></li>
        <li><a href="#tab2" data-toggle="tab">Users</a></li>
        <li><a href="#tab3" data-toggle="tab">View Tables</a></li>
      </ul>

      <!-- tab sectons -->
      <div class="tab-content">
        <div class="tab-pane active" id="tab1">
          <u><h3 class="text-center">Drivers information</h3></u><br>
          @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
              <strong>Success:</strong> {{ Session::get('success') }}
            </div>
          @endif
          @if(Session::has('added'))
            <div class="alert alert-success" role="alert">
              <strong>Success:</strong> {{ Session::get('added') }}
            </div>
          @endif
          <!-- <h4>Use modals to Add, update Info</h4> -->
          <div class="table-responsive">
            <table class="table table-condensed table-bordered table-striped">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Owner</th>
                  <th>Gender</th>
                  <th>Age</th>
                  <!-- <th>Cell-no</th> -->
                  <!-- <th>E-mail</th> -->
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
                  <td>{{$driver -> surname}}</td>
                  <td>{{$driver -> gender}}</td>
                  <td>{{$driver -> age}}</td>
                  <!-- <td>{{$driver -> cell}}</td> -->
                  <!-- <td>{{$driver -> email}}</td> -->
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
                  <td>{!! Html::linkRoute('drivers.edit', 'edit', array($driver->id), array('class' => 'btn btn-warning')) !!}</td>
                  <td>{!! Html::linkRoute('drivers.show', 'view', array($driver->id), array('class' => 'btn btn-primary')) !!}</td>
                  <td>
                    {!! Form::open(['route' => ['drivers.destroy', $driver->id], 'method' => 'DELETE']) !!}
                      {!! Form::submit('Del', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                  </td>
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
        </div> <!-- End first Tab-->

        <!-- Second Tab -->
        <div class="tab-pane" id="tab2">
          <!-- <h3>Add forms to add users</h3> -->
          <!-- <h4>Use modals to Add, update Info</h4> -->
          <br>
          <button class="btn btn-primary" type="button" name="button" data-target="#myModal" data-toggle="modal">Add user</button><br><hr>
          @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
              <strong>Success:</strong> {{ Session::get('success') }}
            </div>
          @endif
          @if(Session::has('added'))
            <div class="alert alert-success" role="alert">
              <strong>Success:</strong> {{ Session::get('added') }}
            </div>
          @endif
          <!-- <h4>Use modals to Add, update Info</h4> -->
          <div class="table-responsive">
            <table class="table table-condensed table-bordered table-hover table-striped">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Owner</th>
                  <th>Gender</th>
                  <th>Age</th>
                  <!-- <th>Cell-no</th> -->
                  <!-- <th>E-mail</th> -->
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
                  <td>{{$driver -> surname}}</td>
                  <td>{{$driver -> gender}}</td>
                  <td>{{$driver -> age}}</td>
                  <!-- <td>{{$driver -> cell}}</td> -->
                  <!-- <td>{{$driver -> email}}</td> -->
                  <td>{{$driver -> address}}</td>
                  <td>{{$driver -> car}}</td>
                  <td>{{$driver -> model}}</td>
                  <td>{{$driver -> color}}</td>
                  <td>{{$driver -> license}}</td>
                  <td>{{$driver -> alcohol_status}} %</td>
                  <td class="danger">{{$driver -> speed_status}}</td>
                  <td>{{$driver -> speed}} km/h</td>
                  <td>{!! Html::linkRoute('drivers.edit', 'edit', array($driver->id), array('class' => 'btn btn-warning')) !!}</td>
                  <td>{!! Html::linkRoute('drivers.show', 'view', array($driver->id), array('class' => 'btn btn-primary')) !!}</td>
                  <td>
                    {!! Form::open(['route' => ['drivers.destroy', $driver->id], 'method' => 'DELETE']) !!}
                      {!! Form::submit('Del', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                  </td>
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

          <!-- Modals -->
          <div class="modal fade" id="myModal" tabindex="-1" data-backdrop="static">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button class="close" type="close" name="button" data-dismiss="modal">&times;</button>
                  <h3 class="modal-title">Add user</h3>
                </div>
                <div class="modal-body"> <!-- Add User Modal -->
                  <!-- laravel form -->
                  {!! Form::open(['route' => 'drivers.store', 'method' => 'post']) !!}

                    {{ Form::label('name', 'name:') }}
                    {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}

                    {{ Form::label('surname', 'surname:') }}
                    {{ Form::text('surname', Input::old('name'), array('class' => 'form-control')) }}

                    {{ Form::label('gender', 'gender:') }}
                    {{ Form::text('gender', Input::old('name'), array('class' => 'form-control')) }}

                    {{ Form::label('age', 'age:') }}
                    {{ Form::text('age', Input::old('name'), array('class' => 'form-control')) }}

                    {{ Form::label('cell', 'cell:') }}
                    {{ Form::text('cell', Input::old('name'), array('class' => 'form-control')) }}

                    {{ Form::label('email', 'email:') }}
                    {{ Form::email('email', Input::old('name'), array('class' => 'form-control')) }}

                    {{ Form::label('address', 'address:') }}
                    {{ Form::text('address', Input::old('name'), array('class' => 'form-control')) }}

                    {{ Form::label('car', 'car-name:') }}
                    {{ Form::text('car', Input::old('name'), array('class' => 'form-control')) }}

                    {{ Form::label('model', 'car-model:') }}
                    {{ Form::text('model', Input::old('name'), array('class' => 'form-control')) }}

                    {{ Form::label('color', 'car-color:') }}
                    {{ Form::text('color', Input::old('name'), array('class' => 'form-control')) }}

                    {{ Form::label('license', 'car-license:') }}
                    {{ Form::text('license', Input::old('name'), array('class' => 'form-control')) }}

                    {{ Form::submit('add driver', array('class' => 'btn btn-primary', 'style' => 'margin: 10px;'))}}
                    {{ Form::reset('clear', array('class' => 'btn btn-primary'))}}
                  {!! Form::close() !!}
                  <!-- hard coded form -->
                  <!-- <form class="">
                    <label for="">Email</label>
                    <input class="span form-control" type="text" name="name" placeholder="email"><br><br>
                    <label for="">Password</label>
                    <input class="span4 form-control" type="password" name="name" placeholder="password"><br><br>
                    <button class="btn btn-primary" type="button" name="button">add</button>
                    <button class="btn btn-primary" type="reset" name="button">clear</button>
                  </form> -->
                </div> <!-- end add user modal -->
                <div class="modal-footer">
                  <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true" type="button" name="button">close</button>
                </div>
              </div>
            </div>
          </div> <!--end modal-->


        </div><!-- End second Tab-->


        <div class="tab-pane" id="tab3">
          <h3>Add tables</h3>




        </div>
      </div><!-- End third Tab-->



    </div>
  </div>
</div>
@endsection



@else

<?php
  return redirect()->route('init');
 ?>

@endif
