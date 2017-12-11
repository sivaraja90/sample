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
                          <h5  style="padding-left:40%;">Inward Registration Form</h5>
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
                            <form method="post" class="form-horizontal" name="inwardReg" id="inwardReg">
							<input type="hidden" id="hdAction" name="hdAction" />
							<div class="ibox-title">
                          <h5  style="padding-left:40%;">New Material Inward Master</h5>
						  </div>
						<!--  {if $LDList2 eq ""}-->
							   	 <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Inward Entry Id:</label>
                               <div class="col-md-4"  id="errinward_entry_id"> <input type="text" id="inward_entry_id" name="inward_entry_id" class="form-control" value="{$inward_entry_id}" autocomplete="off" readonly="true"></div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">Date of Entry:</label>
							   <div class="col-md-4" id="errdate_of_entry"> <input type="text" id="date_of_entry" name="date_of_entry" class="form-control" value="{$smarty.post.date_of_entry}" readonly="true" maxlength="19" autocomplete="off"></div>
							   </div>
							    <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">DC No:</label>
                               <div class="col-md-4"  id="errdc_no"> <input type="text" id="dc_no" name="dc_no" class="form-control" value="{$smarty.post.dc_no}" autocomplete="off">						</div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">DC Date:</label>
							   <div class="col-md-4" id="errdc_date"> <input type="text" id="dc_date" name="dc_date" class="form-control" maxlength="19" value="{$smarty.post.dc_date}" readonly="true" autocomplete="off"></div>
							   </div>
							    <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Invoice No:</label>
                               <div class="col-md-4"  id="errinvoice_no"> <input type="text" id="invoice_no" name="invoice_no" class="form-control" value="{$smarty.post.invoice_no}" autocomplete="off">						</div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">Invoice Date:</label>
							   <div class="col-md-4" id="errinvoice_date"> <input type="text" id="invoice_date" name="invoice_date" value="{$smarty.post.invoice_date}" class="form-control" readonly="true" maxlength="19" autocomplete="off"></div>
							   </div>
							    <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Supplier Name:</label>
                               <div class="col-md-4" id="errsupplier_name"><input type="text" id="supplier_name" name="supplier_name"  value="{$smarty.post.supplier_name}"class="form-control" autocomplete="off" data-toggle="modal" data-target="#myModal" readonly="true" placeholder="Search"></a></div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">Supplier Code:</label>
							   <div class="col-md-4" id="errsupplier_code"> <input type="text"  id="supplier_code" value="{$smarty.post.supplier_code}"  name="supplier_code" class="form-control"  autocomplete="off" readonly="" onClick="supplier_validation();"></div>
							   </div>
							    <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Frieght Charges:</label>
                               <div class="col-md-4"  id="errfrieght_charges"> <input type="text" id="frieght_charges" name="frieght_charges" value="{$smarty.post.frieght_charges}" class="form-control" autocomplete="off" onKeyUp="numeric_filter(this),cost_calculation()"></div>
							   </div><!-- {/if}-->
							   {if $LDList2 neq ""}
{foreach from=$LDList2 item=master_dtls}
							   <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Inward Entry Id:</label>
                               <div class="col-md-4"  id="errinward_entry_id"> <input type="text" id="inward_entry_id" name="inward_entry_id" class="form-control" value="{$inward_entry_id}" autocomplete="off"></div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">Date of Entry:</label>
							   <div class="col-md-4" id="errdate_of_entry"> <input type="text" id="date_of_entry" name="date_of_entry" class="form-control" value="{if $master_dtls.date_of_entry eq 0000-00-00}{php}echo "";{/php}{else}{$master_dtls.date_of_entry}{/if}" readonly="true" maxlength="19" autocomplete="off"></div>
							   </div>
							    <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">DC No:</label>
                               <div class="col-md-4"  id="errdc_no"> <input type="text" id="dc_no" name="dc_no" class="form-control" value="{$master_dtls.dc_no}" autocomplete="off">						</div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">DC Date:</label>
							   <div class="col-md-4" id="errdc_date"> <input type="text" id="dc_date" name="dc_date" class="form-control" maxlength="19" value="{if $master_dtls.dc_date eq 0000-00-00}{php}echo "";{/php}{else}{$master_dtls.dc_date}{/if}" readonly="true" autocomplete="off"></div>
							   </div>
							    <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Invoice No:</label>
                               <div class="col-md-4"  id="errinvoice_no"> <input type="text" id="invoice_no" name="invoice_no" class="form-control" value="{$master_dtls.invoice_no}" autocomplete="off">						</div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">Invoice Date:</label>
							   <div class="col-md-4" id="errinvoice_date"> <input type="text" id="invoice_date" name="invoice_date" value="{if $master_dtls.invoice_date eq 0000-00-00}{php}echo "";{/php}{else}{$master_dtls.invoice_date}{/if}" class="form-control" readonly="true" maxlength="19" autocomplete="off"></div>
							   </div>
							    <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Supplier Name:</label>
                               <div class="col-md-4" id="errsupplier_name"><input type="text" id="supplier_name" name="supplier_name"  value="{$master_dtls.supplier_name}"class="form-control" autocomplete="off" data-toggle="modal" data-target="#myModal" readonly="true" placeholder="Search"></a></div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">Supplier Code:</label>
							   <div class="col-md-4" id="errsupplier_code"> <input type="text"  id="supplier_code" value="{$master_dtls.supplier_code}"  name="supplier_code" class="form-control"  autocomplete="off" readonly="" onClick="supplier_validation();"></div>
							   </div>
							    <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Frieght Charges:</label>
                               <div class="col-md-4"  id="errfrieght_charges"> <input type="text" id="frieght_charges" name="frieght_charges" value="{$master_dtls.frieght_charges}" class="form-control" autocomplete="off" onKeyUp="numeric_filter(this),cost_calculation()"></div>
							   </div>
							   {/foreach}
	 {/if}
	 
							    <div class="ibox-content"></div>
							   <div class="ibox-title">
                          <h5  style="padding-left:40%;">Tax Details</h5>
						  </div>
						  {if $LDList2 eq ""}
							   	 <div class="form-group">
								 
							   <label class="col-sm-2 control-label" style="text-align:left;">Reseller VAT </label>
                               <div class="col-md-4"  id="errresellerVat"> <input type="checkbox" id="resellerVat" name="resellerVat" value="{$smarty.post.resellerVat}" class="ticketinfo" autocomplete="off">&nbsp;&nbsp;(5.00)%						</div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">Excise Duty </label>
							   <div class="col-md-4" id="errexciseDuty"> <input type="checkbox"  id="exciseDuty"  name="exciseDuty" class="ticketinfo" maxlength="19" value="{$smarty.post.exciseDuty}" autocomplete="off"> &nbsp;&nbsp;(16.32)%</div>
							   </div>
							    <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Service Tax </label>
                               <div class="col-md-4"  id="errserviceTax"> <input type="checkbox" id="serviceTax" name="serviceTax" onClick="select_sub_taxes(this.id);" value="{$smarty.post.serviceTax}" class="ticketinfo" autocomplete="off">	&nbsp;&nbsp;(12.00)%					</div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">CESS </label>
							   <div class="col-md-4" id="errcess"> <input type="checkbox"  id="cess"  name="cess" class="ticketinfo" maxlength="19" value="{$smarty.post.cess}" autocomplete="off" onClick="select_response(this.id);" > &nbsp;&nbsp;(2.00)%</div>
							   </div>
							    <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Manufacturer VAT </label>
                               <div class="col-md-4"  id="errmanufacturerVat"> <input type="checkbox" id="manufacturerVat" name="manufacturerVat" value="{$smarty.post.manufacturerVat}" class="ticketinfo" autocomplete="off">	&nbsp;&nbsp;(14.50)%					</div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">H-CESS </label>
							   <div class="col-md-4" id="errhCess"> <input type="checkbox"  id="hCess"  name="hCess" class="ticketinfo" maxlength="19" value="{$smarty.post.hCess}" autocomplete="off" onClick="select_response(this.id);" >&nbsp;&nbsp;(1.00)%</div>
							   </div>
							    <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Excise Duty VAT </label>
                               <div class="col-md-4"  id="errexciseDutyVat"> <input type="checkbox" id="exciseDutyVat" name="exciseDutyVat" value="{$smarty.post.exciseDutyVat}" class="ticketinfo" autocomplete="off">	&nbsp;&nbsp;(12.50)%					</div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">CST </label>
							   <div class="col-md-4" id="errcst"> <input type="checkbox"  id="cst"  name="cst" class="ticketinfo" maxlength="19" value="{$smarty.post.cst}" autocomplete="off">&nbsp;&nbsp;(2.00)%</div>
							   </div>
							   {/if}
							   {if $LDList2 neq ""}
{foreach from=$LDList2 item=master_dtls}
							   <div class="form-group">
								 
							   <label class="col-sm-2 control-label" style="text-align:left;">Reseller VAT</label>
                               <div class="col-md-4"  id="errresellerVat"> <input type="checkbox" id="resellerVat" name="resellerVat" value="{$master_dtls.resellerVat}" class="ticketinfo" autocomplete="off">&nbsp;&nbsp;(5.00)%	</div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">Excise Duty</label>
							   <div class="col-md-4" id="errexciseDuty"> <input type="checkbox"  id="exciseDuty"  name="exciseDuty" class="ticketinfo" maxlength="19" value="{$master_dtls.exciseDuty}" autocomplete="off">&nbsp;&nbsp;(16.32)%</div>
							   </div>
							    <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Service Tax</label>
                               <div class="col-md-4"  id="errserviceTax"> <input type="checkbox" id="serviceTax" name="serviceTax" onClick="select_sub_taxes(this.id);" value="{$master_dtls.serviceTax}" class="ticketinfo" autocomplete="off">	&nbsp;&nbsp;(12.00)%					</div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">CESS</label>
							   <div class="col-md-4" id="errcess"> <input type="checkbox"  id="cess"  name="cess" class="ticketinfo" maxlength="19" value="{$master_dtls.cess}" autocomplete="off" onClick="select_response(this.id);">&nbsp;&nbsp;(2.00)%</div>
							   </div>
							    <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Manufacturer VAT</label>
                               <div class="col-md-4"  id="errmanufacturerVat"> <input type="checkbox" id="manufacturerVat" name="manufacturerVat" value="{$master_dtls.manufacturerVat}" class="ticketinfo" autocomplete="off">	&nbsp;&nbsp;(14.50)%</div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">H-CESS</label>
							   <div class="col-md-4" id="errhCess"> <input type="checkbox"  id="hCess"  name="hCess" class="ticketinfo" maxlength="19" value="{$master_dtls.hCess}" autocomplete="off"  onClick="select_response(this.id);" >&nbsp;&nbsp;(1.00)%</div>
							   </div>
							    <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Excise Duty VAT</label>
                               <div class="col-md-4"  id="errexciseDutyVat"> <input type="checkbox" id="exciseDutyVat" name="exciseDutyVat" value="{$master_dtls.exciseDutyVat}" class="ticketinfo" autocomplete="off">&nbsp;&nbsp;(12.50)%				</div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">CST</label>
							   <div class="col-md-4" id="errcst"> <input type="checkbox"  id="cst"  name="cst" class="ticketinfo" maxlength="19" value="{$master_dtls.cst}" autocomplete="off">&nbsp;&nbsp;(2.00)%</div>
							   </div>
							     {/foreach}
	 {/if}
								 <div class="ibox-content"></div>
							   <div class="ibox-title">
                          <h5  style="padding-left:40%;">New Material Inward Details</h5>
						  </div>
								 <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Material Name:</label>
                               <div class="col-md-4" id="errmaterial_name">  <input type="text" id="material_name" name="material_name" value="{$smarty.post.material_name}" class="form-control" autocomplete="off" data-toggle="modal" data-target="#myModal2" readonly="true" placeholder="Search"></a></div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">Material Code:</label>
							   <div class="col-md-4" id="errmaterial_code"> <input type="text"  id="material_code"  name="material_code" class="form-control" maxlength="19" value="{$smarty.post.material_code}" autocomplete="off" readonly="true"></div>
							   </div>
							    <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Material Type:</label>
                               <div class="col-md-4"  id="errmaterial_type"> <input type="text" id="material_type" name="material_type" value="{$smarty.post.material_type}" class="form-control" autocomplete="off" readonly="true"></div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">Material Category:</label>
							   <div class="col-md-4" id="errmaterial_category"> <input type="text"  id="material_category"  name="material_category" class="form-control" maxlength="19" value="{$smarty.post.material_category}" autocomplete="off" readonly="true"></div>
							   </div>
							    <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Material Specification:</label>
                               <div class="col-md-4"  id="errmaterial_specification"> <input type="text" id="material_specification" value="{$smarty.post.material_specification}" name="material_specification" class="form-control" autocomplete="off" readonly="true"></div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">Price:</label>
							   <div class="col-md-4" id="errprice"> <input type="text"  id="price"  name="price" class="form-control" maxlength="19" value="{$smarty.post.price}" autocomplete="off" onKeyUp="numeric_filter(this)"></div>
							   </div>
							    <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Quantity:</label>
                               <div class="col-md-4"  id="errquantity"> <input type="text" id="quantity" name="quantity" value="{$smarty.post.quantity}" class="form-control" autocomplete="off" onKeyUp="numeric_filter(this)">						</div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">Warranty Period:</label>
							   <div class="col-md-4" id="errwarranty_period"> <input type="text"  id="warranty_period"  name="warranty_period" class="form-control" maxlength="19" value="{$smarty.post.warranty_period}" autocomplete="off"></div>
							   </div>
								 
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
{literal}
<script type="text/javascript">
function closeit(val,val2){
	parent.document.forms['inwardReg'].elements['supplier_name'].value=val;
	parent.document.forms['inwardReg'].elements['supplier_code'].value=val2;
	parent.dhxWins.window("w1").close();
//	parent.dhxWins.window("w1").close();
/*	var supplier_name = document.getElementById("supplier_name");
    var id = supplier_name.options[supplier_name.selectedIndex].value;
	alert('hi');*/
	
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
			<th width="70" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Supplier Code</th>
	       
        </tr>
		 <!-- <tr>
                <td align="center" bgcolor="#CCFFFF">&nbsp;</td>
                <td align="center" bgcolor="#CCFFFF"><input type="text" id="supplier_name" name="supplier_name" size="45" autocomplete="Off"><input id="search" name="search" value="" size="10" class="btn" type="submit" style="visibility:hidden"></td>
				<td align="center" bgcolor="#CCFFFF"><input type="text" id="supplier_code" name="supplier_code" size="23" autocomplete="Off"><input id="search" name="search" value="" size="10" class="btn" type="submit" style="visibility:hidden"></td>
            </tr>-->
			
        {foreach from=$PageList5 item=ListCus}
            <tr >          
                <td align="center" title="">
                  <a href="#."  onClick="closeit('{$ListCus.supplier_name}','{$ListCus.supplier_code}');">{$i++}</a></td>
                <td align="left"><a  href="#." onClick="closeit('{$ListCus.supplier_name}','{$ListCus.supplier_code}');">{$ListCus.supplier_name}</a></td>
				<td align="left"><a  href="#." onClick="closeit('{$ListCus.supplier_name}','{$ListCus.supplier_code}');">{$ListCus.supplier_code}</a></td>
			
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
                                <div class="modal-dialog">
                                <div class="modal-content animated bounceInRight">
                                        
                                        <div class="modal-body">
										<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
										<h2 class="modal-title" align="center">Material Details</h2>
<div id="std">            
<!-- SEARCH FORM END -->
{literal}
<script type="text/javascript">
function closefn(val3,val4,val5,val6,val7){
//var from_window=parent.document.forms[0].name;

	parent.document.forms['inwardReg'].elements['material_name'].value=val3;
	parent.document.forms['inwardReg'].elements['material_code'].value=val4;
	parent.document.forms['inwardReg'].elements['material_type'].value=val5;
	parent.document.forms['inwardReg'].elements['material_specification'].value=val6;
	parent.document.forms['inwardReg'].elements['material_category'].value=val7;
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
              <!--  <td align="center" bgcolor="#CCFFFF"><input type="text" id="material_name" name="material_name" size="23" autocomplete="Off"></td>
				<td align="center" bgcolor="#CCFFFF"><input type="text" id="material_code" name="material_code" size="15" autocomplete="Off"></td>
				<td align="center" bgcolor="#CCFFFF"><input type="text" id="material_type" name="material_type" size="16" autocomplete="Off"></td>
				<td align="center" bgcolor="#CCFFFF"><input type="text" id="material_specification" name="material_specification" size="18" autocomplete="Off"></td>
				<td align="center" bgcolor="#CCFFFF"><input type="text" id="material_category" name="material_category" size="15" autocomplete="Off"></td>
				<input id="search" name="search" value="" size="10" class="btn" type="submit" style="visibility:hidden">
            </tr>-->
			
        {foreach from=$PageList item=ListDet}
            <tr id="{$j++}">          
<!--                <td align="center" title="">
                  <a href="#."  onClick="closeit('{$ListDet.supplier_name}','{$ListDet.supplier_code}');">{$ListDet.sl_no}</a></td>-->
			    <td  align="left"><a  href="#." onClick="closefn('{$ListDet.m_name}','{$ListDet.m_code}','{$ListDet.m_type}','{$ListDet.description}','{$ListDet.m_cat}');">{$j}</a></td>
                <td  align="left"><a  href="#." onClick="closefn('{$ListDet.m_name}','{$ListDet.m_code}','{$ListDet.m_type}','{$ListDet.description}','{$ListDet.m_cat}');">{$ListDet.m_name}</a></td>
				<td align="left"><a  href="#." onClick="closefn('{$ListDet.m_name}','{$ListDet.m_code}','{$ListDet.m_type}','{$ListDet.description}','{$ListDet.m_cat}');">{$ListDet.m_code}</a></td>
				<td align="left"><a  href="#." onClick="closefn('{$ListDet.m_name}','{$ListDet.m_code}','{$ListDet.m_type}','{$ListDet.description}','{$ListDet.m_cat}');">{$ListDet.m_type}</a></td>
				<td align="left"><a  href="#." onClick="closefn('{$ListDet.m_name}','{$ListDet.m_code}','{$ListDet.m_type}','{$ListDet.description}','{$ListDet.m_cat}');">{$ListDet.description}</a></td>
				<td align="left"><a  href="#." onClick="closefn('{$ListDet.m_name}','{$ListDet.m_code}','{$ListDet.m_type}','{$ListDet.description}','{$ListDet.m_cat}');">{$ListDet.m_cat}</a></td>
			
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


									  <br/>
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
							   
		{if $hide_criteria neq ""}
        <!--<table align="center" class="dtable" cellspacing="1" cellpadding="3" width="100%" border="1PX solid black">-->
        <table align="center" class="table table-bordered" cellspacing="1" cellpadding="3" width="100%" border="1PX solid black">
		<tr>
		

	        <th width="50"><center>Inward Entry Id</center></th>
	        <th width="50"><center>Material Type</center></th>
	        <th width="50"><center>Material Category</center></th>
	        <th width="50"><center>Specification</center></th>
			<th width="80" ><center>Material Name</center></th>
			<th width="80" ><center>Material Code</center></th>
			<th width="50" ><center>Price</center></th>
            <th width="40" ><center>Quantity</center></th>
			<th width="40" ><center>Total</center></th>
			<!--<th width="50" >Created By</th>-->
			<th width="50" ><center>Action</center></th>
			<!--<th width="50">select</th>-->
        </tr>
    
	
        		
             {foreach from=$inward_details_list item=details_list}        
                <tr>

    {assign var=quantity value="`$details_list.quantity`"}
	{assign var="total_price" value="`$details_list.quantity*$details_list.price`"}
	{assign var=invoice_amount value="`$total_price`"}
                <td align="center">  <a >{$details_list.inward_entry_id}</a></td>
				<!--<td><a title=" Ticket" href="tickets.php?id=<?=$row['ticket_id']?>">{$ListDet.customer_type}</a>&nbsp;</td>-->
                <td align="center">  <a >{$details_list.material_type}</a>&nbsp;</td>
				<td align="center">  <a >{$details_list.material_category}</a>&nbsp;</td>
                <td class="nohover" align="center" style="background-color:<?=$row['priority_color']?>;">  <a >{$details_list.material_specification}</a></td>
                <td class="nohover" align="center" style="background-color:<?=$row['priority_color']?>;">  <a >{$details_list.material_name}</a></td>
				<td class="nohover" align="center" style="background-color:<?=$row['priority_color']?>;">  <a >{$details_list.material_code}</a></td>
				<td  align="center">  <a >{$details_list.price}</a></td>
				<td  align="center">  <a >{$details_list.quantity}</a></td>
				<td  align="right">  <a >{$total_price}</a></td>
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
				<td ><a >Sub Total:&nbsp;&nbsp;</a></td>
				<td align="right">{$total_invoice_amount format="%.2f"}</td>

				</tr>
			<!--{foreach from=$LDList_on_tax_details item=previous_taxes}
  				<tr style=" border-left: none">
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				{assign var=tax_wise_amount value="`$total_invoice_amount*$previous_taxes.tax_percentage/100`"}
				<td ><a >{$previous_taxes.tax_name}&nbsp;&nbsp;&nbsp;{$previous_taxes.tax_percentage}%</a></td>
				<td  align="right">{$tax_wise_amount}</td>

				</tr>				
			{assign var=tot_tax_amount value="`$tot_tax_amount+$tax_wise_amount`"}	
			{/foreach}	
				{foreach from=$smarty.post.tax_percentage item=chk_bx_array_value key=chk_bx_array_name}
				<tr>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td ><a>{$chk_bx_array_name}:</a>&nbsp;&nbsp;&nbsp;</td>
				<td align="left">{$chk_bx_array_value}</td></tr>
				
				{/foreach}-->
			{foreach from=$LDList2 item=previous_taxes}
				<tr style=" border-left: none">
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td><a >Reseller VAT 5.00%:&nbsp;&nbsp;</a></td>
				{assign var=total_rvat_amount value="`$total_invoice_amount/20`"}	
				<td align="right"> <a >&nbsp;{$total_rvat_amount}</a></td>
				
				</tr>
				<tr style=" border-left: none">
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td><a >Service Tax 12.00%:&nbsp;&nbsp;</a></td>
				{assign var=serviceTax value="`$total_rvat_amount+$total_rvat_amount`"}
				{assign var=total_service_amount value="`$serviceTax+$total_cess_amount`"}	
				<td align="right"> <a >&nbsp;{$total_service_amount}</a></td>
				
				</tr>
				<tr style=" border-left: none">
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td><a >CESS 2.00%:&nbsp;&nbsp;</a></td>
				{assign var=cess value="`$total_invoice_amount/100`"}
				{assign var=total_cess_amount value="`$cess+$cess`"}	
				<td align="right"> <a >&nbsp;{$total_cess_amount}</a></td>
				
				</tr>
				<tr style=" border-left: none">
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td><a >H-CESS 1.00%:&nbsp;&nbsp;</a></td>
				{assign var=total_hcess_amount value="`$total_invoice_amount/100`" format="%.2f"}	
				<td align="right"> <a >&nbsp;{$total_hcess_amount}</a></td>
				
				</tr>
				<!--<tr style=" border-left: none">
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td><a >Manufacturer VAT 1.00%:&nbsp;&nbsp;</a></td>
				{assign var=total_mvat_amount value="`$total_invoice_amount/100`" format="%.2f"}	
				<td align="right"> <a >&nbsp;{$total_mvat_amount}</a></td>
				</tr>
					
				<tr style=" border-left: none">
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td><a >ExciseDuty VAT 1.00%:&nbsp;&nbsp;</a></td>
				{assign var=total_excisevat_amount value="`$total_invoice_amount/100`" format="%.2f"}	
				<td align="right"> <a >&nbsp;{$total_excisevat_amount}</a></td>
				</tr>
				
				<tr style=" border-left: none">
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td><a >CST 1.00%:&nbsp;&nbsp;</a></td>
				{assign var=total_cst_amount value="`$total_invoice_amount/100`" format="%.2f"}	
				<td align="right"> <a >&nbsp;{$total_cst_amount}</a></td>
				</tr>-->
				{/foreach}
  				<tr style=" border-left: none">
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td><a >Invoice Amt:&nbsp;&nbsp;</a></td>
				{assign var=total_invoice_amount_with_tax value="`$total_hcess_amount+$total_cess_amount+$total_rvat_amount+$total_invoice_amount+$total_service_amount`"}	
				<td align="right"> <a >&nbsp;{$total_invoice_amount_with_tax}</a></td>
				
				</tr>				
				
        </table>
		{/if}
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
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
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

}	
        $(document).ready(function() {	
			
$("#addInward").click(function(){
				var fields=["inward_entry_id","date_of_entry","dc_no","dc_date","invoice_no","invoice_date","supplier_name","supplier_code","frieght_charges","material_name","material_code","material_type","material_category","materialSpecification","price","quantity","warranty_period"];
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
     var inward_entry_id = $(this).data('id');
     $(".modal-body #hdnDelinward_entry_id").val(inward_entry_id);
});

		
		function deleteCats(CatIdent){
 if(confirm("Are you sure to Delete this Content?")){
  FormName		= document.inwardReg;
   //var gate = document.getElementById('gate_entry_id').value;
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
case "window_material_name":
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
<link rel="stylesheet" type="text/css" href="css/datepickier_main.css">
	 	    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
	  		<link rel="stylesheet" href="./codebase/dhtmlxcalendar.css" type="text/css">
			<link rel="stylesheet" href="./codebase/dhtmlxcalendar_dhx_skyblue.css" type="text/css"> 
			<link rel="stylesheet" href="./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css">
			
{/literal}