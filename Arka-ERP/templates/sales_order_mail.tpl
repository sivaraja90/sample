{$IncludeJS}
{$IncludeCSS}
{literal}
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
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
#SaleMail {
	position: absolute;
	left: 0;
	top: 0;
	right: -30px;
	bottom: 0;	
	padding-right: 15px;
	overflow-y: scroll;
}
</style>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript" src='./dhtmlxMessage/codebase/dhtmlxmessage.js'></script>
<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/> 

<script>
function validate_mail()
{
		var fields=["email_id1","cc"];
				for(i=0;i<fields.length;i++)
				{
				//alert(fields[i]);
				current_iteration = document.getElementById(fields[i]).value;
				document.getElementById(fields[i]).style.borderColor="";
						
						if(current_iteration=="")
						{
						 dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Fill " +fields[i],	
									  });	
									  
						document.getElementById(fields[i]).focus();
						document.getElementById(fields[i]).style.borderColor="red";
						return false;
						}
}

FormName		= document.SalesMailAdd;
FormName.method	= "POST";
FormName.submit();

}

function myFunction() {
    var x = document.getElementById("attachment1");
    x.disabled = true;
}

</script>
{/literal}
<div id="SaleMail">
<form name="SalesMailAdd" id="SalesMailAdd" method="post" enctype="multipart/form-data">
		<input type="hidden" name="hdAction">
		{foreach from=$mailview item=View}
			<input type="hidden" id="enquiry_id" name="enquiry_id"  value="{$View.enquiry_id}">
			<input type="hidden" id="sales_order_no" name="sales_order_no"  value="{$View.sales_order_no}">											
 			<input type="hidden" id="sales_quote_revise_no" name="sales_quote_revise_no" value="{$View.sales_quote_revise_no}">
 			<input type="hidden" class="form-control" id="mail_from" name="mail_from" value="{$smarty.session.Email}"  readonly="true" autocomplete="off">
		{/foreach}
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
			<table  class="table table-bordered table-striped">
				{foreach from=$mailview item=salMail}
				<tr class="taglist2">
				<td >&nbsp;</td>
				{if $salMail.email_id neq "" }
				<td><input type="checkbox" name="check2" id="check2" onClick="dynInput(this);" value="{$salMail.email_id}" />&nbsp;&nbsp;{$salMail.email_id}&nbsp;&nbsp;&nbsp;&nbsp;
				{/if}
				{if $salMail.email_id1 neq "" }
				<input type="checkbox" name="check1" id="check1" onClick="dynInput(this);" value="{$salMail.email_id1}" />&nbsp;&nbsp;{$salMail.email_id1}</td>
				{/if}
				</tr>
				{/foreach}
				<tr>
				<th>To</th>		
				<td><textarea id="email_id1" name="email_id1" style="width:515px;" value="{$smarty.post.email_id1}">{$smarty.post.email_id1}</textarea></td>
			    </tr>	
				<tr>
				<th>cc</th>
				<td><input type="text" name="cc" id="cc" value="ss.ganesh.0007@gmail.com" style="width:515px;"/></td>
				</tr>
				<tr>
				<th>Subject</th>
				<td><textarea id="subject" name="subject" style="width:515px;" value="{$smarty.post.subject}">{$smarty.post.subject}</textarea></td>
				</tr>
				<tr>
				<th>Message</th>
				<td><textarea class="ckeditor" id="message" name="message" style="width:515px;" value="{$smarty.post.message}">{$smarty.post.message}</textarea></td>
				</tr>
				<tr>
				<th>Attachment 1</th>
				<td><input type="file" name="attachment1" id="attachment1" value="{$smarty.post.attachment1}"/>	</td>
				</tr>
				<tr>
				<th>Attachment 2</th> 
				<td><input type="file" name="attachment2" id="attachment2" value="{$smarty.post.attachment2}"/>	</td>
				</tr>
				<tr>
				<th>Attachment 3</th>
				<td><input type="file" name="attachment3" id="attachment3" value="{$smarty.post.attachment3}"/>	</td>
				</tr>
<!--				<tr>
				<th>Attachment 4</th> 
				<td><input type="file" name="attachment4" id="attachment4" value="{$smarty.post.attachment4}"/>	</td>
				</tr>
				<tr>
				<th>Attachment 5</th>
				<td><input type="file" name="attachment5" id="attachment5" value="{$smarty.post.attachment5}"/>	</td>
				</tr>
-->				<tr>
				 <input type="hidden" class="form-control" id="created_by" name="created_by" value="{$smarty.session.UserName}">
				 <input type="hidden" class="form-control" id="created_date" name="created_date" value="{$smarty.now|date_format:'%Y-%m-%d'}">
				 <input type="hidden" class="form-control" id="created_time" name="created_time" value="{$smarty.now|date_format:'%I:%M:%S %p'}">
				 <input type="hidden" class="form-control" id="timestamp" name="timestamp" value="{$smarty.now|date_format:'%Y-%m-%d &amp; %I:%M:%S %p'}">
				 </tr>
				 </table>
				<center>
					<input type="button" class="btn btn-info pull-center" value="Send Mail"  onClick="validate_mail(); ">&nbsp;&nbsp;
                   	</center>

				
				</form>
				</div>

<div class="control-sidebar-bg"></div>
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
	  
	  function updateTextArea() {  
   var allVals = [];
   $('.taglist2 :checked').each(function(i) {
          
       allVals.push((i!=0?"\r\n":"")+ $(this).val());
   });
   $('#email_id1').val(allVals).attr('rows',allVals.length) ;
    
   }
   $(function() {
      $('.taglist2 input').click(updateTextArea);
      updateTextArea();
});
    </script>
	{/literal}
  </body>

