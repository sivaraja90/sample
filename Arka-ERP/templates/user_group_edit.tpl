{include file="left.tpl"}
  <body class="hold-transition skin-blue sidebar-mini" >
    <div class="wrapper">
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
		<h4>
         <small><a href="user_group_list.php"><i class="fa fa-list"> <label style="font-family:Arial, Helvetica, sans-serif">
		 List User Groups</label></i></a></small>&ensp;&ensp;&ensp;
         <small class="active"><a href="user_group_reg.php"><i class="fa fa-user-plus"> <label style="font-family:Arial, Helvetica, sans-serif">
		 Create User Group</label></i></a></small>
		 </h4>

        </section>

        <!-- Main content -->
        <section class="content">

          <!-- SELECT2 EXAMPLE -->
          <div class="box box-info">
            <div class="box-header with-border" align="center">
              <h3 class="box-title">User Group Management</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div><!-- /.box-header -->
			
			<form class="form-horizontal" name="userGroupReg">
			<input type="hidden" name="hdAction" />
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
                  <div class="box-body ">
				  {foreach from=$MasterList item=View}
				   <div class="col-md-6">
                    <div class="form-group">			 
                      <label class="col-sm-4 control-label">Group Id</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="group_id" name="group_id" value="{$View.group_id}" readonly="true" tabindex="1" placeholder="Group Id" readonly="true">
						<input type="hidden" class="form-control" id="timestamp" name="timestamp" value="{$smarty.now|date_format:'%Y-%m-%d &amp; %I:%M:%S %p'}">
						<input type="hidden" class="form-control" id="created_date" name="created_date" value="{$smarty.now|date_format:'%Y-%m-%d'}">
						<input type="hidden" class="form-control" id="created_time" name="created_time" value="{$smarty.now|date_format:'%I:%M:%S %p'}">
                      </div>
                    </div>
					  <div class="form-group">			 
                      <label class="col-sm-4 control-label">Group Name</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="group_name" name="group_name" tabindex="2" value="{$View.group_name}" placeholder="Group Name" autocomplete="Off" onKeyUp="textFilter(this);">
                      </div>
                    </div>
					 <div class="form-group">			 
                      <label class="col-sm-4 control-label">Description</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="description" name="description" tabindex="3" value="{$View.description}" placeholder="Desription" autocomplete="Off" onKeyUp="textFilter(this);">
                      </div>
                    </div>
				  </div>
				  {/foreach}
				  <div class="form-group">
						   <div class="col-md-4">&nbsp;</div>
						   <div class="col-md-4">&nbsp;</div>
						   </div>
						   
						   				<h3 class="m-t-none m-b">Roles Edit</h3>
                                                <div class="hr-line-dashed"></div>	   
                                 
                                  <div class="form-group">
                                  <div class="col-md-4"> 
					<select class="form-control input-lg" multiple="multiple" name="exam16[]" id="exam16" size="15" value="{$exam16}" autocomplete="Off" tabindex="4">
												{foreach from=$PageList item=ListDet}
														<option value="{$ListDet.role_name}">{$ListDet.role_name}</option>	
													{/foreach}	
                                            </select>
											</div>
                                            <div class="col-md-1 top-buffer" >
											<br /><br /><br /><br /><br /><br />
											<input type="button" class="btn btn-sm btn-primary m-t-n-xs" name="add" value=">>" onClick="moveOptionLeftToRight(this.form.exam16,this.form.dexam16)" id="roleadd" autocomplete="Off" ><br><br>
   				                                   <input type="button" class="btn btn-sm btn-primary m-t-n-xs" name="remove" value="<<" onClick="moveOptionRightToLeft(this.form.dexam16, this.form.exam16)" id="roleremove" autocomplete="Off" >
											</div>
                                            <div class="col-md-4">
		<select class="form-control input-lg" multiple="multiple" name="dexam16[]" id="dexam16" size="15" value="{$dexam16}" autocomplete="Off" tabindex="5">
													{foreach from=$groupMapping item=ListDet}
														<option value="{$ListDet.role_name}">{$ListDet.role_name}</option>	
													{/foreach}
                                              </select>
											 </div>
                                        </div>

					<!--**********************************************************-->

				</div>
				 <div class="box-footer"><center>
                   <input type="button" class="btn btn-info pull-center" value="CREATE USER GROUP"  onClick="listbox_selectall('dexam16', true);validate_fields();" >&nbsp;&nbsp;
                    <button type="submit" class="btn btn-info pull-center" id="back" >CANCEL</button></center>
                  </div>
				  </form>
				  </div>
                

      <div class="control-sidebar-bg"></div>
    </div>
	{literal}	
<script>
 $(document).ready(function() {	
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
			
//*************************************swapping start*********************************************//
function moveOptionLeftToRight(objSourceElement,objTargetElement)
{ 
	var aryTempSourceOptions = new Array();
	var x = 0;
	
	for (var i = 0; i < objSourceElement.length; i++){
		if (objSourceElement.options[i].selected){
			if(objTargetElement.options.length > 0 && objTargetElement.options[0].text == 'None'){
				objTargetElement.options.length = 0;		
			}
			var intTargetLen = objTargetElement.length++;
			if((objSourceElement.options[i].text=="Other")&&(objSourceElement.name=="exam16[]"))
			{
				statuschng1('specdosh',objSourceElement.name,objSourceElement.options[i].value)
			}
			
			objTargetElement.options[intTargetLen].text = objSourceElement.options[i].text;
			objTargetElement.options[intTargetLen].value = objSourceElement.options[i].value;
		
			
		}else{			
			var objTempValues = new Object();
			objTempValues.text = objSourceElement.options[i].text;
			objTempValues.value = objSourceElement.options[i].value;
			aryTempSourceOptions[x] = objTempValues;
			x++;
		}
	}
	objSourceElement.length = aryTempSourceOptions.length;	
	for (var i = 0; i < aryTempSourceOptions.length; i++) {
		objSourceElement.options[i].text = aryTempSourceOptions[i].text;
		objSourceElement.options[i].value = aryTempSourceOptions[i].value;
		objSourceElement.options[i].selected = false;
	}
	
}
function moveOptionRightToLeft(objSourceElement, objTargetElement){
	var aryTempSourceOptions = new Array();
	var x = 0;
	if(objSourceElement.options.length > 0 && objSourceElement.options[0].text == 'None'){
		return false;
	}
	for (var i = 0; i < objSourceElement.length; i++){
		if (objSourceElement.options[i].selected){
			var intTargetLen = objTargetElement.length++;
			objTargetElement.options[intTargetLen].text = objSourceElement.options[i].text;
			objTargetElement.options[intTargetLen].value = objSourceElement.options[i].value;
			
		}else{			
			var objTempValues = new Object();
			objTempValues.text = objSourceElement.options[i].text;
			objTempValues.value = objSourceElement.options[i].value;
			aryTempSourceOptions[x] = objTempValues;
			x++;
		}
	}
	objSourceElement.length = aryTempSourceOptions.length;	
	for (var i = 0; i < aryTempSourceOptions.length; i++){
		objSourceElement.options[i].text = aryTempSourceOptions[i].text;
		objSourceElement.options[i].value = aryTempSourceOptions[i].value;
		objSourceElement.options[i].selected = false;
	}
	if(objSourceElement.options.length == 0){
		objSourceElement.options.length = 1;
		objSourceElement.options[0].text = 'None';
		objSourceElement.options[0].selected = false;
	}
}


$(document).on("click", ".fa-edit", function () {
     var roleId = $(this).data('id');
     $(".modal-body #hdnGroupId").val(roleId);
});

function listbox_selectall(listID, isSelect) {
        var listbox = document.getElementById(listID);
        for(var count=0; count < listbox.options.length; count++) {
            listbox.options[count].selected = isSelect;
    }
}

function validate_fields()
{									  
               var fields=["group_name","description"]; 
				for(i=0;i<fields.length;i++)
				{
				current_iteration = document.getElementById(fields[i]).value;
				document.getElementById(fields[i]).style.borderColor="";
						 if(current_iteration=="")
						{
						document.getElementById(fields[i]).focus();
						document.getElementById(fields[i]).style.borderColor="red";
						if(i==0)
						{
						var group_name  =  document.getElementById("group_name").value;
						if(group_name=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Group Name",
											});
									return false;
						}
						}
						if(i==1)
						{
						var description =  document.getElementById("description").value;
						if(description=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Description",
											});
									return false;
						}
						}								
						return false;
						
						}	
				}
			  FormName= document.userGroupReg;
  			  FormName.method= "POST";
              FormName.submit(); 		
	          
 }

</script><style>
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
	<script type='text/javascript' src='./auto-complete/jquery.metadata.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery.auto-complete.js?<?= mktime() ?>'></script>
	<script type='text/javascript' src='./auto-complete/js.js?<?= mktime() ?>'></script>
	<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/> 
	<link rel='stylesheet' type='text/css' href='auto-complete/jquery.auto-complete.css?<?= mktime() ?>' />
	

{/literal}
  </body>
</html>
