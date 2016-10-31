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
        <div class="col-sm-12">

        </div><br><br>
      </div>
      <div class="row">
        <div class="col-sm-8 col-md-offset-2">


          <div class="table-responsive">
            <table class="table table-condensed table-bordered table-hover table-striped">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Owner</th>
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
                  <td>{{$driver -> alcohol_status}} %</td>
                  <td class="danger">{{$driver -> speed_status}}</td>
                  <td>{{$driver -> speed}} km/h</td>
                  <!-- <td>{!! Html::linkRoute('vehicle.edit', 'edit', array($driver->id), array('class' => 'btn btn-warning')) !!}</td> -->
                  <td>{!! Html::linkRoute('vehicle.show', 'detect', array($driver->id), array('class' => 'btn btn-primary')) !!}</td>
                  <td>
                    <!-- {!! Form::open(['route' => ['vehicle.destroy', $driver->id], 'method' => 'DELETE']) !!} -->
                      <!-- {!! Form::submit('Del', ['class' => 'btn btn-danger']) !!} -->
                    {!! Form::close() !!}
                  </td>
                </tr>
                @endforeach

              </tbody>
            </table>
          </div>


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
