<!DOCTYPE html>
<html lang="en">

<!-- This is the head you will find you title, links, and meta data -->
@include('partials._head')

<body>
<!-- header -->
@include('partials._navigation')
@include('partials._slider')
<!-- End Header -->

<!-- Page Content -->
<div class="container-fluid">
    @include('partials._banner')
            <hr>
    @yield('content')
            <hr>
    @include('partials._footer')
</div>

    <!-- jQuery -->
    <script src="assets/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>
</html>
