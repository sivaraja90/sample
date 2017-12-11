{include file="left.tpl"}
{literal}
	<script type="text/javascript" src='./dhtmlxMessage/codebase/dhtmlxmessage.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery.metadata.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery.auto-complete.js?<?= mktime() ?>'></script>
	<script type='text/javascript' src='./auto-complete/js.js?<?= mktime() ?>'></script>
	<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/> 
	<link rel='stylesheet' type='text/css' href='auto-complete/jquery.auto-complete.css?<?= mktime() ?>' />
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
label,td.thick
{
font-weight:bold;
}
label.font
{
font-weight: normal;
}
</style>
<script>
</script>
<script>	
function encrypt(){		
var source = "./customer_detail_view.php?customer_id"=;
var encode = base64Encode( source );
document.getElementById("demo").innerHTML = encode;
}
	</script>
	<script>

$(document).ready(function(){
    $("#ContactHeader").click(function(){
       window.location.reload();
    });
}); 

$(document).ready(function(){
    $("#AddressHeader").click(function(){
       window.location.reload();
    });
}); 
	  
	  $(document).ready(function(){
    $("#AddressEditHeader").click(function(){
       window.location.reload();
    });
}); 

  $(document).ready(function(){
    $("#ContactEditHeader").click(function(){
       window.location.reload();
    });
}); 

$(document).ready(function(){
    $("#EnquiryEditHeader").click(function(){
       window.location.reload();
    });
}); 

$(document).ready(function(){
    $("#SalesEditHeader").click(function(){
       window.location.reload();
    });
}); 

$(document).ready(function(){
    $("#ServiceEditHeader").click(function(){
       window.location.reload();
    });
}); 

$(document).ready(function(){
    $("#ProjectEditHeader").click(function(){
       window.location.reload();
    });
}); 
}
</script>
{/literal}
 <body class="hold-transition skin-blue sidebar-mini" onLoad="doOnLoad();">
  <div class="content-wrapper">
	<section class="content-header">
          <h4>
            <small class="active"><a href="customer_list.php"><i class="fa fa-list"> <label class="font" style="font-family:Arial, Helvetica, sans-serif">
List Customers</label></i></a></small>&ensp;&ensp;&ensp;
            <small><a href="customer_reg.php"><i class="fa fa-user-plus"> <label class="font" style="font-family:Arial, Helvetica, sans-serif">
Create Customer</label></i></a></small>
          </h4>
          <ul class="breadcrumb">
            <li>Status : Active</li>
          </ul>
        </section>

        <!-- Main content -->
          <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header">
				{foreach from=$Master item=View}
				<table width="110%">
				<tr>
				 <td>Created:{$View.created_date}&nbsp;&nbsp;{$View.created_time}</td>
                  <td align="justify">
				 <h4>{$View.company_name}&nbsp;&nbsp;[{$View.customer_id}]</h4></td>
				<td> Modified:{$View.timestamp_values}</td>
				</tr>
				</table>
				{/foreach}
				</div>
				
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
				<form class="form-horizontal">
                  <div class="box-body">
				  	<div class="col-md-6">
                    <div class="form-group">
                      <label class="col-sm-4 thick">Enquiry Id</label>
                      <div class="col-sm-6">
                       {$View.enquiry_id}
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="col-sm-4 thick">Type</label>
                      <div class="col-sm-6">
                        {$View.enquiry_type}
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="col-sm-4 thick">Mail Id</label>
                      <div class="col-sm-6">
                        {$View.mail_to}
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="col-sm-4 thick">Attachment 1</label>
                      <div class="col-sm-6">
                        {$View.mail_attachments1}
                      </div>
                    </div>
					
					</div>
					<!--*****************************************************-->
					<div class="col-md-6">
					 <div class="form-group">
                      <label class="col-sm-4 thick">Attachments 2</label>
                      <div class="col-sm-6">
                       {$View.mail_attachments2}
                      </div>
                    </div>
					
					
					<div class="form-group">
                      <label class="col-sm-4 thick">Attachments 3</label>
                      <div class="col-sm-6">
                       {$View.mail_attachments3}
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="col-sm-4 thick">Created By</label>
                      <div class="col-sm-6">
                        {$View.created_by}
                      </div>
                    </div>
					</div>
					</div>
					</form>
					
				<div class="clear"></div>
				<div style="margin-top: 10px; margin-bottom: 10px;border: 0px;"><center>
						;
						  <input type="button" class="btn  btn-danger btn-xs" value="Back" onclick="goBack()">&nbsp;&nbsp;
						  </center>
						  </div>

<!--*************************************************Add Contact***********************************************************-->
							
   <!--*************************************************Address List***********************************************************-->
                  <!-- glyphicons-->
             
	{/literal}
	<script>
	</div>
				  <!--********************************************Project List***********************************************************************-->
			function goBack() {
    window.history.back();
}	   
 function doOnLoad() 
		{
   document.getElementById('Contact').contentWindow.location.reload(true);
}
    </script>
	{/literal}
  </body>
 </html>

