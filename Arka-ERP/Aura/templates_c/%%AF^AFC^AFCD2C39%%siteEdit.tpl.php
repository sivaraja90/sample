<?php /* Smarty version 2.6.25, created on 2016-12-25 17:44:07
         compiled from siteEdit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'siteEdit.tpl', 151, false),)), $this); ?>
     
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
            <div class="row">
			
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                           <h5  style="padding-left:40%;">Edit Site Details</h5>
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
                            <form method="post" class="form-horizontal" name="siteReg" id="siteReg">
							<input type="hidden"  id="hdAction"  name="hdAction" />
                          <?php $_from = $this->_tpl_vars['PageList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDet']):
?>
							  <div class="form-group">
							 <div id="errCustomerId">
										<label class="col-sm-2 control-label" style="text-align:left;">Customer Id: </label>
										<div class="col-md-3"><input type="text"  id="customer_id"  name="customer_id" class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['customer_id']; ?>
"  autocomplete="Off" readonly="true" >
										</div>
										</div>	
										<div id="errCustomerName">
										<label class="col-sm-2 control-label" style="text-align:left;">Customer Name: </label>
										<div class="col-md-3"><input type="text"  id="customer_name"  name="customer_name" class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['customer_name']; ?>
"  autocomplete="Off" readonly="true">
										</div>
										</div>	
							 </div>	
							
							<div class="form-group">
							 <div id="errsiteId">
										<label class="col-sm-2 control-label "style="text-align:left;">Site Id:</label>
										<div class="col-md-3"><input type="text"  id="siteId"  name="siteId" class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['site_id']; ?>
" readonly="true" autocomplete="off">
										</div>
										</div>	
							  <div id="errsiteName"> 
									    <label class="col-sm-2 control-label" style="text-align:left;">Site Name:</label>
									    <div class="col-md-3"><input type="text" id="siteName"  name="siteName" class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['site_name']; ?>
" autocomplete="off">
									    </div>
									    </div>			  
							   </div>
							      <div class="form-group">
							  
							   <div id="erraddress"> 
										<label class="col-sm-2 control-label" style="text-align:left;">Address1:</label>
										<div class="col-md-3"><input type="text"  id="address1"  name="address1" class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['address1']; ?>
" autocomplete="off">
										</div>
										</div>
							    <div id="errvillage">  <label class="col-sm-2 control-label" style="text-align:left;">Village:</label>
                               <div class="col-md-3"><input type="text" id="village"  name="village" class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['village']; ?>
" autocomplete="off">
							   </div>
							   </div>
							   					
							   </div>
							   <div class="form-group">
							   <div id="errcity">
							        <label class="col-sm-2 control-label" style="text-align:left;">City:</label>
									<div class="col-md-3"><input type="text" id="city" name="city" class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['city']; ?>
" autocomplete="off">
							   </div>
							   </div>
							   <div id="errstate">
							        <label class="col-sm-2 control-label" style="text-align:left;">State:</label>
									<div class="col-md-3"><input type="text" id="state" name="state" class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['state']; ?>
" autocomplete="off">
							   </div>
							   </div>
							   
							   </div>
							   
							   <div class="form-group">
							   	<div id="errpincode">
							        <label class="col-sm-2 control-label" style="text-align:left;">Pincode:</label>
									<div class="col-md-3"><input type="text" id="pincode" name="pincode" class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['pincode']; ?>
"  onBlur="chk_exist_pincode(this);" autocomplete="off">
							   </div>
							   </div>
							   <div id="errdistrict">
							        <label class="col-sm-2 control-label" style="text-align:left;">District:</label>
									<div class="col-md-3"><input type="text" id="district" name="district" class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['district']; ?>
" autocomplete="off">
							   </div>
							   </div>
							   </div>
							   
					        <div class="form-group">
							  
							  <div id="errcontactPerson"> 
							   <label class="col-sm-2 control-label" style="text-align:left;">Contact Person:</label>
										<div class="col-md-3"><input type="text"  id="contactPerson"  name="contactPerson"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['contact_person']; ?>
" autocomplete="off">
										</div>
										</div>
							   <div id="errdesignation">  
							   <label class="col-sm-2 control-label" style="text-align:left;">Designation:</label>
							   <div class="col-md-3"><input type="text" id="designation"  name="designation"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['designation']; ?>
" autocomplete="off">
							   </div>
							   </div>
							   
							  </div>			  
							 
							  <div class="form-group" >
							  <div id="errmobile">  <label class="col-sm-2 control-label"style="text-align:left;">Mobile:</label>
                               <div class="col-md-3"><input type="text"  id="mobile"  name="mobile"class="form-control" onkeyup="numericFilter(this)" onBlur="chk_exist_mob(this);" value="<?php echo $this->_tpl_vars['ListDet']['mobile']; ?>
" autocomplete="off">
							   </div>
							   </div>
							   <div id="errphone">  
										<label class="col-sm-2 control-label" style="text-align:left;">Phone:</label>
										<div class="col-md-3"><input type="text"  id="phone"  name="phone"class="form-control" onkeyup="numericFilter(this)" value="<?php echo $this->_tpl_vars['ListDet']['phone']; ?>
 " autocomplete="off">
										</div>
										</div>							   
							   </div>
							   
							   
							   
							      <div class="form-group">
							   <div id="erreMail"> <label class="col-sm-2 control-label" style="text-align:left;">Email:</label>
                               <div class="col-md-3"><input type="text"  id="email"  name="email"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['email']; ?>
" autocomplete="off">
							   </div>
							   </div>	
							   <div id="errregion">
										<label class="col-sm-2 control-label" style="text-align:left;">Region:</label>
										<div class="col-md-3"><input type="text"  id="region"  name="region"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['region']; ?>
" autocomplete="off">
										</div>
										</div>						   
							   </div>
							    <div class="form-group">
							   <div id="errmodifiedDate"> <label class="col-sm-2 control-label" style="text-align:left;">Modified Date:</label>
                               <div class="col-md-3"><input type="text"  id="modifiedDate"  name="modifiedDate" readonly="true" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
" class="form-control"  autocomplete="off">
							   </div>
							   </div>	
							   <div id="errmodifiedTime">
										<label class="col-sm-2 control-label" style="text-align:left;">Modified Time:</label>
										<div class="col-md-3"><input type="text"  id="modifiedTime"  name="modifiedTime" readonly="true" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%I:%M:%S %p')); ?>
"class="form-control" autocomplete="off">
										</div>
										</div>						   
							   </div>
							  
							   <div class="form-group">
							   <div id="errmodifiedBy"> <label class="col-sm-2 control-label" style="text-align:left;">Modified By:</label>
                               <div class="col-md-3"><input type="text"  id="modifiedBy"  name="modifiedBy"  value="<?php echo $this->_supers['session']['UserName']; ?>
" readonly="true"class="form-control" autocomplete="off">
							   </div>
							   </div>
							   <div id="errnoOfTurbines">
										<label class="col-sm-2 control-label" style="text-align:left;">No. Of Turbines:</label>
										<div class="col-md-3"><input type="text"  id="noOfTurbines"  name="noOfTurbines" class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['no_of_turbines']; ?>
" autocomplete="off">
										</div>
										</div>						   
							   </div>
							     
								 
							<?php endforeach; endif; unset($_from); ?>
							     
							   <div align="center">
                                         
                                        <button class="btn btn-primary" type="button" id="addSite">UPDATE</button>
										<button class="btn btn-white" type="button" name="back" id="back">CANCEL</button>
                                      </div>
									  
                                    </form>
                        </div>
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

function chk_exist_pincode(pincode)
{

if (pincode.value=="")
  {
  return false;
  }
  
		if(pincode.value.length==6)
								{ 
								
								}
		else
								{
								dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Pincode Should be 6 Digits",	
											});		
								return false;									
								}	  

}
        $(document).ready(function() {		
       $("#addSite").click(function(){
                var fields=["siteId","siteName","address1","village","city","state","pincode","district","contactPerson","designation","mobile","email","region","noOfTurbines"];
				for(i=0;i<fields.length;i++)
				{
				current_iteration = document.getElementById(fields[i]).value;
				document.getElementById(fields[i]).style.borderColor="";
						if(current_iteration=="" || current_iteration.length<1)
						{			
						document.getElementById(fields[i]).focus();
						document.getElementById(fields[i]).style.borderColor="red";									
						return false;
						}
					
				}	
				
	  		  FormName		= document.siteReg;
  			  FormName.method	= "POST";
              FormName.submit();				
		  });

$("#back").click(function(){
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
			