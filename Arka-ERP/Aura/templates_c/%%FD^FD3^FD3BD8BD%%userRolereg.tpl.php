<?php /* Smarty version 2.6.25, created on 2015-11-20 18:28:06
         compiled from userRolereg.tpl */ ?>
    </div>
           
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
            <?php if ($this->_tpl_vars['SuccessMessage'] != ""): ?>
			<div class="isa_success">
			<i class="fa fa-check"></i>
			<?php echo $this->_tpl_vars['SuccessMessage']; ?>
		 
			</div>
		 <?php endif; ?>
		  <?php if ($this->_tpl_vars['ErrorMessage'] != ""): ?>
			<div class="isa_error">
			<i class="fa fa-check"></i>
			<?php echo $this->_tpl_vars['ErrorMessage']; ?>
		 
			</div>
		 <?php endif; ?>
                
            </div>
            <div class="row">
                
                
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                          <h5  style="padding-left:40%;">User Role Registration Form</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
<!--                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>-->
                            </div>
                        </div>    
                        <div class="ibox-content">
                            <form method="post" class="form-horizontal" name="addrole" id="addrole">
							  <input type="hidden"  id="hdAction"  name="hdAction" />
							  <input type="hidden" id="role_id"  name="role_id" class="form-control" autoComplete="Off" value="<?php echo $this->_tpl_vars['r_id']; ?>
">
							   <label class="col-sm-2 control-label" style="text-align:left;">Role Name:<span style="color:#FF0000"><sup>*</sup></span></label>
                               <div class="col-md-4"  id="errRoleName"><input type="text"  id="role_name"  name="role_name"class="form-control"  value="<?php echo $this->_tpl_vars['role_name']; ?>
" autoComplete="Off"></div>
							   
							   
							  	
                             
							    <label class="col-sm-2 control-label" style="text-align:left;"> Category:<span style="color:#FF0000"><sup>*</sup></span></label>
                               <div class="col-md-4" id="errCategory"><input type="text" id="category" name="category" class="form-control" autoComplete="Off" value="<?php echo $this->_tpl_vars['category']; ?>
">
							   
							  
							
										
							   </div>	
							
                            
						
						<br /><br />
									  
							  	<br />
							   <div align="center">
                                         
                                        <button class="btn btn-primary" type="button" id="addUserRole">ADD User Role</button>
										<button class="btn btn-white" type="reset" id="back">CANCEL</button>
                                      </div>
                                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	<?php echo '	
<script>
        $(document).ready(function() {		
$("#addUserRole").click(function(){
				var fields=["role_name","category"];
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
              FormName= document.addrole;
  			  FormName.method= "POST";
              FormName.submit(); 
			                 });
										  
/*$("#mobileNo").keyUp(function(){
numericFilter();
}*/
							  
        $("#back").click(function(){

window.history.back();

});

		 });
		 function ValidateEmail(inputText)  
{  
var mailformat = /^\\w+([\\.-]?\\w+)*@\\w+([\\.-]?\\w+)*(\\.\\w{2,3})+$/;  
if(inputText.value.match(mailformat))  
{  
document.form1.text1.focus();  
return true;  
}  
else  
{  
alert("You have entered an invalid email address!");  
document.form1.text1.focus();  
return false;  
}  
} 

		 
function numericFilter(data) 
{
   data.value = data.value.replace(/[^.0-9]/ig,"");
}	
function textFilter(data)
{
   data.value = data.value.replace(/[^ .a-z]/ig,"");
}		 
	
	    $(\'.datepicker\').datepicker({
                todayBtn: "linked",
				format:\'yyyy-mm-dd\',
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });	 
</script>
<style>
.isa_success
{
	color:#4F8A10;
	background-color:#DFF2BF;
}
.isa_error
{
	color:#D8000C;
	background-color:#FFBABA;
}
.isa_success i,.isa_error i
{
    margin:10px 22px;
	font-size:2em;
	vertical-align:middle;

}
</style>
'; ?>