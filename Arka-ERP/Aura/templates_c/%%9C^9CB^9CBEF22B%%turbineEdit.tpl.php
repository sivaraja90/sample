<?php /* Smarty version 2.6.25, created on 2016-12-25 17:45:26
         compiled from turbineEdit.tpl */ ?>

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
            <div class="row">
                
                
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                          <h5 style="padding-left:40%;">Edit Turbine Details</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                               
                            </div>
                        </div>
                        <div class="ibox-content"><body onLoad="doOnLoad();">
                             <form method="post" class="form-horizontal" name="turbineUpdate">
                               <input type="hidden"  id="hdAction"  name="hdAction" />
							    <?php $_from = $this->_tpl_vars['PageList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDet']):
?>
							  <div class="form-group">
							  <div id="errsiteName">
							        <label class="col-sm-2 control-label" style="text-align:left;">Site Name:</label>
									<div class="col-md-4"><input type="text" id="site_name" name="site_name" class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['site_name']; ?>
" readonly="true" autocomplete="Off">
							   </div>
							   </div>
							   <div id="errsiteId">
							        <label class="col-sm-2 control-label" style="text-align:left;">Site Id:</label>
									<div class="col-md-4"><input type="text" id="site_id" name="site_id" class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['site_id']; ?>
" readonly="true"  autocomplete="Off">
							   </div>
							   </div>
							   
							   
							   </div>
							     <div class="form-group">
							<div id="errcusName"> 
									    <label class="col-sm-2 control-label" style="text-align:left;">Customer Name:</label>
									    <div class="col-md-4"><input type="text" id="customer_name"  name="customer_name" class="form-control"  onkeyup="textFilter(this)" value="<?php echo $this->_tpl_vars['ListDet']['customer_name']; ?>
" readonly="true"  autocomplete="Off">
									    </div>
									    </div>
							 <div id="errCusId">
										<label class="col-sm-2 control-label "style="text-align:left;">Customer Id:</label>
										<div class="col-md-4"><input type="text"  id="customer_id"  name="customer_id" class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['customer_id']; ?>
  " readonly="true" autocomplete="Off">
										</div>
										</div>	
							  			  
							   </div>
							      
							   
							 
							   <hr />
							   
							   
							   
							   <div class="form-group">
							   
						  <label class="col-sm-2 control-label" style="text-align:left;">Turbine ID:</label>
                               <div class="col-md-4"  id="errturbineId"><input type="text"  id="turbineId"  name="turbineId"class="form-control" readonly="true" value="<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
" autocomplete="Off"></div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">Turbine Type:</label>
							   <div class="col-md-4" id="errturbineType">
							   <select class="form-control" id="turbineType" name="turbineType" autocomplete="Off">
							   	<?php if ($this->_tpl_vars['ListDet']['turbine_type'] == 'Tubular'): ?>
								   <option value="<?php echo $this->_tpl_vars['ListDet']['turbine_type']; ?>
" selected="selected"><?php echo $this->_tpl_vars['ListDet']['turbine_type']; ?>
</option>
								   <option value="Lattice">Lattice</option>
								<?php elseif ($this->_tpl_vars['ListDet']['turbine_type'] == 'Lattice'): ?>
								  <option value="<?php echo $this->_tpl_vars['ListDet']['turbine_type']; ?>
" selected="selected"><?php echo $this->_tpl_vars['ListDet']['turbine_type']; ?>
</option>
							      <option value="Tubular" >Tubular</option>  
								<?php endif; ?>
								</select>
							   </div>
							   
							   </div>	
							   
                              <div class="form-group">
							    <label class="col-sm-2 control-label" style="text-align:left;">Turbine Name:</label>
                               <div class="col-md-4" id="errturbineName"><input type="text" id="turbineName"  name="turbineName" class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['turbine_name']; ?>
" autocomplete="Off" >
							   
							   </div>
							
										<label class="col-sm-2 control-label" style="text-align:left;">Turbine HTSC No:</label>
										<div class="col-md-4" id="errturbineHTSCNO"><input type="text"  required  id="turbineHTSCNO"  name="turbineHTSCNO"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['turbine_htsc_no']; ?>
" autocomplete="Off">
									
										</div>
							   </div>	
                            <div class="form-group">
							  
							  <label class="col-sm-2 control-label" style="text-align:left;">Location No:</label>
                               <div class="col-md-4" id="errlocationNo"><input type="text" id="locationNo"  name="locationNo"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['location_no']; ?>
" autocomplete="Off">
							   
							   </div>
							  
								<label class="col-sm-2 control-label" style="text-align:left; ">Group Name:</label>
								<div class="col-md-4" id="errgroupName"><input type="text"  id="groupName"  name="groupName"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['group_name']; ?>
" autocomplete="Off">
								
								</div>
							   							    
							   </div>	
                              <div class="form-group">
							
							  <label class="col-sm-2 control-label" style="text-align:left;">Survey No:</label>
                               <div class="col-md-4" id="errsurveyNo"><input type="text" id="surveyNo"  name="surveyNo" class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['survey_no']; ?>
" autocomplete="Off">
							   
							   </div>
							 
								<label class="col-sm-2 control-label" style="text-align:left; ">Village Name:</label>
								<div class="col-md-4" id="errvillageName"><input type="text"  id="villageName"  name="villageName"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['village_name']; ?>
" autocomplete="Off">
							
								</div>
							   							    
							   </div>							   						   						   
                              <div class="form-group">
							
							  <label class="col-sm-2 control-label" style="text-align:left;">Feeder Connection:</label>
                               <div class="col-md-4"  id="errfeederConnection"><input type="text" id="feederConnection"  name="feederConnection"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['feeder_conn']; ?>
" autocomplete="Off">
							   
							   </div>
							   
							   
							   
							 
								<label class="col-sm-2 control-label" style="text-align:left; ">Capacity:</label>
								<div class="col-md-4"  id="errcapacity"><input type="text"  id="capacity"  name="capacity"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['capacity']; ?>
" autocomplete="Off">
								
								</div>
							   							    
							   </div>	
                              <div class="form-group">
							  
							  <label class="col-sm-2 control-label" style="text-align:left;">MF:</label>
                               <div class="col-md-4"  id="errmf"><input type="text" id="mf"  name="mf"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['mf']; ?>
" autocomplete="Off">
							  
							   </div>
							   
								<label class="col-sm-2 control-label" style="text-align:left; ">Make:</label>
								<div class="col-md-4" id="errmake">
							   <select class="form-control" id="make" name="make"  value="<?php echo $this->_tpl_vars['make']; ?>
" >
							   <?php if ($this->_tpl_vars['ListDet']['make'] == 'Gamesa'): ?>
  											  <option value="<?php echo $this->_tpl_vars['ListDet']['make']; ?>
" selected="selected"><?php echo $this->_tpl_vars['ListDet']['make']; ?>
</option>
											  <option id="vestas" name="vestas" value="Vestas" >Vestas</option>
											  <option id="nepc" name="nepc" value="Nepc" >Nepc</option>
											  <option id="pioneer" name="pioneer" value="Pioneer" >Pioneer</option>
											  <option id="ttg" name="ttg" value="TTG" >TTG</option>
											  <option id="micon" name="micon" value="Micon" >Micon</option>
											  <option id="cwet" name="cwet" value="CWET" >CWET</option>
											  <option id="negmicon" name="negmicon" value="NEG Micon" >NEG Micon</option>
											  <option id="ge" name="ge" value="GE" >GE</option>
											  <option id="enercon" name="enercon" value="ENERCON" >ENERCON</option>
								<?php elseif ($this->_tpl_vars['ListDet']['make'] == 'Vestas'): ?>
											  <option value="<?php echo $this->_tpl_vars['ListDet']['make']; ?>
" selected="selected"><?php echo $this->_tpl_vars['ListDet']['make']; ?>
</option>
											  <option id="gamesa" name="gamesa" value="Gamesa" >Gamesa</option>
											  <option id="nepc" name="nepc" value="Nepc" >Nepc</option>
											  <option id="pioneer" name="pioneer" value="Pioneer" >Pioneer</option>
											  <option id="ttg" name="ttg" value="TTG" >TTG</option>
											  <option id="micon" name="micon" value="Micon" >Micon</option>
											  <option id="cwet" name="cwet" value="CWET" >CWET</option>
											  <option id="negmicon" name="negmicon" value="NEG Micon" >NEG Micon</option>
											  <option id="ge" name="ge" value="GE" >GE</option>
											  <option id="enercon" name="enercon" value="ENERCON" >ENERCON</option>
								<?php elseif ($this->_tpl_vars['ListDet']['make'] == 'NEPC'): ?>
											  <option value="<?php echo $this->_tpl_vars['ListDet']['make']; ?>
" selected="selected"><?php echo $this->_tpl_vars['ListDet']['make']; ?>
</option>
											  <option id="gamesa" name="gamesa" value="Gamesa" >Gamesa</option>
											  <option id="vestas" name="vestas" value="Vestas" >Vestas</option>
											  <option id="pioneer" name="pioneer" value="Pioneer" >Pioneer</option>
											  <option id="ttg" name="ttg" value="TTG" >TTG</option>
											  <option id="micon" name="micon" value="Micon" >Micon</option>
											  <option id="cwet" name="cwet" value="CWET" >CWET</option>
											  <option id="negmicon" name="negmicon" value="NEG Micon" >NEG Micon</option>
											  <option id="ge" name="ge" value="GE" >GE</option>
											  <option id="enercon" name="enercon" value="ENERCON" >ENERCON</option>
								<?php elseif ($this->_tpl_vars['ListDet']['make'] == 'Pioneer'): ?>
											  <option value="<?php echo $this->_tpl_vars['ListDet']['make']; ?>
" selected="selected"><?php echo $this->_tpl_vars['ListDet']['make']; ?>
</option>
											  <option id="gamesa" name="gamesa" value="Gamesa" >Gamesa</option>
											  <option id="vestas" name="vestas" value="Vestas" >Vestas</option>
											  <option id="nepc" name="nepc" value="Nepc" >Nepc</option>
											  <option id="ttg" name="ttg" value="TTG" >TTG</option>
											  <option id="micon" name="micon" value="Micon" >Micon</option>
											  <option id="cwet" name="cwet" value="CWET" >CWET</option>
											  <option id="negmicon" name="negmicon" value="NEG Micon" >NEG Micon</option>
											  <option id="ge" name="ge" value="GE" >GE</option>
											  <option id="enercon" name="enercon" value="ENERCON" >ENERCON</option>
								<?php elseif ($this->_tpl_vars['ListDet']['make'] == 'TTG'): ?>
											  <option value="<?php echo $this->_tpl_vars['ListDet']['make']; ?>
" selected="selected"><?php echo $this->_tpl_vars['ListDet']['make']; ?>
</option>
											  <option id="gamesa" name="gamesa" value="Gamesa" >Gamesa</option>
											  <option id="vestas" name="vestas" value="Vestas" >Vestas</option>
											  <option id="nepc" name="nepc" value="Nepc" >Nepc</option>
											  <option id="pioneer" name="pioneer" value="Pioneer" >Pioneer</option>
											  <option id="micon" name="micon" value="Micon" >Micon</option>
											  <option id="cwet" name="cwet" value="CWET" >CWET</option>
											  <option id="negmicon" name="negmicon" value="NEG Micon" >NEG Micon</option>
											  <option id="ge" name="ge" value="GE" >GE</option>
											  <option id="enercon" name="enercon" value="ENERCON" >ENERCON</option>
								<?php elseif ($this->_tpl_vars['ListDet']['make'] == 'Micon'): ?>
											  <option value="<?php echo $this->_tpl_vars['ListDet']['make']; ?>
" selected="selected"><?php echo $this->_tpl_vars['ListDet']['make']; ?>
</option>
											  <option id="gamesa" name="gamesa" value="Gamesa" >Gamesa</option>
											  <option id="vestas" name="vestas" value="Vestas" >Vestas</option>
											  <option id="nepc" name="nepc" value="Nepc" >Nepc</option>
											  <option id="pioneer" name="pioneer" value="Pioneer" >Pioneer</option>
											  <option id="ttg" name="ttg" value="TTG" >TTG</option>
											  <option id="cwet" name="cwet" value="CWET" >CWET</option>
											  <option id="negmicon" name="negmicon" value="NEG Micon" >NEG Micon</option>
											  <option id="ge" name="ge" value="GE" >GE</option>
											  <option id="enercon" name="enercon" value="ENERCON" >ENERCON</option>
								<?php elseif ($this->_tpl_vars['ListDet']['make'] == 'CWET'): ?>
											  <option value="<?php echo $this->_tpl_vars['ListDet']['make']; ?>
" selected="selected"><?php echo $this->_tpl_vars['ListDet']['make']; ?>
</option>
											  <option id="gamesa" name="gamesa" value="Gamesa" >Gamesa</option>
											  <option id="vestas" name="vestas" value="Vestas" >Vestas</option>
											  <option id="nepc" name="nepc" value="Nepc" >Nepc</option>
											  <option id="pioneer" name="pioneer" value="Pioneer" >Pioneer</option>
											  <option id="ttg" name="ttg" value="TTG" >TTG</option>
											  <option id="micon" name="micon" value="Micon" >Micon</option>
											  <option id="negmicon" name="negmicon" value="NEG Micon" >NEG Micon</option>
											  <option id="ge" name="ge" value="GE" >GE</option>
											  <option id="enercon" name="enercon" value="ENERCON" >ENERCON</option>
								<?php elseif ($this->_tpl_vars['ListDet']['make'] == 'NEG Micon'): ?>
											  <option value="<?php echo $this->_tpl_vars['ListDet']['make']; ?>
" selected="selected"><?php echo $this->_tpl_vars['ListDet']['make']; ?>
</option>
											  <option id="gamesa" name="gamesa" value="Gamesa" >Gamesa</option>
											  <option id="vestas" name="vestas" value="Vestas" >Vestas</option>
											  <option id="nepc" name="nepc" value="Nepc" >Nepc</option>
											  <option id="pioneer" name="pioneer" value="Pioneer" >Pioneer</option>
											  <option id="ttg" name="ttg" value="TTG" >TTG</option>
											  <option id="micon" name="micon" value="Micon" >Micon</option>
											  <option id="cwet" name="cwet" value="CWET" >CWET</option>
											  <option id="ge" name="ge" value="GE" >GE</option>
											  <option id="enercon" name="enercon" value="ENERCON" >ENERCON</option>
								<?php elseif ($this->_tpl_vars['ListDet']['make'] == 'GE'): ?>
											  <option value="<?php echo $this->_tpl_vars['ListDet']['make']; ?>
" selected="selected"><?php echo $this->_tpl_vars['ListDet']['make']; ?>
</option>
											  <option id="gamesa" name="gamesa" value="Gamesa" >Gamesa</option>
											  <option id="vestas" name="vestas" value="Vestas" >Vestas</option>
											  <option id="nepc" name="nepc" value="Nepc" >Nepc</option>
											  <option id="pioneer" name="pioneer" value="Pioneer" >Pioneer</option>
											  <option id="ttg" name="ttg" value="TTG" >TTG</option>
											  <option id="micon" name="micon" value="Micon" >Micon</option>
											  <option id="cwet" name="cwet" value="CWET" >CWET</option>
											  <option id="negmicon" name="negmicon" value="NEG Micon" >NEG Micon</option>
											  <option id="enercon" name="enercon" value="ENERCON" >ENERCON</option>
								<?php elseif ($this->_tpl_vars['ListDet']['make'] == 'ENERCON'): ?>
											  <option value="<?php echo $this->_tpl_vars['ListDet']['make']; ?>
" selected="selected"><?php echo $this->_tpl_vars['ListDet']['make']; ?>
</option>
											  <option id="gamesa" name="gamesa" value="Gamesa" >Gamesa</option>
											  <option id="vestas" name="vestas" value="Vestas" >Vestas</option>
											  <option id="nepc" name="nepc" value="Nepc" >Nepc</option>
											  <option id="pioneer" name="pioneer" value="Pioneer" >Pioneer</option>
											  <option id="ttg" name="ttg" value="TTG" >TTG</option>
											  <option id="micon" name="micon" value="Micon" >Micon</option>
											  <option id="cwet" name="cwet" value="CWET" >CWET</option>
											  <option id="negmicon" name="negmicon" value="NEG Micon" >NEG Micon</option>
											  <option id="ge" name="ge" value="GE" >GE</option>
											  
								 <?php endif; ?>
								 </select></div>
								
							   							    
							   </div>	
							   	
							  
							   
							   
                              <div class="form-group">
							
							  <label class="col-sm-2 control-label" style="text-align:left;">Sub-Station No:</label>
                               <div class="col-md-4"  id="errsubStationNo"><input type="text" id="subStationNo"  name="subStationNo"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['substation_no']; ?>
" autocomplete="Off">
							  
							   </div>
							  
								<label class="col-sm-2 control-label" style="text-align:left; ">Comission Date:</label>
								<div class="col-md-4" id="errCategory"><input type="text"  id="comissionDate"  name="comissionDate"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['commission_date']; ?>
" autocomplete="Off">
								
								</div>
							   							    
							   </div>	
							   <div class="form-group">
							
							  <label class="col-sm-2 control-label" style="text-align:left;">Additional Info:</label>
                               <div class="col-md-4"  id="erradditionalInfo"><input type="text" id="additionalInfo"  name="additionalInfo"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['additional_info']; ?>
" autocomplete="Off">
							  
							   </div>
							  
								<label class="col-sm-2 control-label" style="text-align:left; ">Latitude:</label>
								<div class="col-md-4" id="errlatitude"><input type="text"  id="latitude"  name="latitude"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['lattitude']; ?>
" autocomplete="Off">
								
								</div>
							   							    
							   </div>
							   <div class="form-group">
							
							  <label class="col-sm-2 control-label" style="text-align:left;">Longitude:</label>
                               <div class="col-md-4"  id="errlongitude"><input type="text" id="longitude"  name="longitude"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['longitude']; ?>
" autocomplete="Off">
							  
							   </div>
							  
								<label class="col-sm-2 control-label" style="text-align:left; ">Height:</label>
								<div class="col-md-4" id="errheight"><input type="text"  id="height"  name="height"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['height']; ?>
" autocomplete="Off">
								
								</div>
							   							    
							   </div>
							   <div class="form-group">
							
							  <label class="col-sm-2 control-label" style="text-align:left;">Meter No:</label>
                               <div class="col-md-4"  id="errmeterNo"><input type="text" id="meterNo"  name="meterNo"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['meter_no']; ?>
" autocomplete="Off">
							  
							   </div>
							  
								<label class="col-sm-2 control-label" style="text-align:left; ">Meter Make:</label>
								<div class="col-md-4" id="errmeterMake"><input type="text"  id="meterMake"  name="meterMake"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['meter_make']; ?>
" autocomplete="Off">
								
								</div>
							   							    
							   </div>
							   
							   <div class="form-group">
							
							  <label class="col-sm-2 control-label" style="text-align:left;">Contact Person:</label>
                               <div class="col-md-4"  id="errcontactPerson"><input type="text" id="contactPerson"  name="contactPerson"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['contact_person']; ?>
" autocomplete="Off">
							  
							   </div>
							  
								<label class="col-sm-2 control-label" style="text-align:left; ">Region:</label>
								<div class="col-md-4" id="errregion"><input type="text"  id="region"  name="region"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['region']; ?>
" autocomplete="Off">
								
								</div>
							   							    
							   </div>
							  	<br /><?php endforeach; endif; unset($_from); ?>
							   <div align="center">
                                         
                                        <button class="btn btn-primary" type="button" id="updateTurbine">Update Turbine</button>
										<button class="btn btn-white" type="submit" id="back">CANCEL</button>
                                      </div>
                                    </form>
                        </body>
						</div>
                    </div>
                </div>
            </div>
        </div> </div>
	<?php echo '
	<link rel="stylesheet" type="text/css" href="css/datepickier_main.css">
	 	    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
	  		<link rel="stylesheet" href="./codebase/dhtmlxcalendar.css" type="text/css">
			<link rel="stylesheet" href="./codebase/dhtmlxcalendar_dhx_skyblue.css" type="text/css"> 
			<link rel="stylesheet" href="./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css">
			<link rel="stylesheet" type="text/css" href="css/datepicker.css">
<script type="text/javascript" src="dhtmlxMessage/codebase/dhtmlxcalendar.js" ></script>
<script type="text/javascript" src="./codebase/dhtmlxcalendar.js"></script>
<script type="text/javascript" src="./codebase/dhtmlxcommon.js"></script>
<script src="jquery/jquery.ui.datepicker.js"></script>
     <script>   
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
   
}	
		$(document).ready(function() {		
$("#updateTurbine").click(function(){
				var fields=["turbineId","turbineType","site_id","site_name","customer_id","customer_name","turbineName","turbineHTSCNO","locationNo","groupName","villageName","feederConnection","capacity","mf","make","subStationNo","comissionDate","additionalInfo","latitude","longitude","height","meterNo","meterMake","contactPerson","region"];
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
              FormName= document.turbineUpdate;
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

		 
function numericFilter(data) 
{
   data.value = data.value.replace(/[^.0-9]/ig,"");
}	
function textFilter(data)
{
   data.value = data.value.replace(/[^ .a-z]/ig,"");
}		 
	
	    /*$(\'.datepicker\').datepicker({
                todayBtn: "linked",
				format:\'yyyy-mm-dd\',
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });	*/ 
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