{include file="left.tpl"}
       
		<body class="hold-transition skin-blue sidebar-mini">
		 
		 <div class="content-wrapper">
	<!--<section class="content-header">
          <h4>
            Profile Details
          </h4>
         <!-- <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
          </ol>-->
       <!-- </section>-->
 <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header">
                  <center><h2 class="box-title">Profile Detail</h2></center>
                </div>
            
     {foreach from=$PageList item=ListDet}
						 <form method="post" class="form-horizontal" name="ProfileUpdate" id="ProfileUpdate">
							<input type="hidden"  id="hdAction"  name="hdAction" />
                        <div class="box-body">
						<div class="col-md-6">
				    <div class="form-group">	
							   <label class="col-sm-3 control-label">Employee Id</label>
							   <div class="col-sm-5"><td>{$ListDet.emp_id}</td></div>
							   </div>
							   
					<div class="form-group">	
							   <label class="col-sm-3 control-label">Employee Name</label>
                               <div class="col-sm-5"><td>{$ListDet.salutation}&nbsp;&nbsp;{$ListDet.emp_first_name}&nbsp;&nbsp;{$ListDet.emp_last_name}</td></div>
							   </div>
							   
                              <div class="form-group">
							   <label class="col-sm-3 control-label">Joining Date</label>
							<div class="col-sm-5"><td>{$ListDet.joining_date}</td></div>
							</div>
							
					<div class="form-group">	
							   <label class="col-sm-3 control-label">Company Name</label>
                               <div class="col-sm-5"><td>{$ListDet.company_name}</td></div>
							</div>
							
				<div class="form-group">
							   <label class="col-sm-3 control-label"> Sex</label>
							<div class="col-sm-5"><td>{$ListDet.sex}</td></div>
							</div>
							
				<div class="form-group">	
							   <label class="col-sm-3 control-label">Designation</label>
                               <div class="col-sm-5"><td>{$ListDet.designation}</td></div>
							   </div>
							
							
				<div class="form-group">
							   <label class="col-sm-3 control-label">Department</label>
							<div class="col-sm-5">{$ListDet.department}</div>
							</div>
							
				<div class="form-group" id="chg_pwd" style="display:none">
									 <label class="col-sm-3 control-label">New Password</label>
									<div class="col-sm-5"><input type="password" id="new_password" name="new_password" value=""/></div>
											
							</div>
							</div>
							
							<div class="col-md-6">
				<div class="form-group">
							   <label class="col-sm-3 control-label">UserID</label>
                               <div class="col-sm-5"><td>{$ListDet.user_id}<input type="hidden" id="user_id" name="user_id" value="{$ListDet.user_id}" /></td></div>
							    </div>
							
								
								
				<div class="form-group"> 
							   <label class="col-sm-3 control-label">User Name</label>
							   <div class="col-sm-5"><td>{$ListDet.username}</td></div><input type="hidden" id="username" name="username" />
							   </div>
							   
					<div class="form-group">
							<label class="col-sm-3 control-label"> User Group</label>
							<div class="col-sm-5"><td>{$ListDet.user_group}</td></div>
							</div>
							
						<div class="form-group">
							   <label class="col-sm-3 control-label">Mobile</label>
                               <div class="col-sm-5"><td>{$ListDet.mobile}</td></div>
							     </div>
								 
					<div class="form-group">
							   <label class="col-sm-3 control-label">Phone</label>
							   <div class="col-sm-5"><td>{$ListDet.area_code}&nbsp;&nbsp;{$ListDet.phone}&nbsp;&nbsp;{$ListDet.extension}</td></div>
							   </div>
							   
                        <div class="form-group">
							  <label class="col-sm-3 control-label"> Email</label>
                               <div class="col-sm-5"><td>{$ListDet.email_id}</td></div>
					</div>
					
					<div class="form-group">
							<label class="col-sm-3 control-label"> Password</label>
							<div class="col-sm-5"><td>*********</td> &nbsp;<button class="btn btn-info pull-center" type="button" id="pwdchange">Change</button> 
							 <input type="hidden" id="password" name="password" value="{$ListDet.password}" />
							 <input type="hidden" class="form-control" id="timestamp" name="timestamp" value="{$smarty.now|date_format:'%Y-%m-%d &amp; %I:%M:%S %p'}"/>
						<input type="hidden" class="form-control" id="created_date" name="created_date" value="{$smarty.now|date_format:'%Y-%m-%d'}"/>
						<input type="hidden" class="form-control" id="created_time" name="created_time" value="{$smarty.now|date_format:'%I:%M:%S %p'}"/>
						
							   </div>
							   </div>
							    
					<div class="form-group"  id="chg_pwd1" style="display:none">
							   <label class="col-sm-3 control-label">Retype New Password</label>
									<div class="col-sm-5"><input type="password" id="retype_new_password" name="retype_new_password" value=""/></div>
							</div>	
							    </div>
							   
							 
					
							</div>
							
                              
							
            	<br />
							   <div class="box-footer">
                               <center><input type="submit" class="btn btn-info pull-center" value="UPDATE" id="profileUpdate">
                               <input type="button" class="btn btn-info pull-center" value="BACK" id="back">
								    </center>
                             </div>
                                    </form>
									{/foreach}
                        </div>
                    </div>
                </div>
            </section>
			</div>
        </body>
        
        {literal}
		<script type="text/javascript">
		
        $(document).ready(function() {	
			
			$("#profileUpdate").click(function(){
			var fields=["new_password","retype_new_password"];
					if(document.getElementById('new_password').value!=document.getElementById('retype_new_password').value)
							alert("PassWord Does Not Match");
					else if(document.getElementById('new_password').value == document.getElementById('retype_new_password').value);
							//alert("PassWord Correct");
							for(i=0;i<fields.length;i++)
				{
				
				current_iteration = document.getElementById(fields[i]).value;
				
				document.getElementById(fields[i]).style.borderColor="";
						if(current_iteration=="")
						{			
						document.getElementById(fields[i]).focus();
						document.getElementById(fields[i]).style.borderColor="red";									
									return false;
						}	

				}				
              FormName= document.ProfileUpdate;
  			  FormName.method= "POST";
              FormName.submit(); 
				});
			
				$("#pwdchange").click(function(){
					document.getElementById('chg_pwd').style.display='inherit';
					document.getElementById('chg_pwd1').style.display='inherit';
				});
				
				$("#back").click(function(){
				window.history.back();
				});

				

		
		 });
		 
		 </script>
		 {/literal}