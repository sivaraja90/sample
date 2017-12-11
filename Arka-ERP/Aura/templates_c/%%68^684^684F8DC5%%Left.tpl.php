<?php /* Smarty version 2.6.25, created on 2015-09-04 16:17:58
         compiled from Left.tpl */ ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Arka SCADA | <?php echo $this->_tpl_vars['title']; ?>
</title>

   <?php echo $this->_tpl_vars['IncludeCSS']; ?>

   <?php echo $this->_tpl_vars['IncludeJS']; ?>



</head>

<body>
<input type="hidden" id="activeMgmt" value="<?php echo '<?php'; ?>
 echo $activeMgmt; <?php echo '?>'; ?>
">
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img src="img/arka_logo.jpg" alt="image" border="0" class="img-thumbnail" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">ARKA AUTOMAATIONS</strong>
                             </span> <span class="text-muted text-xs block">Admin<b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="mailbox.html">Mailbox</a></li>
                                <li class="divider"></li>
                                <li><a href="index.php/login/logoutUser/">Logout</a></li>
                            </ul>
                      </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>
					
					<li id="dashBoard">
                        <a href="./dashBoard.php"><i class="fa fa-align-justify"></i> <span class="nav-label">Dash Board</span> <span class="fa arrow"></span></a>
					
                    </li>
						
				
					<li id="dashBoard2">
                        <a href="./dashBoard2.php"><i class="fa fa-align-justify"></i> <span class="nav-label">Dash Board_2</span> <span class="fa arrow"></span></a>
               
                           
                    </li>
                    <li id="customerMgmt">
                        <a href="index.html"><i class="fa fa-male"></i> <span class="nav-label">Customer Mgmt</span> <span class="fa arrow"></span></a>
					
						
						
               <ul class="nav nav-second-level">
	
                           				 <li><a href="./customerReg.php">Add Customer</a></li>

                           				 <li ><a href="./customerList.php">List Customer</a></li>
					
              </ul>
                    </li>

					<li id="siteMgmt">
                        <a href="index.html"><i class="fa fa-home"></i> <span class="nav-label">Site Mgmt</span> <span class="fa arrow"></span></a>
					
						
                        <ul class="nav nav-second-level">
						
					
                            <li><a href="./siteReg.php">Add Site</a></li>
						
							
					
                            <li ><a href="./siteList.php">List Site</a></li>
							
						
                        </ul>
                    </li>	
					
					<li id="turbineMgmt">
                        <a href="index.html"><i class="fa fa-joomla"></i> <span class="nav-label">Turbine Mgmt</span> <span class="fa arrow"></span></a>
					
						
                        <ul class="nav nav-second-level">
					
                            <li><a href="./turbineReg.php">Add Turbine</a></li>
							
                            <li ><a href="./turbineList.php">List Turbine</a></li>
                        </ul>
                    </li>	
					
					<li id="scadaMgmt">
                        <a href="index.html"><i class="fa fa-archive"></i> <span class="nav-label">Scada Mgmt</span> <span class="fa arrow"></span></a>
						
						
                        <ul class="nav nav-second-level">
                            <li><a href="./scadaReg.php">Add scada</a></li>
                            <li ><a href="./scadaList.php">List scada</a></li>						
                        </ul>
                    </li>	
					

					<li id="phoneMgmt">
                        <a href="index.html"><i class="fa fa-phone-square"></i> <span class="nav-label">Phone Mgmt</span> <span class="fa arrow"></span></a>
					
                        <ul class="nav nav-second-level">
						
                            <li><a href="./phoneReg.php">Add Phone</a></li>
					
			
                            <li ><a href="./phoneList.php">List Phone</a></li>

                        </ul>
                    </li>	
				
                   <li id="userMgmt">
                        <a href="index.html"><i class="fa fa-user"></i> <span class="nav-label">User Mgmt</span> <span class="fa arrow"></span></a>
						
                        <ul class="nav nav-second-level">
					
                            <li><a href="./userReg.php">Add User</a></li>
				
								
                            <li ><a href="./userList.php">List Users</a></li>
					
				   	       
                        </ul>
                    </li>	
             
				    <li id="userRoleMgmt">
                        <a href="index.html"><i class="fa fa-user-md"></i> <span class="nav-label">User Role mgmt</span> <span class="fa arrow"></span></a>
						
                        <ul class="nav nav-second-level">
						
				
                            <li><a href="./userRoleReg.php">Add User Role</a></li>
						    
				   
				  	
                            <li ><a href="./userRoleList.php">List User Roles</a></li>
					   
                        </ul>
                    </li>	
					
		
					  <li id="userGroupMgmt">
                        <a href="index.html"><i class="fa fa-group"></i> <span class="nav-label">User Group Mgmt</span> <span class="fa arrow"></span></a>
						   
				   
				   	
                        <ul class="nav nav-second-level">  
						
					
                            <li><a href="./userGroupReg.php">Add User Group</a></li>
					       
					        <li ><a href="./userGroupList.php">List User Group</a></li>
					    
                        </ul>
                    </li>
                   <!--
				   			<li><a href="<?php echo '<?php'; ?>
 echo base_url('index.php/manageUserRoles_Controller/'); <?php echo '?>'; ?>
">List User Role</a></li>
						    <li><a href="<?php echo '<?php'; ?>
 echo base_url('index.php/manageUserGroup_Controller/'); <?php echo '?>'; ?>
">List User Group</a></li>
							
              
               
				    <li id="autoComplete">
                        <a href="#"><i class="fa fa-user"></i> <span class="nav-label">Auto Complete</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo '<?php'; ?>
 echo base_url('index.php/autocomplete_Controller/'); <?php echo '?>'; ?>
">Demo</a></li>
                            
							
                        </ul>
                    </li>	
                     -->
                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">