<?php /* Smarty version 2.6.25, created on 2017-01-02 12:42:58
         compiled from powergenerationReg.tpl */ ?>
 
 
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
			<!--<div class="isa_error">
			<i class="fa fa-times-circle"></i>
			Customer inserted Successfully......
			</div>-->
            <div class="row">
                
                
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                          <h5  style="padding-left:40%;">Panel Registration Form</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>

                            </div>
                        </div>
                        <div class="ibox-content"><body onLoad="doOnLoad();showUser(this.value);">
						<form name="power_generation" id="power_generation" method="post" >
                              <input type="hidden" name="hdAction" />
							   <table width="100%" cellpadding="2" cellspacing="0" border="0" >
	                             <tr>
            <!--<td><label>Select Region:</label></td>
                <td><input type="text" name="region" id="region" readonly="true" value="Thirunelveli"></td>  -->
				
				<td><label>Sites:&nbsp;&nbsp;</label>
			    <select name="site_name" id="site_name" style="height:24px;"  onchange="showGroup(this.value);"  >  
				<option value="0" selected="selected">--- Please Select Site ---</option>
         	<?php $_from = $this->_tpl_vars['SiteList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Listsite']):
?>	
				<option value="<?php echo $this->_tpl_vars['Listsite']['site_name']; ?>
"><?php echo $this->_tpl_vars['Listsite']['site_name']; ?>
 </option>
				 <?php endforeach; endif; unset($_from); ?>
			     </select>&nbsp;&nbsp;<font class="error"><b>*</b>&nbsp;</font></td>
				   <td ><label>HTSC No:&nbsp;&nbsp;</label> 
							  <select name="htsc_no" id="htsc_no" onChange="showMake(this.value);"  style="height:24px;">  
							   <option value=0 selected="selected" >--Select--</option>
							   </select>
			</td>
				<td><label>Make:&nbsp;&nbsp;</label>
				<select  name="make" id="make"  autocomplete="off" style="height:24px;">
<!--  											 <select  name="make" id="make"  autocomplete="off" style="height:24px;width:200px">
-->											  <option value="">-Select-</option>
											 <!-- <option value="GAMESA" >GAMESA</option>-->
											<!--  <option value="VESTAS">VESTAS</option>
											<option value="NEPC">NEPC</option>-->
											 <!--   <option value="PIONEER">PIONEER</option>
											  <option value="TTG" >TTG</option>
											  <option value="MICON">MICON</option>
											  <option value="CWET">CWET</option>
											  <option value="NEG MICON">NEG MICON</option>
											  <option value="GE">GE</option>
											 <option value="ENERCON">ENERCON</option>-->
											  
											</select>
											</td>
				   <td><label>Panel Date:</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="panel_date" name="panel_date" size="25" readonly="true" value="" placeholder="select Panel Date!">&nbsp;&nbsp;<font class="error"   ><b>*</b>&nbsp;</font></td>
				 
                            
                 <!--     <td>HTSC No: </td>
                            <td >
                                <select id="htsc_grouping" name="htsc_no" style="height:18px;" >   
                                <option value=0 selected="selected">----Please Select Sites-----</option>
                                </select> 
                            </td>-->

                         
                     <!--<td><input class="button" type='submit' name="get_details" value='Get Details' /></td>-->
				 
       </tr>
		</table>
		</form>
   
    <br /> 
	
	
	<table style="width: 100%">
              <tr>
                  
                  <td>
                      <?php if ($this->_supers['post']['site_name'] != ""): ?>Site Name :&nbsp;&nbsp;<?php echo $this->_supers['post']['site_name']; ?>
<?php endif; ?>
                  </td>
				   <td>
                      <?php if ($this->_supers['post']['htsc_no'] != ""): ?>HTSC No :&nbsp;&nbsp;<?php echo $this->_supers['post']['htsc_no']; ?>
<?php endif; ?>
                  </td>
                  <td>
                      <?php if ($this->_supers['post']['make'] != ""): ?>Make :&nbsp;&nbsp;<?php echo $this->_supers['post']['make']; ?>
<?php endif; ?>
                  </td>
                  <td>
                      <?php if ($this->_supers['post']['panel_date'] != ""): ?>Panel Date :&nbsp;&nbsp;<?php echo $this->_supers['post']['panel_date']; ?>
<?php endif; ?>
                  </td>	
				 				  			  
              </tr>
          </table>

<br/>
 <?php if ($this->_tpl_vars['PageList'] != ""): ?>
 
 <?php if ($this->_tpl_vars['make'] == 'NEPC'): ?>
 
 <table class="table table-striped table-bordered table-hover dataTables-example">
			<tr>
                      <th><center>Select</center></th>    
	               <th><center>Location No</center></th>  
	           <th><center>G1 KWh</center></th>
              <th><center>G2 KWh</center></th>
			<th><center>Total KWh</center></th>
			<th><center>G1 Hrs</center></th>
			<th><center>G2 Hrs</center></th>
			<th><center>FW Hrs</center></th>
			<th><center>GD Hrs</center></th>
			<th><center>MT Hrs</center></th>
			<th><center>BD Hrs</center></th>
			<!--<th><center>Action</th>-->
            </tr>
  
        <form name="nepc" id="nepc" method="post"  style="display:none">
		<input type="hidden" name="hdAction1" id="hdAction1" />
		<?php $this->assign('tabindex', '1'); ?> 
		<center><h3>NEPC Make</h3></center>
<?php $_from = $this->_tpl_vars['PageList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDet']):
?>			
		<input type="hidden" name="hdn_panel_date[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]" value="<?php echo $this->_tpl_vars['PanelDate']; ?>
" > 
    <input type="hidden" name="hdn_sitename[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]" value="<?php echo $this->_tpl_vars['ListDet']['site_name']; ?>
" > 
	    <input type="hidden" name="hdn_make[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]" value="<?php echo $this->_tpl_vars['ListDet']['make']; ?>
" > 
		<input type="hidden"  name="hdn_htscno[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]" value="<?php echo $this->_tpl_vars['ListDet']['turbine_htsc_no']; ?>
">
		  
			 <tr><input type="hidden" id="total_hrs" name="total_hrs[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]" value="">
<!--		       <td><center><input type="checkbox" id="checkbox[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]" name="select_id[]"  align="middle"></center></td>
-->			       <td><center><input type="checkbox" id="select_id[]" name="select_id[]" value="<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
"  autocomplete="off"></center></td>
			<td><center><?php echo $this->_tpl_vars['ListDet']['location_no']; ?>
<input type="hidden" id="locationNo" name="locationNo[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]"  value="<?php echo $this->_tpl_vars['ListDet']['location_no']; ?>
" size="5" style="width:100%;" readonly="true" autocomplete="off"></center></td>
		<td ><center><input type="text" id="g1_kwh" name="g1_kwh[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]" size="5" style="width:100%;"  tabindex="<?php echo $this->_tpl_vars['i']++; ?>
" onKeyUp="numericFilter(this);addG('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');return tab(this, event);" onBlur="autocheck('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');" autocomplete="off" value=""></center></td>
			
			<td ><center><input type="text" id="g2_kwh" name="g2_kwh[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]" size="5" style="width:100%;" tabindex="<?php echo $this->_tpl_vars['i']++; ?>
" onKeyUp="numericFilter(this);addG('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');return tab(this, event);" onBlur="autocheck('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');" autocomplete="off" value=""></center></td>
			
			<td><center><input type="text" id="total_kwh" name="total_kwh[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]" size="5" style="width:100%;" tabindex="<?php echo $this->_tpl_vars['i']++; ?>
" onKeyUp="numericFilter(this);return tab(this, event);" readonly="true" autocomplete="off" value=""></center></td>
			
			<td><center><input type="text" id="g1_hrs" name="g1_hrs[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]" size="5" style="width:100%;" tabindex="<?php echo $this->_tpl_vars['i']++; ?>
" onKeyUp="numericFilter(this);hourCheck('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');addGHOURS('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');return tab(this, event);" onBlur="autocheck('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');" autocomplete="off" value=""></center></td>
			
			<td><center><input type="text" id="g2_hrs" name="g2_hrs[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]" size="5" style="width:100%;"  tabindex="<?php echo $this->_tpl_vars['i']++; ?>
"onKeyUp="numericFilter(this);hourCheck('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');addGHOURS('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');return tab(this, event);" onBlur="autocheck('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');" autocomplete="off" value=""></center></td>
			
			<td><center><input type="text" id="fw_duration" name="fw_duration[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]" size="5" style="width:100%;" tabindex="<?php echo $this->_tpl_vars['i']++; ?>
" onKeyUp="numericFilter(this);hourCheck('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');addGHOURS('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');return tab(this, event);" onBlur="autocheck('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');" autocomplete="off" value=""></center></td>
			
			<td><center><input type="text" id="gd_duration" name="gd_duration[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]" size="5" style="width:100%;" tabindex="<?php echo $this->_tpl_vars['i']++; ?>
" onKeyUp="numericFilter(this);hourCheck('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');addGHOURS('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');return tab(this, event);" onBlur="autocheck('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');" autocomplete="off" value=""></center></td>
			
			<td><center><input type="text" id="mt_duration" name="mt_duration[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]" size="5" style="width:100%;" tabindex="<?php echo $this->_tpl_vars['i']++; ?>
" onKeyUp="numericFilter(this);hourCheck('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');addGHOURS('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');return tab(this, event);"onBlur="autocheck('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');" autocomplete="off" value=""></center></td>
			
			<td><center><input type="text" id="bd_duration" name="bd_duration[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]" size="5" style="width:100%;" tabindex="<?php echo $this->_tpl_vars['i']++; ?>
" onKeyUp="numericFilter(this);hourCheck1('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');addGHOURS('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');return tab(this, event);" onBlur="autocheck('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');" autocomplete="off" value=""></center></td>
			</tr>
           </form>
		   <!--	<tr>
			<td height="20" colspan="16" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
			</tr> -->
        <?php endforeach; else: ?>
			<tr>
			<td height="20" colspan="16" align="center"><img src="images/warning.gif" border="0">&nbsp;<h4 style="color:#FF0000">Already value Exists on that Date...</h4></td>
			</tr>
		<?php endif; unset($_from); ?>       
            
		   </table>
		  
		   
	   <!-- <table align="center" cellspacing="0" cellpadding="3" width="100%" border=0>
       <tr> <td align="center">
         <div class="tabber">-->
                       
                           <div align="center">
                                        <button class="btn btn-primary" type="submit" id="addPanel" onClick="hourCheck1();">ADD PANEL</button>
										<button class="btn btn-white" type="button" id="back"  onClick="history.go(-1)">CANCEL</button>
                                      </div>
		
                        
                     
					

</form>

<?php endif; ?>

 <?php if ($this->_tpl_vars['make'] == 'Vestas'): ?>
		<table class="table table-striped table-bordered table-hover dataTables-example">
			<tr>
                     <th><center>Select</center></th>    
	               <th><center>Location No</center></th> 
				   <th><center>Yesterday LCS</center></th>
				   <th><center>Today LCS</center></th> 
	           <th><center>G1 KWH</center></th>
              <th><center>Import</center></th>
			<th><center>Total KWH </center></th>
			<th><center>Line Ok</center></th>
			<th><center>Turbine Ok</center></th>
			<th><center>Run</center></th>
			<th><center>Gen 1 Hrs</center></th>
			<th><center>Grid Drop</center></th>
			
			<!--<th><center>Action</th>-->
            </tr>
			<form name="vestas" id="vestas" method="post" style="display:none" >
<input type="hidden" name="hdAction2" id="hdAction2" />
<?php $this->assign('tabindex2', '1'); ?> 
<center> <h3>Vestas Make</h3></center>
<?php $_from = $this->_tpl_vars['PageList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDet']):
?>			
		<input type="hidden" name="hdn_panel_date[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]" value="<?php echo $this->_tpl_vars['PanelDate']; ?>
" > 
    <input type="hidden" name="hdn_sitename[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]" value="<?php echo $this->_tpl_vars['ListDet']['site_name']; ?>
" > 
	    <input type="hidden" name="hdn_make[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]" value="<?php echo $this->_tpl_vars['ListDet']['make']; ?>
" > 
		<input type="hidden" name="hdn_htscno[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]" value="<?php echo $this->_tpl_vars['ListDet']['turbine_htsc_no']; ?>
">

<br/>
			 <tr>
			<td><center><input type="checkbox" id="select_ids[]" name="select_ids[]" value="<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
" autocomplete="off"></center></td>
			
			<td><center><?php echo $this->_tpl_vars['ListDet']['location_no']; ?>
<input type="hidden" id="locationNo2" name="locationNo2[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]" size="5" style="width:100%;" value="<?php echo $this->_tpl_vars['ListDet']['location_no']; ?>
" readonly="true" autocomplete="off"></td> 
			
			<td ><center><input type="text" id="y_lcs" name="y_lcs[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]" size="5" style="width:100%;" tabindex2="<?php echo $this->_tpl_vars['i']++; ?>
" onKeyUp="numericFilter(this);addG4('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');return tab(this, event);" onBlur="autochecks('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');" autocomplete="off" value=""></center></td>
			
			<td ><center><input type="text" id="t_lcs" name="t_lcs[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]" size="5" style="width:100%;" tabindex2="<?php echo $this->_tpl_vars['i']++; ?>
" onKeyUp="numericFilter(this);addG4('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');return tab(this, event);" onBlur="autochecks('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');" autocomplete="off" value=""></center></td>
			
		<td><center><input type="text" id="g1_kwh2" name="g1_kwh2[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]" size="5" style="width:100%;" tabindex2="<?php echo $this->_tpl_vars['i']++; ?>
" onKeyUp="numericFilter(this);addG1('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');return tab(this, event);" onBlur="autochecks('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');" autocomplete="off" readonly="true" value=""></center></td>
			<td><center><input type="text" id="import2" name="import2[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]" size="5" style="width:100%;" tabindex2="<?php echo $this->_tpl_vars['i']++; ?>
" onKeyUp="numericFilter(this);addG1('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');return tab(this, event);" onBlur="autochecks('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');" autocomplete="off" value=""></center></td>
			
			<td><center><input type="text" id="total_kwh2" name="total_kwh2[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]" size="5" style="width:100%;" tabindex="<?php echo $this->_tpl_vars['i']++; ?>
" onKeyUp="numericFilter(this);return tab(this, event);" autocomplete="off" readonly="true" value=""></center></td>
			
		<td><center><input type="text" id="lineOk" name="lineOk[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]" size="5" style="width:100%;" tabindex2="<?php echo $this->_tpl_vars['i']++; ?>
" onKeyUp="numericFilter(this);addG2('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');addG5('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');return tab(this, event);" onBlur="autochecks('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');" autocomplete="off" maxlength="2" value=""></center></td>
			
      <td><center><input type="text" id="turbineOk" name="turbineOk[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]" size="5" style="width:100%;" tabindex2="<?php echo $this->_tpl_vars['i']++; ?>
" onKeyUp=
"numericFilter(this);addG3('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');return tab(this, event);" onBlur="autochecks('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');"autocomplete="off"maxlength="2" value=""></center></td>
	
	<td><center><input type="text" id="run" name="run[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]" size="5" style="width:100%;" tabindex2="<?php echo $this->_tpl_vars['i']++; ?>
" onKeyUp="numericFilter(this);addG3('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');return tab(this, event);" onBlur="autochecks('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');" autocomplete="off" maxlength="2" value=""></center></td>
	<td><center><input type="text" id="gen1" name="gen1[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]" size="5" style="width:100%;" tabindex2="<?php echo $this->_tpl_vars['i']++; ?>
" onKeyUp="numericFilter(this);addG3('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');return tab(this, event);" onBlur="autochecks('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');" autocomplete="off" maxlength="2" value=""></center></td>
			<td><center><input type="text" id="gridDrop" name="gridDrop[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]" size="5" style="width:100%;" tabindex2="<?php echo $this->_tpl_vars['i']++; ?>
" onKeyUp="numericFilter(this);return tab(this, event);" onBlur="autochecks('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');" autocomplete="off" readonly="true" maxlength="2" value=""></center></td>
			
			</tr>
           
		   <!--	<tr>
			<td height="20" colspan="16" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
			</tr> -->
        <?php endforeach; else: ?>
			<tr>
			<td height="20" colspan="16" align="center"><img src="images/warning.gif" border="0">&nbsp;<h4 style="color:#FF0000">Already value Exists on that Date...</h4></td>
			</tr>
<?php endif; unset($_from); ?>
		   </table>
		  
		   
	   <!-- <table align="center" cellspacing="0" cellpadding="3" width="100%" border=0>
       <tr> <td align="center">
         <div class="tabber">-->
                       
                           <div align="center">
                                        <button class="btn btn-primary" type="submit" id="addPanel1">ADD PANEL</button>
										<button class="btn btn-white" type="button" id="back1"  onClick="history.go(-1)">CANCEL</button>
                                      </div>
                        
                     
					
</form>
<?php endif; ?>
<?php endif; ?>
</body>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		</div>
		
		
<?php echo '	
<script type="text/javascript" src="dhtmlxMessage/codebase/dhtmlxcalendar.js" ></script>
<script type="text/javascript" src="./codebase/dhtmlxcalendar.js"></script>
<script type="text/javascript" src="./codebase/dhtmlxcommon.js"></script>
<script src="jquery/jquery.ui.datepicker.js"></script>
 <script> 
function validate_and_submit()
{
    var checked_check_boxes=0;
	var proper_value_row=0;
	var check_boxes=document.getElementsByName("select_id[]").length;
	var check_boxes2=document.getElementsByName("select_id[]");
		for(n=0;n<check_boxes;n++)
		{
			if(check_boxes2[n].checked==true)
			{
			    checked_check_boxes=checked_check_boxes+1;
				//alert(check_boxes2[n].id);
				var g1_kwh,g2_kwh,,g1_hrs,g2_hrs,fw_duration,gd_duration,mt_duration,bd_duration;
				var chk_box_val=check_boxes2[n].value;				
				g1_kwh=document.getElementById("g1_kwh").value;
				g2_kwh=document.getElementById("g2_kwh").value;
				g1_hrs=document.getElementById("g1_hrs").value;
				g2_hrs=document.getElementById("g2_hrs").value;
/*				cum_imp_kwh=document.getElementById("cum_imp_kwh"+"["+chk_box_val+"]").value;
				cum_exp_kwh=document.getElementById("cum_exp_kwh"+"["+chk_box_val+"]").value;*/
				fw_duration=document.getElementById("fw_duration").value;
				gd_duration=document.getElementById("gd_duration").value;
				mt_duration=document.getElementById("mt_duration").value;
				bd_duration=document.getElementById("bd_duration").value;
/*				prct_imp_kvarh=document.getElementById("prct_imp_kvarh"+"["+chk_box_val+"]").value;
				prct_exp_kvarh=document.getElementById("prct_exp_kvarh"+"["+chk_box_val+"]").value;
				cum_imp_kvarh=document.getElementById("cum_imp_kvarh"+"["+chk_box_val+"]").value;
				cum_exp_kvarh=document.getElementById("cum_exp_kvarh"+"["+chk_box_val+"]").value;*/

/*						if(imp_kwh!="" && exp_kwh!="" && prct_imp_kwh!="" && prct_exp_kwh!="" && cum_imp_kwh!="" && cum_exp_kwh!="" && imp_kvarh!="" 
						&& exp_kvarh!="" && prct_imp_kvarh!="" && prct_exp_kvarh!="" && cum_imp_kvarh!="" && cum_exp_kvarh)*/
						if(g1_kwh!="" && g2_kwh!="" && g1_hrs!="" && g2_hrs!="" &&  fw_duration!="" 
						&& gd_duration!="" && mt_duration!=""  && bd_duration!=""   )						
						{
							proper_value_row=proper_value_row+1;
						}
			
			}
		
		}
		
		if(proper_value_row==checked_check_boxes && checked_check_boxes>0)
		{
		//alert("submitting Part");
		document.nepc.submit();
		}
		else
		{
		alert("Please Verify Your Input");
		return false;
		}
function validate_and_submit2()
{
    var checked_check_boxes=0;
	var proper_value_row=0;
	var check_boxes=document.getElementsByName("select_ids[]").length;
	var check_boxes2=document.getElementsByName("select_ids[]");
		for(n=0;n<check_boxes;n++)
		{
			if(check_boxes2[n].checked==true)
			{
			    checked_check_boxes=checked_check_boxes+1;
				//alert(check_boxes2[n].id);
				var y_lcs,t_lcs,,import2,lineOk,turbineOk,run,bd_duration;
				var chk_box_val=check_boxes2[n].value;				
				y_lcs=document.getElementById("y_lcs").value;
				t_lcs=document.getElementById("t_lcs").value;
				import2=document.getElementById("import2").value;
/*				cum_imp_kwh=document.getElementById("cum_imp_kwh"+"["+chk_box_val+"]").value;
				cum_exp_kwh=document.getElementById("cum_exp_kwh"+"["+chk_box_val+"]").value;*/
				lineOk=document.getElementById("lineOk").value;
				turbineOk=document.getElementById("turbineOk").value;
				run
				=document.getElementById("run").value;
				bd_duration=document.getElementById("bd_duration").value;
/*				prct_imp_kvarh=document.getElementById("prct_imp_kvarh"+"["+chk_box_val+"]").value;
				prct_exp_kvarh=document.getElementById("prct_exp_kvarh"+"["+chk_box_val+"]").value;
				cum_imp_kvarh=document.getElementById("cum_imp_kvarh"+"["+chk_box_val+"]").value;
				cum_exp_kvarh=document.getElementById("cum_exp_kvarh"+"["+chk_box_val+"]").value;*/

/*						if(imp_kwh!="" && exp_kwh!="" && prct_imp_kwh!="" && prct_exp_kwh!="" && cum_imp_kwh!="" && cum_exp_kwh!="" && imp_kvarh!="" 
						&& exp_kvarh!="" && prct_imp_kvarh!="" && prct_exp_kvarh!="" && cum_imp_kvarh!="" && cum_exp_kvarh)*/
						if(y_lcs!="" && t_lcs!="" && import2!="" && lineOk!="" &&  turbineOk!="" 
						&& gd_duration!="" && mt_duration!=""  && bd_duration!=""   )						
						{
							proper_value_row=proper_value_row+1;
						}
			
			}
		
		}
		
		if(proper_value_row==checked_check_boxes && checked_check_boxes>0)
		{
		//alert("submitting Part");
		document.vestas.submit();
		}
		else
		{
		alert("Please Verify Your Input");
		return false;
		}
} 
}  </script>
 <script>
 function getval()
        {
		var panel_date;
		panel_date=document.getElementById("panel_date").value;
		if(panel_date=="" )
		{
			alert("Please Specify Date");
			return false;
		}
		
        }	
/*	var myCalendar;
function doOnLoad() {
    
    var panel_date;
	panel_date=new Date();
    myCalendar = new dhtmlXCalendarObject(["panel_date"]);
   

}	*/
</script>
<script type="text/javascript">
function showGroup(str) 
{
    //alert(str);
if (str=="")
  {
  document.getElementById("txtHint").value="";
  return;
  }
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	var x;
	//if(xmlhttp.responseText.indexOf("|$|")!=-1)
        if(xmlhttp.responseText)
	   {
            // alert(xmlhttp.responseText);  
  
	x=xmlhttp.responseText;
	document.getElementById("htsc_no").innerHTML=x;

  //      var name_of_site_index =  document.getElementById("site_name").selectedIndex;
   //     var  name_of_site=   document.getElementById("site_name").options;
     //   showGroup(name_of_site[name_of_site_index].text);
	   }
	 else 
	   {
	   document.getElementById("htsc_no").innerHTML="<option value=\'0\'>Please select Site</option>";
        
	   }  
       
    }
  }

xmlhttp.open("GET","select_htsc_ajax.php?q="+str,true);
xmlhttp.send();


}
</script>
<script type="text/javascript">
function showMake(str)

{
    //alert(str);
if (str=="")
  {
  document.getElementById("txtHint").value="";
  return;
  }
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	var x;
	//if(xmlhttp.responseText.indexOf("|$|")!=-1)
        if(xmlhttp.responseText)
	   {
            // alert(xmlhttp.responseText);  
  
	x=xmlhttp.responseText;
	document.getElementById("make").innerHTML=x;
       //var name_of_site_index =  document.getElementById("site_name").selectedIndex;
//       var  name_of_site=   document.getElementById("site_name").options;
//        showGroup(name_of_site[name_of_site_index].text);
	   }
	 else 
	   {
	   document.getElementById("make").innerHTML="<option value=\'0\'>Please select Site</option>";

	   }  
       
    }
  }
xmlhttp.open("GET","select_make_ajax.php?q="+str,true);
xmlhttp.send();
}
</script>
<script type="text/javascript">
function showLocation(str)
{
   // alert(\'hi\');
if (str=="")
  {
  document.getElementById("txtHint").value="";
  return;
  }
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	var x;
      	//if(xmlhttp.responseText.indexOf("|$|")!=-1)
        if(xmlhttp.responseText)
	   {
             //alert(xmlhttp.responseText);  
	x=xmlhttp.responseText;
	document.getElementById("htsc_no").innerHTML=x;
        var name_of_site_index =  document.getElementById("site_name").selectedIndex;
        var  name_of_site=   document.getElementById("site_name").options;
        showGroup(name_of_site[name_of_site_index].text);
	   }
	 else 
	   {
	   document.getElementById("htsc_no").innerHTML="<option value=\'0\'>Please select region</option>";
	   }  
    }
  }
xmlhttp.open("GET","select_location_ajax.php?q="+str,true);
xmlhttp.send();
}
</script>
<script>

function func() {
   var elem = document.getElementById("make");

   if(elem.value == "Vestas") {
      document.getElementById("vestas").style.display=\'inherit\';
	document.getElementById("nepc").style.display=\'none\';
	   
   } 
    if(elem.value == "Nepc") {
      document.getElementById("vestas").style.display=\'none\';
	document.getElementById("nepc").style.display=\'inherit\'; 
	   
   } 
 }
  </script>
  <script>
        $(document).ready(function() {	
			
$("#addPanel").click(function(){
			var fields=["locationNo","g1_kwh","g2_kwh","total_kwh","g1_hrs","g2_hrs","fw_duration","gd_duration","mt_duration","bd_duration"];
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
              FormName= document.nepc;
  			  FormName.method= "POST";
              FormName.submit(); 
			                 });

$("#addPanel1").click(function(){
			var fields=["locationNo2","g1_kwh2","import2","total_kwh2","lineOk","turbineOk","run","gen1","gridDrop"];
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
              FormName= document.vestas;
  			  FormName.method= "POST";
              FormName.submit(); 
			                 });

$("#back").click(function(){

window.history.back();

});
		 });
		 </script>
		 <script>
function showSite(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","getsite.php?q="+str,true);
  xmlhttp.send();
}
</script>


<script src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src=\'./dhtmlxMessage/codebase/dhtmlxmessage.js\'></script>
<script type="text/javascript">
/* if the page has been fully loaded we add two click handlers to the button */
$(document).ready(function () {
	/* Get the checkboxes values based on the class attached to each check box */
	$("#addPanel").click(function() {
	    getValueUsingClass();
	});
});
function getValueUsingClass(){
	/* declare an checkbox array */
	var chkArray = [];
	/* look for all checkboes that have a class \'chk\' attached to it and check if it was checked */
	/*$(".chk:checked").each(function() {
		//chkArray.push($(this).val());
		if(hour_alerting($(this).val()))
		{
		validate_fields($(this).val());
		}
	});*/
	/* we join the array separated by the comma */
	var selected;
	selected = chkArray.join(\',\') + ",";
	/* check if there is selected checkboxes, by default the length is 1 as it contains one single comma */
/*	if(selected.length > 1){
		alert("You have selected " + selected);	
	}else{
		alert("Please at least one of the checkbox");	
	}*/
} 
</script>
<script>
function addG3($parmtr)
        {
		
        var lo,to,run,gen;   
        lo=document.getElementById(\'lineOk\').value;  
        to=document.getElementById(\'turbineOk\').value;  
        run=document.getElementById(\'run\').value;  
        gen=document.getElementById(\'gen1\').value;  

		if(+to>+lo || +run>+lo || +gen>+lo)
        {
         dhtmlx.alert({
		title: "Error !",
        type:"alert-error",
		text: "You have entered more than line Ok",	
                            });
        return false;	
        }
		}
       /* else if(+run>+lo || +run>+to)
        {
		dhtmlx.alert({
		title: "Error !",
        type:"alert-error",
		text: "You have entered more than turbine Ok ",	
                            });
        return false;				

        }
		else if(+gen>+lo || +gen>+to || +gen>+run)
        {
		dhtmlx.alert({
		title: "Error !",
        type:"alert-error",
		text: "You have entered more than run",	
                            });
        return false;				

        }*/
		/*
        else
        {
        var g1_Hrs=document.getElementById(\'g1_hrs\').value;
		var g2_Hrs=document.getElementById(\'g2_hrs\').value;
		var g1_Kwh=document.getElementById(\'g1_kwh\').value;
        var g2_Kwh=document.getElementById(\'g2_kwh\').value;
        var total_Kwh=document.getElementById(\'total_kwh\').value;
		var fw_duration=document.getElementById(\'fw_duration\').value;
		var gd_duration=document.getElementById(\'gd_duration\').value;
		var mt_duration=document.getElementById(\'mt_duration\').value;
		var bd_duration=document.getElementById(\'bd_duration\').value;
            if(g1_Hrs=="")
			{
			document.getElementById(\'g1_hrs\').value=0;
			//return false;
			}
			if(g2_Hrs=="")
			{
			document.getElementById(\'g2_hrs\').value=0;
			//return false;
			}
			if(g1_Kwh=="")
			{
			document.getElementById(\'g1_kwh\').value=0;
			//return false;
			}
			if(g2_Kwh=="")
			{
			document.getElementById(\'g2_kwh\').value=0;
			//return false;
			}
			if(total_Kwh=="")
			{
			document.getElementById(\'total_kwh\').value=0;
			//return false;
			}
            if(fw_duration=="")
			{
			document.getElementById(\'fw_duration\').value=0;
			//return false;
			}
			if(gd_duration=="")
			{
			document.getElementById(\'gd_duration\').value=0;
			//return false;
			}
            if(mt_duration=="")
			{
			document.getElementById(\'mt_duration\').value=0;
			//return false;
			}
			if(bd_duration=="")
			{
			document.getElementById(\'bd_duration\').value=0;
			//return false;
			}						
			return true;     
        }    */
       
		</script>
		<script> 
       function validate_fields($parmtr)
        {
		var g1_Kwh=document.getElementById(\'g1_kwh\').value; 
		var g2_Kwh=document.getElementById(\'g2_kwh\').value; 
        var total_Kwh=document.getElementById(\'total_kwh\').value;  
		var g1_Hrs=document.getElementById(\'g1_hrs\').value;
		var g2_Hrs=document.getElementById(\'g2_hrs\').value;
		var fw_duration=document.getElementById(\'fw_duration\').value;
		var gd_duration=document.getElementById(\'gd_duration\').value;
		var mt_duration=document.getElementById(\'mt_duration\').value;
		var bd_duration=document.getElementById(\'bd_duration\').value;
		    if(g1_Kwh=="")
			{
			document.getElementById(\'g1_kwh\').focus();
			document.getElementById(\'g1_kwh\').style.borderColor="red";
			return false;
			}
			else if(g2_Kwh=="")
			{
			document.getElementById(\'g2_kwh\').focus();
			document.getElementById(\'g2_kwh\').style.borderColor="red";
			return false;
			}
			else if(total_Kwh=="")
			{
			document.getElementById(\'total_kwh\').focus();
			document.getElementById(\'total_kwh\').style.borderColor="red";
			return false;
			}
			else if(imp_kwh=="")
			{
			document.getElementById(\'import_kwh\').focus();
			document.getElementById(\'import_kwh\').style.borderColor="red";
			return false;
			}
            else if(g1_Hrs=="")
			{
			document.getElementById(\'g1_hrs\').value=0;
			document.getElementById(\'g1_hrs\').style.borderColor="red";
			return false;
			}
			else if(g2_Hrs=="")
			{
			document.getElementById(\'g2_hrs\').value=0;
			document.getElementById(\'g2_hrs\').style.borderColor="red";
			return false;
			}
            if(fw_duration=="")
			{
			document.getElementById(\'fw_duration\').value=0;
			document.getElementById(\'fw_duration\').style.borderColor="red";
			return false;
			}
			else if(gd_duration=="")
			{
			document.getElementById(\'gd_duration\').value=0;			
			document.getElementById(\'gd_duration\').style.borderColor="red";
			return false;
			}
            if(mt_duration=="")
			{
			document.getElementById(\'mt_duration\').value=0;
			document.getElementById(\'mt_duration\').style.borderColor="red";
			return false;
			}
			else if(bd_duration=="")
			{
			document.getElementById(\'bd_duration\').value=0;
			document.getElementById(\'bd_duration\').style.borderColor="red";
			return false;
			}	
			//document.eb_generation.submit();				
			return true;     
   
        }  
function stopRKey(evt) {
  var evt = (evt) ? evt : ((event) ? event : null);
  var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null);
  if ((evt.keyCode == 13) && (node.type=="text"))  
      {
	    return false;
	  }
}
document.onkeypress = stopRKey;
</script> 
<script type="text/javascript">
function autocheck(parameter1)
{
var g1_kwh,g2_kwh,g1_hrs,g2_hrs,fw_duration,gd_duration,mt_duration,bd_duration;
g1_kwh=document.getElementById("g1_kwh").value;
g2_kwh=document.getElementById("g2_kwh").value;
//total_kwh=document.getElementById("total_kwh").value;
g1_hrs=document.getElementById("g1_hrs").value;
g2_hrs=document.getElementById("g2_hrs").value;
fw_duration=document.getElementById("fw_duration").value;
gd_duration=document.getElementById("gd_duration").value;
mt_duration=document.getElementById("mt_duration").value;
bd_duration=document.getElementById("bd_duration").value;

if(g1_kwh!="" || g2_kwh!="" || g1_hrs!="" || g2_hrs!="" || fw_duration!="" || gd_duration!="" || mt_duration!="" || bd_duration)
{
//document.getElementByName("checkbox"+"["+parameter1+"]").checked=true;
<!--document.getElementByName("select_id2").checked=true;-->
document.getElementById("select_id[]").checked=true;

}
else
{
<!--document.getElementByName("select_id2").checked=false;-->
document.getElementById("select_id[]").checked=false;
}
}  
</script>
<script>
function autochecks()
{
var y_lcs,t_lcs,import2,lineOk,turbineOk,run,gen1,gridDrop;
y_lcs=document.getElementById("y_lcs").value;
t_lcs=document.getElementById("t_lcs").value;
//g1_kwh2=document.getElementById("g1_kwh2").value;
import2=document.getElementById("import2").value;
//total_kwh2=document.getElementById("total_kwh2").value;
lineOk=document.getElementById("lineOk").value;
turbineOk=document.getElementById("turbineOk").value;
run=document.getElementById("run").value;
gen1=document.getElementById("gen1").value;
gridDrop=document.getElementById("gridDrop").value;

if(y_lcs!="" ||t_lcs!="" || g1_kwh2!="" || import2!="" ||total_kwh2!="" || lineOk!="" || turbineOk!="" || run!="" || gen1!="" || gridDrop)
{
//document.getElementByName("checkbox"+"["+parameter1+"]").checked=true;
<!--document.getElementByName("select_id2").checked=true;-->
document.getElementById("select_ids[]").checked=true;

}
else
{
<!--document.getElementByName("select_id2").checked=false;-->
document.getElementById("select_ids[]").checked=false;
}
}  
</script>
<script>
function numericFilter(data) 
{
   data.value = data.value.replace(/[^.0-9]/ig,"");
}</script>
<script>
var myCalendar;
function doOnLoad() {
   // var date;date=new Date();
   
    myCalendar = new dhtmlXCalendarObject(["panel_date"]);
      var ev = document.getElementById(\'panel_date\').value;
      
   var myEvent = myCalendar.attachEvent("onClick", function (){
    var elem = document.getElementById("make");
    var fields=["panel_date","make","htsc_no","site_name"]; 
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
   document.getElementById("power_generation").submit(); 
   

   if(elem.value == "Vestas") {
      document.getElementById("vestas").style.display=\'inherit\';
	document.getElementById("nepc").style.display=\'none\';
	   
   } 
    if(elem.value == "Nepc") {
      document.getElementById("vestas").style.display=\'none\';
	document.getElementById("nepc").style.display=\'inherit\'; 
	   
   } 
   });
    }
	</script>
	<script>
/*function retrieve_select_bx()
{

var select_value= document.getElementById("hdn_select_bx_value").value,no_of_options,listBox;
listBox=document.getElementById("region");
no_of_options=document.getElementById("region").length;
for (var x = 0; x < no_of_options; x++) { 
  if (listBox.options[x].value == select_value) { 
    listBox.options[x].selected = true; 
  } 
}
} 
 
function retrieve_select_bx2()
{

var select_value= document.getElementById("hdn_select_bx_value2").value,no_of_options,listBox;
listBox=document.getElementById("site_name");
no_of_options=document.getElementById("site_name").length;
for (var x = 0; x < no_of_options; x++) { 
alert(x);
  if (listBox.options[x].value == select_value) { 
    listBox.options[x].selected = true; 
  } 
}
}  
 
function retrieve_select_bx3()
{

var select_value= document.getElementById("hdn_select_bx_value3").value,no_of_options,listBox;
listBox=document.getElementById("htsc_grouping");
no_of_options=document.getElementById("htsc_grouping").length;
for (var x = 0; x < no_of_options; x++) { 
  if (listBox.options[x].value == select_value) { 
    listBox.options[x].selected = true; 
  } 
}
}  */
   

<!--<script type="text/javascript">
function showSites()
{
var str=document.getElementById("region").value;
if (str=="")
  {
  document.getElementById("txtHint").value="";
  return;
  }
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	var x;
	//if(xmlhttp.responseText.indexOf("|$|")!=-1)
        if(xmlhttp.responseText)
	   {
  
	x=xmlhttp.responseText;
	document.getElementById("site_name").innerHTML=x;
        var name_of_site_index =  document.getElementById("site_name").selectedIndex;
       var  name_of_site=   document.getElementById("site_name").options;
        showGroup(name_of_site[name_of_site_index].text);
	   }
	 else 
	   {
	 document.getElementById("site_name").innerHTML="<option value=\'0\'>Please select region</option>";
	   document.getElementById("htsc_no").innerHTML="<option value=\'0\'>Please select region</option>";
	   }   
    }
  }
xmlhttp.open("GET","select_sites_ajax.php?q="+str,true);
xmlhttp.send();
} </script>
<script type="text/javascript">
function tab(field, event) {
    if (event.which == 13 /* IE9/Firefox/Chrome/Opera/Safari */ || event.keyCode == 13 /* IE8 and earlier */ ) {
        for (i = 0; i < field.form.elements.length; i++) {
            if (field.form.elements[i].tabIndex == field.tabIndex + 1) {
                field.form.elements[i].focus();
                if (field.form.elements[i].type == "text") {
                    field.form.elements[i].select();
                    break;
                }
            }
        }
        return false;
    }
    return true;
}
</script>
<script>
 $(document).ready(function(){
        //iterate through each textboxes and add keyup
        //handler to trigger sum event
        $(".txt").each(function() {
 
            $(this).keyup(function(){
                calculateSum();
            });
        });
    });
	</script>
	<script>
    function calculateSum() {
        var sum = 0;
        //iterate through each textboxes and add the values
        $(".txt").each(function() {
            //add only if the value is number
            if(!isNaN(this.value) && this.value.length!=0) {
                sum += parseFloat(this.value);
            }
        });
        //.toFixed() method will roundoff the final sum to 2 decimal places
        //$("#sum").html(sum.toFixed(2));
		total_kwh.value =sum.toFixed(2);
		//total_kwh.value=total_kwh.value-total_kwh.value;
    }
		   </script> 
		   <script type="text/javascript">
		   $(document).ready(function(){
		   document.getElementById(\'region\').value = "<?php echo $_POST[\'region\'];?>";
  		  document.getElementById(\'site_name\').value = "<?php echo $_POST[\'site_name\'];?>";
		   }
</script>

  
<script>
	/*document.getElementById("vestas").style.display = "none";
   document.getElementById("nepc").style.display = "none";*/
    
	<!--myCalendar.setSensitiveRange(date,null);-->

</script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script language="javascript">
function validate(MyForm){	
	if(!IsValid(MyForm.d_id.value,"Content Title")){
		MyForm.d_id.focus();
		return false;
	}
	MyForm.hdAction.value = 1;
}
</script>
<script>
function createWindow() 
{
	
	var dhxWins, w1;
	var p = 0;
	var idPrefix = 1;
	var e = document.getElementById("site_name");
	var str = e.options[e.selectedIndex].text;
	dhxWins = new dhtmlXWindows();
    dhxWins.setImagePath("./codebase/imgs/");
  // dhxWins.enableAutoViewport(false);
    dhxWins.attachViewportTo("winVP");
	win = dhxWins.createWindow("w1", 400, 0, 600, 300);
	win.button("close").enable();
	win.button("minmax1").disable();
	win.setText("Machine Details");
	win.attachURL("./machine_details.php?s_name="+str);
	win.denyMove();
	}
	</script>
	<script>
         function addG($parmtr)
         {  
        var g1 = document.getElementById(\'g1_kwh\').value;
        var g2 = document.getElementById(\'g2_kwh\').value;
        var tot = +g1 + +g2;
        document.getElementById(\'total_kwh\').value=tot;
         }
		 </script>
		 <script>
        function addGHOURS($parmtr)
        {
        var  g1,g2,idle1,idle2,idle3,idle4,tot;          
         g1 = document.getElementById(\'g1_hrs\').value;
         g2 = document.getElementById(\'g2_hrs\').value;
         idle1 = document.getElementById(\'fw_duration\').value;
         idle2 = document.getElementById(\'gd_duration\').value;
         idle3 = document.getElementById(\'mt_duration\').value;
         idle4 = document.getElementById(\'bd_duration\').value;
         tot = +g1 + +g2 + +idle1 + +idle2+ +idle3 + +idle4;
        document.getElementById(\'total_hrs\').value=tot;
        }
	</script>
	<script>
	function hourCheck()
	{
    var g1 = document.getElementById(\'g1_hrs\').value;
	var g2 = document.getElementById(\'g2_hrs\').value;
    var idle1 = document.getElementById(\'fw_duration\').value;
    var idle2 = document.getElementById(\'gd_duration\').value;
    var idle3 = document.getElementById(\'mt_duration\').value;
    var idle4 = document.getElementById(\'bd_duration\').value;
   	var tot3 = +g1 + +g2 + +idle1 + +idle2  + +idle3 + +idle4;
	if(tot3 > 24)
		{
		dhtmlx.alert({
		title: "Error !",
        type:"alert-error",
		text: "Total Hours should be equql to 24",	
                            });
		if(g1!="" && g2!="" && idle1!="" && idle2!="" && idle3!="" && idle4!="")
		{
				document.getElementById(\'bd_duration\').value="";
		}
		else if(g1!="" && g2!="" && idle1!="" && idle2!="" && idle3!="")
		{
				document.getElementById(\'mt_duration\').value="";
		}						
		else if(g1!="" && g2!="" && idle1!="" && idle2!="")
		{
				document.getElementById(\'gd_duration\').value="";
		}
		else if(g1!="" && g2!="" && idle1!="")
		{
				document.getElementById(\'fw_duration\').value="";
		}
		else if(g1!="" && g2!="")
		{
				document.getElementById(\'g2_hrs\').value="";
		}
		else if(g1!="")
		{
				document.getElementById(\'g1_hrs\').value="";
		}
		return false;	
        }
	var tot3 = +g1 + +g2 + +idle1 + +idle2 + +idle3 + +idle4;
	document.getElementById(\'total_hrs\').value=tot3;
	}
	</script>
	<script>
	function hourCheck1()
	{
    var g1 = document.getElementById(\'g1_hrs\').value;
	var g2 = document.getElementById(\'g2_hrs\').value;
    var idle1 = document.getElementById(\'fw_duration\').value;
    var idle2 = document.getElementById(\'gd_duration\').value;
    var idle3 = document.getElementById(\'mt_duration\').value;
    var idle4 = document.getElementById(\'bd_duration\').value;
   	var tot3 = +g1 + +g2 + +idle1 + +idle2  + +idle3 + +idle4;
	if(tot3!= 24)
		{
		dhtmlx.alert({
		title: "Error !",
        type:"alert-error",
		text: "Total Hours should be equql to 24",	
                            });
		if(g1!="" && g2!="" && idle1!="" && idle2!="" && idle3!="" && idle4!="")
		{
				document.getElementById(\'bd_duration\').value="";
		}
		else if(g1!="" && g2!="" && idle1!="" && idle2!="" && idle3!="")
		{
				document.getElementById(\'mt_duration\').value="";
		}						
		else if(g1!="" && g2!="" && idle1!="" && idle2!="")
		{
				document.getElementById(\'gd_duration\').value="";
		}
		else if(g1!="" && g2!="" && idle1!="")
		{
				document.getElementById(\'fw_duration\').value="";
		}
		else if(g1!="" && g2!="")
		{
				document.getElementById(\'g2_hrs\').value="";
		}
		else if(g1!="")
		{
				document.getElementById(\'g1_hrs\').value="";
		}
		return false;			
			}
	document.getElementById(\'total_hrs\').value=tot3;
	}
	
	</script>
	<script>	
	 function addG1($parmtr)
         {  
        var g1 = document.getElementById(\'g1_kwh2\').value;
        var g2 = document.getElementById(\'import2\').value;
        var tot = +g1 - +g2;
        document.getElementById(\'total_kwh2\').value=tot;
         }
		 </script>
		 <script>	
	 function addG2($parmtr)
         {  
        var lo = document.getElementById(\'lineOk\').value;
        //var g2 = document.getElementById(\'import2\').value;
        var gd = 24 - +lo;
        document.getElementById(\'gridDrop\').value=gd;
         }
		 </script>
		 <script>
		  function addG5($parmtr)
         {  
        var lo = document.getElementById(\'lineOk\').value;
        if(+lo>24)
		{
		dhtmlx.alert({
		title: "Error !",
        type:"alert-error",
		text: "Line Ok should be less than 24",	
                            });
        return false;	
        }
		}
         </script>
		 <script>	
	 function addG4($parmtr)
         {  
        var yl = document.getElementById(\'y_lcs\').value;
        var tl = document.getElementById(\'t_lcs\').value;
        var g1 = +tl - +yl;
        document.getElementById(\'g1_kwh2\').value=g1;
         }
		 </script>
		 <script>
		 /* function addG3($parmtr)
         {  
        var lo = document.getElementById(\'lineOk\').value;
        var to = document.getElementById(\'turbineOk\').value;
        var run = document.getElementById(\'run\').value;
        var gen = document.getElementById(\'gen1\').value;
        var to <= +lo;   
	document.getElementById(\'turbineOk\').value=to;
         }*/
		 </script>
 
	<script>
	 function numericFilter(data) 
{
   data.value = data.value.replace(/[^.0-9]/ig,"");
}	
function textFilter(data)
{
   data.value = data.value.replace(/[^ .a-z]/ig,"");
}		  
</script>
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
<!--.form-group
{
 overflow:auto;
}-->
</style>
'; ?>