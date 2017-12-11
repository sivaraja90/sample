<?php /* Smarty version 2.6.25, created on 2016-07-06 18:59:54
         compiled from user_group_detail_view.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "left.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <body class="hold-transition skin-blue sidebar-mini" >
    
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
		<h4>
         <small class="active"><a href="user_group_list.php"><i class="fa fa-list"> <label class="font" style="font-family:Arial, Helvetica, sans-serif">
		 List User Groups</label></i></a></small>&ensp;&ensp;&ensp;
         <small><a href="user_group_reg.php"><i class="fa fa-user-plus"> <label class="font" style="font-family:Arial, Helvetica, sans-serif">
		 Create User Group</label></i></a></small>
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
                <div class="box-header  with-border">
				 <?php $_from = $this->_tpl_vars['MasterList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['View']):
?>
				<table width="118%">
				<tr>
				 <td >Created:<?php echo $this->_tpl_vars['View']['created_date']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['View']['created_time']; ?>
</td>
				 <td><h4 class="box-title">&nbsp;&nbsp;&nbsp;&nbsp;User Group Detailed View</h4>
				 <h4></h4></td>
				<td style="margin-left:-1000px;"> Modified:<?php echo $this->_tpl_vars['Date_Stamp']['0']['Date']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['Time_Stamp']['0']['Time']; ?>
</td>
				 </tr>
				 </table>
				<?php endforeach; endif; unset($_from); ?>
         
			
			<form class="form-horizontal" name="userGroupEdit">
			<input type="hidden" name="hdAction" />
			<?php if ($this->_tpl_vars['SuccessMessage'] != ""): ?>
			<div class="isa_success">
			<i class="fa fa-check"></i>
			<?php echo $this->_tpl_vars['SuccessMessage']; ?>
		 
			</div>
		 <?php endif; ?>
		  <?php if ($this->_tpl_vars['ErrorMessage'] != ""): ?>
			<div class="isa_error">
			<i class="fa fa-times"></i>
			<?php echo $this->_tpl_vars['ErrorMessage']; ?>
		 
			</div>
		 <?php endif; ?>
		 
                  <div class="box-body">
				  <?php $_from = $this->_tpl_vars['MasterList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['View']):
?>
				   <div class="col-md-6">
                    <div class="form-group">			 
                      <label class="col-sm-4 control-label thick">Group Id</label>
                      <div class="col-sm-6">
					  <?php echo $this->_tpl_vars['View']['group_id']; ?>

                      </div>
					  </div>
					
                    
					  <div class="form-group">			 
                      <label class="col-sm-4 control-label thick">Group Name</label>
                      <div class="col-sm-6">
					  <?php echo $this->_tpl_vars['View']['group_name']; ?>

                      </div>
					  </div>
					 
                   
					 <div class="form-group">			 
                      <label class="col-sm-4 control-label thick">Description</label>
                      <div class="col-sm-6">
					  <?php echo $this->_tpl_vars['View']['description']; ?>

                      </div>
                    </div>
				 
				<?php endforeach; endif; unset($_from); ?>
				 </div>
		                                        <div class="form-group">
											   <div class="col-md-4">&nbsp;</div>
											   <div class="col-md-4">&nbsp;</div>
											   </div>
						   
						   												
												<h3>Roles Creation</h3>
                                                <div class="hr-line-dashed"></div>	   
                                 
                                        <div class="form-group">
                                            <div class="col-md-4">
										 		<table class="table table-bordered table-striped" width="75%">																																							             									<?php $_from = $this->_tpl_vars['groupMapping']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDet']):
?>  
												<tr  id="<?php echo $this->_tpl_vars['i']++; ?>
">
								<td><?php echo $this->_tpl_vars['i']; ?>
</a></td>
								<td><?php echo $this->_tpl_vars['ListDet']['role_name']; ?>
</a></td>
								</tr>
								<?php endforeach; endif; unset($_from); ?>
								</table>
										
											 </div>
                                        </div>

					<!--**********************************************************-->

				</div>
				  </form>
				  </div>
                </div>
				</div>
				</div>
</section>
</div>
    
	  <div class="control-sidebar-bg"></div>
    </div>
	<?php echo '	
<script>
 $(document).ready(function() {	
$("#back").click(function goBack() {
    window.history.go(-1);
});
});

function ValidateEmail(inputText)  
		{  
		var mailformat = /^\\w+([\\.-]?\\w+)*@\\w+([\\.-]?\\w+)*(\\.\\w{2,3})+$/;  
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
			if(objTargetElement.options.length > 0 && objTargetElement.options[0].text == \'None\'){
				objTargetElement.options.length = 0;		
			}
			var intTargetLen = objTargetElement.length++;
			if((objSourceElement.options[i].text=="Other")&&(objSourceElement.name=="exam16[]"))
			{
				statuschng1(\'specdosh\',objSourceElement.name,objSourceElement.options[i].value)
			}
			
			objTargetElement.options[intTargetLen].text = objSourceElement.options[i].text;
			objTargetElement.options[intTargetLen].value = objSourceElement.options[i].value;
		/*	if(objSourceElement.name=="exam6[]")
			{
					partnrchnges(\'partnersubcaste\',objTargetElement);
			}*/
			
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
	if(objSourceElement.options.length > 0 && objSourceElement.options[0].text == \'None\'){
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
		objSourceElement.options[0].text = \'None\';
		objSourceElement.options[0].selected = false;
	}
}


$(document).on("click", ".fa-edit", function () {
     var roleId = $(this).data(\'id\');
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
               var fields=["group_name","description","dexam16"]; 
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
			  FormName= document.userGroupEdit;
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
label,td.thick
{
font-weight:bold;
}
label.font
{
font-weight: normal;
}
</style>
'; ?>

  </body>
</html>