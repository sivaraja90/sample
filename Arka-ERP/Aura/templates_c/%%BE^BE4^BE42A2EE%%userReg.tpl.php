<?php /* Smarty version 2.6.25, created on 2017-02-17 18:06:27
         compiled from userReg.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'userReg.tpl', 163, false),)), $this); ?>


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
                           <h5  style="padding-left:40%;">User Registration Form</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
<!--                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href"#">Config option 1</a>
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
                            <form method="post" class="form-horizontal" name="userReg" id="userReg">
							<input type="hidden"  id="hdAction"  name="hdAction" />
							<input type="hidden" id="logo_image" name="logo_image" />
                            <div class="form-group">
							   
							   <div id="errsiteName">
							        <label class="col-sm-2 control-label" style="text-align:left;">Site Name:</label>
									<div class="col-md-4"><input type="text" id="site_name" name="site_name" size="29" placeholder="Search" value="<?php echo $this->_supers['post']['site_name']; ?>
" class="form-control" autocomplete="Off"  readonly="true"  data-toggle="modal" data-target="#myModal">	
							   </div>
							        <div id="errsiteId">
									<label class="col-sm-2 control-label" style="text-align:left;">Site Id:</label>
									<div class="col-md-4"><input type="text" id="site_id" name="site_id" class="form-control" value="<?php echo $this->_supers['post']['site_id']; ?>
" autocomplete="Off" readonly="true">
									<input type="hidden" id="image" name="image" class="form-control" value="<?php echo $this->_supers['post']['image']; ?>
" autocomplete="Off" readonly="true">
							   </div>
							   </div>
							   
							   </div>
							   
							   </div>
							    <div class="form-group">
							  <div id="errcusName"> 
									    <label class="col-sm-2 control-label" style="text-align:left;">Customer Name:</label>
									    <div class="col-md-4"><input type="text" id="customer_name"  name="customer_name" class="form-control" onkeyup="textFilter(this)" value="<?php echo $this->_supers['post']['customer_name']; ?>
" autocomplete="Off" readonly="true" >
									    </div>
							 <div id="errCusId">
										<label class="col-sm-2 control-label "style="text-align:left;">Customer Id:</label>
										<div class="col-md-4"><input type="search"  id="customer_id"  name="customer_id" class="form-control" value="<?php echo $this->_supers['post']['customer_id']; ?>
" autocomplete="Off" readonly="true">
										</div>
										</div>	
							 
									    </div>			  
							   </div>
							      <div class="form-group">
							  
							   <div id="errcontactPerson"> 
										<label class="col-sm-2 control-label" style="text-align:left;">Contact Person:</label>
										<div class="col-md-4"><input type="text"  id="contact_person"  name="contact_person"class="form-control" value="<?php echo $this->_supers['post']['contact_person']; ?>
"  autocomplete="Off" readonly="true">
										</div>
										</div>
							    <div id="errcusType">  <label class="col-sm-2 control-label" style="text-align:left;">Customer Type:</label>
                               <div class="col-md-4"><input type="text" id="type"  name="type" class="form-control" value="<?php echo $this->_tpl_vars['type']; ?>
"  autocomplete="Off">
							   </div>
							   </div>
							   					
							   </div>
							   
							 
							   <hr />
					        <div class="form-group">
							  
							  <div id="erruserId"> 
							  
                               <input type="hidden" id="userId"  name="userId"class="form-control" readonly="true"  value="<?php echo $this->_tpl_vars['u_id']; ?>
" autocomplete="Off">
							  
							     <label class="col-sm-2 control-label" style="text-align:left;">User Name:</label>
							   <div class="col-md-4"><input type="text" id="userName"  name="userName"class="form-control" value="<?php echo $this->_tpl_vars['userName']; ?>
" autocomplete="Off">
							   </div>
							 <div id="errPassword">
										<label class="col-sm-2 control-label" style="text-align:left;">Password:</label>
										<div class="col-md-4"><input type="password"  id="password"  name="password"class="form-control" value="<?php echo $this->_tpl_vars['password']; ?>
" autocomplete="Off">
										</div>
										</div>						   
							   </div>
							  </div>			  
							  <div class="form-group">
							   <div id="errdepartment">
										<label class="col-sm-2 control-label" style="text-align:left;">Department:</label>
										<div class="col-md-4"><input type="text"  id="department"  name="department" class="form-control" value="<?php echo $this->_tpl_vars['department']; ?>
" autocomplete="Off">
										</div>
										</div>						   
							   
						    <div id="errPassword">
										<label class="col-sm-2 control-label" style="text-align:left;">Re Password:</label>
										<div class="col-md-4"><input type="password"  id="re_password"  name="re_password"class="form-control" value="<?php echo $this->_tpl_vars['re_password']; ?>
" autocomplete="Off">
										</div>
										</div>		
							   
							   							    
							   </div>
							      <div class="form-group" style="text-align:left;">
							  <div id="errmobileNo">  <label class="col-sm-2 control-label"style="text-align:left;">Mobile:</label>
                               <div class="col-md-4"><input type="text"  id="mobile"  name="mobile"class="form-control" onkeyup="numericFilter(this)" onBlur="chk_exist_mob(this);" maxlength="10" value="<?php echo $this->_tpl_vars['mobile']; ?>
" autocomplete="Off">
							   </div>
							   </div>
							   <div id="erruserGroup"> 
								<label class="col-sm-2 control-label" style="text-align:left;">User Group:</label>
								<div class="col-md-4">
								<select id="userGroup"  name="userGroup" class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['user_group']; ?>
" autocomplete="Off">
						        <option value="select" selected="selected">-select- </option>
								<?php $_from = $this->_tpl_vars['GroupList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListGrp']):
?>	
							    <option value="<?php echo $this->_tpl_vars['ListGrp']['group_name']; ?>
"><?php echo $this->_tpl_vars['ListGrp']['group_name']; ?>
 </option>
							    <?php endforeach; endif; unset($_from); ?>
								</select>				
								</div>
								</div>
							  </div>
							 
							     <div class="form-group">
							   <div id="errEmail"> <label class="col-sm-2 control-label" style="text-align:left;">Email:</label>
                               <div class="col-md-4"><input type="text"  id="email"  name="email"class="form-control" onblur="ValidateEmail(this)" maxlength="30" value="<?php echo $this->_tpl_vars['email']; ?>
"autocomplete="Off" >
							   </div>
							   </div>	
							  			
								 <div id="errPhone">  
								<label class="col-sm-2 control-label" style="text-align:left;">Phone:</label>
								<div class="col-md-4"><input type="text"  id="phone"  name="phone"class="form-control" onkeyup="numericFilter(this)" value="<?php echo $this->_tpl_vars['phone']; ?>
" autocomplete="Off" maxlength="11">
								</div>
								</div>							   
							   </div>
							   
							   		   
							  
							     
								 
							      <div class="form-group">	
								  <div class="col-md-4">
								<input type="hidden"  id="createdDate"  name="createdDate" readonly="true" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
" class="form-control">
								<input type="hidden"  id="createdTime"  name="createdTime"  value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%I:%M:%S %p')); ?>
"  readonly="true" class="form-control">		  
							  <input type="hidden"  id="createdBy"  name="createdBy" value="<?php echo $this->_supers['session']['UserName']; ?>
" readonly="true" class="form-control">
							   </div>
							   </div>	
							   <div align="center">
                                         
                                        <button class="btn btn-primary" type="submit" id="addUser">ADD USER</button>
										<button class="btn btn-white" type="submit" id="back">Back</button>
                                      </div>
                                    </form>
									<div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content animated bounceInRight">
                                        
                                        <div class="modal-body">
										 <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button> <h2 class="modal-title" align="center">User Details</h2>
                                          <!-- SEARCH FORM START -->
<div id="std">            
<!-- SEARCH FORM END -->
<?php echo '
<script type="text/javascript">
function chk_exist_mob(mob_no)
{

if (mob_no.value=="")
  {
  return false;
  }
  
		if(mob_no.value.length==10)
								{ 
								
								}
		else
								{
								dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Mobile Number Should be 10 Digits",	
											});		
								return false;									
								}	  

}



function closeit(val,val1,val2,val3,val4,val5){
    parent.document.forms[\'userReg\'].elements[\'site_name\'].value=val;
	parent.document.forms[\'userReg\'].elements[\'site_id\'].value=val1;
	parent.document.forms[\'userReg\'].elements[\'customer_name\'].value=val2;
	parent.document.forms[\'userReg\'].elements[\'customer_id\'].value=val3;
   parent.document.forms[\'userReg\'].elements[\'contact_person\'].value=val4;
     parent.document.forms[\'userReg\'].elements[\'logo_image\'].value=val5;
parent.dhxWins.window("w1").close();
//	parent.dhxWins.window("w1").close();
/*	var supplier_name = document.getElementById("supplier_name");
    var id = supplier_name.options[supplier_name.selectedIndex].value;
	alert(\'hi\');*/
	
}
$(document).ready(function() {	
 $("#table").click(function(){
					
					 $("#myModal").hide();
				});
 
 
      });
</script>

<script type="text/javascript" src=\'./dhtmlxMessage/codebase/dhtmlxmessage.js\'></script>
<script type=\'text/javascript\' src=\'./auto-complete/jquery.metadata.js\'></script>
<script type=\'text/javascript\' src=\'./auto-complete/jquery.auto-complete.js?<?= mktime() ?>\'></script>
<script type=\'text/javascript\' src=\'./auto-complete/js.js?<?= mktime() ?>\'></script>
<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/> 
<link rel=\'stylesheet\' type=\'text/css\' href=\'auto-complete/jquery.auto-complete.css?<?= mktime() ?>\' />

'; ?>


 <table width="100%" border="1PX solid black" cellspacing=1 cellpadding=2 class="table table-bordered">
    <form name="UserMgmt" method="post" >
    <!--<input type="hidden" name="a" value="search" >-->
					<tr >
				    <td colspan="2" align="right"><?php echo $this->_tpl_vars['LinkPage']; ?>
<?php echo $this->_tpl_vars['PerPageNavigation']; ?>
</td>
				    </tr>
    <tr><td>
       <table width="100%" border="1PX solid black" cellspacing=0 cellpadding=1 class="table table-bordered" bgcolor:"blue" id="table">
        <tr>
	        <th width="120" align="center">&nbsp;S No.</th>
			<th width="150" align="center">&nbsp;Site Name</th>
			<th width="150" align="center">&nbsp;Site Id</th>
	        <th width="380" align="center">&nbsp;Customer Name</th>
			<th width="350" align="center">&nbsp;Customer Id</th>
	       	<th width="350" align="center">&nbsp;Contact Person</th>

        </tr>
		 <!-- <tr>
                <td align="center" bgcolor="#CCFFFF">&nbsp;</td>
                <td align="center" bgcolor="#CCFFFF"><input type="text" id="supplier_name" name="supplier_name" size="45" autocomplete="Off"><input id="search" name="search" value="" size="10" class="btn" type="submit" style="visibility:hidden"></td>
				<td align="center" bgcolor="#CCFFFF"><input type="text" id="supplier_code" name="supplier_code" size="23" autocomplete="Off"><input id="search" name="search" value="" size="10" class="btn" type="submit" style="visibility:hidden"></td>
            </tr>-->
			
        <?php $_from = $this->_tpl_vars['PageList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListCus']):
?>
            <tr>          
                <td align="center" title="">
                  <a href="#."  onClick="closeit('<?php echo $this->_tpl_vars['ListCus']['site_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['site_id']; ?>
','<?php echo $this->_tpl_vars['ListCus']['customer_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['customer_id']; ?>
','<?php echo $this->_tpl_vars['ListCus']['contact_person']; ?>
','<?php echo $this->_tpl_vars['ListCus']['logo_image']; ?>
');"><?php echo $this->_tpl_vars['i']++; ?>
</a></td>
    <td align="left"><a  href="#." onClick="closeit('<?php echo $this->_tpl_vars['ListCus']['site_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['site_id']; ?>
','<?php echo $this->_tpl_vars['ListCus']['customer_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['customer_id']; ?>
','<?php echo $this->_tpl_vars['ListCus']['contact_person']; ?>
','<?php echo $this->_tpl_vars['ListCus']['logo_image']; ?>
');"><?php echo $this->_tpl_vars['ListCus']['site_name']; ?>
</a></td>
				<td align="left"><a  href="#." onClick="closeit('<?php echo $this->_tpl_vars['ListCus']['site_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['site_id']; ?>
','<?php echo $this->_tpl_vars['ListCus']['customer_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['customer_id']; ?>
','<?php echo $this->_tpl_vars['ListCus']['contact_person']; ?>
','<?php echo $this->_tpl_vars['ListCus']['logo_image']; ?>
');"><?php echo $this->_tpl_vars['ListCus']['site_id']; ?>
</a></td>
			   <td align="left"><a  href="#." onClick="closeit('<?php echo $this->_tpl_vars['ListCus']['site_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['site_id']; ?>
','<?php echo $this->_tpl_vars['ListCus']['customer_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['customer_id']; ?>
','<?php echo $this->_tpl_vars['ListCus']['contact_person']; ?>
','<?php echo $this->_tpl_vars['ListCus']['logo_image']; ?>
');"><?php echo $this->_tpl_vars['ListCus']['customer_name']; ?>
</a></td>
				<td align="left"><a  href="#." onClick="closeit('<?php echo $this->_tpl_vars['ListCus']['site_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['site_id']; ?>
','<?php echo $this->_tpl_vars['ListCus']['customer_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['customer_id']; ?>
','<?php echo $this->_tpl_vars['ListCus']['contact_person']; ?>
','<?php echo $this->_tpl_vars['ListCus']['logo_image']; ?>
');"><?php echo $this->_tpl_vars['ListCus']['customer_id']; ?>
</a></td>
			<td align="left"><a  href="#." onClick="closeit('<?php echo $this->_tpl_vars['ListCus']['site_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['site_id']; ?>
','<?php echo $this->_tpl_vars['ListCus']['customer_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['customer_id']; ?>
'),'<?php echo $this->_tpl_vars['ListCus']['contact_person']; ?>
','<?php echo $this->_tpl_vars['ListCus']['logo_image']; ?>
');"><?php echo $this->_tpl_vars['ListCus']['contact_person']; ?>
</a></td>
			<!--<td align="left"><a  href="#." onClick="closeit('<?php echo $this->_tpl_vars['ListCus']['site_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['site_id']; ?>
','<?php echo $this->_tpl_vars['ListCus']['customer_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['customer_id']; ?>
'),'<?php echo $this->_tpl_vars['ListCus']['contact_person']; ?>
','<?php echo $this->_tpl_vars['ListCus']['logo_image']; ?>
');"><?php echo $this->_tpl_vars['ListCus']['logo_image']; ?>
</a></td>-->
            </tr>
			<?php endforeach; else: ?>
			<tr>
			<td height="20" colspan="11" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
			</tr>
              <?php endif; unset($_from); ?>	

       </table>
	  
    </td></tr>
         
       
    </form>
 </table>
</div>
<center><button type="button" class="btn btn-primary" data-dismiss="modal" >Close</button></center>

                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
									 </div>
                        </div>
                </div>
            </div>
        </div>
        
	<?php echo '	
<script>
        $(document).ready(function() {		
       $("#addUser").click(function(){
                var fields=["site_name","site_id","customer_name","customer_id","contact_person","type","userName","password","department","re_password","mobile","userGroup","email","phone"];	
				
				for(i=0;i<fields.length;i++)
				{
				current_iteration = document.getElementById(fields[i]).value;
				document.getElementById(fields[i]).style.borderColor="";
						if(current_iteration=="" || current_iteration.length<2)
						{			
						document.getElementById(fields[i]).focus();
						document.getElementById(fields[i]).style.borderColor="red";									
						return false;
						}
						
							
                     	/*if(i==11)
						{
						var atpos  =  document.getElementById(\'password\').value;
						var dotpos = document.getElementById(\'re_password\').value;
								if (atpos != dotpos) 
								{
								dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "PassWord Does Not Match",	
											});										
									return false;
								}						
						}*/
				}	
				
	  		  FormName		= document.userReg;
  			  FormName.method	= "POST";
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
function text_filter(data)
{
   data.value = data.value.replace(/[^ .a-z]/ig,"");
}		 
function createWindow(parameter) {	
		dhxWins = new dhtmlXWindows();
		dhxWins.enableAutoViewport(true);
		dhxWins.attachViewportTo("std");
		dhxWins.setImagePath("./codebase/imgs/");
	
switch(parameter)
{

case "window_cus_name":
		w1 = dhxWins.createWindow("w1", 260, 100, 500, 250);
		w1.setText("dhtmlxWindow");
		w1.button("close").enable();
		w1.button("minmax1").disable();
		w1.progressOn();
		w1.setText("Customer List");
		w1.attachURL("./user_reg_window.php");
break;
	}	
	} 
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
		