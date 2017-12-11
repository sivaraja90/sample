<?php /* Smarty version 2.6.25, created on 2015-12-22 11:02:27
         compiled from userRoleEdit.tpl */ ?>
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
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                          <h5 style="padding-left:40%;">Edit User Role Details</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                               
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form method="post"  name="userRoleUpdate" id="userRoleUpdate" class="form-horizontal">
							<input type="hidden"  id="hdAction"  name="hdAction" />
                              <?php $_from = $this->_tpl_vars['PageList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDet']):
?>
							   <div class="form-group">
							<input type="hidden" id="role_id"  name="role_id"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['role_id']; ?>
">
							  <div id="errroleName"> 
<label class="col-sm-2 control-label" style="text-align:left;">Role Name:</label>
<div class="col-md-3"><input type="text" id="role_name"  name="role_name"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['role_name']; ?>
" autocomplete="Off"></div></div>
							   <div id="errcategory">  
							   <label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Category:</label>
							   <div class="col-md-3"><input type="text" id="category"  name="category"class="form-control" value=" <?php echo $this->_tpl_vars['ListDet']['category']; ?>
 " autocomplete="Off"> </div>
							   </div>
							   </div>	
                              		   					   						   		  
							  	<br />
							   <div align="center">
                                         
                                        <button class="btn btn-primary" type="button" id="upDateUserRole">UPDATE</button>
									   <button class="btn btn-white" type="button" id="back">CANCEL</button>
                                      </div>
									<?php endforeach; endif; unset($_from); ?>
                                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<?php echo '
		<script type="text/javascript">
		
        $(document).ready(function() {	
		 $(\'#side-menu\').metisMenu();

$("#upDateUserRole").click(function(){
				var fields=["role_name","category"];
				for(i=0;i<fields.length;i++)
				{
				
				current_iteration = document.getElementById(fields[i]).value;
				//alert(current_iteration);
				document.getElementById(fields[i]).style.borderColor="";
						if(current_iteration=="")
						{			
						document.getElementById(fields[i]).focus();
						document.getElementById(fields[i]).style.borderColor="red";									
									return false;
						}	

				}				
              FormName= document.userRoleUpdate;
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