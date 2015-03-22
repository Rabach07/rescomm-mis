<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>P3M PENS | Login</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="<?=base_url();?>public/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="<?=base_url();?>public/plugins/font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?=base_url();?>public/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="<?=base_url();?>public/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />
    <!-- favicon -->
    <link rel="shortcut icon" href="<?=base_url();?>public/dist/img/favicon.ico" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="<?=base_url();?>"><b>P3M</b>PENS</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Silakan login untuk masuk ke Dashboard</p>
            <?php
                $attributes = array(
                    'id' => 'login',
                    'role' => 'form'
                ); 
                echo form_open('',$attributes);
            ?>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Username" required />
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password" required />
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox"> Ingat Saya
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-success btn-block btn-flat">Masuk &nbsp;<i class="fa fa-chevron-right"></i></button>
                    </div>
                    <!-- /.col -->
                </div>
            <?php echo form_close(); ?> 

            <a href="<?=site_url()?>login/lupa">Lupa Password ?</a>

        </div>
        <!-- /.login-box-body -->
        <div style="margin: 5px auto; opacity: 0.5; text-align: center;">
            Copyright &copy; 2015 - P3M PENS<br><b>Best in Chrome Browser</b>
        </div>
        <!-- /.login-box-footer -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery 2.1.3 -->
    <script src="<?=base_url();?>public/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?=base_url();?>public/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="<?=base_url();?>public/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <script>
    $(function() {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
    </script>
</body>

</html>
