<?php /* Smarty version 2.6.25, created on 2015-12-31 10:54:08
         compiled from pdtMappingEdit.tpl */ ?>
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
                          <h5 style="padding-left:40%;">Edit Product Mapping Details</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                               
                            </div>
                        </div>
                        <div class="ibox-content"><body onload="doOnLoad();">
                            <form method="post" id="productMappingUpdate" name="productMappingUpdate"class="form-horizontal">
							<input type="hidden"  id="hdAction"  name="hdAction" />
							
                  			 <?php $_from = $this->_tpl_vars['PageList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDet']):
?>
							 <input type="hidden" id="sl_no"  name="sl_no"class="form-control"  maxlength="10" value="<?php echo $this->_tpl_vars['ListDet']['sl_no']; ?>
" autocomplete="Off">
							   <div class="form-group">
							  <div id="err_scada_Id"> 
<label class="col-sm-2 control-label" style="text-align:left;">Turbine_ID:</label>
<div class="col-md-3"><input type="text" id="turbine_id"  name="turbine_id"class="form-control"  maxlength="10" value="<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
" readonly="true" autocomplete="Off"></div></div>
							  <div id="err_product_id">  
							   <label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Location:</label>
							   <div class="col-md-3"><input type="text" id="location"  name="location"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['location']; ?>
" readonly="true" autocomplete="Off">
							   </div> </div>
							  
							   </div>	
                              <div class="form-group">
							   <div id="err_production_batch">  
							   <label class="col-sm-2 control-label" style="text-align:left;">HTSC:</label>
							   <div class="col-md-3"><input type="text" id="htsc"  name="htsc"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['htsc']; ?>
" autocomplete="Off">
							   </div> </div>
							   
							   <div id="err_production_date">  
							  <label class="col-sm-2 control-label" style="text-align:left; margin-left:15%"> Site Name:</label>
                               <div class="col-md-3"><select class="form-control" id=" site_name" name="site_name" autocomplete="off">
  											  <?php if ($this->_tpl_vars['ListDet']['site_name'] == 'Chennai'): ?>
											   <option value="<?php echo $this->_tpl_vars['ListDet']['site_name']; ?>
" selected="selected"><?php echo $this->_tpl_vars['ListDet']['site_name']; ?>
</option>
											  <option id="Radhapuram" name="Radhapuram" value="Radhapuram" >Radhapuram</option>
											  <?php elseif ($this->_tpl_vars['ListDet']['site_name'] == 'Radhapuram'): ?>
								               <option value="<?php echo $this->_tpl_vars['ListDet']['site_name']; ?>
" selected="selected"><?php echo $this->_tpl_vars['ListDet']['site_name']; ?>
</option>
											  <option id="Chennai" name="Chennai" value="Chennai" >Chennai</option>
											  	<?php endif; ?>
											</select>
							   </div>
							   </div>
							   </div>
							  
                            <div class="form-group">
							<div id="err_tested_date"> 
										<label class="col-sm-2 control-label" style="text-align:left;"> Scada ID:</label>
										<div class="col-md-3"><input type="text"  id="scadaId"  name="scadaId" class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['scada_id']; ?>
" autocomplete="Off">
										</div>
										</div>
							  <div id="err_modify_date">  
							  <label class="col-sm-2 control-label" style="text-align:left;margin-left:15%">Product ID:</label>
                               <div class="col-md-3"><input type="text" id="productId"  name="productId"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['product_id']; ?>
" readonly="true" autocomplete="Off">
							   </div>
							   </div>	
							   
							   							    
							   </div>	
                             	   						   
                              <div class="form-group" >
							  <div id="err_modify_time"> 
								<label class="col-sm-2 control-label" style="text-align:left; ">Install Date:</label>
								<div class="col-md-3"><input type="date"  id="installDate"  name="installDate"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['install_date']; ?>
" readonly="true"autocomplete="Off">
								</div>
								</div>
							  <div id="err_modify_by">  
							  <label class="col-sm-2 control-label" style="text-align:left;margin-left:15%">Install by:</label>
                               <div class="col-md-3"><!--<input type="text" id="installBy"  name="installBy"class="form-control"  value="<?php echo $this->_supers['session']['UserName']; ?>
" readonly="true" autocomplete="Off">-->
							   <select class="form-control" id=" installBy" name="installBy" autocomplete="off">
  											  <?php if ($this->_tpl_vars['ListDet']['install_by'] == 'Arka Group'): ?>
											   <option value="<?php echo $this->_tpl_vars['ListDet']['install_by']; ?>
" selected="selected"><?php echo $this->_tpl_vars['ListDet']['install_by']; ?>
</option>
											  <option  value="Customer Group" >Customer Group</option>
											  <?php elseif ($this->_tpl_vars['ListDet']['install_by'] == 'Customer Group'): ?>
								               <option value="<?php echo $this->_tpl_vars['ListDet']['install_by']; ?>
" selected="selected"><?php echo $this->_tpl_vars['ListDet']['install_by']; ?>
</option>
											  <option  value="Arka Group" >Arka Group</option>
											  	<?php endif; ?>
											</select>
							   </div>
							   </div>
							   		
                              </div>
							  <?php endforeach; endif; unset($_from); ?>
							  	<br />
							   <div align="center">
                                         
                                        <button class="btn btn-primary" type="submit" id="upDateProductMapping">UPDATE</button>
										<button class="btn btn-white" type="button" id="back">CANCEL</button>
                                      </div>
									   
                                    </form>
                        </body>
						</div>
                    </div>
                </div>
            </div>
        </div>
		<?php echo '<link rel="stylesheet" type="text/css" href="css/datepickier_main.css">
	 	    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
	  		<link rel="stylesheet" href="./codebase/dhtmlxcalendar.css" type="text/css">
			<link rel="stylesheet" href="./codebase/dhtmlxcalendar_dhx_skyblue.css" type="text/css"> 
			<link rel="stylesheet" href="./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css">
			<link rel="stylesheet" type="text/css" href="css/datepicker.css">
			<script type="text/javascript" src="dhtmlxMessage/codebase/dhtmlxcalendar.js" ></script>
<script type="text/javascript" src="./codebase/dhtmlxcalendar.js"></script>
<script type="text/javascript" src="./codebase/dhtmlxcommon.js"></script>
<script src="jquery/jquery.ui.datepicker.js"></script>
		<script type="text/javascript">
		
		 function getval()
        {
		var installDate;
		installDate=document.getElementById("installDate").value;
		
		if(installDate=="" )
		{
			alert("Please Specify Date");
			return false;
		}
		
        }	
	var myCalendar;
function doOnLoad() {
    
    var installDate;
	installDate=new Date();
    myCalendar = new dhtmlXCalendarObject(["installDate"]);
   
}	
        $(document).ready(function() {	
		 $(\'#side-menu\').metisMenu();

$("#upDateProductMapping").click(function(){ 
				var fields=["turbine_id","location","htsc","site_name","scadaId","productId","installDate","installBy"];
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
              FormName= document.productMappingUpdate;
  			  alert(current_iteration);
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

        