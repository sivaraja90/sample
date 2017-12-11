
        </div>
           
        <div class="wrapper wrapper-content animated fadeInRight" >
           
          
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                          <h5 style="padding-left:40%;">Stock Details</h5>
                            
                        </div>
                        <div class="ibox-content">
                            <form method="post" class="form-horizontal" name="sback" id="sback">
							 {foreach from=$StockList13 item=ListInward}
							 
							   <div class="form-group">
							  <div id="errinwardEntryId"> 
							   <label class="col-sm-2 control-label" style="text-align:left;">Item Category Code:</label>
                               <div class="col-md-2  control-label" style="text-align:left;"><td>{$ListInward.item_category_code}</td></div></div>
							   <div id="errdateofEntry">  
							   <label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Material Category:</label>
							   <div class="col-md-2 control-label" style="text-align:left;"><td>{$ListInward.material_category}</td></div></div>
							   </div>
							<div class="form-group">
							   <div id="errinvoiceNo"> <label class="col-sm-2 control-label" style="text-align:left;">Material Name:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td>{$ListInward.material_name}</td></div></div>
							<div id="errinvoiceDate"> 
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%">Material Code:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td>{$ListInward.material_code}</td></div></div>
							</div>
							<div class="form-group">
							   <div id="errsupplierName"> <label class="col-sm-2 control-label" style="text-align:left;">Location:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td>{$ListInward.location}</td></div></div>
							<div id="errsupplierCode"> 
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%">Quantity:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td>{$ListInward.quantity}</td></div></div>
							</div>
							<div class="form-group">
							   <div id="errfrieghtCharges"> <label class="col-sm-2 control-label" style="text-align:left;">Unit Price:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td>{$ListInward.unit_price}</td></div></div>
							   <div id="errsupplierCode"> 
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%">Total Price:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td>{$ListInward.total}</td></div></div>

							   </div>
							   <div class="form-group">
							   <div id="errcreatedBy"> 
							   <div id="errfrieghtCharges"> <label class="col-sm-2 control-label" style="text-align:left;">Created By:</label>
							   <div class="col-md-2 control-label" style="text-align:left;"><td>{$smarty.session.UserName}</td></div></div>
								</div>
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