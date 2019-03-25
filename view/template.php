<!DOCTYPE html>
<html>
    <title>PHP MySQL MVC</title>
    <link href="view/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="view/style.css" rel="stylesheet" type="text/css" media="all">
    <script src="view/jquery-1.9.1.js" ></script>
    <script src="view/list.js" ></script>
    <script src="view/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
</head>

<body data-gr-c-s-loaded="true">
    <nav class="navbar navbar-dark" style="background:#007bff">

    <div class="pull-right" style="margin-top:12px; margin-right:30px;">
        <a href="index.php?action=logout" name="but_logout"><i class="material-icons" style="color:white;">exit_to_app</i></a>
    </div>

    <a class="navbar-brand text-white" style="color:#fff" href="#">Employee Management</a>
    </nav>
    <div class="container">
        <?php
        include "view/" . $data['page'] . ".php";
        
        ?>     
    </div> <!-- /container -->

</body>
</html>