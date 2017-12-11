<?php /* Smarty version 2.6.25, created on 2017-11-29 15:17:06
         compiled from inward_Reg.tpl */ ?>
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
                          <h5  style="padding-left:40%;">Inward Registration Form</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content"><body onLoad="doOnLoad();">
                            <form method="post" class="form-horizontal" name="inwardReg" id="inwardReg">
							<input type="hidden" id="hdAction" name="hdAction" />
							<input type="hidden" id="hdn_cnt_dtls" name="hdn_cnt_dtls" value="">
							<div class="" style="height:40px;">
                          <h5  style="padding-left:40%;font-size:14px;">New Material Inward Master</h5>
						  </div>
						  <?php if ($this->_tpl_vars['LDList2'] == ""): ?>
							   	 <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Inward Entry Id:</label>
                               <div class="col-md-4"  id="errinward_entry_id"> <input type="text" id="inward_entry_id" name="inward_entry_id" class="form-control" value="<?php echo $this->_tpl_vars['inward_entry_id']; ?>
" autocomplete="off" readonly="true"></div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">Date of Entry:</label>
							   <div class="col-md-4" id="errdate_of_entry"> <input type="text" id="date_of_entry" name="date_of_entry" class="form-control" value="<?php echo $this->_supers['post']['date_of_entry']; ?>
" readonly="true" maxlength="19" autocomplete="off" placeholder="select DOE!"></div>
							   </div>
							    <!--<div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">DC No:</label>
                               <div class="col-md-4"  id="errdc_no"><input type="text" id="dc_no" name="dc_no" class="form-control" value="<?php echo $this->_supers['post']['dc_no']; ?>
" autocomplete="off">						</div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">DC Date:</label>
							   <div class="col-md-4" id="errdc_date"> <input type="text" id="dc_date" name="dc_date" class="form-control" maxlength="19" value="<?php echo $this->_supers['post']['dc_date']; ?>
" readonly="true" autocomplete="off" placeholder="select Dc Date!"></div>
							   </div>-->
							    <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Invoice No:</label>
                               <div class="col-md-4"  id="errinvoice_no"> <input type="text" id="invoice_no" name="invoice_no" class="form-control" value="<?php echo $this->_supers['post']['invoice_no']; ?>
" autocomplete="off">						</div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">Invoice Date:</label>
							   <div class="col-md-4" id="errinvoice_date"> <input type="text" id="invoice_date" name="invoice_date" value="<?php echo $this->_supers['post']['invoice_date']; ?>
" class="form-control" readonly="true" maxlength="19" autocomplete="off" placeholder="select Invoice Date!"></div>
							   </div>
							    <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Supplier Name:</label>
                               <div class="col-md-4" id="errsupplier_name"><input type="text" id="supplier_name" name="supplier_name"  value="<?php echo $this->_supers['post']['supplier_name']; ?>
"class="form-control" autocomplete="off" data-toggle="modal" data-target="#myModal" readonly="true" placeholder="Search"></a></div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">Supplier Code:</label>
							   <div class="col-md-4" id="errsupplier_code"> <input type="text"  id="supplier_code" value="<?php echo $this->_supers['post']['supplier_code']; ?>
"  name="supplier_code" class="form-control"  autocomplete="off" readonly="" onClick="supplier_validation();"></div>
							   </div>
							    <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Frieght Charges:</label>
                               <div class="col-md-4"  id="errfrieght_charges"> <input type="text" id="frieght_charges" name="frieght_charges" value="<?php echo $this->_supers['post']['frieght_charges']; ?>
" class="form-control" autocomplete="off" onKeyUp="numeric_filter(this),cost_calculation()"></div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">Location:</label>
							   <div class="col-md-4" id="errlocation">
							   <select class="form-control" id="location" name="location"  value="<?php echo $this->_supers['post']['location']; ?>
" >
  											  <option value="0">--- Select Location ---</option>
											  <option id="PAT" name="PAT" value="PAT">PAT</option>
											  <option id="WAV" name="WAV" value="WAV" >WAV</option>
											  <option id="TAD" name="TAD" value="TAD" >TAD</option>
											</select></div>
							   
							   </div> <?php endif; ?>
							   <?php if ($this->_tpl_vars['LDList2'] != ""): ?>
<?php $_from = $this->_tpl_vars['LDList2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['master_dtls']):
?>
							   <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Inward Entry Id:</label>
                               <div class="col-md-4"  id="errinward_entry_id"> <input type="text" id="inward_entry_id" name="inward_entry_id" class="form-control" value="<?php echo $this->_tpl_vars['master_dtls']['inward_entry_id']; ?>
" autocomplete="off" placeholder="select DOE!"></div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">Date of Entry:</label>
							   <div class="col-md-4" id="errdate_of_entry"> <input type="text" id="date_of_entry" name="date_of_entry" class="form-control" value="<?php if ($this->_tpl_vars['master_dtls']['date_of_entry'] == 0000 -00 -00): ?><?php echo ""; ?><?php else: ?><?php echo $this->_tpl_vars['master_dtls']['date_of_entry']; ?>
<?php endif; ?>" readonly="true" maxlength="19" autocomplete="off"></div>
							   </div>
							    <!--<div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">DC No:</label>
                               <div class="col-md-4"  id="errdc_no"> <input type="text" id="dc_no" name="dc_no" class="form-control" value="<?php echo $this->_tpl_vars['master_dtls']['dc_no']; ?>
" autocomplete="off">						</div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">DC Date:</label>
							   <div class="col-md-4" id="errdc_date"> <input type="text" id="dc_date" name="dc_date" class="form-control" maxlength="19" value="<?php if ($this->_tpl_vars['master_dtls']['dc_date'] == 0000 -00 -00): ?><?php echo ""; ?><?php else: ?><?php echo $this->_tpl_vars['master_dtls']['dc_date']; ?>
<?php endif; ?>" readonly="true" autocomplete="off" placeholder="select Dc Date!"></div>
							   </div>-->
							    <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Invoice No:</label>
                               <div class="col-md-4"  id="errinvoice_no"> <input type="text" id="invoice_no" name="invoice_no" class="form-control" value="<?php echo $this->_tpl_vars['master_dtls']['invoice_no']; ?>
" autocomplete="off">						</div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">Invoice Date:</label>
							   <div class="col-md-4" id="errinvoice_date"> <input type="text" id="invoice_date" name="invoice_date" value="<?php if ($this->_tpl_vars['master_dtls']['invoice_date'] == 0000 -00 -00): ?><?php echo ""; ?><?php else: ?><?php echo $this->_tpl_vars['master_dtls']['invoice_date']; ?>
<?php endif; ?>" class="form-control" readonly="true" maxlength="19" autocomplete="off" placeholder="select Invoice Date!"></div>
							   </div>
							    <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Supplier Name:</label>
                               <div class="col-md-4" id="errsupplier_name"><input type="text" id="supplier_name" name="supplier_name"  value="<?php echo $this->_tpl_vars['master_dtls']['supplier_name']; ?>
"class="form-control" autocomplete="off" data-toggle="modal" data-target="#myModal" readonly="true" placeholder="Search"></a></div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">Supplier Code:</label>
							   <div class="col-md-4" id="errsupplier_code"> <input type="text"  id="supplier_code" value="<?php echo $this->_tpl_vars['master_dtls']['supplier_code']; ?>
"  name="supplier_code" class="form-control"  autocomplete="off" readonly="" onClick="supplier_validation();"></div>
							   </div>
							    <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Frieght Charges:</label>
                               <div class="col-md-4"  id="errfrieght_charges"> <input type="text" id="frieght_charges" name="frieght_charges" value="<?php echo $this->_tpl_vars['master_dtls']['frieght_charges']; ?>
" class="form-control" autocomplete="off" onKeyUp="numeric_filter(this),cost_calculation()"></div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">Location:</label>
							   <div class="col-md-4" id="errlocation">
							   <select class="form-control" id="location" name="location"  value="<?php echo $this->_tpl_vars['master_dtls']['location']; ?>
" >
							    <option id="WAV" name="WAV" value="<?php echo $this->_tpl_vars['master_dtls']['location']; ?>
"  selected="selected"><?php echo $this->_tpl_vars['master_dtls']['location']; ?>
</option>
  											    <option value="0">--- Select Location ---</option>
											  <option id="PAT" name="PAT" value="PAT" >Ambattur Pattaravakkam</option>
											  <option id="WAV" name="WAV" value="WAV" >Ambattur IE</option>
											  <option id="TAD" name="TAD" value="TAD" >TAD</option>
											</select></div>
						   
							   </div>
							   <?php endforeach; endif; unset($_from); ?>
	 <?php endif; ?>
								 <div class="ibox-content"></div>
							   <div class="" style="height:40px;">
                          <h5  style="padding-left:40%;font-size:14px;">New Material Inward Details</h5>
						  </div>
								 <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Material Name:</label>
                               <div class="col-md-4" id="erritem_name">  <input type="text" id="item_name" name="item_name" value="<?php echo $this->_supers['post']['item_name']; ?>
" class="form-control" placeholder="Search"></a></div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">Material Code:</label>
							   <div class="col-md-4" id="erritem_code"> <input type="text"  id="item_code"  name="item_code" class="form-control" maxlength="19" value="<?php echo $this->_supers['post']['item_code']; ?>
" autocomplete="off" readonly="true"></div>
							   </div>
							    <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Material Category:</label>
                               <div class="col-md-4"  id="errmcategory"> <input type="text" id="item_category" name="item_category" value="<?php echo $this->_supers['post']['item_category']; ?>
" class="form-control" autocomplete="off" readonly="true"></div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">Material Category Code:</label>
							   <div class="col-md-4" id="erritem_category_code"> <input type="text"  id="item_category_code"  name="item_category_code" class="form-control" maxlength="19" value="<?php echo $this->_supers['post']['item_category_code']; ?>
" autocomplete="off" readonly="true"></div>
							   </div>
							    <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Material Description:</label>
                               <div class="col-md-4"  id="erritem_description"> <input type="text" id="item_description" readonly="true" value="<?php echo $this->_supers['post']['item_description']; ?>
" name="item_description" class="form-control" ></div>
							   <label class="col-sm-2 control-label" style="text-align:left; ">Price:</label>
							   <div class="col-md-4" id="errprice"> <input type="text"  id="price"  name="price" class="form-control" maxlength="19" value="<?php echo $this->_supers['post']['price']; ?>
" readonly="true"></div>
							   </div>
							    <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Quantity:</label>
                               <div class="col-md-4"  id="errquantity"> <input type="text" id="quantity" name="quantity" value="<?php echo $this->_supers['post']['quantity']; ?>
" class="form-control" autocomplete="off" onKeyUp="numeric_filter(this),cost_calculations()">						</div>
							   <label class="col-sm-2 control-label" style="text-align:left; ">GST %:</label>
							   <div class="col-md-4" id="errgst"> <input type="text" id="gst" name="gst" class="form-control" maxlength="19" value="<?php echo $this->_supers['post']['gst']; ?>
" autocomplete="off" placeholder="Please Enter GST %" onKeyUp="gst_calculations();"></div>
							   </div>
							    <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left; ">Warranty Period:</label>
							   <div class="col-md-4" id="errwarranty_period"> <input type="text" id="warranty_period"  name="warranty_period" class="form-control" maxlength="19" value="<?php echo $this->_supers['post']['warranty_period']; ?>
" autocomplete="off"></div>
							   </div>
								  <input type="hidden" id="tot" name="tot" class="form-control" value="<?php echo $this->_supers['post']['tot']; ?>
" placeholder="Calculate Sub Total Amount">
								   <input type="hidden" id="gst_cal" name="gst_cal" class="form-control" value="<?php echo $this->_supers['post']['gst_cal']; ?>
" placeholder="Calculate GST Amount">
								   <input type="hidden" id="total_tax" name="total_tax" class="form-control" value="<?php echo $this->_supers['post']['total_tax']; ?>
" placeholder="Calculate Invoice Amount without FC">
								   <input type="hidden" id="total_amount_fc" name="total_amount_fc" class="form-control" value="<?php echo $this->_supers['post']['total_amount_fc']; ?>
" placeholder="Calculate Invoice Amount with FC">
								   <input type="hidden" id="created_by" name="created_by" class="form-control" value="<?php echo $this->_supers['session']['UserName']; ?>
">
								 <div align="center">
                                        <button class="btn btn-primary" type="submit" id="addInward">ADD INWARD</button>
										<button class="btn btn-primary" type="button" id="addInward">RESET</button>
										<button class="btn btn-white" type="submit" id="back" >CANCEL</button>
                                      </div>
									  </form>
									  <div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content animated bounceInRight">
                                        <div class="modal-body">
										<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
										<h2 class="modal-title" align="center">Supplier Details</h2>
										<!-- SEARCH FORM START -->
<div id="std">            
<!-- SEARCH FORM END -->
<?php echo '
<script type="text/javascript">
function closeit(val,val2){
	parent.document.forms[\'inwardReg\'].elements[\'supplier_name\'].value=val;
	parent.document.forms[\'inwardReg\'].elements[\'supplier_code\'].value=val2;
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

 <table class="table table-bordered">
    <form name="SiteMgmt" method="post" >
    <!--<input type="hidden" name="a" value="search" >-->
					<tr>
				    <td colspan="2" align="right"><?php echo $this->_tpl_vars['LinkPage2']; ?>
<?php echo $this->_tpl_vars['PerPageNavigation2']; ?>
</td>
				    </tr>
    <tr><td>
       <table width="100%" border="1PX solid black" cellspacing=0 cellpadding=1 class="table table-bordered"  id="table" >
        <tr >
	        <th width="30" align="center">&nbsp;&nbsp;S No.</th>
	        <th width="70" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Supplier Name</th>
			<th width="70" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Supplier Code</th>
	       
        </tr>
        <?php $_from = $this->_tpl_vars['PageList5']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListCus']):
?>
            <tr >          
                <td align="center" title="">
                  <a href="#."  onClick="closeit('<?php echo $this->_tpl_vars['ListCus']['vendor_company_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['vendor_id']; ?>
');"><?php echo $this->_tpl_vars['i']++; ?>
</a></td>
                <td align="left"><a  href="#." onClick="closeit('<?php echo $this->_tpl_vars['ListCus']['vendor_company_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['vendor_id']; ?>
');"><?php echo $this->_tpl_vars['ListCus']['vendor_company_name']; ?>
</a></td>
				<td align="left"><a  href="#." onClick="closeit('<?php echo $this->_tpl_vars['ListCus']['vendor_company_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['vendor_id']; ?>
');"><?php echo $this->_tpl_vars['ListCus']['vendor_id']; ?>
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
 <br />

 <center><button type="button" class="btn btn-primary" data-dismiss="modal">Close</button></center>
</div>
</div>
</div>
</div>
</div>


<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content" style="width:750px;">
        <div class="modal-header" style="background-color:#00CCFF;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Material Details</h4>
        </div>
		<div class="box-footer" align="right" style="margin-bottom:-55px; margin-right:50px;" >

		<input type="button" class="btn btn-info pull-center" onClick="assign_val();" data-dismiss="modal" value="submit">


					</div>
		<div id="standard_bar"  style="width:600px;height:80px;border:solid 1px #cfcfcf;" align="left"></div>
		<div class="box-footer" align="right">
</div>
		<iframe height="490px" width="100%" id="Requirement"  src="./inward_materials.php" style="border:1px;"></iframe>
        <div class="modal-body">

        </div>

      </div>
    </div>
  </div>







									  <br/>
									  <br />

	<table align="center" cellspacing="0" cellpadding="3" width="100%" border=0 class="table table-bordered">
 			<?php if ($this->_tpl_vars['ErrorMessage_on_not_selection'] != ""): ?>
	<tr> 
		<td class="errtxt" width=50%><img src="images/warning.gif" alt="Error:" style="padding: 0px 10px 4px 5px; vertical-align:middle" />         		  <?php echo $this->_tpl_vars['ErrorMessage_on_not_selection']; ?>
</td>
		<td class="error" width=50%></td>
	 </tr>

             <?php endif; ?>
			 
			
			 <?php if ($this->_tpl_vars['SuccessMessage_on_delete'] != ""): ?>
	<tr> 
		<td class="succs_text" width=50%> <?php echo $this->_tpl_vars['SuccessMessage_on_delete']; ?>
</td>
		<td  width=50%></td>
	 </tr>

             <?php endif; ?> 
			 
			 
					 <?php if ($this->_tpl_vars['ErrorMessage_on_delete'] != ""): ?>
	<tr> 
		<td class="errtxt" width=50%> <?php echo $this->_tpl_vars['ErrorMessage_on_delete']; ?>
</td>
		<td  width=50%></td>
	 </tr>

             <?php endif; ?> 	 
 
 
</table>
							   
		<?php if ($this->_tpl_vars['hide_criteria'] != ""): ?>
        <!--<table align="center" class="dtable" cellspacing="1" cellpadding="3" width="100%" border="1PX solid black">-->
<!--        <table align="center" class="table table-bordered" cellspacing="1" cellpadding="3" width="100%" border="1PX solid black">-->
		 <table class="table table-striped table-bordered table-hover  dataTables-example" width="100%"  >
		<tr>
		

	        <th ><center>Sl No</center></th>
	        <th ><center>Material Code</center></th>
	        <th ><center>Material Name</center></th>
			<th ><center>Price</center></th>
            <th ><center>Quantity</center></th>
			<th ><center>Amount</center></th>
			<th  ><center>Tax Per %</center></th>
			<th  ><center>Tax Value</center></th>
			<th ><center>Total</center></th>
<!--			<th ><center>Total with FC</center></th>
-->			<th ><center>Action</center></th>
        </tr>
    
	
        		
             <?php $_from = $this->_tpl_vars['inward_details_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['details_list']):
?>        
                <tr class="gradeX" id="<?php echo $this->_tpl_vars['k']++; ?>
">
    <?php $this->assign('quantity', ($this->_tpl_vars['details_list']['quantity'])); ?>
	<?php $this->assign('total_price', ($this->_tpl_vars['details_list']['quantity']*$this->_tpl_vars['details_list']['price'])); ?>
	<?php $this->assign('invoice_amount', ($this->_tpl_vars['total_price'])); ?>
	 		
                <td>  <a><?php echo $this->_tpl_vars['k']; ?>
</a></td>
                <td>  <a ><?php echo $this->_tpl_vars['details_list']['material_code']; ?>
</a></td>
				<td>  <a ><?php echo $this->_tpl_vars['details_list']['material_name']; ?>
</a></td>
                <td align="right">  <a ><?php echo $this->_tpl_vars['details_list']['price']; ?>
</a></td>
                <td>  <a ><?php echo $this->_tpl_vars['details_list']['quantity']; ?>
</a></td>
				<td align="right">  <a><?php echo $this->_tpl_vars['details_list']['tot']; ?>
</a></td>
				<td align="right">  <a><?php echo $this->_tpl_vars['details_list']['gst']; ?>
</a></td>
				<td align="right">  <a><?php echo $this->_tpl_vars['details_list']['gst_cal']; ?>
</a></td>
				<td align="right">  <a><?php echo $this->_tpl_vars['details_list']['total']; ?>
</a></td>
<!--				<td >  <a ><?php echo $this->_tpl_vars['details_list']['total_amount_fc']; ?>
</a></td>
--><td class="nohover" align="center">	<a href="#" class="fa fa-trash" onClick="deleteCats('<?php echo $this->_tpl_vars['details_list']['inward_entry_id']; ?>
','<?php echo $this->_tpl_vars['details_list']['sl_no']; ?>
');"></a></td>
            </tr>
			<?php endforeach; endif; unset($_from); ?>
			 <?php $_from = $this->_tpl_vars['execute_query2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['details_list']):
?>    
  			 <tr style=" border-left: none">
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td align="center">Sub Total:&nbsp;&nbsp;</td>
				<td align="right"><a><?php echo $this->_tpl_vars['details_list']['s_tot']; ?>
</a></td>
				<td align="center">Tax Amount:&nbsp;&nbsp;</td>
				<td align="right"><a><?php echo $this->_tpl_vars['execute_query3']['0']['gst_cal_tot']; ?>
</a></td>
				<td align="right">Invoice Amt:&nbsp;&nbsp;<a><?php echo $this->_tpl_vars['execute_query4']['0']['sum_total']; ?>
 </a></td>
<!--				<td >Invoice Amount FC:&nbsp;&nbsp;<a><?php echo $this->_tpl_vars['execute_query5']['0']['total_fc_amount']; ?>
</a></td>-->
<!--				<td align="right" id="total_invoice_amount_with_tax" name="total_invoice_amount_with_tax"> <a >&nbsp;</a></td>
-->				
				</tr>

				
			<!--	<?php $_from = $this->_tpl_vars['LDList2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['details']):
?>
			<input type="hidden" value="<?php echo $this->_tpl_vars['details']['tax_percentage']; ?>
">
	<?php $this->assign('tax_per', ($this->_tpl_vars['details_list']['tax_percentage'])); ?>
	
				<?php endforeach; endif; unset($_from); ?>-->
				<?php $this->assign('tax_per', ($this->_tpl_vars['execute_query4']['0']['sum_total']+$this->_tpl_vars['execute_query6']['0']['frieght_charges'])); ?>
			<?php $this->assign('f_amt', ($this->_tpl_vars['tax_per'])); ?>
				<tr style=" border-left: none">
				<td style="border: none"></td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none"></td>
				<td align="right">Grant Total:&nbsp;&nbsp;<a><?php echo $this->_tpl_vars['f_amt']; ?>
</a></td>				
				</tr>	
				<?php endforeach; endif; unset($_from); ?>			
        </table>
		<?php endif; ?>
		</td>
		</tr>
		</table>
				</body>	
                        </div>
                    </div>
                </div>
            </div>
        </div>  
		</div>
<?php echo '
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>

<script type="text/javascript">
function Fill_Name_of_Clr1()
{
var item_name= document.getElementById("item_name").value;
//alert(item_name);
//alert(material_code);
//var area= document.getElementById("area").value;
var cnt_dtl_ary="";
//var customer_name =document.getElementById("").value
if (item_name=="")
  {
  document.getElementById("item_name").value="";
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
	document.getElementById("item_name").innerHTML=x;
	var add_dtls_length=x.split("_").length;
	var add_dtls=x.split("_");
			document.getElementById("hdn_cnt_dtls").value=cnt_dtl_ary;
			split_id=x.split("|CUSID|");
			var code1=add_dtls[0];
			var code2=add_dtls[1];
			var code3=add_dtls[2];
			var code4=add_dtls[3];
			var code5=add_dtls[4];
	var str2 =code1.replace(\'undefined\',\'\');
	var str3 =code2.replace(\'undefined\',\'\');
	var str4 =code3.replace(\'undefined\',\'\');
	var str5 =code4.replace(\'undefined\',\'\');
	var str6 =code5.replace(\'undefined\',\'\');
		    document.getElementById("item_code").value=str2;
			document.getElementById("item_category").value=str3;
			document.getElementById("item_category_code").value=str4;
			document.getElementById("item_description").value=str5;
			document.getElementById("price").value=str6;
			document.getElementById("item_name").innerHTML=x;

	   }
    }
  }
xmlhttp.open("GET","ajax_materialname.php?item_name="+item_name,true);
xmlhttp.send();


} 
</script>


<script> function getval()
        {
		var date_of_entry,dcDate,invoiceDate;
		date_of_entry=document.getElementById("date_of_entry").value;
		dc_date=document.getElementById("dc_date").value;
		invoiceDate=document.getElementById("invoice_date").value;

		if(date_of_entry=="" || dc_date=="" ||invoiceDate=="")
		{
			alert("Please Specify Date");
			return false;
		}
		
        }	
	var myCalendar;
function doOnLoad() {
    
    var date_of_entry;
	date_of_entry=new Date();
    myCalendar = new dhtmlXCalendarObject(["date_of_entry"]);
	myCalendar = new dhtmlXCalendarObject(["dc_date"]);
   	myCalendar = new dhtmlXCalendarObject(["invoice_date"]);
    tatal_tax();
}	
        $(document).ready(function() {	
			
$("#addInward").click(function(){
				var fields=["inward_entry_id","date_of_entry","location","item_name","item_code","item_category_code","item_category","price","quantity"];
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
              FormName= document.inwardReg;
  			  FormName.method= "POST";
              FormName.submit(); 
			                 });

$("#back").click(function(){

window.history.back();

});

		
		 });
$(document).on("click", ".fa-trash", function () {
     var inward_entry_id = $(this).data(\'id\');
     $(".modal-body #hdnDelinward_entry_id").val(inward_entry_id);
});

		
		function deleteCats(CatIdent){
 if(confirm("Are you sure to Delete this Content?")){
  FormName		= document.inwardReg;
   //var gate = document.getElementById(\'gate_entry_id\').value;
  FormName.action= "./inwardList.php?inward_entry_id="+CatIdent;
  
  FormName.submit();
 }
 }
		 
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
			});
			$(function(invoiceDate) {
				//alert("test");
				$( "#invoiceDate" ).datepicker({
					altField: "#validity",
					altFormat: "yy-mm-dd"
				});
			});*/
// picker closed
</script>
<script>
function cost_calculation()
{
var invoice_amount=document.getElementById("invoice_amount").value;
var frieght_charges=document.getElementById("frieght_charges").value;
var tax=document.getElementById("tax").value;
document.getElementById("total").value=+invoice_amount+ +frieght_charges+ +tax;
}

function cost_calculations()
{
var quantity=document.getElementById("quantity").value;
var price=document.getElementById("price").value;
var to2=(quantity * price);
document.getElementById("tot").value=to2;    
}

function gst_calculations()
{ 
var tot=document.getElementById("tot").value;       
var gst=document.getElementById("gst").value;    
//var s_tot=document.getElementById("s_tot").value;  
//var gst_cal=document.getElementById("gst").value;  
document.getElementById("gst_cal").value=tot*gst/100;
}

function tatal_tax()
{
var frieght_charges=document.getElementById("frieght_charges").value;  
var s_tot=document.getElementById("s_tot").value;   
var gst_total=document.getElementById("gst_cal_tot").value;
//var total_tax=document.getElementById("total_tax").value;
document.getElementById("total_tax").value=+frieght_charges+ +s_tot+ +gst_total;
}


function numeric_filter(match_data)
{
match_data.value=match_data.value.replace(/[^.0-9]/ig,"");
}
</script>
<script> 
function supplier_validation() 
{
alert("Please select Supplier Name First!");
		/*dhtmlx.alert({
		title: "Error !",
        type:"alert-error",
		text: "Please select Supplier Name First!",
		
});*/
return false;
}
</script>
<script>
function select_sub_taxes(from_id) 
{ 
//alert(from_id);
service_tax=document.getElementById("serviceTax").checked; 
if(document.getElementById("serviceTax").checked==false)
{ 
document.getElementById("cess").checked=false;
document.getElementById("hCess").checked=false;
}
else if(document.getElementById("serviceTax").checked==true)
{
document.getElementById("cess").checked=true;
document.getElementById("hCess").checked=true;
}
if(from_id=="cess" || from_id=="hCess") 
{ 
alert("Please Check Or Uncheck Service Tax");
}

}
</script>
<script>
function select_response(from_id)
{
alert("Please Check Or Uncheck Service Tax First");
}
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

		 
	
function textFilter(data)
{
   data.value = data.value.replace(/[^ .a-z]/ig,"");
}
</script>
<script> 	
function createWindow(parameter) { 
 
		dhxWins = new dhtmlXWindows();
		dhxWins.enableAutoViewport(true);
		dhxWins.attachViewportTo("std");
		dhxWins.setImagePath("./codebase/imgs/");
		
switch(parameter)
{
case "window_supplier_name":
		w1 = dhxWins.createWindow("w1", 260, 100, 500, 450);
		w1.setText("dhtmlxWindow");
		w1.button("close").enable();
		w1.button("minmax1").disable();
		w1.progressOn();
		w1.setText("Supplier List");
		w1.attachURL("./supplier_reg_window.php");
break;
case "window_item_name":
		w2 = dhxWins.createWindow("w2", 260, 100, 700, 350);
		w2.setText("dhtmlxWindow");
		w2.button("close").enable();
		w2.button("minmax1").disable();
		w2.progressOn();
		w2.setText("Material List");
		w2.attachURL("./material_reg_window.php");
break;
	}	
	} 	
</script> 
	<script type="text/javascript" src="dhtmlxMessage/codebase/dhtmlxcalendar.js" ></script>
<script type="text/javascript" src="./codebase/dhtmlxcalendar.js"></script>
<script type="text/javascript" src="./codebase/dhtmlxcommon.js"></script>	
<script src="jquery/jquery.ui.datepicker.js"></script>
<script type=\'text/javascript\' src=\'./auto-complete/jquery.meTADta.js\'></script>
<script type=\'text/javascript\' src=\'./auto-complete/jquery.auto-complete.js?<?= mktime() ?>\'></script>
<script type=\'text/javascript\' src=\'./auto-complete/js.js?<?= mktime() ?>\'></script>
<link rel=\'stylesheet\' type=\'text/css\' href=\'auto-complete/jquery.auto-complete.css?<?= mktime() ?>\' />
	
	    

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
			<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/>
			<link rel="stylesheet" type="text/css" href="css/datepickier_main.css">
	 	    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
	  		<link rel="stylesheet" href="./codebase/dhtmlxcalendar.css" type="text/css">
			<link rel="stylesheet" href="./codebase/dhtmlxcalendar_dhx_skyblue.css" type="text/css"> 
			<link rel="stylesheet" href="./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css">
			
'; ?>