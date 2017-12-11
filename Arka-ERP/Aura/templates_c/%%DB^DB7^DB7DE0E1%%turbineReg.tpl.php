<?php /* Smarty version 2.6.25, created on 2016-01-22 13:48:32
         compiled from turbineReg.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'turbineReg.tpl', 65, false),)), $this); ?>

        <!--</div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Turbine Registration</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="./turbineReg.php">Turbine Management</a>
                        </li>
                        <li>
                            <a href="#">Add Turbine</a>
                        </li>

                    </ol>
                </div>
                <div class="col-lg-2">

                </div>-->
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
            <?php if ($this->_tpl_vars['SuccessMessage1'] != ""): ?>
			<div class="isa_success">
			<i class="fa fa-check"></i>
			<?php echo $this->_tpl_vars['SuccessMessage1']; ?>
		 
			</div>
		 <?php endif; ?>
		  <?php if ($this->_tpl_vars['ErrorMessage'] != ""): ?>
			<div class="isa_error">
			<i class="fa fa-check"></i>
			<?php echo $this->_tpl_vars['ErrorMessage']; ?>
		 
			</div>
		 <?php endif; ?>
            <div class="row">
                
                
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                          <h5  style="padding-left:40%;">Turbine Registration Form</h5>
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
                        <div class="ibox-content"><body onLoad="doOnLoad();">
                            <form method="post" class="form-horizontal" name="turbineReg">
                               <input type="hidden"  id="hdAction"  name="hdAction"  />
							   <input type="hidden"  id="createdBy"  name="createdBy" value="<?php echo $this->_supers['session']['UserName']; ?>
"/>
                               <input type="hidden"  id="createdDate"  name="createdDate" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
 "/>
							   <input type="hidden"  id="createdTime"  name="createdTime"  value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%I:%M:%S %p')); ?>
"/>

								<div class="form-group">
							   
							   <div id="errsiteName">
							        <label class="col-sm-2 control-label" style="text-align:left;">Site Name:</label>
									<div class="col-md-4">
							 <input type="text" id="site_name" name="site_name" class="form-control" value="<?php echo $this->_supers['post']['site_name']; ?>
" autocomplete="off" data-toggle="modal" data-target="#myModal" placeholder="Search" readonly="true">

									<!--<select id="siteName"  name="siteName" class="form-control"  autocomplete="Off">
						       		 <option value="select" selected="selected">-select- </option>
									<?php $_from = $this->_tpl_vars['SiteList2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['List2Site']):
?>	
							    	<option value="<?php echo $this->_tpl_vars['ListGrp']['site_name']; ?>
"><?php echo $this->_tpl_vars['List2Site']['site_name']; ?>
 </option>
							    	<?php endforeach; endif; unset($_from); ?>
									</select>-->				
							   </div>
							   <div id="errsiteId">
							        <label class="col-sm-2 control-label" style="text-align:left;">Site Id:</label>
									<div class="col-md-4"><input type="text" id="site_id" name="site_id" class="form-control" value="<?php echo $this->_supers['post']['site_id']; ?>
" readonly="true" autocomplete="off">
							   </div>
							   </div>
							   </div>
							   
							   </div>
								 <div class="form-group">
								 <div id="errcusName"> 
									    <label class="col-sm-2 control-label" style="text-align:left;">Customer Name:</label>
									    <div class="col-md-4"><input type="text" id="customer_name"  name="customer_name" class="form-control"  onkeyup="textFilter(this)" value="<?php echo $this->_supers['post']['customer_name']; ?>
" readonly="true" autocomplete="off">
									    </div>
									    </div>
							 <div id="errCusId">
										<label class="col-sm-2 control-label "style="text-align:left;">Customer Id:</label>
										<div class="col-md-4"><input type="search"  id="customer_id"  name="customer_id" class="form-control" value="<?php echo $this->_supers['post']['customer_id']; ?>
"readonly="true" autocomplete="off" >
										</div>
										</div>	
							  			  
							   </div>
							    
							   <hr />
							  
							   
							   
							   <div class="form-group">
							   
						  <label class="col-sm-2 control-label" style="text-align:left;">Turbine ID:</label>
                               <div class="col-md-4"  id="errturbineId"><input type="text"  id="turbineId"  name="turbineId"class="form-control" readonly="true" value="<?php echo $this->_tpl_vars['t_id']; ?>
">  </div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">Turbine Type:</label>
							   <div class="col-md-4" id="errturbineType">
							   <select class="form-control" id="turbineType" name="turbineType"  value="<?php echo $this->_tpl_vars['turbineType']; ?>
" >
  											  <option value="Select" >Select</option>
											  <option id="Tubular" name="Tubular" value="Tubular" >Tubular</option>
											  <option id="Lattice" name="Lattice" value="Lattice" >Lattice</option>
											</select></div>
							   
							   </div>	
							   
                              <div class="form-group">
							    <label class="col-sm-2 control-label" style="text-align:left;">Turbine Name:</label>
                               <div class="col-md-4" id="errturbineName"><input type="text" id="turbineName"  name="turbineName" class="form-control" value="<?php echo $this->_tpl_vars['turbineName']; ?>
" >
							   
							   </div>
							
										<label class="col-sm-2 control-label" style="text-align:left;">Turbine HTSC No:</label>
										<div class="col-md-4" id="errturbineHTSCNO"><input type="text"  required  id="turbineHTSCNO"  name="turbineHTSCNO"class="form-control" value="<?php echo $this->_tpl_vars['turbineHTSCNO']; ?>
" >
									
										</div>
							   </div>	
                            <div class="form-group">
							  
							  <label class="col-sm-2 control-label" style="text-align:left;">Location No:</label>
                               <div class="col-md-4" id="errlocationNo"><input type="text" id="locationNo"  name="locationNo"class="form-control" value="<?php echo $this->_tpl_vars['locationNo']; ?>
" >
							   
							   </div>
							  
								<label class="col-sm-2 control-label" style="text-align:left; ">Group Name:</label>
								<div class="col-md-4" id="errgroupName"><input type="text"  id="groupName"  name="groupName"class="form-control" value="<?php echo $this->_tpl_vars['groupName']; ?>
" >
								
								</div>
							   							    
							   </div>	
                              <div class="form-group">
							
							  <label class="col-sm-2 control-label" style="text-align:left;">Survey No:</label>
                               <div class="col-md-4" id="errsurveyNo"><input type="text" id="surveyNo"  name="surveyNo" class="form-control" value="<?php echo $this->_tpl_vars['surveyNo']; ?>
" >
							   
							   </div>
							 
								<label class="col-sm-2 control-label" style="text-align:left; ">Village Name:</label>
								<div class="col-md-4" id="errvillageName"><input type="text"  id="villageName"  name="villageName"class="form-control" value="<?php echo $this->_tpl_vars['villageName']; ?>
" >
							
								</div>
							   							    
							   </div>							   						   						   
                              <div class="form-group">
							
							  <label class="col-sm-2 control-label" style="text-align:left;">Feeder Connection:</label>
                               <div class="col-md-4"  id="errfeederConnection"><input type="text" id="feederConnection"  name="feederConnection"class="form-control" value="<?php echo $this->_tpl_vars['feederConnection']; ?>
">
							   </div>
							   
								<label class="col-sm-2 control-label" style="text-align:left; ">Capacity:</label>
								<div class="col-md-4"  id="errcapacity"><input type="text"  id="capacity"  name="capacity"class="form-control" value="<?php echo $this->_tpl_vars['capacity']; ?>
" >
								
								</div>
							   							    
							   </div>	
                              <div class="form-group">
							  
							  <label class="col-sm-2 control-label" style="text-align:left;">MF:</label>
                               <div class="col-md-4"  id="errmf"><input type="text" id="mf"  name="mf" class="form-control" value="<?php echo $this->_tpl_vars['mf']; ?>
" >
							  
							   </div>
							   
								<label class="col-sm-2 control-label" style="text-align:left; ">Make:</label>
								<div class="col-md-4" id="errmake">
							   <select class="form-control" id="make" name="make"  value="<?php echo $this->_tpl_vars['make']; ?>
" >
  											  <option value="Select" >Select</option>
											  <option id="gamesa" name="gamesa" value="Gamesa" >Gamesa</option>
											  <option id="vestas" name="vestas" value="Vestas" >Vestas</option>
											  <option id="nepc" name="nepc" value="Nepc" >Nepc</option>
											  <option id="pioneer" name="pioneer" value="Pioneer" >Pioneer</option>
											  <option id="ttg" name="ttg" value="TTG" >TTG</option>
											  <option id="micon" name="micon" value="Micon" >Micon</option>
											  <option id="cwet" name="cwet" value="CWET" >CWET</option>
											  <option id="negmicon" name="negmicon" value="NEG Micon" >NEG Micon</option>
											  <option id="ge" name="ge" value="GE" >GE</option>
											  <option id="enercon" name="enercon" value="ENERCON" >ENERCON</option>
											</select></div>
							   							    
							   </div>		
                              <div class="form-group">
							
							  <label class="col-sm-2 control-label" style="text-align:left;">Sub-Station No:</label>
                               <div class="col-md-4"  id="errsubStationNo"><input type="text" id="subStationNo"  name="subStationNo"class="form-control" value="<?php echo $this->_tpl_vars['subStationNo']; ?>
" >
							  
							   </div>
							  
								<label class="col-sm-2 control-label" style="text-align:left; ">Comission Date:</label>
								<div class="col-md-4" id="errCategory"><input type="text"  id="comissionDate"  name="comissionDate"class="form-control" readonly="true" value="<?php echo $this->_tpl_vars['comissionDate']; ?>
" >
								
								</div>
							   							    
							   </div>	
							   <div class="form-group">
							
							  <label class="col-sm-2 control-label" style="text-align:left;">Additional Info:</label>
                               <div class="col-md-4"  id="erradditionalInfo"><input type="text" id="additionalInfo"  name="additionalInfo"class="form-control" value="<?php echo $this->_tpl_vars['additionalInfo']; ?>
" >
							  
							   </div>
							  
								<label class="col-sm-2 control-label" style="text-align:left; ">Latitude:</label>
								<div class="col-md-4" id="errlatitude"><input type="text"  id="latitude"  name="latitude"class="form-control" value="<?php echo $this->_tpl_vars['latitude']; ?>
" >
								
								</div>
							   							    
							   </div>
							   <div class="form-group">
							
							  <label class="col-sm-2 control-label" style="text-align:left;">Longitude:</label>
                               <div class="col-md-4"  id="errlongitude"><input type="text" id="longitude"  name="longitude"class="form-control" value="<?php echo $this->_tpl_vars['longitude']; ?>
" >
							  
							   </div>
							  
								<label class="col-sm-2 control-label" style="text-align:left; ">Height:</label>
								<div class="col-md-4" id="errheight"><input type="text"  id="height"  name="height"class="form-control" value="<?php echo $this->_tpl_vars['height']; ?>
" >
								
								</div>
							   							    
							   </div>
							   <div class="form-group">
							
							  <label class="col-sm-2 control-label" style="text-align:left;">Meter No:</label>
                               <div class="col-md-4"  id="errmeterNo"><input type="text" id="meterNo"  name="meterNo"class="form-control" value="<?php echo $this->_tpl_vars['meterNo']; ?>
" >
							  
							   </div>
							  
								<label class="col-sm-2 control-label" style="text-align:left; ">Meter Make:</label>
								<div class="col-md-4" id="errmeterMake"><input type="text"  id="meterMake"  name="meterMake"class="form-control" value="<?php echo $this->_tpl_vars['meterMake']; ?>
" >
								
								</div>
							   							    
							   </div>
							   
							   <div class="form-group">
							
							  <label class="col-sm-2 control-label" style="text-align:left;">Contact Person:</label>
                               <div class="col-md-4"  id="errcontactPerson"><input type="text" id="contactPerson"  name="contactPerson"class="form-control" value="<?php echo $this->_tpl_vars['contactPerson']; ?>
" >
							  
							   </div>
							  
								<label class="col-sm-2 control-label" style="text-align:left; ">Region:</label>
								<div class="col-md-4" id="errregion"><input type="text"  id="region"  name="region"class="form-control" value="<?php echo $this->_tpl_vars['region']; ?>
" >
								
								</div>
							   							    
							   </div>
							  	<br />
							   <div align="center">
                                         
                                        <button class="btn btn-primary" type="button" id="addTurbine">ADD TURBINE</button>
										<button class="btn btn-white" type="submit" id="back">CANCEL</button>
                                      </div>
                                    </form>
									<div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content animated bounceInRight">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <!--<i class="fa fa-laptop modal-icon"></i>-->
                                            <h4 class="modal-title">Site Details</h4>
                                          
                                        </div>
                                        <div class="modal-body">
                                            <!-- SEARCH FORM START -->
<div id="std">            
<!-- SEARCH FORM END -->
<?php echo '
<script type="text/javascript">
function closeit(val,val1,val2,val3){
    parent.document.forms[\'turbineReg\'].elements[\'site_name\'].value=val;
	parent.document.forms[\'turbineReg\'].elements[\'site_id\'].value=val1;
	parent.document.forms[\'turbineReg\'].elements[\'customer_name\'].value=val2;
	parent.document.forms[\'turbineReg\'].elements[\'customer_id\'].value=val3;
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
'; ?>


 <table width="100%" border="1PX solid black" class="table table-bordered"  cellspacing=1 cellpadding=2>
    <form name="TurbineMgmt" method="post" >
    <!--<input type="hidden" name="a" value="search" >-->
					<tr>
				    <td colspan="2" align="right"><?php echo $this->_tpl_vars['LinkPage']; ?>
<?php echo $this->_tpl_vars['PerPageNavigation']; ?>
</td>
				    </tr>
    <tr><td>
       <table width="100%" border="1PX solid black" cellspacing=0 cellpadding=1 class="table table-bordered"  id="table" >
        <tr>
	        <th width="30" align="center">&nbsp;&nbsp;S No.</th>
			<th width="70" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Site Name</th>
			<th width="30" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Site Id</th>
	        <th width="100" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Customer Name</th>
			<th width="30" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Customer Id</th>
	       
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
');"><?php echo $this->_tpl_vars['i']++; ?>
</a></td>
    <td align="left"><a  href="#." onClick="closeit('<?php echo $this->_tpl_vars['ListCus']['site_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['site_id']; ?>
','<?php echo $this->_tpl_vars['ListCus']['customer_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['customer_id']; ?>
');"><?php echo $this->_tpl_vars['ListCus']['site_name']; ?>
</a></td>
				<td align="left"><a  href="#." onClick="closeit('<?php echo $this->_tpl_vars['ListCus']['site_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['site_id']; ?>
','<?php echo $this->_tpl_vars['ListCus']['customer_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['customer_id']; ?>
');"><?php echo $this->_tpl_vars['ListCus']['site_id']; ?>
</a></td>
			   <td align="left"><a  href="#." onClick="closeit('<?php echo $this->_tpl_vars['ListCus']['site_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['site_id']; ?>
','<?php echo $this->_tpl_vars['ListCus']['customer_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['customer_id']; ?>
');"><?php echo $this->_tpl_vars['ListCus']['customer_name']; ?>
</a></td>
				<td align="left"><a  href="#." onClick="closeit('<?php echo $this->_tpl_vars['ListCus']['site_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['site_id']; ?>
','<?php echo $this->_tpl_vars['ListCus']['customer_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['customer_id']; ?>
');"><?php echo $this->_tpl_vars['ListCus']['customer_id']; ?>
</a></td>
			
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

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </body>
						</div>
                    </div>
                </div>
            </div>
        </div>
						
			</div>					  <!--<div class="form-group">
							      <div id="errsiteName">
							        <label class="col-sm-2 control-label" style="text-align:left;">Site Name:</label>
									<div class="col-md-4"><select id="siteName"  name="siteName" class="form-control"  autocomplete="Off">
						        <option value="select" selected="selected">-select- </option>
								<?php $_from = $this->_tpl_vars['SiteList2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['List2Site']):
?>	
							    <option value="<?php echo $this->_tpl_vars['ListGrp']['site_name']; ?>
"><?php echo $this->_tpl_vars['List2Site']['site_name']; ?>
 </option>
							    <?php endforeach; endif; unset($_from); ?>
								</select>				
							   </div>
							    </div>
								
							  <?php $_from = $this->_tpl_vars['SiteList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListSite']):
?>
							    <div id="errsiteId">
							        <label class="col-sm-2 control-label" style="text-align:left;">Site Id:</label>
									<div class="col-md-4"><input type="text" id="siteId" name="siteId" class="form-control" value="" autocomplete="Off" >
							   </div>
							   </div>
							     </div>
								<div class="form-group">
							 		 <div id="errcusName">
										 <label class="col-sm-2 control-label" style="text-align:left;">Customer Name:</label>
									    <div class="col-md-4"><input type="text" id="customerName"  name="customerName" class="form-control"  onkeyup="textFilter(this)" value="" autocomplete="Off">
										</div>
										</div>
										 <div id="errCusId"> 
									   <label class="col-sm-2 control-label "style="text-align:left;">Customer Id:</label>
										<div class="col-md-4"><input type="search"  id="customerId"  name="customerId" class="form-control" value="" autocomplete="Off" >
									    </div>
									    </div>			  
							  			</div>	
							     <?php endforeach; endif; unset($_from); ?>
							 
							 
							   <hr />
							   
							   
							   
							   <div class="form-group">
							   
						  <label class="col-sm-2 control-label" style="text-align:left;">Turbine ID:</label>
                               <div class="col-md-4"  id="errturbineId"><input type="text"  id="turbineId"  name="turbineId"class="form-control" readonly="true" value="<?php echo $this->_tpl_vars['t_id']; ?>
" autocomplete="Off"></div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">Turbine Type:</label>
							   <div class="col-md-4" id="errturbineType">
							   <select class="form-control" id="turbineType" name="turbineType"  value="<?php echo $this->_tpl_vars['turbineType']; ?>
" autocomplete="Off">
  											  <option value="Select" >Select</option>
											  <option id="Tubular" name="Tubular" value="Tubular" >Tubular</option>
											  <option id="Lattice" name="Lattice" value="Lattice" >Lattice</option>
											</select></div>
							   
							   </div>	
							   
                              <div class="form-group">
							    <label class="col-sm-2 control-label" style="text-align:left;">Turbine Name:</label>
                               <div class="col-md-4" id="errturbineName"><input type="text" id="turbineName"  name="turbineName" class="form-control" value="<?php echo $this->_tpl_vars['turbineName']; ?>
" autocomplete="Off"></div>
							   		<label class="col-sm-2 control-label" style="text-align:left;">Turbine HTSC No:</label>
										<div class="col-md-4" id="errturbineHTSCNO"><input type="text"  required  id="turbineHTSCNO"  name="turbineHTSCNO"class="form-control" value="<?php echo $this->_tpl_vars['turbineHTSCNO']; ?>
" autocomplete="Off">
									
										</div>
							   </div>	
                            <div class="form-group">
							  
							  <label class="col-sm-2 control-label" style="text-align:left;">Location No:</label>
                               <div class="col-md-4" id="errlocationNo"><input type="text" id="locationNo"  name="locationNo"class="form-control" value="<?php echo $this->_tpl_vars['locationNo']; ?>
" autocomplete="Off">
							   
							   </div>
							  
								<label class="col-sm-2 control-label" style="text-align:left; ">Group Name:</label>
								<div class="col-md-4" id="errgroupName"><input type="text"  id="groupName"  name="groupName"class="form-control" value="<?php echo $this->_tpl_vars['groupName']; ?>
" autocomplete="Off">
								
								</div>
							   							    
							   </div>	
                              <div class="form-group">
							
							  <label class="col-sm-2 control-label" style="text-align:left;">Survey No:</label>
                               <div class="col-md-4" id="errsurveyNo"><input type="text" id="surveyNo"  name="surveyNo" class="form-control" value="<?php echo $this->_tpl_vars['surveyNo']; ?>
" autocomplete="Off">
							   
							   </div>
							 
								<label class="col-sm-2 control-label" style="text-align:left; ">Village Name:</label>
								<div class="col-md-4" id="errvillageName"><input type="text"  id="villageName"  name="villageName"class="form-control" value="<?php echo $this->_tpl_vars['villageName']; ?>
" >
							
								</div>
							   							    
							   </div>							   						   						   
                              <div class="form-group">
							
							  <label class="col-sm-2 control-label" style="text-align:left;">Feeder Connection:</label>
                               <div class="col-md-4"  id="errfeederConnection"><input type="text" id="feederConnection"  name="feederConnection"class="form-control" value="<?php echo $this->_tpl_vars['feederConnection']; ?>
" autocomplete="Off">
							   
							   </div>
							   
								<label class="col-sm-2 control-label" style="text-align:left; ">Capacity:</label>
								<div class="col-md-4"  id="errcapacity"><input type="text"  id="capacity"  name="capacity"class="form-control" value="<?php echo $this->_tpl_vars['capacity']; ?>
" autocomplete="Off">
								
								</div>
							   							    
							   </div>	
                              <div class="form-group">
							  
							  <label class="col-sm-2 control-label" style="text-align:left;">MF:</label>
                               <div class="col-md-4"  id="errmf"><input type="text" id="mf"  name="mf"class="form-control" value="<?php echo $this->_tpl_vars['mf']; ?>
" autocomplete="Off">
							  
							   </div>
							   
								<label class="col-sm-2 control-label" style="text-align:left; ">Make:</label>
								<div class="col-md-4" id="errmake"><input type="text"  id="make"  name="make"class="form-control" value="<?php echo $this->_tpl_vars['make']; ?>
" autocomplete="Off">
								
								</div>
							   							    
							   </div>		
                              <div class="form-group">
							
							  <label class="col-sm-2 control-label" style="text-align:left;">Sub-Station No:</label>
                               <div class="col-md-4"  id="errsubStationNo"><input type="text" id="subStationNo"  name="subStationNo"class="form-control" value="<?php echo $this->_tpl_vars['subStationNo']; ?>
"autocomplete="Off">
							  
							   </div>
							  
								<label class="col-sm-2 control-label" style="text-align:left; ">Comission Date:</label>
								<div class="col-md-4" id="errCategory"><input type="text"  id="comissionDate"  name="comissionDate"class="form-control" value="<?php echo $this->_tpl_vars['comissionDate']; ?>
"autocomplete="Off" >
								
								</div>
							   							    
							   </div>	
							   <div class="form-group">
							
							  <label class="col-sm-2 control-label" style="text-align:left;">Additional Info:</label>
                               <div class="col-md-4"  id="erradditionalInfo"><input type="text" id="additionalInfo"  name="additionalInfo"class="form-control" value="<?php echo $this->_tpl_vars['additionalInfo']; ?>
" autocomplete="Off">
							  
							   </div>
							  
								<label class="col-sm-2 control-label" style="text-align:left; ">Latitude:</label>
								<div class="col-md-4" id="errlatitude"><input type="text"  id="latitude"  name="latitude"class="form-control" value="<?php echo $this->_tpl_vars['latitude']; ?>
" autocomplete="Off">
								
								</div>
							   							    
							   </div>
							   <div class="form-group">
							
							  <label class="col-sm-2 control-label" style="text-align:left;">Longitude:</label>
                               <div class="col-md-4"  id="errlongitude"><input type="text" id="longitude"  name="longitude"class="form-control" value="<?php echo $this->_tpl_vars['longitude']; ?>
" autocomplete="Off">
							  
							   </div>
							  
								<label class="col-sm-2 control-label" style="text-align:left; ">Height:</label>
								<div class="col-md-4" id="errheight"><input type="text"  id="height"  name="height"class="form-control" value="<?php echo $this->_tpl_vars['height']; ?>
" autocomplete="Off">
								
								</div>
							   							    
							   </div>
							   <div class="form-group">
							
							  <label class="col-sm-2 control-label" style="text-align:left;">Meter No:</label>
                               <div class="col-md-4"  id="errmeterNo"><input type="text" id="meterNo"  name="meterNo"class="form-control" value="<?php echo $this->_tpl_vars['meterNo']; ?>
" autocomplete="Off">
							  
							   </div>
							  
								<label class="col-sm-2 control-label" style="text-align:left; ">Meter Make:</label>
								<div class="col-md-4" id="errmeterMake"><input type="text"  id="meterMake"  name="meterMake"class="form-control" value="<?php echo $this->_tpl_vars['meterMake']; ?>
" autocomplete="Off">
								
								</div>
							   							    
							   </div>
							   
							   <div class="form-group">
							
							  <label class="col-sm-2 control-label" style="text-align:left;">Contact Person:</label>
                               <div class="col-md-4"  id="errcontactPerson"><input type="text" id="contactPerson"  name="contactPerson"class="form-control" value="<?php echo $this->_tpl_vars['contactPerson']; ?>
" autocomplete="Off">
							  
							   </div>
							  
								<label class="col-sm-2 control-label" style="text-align:left; ">Region:</label>
								<div class="col-md-4" id="errregion"><input type="text"  id="region"  name="region"class="form-control" value="<?php echo $this->_tpl_vars['region']; ?>
" autocomplete="Off">
								
								</div>
							   							    
							   </div>
							  	<br />
							   <div align="center">
                                         
                                        <button class="btn btn-primary" type="button" id="addTurbine" autocomplete="Off">ADD TURBINE</button>
										<button class="btn btn-white" type="submit" id="back" autocomplete="Off">CANCEL</button>
                                      </div>
                                    </form>
                        </div></div>
                    </div>
                </div>
            </div>
        </div>
		</div>-->
		<?php echo '<script>
		 function getval()
        {
		var comissionDate;
		comissionDate=document.getElementById("comissionDate").value;
		
		if(comissionDate=="" )
		{
			alert("Please Specify Date");
			return false;
		}
		
        }	
	var myCalendar;
function doOnLoad() {
    
    var comissionDate;
	comissionDate=new Date();
    myCalendar = new dhtmlXCalendarObject(["comissionDate"]);
	
   
}	</script>
<script>
        $(document).ready(function() {		
$("#addTurbine").click(function(){
				var fields=["turbineId","turbineType","site_id","site_name","customer_name","customer_id","turbineName","turbineHTSCNO","locationNo","groupName","surveyNo","villageName","feederConnection","capacity","mf","make","subStationNo","comissionDate","additionalInfo","latitude","longitude","height","meterNo","meterMake","contactPerson","region"];
				for(i=0;i<fields.length;i++)
				{
				
				current_iteration = document.getElementById(fields[i]).value;
			//alert(fields[i]);
				document.getElementById(fields[i]).style.borderColor="";
						if(current_iteration=="")
						{			
						document.getElementById(fields[i]).focus();
						document.getElementById(fields[i]).style.borderColor="red";									
									return false;
						}	

				}				
              FormName= document.turbineReg;
  			  FormName.method= "POST";
              FormName.submit(); 
			                 });
										  
/*$("#mobileNo").keyUp(function(){
numericFilter();
}*/$("#back").click(function(){

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
		w1.attachURL("./turbine_reg_window.php");
break;
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
	
	   /* $(\'.datepicker\').datepicker({
                todayBtn: "linked",
				format:\'yyyy-mm-dd\',
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });*/	 
</script>
<script type="text/javascript" src="dhtmlxMessage/codebase/dhtmlxcalendar.js" ></script>
<script type="text/javascript" src="./codebase/dhtmlxcalendar.js"></script>
<script type="text/javascript" src="./codebase/dhtmlxcommon.js"></script>
<script src="jquery/jquery.ui.datepicker.js"></script>
<link rel="stylesheet" type="text/css" href="css/datepickier_main.css">
	 	    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
	  		<link rel="stylesheet" href="./codebase/dhtmlxcalendar.css" type="text/css">
			<link rel="stylesheet" href="./codebase/dhtmlxcalendar_dhx_skyblue.css" type="text/css"> 
			<link rel="stylesheet" href="./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css">
			<link rel="stylesheet" type="text/css" href="css/datepicker.css">
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
	<!--<script type=\'text/javascript\' src=\'./auto-complete/jquery-1.3.2.js\'></script>-->
	<script type=\'text/javascript\' src=\'./auto-complete/jquery.metadata.js\'></script>
	<script type=\'text/javascript\' src=\'./auto-complete/jquery.auto-complete.js?<?= mktime() ?>\'></script>
	<script type=\'text/javascript\' src=\'./auto-complete/js.js?<?= mktime() ?>\'></script>
	<link rel=\'stylesheet\' type=\'text/css\' href=\'auto-complete/jquery.auto-complete.css?<?= mktime() ?>\' />
'; ?>