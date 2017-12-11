<?php /* Smarty version 2.6.25, created on 2016-12-25 16:47:29
         compiled from userEdit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'userEdit.tpl', 164, false),)), $this); ?>
        </div>
           
       <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
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
                           <h5  style="padding-left:40%;">Edit User Details</h5>
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
						
                            <form method="post" class="form-horizontal" name="userReg" id="userReg">
							<input type="hidden" name="hdAction" id="hdAction">
                           <?php $_from = $this->_tpl_vars['PageList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDet']):
?>
							   <div class="form-group">
							   <div id="errsiteName">
							        <label class="col-sm-2 control-label" style="text-align:left;">Site Name:</label>
									<div class="col-md-3"><input type="text" id="site_name" name="site_name" class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['site_name']; ?>
" readonly="true"autocomplete="Off">
							   </div> 
							   </div>
							   <div id="errsiteId">
							        <label class="col-sm-2 control-label" style="text-align:left;">Site Id:</label>
									<div class="col-md-3"><input type="text" id="site_id" name="site_id" class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['site_id']; ?>
" readonly="true" autocomplete="Off">
							   </div>
							   </div>
							   
							  
							   
							   </div>
							   <div class="form-group">
							    <div id="errmobileNo"> <label class="col-sm-2 control-label" style="text-align:left;">Customer Name:</label>
                               <div class="col-md-3"><input type="text" id="customer_name"  name="customer_name" class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['customer_name']; ?>
" autocomplete="Off" readonly="true">
							   </div>
							   </div>
							  
							   <div id="erruserFullName">
										<label class="col-sm-2 control-label" style="text-align:left;">Customer Id:</label>
										<div class="col-md-3"><input type="text"  id="customer_id"  name="customer_id"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['customer_id']; ?>
" autocomplete="Off" readonly="true">
										</div>
										</div>							  
							   </div>
							      <div class="form-group">
							  
							   <div id="erreMail"> 
										<label class="col-sm-2 control-label" style="text-align:left;">Contact Person:</label>
										<div class="col-md-3"><input type="text"  id="contact_person"  name="contact_person"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['contact_person']; ?>
" autocomplete="Off" readonly="true">
										</div>
										</div>
								<div id="errsupportGroup">  <label class="col-sm-2 control-label" style="text-align:left;">Customer Type:</label>
                               <div class="col-md-3"><input type="text" id="type"  name="type" class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['customer_type']; ?>
" autocomplete="Off" >
							   </div>
							   </div>		
							   </div>
							   
							   
							   
							   <!--<div class="form-group">
							   	<div id="errregion">
							        <label class="col-sm-2 control-label" style="text-align:left;">Region:</label>
									<div class="col-md-3"><input type="text" id="region" name="region" class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['region']; ?>
" autocomplete="Off">
							   </div>
							   </div>
							   
							   </div>-->
							   <hr />
							   
							   <div class="form-group">
							  
							  <div id="errcustomerId"> 
							   <label class="col-sm-2 control-label" style="text-align:left;">User ID:</label>
                               <div class="col-md-3"><input type="text" id="userId"  name="userId"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['user_id']; ?>
" readonly="true" autocomplete="Off"></div></div>
							   <div id="errcustomerName">  
							   <label class="col-sm-2 control-label"style="text-align:left;">User Name:</label>
							   <div class="col-md-3"><input type="text" id="userName"  name="userName"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['username']; ?>
" autocomplete="Off"></div>
							   </div>
							   </div>			  
							  <div class="form-group">
							   <div id="errdepartment">
										<label class="col-sm-2 control-label" style="text-align:left;">Department:</label>
										<div class="col-md-3"><input type="text"  id="department"  name="department"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['department']; ?>
" autocomplete="Off">
										</div>
										</div>						   
							   <div id="errdepartment">
										<label class="col-sm-2 control-label" style="text-align:left;">Password:</label>
										<div class="col-md-3"><input type="password"  id="password"  name="password"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['password']; ?>
" autocomplete="Off">
										</div>
										</div>						   
							   </div>
						   
							  
							      <div class="form-group">
							  <div id="erruserId">  <label class="col-sm-2 control-label" style="text-align:left;">Mobile:</label>
                               <div class="col-md-3"><input type="text"  id="mobile"  name="mobile"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['mobile']; ?>
" onkeyup="numericFilter(this)" onBlur="chk_exist_mob(this);" autocomplete="Off">
							   </div>
							   </div>
							   <div id="erruserStatus">  
										<label class="col-sm-2 control-label" style="text-align:left;">Phone:</label>
										<div class="col-md-3"><input type="text"  id="phone"  name="phone"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['phone']; ?>
" onkeyup="numericFilter(this)" autocomplete="Off">
										</div>
										</div>							   
							   </div>
							   
							   
							   
							     <div class="form-group">
							   <div id="errpassword"> <label class="col-sm-2 control-label" style="text-align:left;">Email:</label>
                               <div class="col-md-3"><input type="text"  id="email"  name="email"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['email_id']; ?>
" autocomplete="Off">
							   </div>
							   </div>	
							   
							       <div id="errcustomerPerson">
								<label class="col-sm-2 control-label" style="text-align:left;">User Group:</label>
								<div class="col-md-3"><select id="userGroup"  name="userGroup" class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['user_group']; ?>
" autocomplete="Off">
						        
								<?php $_from = $this->_tpl_vars['GroupList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListGrp']):
?>	
										<?php if ($this->_tpl_vars['ListGrp']['group_name'] == $this->_tpl_vars['ListDet']['user_group']): ?>
											<option value="<?php echo $this->_tpl_vars['ListGrp']['group_name']; ?>
" selected="selected"><?php echo $this->_tpl_vars['ListGrp']['group_name']; ?>
 </option>
										<?php else: ?>
											<option value="<?php echo $this->_tpl_vars['ListGrp']['group_name']; ?>
"><?php echo $this->_tpl_vars['ListGrp']['group_name']; ?>
 </option>
										<?php endif; ?>
								<?php endforeach; endif; unset($_from); ?>
								</select>		
								</div>
								</div>
							   							    
							   </div>
							  	 
							       <div class="form-group">
							   <div id="errmodifiedDate"> <label class="col-sm-2 control-label" style="text-align:left;">Modified Date:</label>
                               <div class="col-md-3"><input type="text"  id="modifiedDate"  name="modifiedDate" readonly="true" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
" class="form-control" autocomplete="Off">
							   </div>
							   </div>	
							   <div id="errmodifiedTime">
										<label class="col-sm-2 control-label" style="text-align:left;">Modified Time:</label>
										<div class="col-md-3"><input type="text"  id="modifiedTime"  name="modifiedTime" readonly="true" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%I:%M:%S %p')); ?>
" class="form-control" autocomplete="Off">
										</div>
										</div>						   
							   </div>
						  	   
							    <div class="form-group">
							   <div id="errmodifiedBy"> <label class="col-sm-2 control-label" style="text-align:left;">Modified By:</label>
                               <div class="col-md-3"><input type="text"  id="modifiedBy"  name="modifiedBy" value="<?php echo $this->_supers['session']['UserName']; ?>
" readonly="true" class="form-control" autocomplete="Off">
							   </div>
							   </div>
							   	
							   </div>  <?php endforeach; endif; unset($_from); ?>	
							   <div align="center">
                                         
                                        <button class="btn btn-primary" type="button" id="addUser">UPDATE</button>
										<button class="btn btn-white" type="submit" id="back">CANCEL</button>
                                      </div>
									
                                    </form></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php echo '    
		
<script>
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


        $(document).ready(function() {		
       $("#addUser").click(function(){
                var fields=["customer_id","customer_name","contact_person","type","userId","userName","department","userGroup","mobile","email","password"];	
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
						
							
/*						if(i==3)
						{
						var atpos  =  current_iteration.indexOf("@");
						var dotpos = current_iteration.lastIndexOf(".");
								if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=current_iteration.length) 
								{
								dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please verify Mail Id",	
											});										
									return false;
								}						
						}
						
						
						*/
				}	
				
	  		  FormName		= document.userReg;
  			  FormName.method	= "POST";
              FormName.submit();				
							
                                          });
										  
/*$("#mobileNo").keyUp(function(){
numericFilter();
}*/$("#back").click(function(){

window.history.back();

});
							  
        
		 });
		 
function numericFilter(data) 
{
   data.value = data.value.replace(/[^.0-9]/ig,"");
}	
function text_filter(data)
{
   data.value = data.value.replace(/[^ .a-z]/ig,"");
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

<script type="text/javascript" src=\'./dhtmlxMessage/codebase/dhtmlxmessage.js\'></script>
<script type=\'text/javascript\' src=\'./auto-complete/jquery.metadata.js\'></script>
<script type=\'text/javascript\' src=\'./auto-complete/jquery.auto-complete.js?<?= mktime() ?>\'></script>
<script type=\'text/javascript\' src=\'./auto-complete/js.js?<?= mktime() ?>\'></script>
<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/> 
<link rel=\'stylesheet\' type=\'text/css\' href=\'auto-complete/jquery.auto-complete.css?<?= mktime() ?>\' />
	
'; ?>
		