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

</style>

{/literal}

	<body  class="hold-transition skin-blue sidebar-mini">
<h4><center>Vendor Contact Details</center></h4>

		<form class="form-horizontal" name="add_contact">
			<input type="hidden" name="hdAction" />
			<input type="hidden" id="vendor_id" name="vendor_id"  value="{$smarty.get.vendor_id}"  >
			
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
							
				   
				   <table class="col-md-6">
				    <input type="hidden" value="{$Edit.sl_no}" />
					<input type="hidden" id="vendor_id" name="vendor_id" value="{$Edit.vendor_id}"/>
				   {foreach from=$ListView item=Edit}
				  	
					<tr class="form-group">			 
                        <th class="col-sm-4 control-th">Vendor Id</th>
                      <td class="col-sm-2">
                       {$Edit.vendor_id}
                   </td>
                   		 
                        <th class="col-sm-4 control-th">Contact Person</th>
                       <td class="col-sm-2">	
                        {$Edit.salutation}&nbsp;{$Edit.vendor_contact_person_fname}&nbsp;{$Edit.vendor_contact_person_lname}														
                     </td>
					 </tr>
                   
						<tr class="form-group">			 
                        <th class="col-sm-4 control-th">Mobile No</th>		
                      <td class="col-sm-2">
                       {$Edit.mobile_no}
                   </td>
				   <th class="col-sm-4 control-th">Phone No</th>
                       <td class="col-sm-2">
                          {$Edit.area_code}&nbsp;{$Edit.phone_no}&nbsp;{$Edit.extension}																
                     </td>
					 </tr>
					 
					  <tr class="form-group">
                   		 {if $Edit.mobile_no1 neq ""}	
                        <th class="col-sm-4 control-th">Mobile No 1</th>
                       <td class="col-sm-2">
                         {$Edit.mobile_no1}																	
                     </td>
					 {/if}
					 {if $Edit.mobile_no2 neq ""}
                        <th class="col-sm-4 control-th">Mobile No 2</th>
                      <td class="col-sm-2">
                       {$Edit.mobile_no2}
                   </td>
				   {/if}
					</tr>
					 
					 <tr class="form-group">			 
                        <th class="col-sm-4 control-th">Designation</th>
                       <td class="col-sm-2">
                           {$Edit.designation}																
                     </td>
					 <th class="col-sm-4 control-th">Email Id</th>
                       <td class="col-sm-2">
                           {$Edit.mail_id}																
                     </td>
					 </tr>
					 
					 <tr class="form-group">	
					 {if $Edit.pnone_no1 neq ""}		 
                        <th class="col-sm-4 control-th">Phone No 1</th>
                      <td class="col-sm-2">
                      {$Edit.area_code1}&nbsp;{$Edit.phone_no1}&nbsp;{$Edit.extension1}
                   </td>
				   {/if}
                         {if $Edit.mail_id1 neq ""}
					 <th class="col-sm-4 control-th">Email Id 1</th>
                      <td class="col-sm-2">
                      {$Edit.mail_id1}	
                   </td>
				   {/if}
					</tr>
						
					{/foreach}
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
  FormName		= document.ServiceList;
  FormName.action= "sale_view.php?sl_no="+CatIdent+"&customer_id="+CusIdent;
  FormName.submit();
 }
 }

 function viewCats(CusIdent) {
    
  FormName		= document.ServiceList;
  FormName.action ='sales.php?customer_id='+CatIdent;          
  FormName.submit();

 }
    </script>
	{/literal} 
				 
					</form>
				 </body>