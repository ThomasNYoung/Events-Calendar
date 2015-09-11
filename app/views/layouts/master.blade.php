<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Event Slapper</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- jQuery -->
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<div>    
    <div id="page-wrapper">
        <div id="title">@yield('content')</div>
    </div>


    <div id="btn">
            <div id='top'></div>
            <div id='middle'></div>
            <div id='bottom'></div>
    </div>
    <div id="box">
        <div id="items">
            <div class="item"> <a href="{{ action('HomeController@showEvents') }}">Events</a></div>
            
            <div class="item"> <a href="{{ action('HomeController@showManageEvents') }}">Manage Events</a></div>
            <div class="item"> <a href="{{ action('HomeController@showProfile') }}">Manage Profile</a></div>  
            <div class="item"><a href="{{ action('HomeController@showContacts') }}">Contact</a></div>
        </div>
    </div>
</div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- JavaScript for sidebar woop woop -->
    <script src="js/sidebar.js"></script>

    <!-- Menu Toggle Script -->

    

</body>

</html>