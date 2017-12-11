
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Profile Details</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="./profile.php">Profile Management</a>
                        </li>
                        <li>
                            <a href="#">Details Profile</a>
                        </li>

                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
            
                
            </div>
            <div class="row">
                
                
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5 style="padding-left:40%;">Profile Details</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                             
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form method="post" class="form-horizontal" name="ProfileUpdate" id="ProfileUpdate">
							<input type="hidden"  id="hdAction"  name="hdAction" />
							  {foreach from=$PageList item=ListDet}
							  <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Customer Id:</label>
							   <div class="col-md-2"><td>{$ListDet.customer_id}</td></div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left;  margin-left:15%"> Customer Name:</label>
                               <div class="col-md-2"><td>{$ListDet.customer_name}</td></div>
					
							   </div>
                              <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;"> Contact Person:</label>
							<div class="col-md-2"><td>{$ListDet.contact_person}</td></div>
							
							   <label class="col-sm-2 control-label" style="text-align:left;margin-left:15%">Type:</label>
                               <div class="col-md-2"><td>{$ListDet.customer_type}</td></div>
							   
							</div>
							<div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;"> Site Id:</label>
							<div class="col-md-2"><td>{$ListDet.site_id}</td></div>
							
							   <label class="col-sm-2 control-label" style="text-align:left;margin-left:15%">Site Name:</label>
                               <div class="col-md-2"><td>{$ListDet.site_name}</td></div>
							   
							</div>
							
							<div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;"> Region:</label>
							<div class="col-md-2"><td>{$ListDet.region}</td></div>
							</div>
							
							 <div class="form-group">
							  
							   <label class="col-sm-2 control-label" style="text-align:left;">UserID:</label>
                               <div class="col-md-2"><td>{$ListDet.user_id}<input type="hidden" id="user_id" name="user_id" value="{$ListDet.user_id}" /></td></div>
							     
							   <label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">User Name:</label>
							   <div class="col-md-2"><td>{$ListDet.username}</td></div><input type="hidden" id="username" name="username" />
							   </div>
                              <div class="form-group">
							  <label class="col-sm-2 control-label" style="text-align:left;"> Department:</label>
                               <div class="col-md-2"><td>{$ListDet.department}</td></div>
					
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%"> User Group:</label>
							<div class="col-md-2"><td>{$ListDet.user_group}</td></div>
							</div>
							 <div class="form-group">
							  
							   <label class="col-sm-2 control-label" style="text-align:left;">Mobile:</label>
                               <div class="col-md-2"><td>{$ListDet.mobile}</td></div>
							     
							   <label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Phone:</label>
							   <div class="col-md-2"><td>{$ListDet.phone}</td></div>
							   </div>
                              <div class="form-group">
							  <label class="col-sm-2 control-label" style="text-align:left;"> Email:</label>
                               <div class="col-md-2"><td>{$ListDet.email_id}</td></div>
					
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%"> Password:</label>
							<div class="col-md-2"><td>*********</td> &nbsp;<button class="btn btn-primary" type="button" id="pwdchange">Change</button> 
							 <input type="hidden" id="password" name="password" value="{$ListDet.password}" />
							 
							   </div>  </div>
							 <div class="form-group" id="chg_pwd" style="display:none">
									 <label class="col-sm-2 control-label" style="text-align:left;">New Password:</label>
									<div class="col-md-2"><input type="password" id="new_password" name="new_password" value=""/></div>
									
									<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%">Retype New Password:</label>
									<div class="col-md-2"><input type="password" id="retype_new_password" name="retype_new_password" value=""/></div>
							</div>
					
							
							 
                              
							{/foreach}
            	<br />
							   <div align="center">
                                     
                                       <button class="btn btn-primary" type="button" id="profileUpdate" >UPDATE</button>
								<button class="btn btn-primary" type="button" id="back">BACK</button>        
                             </div>
                                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
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
				});
				
				$("#back").click(function(){
				window.history.back();
				});

				

		
		 });
		 
		 </script>
		 {/literal}