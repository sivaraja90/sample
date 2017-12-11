
        </div>
           
        <div class="wrapper wrapper-content animated fadeInRight" >
           
          
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                          <h5 style="padding-left:40%;">Inward Details</h5>
                            
                        </div>
                        <div class="ibox-content">
                            <form method="post" class="form-horizontal" name="sback" id="sback">
							<div class="ibox-title" >
                          <h5  style="padding-left:40%;">Material Info:</h5>
						  </div>
							 {foreach from=$PageList item=ListInward}
							 
							   <div class="form-group">
							  <div id="errinwardEntryId"> 
							   <label class="col-sm-2 control-label" style="text-align:left;">Inward Entry Id:</label>
                               <div class="col-md-2  control-label" style="text-align:left;"><td>{$ListInward.inward_entry_id}</td></div></div>
							   <div id="errdateofEntry">  
							   <label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Date of Entry:</label>
							   <div class="col-md-2 control-label" style="text-align:left;"><td>{$ListInward.date_of_entry}</td></div></div>
							   </div>
							   <!--<div class="form-group">
							   <div id="errdcNo"> <label class="col-sm-2 control-label" style="text-align:left;">DC No:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td>{$ListInward.dc_no}</td></div></div>
							<div id="errdcDate"> 
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%">DC Date:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td>{$ListInward.dc_date}</td></div></div>
							</div>-->
							<div class="form-group">
							   <div id="errinvoiceNo"> <label class="col-sm-2 control-label" style="text-align:left;">Invoice No:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td>{$ListInward.invoice_no}</td></div></div>
							<div id="errinvoiceDate"> 
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%">Invoice Date:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td>{$ListInward.invoice_date}</td></div></div>
							</div>
							<div class="form-group">
							   <div id="errsupplierName"> <label class="col-sm-2 control-label" style="text-align:left;">Supplier Name:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td>{$ListInward.supplier_name}</td></div></div>
							<div id="errsupplierCode"> 
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%">Supplier Code:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td>{$ListInward.supplier_code}</td></div></div>
							</div>
							<div class="form-group">
							   <div id="errfrieghtCharges"> <label class="col-sm-2 control-label" style="text-align:left;">Frieght Charges:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td>{$ListInward.frieght_charges}</td></div></div>
							   <div id="errcreatedBy"> 
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%">Created By:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td>{$smarty.session.UserName}</td></div></div>

							</div>
							<br />

	<table align="center" cellspacing="0" cellpadding="3" width="100%" border=0 class="table table-bordered">
 			{if $ErrorMessage_on_not_selection neq ""}
	<tr> 
		<td class="errtxt" width=50%><img src="images/warning.gif" alt="Error:" style="padding: 0px 10px 4px 5px; vertical-align:middle" />         		  {$ErrorMessage_on_not_selection}</td>
		<td class="error" width=50%></td>
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
        <!--<table align="center" class="dtable" cellspacing="1" cellpadding="3" width="100%" border="1PX solid black">-->
        <table align="center" class="table table-bordered" cellspacing="1" cellpadding="3" width="100%" border="1PX solid black">
		<tr>
		    <th width="80" ><center>Material Name</center></th>
			<th width="80" ><center>Material Code</center></th>
			 <th width="80"><center>Material Category</center></th>
	        <th width="50"><center>Material Category Code</center></th>
	        <th width="50"><center>Item Description</center></th>
			<th width="50" ><center>Price</center></th>
            <th width="40" ><center>Quantity</center></th>
			<th width="40" ><center>GST %</center></th>
			<th width="40" ><center>Total</center></th>
        </tr>
             {foreach from=$inward_details_list item=details_list}        
                <tr>
    {assign var=quantity value="`$details_list.quantity`"}
	{assign var="total_price" value="`$details_list.quantity*$details_list.price`"}
	{assign var=invoice_amount value="`$total_price`"}
	            <td class="nohover" align="center" style="background-color:<?=$row['priority_color']?>;">  <a >{$details_list.material_name}</a></td>
				<td class="nohover" align="center" style="background-color:<?=$row['priority_color']?>;">  <a >{$details_list.material_code}</a></td>
				<td align="center">  <a >{$details_list.material_category}</a>&nbsp;</td>
                <td align="center">  <a >{$details_list.item_category_code}</a>&nbsp;</td>
                <td align="center" style="background-color:<?=$row['priority_color']?>;">  <a >{$details_list.item_description}</a></td>
				<td  align="center">  <a >{$details_list.price}</a></td>
				<td  align="center">  <a >{$details_list.quantity}</a></td>
				<td  align="center">  <a >{$details_list.gst}</a></td>
				<td  align="right">  <a >{$details_list.total_amount_fc}</a></td>
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
				<td ><a >Sub Total:&nbsp;&nbsp;</a></td>
				<td align="right"><a>{$execute_query.0.sum_total format="%.2f"}</a></td>
				</tr>
				<!--<tr style=" border-left: none">
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td><a >GST:&nbsp;&nbsp;</a></td>
				{assign var=total_rvat_amount value="`$total_invoice_amount/20`"}	
				<td align="right"> <a >&nbsp;{$total_rvat_amount}</a></td>
				</tr>-->
 				<tr style=" border-left: none">
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td><a >Invoice Amt:&nbsp;&nbsp;</a></td>
			{assign var="tax_per" value="`$execute_query.0.sum_total+$execute_query1.0.frieght_charges`"}
			{assign var=f_amt value="`$tax_per`"}

<!--				{assign var=total_invoice_amount_with_tax value="`$total_hcess_amount+$total_cess_amount+$total_rvat_amount+$total_invoice_amount+$total_service_amount`"}	
-->				<td align="right"> <a >&nbsp;{$f_amt format="%.2f"}</a></td>
				</tr>
				<!--<tr style=" border-left: none">
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td><a >Frieght Charges:&nbsp;&nbsp;</a></td>
				{assign var=freight_charges value="`$total_invoice_amount+$total_rvat_amount`"}
				{assign var=total_Freight_amount_with_tax value="`$freight_charges-$total_invoice_amount_with_tax`"}	
				<td align="right"> <a >&nbsp;{$total_Freight_amount_with_tax}</a></td>
				</tr>-->				
        </table>
		</td>
		</tr>
		</table>
							{/foreach}
							   <div align="center">
									<button class="btn btn-primary" id="back"  type="button">BACK</button>
                                      </div>
                                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		{literal}
		<script type="text/javascript">
        $(document).ready(function() {	
		$('#side-menu').metisMenu();
		$("#back").click(function(){
        window.history.back();
        });
		 });
		 </script>
		 {/literal}