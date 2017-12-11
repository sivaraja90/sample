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
			{foreach from=$RList item=roles}
				{if $roles.role_name eq 'Customer Management'}	
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
				{/if}
					 
			{/foreach}
					
			{foreach from=$RList item=roles}
				{if $roles.role_name eq 'Enquiry Management'}	
					<li class="treeview">
					  <a href="enquiry_list.php">
						<i class="fa fa-phone" style="font-size:15px; color:#FFFFFF;"></i>
						<span class="style1">Enquiries </span>
						<!--<span class="label label-primary pull-right">4</span>-->
					  </a>
					</li>
				{/if}
			{/foreach}
            <!--<li>
              <a href="pages/widgets.html">
                <i class="fa fa-th"></i> <span>Widgets</span> <small class="label pull-right bg-green">new</small>
              </a>
            </li>-->
			{foreach from=$RList item=roles}
				{if $roles.role_name eq 'Sales Management'}	
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
			{/if}
			{/foreach}
			
			{foreach from=$RList item=roles}
				{if $roles.role_name eq 'Service Management'}	
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
			{/if}
			{/foreach}
			
			{foreach from=$RList item=roles}
				{if $roles.role_name eq 'Project Management'}	
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
			{/if}
			{/foreach}
			
			{foreach from=$RList item=roles}
				{if $roles.role_name eq 'Store Management'}	
            <li class="treeview">
              <a href="Aura/stockList.php">
                <i class="fa fa-hdd-o" style="font-size:15px; color:#FFFFFF;"></i>
				<span  class="style1">Stores</span>
              </a>
            </li>{/if}
			{/foreach}

			{foreach from=$RList item=roles}
				{if $roles.role_name eq 'Mail Management'}	
              <li class="treeview">
              <a href="mail_list.php">
                <i class="fa fa-envelope" style="font-size:15px; color:#FFFFFF;"> </i>
				<span  class="style1">Mails </span>
                <!--<i class="fa fa-angle-left pull-right"></i>-->
              </a>
               </li>
			   {/if}
			{/foreach}
			   {foreach from=$RList item=roles}
				{if $roles.role_name eq 'Quote Management'}	
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
			{/if}
			{/foreach}
			{foreach from=$RList item=roles}
				{if $roles.role_name eq 'Po Management'}	
            <li class="treeview">
              <a href="po_list.php">
                <i class="fa fa-briefcase" style="font-size:15px; color:#FFFFFF;"></i>
				 <span  class="style1">Purchase Orders </span>
                <!--<small class="label pull-right bg-red">3</small>-->
              </a>
            </li>
			{/if}
			{/foreach}
			{foreach from=$RList item=roles}
				{if $roles.role_name eq 'Vendor Management'}	
            <li class="treeview">
              <a href="vendor_list.php">
                <i class="fa  fa-bank" style="font-size:15px; color:#FFFFFF;"></i>
				<span  class="style1">Vendors</span>
                <!--<small class="label pull-right bg-yellow">12</small>-->
              </a>
            </li>
			{/if}
			{/foreach}
			{foreach from=$RList item=roles}
				{if $roles.role_name eq 'Material Managementt'}	
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
			{/if}
			{/foreach}
			{foreach from=$RList item=roles}
				{if $roles.role_name eq 'Product Management'}	
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
			{/if}
			{/foreach}
			{foreach from=$RList item=roles}
				{if $roles.role_name eq 'Employee Management'}	
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
			{/if}
			{/foreach}
			{foreach from=$RList item=roles}
				{if $roles.role_name eq 'User Management'}	
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
			{/if}
			{/foreach}
			{foreach from=$RList item=roles}
				{if $roles.role_name eq 'User Role Management'}	
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
			{/if}
			{/foreach}
			{foreach from=$RList item=roles}
				{if $roles.role_name eq 'User Group Management'}	
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
			{/if}
			{/foreach}
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

{literal}
<style>
.style1
{ font-size:15px;
color:#FFFFFF
}
</style>
{/literal}