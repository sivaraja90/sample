<?php /* Smarty version 2.6.25, created on 2017-11-16 17:08:49
         compiled from outwardReg.tpl */ ?>
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
                          <h5  style="padding-left:40%;">Outward Registration Form</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                       </div>
                        </div>
						
                        <div class="ibox-content"><body onLoad="doOnLoad();">
                            <form method="post" class="form-horizontal" name="outwardReg" id="outwardReg">
							<?php if ($this->_tpl_vars['LDList2'] != ""): ?>	
<?php $_from = $this->_tpl_vars['LDList2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['master_dtls']):
?>
							<input type="hidden" name="hdAction" id="hdAction" />
							<input type="hidden" id="hdn_cnt_dtls" name="hdn_cnt_dtls" value="">
							   	 <!--<div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Select Region:</label>
                               <div class="col-md-4"  id="errselect_region"> <input type="text" id="select_region" name="select_region" value="<?php echo $this->_tpl_vars['master_dtls']['select_region']; ?>
" class="form-control" autocomplete="off">						</div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">GSTIN:</label>
							   <div class="col-md-4" id="errgst_no"> <input type="text"  id="gst_no"  name="gst_no" value="<?php echo $this->_tpl_vars['master_dtls']['gst_no']; ?>
" class="form-control" maxlength="50" autocomplete="off"></div>
							   </div>-->
							    <!--<div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">ST No:</label>
                             <div class="col-md-4"  id="errst_nO"> <input type="text" id="st_no" name="st_no" value="<?php echo $this->_tpl_vars['master_dtls']['st_no']; ?>
" class="form-control" autocomplete="off">						</div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">CST No:</label>
				 			   <div class="col-md-4" id="errcst_no"> <input type="text" id="cst_no" name="cst_no" value="<?php echo $this->_tpl_vars['master_dtls']['cst_no']; ?>
" class="form-control" maxlength="19" autocomplete="off"></div>
							   </div>-->
							    
							   <div class="" style="height:40px;">
                          <h5  style="padding-left:40%;font-size:14px;">New Material Outward Master:</h5>
						  </div>
							   	 <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Outward Entry No :</label>
                               <div class="col-md-4"  id="erroutward_entry_no"> <input type="text" id="outward_entry_no" name="outward_entry_no" value="<?php echo $this->_tpl_vars['master_dtls']['outward_entry_no']; ?>
" class="form-control" autocomplete="off" readonly="true">						</div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">Date Of Entry:</label>
							   <div class="col-md-4" id="errdate_of_entry"> <input type="text" id="date_of_entry" name="date_of_entry" value="<?php echo $this->_tpl_vars['master_dtls']['date_of_entry']; ?>
" readonly="true" class="form-control" maxlength="19" autocomplete="off" placeholder="select DOE!"></div>
							   </div>
							    <!--<div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">DC No:</label>
                               <div class="col-md-4"  id="errdc_no"> <input type="text" id="dc_no" name="dc_no" value="<?php echo $this->_tpl_vars['master_dtls']['dc_no']; ?>
" class="form-control" autocomplete="off">						</div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">DC Date:</label>
							   <div class="col-md-4" id="errdc_date"> <input type="text" id="dc_date" name="dc_date" value="<?php echo $this->_tpl_vars['master_dtls']['dc_date']; ?>
" readonly="true" class="form-control" maxlength="19" autocomplete="off" placeholder="select DC Date!"></div>
							   </div>-->
							    <div class="form-group">
															   
							   <label class="col-sm-2 control-label" style="text-align:left; ">GSTIN:</label>
							   <div class="col-md-4" id="errgst_no"> <input type="text"  id="gst_no"  name="gst_no" value="<?php echo $this->_tpl_vars['master_dtls']['gst_no']; ?>
" class="form-control" maxlength="50" autocomplete="off"></div>

							   <label class="col-sm-2 control-label" style="text-align:left;">To Name:</label>
                               <div class="col-md-4"  id="errto_name"> <input type="text" id="to_name" name="to_name" value="<?php echo $this->_tpl_vars['master_dtls']['to_name']; ?>
" class="form-control" autocomplete="off">						</div>
							   </div>
							    <div class="form-group">
								  <label class="col-sm-2 control-label" style="text-align:left; ">Purpose:</label>
							   <div class="col-md-4" id="errpurpose" value="<?php echo $this->_tpl_vars['master_dtls']['purpose']; ?>
">
							   <select class="form-control" name="purpose" id="purpose" value="<?php echo $this->_tpl_vars['master_dtls']['purpose']; ?>
" autocomplete="off">
  											  <option id"<?php echo $this->_tpl_vars['master_dtls']['purpose']; ?>
" value="<?php echo $this->_tpl_vars['master_dtls']['purpose']; ?>
" selected="selected"><?php echo $this->_tpl_vars['master_dtls']['purpose']; ?>
</option>
											  <option value="0" >----- PURPOSE -----</option>
											  <option value="Sales" >Sales</option>
											  <option value="Used" >Used</option>
											  <option value="Scrap">Scrap</option>
											  <option value="Service">Service</option>
											</select>
											</div>
							   <label class="col-sm-2 control-label" style="text-align:left;">To Address:</label>
                               <div class="col-md-4"  id="errto_address"> <textarea id="to_address" name="to_address" class="form-control" autocomplete="off" rows="2" cols="5"><?php echo $this->_tpl_vars['master_dtls']['to_address']; ?>
</textarea>						</div>
							   </div>
							     <div class="form-group">
							    <label class="col-sm-2 control-label" style="text-align:left; ">Vehicle No:</label>
							   <div class="col-md-4" id="errvehicle_no"> <input type="text"  id="vehicle_no" name="vehicle_no" value="<?php echo $this->_tpl_vars['master_dtls']['vehicle_no']; ?>
" class="form-control" maxlength="19" autocomplete="off"></div>
							   </div>
							   <?php endforeach; endif; unset($_from); ?>
							   <?php endif; ?>
							   
							   <?php if ($this->_tpl_vars['LDList2'] == ""): ?>	
							    <input type="hidden" name="hdAction" id="hdAction" />
							
							   	 <!--<div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Select Region:</label>
                               <div class="col-md-4"  id="errselect_region"> <input type="text" id="select_region" name="select_region" value="<?php echo $this->_supers['post']['select_region']; ?>
" class="form-control" autocomplete="off">						</div>
							   <label class="col-sm-2 control-label" style="text-align:left; ">GSTIN:</label>
							   <div class="col-md-4" id="errgst_no"> <input type="text"  id="gst_no"  name="gst_no" value="<?php echo $this->_tpl_vars['master_dtls']['gst_no']; ?>
" class="form-control" maxlength="50" autocomplete="off"></div>
							   </div>-->
							    <!--<div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">ST No:</label>
                               <div class="col-md-4"  id="errst_no"> <input type="text" id="st_no" name="st_no" value="<?php echo $this->_supers['post']['st_no']; ?>
" class="form-control" autocomplete="off">						</div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">CST No:</label>
				 			   <div class="col-md-4" id="errcst_no"> <input type="text" id="cst_no" name="cst_no" value="<?php echo $this->_supers['post']['cst_no']; ?>
" class="form-control" maxlength="19" autocomplete="off"></div>
							   </div>-->
							    
							   
							   <div class="" style="height:40px;">
                          <h5  style="padding-left:40%;font-size:14px;">New Material Outward Master:</h5>
						  </div>
							   	 <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Outward Entry No :</label>
                               <div class="col-md-4"  id="erroutward_entry_no"> <input type="text" id="outward_entry_no" name="outward_entry_no" value="<?php echo $this->_tpl_vars['outward_entry_no']; ?>
" class="form-control" autocomplete="off" readonly="true">						</div>
							   
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">Date Of Entry:</label>
							   <div class="col-md-4" id="errdate_of_entry"> <input type="text" id="date_of_entry" name="date_of_entry" value="<?php echo $this->_supers['post']['date_of_entry']; ?>
" readonly="true" class="form-control" maxlength="19" autocomplete="off" placeholder="select DOE!"></div>
							   </div>
							    <!--<div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">DC No:</label>
                             <div class="col-md-4"  id="errdc_no"> <input type="text" id="dc_no" name="dc_no" value="<?php echo $this->_supers['post']['dc_no']; ?>
" class="form-control" autocomplete="off">						</div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">DC Date:</label>
							   <div class="col-md-4" id="errdc_date"> <input type="text" id="dc_date" name="dc_date" value="<?php echo $this->_supers['post']['dc_date']; ?>
" readonly="true" class="form-control" maxlength="19" autocomplete="off" placeholder="select DC Date!"></div>
							   </div>-->
							    <div class="form-group">
								<label class="col-sm-2 control-label" style="text-align:left; ">GSTIN:</label>
							   <div class="col-md-4" id="errgst_no"> <input type="text"  id="gst_no"  name="gst_no" value="<?php echo $this->_tpl_vars['master_dtls']['gst_no']; ?>
" class="form-control" maxlength="50" autocomplete="off"></div>

							   <label class="col-sm-2 control-label" style="text-align:left;">To Name:</label>
                               <div class="col-md-4"  id="errto_name"> <input type="text" id="to_name" name="to_name" value="<?php echo $this->_supers['post']['to_name']; ?>
" class="form-control" autocomplete="off">						</div>
							   </div>
							    <div class="form-group">
								<label class="col-sm-2 control-label" style="text-align:left; ">Purpose:</label>
							   <div class="col-md-4" id="errpurpose" value="<?php echo $this->_supers['post']['purpose']; ?>
">
							   <select class="form-control" name="purpose" id="purpose" value="<?php echo $this->_supers['post']['purpose']; ?>
" autocomplete="off">
  											  <option value="0" >----- PURPOSE -----</option>
											  <option value="Sales" >Sales</option>
											  <option value="Used" >Used</option>
											  <option value="Scrap">Scrap</option>
											  <option value="Service">Service</option>
											</select>
											</div>
							   <label class="col-sm-2 control-label" style="text-align:left; ">Vehicle No:</label>
							   <div class="col-md-4" id="errvehicle_no"> <input type="text"  id="vehicle_no" name="vehicle_no" value="<?php echo $this->_supers['post']['vehicle_no']; ?>
" class="form-control" maxlength="19" autocomplete="off"></div>
							   </div>
							   <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">To Address:</label>
                               <div class="col-md-4"  id="errto_address"> <textarea id="to_address" name="to_address" class="form-control" autocomplete="off" rows="2" cols="5"><?php echo $this->_supers['post']['to_address']; ?>
</textarea>						</div>
							    </div>
							    <?php endif; ?>
								 <div class="ibox-content"></div>
							   <div class="" style="height:40px;">
                          <h5  style="padding-left:40%;font-size:14px;">Material Detail:</h5>
						  </div>
								 <div class="form-group">
							 <label class="col-sm-2 control-label" style="text-align:left;">Location:</label>
                               <div class="col-md-4" id="errlocation"> <input type="text" id="location" name="location"  placeholder="Select Location !!!" value="<?php echo $this->_supers['post']['location']; ?>
" class="form-control" autocomplete="Off"></a>	</div>

							   <label class="col-sm-2 control-label" style="text-align:left;">Material Name:</label>
                               <div class="col-md-4" id="erritem_name"> <input type="text" id="item_name" name="item_name" size="29" value="<?php echo $this->_supers['post']['item_name']; ?>
" class="form-control" autocomplete="Off"  data-toggle="modal" data-target="#myModal1" readonly="true"></a>	</div>
							   
							   </div>
							    <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left; ">Material Code:</label>
							   <div class="col-md-4" id="erritem_code"><select id="item_code" name="item_code" value="<?php echo $this->_supers['post']['item_code']; ?>
" class="form-control" maxlength="19" autocomplete="off" readonly="true" onChange="Fill_Name_of_Clr_mat_name(this.value);">
							   <option value="">---Select---</option>
							   </select></div>

							   <label class="col-sm-2 control-label" style="text-align:left; ">Material Category:</label>
							   <div class="col-md-4" id="erritem_category"> <input type="text"  id="item_category"  name="item_category" value="<?php echo $this->_supers['post']['item_category']; ?>
" class="form-control" maxlength="19" autocomplete="off" readonly="true"></div>
							   
							   </div>
							    <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left; ">Material Category Code:</label>
							   <div class="col-md-4" id="erritem_category_code"> <input type="text"  id="item_category_code" name="item_category_code" value="<?php echo $this->_supers['post']['item_category_code']; ?>
" class="form-control" maxlength="19" autocomplete="off" readonly="true"></div>

							   <label class="col-sm-2 control-label" style="text-align:left;">Quantity</label>
                               <div class="col-md-4"  id="errquantity"> <input type="text" id="quantity" name="quantity" value="<?php echo $this->_supers['post']['quantity']; ?>
" class="form-control" autocomplete="off" onKeyUp="numericFilter(this);quantity_check();">						</div>
							   
							   </div>
							    <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left; ">Available Quantity</label>
							   <div class="col-md-4" id="errsimNo"> <input type="text"  id="availableQuantity"  name="availableQuantity" value="<?php echo $this->_supers['post']['availableQuantity']; ?>
" class="form-control"  autocomplete="off" readonly="true"></div>

							   <label class="col-sm-2 control-label" style="text-align:left;">Material Price:</label>
                               <div class="col-md-4"  id="errmaterialPrice"> <input type="text" id="materialPrice" name="materialPrice" value="<?php echo $this->_supers['post']['materialPrice']; ?>
" class="form-control" autocomplete="off" readonly="true">						</div>
							   
							   
							   <div class="col-md-4" id="errwarrantyPeriod"> <input type="hidden"  id="warrantyPeriod"  name="warrantyPeriod" value="<?php echo $this->_supers['post']['warrantyPeriod']; ?>
" class="form-control" maxlength="19" autocomplete="off"></div>
							   </div>
								 
								 <div align="center">
										<button class="btn btn-primary" type="submit" id="addOutward" >ADD</button>
										<button class="btn btn-white" type="button" id="back" >CANCEL</button>
                                      </div>
									  </form>
									  <div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content animated bounceInRight">
                                        
                                        <div class="modal-body">
										<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
										<h2 class="modal-title" align="center">Material Details</h2>
									  <!-- SEARCH FORM START -->
<div id="std">            
<!-- SEARCH FORM END -->
<?php echo '
<script type="text/javascript">
function closeit(val,val2,val3,val4,val5,val6){
	parent.document.forms[\'outwardReg\'].elements[\'item_name\'].value=val;
	parent.document.forms[\'outwardReg\'].elements[\'item_code\'].value=val2;
	parent.document.forms[\'outwardReg\'].elements[\'item_category\'].value=val3;
	parent.document.forms[\'outwardReg\'].elements[\'item_category_code\'].value=val4;
	parent.document.forms[\'outwardReg\'].elements[\'availableQuantity\'].value=val5; //alert(val5);
	parent.document.forms[\'outwardReg\'].elements[\'materialPrice\'].value=val6; //alert(val6);
	document.getElementById("myModal").style.display="none";
//	parent.dhxWins.window("w1").close();
/*	var supplier_name = document.getElementById("supplier_name");
    var id = supplier_name.options[supplier_name.selectedIndex].value;
	alert(\'hi\');*/
	
}
/*function get(data){
alert(data);
}*/
$(document).ready(function() {	
 /*$(".response").click(function(){
					
					 $("#myModal").hide();
				});*/
  $(".response").click(function(){
					
					modal.location.reload(true);
				});

 
      });
</script>
'; ?>


 <table class="table table-bordered" >
    <form name="SiteMgmt" method="post" >
    <!--<input type="hidden" name="a" value="search" >-->
					<tr >
				    <td colspan="2" align="right" onClick="get(this.value);" data-toggle="modal" data-target="#"><a href="#"><?php echo $this->_tpl_vars['LinkPage']; ?>
<?php echo $this->_tpl_vars['PerPageNavigation']; ?>
</a></td>
				    </tr>
    <tr><td>
       <table width="100%" border="1PX solid black" cellspacing=0 cellpadding=1 class="table table-bordered"  id="table" >
        <tr >
	        <th width="30" >&nbsp;&nbsp;S No.</th>
	        <th width="50" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Material Name</th>
			<th width="50" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Material Code</th>
		   <th width="50">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Material Category</th>
		   <th width="50">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Material Category Code</th>
		   <th width="50" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quantity</th>
		   <th width="50">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Price</th>
		   
        </tr>
		 <!-- <tr>
                <td align="center" bgcolor="#CCFFFF">&nbsp;</td>
                <td align="center" bgcolor="#CCFFFF"><input type="text" id="supplier_name" name="supplier_name" size="45" autocomplete="Off"><input id="search" name="search" value="" size="10" class="btn" type="submit" style="visibility:hidden"></td>
				<td align="center" bgcolor="#CCFFFF"><input type="text" id="supplier_code" name="supplier_code" size="23" autocomplete="Off"><input id="search" name="search" value="" size="10" class="btn" type="submit" style="visibility:hidden"></td>
            </tr>-->
			
        <?php $_from = $this->_tpl_vars['PageList2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListCus']):
?>
            <tr  >          
                <td align="center" title="">
                  <a href="#."  onClick="closeit('<?php echo $this->_tpl_vars['ListCus']['material_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['material_code']; ?>
','<?php echo $this->_tpl_vars['ListCus']['material_category']; ?>
','<?php echo $this->_tpl_vars['ListCus']['item_category_code']; ?>
','<?php echo $this->_tpl_vars['ListCus']['quantity']; ?>
','<?php echo $this->_tpl_vars['ListCus']['unit_price']; ?>
');"><?php echo $this->_tpl_vars['i']++; ?>
</a></td>
                <td  class="response" align="left"><a href="#."  onClick="closeit('<?php echo $this->_tpl_vars['ListCus']['material_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['material_code']; ?>
','<?php echo $this->_tpl_vars['ListCus']['material_category']; ?>
','<?php echo $this->_tpl_vars['ListCus']['item_category_code']; ?>
','<?php echo $this->_tpl_vars['ListCus']['quantity']; ?>
','<?php echo $this->_tpl_vars['ListCus']['unit_price']; ?>
');"><?php echo $this->_tpl_vars['ListCus']['material_name']; ?>
</a></td>
				<td class="response" align="left"><a href="#."  onClick="closeit('<?php echo $this->_tpl_vars['ListCus']['material_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['material_code']; ?>
','<?php echo $this->_tpl_vars['ListCus']['material_category']; ?>
','<?php echo $this->_tpl_vars['ListCus']['item_category_code']; ?>
','<?php echo $this->_tpl_vars['ListCus']['quantity']; ?>
','<?php echo $this->_tpl_vars['ListCus']['unit_price']; ?>
');"><?php echo $this->_tpl_vars['ListCus']['material_code']; ?>
</a></td>
				<td class="response" align="left"><a href="#."  onClick="closeit('<?php echo $this->_tpl_vars['ListCus']['material_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['material_code']; ?>
','<?php echo $this->_tpl_vars['ListCus']['material_category']; ?>
','<?php echo $this->_tpl_vars['ListCus']['item_category_code']; ?>
','<?php echo $this->_tpl_vars['ListCus']['quantity']; ?>
','<?php echo $this->_tpl_vars['ListCus']['unit_price']; ?>
');"><?php echo $this->_tpl_vars['ListCus']['material_category']; ?>
</a></td>
				<td class="response" align="left"><a href="#."  onClick="closeit('<?php echo $this->_tpl_vars['ListCus']['material_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['material_code']; ?>
','<?php echo $this->_tpl_vars['ListCus']['material_category']; ?>
','<?php echo $this->_tpl_vars['ListCus']['item_category_code']; ?>
','<?php echo $this->_tpl_vars['ListCus']['quantity']; ?>
','<?php echo $this->_tpl_vars['ListCus']['unit_price']; ?>
');"><?php echo $this->_tpl_vars['ListCus']['item_category_code']; ?>
</a></td>
				<td class="response" align="left"><a href="#."  onClick="closeit('<?php echo $this->_tpl_vars['ListCus']['material_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['material_code']; ?>
','<?php echo $this->_tpl_vars['ListCus']['material_category']; ?>
','<?php echo $this->_tpl_vars['ListCus']['item_category_code']; ?>
','<?php echo $this->_tpl_vars['ListCus']['quantity']; ?>
','<?php echo $this->_tpl_vars['ListCus']['unit_price']; ?>
');"><?php echo $this->_tpl_vars['ListCus']['quantity']; ?>
</a></td>
				<td class="response" align="left"><a href="#."  onClick="closeit('<?php echo $this->_tpl_vars['ListCus']['material_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['material_code']; ?>
','<?php echo $this->_tpl_vars['ListCus']['material_category']; ?>
','<?php echo $this->_tpl_vars['ListCus']['item_category_code']; ?>
','<?php echo $this->_tpl_vars['ListCus']['quantity']; ?>
','<?php echo $this->_tpl_vars['ListCus']['unit_price']; ?>
');"><?php echo $this->_tpl_vars['ListCus']['unit_price']; ?>
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
</div>
</div>
</div>



							   <br/>
							   <br/>


							   
		<table align="center" cellspacing="0" cellpadding="3"  width="100%" border=0 class="table table-bordered">

	
				 <?php if ($this->_tpl_vars['SuccessMessage_on_delete'] != "" && $this->_tpl_vars['ErrorMessage'] == ""): ?>
	<tr> 
		<td class="succs_text" width=50%> <?php echo $this->_tpl_vars['SuccessMessage_on_delete']; ?>
</td>
		<td  width=50%></td>
	 </tr>

             <?php endif; ?> 
	
	

	
	
<!--	 <tr>
        <td class="msg" width=50%>Material List</td>
		<td class="msg" width=50%>&nbsp;</td>
    </tr>-->
   
    <tr>
	
		<table align="center" class="table table-bordered" cellspacing="1" cellpadding="3" width="100%" border="1PX solid black">
			<tr>
			<th width="20" align="center" >SL.No </th>
			<th width="20" align="center" >Outward Entry No </th>
			<th width="35" align="center">Material Name</th>
			<th width="35" align="center">Material Code</th>
			<th width="35" align="center">Material Category</th>
			<th width="20" align="center" >Material Category Code</th>
	        <th width="25" align="center">Quantity</th>
			<th width="25" align="center">Price</th>
			<th width="25" align="center">Total</th>
			<th width="20" align="center">Action</th>
            </tr>
			
		<?php $this->assign('i', '1'); ?>
		             <?php $_from = $this->_tpl_vars['outward_details_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['details_list']):
?>        
                
				<td><?php echo $this->_tpl_vars['i']++; ?>
</td>
                <td align="center">  <a title="Outward Entry No" ><?php echo $this->_tpl_vars['details_list']['outward_entry_no']; ?>
</a></td>
				<td align="center">  <a title="Material Name" ><?php echo $this->_tpl_vars['details_list']['material_name']; ?>
</a>&nbsp;</td>
                <td  align="center">  <a title="Material Code" ><?php echo $this->_tpl_vars['details_list']['material_code']; ?>
</a></td>
				<td align="center">  <a title="Material Category"><?php echo $this->_tpl_vars['details_list']['item_category_code']; ?>
</a></td>
                <td align="center">  <a title="Material Category Code" ><?php echo $this->_tpl_vars['details_list']['item_category_code']; ?>
</a>&nbsp;</td>
                <td  align="center">  <a title="Quantity" ><?php echo $this->_tpl_vars['details_list']['quantity']; ?>
</a></td>
				<td  align="center">  <a title="Price" ><?php echo $this->_tpl_vars['details_list']['material_price']; ?>
</a></td>
				<?php $this->assign('total_price', ($this->_tpl_vars['details_list']['quantity']*$this->_tpl_vars['details_list']['material_price'])); ?>
				<td  align="right">  <a title="Price" ><?php echo $this->_tpl_vars['total_price']; ?>
</a></td>
				
				<!--/*<td class="nohover" align="center"><a href="#"><img src="images/icons/delete.png" border="0" align="absmiddle" alt="Delete" onClick="Javascript:deleteCats('<?php echo $this->_tpl_vars['details_list']['outward_entry_no']; ?>
','<?php echo $this->_tpl_vars['details_list']['sl_no']; ?>
')"  title="Delete">	</a></td>*/-->	
				<td class="nohover" align="center">	&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" class="fa fa-trash" onClick="deleteCats('<?php echo $this->_tpl_vars['details_list']['outward_entry_no']; ?>
','<?php echo $this->_tpl_vars['details_list']['sl_no']; ?>
');"></a></td>

															
            </tr>
			<?php endforeach; endif; unset($_from); ?>
		</table>
		</table>
                        
						</body>
						</div>
                    </div>
                </div>
            </div>
        </div>
		 </div>
<?php echo '

<script>
 function getval()
        {
		var date_of_entry,dc_date;
		date_of_entry=document.getElementById("date_of_entry").value;
		dc_date=document.getElementById("dc_date").value;
		if(date_of_entry=="" || dc_date=="")
		{
			alert("Please Specify Date");
			return false;
		}
		
        }	
	var myCalendar;
function doOnLoad() {
  //Fill_Name_of_Clr(); 
    var date_of_entry;
	date_of_entry=new Date();
    myCalendar = new dhtmlXCalendarObject(["date_of_entry"]);
	myCalendar = new dhtmlXCalendarObject(["dc_date"]);
}
 /**************************Suggestion****************************************************/
 </script>
 <script type="text/javascript">
function Fill_Name_of_Clr()
{ //alert("hi");
var location= document.getElementById("location").value; 
//alert(location);  
var cnt_dtl_ary="";
if (location=="")
  {
  document.getElementById("location").value=""; 
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
  	/*x ="<option>--Select Customer Name--</option>"*/
	x= x + xmlhttp.responseText;
	x=x.replace("|$|","");
	//alert(x);
	document.getElementById("location").innerHTML=x;
	var add_dtls_length=x.split("_").length;
	var add_dtls=x.split("_");//alert(add_dtls);
		//	document.getElementById("hdn_cnt_dtls").value=cnt_dtl_ary;
		//	split_id=x.split("_");
		var code=add_dtls[0];//alert(code);
	var str1 =code.replace(\'undefined\',\'\');//alert(str1);
			document.getElementById("item_code").innerHTML=str1;
			document.getElementById("location").innerHTML=x;

	   }
    }
  }
xmlhttp.open("GET","ajax_location.php?location="+location,true);
xmlhttp.send();


}

</script>	
<script type="text/javascript">
function Fill_Name_of_Clr_mat_name()
{ //alert("hi");
var item_code= document.getElementById("item_code").value; 
//alert(location);  
var cnt_dtl_ary="";
if (location=="")
  {
  document.getElementById("item_code").value=""; 
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
  	/*x ="<option>--Select Customer Name--</option>"*/
	x= x + xmlhttp.responseText;
	x=x.replace("|$|","");
	//alert(x);
	document.getElementById("item_code").innerHTML=x;
	var add_dtls_length=x.split("_");
	var add_dtls=x.split("_");//alert(add_dtls);
	var add_dtls_length1= add_dtls_length[add_dtls_length.length -1];
		//	document.getElementById("hdn_cnt_dtls").value=cnt_dtl_ary;
		//	split_id=x.split("_");
		var code=add_dtls[0];//alert(code);
		var code1=add_dtls[1];//alert(code1);
		var code2=add_dtls[2];//alert(code2);
		var code3=add_dtls[3];//alert(code3);
		var code4=add_dtls[4];//alert(code4);
		var code5=add_dtls[5];//alert(code5);
	var str =code.replace(\'undefined\',\'\');//alert(str);
	var str1 =code1.replace(\'undefined\',\'\');//alert(str1);
	var str2 =code2.replace(\'undefined\',\'\');//alert(str2);
	var str3 =code3.replace(\'undefined\',\'\');//alert(str3);
	var str4 =code4.replace(\'undefined\',\'\');//alert(str4);
	var str5 =code5.replace(\'undefined\',\'\');//alert(str5);
	document.getElementById("item_name").value=str;
	document.getElementById("materialPrice").value=str3;
	document.getElementById("item_category").value=str1;
	document.getElementById("item_category_code").value=str2;
			document.getElementById("availableQuantity").value=str4;
			document.getElementById("item_code").innerHTML=add_dtls_length1;

	   }
    }
  }
xmlhttp.open("GET","ajax_location.php?item_code="+item_code,true);
xmlhttp.send();


}
</script>
 <script>
$(document).ready(function() {	
			
$("#addOutward").click(function(){ 
				var fields=["outward_entry_no","date_of_entry","to_name","purpose","vehicle_no","to_address","item_name","item_code","item_category","item_category_code","quantity","materialPrice"];
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
              FormName= document.outwardReg;
  			  FormName.method= "POST";
              FormName.submit(); 
			                 });
							 
$("#back").click(function(){
window.history.back();

});
 });
		
		// calendar in datepicker
			/*$(function(dateofEntry) {
				//alert("test");
				$( "#dateofEntry" ).datepicker({
					altField: "#validity",
					altFormat: "yy-mm-dd"
				});
			});
			$(function(dcDate) {
				//alert("test");
				$( "#dcDate" ).datepicker({
					altField: "#validity",
					altFormat: "yy-mm-dd"
				});
			});*/
// picker closed
</script>
<script>
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
function quantity_check()
{ 
var available_quantity=document.getElementById("availableQuantity").value;
var required_quantity=document.getElementById("quantity").value;  
if(parseInt(available_quantity)<parseInt(required_quantity))
{
		document.getElementById("quantity").value="";
		alert("Required Quantity not Available");
		
		}
}

function createWindow(parameter) {	
		dhxWins = new dhtmlXWindows();
		dhxWins.enableAutoViewport(true);
		dhxWins.attachViewportTo("std");
		dhxWins.setImagePath("./codebase/imgs/");
	
switch(parameter)
{

case "window_mat_name":
		w1 = dhxWins.createWindow("w1", 260, 100, 500, 250);
		w1.setText("dhtmlxWindow");
		w1.button("close").enable();
		w1.button("minmax1").disable();
		w1.progressOn();
		w1.setText("Material List");
		w1.attachURL("./stock_window.php");
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
</script>
<script>	 
$(document).on("click", ".fa-trash", function () {
     var outward_entry_no = $(this).data(\'id\');
     $(".modal-body #hdnDeloutward_entry_no").val(outward_entry_no);
});

		
		function deleteCats(CatIdent){
 if(confirm("Are you sure to Delete this Content?")){
  FormName		= document.outwardReg;
   //var gate = document.getElementById(\'gate_entry_id\').value;
  FormName.action= "./outwardList.php?outward_entry_no="+CatIdent;
  
  FormName.submit();
 }
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

	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="dhtmlxMessage/codebase/dhtmlxcalendar.js" ></script>
<script type="text/javascript" src="./codebase/dhtmlxcalendar.js"></script>
<script type="text/javascript" src="./codebase/dhtmlxcommon.js"></script>	
<script src="jquery/jquery.ui.datepicker.js"></script>
<script type=\'text/javascript\' src=\'./auto-complete/jquery.metadata.js\'></script>
<script type=\'text/javascript\' src=\'./auto-complete/jquery.auto-complete.js?<?= mktime() ?>\'></script>
<script type=\'text/javascript\' src=\'./auto-complete/js.js?<?= mktime() ?>\'></script>
	<link rel=\'stylesheet\' type=\'text/css\' href=\'auto-complete/jquery.auto-complete.css?<?= mktime() ?>\' />
	<script type="text/javascript" src=\'./dhtmlxMessage/codebase/dhtmlxmessage.js\'></script>
<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/>
<link rel="stylesheet" type="text/css" href="css/datepickier_main.css">
	 	    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
	  		<link rel="stylesheet" href="./codebase/dhtmlxcalendar.css" type="text/css">
			<link rel="stylesheet" href="./codebase/dhtmlxcalendar_dhx_skyblue.css" type="text/css"> 
			<link rel="stylesheet" href="./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css">
	
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