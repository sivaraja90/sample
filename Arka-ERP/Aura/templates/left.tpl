<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<title>{if $OverallSiteTitle neq ''}{$OverallSiteTitle}{else} SCADA -::- Aura{/if} {$AddSiteTitle}</title>
   { $IncludeCSS }
   { $IncludeJS }
</head>
<body >
<input type="hidden" id="activeMgmt" value="" autocomplete="Off"><input type="hidden" value="{$smarty.session.CustomerId}"><input type="hidden" value="{$smarty.get.customer_id}">
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
				  			{foreach from=$RList item=roles}
				{if $roles.role_name eq 'Customer Management'}	
					<li class="treeview">
					  <a href="../customer_list.php" style="color:#FFFFFF;">
						<i class="fa fa-male" style="font-size:15px; color:#FFFFFF;"></i>
						<span class="style1">Customers </span>
					  </a>
					</li>
				{/if}
					 
			{/foreach}
					{foreach from=$RList item=roles}
						{if $roles.role_name eq 'Enquiry Management'}	
							<li class="treeview">
							  <a href="../enquiry_list.php" style="color:#FFFFFF;">
								<i class="fa fa-phone" style="font-size:15px; color:#FFFFFF;"></i>
								<span class="style1">Enquiries </span>
							  </a>
							</li>
						{/if}
					{/foreach}
					{foreach from=$RList item=roles}
						{if $roles.role_name eq 'Sales Management'}	
					<li class="treeview">
					  <a href="../sales_order_list.php" style="color:#FFFFFF;">
						<i class="fa fa-line-chart" style="font-size:15px; color:#FFFFFF;"></i>
						<span class="style1">Sales </span>
					  </a>
					</li>
					{/if}
					{/foreach}
					
					{foreach from=$RList item=roles}
						{if $roles.role_name eq 'Service Management'}	
					<li class="treeview">
					  <a href="../service_order_list.php" style="color:#FFFFFF;">
						<i class="fa fa-cubes" style="font-size:15px; color:#FFFFFF;"></i>
						<span  class="style1">Services </span>
					  </a>
					</li>
					{/if}
					{/foreach}
					
					{foreach from=$RList item=roles}
						{if $roles.role_name eq 'Project Management'}	
					<li class="treeview">
					  <a href="../project_order_list.php" style="color:#FFFFFF;">
						<i class="fa  fa-pie-chart" style="font-size:15px; color:#FFFFFF;"></i>
						<span  class="style1">Projects</span>
					  </a>
					</li>
					{/if}
					{/foreach}
					
					
								   {foreach from=$RList item=roles}
						{if $roles.role_name eq 'Store Management'}	

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
						   {/if}
					{/foreach}
					  
					
								{foreach from=$RList item=roles}
				{if $roles.role_name eq 'Mail Management'}	
              <li class="treeview">
              <a href="../mail_list.php" style="color:#FFFFFF;">
                <i class="fa fa-envelope" style="font-size:15px; color:#FFFFFF;"> </i>
				<span  class="style1">Mails </span>
              </a>
               </li>
			   {/if}
			{/foreach}
			   {foreach from=$RList item=roles}
				{if $roles.role_name eq 'Quote Management'}	
            <li class="treeview">
              <a href="../quote_list.php" style="color:#FFFFFF;">
                <i class="fa fa-clipboard" style="font-size:15px; color:#FFFFFF;"></i>
				 <span  class="style1">Quotes </span>
              </a>
            </li>
			{/if}
			{/foreach}
			{foreach from=$RList item=roles}
				{if $roles.role_name eq 'Po Management'}	
            <li class="treeview">
              <a href="../po_list.php" style="color:#FFFFFF;">
                <i class="fa fa-briefcase" style="font-size:15px; color:#FFFFFF;"></i>
				 <span  class="style1">Purchase Orders </span>
              </a>
            </li>
			{/if}
			{/foreach}
			{foreach from=$RList item=roles}
				{if $roles.role_name eq 'Vendor Management'}	
            <li class="treeview">
              <a href="../vendor_list.php" style="color:#FFFFFF;">
                <i class="fa  fa-bank" style="font-size:15px; color:#FFFFFF;"></i>
				<span  class="style1">Vendors</span>
              </a>
            </li>
			{/if}
			{/foreach}
						{foreach from=$RList item=roles}
				{if $roles.role_name eq 'Material Managementt'}	
            <li class="treeview">
              <a href="../material_list.php" style="color:#FFFFFF;">
                <i class="fa fa-sun-o" style="font-size:15px; color:#FFFFFF;"></i>
				 <span  class="style1">Materials </span>
              </a>
            </li>
			{/if}
			{/foreach}
			{foreach from=$RList item=roles}
				{if $roles.role_name eq 'Product Management'}	
            <li class="treeview">
              <a href="../product_list.php" style="color:#FFFFFF;">
                <i class="fa fa-archive" style="font-size:15px; color:#FFFFFF;"></i>
				<span  class="style1">Products </span>
              </a>
            </li>
			{/if}
			{/foreach}
			{foreach from=$RList item=roles}
				{if $roles.role_name eq 'Employee Management'}	
			<li class="treeview">
              <a href="../employee_list.php" style="color:#FFFFFF;">
                <i class="fa fa-street-view" style="font-size:15px; color:#FFFFFF;"></i>
				<span  class="style1">Employees </span>
              </a>
            </li>
			{/if}
			{/foreach}
			{foreach from=$RList item=roles}
				{if $roles.role_name eq 'User Management'}	
			<li class="treeview">
              <a href="../user_list.php" style="color:#FFFFFF;">
                <i class="fa  fa-user" style="font-size:15px; color:#FFFFFF;"></i>
				<span  class="style1">Users </span>
              </a>
            </li>
			{/if}
			{/foreach}
			{foreach from=$RList item=roles}
				{if $roles.role_name eq 'User Role Management'}	
			<li class="treeview">
              <a href="../user_role_list.php" style="color:#FFFFFF;">
                <i class="fa  fa-user-md" style="font-size:15px; color:#FFFFFF;"></i>
				<span  class="style1">User Roles </span>
              </a>
            </li>
			{/if}
			{/foreach}
			{foreach from=$RList item=roles}
				{if $roles.role_name eq 'User Group Management'}	
			<li class="treeview" >
              <a href="../user_group_list.php" style="color:#FFFFFF;">
                <i class="fa fa-users" style="font-size:15px; color:#FFFFFF;"></i>
				<span  class="style1">User Groups </span>
              </a>
            </li>
			{/if}
			{/foreach}

                 </ul>
            </div>
        </nav>
</div>
        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
		{include file=header.tpl}
		
