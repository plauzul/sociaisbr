<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Encontre a festa mais proxima!">
    <meta name="author" content="Paulo Henrique">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/plugins/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>-->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/plugins/creative.min.css" type="text/css">
    <link rel="stylesheet" href="css/plugins/iziModal.min.css" type="text/css">
    <link rel="stylesheet" href="css/plugins/jquery.fileupload.css" type="text/css">
    <link rel="stylesheet" href="css/app.css" type="text/css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="page-top">
    @yield('body')

    <!-- jQuery -->
    <script src="js/plugins/jquery.js"></script>

    <!-- GLOBALS VAR -->
    <script>
        var url = "{{url('/')}}/";
        var token = $('meta[name="csrf-token"]').attr('content');
    </script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/plugins/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/plugins/jquery.ui.widget.js"></script>
    <script src="js/plugins/scrollreveal.min.js"></script>
    <script src="js/plugins/jquery.easing.min.js"></script>
    <script src="js/plugins/jquery.fittext.js"></script>
    <script src="js/plugins/iziModal.min.js"></script>
    <script src="js/plugins/jquery.fileupload.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/plugins/creative.min.js"></script>

    <!-- All Scripts -->
    <script src="js/all.js"></script>
</body>
</html>