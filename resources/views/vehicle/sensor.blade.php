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

    <h1 class="text-centered">Vehicle model:</h1><hr>

    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <!-- <form class="" action="" method="update">
            <div class="form-group">
              <label for="">Alcohol_level: </label>
              <input class="form-control" type="text" name="alcohol_level" value="">
            </div><br>
            <div class="form-group">
              <label for="">Speed_level: </label>
              <input class="form-control" type="text" name="speed" value="">
            </div>
            <div class="form-group">
              {!! Form::Label('driver', 'driver:') !!}
              <select class="form-control" name="item_id">
                @foreach($drivers as $driver)
                  <option value="{{$driver->id}}">{{$driver->id}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <button class="btn btn-success" type="button" name="button">Detect</button>
            </div>
          </form> -->

          {!! Form::model($driver, ['route' => ['drivers.update', $driver->id], 'method' => 'put']) !!}

            {{ Form::label('alcohol_status', 'alcohol_status:') }}
            {{ Form::text('alcohol_status', Input::old('alcohol_status'), array('class' => 'form-control')) }}
            <br>
            {{ Form::label('speed_status', 'speed_status:') }}
            {{ Form::text('speed_status', Input::old('speed_status'), array('class' => 'form-control')) }}
            <br>
            <div class="form-group">
              {!! Form::Label('driver', 'driver:') !!}
              <select class="form-control" name="item_id">
                @foreach($drivers as $driver)
                  <option value="{{$driver->id}}">{{$driver->id}}</option>
                @endforeach
              </select>
            </div>

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
