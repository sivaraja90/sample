
        </div>
           
         <div class="wrapper wrapper-content animated fadeInRight">
           <div class="row">
          {if $SuccessMessage neq ""}
			<div class="isa_success">
			<i class="fa fa-check"></i>
			{$SuccessMessage}		 
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
                          <h5 style="padding-left:40%;">Edit Inward Details</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                               
                            </div>
                        </div>
                        <div class="ibox-content"><body onLoad="doOnLoad();">
                            <form method="post"  name="customerUpdate" id="customerUpdate" class="form-horizontal">
							<input type="hidden"  id="hdAction"  name="hdAction" />
							<input type="hidden" id="hdn_cnt_dtls" name="hdn_cnt_dtls" value="">
                            {foreach from=$PageList item=ListDet}
							<div class="form-group">
							  <div id="errinward_entry_id"> 
<label class="col-sm-2 control-label" style="text-align:left;">Inward Entry Id:</label>
<div class="col-md-3"><input type="text" id="inward_entry_id"  name="inward_entry_id"class="form-control" readonly="true" value="{$ListDet.inward_entry_id}" autocomplete="Off"></div></div>
							   <div id="errdate_of_entry">  
							   <label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Date of Entry:</label>
							   <div class="col-md-3"><input type="text" id="date_of_entry" name="date_of_entry" class="form-control" value="{$ListDet.date_of_entry}"   autocomplete="Off" ></div>
							   </div>
							   </div>	
							   <!--<div class="form-group">
							   <div id="errdc_no"> <label class="col-sm-2 control-label" style="text-align:left;">DC No:</label>
                               <div class="col-md-3"><input type="text" id="dc_no"  name="dc_no" class="form-control" value="{$ListDet.dc_no}" onKeyUp="numericFilter(this)" maxlength="10" autocomplete="Off">
							   </div>
							   </div>
							   <div id="errdc_date"> 
										<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%">DC Date:</label>
										<div class="col-md-3"><input type="text"  id="dc_date"  name="dc_date"class="form-control" value="{$ListDet.dc_date}"  autocomplete="Off">
										</div>
										</div>
							   </div>-->	
							   <div class="form-group">
							  <div id="errinvoice_no">  
							  <label class="col-sm-2 control-label" style="text-align:left;">Invoice No:</label>
                               <div class="col-md-3"><input type="text" id="invoice_no"  name="invoice_no"class="form-control" value="{$ListDet.invoice_no}" onKeyUp="numericFilter(this)" maxlength="10" autocomplete="Off">
							   </div>
							   </div>
							   <div id="errinvoice_date"> 
								<label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Invoice Date:</label>
								<div class="col-md-3"><input type="text"  id="invoice_date"  name="invoice_date"class="form-control" value="{$ListDet.invoice_date}"  autocomplete="Off">
								</div>
								</div>				    
							   </div>
							   <div class="form-group">
							  <div id="errsupplier_name">  
							  <label class="col-sm-2 control-label" style="text-align:left;">Supplier Name:</label>
                               <div class="col-md-3"><input type="text" id="supplier_name"  name="supplier_name"class="form-control" value="{$ListDet.supplier_name}" autocomplete="Off" data-toggle="modal" data-target="#myModal" readonly="true" placeholder="Search">
							   </div>
							   </div>
							   <div id="errsupplier_code"> 
								<label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Supplier Code:</label>
								<div class="col-md-3"><input type="text"  id="supplier_code"  name="supplier_code"class="form-control" value="{$ListDet.supplier_code}"  autocomplete="Off" readonly="true">
								</div>
								</div>				    
							   </div>
							   <div class="form-group">
							  <div id="errfrieght_charges">  
							  <label class="col-sm-2 control-label" style="text-align:left;">Frieght Charges:</label>
                               <div class="col-md-3"><input type="text" id="frieght_charges"  name="frieght_charges"class="form-control" value="{$ListDet.frieght_charges}" onKeyUp="numericFilter(this)" maxlength="10" autocomplete="Off">
							   </div>
							   </div>
							   <div id="errlocation"> 
								<label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Location:</label>
								<div class="col-md-3">
								<select class="form-control" id="location" name="location" autocomplete="Off">
							   	{if $ListDet.location eq 'PAT'}
								   <option value="{$ListDet.location}" selected="selected">{$ListDet.location}</option>
								   <option value="WAV">WAV</option>
								    <option value="TAD" >TAD</option>
								{elseif $ListDet.location eq 'WAV'}
								  <option value="{$ListDet.location}" selected="selected">{$ListDet.location}</option>
								  <option value="PAT" >PAT</option>  
							      <option value="TAD" >TAD</option>  
							   {elseif $ListDet.location eq 'TAD'}
								  <option value="{$ListDet.location}" selected="selected">{$ListDet.location}</option>
							      <option value="PAT" >PAT</option>
								   <option value="WAV">WAV</option>  
								{/if}
								</select>
								</div>
								</div>				    

							   </div>				
							
							   <div class="ibox-title">
                          <h5  style="padding-left:40%;">New Material Inward Details</h5>
						  </div>
								 <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Material Name:</label>
                               <div class="col-md-4" id="erritem_name">  <input type="text" id="item_name" name="item_name" value="{$smarty.post.item_name}" class="form-control" placeholder="Search"></a></div>	
							   <label class="col-sm-2 control-label" style="text-align:left; ">Material Code:</label>
							   <div class="col-md-4" id="erritem_code"> <input type="text"  id="item_code"  name="item_code" class="form-control" maxlength="19" value="{$smarty.post.item_code}" autocomplete="off" readonly="true"></div>
							   </div>
							    <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left; ">Material Category:</label>
							   <div class="col-md-4" id="erritem_category"> <input type="text" id="item_category"  name="item_category" class="form-control"  value="{$smarty.post.item_category}" autocomplete="off" readonly="true"></div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left;">Material Category Code:</label>
                               <div class="col-md-4"  id="erritem_category_code"> <input type="text" id="item_category_code" name="item_category_code" class="form-control" value="{$smarty.post.item_category_code}" readonly="true" autocomplete="off">	</div>
							   </div>
							    <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Material Description:</label>
                               <div class="col-md-4"  id="erritem_description"> <input type="text" id="item_description" readonly="true" value="{$smarty.post.item_description}" name="item_description" class="form-control" ></div>
							   <label class="col-sm-2 control-label" style="text-align:left; ">Price:</label>
							   <div class="col-md-4" id="errprice"> <input type="text"  id="price"  name="price" class="form-control" maxlength="19" value="{$smarty.post.price}" autocomplete="off" onKeyUp="numeric_filter(this),cost_calculations()"></div>
							   </div>
							    <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Quantity:</label>
                               <div class="col-md-4"  id="errquantity"> <input type="text" id="quantity" name="quantity" value="{$smarty.post.quantity}" class="form-control" autocomplete="off" onKeyUp="numeric_filter(this),cost_calculations()">						</div>
							   <label class="col-sm-2 control-label" style="text-align:left; ">GST %:</label>
							   <div class="col-md-4" id="errgst"> <input type="text" id="gst" name="gst" class="form-control" maxlength="19" value="{$smarty.post.gst}" autocomplete="off" onKeyUp="gst_calculations();"></div>
							   </div>
							    <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left; ">Warranty Period:</label>
							   <div class="col-md-4" id="errwarranty_period"> <input type="text" id="warranty_period"  name="warranty_period" class="form-control" maxlength="19" value="{$smarty.post.warranty_period}" autocomplete="off"></div>
							   </div>
							   
							   		<input type="hidden" id="tot" name="tot" class="form-control" value="{$smarty.post.tot}" placeholder="Calculate Sub Total Amount">
								   <input type="hidden" id="gst_cal" name="gst_cal" class="form-control" value="{$smarty.post.gst_cal}" placeholder="Calculate GST Amount">
								   <input type="hidden" id="total_tax" name="total_tax" class="form-control" value="{$smarty.post.total_tax}" placeholder="Calculate Invoice Amount without FC">
								   <input type="hidden" id="total_amount_fc" name="total_amount_fc" class="form-control" value="{$smarty.post.total_amount_fc}" placeholder="Calculate Invoice Amount with FC">
								   <input type="hidden" id="created_by" name="created_by" class="form-control" value="{$smarty.session.UserName}">

							  	 {/foreach}
							   	<br/>
									  <div align="center">
                                         
                                        <button class="btn btn-primary" type="submit" id="upDateCustomer">UPDATE</button>
										<button class="btn btn-primary" type="button" id="addPhone">RESET</button>
										<button class="btn btn-white" type="button" name="back" id="back">CANCEL</button>
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
{literal}
<script type="text/javascript">
function closeit(val,val2){
	parent.document.forms['customerUpdate'].elements['supplier_name'].value=val;
	parent.document.forms['customerUpdate'].elements['supplier_code'].value=val2;
	parent.dhxWins.window("w1").close();
//	parent.dhxWins.window("w1").close();
/*	var supplier_name = document.getElementById("supplier_name");
    var id = supplier_name.options[supplier_name.selectedIndex].value;
	alert('hi');*/
	
}

function cost_calculations()
{
var quantity=document.getElementById("quantity").value;
var price=document.getElementById("price").value;
var to2=(quantity * price);
document.getElementById("tot").value=to2;    
}

function numeric_filter(match_data)
{
match_data.value=match_data.value.replace(/[^.0-9]/ig,"");
}

function gst_calculations()
{ 
var tot=document.getElementById("tot").value;       
var gst=document.getElementById("gst").value;    
//var s_tot=document.getElementById("s_tot").value;  
//var gst_cal=document.getElementById("gst").value;  
document.getElementById("gst_cal").value=tot*gst/100;
}

$(document).ready(function() {	
 $("#table").click(function(){
					
					 $("#myModal").hide();
				});
 
 
      });
</script>
{/literal}

 <table class="table table-bordered">
    <form name="SiteMgmt" method="post" >
    <!--<input type="hidden" name="a" value="search" >-->
					<tr>
				    <td colspan="2" align="right">{$LinkPage}{$PerPageNavigation}</td>
				    </tr>
    <tr><td>
       <table width="100%" border="1PX solid black" cellspacing=0 cellpadding=1 class="table table-bordered"  id="table" >
        <tr >
	        <th width="30" align="center">&nbsp;&nbsp;S No.</th>
	        <th width="70" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Supplier Name</th>
			<th width="30" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Supplier Code</th>
	       
        </tr>
		 <!-- <tr>
                <td align="center" bgcolor="#CCFFFF">&nbsp;</td>
                <td align="center" bgcolor="#CCFFFF"><input type="text" id="supplier_name" name="supplier_name" size="45" autocomplete="Off"><input id="search" name="search" value="" size="10" class="btn" type="submit" style="visibility:hidden"></td>
				<td align="center" bgcolor="#CCFFFF"><input type="text" id="supplier_code" name="supplier_code" size="23" autocomplete="Off"><input id="search" name="search" value="" size="10" class="btn" type="submit" style="visibility:hidden"></td>
            </tr>-->
			
        {foreach from=$PageList5 item=ListCus}
            <tr>          
                <td align="center" title="">
                  <a href="#."  onClick="closeit('{$ListCus.vendor_company_name	}','{$ListCus.vendor_id}');">{$i++}</a></td>
                <td align="left"><a  href="#." onClick="closeit('{$ListCus.vendor_company_name	}','{$ListCus.vendor_id}');">{$ListCus.vendor_company_name}</a></td>
				<td align="left"><a  href="#." onClick="closeit('{$ListCus.vendor_company_name	}','{$ListCus.vendor_id}');">{$ListCus.vendor_id}</a></td>
			
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
 <br />

 <center><button type="button" class="btn btn-primary" data-dismiss="modal">Close</button></center>
</div>
</div>
</div>
</div>
</div>
<div class="modal inmodal" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" style="width:50%;">
                                <div class="modal-content animated bounceInRight">
                                        
                                        <div class="modal-body">
										<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
										<h2 class="modal-title" align="center">Material Details</h2>
<div id="std">            
<!-- SEARCH FORM END -->
{literal}
<script type="text/javascript">
function closefn(val3,val4,val5,val6,val7){    // alert(val3); alert(val4); alert(val5); alert(val6); alert(val7);
//var from_window=parent.document.forms[0].name;

	parent.document.forms['customerUpdate'].elements['item_name'].value=val3;
	parent.document.forms['customerUpdate'].elements['item_code'].value=val4;
	parent.document.forms['customerUpdate'].elements['item_category'].value=val5;
	parent.document.forms['customerUpdate'].elements['item_category_code'].value=val6;
	parent.document.forms['customerUpdate'].elements['item_description'].value=val7;     // alert(val3); alert(val4); alert(val5); alert(val6); alert(val7);
	parent.dhxWins.window("w2").close();
/*	var supplier_name = document.getElementById("supplier_name");
    var id = supplier_name.options[supplier_name.selectedIndex].value;
	alert('hi');*/

}
$(document).ready(function() {	
 $("#table1").click(function(){
					
					 $("#myModal2").hide();
				});
      });


</script>
{/literal}

 <table class="table table-bordered">
    <form name="CusMgmt" method="post" >
    <!--<input type="hidden" name="a" value="search" >-->
					<tr>
				    <td colspan="2" align="right">{$LinkPage}{$PerPageNavigation}</td>
				    </tr>
    <tr><td>
       <table width="100%" border="1PX solid black" cellspacing=0 cellpadding=1 class="table table-bordered"  id="table1" >
        <tr >
	        <th width="30" align="center">&nbsp;&nbsp;S No.</th>
	        <th width="50" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Material Name</th>
			<th width="50" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Material Code</th>
			<th width="50" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Material Type</th>
			<th width="50" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Material Specification</th>
			<th width="50" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Material Category</th>
	       
        </tr>
		  <tr >
                <!--<td align="center" bgcolor="#CCFFFF">&nbsp;</td>-->
              <!--  <td align="center" bgcolor="#CCFFFF"><input type="text" id="item_name" name="item_name" size="23" autocomplete="Off"></td>
				<td align="center" bgcolor="#CCFFFF"><input type="text" id="item_code" name="item_code" size="15" autocomplete="Off"></td>
				<td align="center" bgcolor="#CCFFFF"><input type="text" id="material_type" name="material_type" size="16" autocomplete="Off"></td>
				<td align="center" bgcolor="#CCFFFF"><input type="text" id="item_category_code" name="item_category_code" size="18" autocomplete="Off"></td>
				<td align="center" bgcolor="#CCFFFF"><input type="text" id="item_category" name="item_category" size="15" autocomplete="Off"></td>
				<input id="search" name="search" value="" size="10" class="btn" type="submit" style="visibility:hidden">
            </tr>-->
			
        {foreach from=$PageList3 item=ListDet}
            <tr id="{$j++}">          
<!--                <td align="center" title="">
                  <a href="#."  onClick="closeit('{$ListDet.supplier_name}','{$ListDet.supplier_code}');">{$ListDet.sl_no}</a></td>-->
			    <td  align="left"><a  href="#." onClick="closefn('{$ListDet.item_name}','{$ListDet.item_code}','{$ListDet.item_category}','{$ListDet.item_category_code}','{$ListDet.item_description}');">{$j}</a></td>
                <td  align="left"><a  href="#." onClick="closefn('{$ListDet.item_name}','{$ListDet.item_code}','{$ListDet.item_category}','{$ListDet.item_category_code}','{$ListDet.item_description}');">{$ListDet.item_name}</a></td>
				<td align="left"><a  href="#." onClick="closefn('{$ListDet.item_name}','{$ListDet.item_code}','{$ListDet.item_category}','{$ListDet.item_category_code}','{$ListDet.item_description}');">{$ListDet.item_code}</a></td>
				<td align="left"><a  href="#." onClick="closefn('{$ListDet.item_name}','{$ListDet.item_code}','{$ListDet.item_category}','{$ListDet.item_category_code}','{$ListDet.item_description}');">{$ListDet.item_category}</a></td>
				<td align="left"><a  href="#." onClick="closefn('{$ListDet.item_name}','{$ListDet.item_code}','{$ListDet.item_category}','{$ListDet.item_category_code}','{$ListDet.item_description}');">{$ListDet.item_category_code}</a></td>
				<td align="left"><a  href="#." onClick="closefn('{$ListDet.item_name}','{$ListDet.item_code}','{$ListDet.item_category}','{$ListDet.item_category_code}','{$ListDet.item_description}');">{$ListDet.item_description}</a></td>
			
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
  <center><button type="button" class="btn btn-primary" data-dismiss="modal">Close</button></center>
  <br/>

</div>
</div>
</div>
</div>
</div>
<table align="center" cellspacing="0" cellpadding="3" width="100%" border=0 class="table table-bordered">
 			{if $ErrorMessage_on_edit neq ""}
	<tr> 
		<td class="errtxt" width=50%><img src="images/warning.gif" alt="Error:" style="padding: 0px 10px 4px 5px; vertical-align:middle" />         		  {$ErrorMessage_on_not_selection}</td>
		<td class="error" width=50%></td>
	 </tr>

             {/if}
			 
			
			 {if $SuccessMessage_on_edit neq ""}
	<tr> 
		<td class="succs_text" width=50%> {$SuccessMessage_on_delete}</td>
		<td  width=50%></td>
	 </tr>

             {/if} 
			  {if $SuccessMessage_on_delete neq ""}
	<tr> 
		<td class="succs_text" width=50%> {$SuccessMessage_on_delete}</td>
		<td  width=50%></td>
	 </tr>

             {/if} 
			 
			 
					 {if $ErrorMessage_on_delete neq ""}
	<tr> 
		<td class="errtxt" width=50%> {$ErrorMessage_on_delete}</td>
		<td  width=50%></td>
	 </tr>

             {/if} 	 
 
 
</table>
		<br />
					   
        <!--<table align="center" class="dtable" cellspacing="1" cellpadding="3" width="100%" border="1PX solid black">-->
        <table align="center" class="table table-bordered" cellspacing="1" cellpadding="3" width="100%" border="1PX solid black">
		<tr>
		
			<th width="80" ><center>Material Name</center></th>
			<th width="80" ><center>Material Code</center></th>
	        <th width="80"><center>Material Description</center></th>
	        <th width="80"><center>Material Category</center></th>
	        <th width="50"><center>Item Category Code</center></th>
			<th width="50" ><center>Price</center></th>
            <th width="40" ><center>Quantity</center></th>
			<th width="40" ><center>Tax Per %</center></th>
			<th width="40" ><center>Tax Value</center></th>
			<th width="40" ><center>Total</center></th>
			<!--<th width="50" >Created By</th>-->
			<th width="40" ><center>Action</center></th>
			<!--<th width="50">select</th>-->
        </tr>
    
	
        		
             {foreach from=$inward_details_list item=details_list}        
                <tr>

    {assign var=quantity value="`$details_list.quantity`"}
	{assign var="total_price" value="`$details_list.quantity*$details_list.price`"}
	{assign var=invoice_amount value="`$total_price`"}
				<!--<td><a title=" Ticket" href="tickets.php?id=<?=$row['ticket_id']?>">{$ListDet.customer_type}</a>&nbsp;</td>-->
				<td class="nohover" align="center" style="background-color:<?=$row['priority_color']?>;">  <a >{$details_list.material_name}</a></td>
				<td class="nohover" align="center" style="background-color:<?=$row['priority_color']?>;">  <a >{$details_list.material_code}</a></td>
                <td align="center">  <a >{$details_list.item_description}</a>&nbsp;</td>
				<td align="center">  <a >{$details_list.material_category}</a>&nbsp;</td>
                <td align="center" style="background-color:<?=$row['priority_color']?>;">  <a >{$details_list.item_category_code}</a></td>
				<td  align="center">  <a >{$details_list.price}</a></td>
				<td  align="center">  <a >{$details_list.quantity}</a></td>
				<td align="right">  <a>{$details_list.gst}</a></td>
				<td align="right">  <a>{$details_list.gst_cal}</a></td>
				<td  align="right">  <a >{$details_list.total}</a></td>
<td class="nohover" align="center">	&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" class="fa fa-trash" onClick="deleteCats('{$details_list.inward_entry_id}','{$details_list.sl_no}');"></a></td>
							<!--	<td class="nohover" align="center" style="background-color:<?=$row['priority_color']?>;">  <a >{$details_list.created_by}</a></td>-->	
				<!--<td class="nohover" align="center"><a href="#"><img src="images/icons/delete.png" border="0" align="absmiddle" alt="Delete" onClick="Javascript:deleteCats('{$details_list.inward_entry_id}','{$details_list.sl_no}')" >	</a></td>-->	
	<!--<td align="center" class="nohover"><input type="checkbox" name="ticks[]" value="{$details_list.inward_entry_id}" onClick="highLight(this.value,this.checked);"></td>	-->																
            </tr>
			{assign var=total_invoice_amount value=$invoice_amount+$total_invoice_amount format="%.2f"}
			{/foreach}
  				<tr style=" border-left: none">
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td ><a >Invoice Amt:&nbsp;&nbsp;</a></td>
				<td align="right">{$execute_query.0.sum_total format="%.2f"}</td>

				</tr>
  				<tr style=" border-left: none">
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td><a >Grant Total:&nbsp;&nbsp;</a></td>
			{assign var="tax_per" value="`$execute_query.0.sum_total+$execute_query1.0.frieght_charges`"}
			{assign var=f_amt value="`$tax_per`"}

<!--				{assign var=total_invoice_amount_with_tax value="`$total_hcess_amount+$total_cess_amount+$total_rvat_amount+$total_invoice_amount+$total_service_amount`"}	
-->				<td align="right"> <a >&nbsp;{$f_amt format="%.2f"}</a></td>
				
				</tr>	
        </table>
		
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
		
	{literal}	
	        
			
			<script type="text/javascript" src="dhtmlxMessage/codebase/dhtmlxcalendar.js" ></script>
			<script type="text/javascript" src="./codebase/dhtmlxcalendar.js"></script>
			<script type="text/javascript" src="./codebase/dhtmlxcommon.js"></script>
			<script src="jquery/jquery.ui.datepicker.js"></script>
			<script type='text/javascript' src='./auto-complete/jquery.meTADta.js'></script>
			<script type='text/javascript' src='./auto-complete/jquery.auto-complete.js?<?= mktime() ?>'></script>
			<script type='text/javascript' src='./auto-complete/js.js?<?= mktime() ?>'></script>
			<link rel='stylesheet' type='text/css' href='auto-complete/jquery.auto-complete.css?<?= mktime() ?>' />
			
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
	var str2 =code1.replace('undefined','');
	var str3 =code2.replace('undefined','');
	var str4 =code3.replace('undefined','');
	var str5 =code4.replace('undefined','');
	var str6 =code5.replace('undefined','');
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
			
			
			
		<script type="text/javascript">
		 function getval()
        {
		var date_of_entry,dc_date,invoiceDate;
		date_of_entry=document.getElementById("date_of_entry").value;
		dc_date=document.getElementById("dc_date").value;
		invoice_date=document.getElementById("invoice_date").value;

		if(date_of_entry=="" || dc_date=="" ||invoice_date=="")
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

}	
		
        $(document).ready(function() {	
        $("#upDateCustomer").click(function(){
			var fields=["location","item_name","item_code","item_category","item_category_code","price","quantity"];
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
              FormName= document.customerUpdate;
			  		//alert(current_iteration);
  			  FormName.method= "POST";
              FormName.submit(); 
			                 });

$("#back").click(function(){

window.history.back();

});

		
		 });
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

	 
function numericFilter(data) 
{
   data.value = data.value.replace(/[^.0-9]/ig,"");
}	
function textFilter(data)
{
   data.value = data.value.replace(/[^ .a-z]/ig,"");
}		 
	
	    /*$('.datepicker').datepicker({
                todayBtn: "linked",
				format:'yyyy-mm-dd',
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });	*/ 
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
function deleteCats(CatIdent,CatIdent2){

dhtmlx.confirm({
    title: "Close",
    type:"confirm-warning",
    text: "Are you sure to delete it?",
    callback: function(result) 
	{
	if(result==true)
	   {
  FormName		= document.edit_inward_details;
  FormName.action	= "inward_details.php?inward_entry_id="+CatIdent+"&"+"sl_no="+ CatIdent2;
  FormName.submit();	   
	   }
    }
});
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
			<script type="text/javascript" src='./dhtmlxMessage/codebase/dhtmlxmessage.js'></script>
			<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/>
			<link rel="stylesheet" type="text/css" href="css/datepickier_main.css">
			<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
			<link rel="stylesheet" href="./codebase/dhtmlxcalendar.css" type="text/css">
			<link rel="stylesheet" href="./codebase/dhtmlxcalendar_dhx_skyblue.css" type="text/css"> 
			<link rel="stylesheet" href="./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css">
        {/literal}