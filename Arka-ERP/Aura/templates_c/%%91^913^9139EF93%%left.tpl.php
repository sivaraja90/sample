<?php /* Smarty version 2.6.25, created on 2017-09-15 16:57:44
         compiled from left.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<title><?php if ($this->_tpl_vars['OverallSiteTitle'] != ''): ?><?php echo $this->_tpl_vars['OverallSiteTitle']; ?>
<?php else: ?> SCADA -::- Aura<?php endif; ?> <?php echo $this->_tpl_vars['AddSiteTitle']; ?>
</title>
   <?php echo $this->_tpl_vars['IncludeCSS']; ?>

   <?php echo $this->_tpl_vars['IncludeJS']; ?>

</head>
<body >
<input type="hidden" id="activeMgmt" value="" autocomplete="Off"><input type="hidden" value="<?php echo $this->_supers['session']['CustomerId']; ?>
"><input type="hidden" value="<?php echo $this->_supers['get']['customer_id']; ?>
">
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
				 <a href="../dashboard.php" class="logo" style="color:#FFFFFF;">
				  <div class="dropdown profile-element"> 
 					<li><img src="images/logo1.png" alt="image" border="0" width="218px" height="75px" style="margin-left:2px; background-color:#FFFFFF;" /></li></span>
                  </div>
				  <div class="logo-element">
					   <img src="images/logo_icon.png" alt="image" border="0"  style="margin-left:2px;"/>
				  </div>
				  </a>
				  <li class="treeview">
				  <a href="../dashboard.php" style="color:#FFFFFF;">
					<i class="fa fa-dashboard" style="font-size:15px; color:#FFFFFF;"></i> <span class="style1">Dashboard</span>
				  </a>
	
				</li>
				  			<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
				<?php if ($this->_tpl_vars['roles']['role_name'] == 'Customer Management'): ?>	
					<li class="treeview">
					  <a href="../customer_list.php" style="color:#FFFFFF;">
						<i class="fa fa-male" style="font-size:15px; color:#FFFFFF;"></i>
						<span class="style1">Customers </span>
					  </a>
					</li>
				<?php endif; ?>
					 
			<?php endforeach; endif; unset($_from); ?>
					<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						<?php if ($this->_tpl_vars['roles']['role_name'] == 'Enquiry Management'): ?>	
							<li class="treeview">
							  <a href="../enquiry_list.php" style="color:#FFFFFF;">
								<i class="fa fa-phone" style="font-size:15px; color:#FFFFFF;"></i>
								<span class="style1">Enquiries </span>
							  </a>
							</li>
						<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
					<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						<?php if ($this->_tpl_vars['roles']['role_name'] == 'Sales Management'): ?>	
					<li class="treeview">
					  <a href="../sales_order_list.php" style="color:#FFFFFF;">
						<i class="fa fa-line-chart" style="font-size:15px; color:#FFFFFF;"></i>
						<span class="style1">Sales </span>
					  </a>
					</li>
					<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
					
					<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						<?php if ($this->_tpl_vars['roles']['role_name'] == 'Service Management'): ?>	
					<li class="treeview">
					  <a href="../service_order_list.php" style="color:#FFFFFF;">
						<i class="fa fa-cubes" style="font-size:15px; color:#FFFFFF;"></i>
						<span  class="style1">Services </span>
					  </a>
					</li>
					<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
					
					<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						<?php if ($this->_tpl_vars['roles']['role_name'] == 'Project Management'): ?>	
					<li class="treeview">
					  <a href="../project_order_list.php" style="color:#FFFFFF;">
						<i class="fa  fa-pie-chart" style="font-size:15px; color:#FFFFFF;"></i>
						<span  class="style1">Projects</span>
					  </a>
					</li>
					<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
					
					
								   <?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						<?php if ($this->_tpl_vars['roles']['role_name'] == 'Store Management'): ?>	

						   <li id="storeMgmt">
						   <a href="#" style="color:#FFFFFF;"><i class="fa fa-hdd-o" style="color:#FFFFFF;"></i><span class="nav-label">Store Mgmt</span><span class="fa arrow"></span></a>
						        <ul class="nav nav-second-level">
								     <li><a title="Inward Management" href="#">Inward Mgmt<span class="fa arrow"></span></a>
									 	<ul class=" nav nav-third-level">
											<li><a href="./inwardReg.php" style="color:#FFFFFF;">Add Inward</a></li>
								            <li><a href="./inwardList.php" style="color:#FFFFFF;">List Inward</a></li>
										</ul>
									 </li>	
					                 <li><a title="Outward Management" href="#"> Outward Mgmt<span class="fa arrow"></span></a>
									  	<ul class=" nav nav-third-level">
											<li><a href="./outwardReg.php">Add Outward</a></li>
								            <li ><a href="./outwardList.php">List Outward</a></li>
										</ul>
									 </li>
					                 
					                 <li><a title="Stock Management" href="#">Stock Mgmt<span class="fa arrow"></span></a>
									    	<ul class=" nav nav-third-level">
								            <li ><a href="./stockList.php">List Stock</a></li>
										</ul>
									 </li>
								 </ul>
				          </li>
						   <?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
					  
					
								<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
				<?php if ($this->_tpl_vars['roles']['role_name'] == 'Mail Management'): ?>	
              <li class="treeview">
              <a href="../mail_list.php" style="color:#FFFFFF;">
                <i class="fa fa-envelope" style="font-size:15px; color:#FFFFFF;"> </i>
				<span  class="style1">Mails </span>
              </a>
               </li>
			   <?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
			   <?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
				<?php if ($this->_tpl_vars['roles']['role_name'] == 'Quote Management'): ?>	
            <li class="treeview">
              <a href="../quote_list.php" style="color:#FFFFFF;">
                <i class="fa fa-clipboard" style="font-size:15px; color:#FFFFFF;"></i>
				 <span  class="style1">Quotes </span>
              </a>
            </li>
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
			<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
				<?php if ($this->_tpl_vars['roles']['role_name'] == 'Po Management'): ?>	
            <li class="treeview">
              <a href="../po_list.php" style="color:#FFFFFF;">
                <i class="fa fa-briefcase" style="font-size:15px; color:#FFFFFF;"></i>
				 <span  class="style1">Purchase Orders </span>
              </a>
            </li>
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
			<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
				<?php if ($this->_tpl_vars['roles']['role_name'] == 'Vendor Management'): ?>	
            <li class="treeview">
              <a href="../vendor_list.php" style="color:#FFFFFF;">
                <i class="fa  fa-bank" style="font-size:15px; color:#FFFFFF;"></i>
				<span  class="style1">Vendors</span>
              </a>
            </li>
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
						<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
				<?php if ($this->_tpl_vars['roles']['role_name'] == 'Material Managementt'): ?>	
            <li class="treeview">
              <a href="../material_list.php" style="color:#FFFFFF;">
                <i class="fa fa-sun-o" style="font-size:15px; color:#FFFFFF;"></i>
				 <span  class="style1">Materials </span>
              </a>
            </li>
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
			<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
				<?php if ($this->_tpl_vars['roles']['role_name'] == 'Product Management'): ?>	
            <li class="treeview">
              <a href="../product_list.php" style="color:#FFFFFF;">
                <i class="fa fa-archive" style="font-size:15px; color:#FFFFFF;"></i>
				<span  class="style1">Products </span>
              </a>
            </li>
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
			<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
				<?php if ($this->_tpl_vars['roles']['role_name'] == 'Employee Management'): ?>	
			<li class="treeview">
              <a href="../employee_list.php" style="color:#FFFFFF;">
                <i class="fa fa-street-view" style="font-size:15px; color:#FFFFFF;"></i>
				<span  class="style1">Employees </span>
              </a>
            </li>
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
			<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
				<?php if ($this->_tpl_vars['roles']['role_name'] == 'User Management'): ?>	
			<li class="treeview">
              <a href="../user_list.php" style="color:#FFFFFF;">
                <i class="fa  fa-user" style="font-size:15px; color:#FFFFFF;"></i>
				<span  class="style1">Users </span>
              </a>
            </li>
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
			<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
				<?php if ($this->_tpl_vars['roles']['role_name'] == 'User Role Management'): ?>	
			<li class="treeview">
              <a href="../user_role_list.php" style="color:#FFFFFF;">
                <i class="fa  fa-user-md" style="font-size:15px; color:#FFFFFF;"></i>
				<span  class="style1">User Roles </span>
              </a>
            </li>
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
			<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
				<?php if ($this->_tpl_vars['roles']['role_name'] == 'User Group Management'): ?>	
			<li class="treeview" >
              <a href="../user_group_list.php" style="color:#FFFFFF;">
                <i class="fa fa-users" style="font-size:15px; color:#FFFFFF;"></i>
				<span  class="style1">User Groups </span>
              </a>
            </li>
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>

                 </ul>
            </div>
        </nav>
</div>
        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		