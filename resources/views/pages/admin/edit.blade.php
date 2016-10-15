<?php
use Illuminate\Support\Facades\Input;
use Collective\Html\HtmlServiceProvider;
?>
@extends('master')

@section('content')
<div class="page-wrapper">
<div class="container-fluid" style="background-color:white; margin:auto; width:100%; min-height:92vh;">
  <!-- Page Heading -->
  <div class="row">
    <div class="col-md-10 col-md-offset-2">
      <h2 class="page-header">
        <i class="fa fa-cab"></i>  Real-Time Car Monitoring
      </h2>
      <ol class="breadcrumb">
        <li>
          <i class="fa fa-dashboard"></i>  <a href="#">Dashboard</a>
        </li>
        <li class="active">  <!--It was active before-->
          <i class="fa fa-table"></i> Update <!--Make This a Navigation variable-->
        </li>
      </ol>
    </div>
  </div>
  <!-- /.row -->

  <!-- /.row -->

  <div class="row">
    <div class="col-md-10 col-md-offset-2" style="min-height:92vh;">
      <div class="row">

          <!-- laravel form -->
          {!! Form::model($driver, ['route' => ['drivers.update', $driver->id], 'method' => 'PUT']) !!}
          <div class="col-md-6">
            {{ Form::label('name', 'name:') }}
            {{ Form::text('name', null, array('class' => 'form-control', 'style' => 'color:red')) }}

            {{ Form::label('surname', 'surname:') }}
            {{ Form::text('surname', null, array('class' => 'form-control', 'style' => 'color:red')) }}

            {{ Form::label('gender', 'gender:') }}
            {{ Form::text('gender', null, array('class' => 'form-control', 'style' => 'color:red')) }}

            {{ Form::label('age', 'age:') }}
            {{ Form::text('age', null, array('class' => 'form-control', 'style' => 'color:red')) }}

            {{ Form::label('cell', 'cell:') }}
            {{ Form::text('cell', null, array('class' => 'form-control', 'style' => 'color:red')) }}

            {{ Form::label('email', 'email:') }}
            {{ Form::email('email', null, array('class' => 'form-control', 'style' => 'color:red')) }}

            {{ Form::label('address', 'address:') }}
            {{ Form::text('address', null, array('class' => 'form-control', 'style' => 'color:red')) }}
          </div>

          <div class="col-md-6">
                {{ Form::label('car', 'car-name:') }}
                {{ Form::text('car', null, array('class' => 'form-control', 'style' => 'color:red')) }}

                {{ Form::label('model', 'car-model:') }}
                {{ Form::text('model', null, array('class' => 'form-control', 'style' => 'color:red')) }}

                {{ Form::label('color', 'car-color:') }}
                {{ Form::text('color', null, array('class' => 'form-control', 'style' => 'color:red')) }}

                {{ Form::label('license', 'car-license:') }}
                {{ Form::text('license', null, array('class' => 'form-control', 'style' => 'color:red')) }}
          </div>
      </div>

      <div class="row">
        <div class="col-md-6 col-md-offset-2"><br><br>

          {{ Form::submit('update', array('class' => 'btn btn-success btn-block', 'style' => 'margin: 10px;'))}}
          {{ Form::reset('clear', array('class' => 'btn btn-danger btn-block', 'style' => 'margin: 10px;'))}}

        </div>
      </div>
          {!! Form::close() !!}


    </div>
  </div>


  <!-- /.row -->


  <!-- /.container-fluid -->


  <!-- /#page-wrapper -->

</div>


</div>

@endsection
