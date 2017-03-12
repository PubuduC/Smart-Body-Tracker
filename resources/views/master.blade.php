<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Smart Body Tracker- @yield('title')</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/oss.html5shiv.min.js"></script>
    <script src="js/oss.respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container" style="padding-left: 10px">
    <div class="page-header">
        <h1 >@yield('topic') <small>@yield('description')</small></h1>
    </div>
    @yield('content')

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/ajax.googleapis.jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</div>
<div class="text-center" style="padding-top: 40px">
    Smart Body Tracker - Full Body Motion Detection using Wireless Sensors
</div>
</body>
</html>