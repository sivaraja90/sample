<?php /* Smarty version 2.6.25, created on 2015-11-30 17:24:59
         compiled from powergenerationEdit.tpl */ ?>

        </div>
            
         <div class="wrapper wrapper-content animated fadeInRight">
           <div class="row">
          <?php if ($this->_tpl_vars['SuccessMessage'] != ""): ?>
			<div class="isa_success">
			<i class="fa fa-check"></i>
			<?php echo $this->_tpl_vars['SuccessMessage']; ?>
		 
			</div>
		 <?php endif; ?>
		  <?php if ($this->_tpl_vars['ErrorMessage'] != ""): ?>
			<div class="isa_error">
			<i class="fa fa-check"></i>
			<?php echo $this->_tpl_vars['ErrorMessage']; ?>
		 
			</div>
		 <?php endif; ?>
            <div class="row">
                
                
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                          <h5 style="padding-left:40%;">Edit Panel Details</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                               
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form method="post"  name="panelUpdate" id="panelUpdate" class="form-horizontal">
						<!--	<input type="hidden"  id="hdAction"  name="hdAction" /> 
                                 <?php $_from = $this->_tpl_vars['PageList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDet']):
?>    -->

	<table width="100%" cellpadding="2" cellspacing="0" border="0">	
            <tr><td>&nbsp;</td> </tr>
	<tr>
          <!--  <td><label>Select Region:</label></td>
                <td><input type="text" name="region" id="region" readonly="true" value="Thirunelveli"></td>  -->
				<td>Sites:</td>
			   <!-- <td><select name="site_name" id="site_name" onChange="showGroup(this.value);" style="height:18px;">  >-->
			    <td><select name="site_name" id="site_name"  style="height:20px;">  
				<option value="Region">---Please Select Site---</option>
         		<?php $_from = $this->_tpl_vars['SiteList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Listsite']):
?>	
							   <option value="<?php echo $this->_tpl_vars['Listsite']['site_name']; ?>
"><?php echo $this->_tpl_vars['Listsite']['site_name']; ?>
 </option>
							    <?php endforeach; endif; unset($_from); ?>			   
								</select>&nbsp;&nbsp;<font class="error"><b>*</b>&nbsp;</font></td>
                            
<!--                            <td>HTSC No: </td>
                            <td >
                                <select id="htsc_grouping" name="htsc_no" style="height:18px;" >   
                                <option value=0 selected="selected">----Please Select Sites-----</option>
                                </select> 
                            </td>-->
                                 <td><label>Panel Date:</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="panel_date" name="panel_date" size="25"  readonly="true" value="<?php echo $this->_tpl_vars['Date1']; ?>
"  >&nbsp;&nbsp;<font class="error"   ><b>*</b>&nbsp;</font></td>
                     <!--<td><input class="button" type='submit' name="get_details" value='Get Details' /></td>-->
				 
       </tr>
		</table>
                          	     <!--	<?php endforeach; endif; unset($_from); ?>  -->
							  	<br/>
							  	 <div align="center">
                                         
                                        <button class="btn btn-primary" type="button" id="upDatePanel">UPDATE</button>
										<button class="btn btn-white" type="button" name="back" id="back">CANCEL</button>
                                      </div>
									 
                                    </form>
                        </div>
                    </div>
					</div>
                </div>
            </div>
        </div>`
		
	<?php echo '	
		<script type="text/javascript">
		
        $(document).ready(function() {	
        $("#upDatePanel").click(function(){
			var fields=["Select","Location No","G1 KWh","G2 KWh","Total KWh","G1 Hrs","G2 Hrs","FW Hrs","GD Hrs","MT Hrs","BD Hrs"];
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
              FormName= document.panelUpdate;
			  		alert(current_iteration);
  			  FormName.method= "POST";
              FormName.submit(); 
			                 });

$("#back").click(function(){

window.history.back();

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
	
	    $(\'.datepicker\').datepicker({
                todayBtn: "linked",
				format:\'yyyy-mm-dd\',
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });	 
</script>
<script src="dhtmlxMessage/codebase/dhtmlxcalendar.js" type="text/javascript"></script>
<script src="codebase/dhtmlxcalendar.js" type="text/javascript"></script>
<script src="codebase/dhtmlxcommon.js" type="text/javascript"></script>


	<script>
	$(function(Date1) {
				//alert("test");
				$( "#panel_date" ).datepicker({
					altField: "#validity",
					altFormat: "yy-mm-dd"
				});
			});
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
     <link rel="codebase/dhtmlxcalendar.css" type="text/css">
	 <link rel="codebase/dhtmlxcalendar_dhx_skyblue.css" type="text/css">
	 <link rel="codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css">
	 
</style>
        '; ?>
