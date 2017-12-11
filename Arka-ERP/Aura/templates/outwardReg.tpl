        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
           <div class="row">
          {if $SuccessMessage1 neq ""}
			<div class="isa_success">
			<i class="fa fa-check"></i>
			{$SuccessMessage1}		 
			</div>
		 {/if}
		  {if $ErrorMessage neq ""}
			<div class="isa_error">
			<i class="fa fa-check"></i>
			{$ErrorMessage}		 
			</div>
		 {/if}
			
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
							{if $LDList2 neq ""}	
{foreach from=$LDList2 item=master_dtls}
							<input type="hidden" name="hdAction" id="hdAction" />
							<input type="hidden" id="hdn_cnt_dtls" name="hdn_cnt_dtls" value="">
							   	 <!--<div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Select Region:</label>
                               <div class="col-md-4"  id="errselect_region"> <input type="text" id="select_region" name="select_region" value="{$master_dtls.select_region}" class="form-control" autocomplete="off">						</div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">GSTIN:</label>
							   <div class="col-md-4" id="errgst_no"> <input type="text"  id="gst_no"  name="gst_no" value="{$master_dtls.gst_no}" class="form-control" maxlength="50" autocomplete="off"></div>
							   </div>-->
							    <!--<div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">ST No:</label>
                             <div class="col-md-4"  id="errst_nO"> <input type="text" id="st_no" name="st_no" value="{$master_dtls.st_no}" class="form-control" autocomplete="off">						</div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">CST No:</label>
				 			   <div class="col-md-4" id="errcst_no"> <input type="text" id="cst_no" name="cst_no" value="{$master_dtls.cst_no}" class="form-control" maxlength="19" autocomplete="off"></div>
							   </div>-->
							    
							   <div class="" style="height:40px;">
                          <h5  style="padding-left:40%;font-size:14px;">New Material Outward Master:</h5>
						  </div>
							   	 <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Outward Entry No :</label>
                               <div class="col-md-4"  id="erroutward_entry_no"> <input type="text" id="outward_entry_no" name="outward_entry_no" value="{$master_dtls.outward_entry_no}" class="form-control" autocomplete="off" readonly="true">						</div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">Date Of Entry:</label>
							   <div class="col-md-4" id="errdate_of_entry"> <input type="text" id="date_of_entry" name="date_of_entry" value="{$master_dtls.date_of_entry}" readonly="true" class="form-control" maxlength="19" autocomplete="off" placeholder="select DOE!"></div>
							   </div>
							    <!--<div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">DC No:</label>
                               <div class="col-md-4"  id="errdc_no"> <input type="text" id="dc_no" name="dc_no" value="{$master_dtls.dc_no}" class="form-control" autocomplete="off">						</div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">DC Date:</label>
							   <div class="col-md-4" id="errdc_date"> <input type="text" id="dc_date" name="dc_date" value="{$master_dtls.dc_date}" readonly="true" class="form-control" maxlength="19" autocomplete="off" placeholder="select DC Date!"></div>
							   </div>-->
							    <div class="form-group">
															   
							   <label class="col-sm-2 control-label" style="text-align:left; ">GSTIN:</label>
							   <div class="col-md-4" id="errgst_no"> <input type="text"  id="gst_no"  name="gst_no" value="{$master_dtls.gst_no}" class="form-control" maxlength="50" autocomplete="off"></div>

							   <label class="col-sm-2 control-label" style="text-align:left;">To Name:</label>
                               <div class="col-md-4"  id="errto_name"> <input type="text" id="to_name" name="to_name" value="{$master_dtls.to_name}" class="form-control" autocomplete="off">						</div>
							   </div>
							    <div class="form-group">
								  <label class="col-sm-2 control-label" style="text-align:left; ">Purpose:</label>
							   <div class="col-md-4" id="errpurpose" value="{$master_dtls.purpose}">
							   <select class="form-control" name="purpose" id="purpose" value="{$master_dtls.purpose}" autocomplete="off">
  											  <option id"{$master_dtls.purpose}" value="{$master_dtls.purpose}" selected="selected">{$master_dtls.purpose}</option>
											  <option value="0" >----- PURPOSE -----</option>
											  <option value="Sales" >Sales</option>
											  <option value="Used" >Used</option>
											  <option value="Scrap">Scrap</option>
											  <option value="Service">Service</option>
											</select>
											</div>
							   <label class="col-sm-2 control-label" style="text-align:left;">To Address:</label>
                               <div class="col-md-4"  id="errto_address"> <textarea id="to_address" name="to_address" class="form-control" autocomplete="off" rows="2" cols="5">{$master_dtls.to_address}</textarea>						</div>
							   </div>
							     <div class="form-group">
							    <label class="col-sm-2 control-label" style="text-align:left; ">Vehicle No:</label>
							   <div class="col-md-4" id="errvehicle_no"> <input type="text"  id="vehicle_no" name="vehicle_no" value="{$master_dtls.vehicle_no}" class="form-control" maxlength="19" autocomplete="off"></div>
							   </div>
							   {/foreach}
							   {/if}
							   
							   {if $LDList2 eq ""}	
							    <input type="hidden" name="hdAction" id="hdAction" />
							
							   	 <!--<div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Select Region:</label>
                               <div class="col-md-4"  id="errselect_region"> <input type="text" id="select_region" name="select_region" value="{$smarty.post.select_region}" class="form-control" autocomplete="off">						</div>
							   <label class="col-sm-2 control-label" style="text-align:left; ">GSTIN:</label>
							   <div class="col-md-4" id="errgst_no"> <input type="text"  id="gst_no"  name="gst_no" value="{$master_dtls.gst_no}" class="form-control" maxlength="50" autocomplete="off"></div>
							   </div>-->
							    <!--<div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">ST No:</label>
                               <div class="col-md-4"  id="errst_no"> <input type="text" id="st_no" name="st_no" value="{$smarty.post.st_no}" class="form-control" autocomplete="off">						</div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">CST No:</label>
				 			   <div class="col-md-4" id="errcst_no"> <input type="text" id="cst_no" name="cst_no" value="{$smarty.post.cst_no}" class="form-control" maxlength="19" autocomplete="off"></div>
							   </div>-->
							    
							   
							   <div class="" style="height:40px;">
                          <h5  style="padding-left:40%;font-size:14px;">New Material Outward Master:</h5>
						  </div>
							   	 <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Outward Entry No :</label>
                               <div class="col-md-4"  id="erroutward_entry_no"> <input type="text" id="outward_entry_no" name="outward_entry_no" value="{$outward_entry_no}" class="form-control" autocomplete="off" readonly="true">						</div>
							   
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">Date Of Entry:</label>
							   <div class="col-md-4" id="errdate_of_entry"> <input type="text" id="date_of_entry" name="date_of_entry" value="{$smarty.post.date_of_entry}" readonly="true" class="form-control" maxlength="19" autocomplete="off" placeholder="select DOE!"></div>
							   </div>
							    <!--<div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">DC No:</label>
                             <div class="col-md-4"  id="errdc_no"> <input type="text" id="dc_no" name="dc_no" value="{$smarty.post.dc_no}" class="form-control" autocomplete="off">						</div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">DC Date:</label>
							   <div class="col-md-4" id="errdc_date"> <input type="text" id="dc_date" name="dc_date" value="{$smarty.post.dc_date}" readonly="true" class="form-control" maxlength="19" autocomplete="off" placeholder="select DC Date!"></div>
							   </div>-->
							    <div class="form-group">
								<label class="col-sm-2 control-label" style="text-align:left; ">GSTIN:</label>
							   <div class="col-md-4" id="errgst_no"> <input type="text"  id="gst_no"  name="gst_no" value="{$master_dtls.gst_no}" class="form-control" maxlength="50" autocomplete="off"></div>

							   <label class="col-sm-2 control-label" style="text-align:left;">To Name:</label>
                               <div class="col-md-4"  id="errto_name"> <input type="text" id="to_name" name="to_name" value="{$smarty.post.to_name}" class="form-control" autocomplete="off">						</div>
							   </div>
							    <div class="form-group">
								<label class="col-sm-2 control-label" style="text-align:left; ">Purpose:</label>
							   <div class="col-md-4" id="errpurpose" value="{$smarty.post.purpose}">
							   <select class="form-control" name="purpose" id="purpose" value="{$smarty.post.purpose}" autocomplete="off">
  											  <option value="0" >----- PURPOSE -----</option>
											  <option value="Sales" >Sales</option>
											  <option value="Used" >Used</option>
											  <option value="Scrap">Scrap</option>
											  <option value="Service">Service</option>
											</select>
											</div>
							   <label class="col-sm-2 control-label" style="text-align:left; ">Vehicle No:</label>
							   <div class="col-md-4" id="errvehicle_no"> <input type="text"  id="vehicle_no" name="vehicle_no" value="{$smarty.post.vehicle_no}" class="form-control" maxlength="19" autocomplete="off"></div>
							   </div>
							   <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">To Address:</label>
                               <div class="col-md-4"  id="errto_address"> <textarea id="to_address" name="to_address" class="form-control" autocomplete="off" rows="2" cols="5">{$smarty.post.to_address}</textarea>						</div>
							    </div>
							    {/if}
								 <div class="ibox-content"></div>
							   <div class="" style="height:40px;">
                          <h5  style="padding-left:40%;font-size:14px;">Material Detail:</h5>
						  </div>
								 <div class="form-group">
							 <label class="col-sm-2 control-label" style="text-align:left;">Location:</label>
                               <div class="col-md-4" id="errlocation"> <input type="text" id="location" name="location"  placeholder="Select Location !!!" value="{$smarty.post.location}" class="form-control" autocomplete="Off"></a>	</div>

							   <label class="col-sm-2 control-label" style="text-align:left;">Material Name:</label>
                               <div class="col-md-4" id="erritem_name"> <input type="text" id="item_name" name="item_name" size="29" value="{$smarty.post.item_name}" class="form-control" autocomplete="Off"  data-toggle="modal" data-target="#myModal1" readonly="true"></a>	</div>
							   
							   </div>
							    <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left; ">Material Code:</label>
							   <div class="col-md-4" id="erritem_code"><select id="item_code" name="item_code" value="{$smarty.post.item_code}" class="form-control" maxlength="19" autocomplete="off" readonly="true" onChange="Fill_Name_of_Clr_mat_name(this.value);">
							   <option value="">---Select---</option>
							   </select></div>

							   <label class="col-sm-2 control-label" style="text-align:left; ">Material Category:</label>
							   <div class="col-md-4" id="erritem_category"> <input type="text"  id="item_category"  name="item_category" value="{$smarty.post.item_category}" class="form-control" maxlength="19" autocomplete="off" readonly="true"></div>
							   
							   </div>
							    <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left; ">Material Category Code:</label>
							   <div class="col-md-4" id="erritem_category_code"> <input type="text"  id="item_category_code" name="item_category_code" value="{$smarty.post.item_category_code}" class="form-control" maxlength="19" autocomplete="off" readonly="true"></div>

							   <label class="col-sm-2 control-label" style="text-align:left;">Quantity</label>
                               <div class="col-md-4"  id="errquantity"> <input type="text" id="quantity" name="quantity" value="{$smarty.post.quantity}" class="form-control" autocomplete="off" onKeyUp="numericFilter(this);quantity_check();">						</div>
							   
							   </div>
							    <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left; ">Available Quantity</label>
							   <div class="col-md-4" id="errsimNo"> <input type="text"  id="availableQuantity"  name="availableQuantity" value="{$smarty.post.availableQuantity}" class="form-control"  autocomplete="off" readonly="true"></div>

							   <label class="col-sm-2 control-label" style="text-align:left;">Material Price:</label>
                               <div class="col-md-4"  id="errmaterialPrice"> <input type="text" id="materialPrice" name="materialPrice" value="{$smarty.post.materialPrice}" class="form-control" autocomplete="off" readonly="true">						</div>
							   
							   
							   <div class="col-md-4" id="errwarrantyPeriod"> <input type="hidden"  id="warrantyPeriod"  name="warrantyPeriod" value="{$smarty.post.warrantyPeriod}" class="form-control" maxlength="19" autocomplete="off"></div>
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
{literal}
<script type="text/javascript">
function closeit(val,val2,val3,val4,val5,val6){
	parent.document.forms['outwardReg'].elements['item_name'].value=val;
	parent.document.forms['outwardReg'].elements['item_code'].value=val2;
	parent.document.forms['outwardReg'].elements['item_category'].value=val3;
	parent.document.forms['outwardReg'].elements['item_category_code'].value=val4;
	parent.document.forms['outwardReg'].elements['availableQuantity'].value=val5; //alert(val5);
	parent.document.forms['outwardReg'].elements['materialPrice'].value=val6; //alert(val6);
	document.getElementById("myModal").style.display="none";
//	parent.dhxWins.window("w1").close();
/*	var supplier_name = document.getElementById("supplier_name");
    var id = supplier_name.options[supplier_name.selectedIndex].value;
	alert('hi');*/
	
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
{/literal}

 <table class="table table-bordered" >
    <form name="SiteMgmt" method="post" >
    <!--<input type="hidden" name="a" value="search" >-->
					<tr >
				    <td colspan="2" align="right" onClick="get(this.value);" data-toggle="modal" data-target="#"><a href="#">{$LinkPage}{$PerPageNavigation}</a></td>
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
			
        {foreach from=$PageList2 item=ListCus}
            <tr  >          
                <td align="center" title="">
                  <a href="#."  onClick="closeit('{$ListCus.material_name}','{$ListCus.material_code}','{$ListCus.material_category}','{$ListCus.item_category_code}','{$ListCus.quantity}','{$ListCus.unit_price}');">{$i++}</a></td>
                <td  class="response" align="left"><a href="#."  onClick="closeit('{$ListCus.material_name}','{$ListCus.material_code}','{$ListCus.material_category}','{$ListCus.item_category_code}','{$ListCus.quantity}','{$ListCus.unit_price}');">{$ListCus.material_name}</a></td>
				<td class="response" align="left"><a href="#."  onClick="closeit('{$ListCus.material_name}','{$ListCus.material_code}','{$ListCus.material_category}','{$ListCus.item_category_code}','{$ListCus.quantity}','{$ListCus.unit_price}');">{$ListCus.material_code}</a></td>
				<td class="response" align="left"><a href="#."  onClick="closeit('{$ListCus.material_name}','{$ListCus.material_code}','{$ListCus.material_category}','{$ListCus.item_category_code}','{$ListCus.quantity}','{$ListCus.unit_price}');">{$ListCus.material_category}</a></td>
				<td class="response" align="left"><a href="#."  onClick="closeit('{$ListCus.material_name}','{$ListCus.material_code}','{$ListCus.material_category}','{$ListCus.item_category_code}','{$ListCus.quantity}','{$ListCus.unit_price}');">{$ListCus.item_category_code}</a></td>
				<td class="response" align="left"><a href="#."  onClick="closeit('{$ListCus.material_name}','{$ListCus.material_code}','{$ListCus.material_category}','{$ListCus.item_category_code}','{$ListCus.quantity}','{$ListCus.unit_price}');">{$ListCus.quantity}</a></td>
				<td class="response" align="left"><a href="#."  onClick="closeit('{$ListCus.material_name}','{$ListCus.material_code}','{$ListCus.material_category}','{$ListCus.item_category_code}','{$ListCus.quantity}','{$ListCus.unit_price}');">{$ListCus.unit_price}</a></td>
			
            </tr>
			{foreachelse}
			<tr>
			<td height="20" colspan="11" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
			</tr>
              {/foreach}	

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

	
				 {if $SuccessMessage_on_delete neq "" && $ErrorMessage eq ""}
	<tr> 
		<td class="succs_text" width=50%> {$SuccessMessage_on_delete}</td>
		<td  width=50%></td>
	 </tr>

             {/if} 
	
	

	
	
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
			
		{assign var="i" value="1"}
		             {foreach from=$outward_details_list item=details_list}        
                
				<td>{$i++}</td>
                <td align="center">  <a title="Outward Entry No" >{$details_list.outward_entry_no}</a></td>
				<td align="center">  <a title="Material Name" >{$details_list.material_name}</a>&nbsp;</td>
                <td  align="center">  <a title="Material Code" >{$details_list.material_code}</a></td>
				<td align="center">  <a title="Material Category">{$details_list.item_category_code}</a></td>
                <td align="center">  <a title="Material Category Code" >{$details_list.item_category_code}</a>&nbsp;</td>
                <td  align="center">  <a title="Quantity" >{$details_list.quantity}</a></td>
				<td  align="center">  <a title="Price" >{$details_list.material_price}</a></td>
				{assign var="total_price" value="`$details_list.quantity*$details_list.material_price`"}
				<td  align="right">  <a title="Price" >{$total_price}</a></td>
				
				<!--/*<td class="nohover" align="center"><a href="#"><img src="images/icons/delete.png" border="0" align="absmiddle" alt="Delete" onClick="Javascript:deleteCats('{$details_list.outward_entry_no}','{$details_list.sl_no}')"  title="Delete">	</a></td>*/-->	
				<td class="nohover" align="center">	&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" class="fa fa-trash" onClick="deleteCats('{$details_list.outward_entry_no}','{$details_list.sl_no}');"></a></td>

															
            </tr>
			{/foreach}
		</table>
		</table>
                        
						</body>
						</div>
                    </div>
                </div>
            </div>
        </div>
		 </div>
{literal}

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
	var str1 =code.replace('undefined','');//alert(str1);
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
	var str =code.replace('undefined','');//alert(str);
	var str1 =code1.replace('undefined','');//alert(str1);
	var str2 =code2.replace('undefined','');//alert(str2);
	var str3 =code3.replace('undefined','');//alert(str3);
	var str4 =code4.replace('undefined','');//alert(str4);
	var str5 =code5.replace('undefined','');//alert(str5);
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
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
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
     var outward_entry_no = $(this).data('id');
     $(".modal-body #hdnDeloutward_entry_no").val(outward_entry_no);
});

		
		function deleteCats(CatIdent){
 if(confirm("Are you sure to Delete this Content?")){
  FormName		= document.outwardReg;
   //var gate = document.getElementById('gate_entry_id').value;
  FormName.action= "./outwardList.php?outward_entry_no="+CatIdent;
  
  FormName.submit();
 }
 }
	    /*$('.datepicker').datepicker({
                todayBtn: "linked",
				format:'yyyy-mm-dd',
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
<script type='text/javascript' src='./auto-complete/jquery.metadata.js'></script>
<script type='text/javascript' src='./auto-complete/jquery.auto-complete.js?<?= mktime() ?>'></script>
<script type='text/javascript' src='./auto-complete/js.js?<?= mktime() ?>'></script>
	<link rel='stylesheet' type='text/css' href='auto-complete/jquery.auto-complete.css?<?= mktime() ?>' />
	<script type="text/javascript" src='./dhtmlxMessage/codebase/dhtmlxmessage.js'></script>
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
           
{/literal}