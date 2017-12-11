<?php /* Smarty version 2.6.25, created on 2015-12-28 17:15:09
         compiled from left1.tpl */ ?>
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
<input type="hidden" id="activeMgmt" value="" autocomplete="Off">
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
				  <div class="dropdown profile-element"> 
 					<li > <img src="img/logo_new.png" alt="image" border="0" width="218px" height="110px" style="margin-left:2px;"/></li></span>
                 	</div>
					 <div class="logo-element">
                           <img src="img/logo_icon.jpg" alt="image" border="0"  style="margin-left:2px;"/>
                        </div>
					<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						<?php if ($this->_tpl_vars['roles']['role_name'] == 'Arka MD DashBoard'): ?>	
					<li id="dashBoard3">
                        <a href="./dashBoard3.php"><i class="fa fa-align-justify"></i> <span class="nav-label">Dash Board</span> <span class="fa arrow"></span></a>
					
                    </li>
					 <?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
					
					<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						<?php if ($this->_tpl_vars['roles']['role_name'] == 'Arka Admin DashBoard'): ?>									
					<li id="dashBoard3">
                        <a href="./dashBoard3.php"><i class="fa fa-align-justify"></i> <span class="nav-label">Dash Board </span> <span class="fa arrow"></span></a>     
                    </li>
					 <?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
			
					<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						<?php if ($this->_tpl_vars['roles']['role_name'] == 'Arka Support DashBoard'): ?>
					<li id="dashBoard">
                        <a href="./dashBoard.php"><i class="fa fa-align-justify"></i> <span class="nav-label">Dash Board</span> <span class="fa arrow"></span></a>
                    </li>
					 <?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
					
					<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						<?php if ($this->_tpl_vars['roles']['role_name'] == 'Customer Owner DashBoard'): ?>
					<li id="dashBoard4">
                        <a href="./dashBoard4.php"><i class="fa fa-align-justify"></i> <span class="nav-label">Dash Board</span> <span class="fa arrow"></span></a>
                    </li>
					 <?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
					
					<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						<?php if ($this->_tpl_vars['roles']['role_name'] == 'Customer Admin DashBoard'): ?>
					<li id="dashBoard4">
                        <a href="./dashBoard4.php"><i class="fa fa-align-justify"></i> <span class="nav-label">Dash Board</span> <span class="fa arrow"></span></a>
                    </li>
					 <?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
					
					<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						<?php if ($this->_tpl_vars['roles']['role_name'] == 'Customer User DashBoard'): ?>
					<li id="dashBoard4">
                        <a href="./dashBoard4.php"><i class="fa fa-align-justify"></i> <span class="nav-label">Dash Board</span> <span class="fa arrow"></span></a>
                    </li>
					<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
				<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						<?php if ($this->_tpl_vars['roles']['role_name'] == 'Customer Management'): ?>	
                    <li id="customerMgmt">
                        <a href="#"><i class="fa fa-male"></i> <span class="nav-label">Customer Mgmt</span> <span class="fa arrow"></span></a>
	
	
				 <?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>	
						
						
					   <ul class="nav nav-second-level">
											<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
												<?php if ($this->_tpl_vars['roles']['role_name'] == 'Add Customer'): ?>
												 <li><a href="./customerReg.php">Add Customer</a></li>
											 	<?php endif; ?>
											<?php endforeach; endif; unset($_from); ?>	
											<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
												<?php if ($this->_tpl_vars['roles']['role_name'] == 'List Customer'): ?>
												 <li ><a href="./customerList.php">List Customer</a></li>
											 	<?php endif; ?>
											<?php endforeach; endif; unset($_from); ?>
					  </ul>
                    </li>
				<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						<?php if ($this->_tpl_vars['roles']['role_name'] == 'Site Management'): ?>	
					<li id="siteMgmt">
                        <a href="#"><i class="fa fa-home"></i> <span class="nav-label">Site Mgmt</span> <span class="fa arrow"></span></a>
				 <?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>	
                        <ul class="nav nav-second-level">
					<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						<?php if ($this->_tpl_vars['roles']['role_name'] == 'Add Site'): ?>	
                            <li><a href="./siteReg.php">Add Site</a></li>
						 <?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
							
					<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						<?php if ($this->_tpl_vars['roles']['role_name'] == 'List Site'): ?>	
                            <li ><a href="./siteList.php">List Site</a></li>
						 <?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
						
                        </ul>
                    </li>	
				
				<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						<?php if ($this->_tpl_vars['roles']['role_name'] == 'Turbine Management'): ?>	
					<li id="turbineMgmt">
                        <a href="#"><i class="fa fa-joomla"></i> <span class="nav-label">Turbine Mgmt</span> <span class="fa arrow"></span></a>
				 <?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
						
                        <ul class="nav nav-second-level">
					<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						<?php if ($this->_tpl_vars['roles']['role_name'] == 'Add Turbine'): ?>	
                            <li><a href="./turbineReg.php">Add Turbine</a></li>
					 <?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>	
						<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						<?php if ($this->_tpl_vars['roles']['role_name'] == 'List Turbine'): ?>	
                            <li ><a href="./turbineList.php">List Turbine</a></li>
					 <?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
                        </ul>
                    </li>
					<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						<?php if ($this->_tpl_vars['roles']['role_name'] == 'Phone Management'): ?>	
					<li id="phoneMgmt">
                        <a href="#"><i class="fa fa-phone-square"></i> <span class="nav-label">Phone Mgmt</span> <span class="fa arrow"></span></a>
					 <?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
                        <ul class="nav nav-second-level">
						
						<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
							<?php if ($this->_tpl_vars['roles']['role_name'] == 'Add Phone'): ?>	
                            <li><a href="./phoneReg.php">Add Phone</a></li>
						 <?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
						
						<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
							<?php if ($this->_tpl_vars['roles']['role_name'] == 'List Phone'): ?>	
                            <li ><a href="./phoneList.php">List Phone</a></li>
 						<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
                        </ul>
                    </li>	
					
					<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						<?php if ($this->_tpl_vars['roles']['role_name'] == 'Model Management'): ?>	
					<li id="modelMgmt">
                        <a href="#"><i class="fa fa-credit-card"></i> <span class="nav-label"> Product Model Mgmt</span> <span class="fa arrow"></span></a>
					 <?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>	
						
                        <ul class="nav nav-second-level">
							<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						<?php if ($this->_tpl_vars['roles']['role_name'] == 'Add Model'): ?>	
                            <li><a href="./modelReg.php">Add Product Model</a></li>
						 <?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
							
						<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						<?php if ($this->_tpl_vars['roles']['role_name'] == 'List Model'): ?>	
                            <li ><a href="./modelList.php">List Product Model</a></li>	
						 <?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>					
                        </ul>
                    </li>	
					<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						<?php if ($this->_tpl_vars['roles']['role_name'] == 'Product Management'): ?>	
					<li id="ProductMgmt">
                        <a href="#"><i class="fa fa-archive"></i> <span class="nav-label">Product Mgmt</span> <span class="fa arrow"></span></a>
					 <?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>	
						
                        <ul class="nav nav-second-level">
							<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						<?php if ($this->_tpl_vars['roles']['role_name'] == 'Add Product'): ?>	
                            <li><a href="./productReg.php">Add Product</a></li>
						 <?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
							
						<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						<?php if ($this->_tpl_vars['roles']['role_name'] == 'List Product'): ?>	
                            <li ><a href="./productList.php">List Product</a></li>	
						 <?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>					
                        </ul>
                    </li>	
					<!-- Product Mapping Starts -->     
					<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
							<?php if ($this->_tpl_vars['roles']['role_name'] == 'Product Mapping Management'): ?>
						<li id="productMappingMgmt">
							<a href="#"><i class="fa fa-map-marker"></i> <span class="nav-label">Product Mapping</span> <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li><a href="./pdtMappingReg.php">Add Pdt Mapping</a></li>
								<li ><a href="./pdtMappingList.php">List Pdt Mapping</a></li>	
							</ul>
						</li>
							<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>	
			      <!-- Product Mapping Ends  -->
				  
						<!-- Product material mgmt hide
					<li id="PdtMaterialMgmt">
                        <a href="#"><i class="fa fa-archive"></i> <span class="nav-label">Product Material Mgmt</span> <span class="fa arrow"></span></a>
				
				       <ul class="nav nav-second-level">
						
					          <li><a href="./PdtMaterialEntryReg.php">Add Product Material</a></li>
				                <li ><a href="./PdtMaterialEntryList.php">List Material</a></li>
 			
			                </ul>
                    </li>	
				                   -->
								   <?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						<?php if ($this->_tpl_vars['roles']['role_name'] == 'Store Management'): ?>	

						   <li id="storeMgmt">
						   <a href="#"><i class="fa fa-hdd-o"></i><span class="nav-label">Store Mgmt</span><span class="fa arrow"></span></a>
						        <ul class="nav nav-second-level">
								     <li><a title="Inward Management" href="#">Inward Mgmt<span class="fa arrow"></span></a>
									 	<ul class=" nav nav-third-level">
											<li><a href="./inwardReg.php">Add Inward</a></li>
								            <li><a href="./inwardList.php">List Inward</a></li>
										</ul>
									 </li>	
					                 <li><a title="Outward Management" href="#"> Outward Mgmt<span class="fa arrow"></span></a>
									  	<ul class=" nav nav-third-level">
											<li><a href="./outwardReg.php">Add Outward</a></li>
								            <li ><a href="./outwardList.php">List Outward</a></li>
										</ul>
									 </li>
					                 <li><a title="Material Management" href="#"> Material Mgmt<span class="fa arrow"></span></a>
									    	<ul class=" nav nav-third-level">
											<li><a href="./materialReg.php">Add Material</a></li>
								            <li ><a href="./materialList.php">List Material</a></li>
										</ul>
									 </li>
					                 <li><a title="Stock Management" href="#">Stock Mgmt<span class="fa arrow"></span></a>
									    	<ul class=" nav nav-third-level">
											<li><a href="./stockReg.php">Add Stock</a></li>
								            <li ><a href="./stockList.php">List Stock</a></li>
										</ul>
									 </li>
					                 <li><a title="Vendor Management" href="#"> Vendor Mgmt<span class="fa arrow"></span></a>
									 		<ul class=" nav nav-third-level">
											<li><a href="./vendorReg.php">Add Vendor</a></li>
								            <li ><a href="./vendorList.php">List Vendor</a></li>
										</ul>
									 </li>
								 </ul>
				          </li>
						   <?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
					 <?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						<?php if ($this->_tpl_vars['roles']['role_name'] == 'Generation Management'): ?>	

						   <li id="generationMgmt"><a href="#"><i class="fa fa-ra"></i><span class="nav-label">Generation Mgmt<span><span class="fa arrow"></span></a>
						         <ul class=" nav nav-second-level">
								     <li><a title="Panel Generarion" href="#"> Panel Generation<span class="fa arrow"></span></a>
									 	<ul class=" nav nav-fourth-level">
											<li><a href="./powergenerationReg.php">Add Panel Generarion</a></li>
								            <li ><a href="./powergenerationList.php">List Panel Generarion</a></li>
										</ul>
									 </li>
					                 <li><a title="EB Generation" href="#"> EB Generation <span class="fa arrow"></span></a>
									 	<ul class=" nav nav-third-level">
											<li><a href="./ebgenerationReg.php">Add EB Generation</a></li>
								            <li ><a href="./ebgenerationList.php">List EB Generation</a></li>
										</ul>
									 </li>	
									 <li><a title="EB Slots" href="#"> EB Slots <span class="fa arrow"></span></a>
									 	<ul class=" nav nav-third-level">
											<li><a href="./ebslotReg.php">Add EB Slots</a></li>
								            <li ><a href="./ebslotList.php">List EB Slots</a></li>
										</ul>
									 </li>
					                 <!--<li><a title="Maintenance Management" href="#">Maintenance<span class="fa arrow"></span></a>
									 	<ul class=" nav nav-third-level">
											<li><a href="./maintenanceReg.php">Add Maintenance</a></li>
								            <li ><a href="./maintenanceList.php">List Maintenance</a></li>
										</ul>
									 </li>-->
								 </ul>
				          </li>
						  <?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
						 <!-- Other mgmt hide
						   <li id="otherMgmt"><a href="#"><i class="fa fa-google-wallet"></i>Other Mgmt<span class="fa arrow"></span></a>
						         <ul class=" nav nav-second-level">
								    <li><a title="PO Management" href="#">-> Purchase Order<span class="fa arrow"></span></a>
										<ul class=" nav nav-third-level">
											<li><a href="./po_Reg.php">Add PO</a></li>
								            <li ><a href="./po_List.php">List PO</a></li>
										</ul>
									</li>
					                <li><a title="Payment Management" href="#">-> Payment Mgmt<span class="fa arrow"></span></a>
										<ul class=" nav nav-third-level">
											<li><a href="./payment_Reg.php">Add Payment</a></li>
								            <li ><a href="./payment_List.php">List Payment</a></li>
										</ul>
									</li>	
					                
								 </ul>
				          </li>
				  -->
				
				<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
							<?php if ($this->_tpl_vars['roles']['role_name'] == 'User Management'): ?>
                   <li id="userMgmt">
                        <a href="#"><i class="fa fa-user"></i> <span class="nav-label">User Mgmt</span> <span class="fa arrow"></span></a>
					<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>		
                        <ul class="nav nav-second-level">
					
						<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
							<?php if ($this->_tpl_vars['roles']['role_name'] == 'Add User'): ?>
                            <li><a href="./userReg.php">Add User</a></li>
							<?php endif; ?>
						<?php endforeach; endif; unset($_from); ?>
						<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
							<?php if ($this->_tpl_vars['roles']['role_name'] == 'List User'): ?>	
                            <li ><a href="./userList.php">List Users</a></li>
							<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
				   	       
                        </ul>
                    </li>	
    				
					<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
							<?php if ($this->_tpl_vars['roles']['role_name'] == 'User Role Management'): ?>		     
				    <li id="userRoleMgmt">
                        <a href="#"><i class="fa fa-user-md"></i> <span class="nav-label">User Role mgmt</span> <span class="fa arrow"></span></a>
						
                        <ul class="nav nav-second-level">
						 
                            <li><a href="./userRoleReg.php">Add User Role</a></li>
						 
                            <li ><a href="./userRoleList.php">List User Roles</a></li>
	
                        </ul>
                    </li>	
					<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
					
					<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
							<?php if ($this->_tpl_vars['roles']['role_name'] == 'User Group Management'): ?>
									
						  <li id="userGroupMgmt">
							<a href="#"><i class="fa fa-group"></i> <span class="nav-label">User Group Mgmt</span> <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">  
							
								<li><a href="./userGroupReg.php">Add User Group</a></li>
							   
								<li ><a href="./userGroupList.php">List User Group</a></li>
							
							</ul>
						</li>
						<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
					
					
					
					
		
						  
						
                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
	
		