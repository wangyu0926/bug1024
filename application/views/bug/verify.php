<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <base href="<?php echo base_url();?>">
    <link rel="stylesheet" href="static/common/css/bootstrap.min.css" type="text/css" media="screen" charset="utf-8">
    <style type="text/css">
        html { 
            background: url(static/image/login_bg.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        body{
            padding-top:20px;
            font-size:16px;
            font-family: "Open Sans",serif;
            background: transparent;
        }
        h1 {
            font-family: "Abel", Arial, sans-serif;
            font-weight: 400;
            font-size: 40px;
        }

        .margin-base-vertical {
            margin: 40px 0;
        }
        .panel {
            background-color: rgba(255, 255, 255, 0.9);
        }
    </style>
    <title>Verify</title>
</head>
<body>
<div class="container">
    <div class="row">   
        <div class="col-md-6 col-md-offset-3  panel panel-default">
            <h1 class="margin-base-vertical">Have you ever found a bug?</h1>
            <p>Only can I feel the meaning of life when I'm coding...</p>
            <form action="1.php" method="post" class="margin-base-vertical">
                <p class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    <input type="email" class="form-control input-lg" name="email" placeholder="">
                </p>
                <p class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                    <input type="email" class="form-control input-lg" name="email" placeholder="">
                </p>
                <p class="text-center">
                    <button class="btn btn-primary btn-lg" type="submit">Log in</button>
                </p>
            </form>
            <div class="margin-base-vertical">
                <small class="text-muted"><a href="#">www.bug1024.com</a></small>
            </div>
        </div>
    </div>
</div>
</body>
</html>
