<?php
/**
 * Created by PhpStorm.
 * User: Shailesh
 * Date: 9/21/15
 * Time: 1:29 PM
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Crank House Admin</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/admin.css"); ?>">
    <!--Color Box-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/colorbox.min.css');?>">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <img src="<?php echo base_url("assets/img/logo-black.png"); ?>" style="height:70px;width:105px;" >
        <p class="header pull-right">Welcome Admin! <a href="logout">Logout</a></p>
    </div>
    <!-- /.container -->
</nav>

<div style="margin-top: 70px;">
        <div class="col-md-2 sidebar" id="cssmenu">
            <ul>
                <li><a href="#" class="trip active"><span class="glyphicon glyphicon-list sidebaricon"></span>&nbsp;&nbsp;Trips</a></li>
                <li><a href="#" class="addGallery"><span class="glyphicon glyphicon-picture sidebaricon"></span>&nbsp;&nbsp;Gallery</a></li>
            </ul>
        </div>
        <div class="col-md-10" id="content">
        </div>
</div>

<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.colorbox-min.js"); ?>"></script>


<script type="text/javascript">
    $(document).ready(function () {
        $('#content').load('trip','refresh');
        $('#cssmenu li a').on('click', function() {
            $(this).parent().parent().find('.active').removeClass('active');
            $(this).parent().addClass('active');
        });
    });



    $('.trip').click(function(){
        $('#content').load('trip','refresh');
    });
    $('.addGallery').click(function(){
        $('#content').load('gallery','refresh');
    });
</script>


</body>
</html>