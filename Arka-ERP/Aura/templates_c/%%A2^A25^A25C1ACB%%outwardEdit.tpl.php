<?php /* Smarty version 2.6.25, created on 2017-10-03 16:41:15
         compiled from outwardEdit.tpl */ ?>

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
                          <h5 style="padding-left:40%;">Edit Outward Details</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                               
                            </div>
                        </div>
                        <div class="ibox-content"><body onLoad="doOnLoad();">
                            <form method="post"  name="outwardUpdate" id="outwardUpdate" class="form-horizontal">
							<input type="hidden"  id="hdAction"  name="hdAction" />
                            <?php $_from = $this->_tpl_vars['MatList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDet']):
?>
							<div class="ibox-title">
                          <h5  style="padding-left:40%;">Material Info:</h5>
						  </div>
							   	 <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Outward Entry No :</label>
                               <div class="col-md-4"  id="erroutwardEntryNo"> <input type="text" id="outwardEntryNo" name="outwardEntryNo" class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['outward_entry_no']; ?>
"  autocomplete="off" readonly="true">						</div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">Date Of Entry:</label>
							   <div class="col-md-4" id="errdateofEntry"> <input type="text"  id="dateofEntry"  name="dateofEntry" class="form-control" maxlength="19" value="<?php echo $this->_tpl_vars['ListDet']['date_of_entry']; ?>
" autocomplete="off"></div>
							   </div>
							    <!--<div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">DC No:</label>
                               <div class="col-md-4"  id="errdcNo"> <input type="text" id="dcNo" name="dcNo" class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['dc_no']; ?>
" autocomplete="off">						</div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">DC Date:</label>
							   <div class="col-md-4" id="errdcDate"> <input type="text"  id="dcDate"  name="dcDate" class="form-control" maxlength="19" value="<?php echo $this->_tpl_vars['ListDet']['dc_date']; ?>
" autocomplete="off"></div>
							   </div>-->
							    <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">To Name:</label>
                               <div class="col-md-4"  id="errtoName"> <input type="text" id="toName" name="toName" class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['to_name']; ?>
" autocomplete="off">						</div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">Purpose:</label>
							   <div class="col-md-4" id="errpurpose">
							   <select class="form-control" name="purpose" id="purpose" value="<?php echo $this->_tpl_vars['ListDet']['purpose']; ?>
" autocomplete="off">
							   <?php if ($this->_tpl_vars['ListDet']['purpose'] == 'Sales'): ?>
  								<option value="<?php echo $this->_tpl_vars['ListDet']['purpose']; ?>
" selected="selected" ><?php echo $this->_tpl_vars['ListDet']['purpose']; ?>
</option>
								<option value="Scrap">Used</option>
								<option value="Scrap">Scrap</option>
								<option value="Service">Service</option>
							   <?php elseif ($this->_tpl_vars['ListDet']['purpose'] == 'Used'): ?>
  								<option value="<?php echo $this->_tpl_vars['ListDet']['purpose']; ?>
" selected="selected" ><?php echo $this->_tpl_vars['ListDet']['purpose']; ?>
</option>
								<option value="Sales">Sales</option>
								<option value="Scrap">Scrap</option>
								<option value="Service">Service</option>
								<?php elseif ($this->_tpl_vars['ListDet']['purpose'] == 'Scrap'): ?>
								<option value="<?php echo $this->_tpl_vars['ListDet']['purpose']; ?>
" selected="selected"><?php echo $this->_tpl_vars['ListDet']['purpose']; ?>
</option>
								<option value="Sales">Sales</option>
								<option value="Used" >Used</option>
								<option value="Service">Service</option>
								<?php elseif ($this->_tpl_vars['ListDet']['purpose'] == 'Service'): ?>
								<option value="<?php echo $this->_tpl_vars['ListDet']['purpose']; ?>
" selected="selected"><?php echo $this->_tpl_vars['ListDet']['purpose']; ?>
</option><br>
								<option value="Sales">Sales</option>
								<option value="Used" >Used</option>
								<option value="Scrap">Scrap</option>
											  <?php endif; ?> 
											</select>
											</div>
							   </div>
							    <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">To Address:</label>
                               <div class="col-md-4"  id="errtoAddress"> <input type="text" id="toAddress" name="toAddress" class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['to_address']; ?>
" autocomplete="off">						</div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">Vehicle No:</label>
							   <div class="col-md-4" id="errvehicleNo"> <input type="text"  id="vehicleNo"  name="vehicleNo" class="form-control" maxlength="19"    value="<?php echo $this->_tpl_vars['ListDet']['vehicle_no']; ?>
" autocomplete="off"></div>
							   </div>
							   <div class="ibox-title">
                          <h5  style="padding-left:40%;">Material Detail:</h5>
						  </div>
								 <div class="form-group">
							 <label class="col-sm-2 control-label" style="text-align:left;">Location:</label>
                               <div class="col-md-4" id="errlocation"> <input type="text" id="location" name="location"  placeholder="Select Location !!!" value="<?php echo $this->_supers['post']['location']; ?>
" class="form-control" autocomplete="Off"></a>	</div>

							   <label class="col-sm-2 control-label" style="text-align:left;">Material Name:</label>
                               <div class="col-md-4" id="erritem_name"> <input type="text" id="item_name" name="item_name" size="29" value="<?php echo $this->_supers['post']['item_name']; ?>
" class="form-control" autocomplete="Off" readonly="true"></a>	</div>
							   
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
" class="form-control" autocomplete="off" onKeyUp="numericFilter(this);qty_check(this.value);">						</div>
							   
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
							   <?php endforeach; endif; unset($_from); ?>
							   	<br/>
									  <div align="center">
                                        <input type="button" class="btn btn-primary" id="upDateOutward" onClick="upDateOutward_fun();" value="UPDATE">
										<button class="btn btn-primary" type="button" id="addOutward">RESET</button>
										<button class="btn btn-white" type="button" name="back" id="back">CANCEL</button>
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
function closeit(val,val2,val3,val4,val5,val6){     //alert(val); alert(val2); alert(val3); alert(val4); alert(val5); alert(val6);
	parent.document.forms[\'outwardUpdate\'].elements[\'item_name\'].value=val;
	parent.document.forms[\'outwardUpdate\'].elements[\'item_code\'].value=val2;
	parent.document.forms[\'outwardUpdate\'].elements[\'item_category\'].value=val3;
	parent.document.forms[\'outwardUpdate\'].elements[\'item_category_code\'].value=val4;
	parent.document.forms[\'outwardUpdate\'].elements[\'availableQuantity\'].value=val5;
	parent.document.forms[\'outwardUpdate\'].elements[\'materialPrice\'].value=val6;

		
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
 <script type="text/javascript">
function Fill_Name_of_Clr()
{ 
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
<script type="text/javascript">
function qty_check()
{ //alert("hi");
var available_quantity=document.getElementById("availableQuantity").value;
var required_quantity=document.getElementById("quantity").value;  
if(parseInt(available_quantity)<parseInt(required_quantity))
{
		document.getElementById("quantity").value="";
		alert("Required Quantity not Available");
	}
}	
</script>
'; ?>


 <table class="table table-bordered" >
    <form name="SiteMgmt" method="post" >
    <!--<input type="hidden" name="a" value="search" >-->
					<tr>
				    <td colspan="2" align="right"><?php echo $this->_tpl_vars['LinkPage']; ?>
<?php echo $this->_tpl_vars['PerPageNavigation']; ?>
</td>
				    </tr>
    <tr><td>
       <table width="100%" border="1PX solid black" cellspacing=0 cellpadding=1 class="table table-bordered"  id="table" >
        <tr >
	        <th width="30" >&nbsp;&nbsp;S No.</th>
	        <th width="50" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Material Name</th>
			<th width="50" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Material Code</th>
	       <th width="50">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Material Category Code</th>
		   <th width="50">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Material Category</th>
		   <th width="50" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quantity</th>
		   <th width="50" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Price</th>
		   
        </tr>
		 <!-- <tr>
                <td align="center" bgcolor="#CCFFFF">&nbsp;</td>
                <td align="center" bgcolor="#CCFFFF"><input type="text" id="supplier_name" name="supplier_name" size="45" autocomplete="Off"><input id="search" name="search" value="" size="10" class="btn" type="submit" style="visibility:hidden"></td>
				<td align="center" bgcolor="#CCFFFF"><input type="text" id="supplier_code" name="supplier_code" size="23" autocomplete="Off"><input id="search" name="search" value="" size="10" class="btn" type="submit" style="visibility:hidden"></td>
            </tr>-->
			
        <?php $_from = $this->_tpl_vars['PageListMat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListCus']):
?>
            <tr >          
                <td align="center" title="">
                  <a href="#."  onClick="closeit('<?php echo $this->_tpl_vars['ListCus']['material_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['material_code']; ?>
','<?php echo $this->_tpl_vars['ListCus']['item_category_code']; ?>
','<?php echo $this->_tpl_vars['ListCus']['material_category']; ?>
','<?php echo $this->_tpl_vars['ListCus']['quantity']; ?>
','<?php echo $this->_tpl_vars['ListCus']['unit_price']; ?>
');"><?php echo $this->_tpl_vars['i']++; ?>
</a></td>
                <td align="left"><a href="#."  onClick="closeit('<?php echo $this->_tpl_vars['ListCus']['material_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['material_code']; ?>
','<?php echo $this->_tpl_vars['ListCus']['item_category_code']; ?>
','<?php echo $this->_tpl_vars['ListCus']['material_category']; ?>
','<?php echo $this->_tpl_vars['ListCus']['quantity']; ?>
','<?php echo $this->_tpl_vars['ListCus']['unit_price']; ?>
');"><?php echo $this->_tpl_vars['ListCus']['material_name']; ?>
</a></td>
				<td align="left"><a href="#."  onClick="closeit('<?php echo $this->_tpl_vars['ListCus']['material_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['material_code']; ?>
','<?php echo $this->_tpl_vars['ListCus']['item_category_code']; ?>
','<?php echo $this->_tpl_vars['ListCus']['material_category']; ?>
','<?php echo $this->_tpl_vars['ListCus']['quantity']; ?>
','<?php echo $this->_tpl_vars['ListCus']['unit_price']; ?>
');"><?php echo $this->_tpl_vars['ListCus']['material_code']; ?>
</a></td>
				<td align="left"><a href="#."  onClick="closeit('<?php echo $this->_tpl_vars['ListCus']['material_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['material_code']; ?>
','<?php echo $this->_tpl_vars['ListCus']['item_category_code']; ?>
','<?php echo $this->_tpl_vars['ListCus']['material_category']; ?>
','<?php echo $this->_tpl_vars['ListCus']['quantity']; ?>
','<?php echo $this->_tpl_vars['ListCus']['unit_price']; ?>
');"><?php echo $this->_tpl_vars['ListCus']['item_category_code']; ?>
</a></td>
				<td align="left"><a href="#."  onClick="closeit('<?php echo $this->_tpl_vars['ListCus']['material_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['material_code']; ?>
','<?php echo $this->_tpl_vars['ListCus']['item_category_code']; ?>
','<?php echo $this->_tpl_vars['ListCus']['material_category']; ?>
','<?php echo $this->_tpl_vars['ListCus']['quantity']; ?>
','<?php echo $this->_tpl_vars['ListCus']['unit_price']; ?>
');"><?php echo $this->_tpl_vars['ListCus']['material_category']; ?>
</a></td>
				<td align="left"><a href="#."  onClick="closeit('<?php echo $this->_tpl_vars['ListCus']['material_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['material_code']; ?>
','<?php echo $this->_tpl_vars['ListCus']['item_category_code']; ?>
','<?php echo $this->_tpl_vars['ListCus']['material_category']; ?>
','<?php echo $this->_tpl_vars['ListCus']['quantity']; ?>
','<?php echo $this->_tpl_vars['ListCus']['unit_price']; ?>
');"><?php echo $this->_tpl_vars['ListCus']['quantity']; ?>
</a></td>
				<td align="left"><a href="#."  onClick="closeit('<?php echo $this->_tpl_vars['ListCus']['material_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['material_code']; ?>
','<?php echo $this->_tpl_vars['ListCus']['item_category_code']; ?>
','<?php echo $this->_tpl_vars['ListCus']['material_category']; ?>
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
			<!--<th width="20" align="center" >SL.No </th>-->
			<th width="20" align="center" >Outward Entry No </th>
	        <th width="35" align="center">Material Name</th>
			<th width="35" align="center">Material Category</th>
			<th width="35" align="center">Material Code</th>
	        <th width="25" align="center">Quantity</th>
			<th width="25" align="center">Price</th>
			<!--<th width="25" align="center">Total</th>-->
			<th width="20" align="center">Action</th>
            </tr>
			
			
		<?php $this->assign('i', '1'); ?>
		             <?php $_from = $this->_tpl_vars['outward_details_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDet']):
?>        
                <tr>
				<!--<td><?php echo $this->_tpl_vars['i']++; ?>
</td>-->
                <td align="center">  <a title="Outward Entry No" ><?php echo $this->_tpl_vars['ListDet']['outward_entry_no']; ?>
</a></td>
				<td align="center">  <a title="Material Name" ><?php echo $this->_tpl_vars['ListDet']['material_name']; ?>
</a>&nbsp;</td>
				<td align="center">  <a title="Material Category"><?php echo $this->_tpl_vars['ListDet']['material_category']; ?>
</a></td>
                <td  align="center">  <a title="Material Code" ><?php echo $this->_tpl_vars['ListDet']['material_code']; ?>
</a></td>
                <td  align="center">  <a title="Quantity" ><?php echo $this->_tpl_vars['ListDet']['quantity']; ?>
</a></td>
				<td  align="center">  <a title="Price" ><?php echo $this->_tpl_vars['ListDet']['material_price']; ?>
</a></td>
				<?php $this->assign('total_price', ($this->_tpl_vars['ListDet']['quantity']*$this->_tpl_vars['ListDet']['material_price'])); ?>
				<!--<td  align="right">  <a title="Price" ><?php echo $this->_tpl_vars['total_price']; ?>
</a></td>-->
				
				<!--/*<td class="nohover" align="center"><a href="#"><img src="images/icons/delete.png" border="0" align="absmiddle" alt="Delete" onClick="Javascript:deleteCats('<?php echo $this->_tpl_vars['details_list']['outward_entry_no']; ?>
','<?php echo $this->_tpl_vars['details_list']['sl_no']; ?>
')"  title="Delete">	</a></td>*/-->	
				<td class="nohover" align="center">	&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" class="fa fa-trash" onClick="deleteCats('<?php echo $this->_tpl_vars['ListDet']['outward_entry_no']; ?>
','<?php echo $this->_tpl_vars['ListDet']['sl_no']; ?>
');"></a></td>

															
            
			 <?php endforeach; else: ?>
			<tr>
			<td height="10" colspan="16" align="center"><img src="images/warning.gif" border="0">&nbsp;<h5 style="color:#FF0000">NO Record Found...</h5></td>
			</tr>
			<?php endif; unset($_from); ?>
			</tr>
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
				<link rel="stylesheet" type="text/css" href="css/datepickier_main.css">
				<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
				<link rel="stylesheet" href="./codebase/dhtmlxcalendar.css" type="text/css">
				<link rel="stylesheet" href="./codebase/dhtmlxcalendar_dhx_skyblue.css" type="text/css"> 
				<link rel="stylesheet" href="./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/>
				<link rel="stylesheet" type="text/css" href="css/datepicker.css">
				<link rel=\'stylesheet\' type=\'text/css\' href=\'auto-complete/jquery.auto-complete.css?<?= mktime() ?>\' />
				
				<script type="text/javascript" src="dhtmlxMessage/codebase/dhtmlxcalendar.js" ></script>
				<script type="text/javascript" src="./codebase/dhtmlxcalendar.js"></script>
				<script type="text/javascript" src="./codebase/dhtmlxcommon.js"></script>
				<script type="text/javascript" src=\'./dhtmlxMessage/codebase/dhtmlxmessage.js\'></script>
				<script src="jquery/jquery.ui.datepicker.js"></script>
				<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
				<script type=\'text/javascript\' src=\'./auto-complete/jquery.metadata.js\'></script>
				<script type=\'text/javascript\' src=\'./auto-complete/jquery.auto-complete.js?<?= mktime() ?>\'></script>
				<script type=\'text/javascript\' src=\'./auto-complete/js.js?<?= mktime() ?>\'></script>

		<script type="text/javascript">
		function getval()
        {
		var dateofEntry,dcDate;
		dateofEntry=document.getElementById("dateofEntry").value;
		dcDate=document.getElementById("dcDate").value;
		if(dateofEntry=="" || dcDate=="")
		{
			alert("Please Specify Date");
			return false;
		}
		
        }	
	var myCalendar;
function doOnLoad() {
    
    var dateofEntry;
	dateofEntry=new Date();
    myCalendar = new dhtmlXCalendarObject(["dateofEntry"]);
	myCalendar = new dhtmlXCalendarObject(["dcDate"]);
   
}	
		
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
</script>
<script type="text/javascript">
        $(document).ready(function() {	
		
      
$("#back").click(function(){
window.history.back();
});
		 });
</script>
<script type="text/javascript">
function upDateOutward_fun()
 { 
			var fields=["outwardEntryNo","dateofEntry","toName","purpose","toAddress","vehicleNo","location","item_name","item_code","item_category","item_category_code","quantity","availableQuantity","materialPrice"];
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
              FormName= document.outwardUpdate;
  			  FormName.method= "POST";
              FormName.submit(); 
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