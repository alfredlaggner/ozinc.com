<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <script
            src="https://code.jquery.com/jquery-3.2.1.js"
            integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
            crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::to('src/css/app.css') }}">
{{--
    <link rel="stylesheet" href="{{ URL::to('flipbox/onclick/assets/customs/css/flip-green.css') }}">
    <link rel="stylesheet" href="{{ URL::to('flipbox/onclick/assets/customs/css/flip.css') }}">
--}}
    @yield('styles')
</head>
<body>
@include(('partials.header'))
<div class="container-fluid" style="width:90%">
    @yield('content')
</div>
<script
        src="https://code.jquery.com/jquery-3.2.1.js"
        integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
        crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
<script src="https://unpkg.com/vue"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins)
<script src="/flipbox/onhover/assets/plugins/jquery.min.js"></script>-->
<!-- Include all compiled plugins (below), or include individual files as needed
<script src="/flipbox/onhover/assets/plugins/bootstrap/js/bootstrap.min.js"></script> -->


<!-- Flip animation js -->
<script src="/flipbox/onclick/assets/plugins/jquery.flip.min.js"></script>
<!-- Flip custom js -->
<script src="/flipbox/onclick/assets/customs/js/flip-click.js"></script>

@yield('scripts')
</body>
</html>