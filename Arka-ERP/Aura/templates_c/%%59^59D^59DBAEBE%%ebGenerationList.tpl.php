<?php /* Smarty version 2.6.25, created on 2015-11-13 13:41:08
         compiled from ebGenerationList.tpl */ ?>
 </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Customer List</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="./customerReg.php">Customer Management</a>
                        </li>
                        <li>
                          <a href="#">List customer</a>  
                        </li>
					</ol>
                </div>
                
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
           <div class="row">
          <?php if ($this->_tpl_vars['SuccessMessage1'] != ""): ?>
			<div class="isa_success">
			<i class="fa fa-check"></i>
			<?php echo $this->_tpl_vars['SuccessMessage1']; ?>
		 
			</div>
		 <?php endif; ?>
		  <?php if ($this->_tpl_vars['ErrorMessage'] != ""): ?>
			<div class="isa_error">
			<i class="fa fa-check"></i>
			<?php echo $this->_tpl_vars['ErrorMessage']; ?>
		 
			</div>
		 <?php endif; ?>
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
                          <h5  style="padding-left:40%;">List Of Customer </h5>
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
</div>
</div>
</div>
</div>
</div>

<form name="power_generation" id="power_generation" method="post">
<input type="hidden" name="hdAction" />
	<table width="100%" cellpadding="2" cellspacing="0" border="0">	
            <tr><td>&nbsp;</td> </tr>
			
			
	<tr>
            <td><label>Select Region:</label></td>
                <td><input type="text" name="region" id="region" readonly="true" value="<?php echo $this->_supers['session']['Region']; ?>
"> &nbsp;&nbsp;<font class="error"><b>*</b>&nbsp;</font></td>
				<td>Sites:</td>
			    <td><select name="site_name" id="site_name" onChange="showGroup(this.value);" style="height:18px;">  >
				<option value=0 selected="selected">----Please Select Region-----</option>
         
	
			    </select>&nbsp;&nbsp;<font class="error"><b>*</b>&nbsp;</font></td>
                            
                            <td>HTSC No: </td>
                            <td >
                                <select id="htsc_grouping" name="htsc_no" style="height:18px;" >   
                                <option value=0 selected="selected">----Please Select Sites-----</option>
                                </select> 
                            </td>

     
	
        
           
                            <td><label>From Date:</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="panel_date" name="panel_date" size="25"  readonly="true" value="">&nbsp;&nbsp;<font class="error"   ><b>*</b>&nbsp;</font></td>
							<td><label>To Date:</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="panel_date" name="panel_date" size="25"  readonly="true" value="">&nbsp;&nbsp;<font class="error"   ><b>*</b>&nbsp;</font></td>
                     <!--<td><input class="button" type='submit' name="get_details" value='Get Details' /></td>-->
				 
       </tr>
       
       
			</form>
<?php echo '		
<script>
        $(document).ready(function() {	
			
$("#addCustomer").click(function(){
				var fields=["customerId","customerName","mobileNo","eMail","phone","designation","customerType","contactPerson","address1","city","state"];
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
              FormName= document.customerReg;
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
'; ?>

		

    