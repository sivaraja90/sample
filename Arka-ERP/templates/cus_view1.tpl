{$IncludeCSS}
{$IncludeJS}
{literal}
<script type="text/javascript" src='./dhtmlxMessage/codebase/dhtmlxmessage.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery-1.3.2.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery.metadata.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery.auto-complete.js?<?= mktime() ?>'></script>
	<script type='text/javascript' src='./auto-complete/js.js?<?= mktime() ?>'></script>
	<link rel="stylesheet" href="'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
	<!--<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/> 
	<link rel='stylesheet' type='text/css' href='auto-complete/jquery.auto-complete.css?<?= mktime() ?>' />-->
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"/>
	<style>
	th {
    font-style: normal;
	font-weight:100;
	font-size:14px;
	margin-right:100px;
}
table { 
    border-spacing: 2px;
    border-collapse: separate;
}
td
{ padding:10px;
width:50px;
}
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
.col-sm-4
{
width:30%;
}
.col-sm-2
{
 width:20%;
 margin-left:10%;
 font-weight:100;
 font-size:14px;
 font-style:normal;
}

/*
.box-body
{
width:100%;
}*/
</style>

{/literal}

	<body  class="hold-transition skin-blue sidebar-mini">
<h4><center>View Followup Detail</center></h4>
		<form class="form-horizontal" name="Followup">
			<input type="hidden" name="hdAction" />
			<input type="hidden" id="customer_id" name="customer_id"  value="{$smarty.get.customer_id}"  >
			
					<input type="hidden" id="mobile_fld_cnt" name="mobile_fld_cnt"  value="2"  >
					<input type="hidden" id="phone_fld_cnt" name="phone_fld_cnt"  value="2"  >
					<input type="hidden" id="email_fld_cnt" name="email_fld_cnt"  value="2"  >
					<input type="hidden" id="hdn_salutation" name="hdn_salutation" value="{$Contact.salutaion}">
					<input type="hidden" id="hdn_order_status" name="hdn_order_status" value="{$Contact.order_status}">
					<input type="hidden" id="hdn_customer_status" name="hdn_customer_status" value="{$Contact.customer_status}">
					<input type="hidden" id="hdn_customer_type" name="hdn_customer_type" value="{$Contact.customer_type}">
							{if $SuccessMessage neq ""}
							<div class="isa_success">
							<i class="fa fa-check"></i>
							{$SuccessMessage}		 
							</div>
							{/if}
							{if $ErrorMessage neq ""}
							<div class="isa_error">
							<i class="fa fa-times"></i>
							{$ErrorMessage}		 
							</div>
							{/if}
					<table id="example2" class="table table-bordered table-striped" style="font-size:13px; font-family:'Times New Roman', Times, serif;">
                    <thead>
					<tr>
					            <th><center>Sl No</center></th>
								<th><center>Enquiry ID</center></th>
								<th><center>Company Name</center></th>
								<th><center>Customer Id</center></th>
								<th><center>Sqft</center></th>
								<th><center>Material</center></th>
								<th><center>Labour</center></th>
								<!--{if $ListView2.0.snooze_date neq "0000-00-00" }
								<th>Snooze Date</th>
								{/if}
								{if $ListView2.0.snooze_time neq "00:00:00" }
								<th>Snooze Time</th>
								{/if}
								{if $ListView2.0.closed_date neq "0000-00-00" }
								<th>Closed Date</th>
								{/if}
								{if $ListView2.0.closed_time neq "00:00:00"}
								<th>Closed Time</th>
								{/if}-->
								<th><center>Action</center></th>
						      
					</tr>
                    </thead>
                    <tbody>
                     {foreach from=$ListDetail item=Contact}
					 <input type="hidden" value="{$Contact.service_order_no}"/>
					<tr {$i++}>        
					            <td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.service_order_no}')">{$i}</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.service_order_no}')">{$Contact.enquiry_id}</a></td>
								<!--<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.enquiry_id}')">{$Contact.enquiry_status}</a></td>
								{if $Contact.snooze_date neq "0000-00-00" }<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.enquiry_id}')">{$Contact.snooze_date}</a></td>{/if}
								{if $Contact.snooze_time neq "00:00:00" }<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.enquiry_id}')">{$Contact.snooze_time}</a></td>{/if}
								{if $Contact.closed_date neq "0000-00-00" }<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.enquiry_id}')">{$Contact.closed_date}</a></td>{/if}
								{if $Contact.closed_time neq "00:00:00" }<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.enquiry_id}')">{$Contact.closed_time}</a></td>	{/if}			-->		
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.service_order_no}')">{$Contact.company_name}</a></td>	
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.service_order_no}')">{$Contact.customer_id}</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.service_order_no}')">{$Contact.sqft}</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.service_order_no}')">{$Contact.material}</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.service_order_no}')">{$Contact.labour}</a></td>	
								 <td align="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onClick="Javascript:deleteCat('{$Contact.sl_no}','{$Contact.service_order_no}')"><i class="fa fa-trash"></i></a></td>
								
                    </tr>
					{/foreach}
					</tbody>
                    </tfoot>
                  </table>
{literal}
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
	  
  function deleteCat(CatIdent,CusIdent){
  if(confirm("Are you sure to Delete this Content?")){
  FormName		= document.Followup;
  FormName.action= "cus_view1.php?sl_no="+CatIdent+"&service_order_no="+CusIdent;
  FormName.submit();
 }
 }

 function viewCats(CusIdent) {
    
  FormName		= document.ServiceList;
  FormName.action ='sales.php?enquiry_id='+Followup;          
  FormName.submit();

 }
    </script>
	{/literal} 
				 
					</form>
					
				
					<!--<div class="box-footer">
					<center>
                    <!--<button type="submit" class="btn btn-info pull-center" onClick="validate_fields();">ADD CUSTOMER</button>
					<input type="button" class="btn btn-info pull-center" value="UPDATE"  onClick="validate_fields();">&nbsp;&nbsp;
                    <input type="button" class="btn btn-info pull-center" value="CANCEL" data-dismiss="modal" >&nbsp;&nbsp;
					</center>
                  </div>-->
				  
				 </body>