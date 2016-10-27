<?php
use Illuminate\Support\Facades\Input;
use Collective\Html\HtmlServiceProvider;
 ?>

<!DOCTYPE>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sensor</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css" media="screen" title="no title">
    <link rel="stylesheet" href="/css/style.css" media="screen" title="no title">
  </head>
  <body>

    <h1 class="text-centered">Vehicle Model:</h1><hr>

    <div class="container">
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
      <div class="row">
        <div class="col-sm-8 col-md-offset-2">


          {!! Form::model($driver, ['route' => ['vehicle.update', $driver->id], 'method' => 'put']) !!}

            {{ Form::label('alcohol_status', 'alcohol_status:') }}
            {{ Form::text('alcohol_status', Input::old('alcohol_status'), array('class' => 'form-control', 'autocomplete' => 'off')) }}
            <br>
            {{ Form::label('speed_status', 'speed_status:') }}
            {{ Form::text('speed_status', Input::old('speed_status'), array('class' => 'form-control', 'autocomplete' => 'off')) }}
            <br>


            {{ Form::submit('submit', array('class' => 'btn btn-success')) }}

          {!! Form::close() !!}


        </div>
      </div>
    </div>




    <!-- jQuery -->
      <script src="/js/jquery.js"></script>
      <!-- Bootstrap Core JavaScript -->
      <script src="/js/bootstrap.min.js"></script>
      <!-- Script to Activate the Carousel -->
      <!-- <script>
      $('.carousel').carousel({
          interval: 5000 //changes the speed
      })
      </script> -->
  </body>
</html>
