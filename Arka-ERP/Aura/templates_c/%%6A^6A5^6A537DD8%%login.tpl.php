<?php /* Smarty version 2.6.25, created on 2016-07-26 12:24:24
         compiled from login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'login.tpl', 35, false),)), $this); ?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $this->_tpl_vars['title']; ?>
</title>
   <?php echo $this->_tpl_vars['IncludeCSS']; ?>

   <?php echo $this->_tpl_vars['IncludeJS']; ?>

</head>

<body class="gray-bg">
    <div class="middle-box text-center loginscreen  animated fadeInDown">
        <div>
            <div>
                 <h1 class="logo-name" ><img src="img/logo.png" alt="images" ></h1>

            </div><br><br>
            <h3>Welcome to Arka SCADA Systems</h3>
            <!--<p>A perfect Remote Monitoring system for your vehicles.</p>-->
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
		
            <form class="m-t" role="form" action="" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" id="userName" name="userName"  required="" autocomplete="Off">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" id="password" name="password" required="" autocomplete="Off">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="#"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
            
            </form>
            <p class="m-t"> <small>Design and Developed by Our Own Team<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y') : smarty_modifier_date_format($_tmp, '%Y')); ?>
</small> </p>
        </div>
    </div>
</body>
</html>