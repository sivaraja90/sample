<?php /* Smarty version 2.6.25, created on 2017-11-29 17:06:55
         compiled from left.tpl */ ?>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <ul class="sidebar-menu">
            <!--<li class="header">NAVIGATIONS</li>-->
            <li class="treeview">
              <a href="dashboard.php">
                <i class="fa fa-dashboard" style="font-size:15px; color:#FFFFFF;"></i> <span class="style1">Dashboard</span>
              </a>

            </li>
			<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
				<?php if ($this->_tpl_vars['roles']['role_name'] == 'Customer Management'): ?>	
					<li class="treeview">
					  <a href="customer_list.php">
						<i class="fa fa-male" style="font-size:15px; color:#FFFFFF;"></i>
						<span class="style1">Customers </span>
						<!--<span class="label label-primary pull-right">4</span>-->
					  </a>
					 <!-- <ul class="treeview-menu">
						<li><a href="#"><i class="fa fa-circle-o"></i> List of Enquiries</a></li>
						<li><a href="#"><i class="fa fa-circle-o"></i> Create New Enquiry</a></li>-->
						<!--<li><a href="#"><i class="fa fa-circle-o"></i> Fixed</a></li>
						<li><a href="#"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>-->
					<!--  </ul>-->
					</li>
				<?php endif; ?>
					 
			<?php endforeach; endif; unset($_from); ?>
					
			<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
				<?php if ($this->_tpl_vars['roles']['role_name'] == 'Enquiry Management'): ?>	
					<li class="treeview">
					  <a href="enquiry_list.php">
						<i class="fa fa-phone" style="font-size:15px; color:#FFFFFF;"></i>
						<span class="style1">Enquiries </span>
						<!--<span class="label label-primary pull-right">4</span>-->
					  </a>
					</li>
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
            <!--<li>
              <a href="pages/widgets.html">
                <i class="fa fa-th"></i> <span>Widgets</span> <small class="label pull-right bg-green">new</small>
              </a>
            </li>-->
			<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
				<?php if ($this->_tpl_vars['roles']['role_name'] == 'Sales Management'): ?>	
            <li class="treeview">
              <a href="sales_order_list.php">
                <i class="fa fa-line-chart" style="font-size:15px; color:#FFFFFF;"></i>
                <span class="style1">Sales </span>
                <!--<i class="fa fa-angle-left pull-right"></i>-->
              </a>
              <!--<ul class="treeview-menu">
                <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
                <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
                <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
                <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
              </ul>-->
            </li>
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
			
			<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
				<?php if ($this->_tpl_vars['roles']['role_name'] == 'Service Management'): ?>	
            <li class="treeview">
              <a href="service_order_list.php">
                <i class="fa fa-cubes" style="font-size:15px; color:#FFFFFF;"></i>
                <span  class="style1">Services </span>
                <!--<i class="fa fa-angle-left pull-right"></i>-->
              </a>
              <!--<ul class="treeview-menu">
                <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
                <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
                <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
                <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
                <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
                <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
              </ul>-->
            </li>
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
			
			<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
				<?php if ($this->_tpl_vars['roles']['role_name'] == 'Project Management'): ?>	
            <li class="treeview">
              <a href="project_order_list.php">
                <i class="fa  fa-pie-chart" style="font-size:15px; color:#FFFFFF;"></i>
				<span  class="style1">Projects</span>
                <!--<i class="fa fa-angle-left pull-right"></i>-->
              </a>
              <!--<ul class="treeview-menu">
                <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
                <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
                <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
              </ul>-->
            </li>
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
			
			<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
				<?php if ($this->_tpl_vars['roles']['role_name'] == 'Store Management'): ?>	
            <li class="treeview">
              <a href="Aura/stockList.php">
                <i class="fa fa-hdd-o" style="font-size:15px; color:#FFFFFF;"></i>
				<span  class="style1">Stores</span>
              </a>
            </li><?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>

			<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
				<?php if ($this->_tpl_vars['roles']['role_name'] == 'Mail Management'): ?>	
              <li class="treeview">
              <a href="mail_list.php">
                <i class="fa fa-envelope" style="font-size:15px; color:#FFFFFF;"> </i>
				<span  class="style1">Mails </span>
                <!--<i class="fa fa-angle-left pull-right"></i>-->
              </a>
               </li>
			   <?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
			   <?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
				<?php if ($this->_tpl_vars['roles']['role_name'] == 'Quote Management'): ?>	
            <li class="treeview">
              <a href="quote_list.php">
                <i class="fa fa-clipboard" style="font-size:15px; color:#FFFFFF;"></i>
				 <span  class="style1">Quotes </span>
               <!-- <i class="fa fa-angle-left pull-right"></i>-->
              </a>
              <!--<ul class="treeview-menu">
                <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
              </ul>-->
            </li>
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
			<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
				<?php if ($this->_tpl_vars['roles']['role_name'] == 'Po Management'): ?>	
            <li class="treeview">
              <a href="po_list.php">
                <i class="fa fa-briefcase" style="font-size:15px; color:#FFFFFF;"></i>
				 <span  class="style1">Purchase Orders </span>
                <!--<small class="label pull-right bg-red">3</small>-->
              </a>
            </li>
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
			<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
				<?php if ($this->_tpl_vars['roles']['role_name'] == 'Vendor Management'): ?>	
            <li class="treeview">
              <a href="vendor_list.php">
                <i class="fa  fa-bank" style="font-size:15px; color:#FFFFFF;"></i>
				<span  class="style1">Vendors</span>
                <!--<small class="label pull-right bg-yellow">12</small>-->
              </a>
            </li>
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
			<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
				<?php if ($this->_tpl_vars['roles']['role_name'] == 'Material Managementt'): ?>	
            <li class="treeview">
              <a href="material_list.php">
                <i class="fa fa-sun-o" style="font-size:15px; color:#FFFFFF;"></i>
				 <span  class="style1">Materials </span>
               <!-- <i class="fa fa-angle-left pull-right"></i>-->
              </a>
              <!--<ul class="treeview-menu">
                <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
                <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
                <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
                <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
                <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
                <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
              </ul>-->
            </li>
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
			<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
				<?php if ($this->_tpl_vars['roles']['role_name'] == 'Product Management'): ?>	
            <li class="treeview">
              <a href="product_list.php">
                <i class="fa fa-archive" style="font-size:15px; color:#FFFFFF;"></i>
				<span  class="style1">Products </span>
                <!--<i class="fa fa-angle-left pull-right"></i>-->
              </a>
              <!--<ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                      </ul>
                    </li>
                  </ul>-->
                <!--</li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
              </ul>-->
            </li>
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
			<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
				<?php if ($this->_tpl_vars['roles']['role_name'] == 'Employee Management'): ?>	
			<li class="treeview">
              <a href="employee_list.php">
                <i class="fa fa-street-view" style="font-size:15px; color:#FFFFFF;"></i>
				<span  class="style1">Employees </span>
                <!--<i class="fa fa-angle-left pull-right"></i>-->
              </a>
              <!--<ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                      </ul>
                    </li>
                  </ul>-->
                <!--</li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
              </ul>-->
            </li>
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
			<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
				<?php if ($this->_tpl_vars['roles']['role_name'] == 'User Management'): ?>	
			<li class="treeview">
              <a href="user_list.php">
                <i class="fa  fa-user" style="font-size:15px; color:#FFFFFF;"></i>
				<span  class="style1">Users </span>
                <!--<i class="fa fa-angle-left pull-right"></i>-->
              </a>
              <!--<ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                      </ul>
                    </li>
                  </ul>-->
                <!--</li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
              </ul>-->
            </li>
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
			<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
				<?php if ($this->_tpl_vars['roles']['role_name'] == 'User Role Management'): ?>	
			<li class="treeview">
              <a href="user_role_list.php">
                <i class="fa  fa-user-md" style="font-size:15px; color:#FFFFFF;"></i>
				<span  class="style1">User Roles </span>
                <!--<i class="fa fa-angle-left pull-right"></i>-->
              </a>
              <!--<ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                      </ul>
                    </li>
                  </ul>-->
                <!--</li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
              </ul>-->
            </li>
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
			<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
				<?php if ($this->_tpl_vars['roles']['role_name'] == 'User Group Management'): ?>	
			<li class="treeview" >
              <a href="user_group_list.php">
                <i class="fa fa-users" style="font-size:15px; color:#FFFFFF;"></i>
				<span  class="style1">User Groups </span>
                <!--<i class="fa fa-angle-left pull-right"></i>-->
              </a>
              <!--<ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                      </ul>
                    </li>
                  </ul>-->
                <!--</li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
              </ul>-->
            </li>
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
            <!--<li><a href="documentation/index.html">
			<i class="fa fa-book"></i>
			 <span>Documentation</span></a></li>-->
            <!--<li class="header">LABELS</li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>-->
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

<?php echo '
<style>
.style1
{ font-size:15px;
color:#FFFFFF
}
</style>
'; ?>