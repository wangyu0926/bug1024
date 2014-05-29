<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bootstrap Admin</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?php echo base_url();?>">
    <link rel="stylesheet" type="text/css" href="static/back/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="static/back/lib/bootstrap/css/bootstrap-responsive.css">
    <link rel="stylesheet" type="text/css" href="static/back/stylesheets/theme.css">
    <link rel="stylesheet" href="static/back/lib/font-awesome/css/font-awesome.css">
    <script src="static/js/jquery.min.js" type="text/javascript"></script>
    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .brand { font-family: georgia, serif; }
        .brand .first {
            color: #ccc;
            font-style: italic;
        }
        .brand .second {
            color: #fff;
            font-weight: bold;
        }
    </style>
    <link rel="shortcut icon" href="static/favicon.ico">
  </head>
  <body> 
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container-fluid">
                <ul class="nav pull-right">
                </ul>
                <a class="brand" href="index.html"><span class="first">Your</span> <span class="second">Company</span></a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
    <div class="row-fluid">
    <div class="dialog span4">
        <div class="block">
            <div class="block-heading">Sign In</div>
            <div class="block-body">
                <form action="index.php/bug/admin/check" method="post">
                    <label>Username</label>
                    <input type="text" class="span12" name="admin">
                    <label>Password</label>
                    <input type="password" class="span12" name="pwd">
                    <label>Token</label>
                    <input type="text" class="span12" name="token">
                    <input type="submit" class="btn btn-primary pull-right" value="Login">
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
        <p class="pull-right" style=""><a href="http://www.portnine.com" target="blank">Theme by Portnine</a></p>
        
        <p><a href="reset-password.html">Forgot your password?</a></p>
    </div>
</div>
    <script src="static/back/lib/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>


