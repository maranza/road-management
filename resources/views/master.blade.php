<!DOCTYPE html>
<html lang="en">

<!-- This is the head you will find the title, links, and meta data -->
@include('partials._head')

<body>

  <!-- header -->
  @include('partials._navigation')
  <!-- End Header -->

  <div class="wrapper"> <!--Start Wrapper-->


    @include('partials._messages')
<!-- Page Content -->
    @yield('content')
<!-- End Page Content -->



  </div><!--End of wrapper-->

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
