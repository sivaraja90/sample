<?php /* Smarty version 2.6.25, created on 2017-11-29 17:06:24
         compiled from index.tpl */ ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Arka ERP | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
	 <link href="codebase/skins/dhtmlxmessage_dhx_skyblue.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition gray-bg login">
    <div class="login-box">
	
	<!-- /.login-logo -->
      <div class="login-logo">
        <a href="#"><img src="./images/logo1.png" alt="Arka Logo" class="logo-name" width="50%"></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
       <h3> <p class="login-box-msg">Sign in to start your session</p> </h3>
        <form method="post" name="stafflogin" action="index.php" onSubmit="return StaffvalidateForm()">
          <div class="form-group has-feedback">
		  		  	<input type="hidden" id="hdAction" value="">
            <input type="email" class="form-control" name="email" id="email" placeholder="Email"  autocomplete="Off">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="password"  id="password"  autocomplete="Off">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Remember Me
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
          </div>
        </form>

       <!-- <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
        </div><!-- /.social-auth-links -->

        <a href="#">I forgot my password</a><br>
     <!--   <a href="registration.php" class="text-center">Register a new membership</a>-->

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
<?php echo '

<script  type="text/javascript">
 
 function StaffvalidateForm()
{
var x=document.forms["stafflogin"]["email"].value;
var y=document.forms["stafflogin"]["password"].value;
if (x==null || x=="")
  {
   dhtmlx.alert({
		title: "Email ID Error !",
		type:"alert-error",
		text: "Please enter the Email ID",	
					});		
		return false;
  }
  if (y==null || y=="")
  {
   dhtmlx.alert({
		title: "Password Error !",
		type:"alert-error",
		text: "Please enter the Password",	
					});		
		return false;
  }
  stafflogin.hdAction.value = 1;
	return true;
}
</script>
    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js"></script>
	<script src="codebase/dhtmlxmessage.js"></script>
	<script src="codebase/dhtmlxcontainer.js"></script>
    <script>
      $(function () {
        $(\'input\').iCheck({
          checkboxClass: \'icheckbox_square-blue\',
          radioClass: \'iradio_square-blue\',
          increaseArea: \'20%\' // optional
        });
      });
    </script>
'; ?>

  </body>
</html>