<?php /* Smarty version 2.6.25, created on 2015-12-30 12:06:23
         compiled from ebgenerationEdit.tpl */ ?>

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
                          <h5 style="padding-left:40%;">Edit EB Details</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                               
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form name="eb_generation" id="eb_generation" method="post">
                        <input type="hidden" name="hdAction" />  
               <?php $_from = $this->_tpl_vars['PageList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDet']):
?>
                      <div class="form-group">
							  <div id="errsite_name"> 
                     <label class="col-sm-2 control-label" style="text-align:left;">Sites :</label>
                         <div class="col-md-3"><input type="text" id="site_name"  name="site_name"class="form-control" readonly="true" value="<?php echo $this->_tpl_vars['ListDet']['site_name']; ?>
" autocomplete="Off"></div></div>
							   <div id="errhtsc_grouping">  
							   <label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">HTSC No:</label>
							   <div class="col-md-3"> <input type="text" id="htsc_grouping"  name="htsc_no" class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['htsc_grouping']; ?>
 " maxlength="25"   maxlength="15" autocomplete="Off" ></div>
							   </div>
							   </div>
	<!--<table width="100%" cellpadding="2" cellspacing="0" border="0">	
            <tr><td>&nbsp;</td> </tr>
			<tr>
          <!--  <td><label>Select Region:</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="region" id="region" readonly="true" value="<?php echo $this->_supers['session']['Region']; ?>
" style="height:18px;"> &nbsp;&nbsp;<font class="error"><b>*</b>&nbsp;</font></td> 
				<td>Sites:
			    <select name="site_name" id="site_name" onChange="showGroup(this.value);" style="height:18px;">  
				<option value=0 selected="selected">----Please Select Region-----</option>
         			    </select>&nbsp;&nbsp;<font class="error"><b>*</b>&nbsp;</font></td>
                            
                            <td>HTSC No: </td>
                            <td >
                                <select id="htsc_grouping" name="htsc_no" style="height:18px;" >   
                                <option value=0 selected="selected">----Please Select Sites-----</option>
                                </select> 
                            </td>
</tr>-->
                            <br />
							<div class="form-group">
							  <div id="errfrom_date"> 
<label class="col-sm-2 control-label" style="text-align:left;">From Date :</label>
<div class="col-md-3"><input type="text" id="from_date"  name="from_date"class="form-control" readonly="true" value="<?php echo $this->_tpl_vars['ListDet']['from_date']; ?>
" autocomplete="Off"></div></div>
							   <div id="errto_date">  
							   <label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">To Date:</label>
							   <div class="col-md-3"> <input type="text" id="to_date"  name="to_date" class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['to_date']; ?>
" readonly="true" autocomplete="Off" ></div>
							   </div>
							   </div>
                           <!-- <tr><td><label>From Date:</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="from_date" name="from_date" size="15"  readonly="true" value="">&nbsp;&nbsp;<font class="error"   ><b>*</b>&nbsp;</font></td>
							 <td><label>To Date:</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="to_date" name="to_date" size="15"  readonly="true" value="">&nbsp;&nbsp;<font class="error"   ><b>*</b>&nbsp;</font></td>-->
                     <!--<td><input class="button" type='submit' name="get_details" value='Get Details' /></td>-->
				 
				            <div class="form-group">
							  <div id="errsite_name"> 
<label class="col-sm-2 control-label" style="text-align:left;">Imp KWH :</label>
<div class="col-md-3"><input type="text" id="imp_kwh"  name="imp_kwh"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['imp_kwh']; ?>
" autocomplete="Off"></div></div>
							   <div id="errhtsc_grouping">  
							   <label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Exp KWH:</label>
							   <div class="col-md-3"> <input type="text" id="exp_kwh"  name="exp_kwh" class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['exp_kwh']; ?>
 "  autocomplete="Off" ></div>
							   </div>
							   </div>
                         <div class="form-group">
							  <div id="errimp_kwh"> 
<label class="col-sm-2 control-label" style="text-align:left;">Imp KWH :</label>
<div class="col-md-3"><input type="text" id="imp_kwh"  name="imp_kwh"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['imp_kwh']; ?>
" autocomplete="Off"></div></div>
							   <div id="errexp_kwh">  
							   <label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Exp KWH:</label>
							   <div class="col-md-3"> <input type="text" id="exp_kwh"  name="exp_kwh" class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['exp_kwh']; ?>
 "  autocomplete="Off" ></div>
							   </div>
							   </div>
	                            <div class="form-group">
							  <div id="errimp_kvarh"> 
<label class="col-sm-2 control-label" style="text-align:left;">Imp KWH :</label>
<div class="col-md-3"><input type="text" id="imp_kvarh"  name="imp_kvarh"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['imp_kvarh']; ?>
" autocomplete="Off"></div></div>
							   <div id="errexp_kvarh">  
							   <label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Exp KWH:</label>
							   <div class="col-md-3"> <input type="text" id="exp_kvarh"  name="exp_kvarh" class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['exp_kvarh']; ?>
 "  autocomplete="Off" ></div>
							   </div>
							   </div>
							    <div class="form-group">
							  <div id="errimp_kva"> 
<label class="col-sm-2 control-label" style="text-align:left;">Imp KVA :</label>
<div class="col-md-3"><input type="text" id="imp_kva"  name="imp_kva"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['imp_kva']; ?>
" autocomplete="Off"></div></div>
							   <div id="errexp_kva">  
							   <label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Exp KVA:</label>
							   <div class="col-md-3"> <input type="text" id="exp_kva"  name="exp_kva" class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['exp_kva']; ?>
 "  autocomplete="Off" ></div>
							   </div>
							   </div>
	  <!-- </tr>
			</table>
			<table class="table table-striped table-bordered table-hover dataTables-example">
			<tr>
	        <th><center>Select</center></th>
            <th><center>Imp KWH</center></th>
			<th><center>Exp KWH</center></th>
			<th><center>Imp KVARH</center></th>
			<th><center>Exp KVARH</center></th>
			<th><center>Imp KVA</center></th>
			<th><center>Exp KVA</center></th>
            </tr>
		     <form name="power_generation" method="post" id="power_generation">
              <input type="hidden" name="hdAction" />  
			   
        <tr>
	   <td align="center"><input type="checkbox" id="select_id[]" name="select_id[]" value="" size="5" autocomplete="off"  ></td>	
	    <input type="hidden" id="htsc_no" name="htsc_no" value="<?php echo $this->_supers['get']['htsc_no']; ?>
"  size="15" autocomplete="Off" >
			<td><center><input type="text" id="imp_kwh" name="imp_kwh"  value="<?php echo $this->_supers['get']['imp_kwh']; ?>
" onkeyUp="numericFilter(this);return tab(this, event);addG('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');" tabindex="<?php echo $this->_tpl_vars['i']++; ?>
"  ></center></td>
			<td ><center><input type="text" id="exp_kwh" name="exp_kwh"  value="<?php echo $this->_supers['get']['exp_kwh']; ?>
"   onkeyUp="numericFilter(this);return tab(this, event);addG('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');" tabindex="<?php echo $this->_tpl_vars['i']++; ?>
" ></center></td>
			<td ><center><input type="text" id="imp_kvarh" name="imp_kvarh"  value="<?php echo $this->_supers['get']['imp_kvarh']; ?>
" onkeyUp="numericFilter(this);return tab(this, event);addG('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');" tabindex="<?php echo $this->_tpl_vars['i']++; ?>
" ></center></td>
			<td ><center><input type="text" id="exp_kvarh" name="exp_kvarh"  value="<?php echo $this->_supers['get']['exp_kvarh']; ?>
" onkeyUp="numericFilter(this);return tab(this, event);addG('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');" tabindex="<?php echo $this->_tpl_vars['i']++; ?>
"></center></td>
			<td ><center><input type="text" id="imp_kva" name="imp_kva"  value="<?php echo $this->_supers['get']['imp_kva']; ?>
" onkeyUp="numericFilter(this);return tab(this, event);addG('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');" tabindex="<?php echo $this->_tpl_vars['i']++; ?>
"  ></center></td>
			<td ><center><input type="text" id="exp_kva" name="exp_kva"  value="<?php echo $this->_supers['get']['exp_kva']; ?>
" onkeyUp="numericFilter(this);return tab(this, event);addG('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');" tabindex="<?php echo $this->_tpl_vars['i']++; ?>
" ></center></td>
			</tr>
			
			</table>-->
			<?php endforeach; endif; unset($_from); ?>
							  	<br/>
							  	 <div align="center">
                                         
                                        <button class="btn btn-primary" type="button" id="upDateCustomer">UPDATE</button>
										<button class="btn btn-white" type="button" name="back" id="back">CANCEL</button>
                                      </div>
									 
                                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		</div>
		
	
		
	<?php echo '	
		<script type="text/javascript">
		
        $(document).ready(function() {	
        $("#upDateCustomer").click(function(){
			var fields=["site_name","htsc_grouping","from_date","to_date","imp_kwh","exp_kwh","imp_kvarh","exp_kvarh","imp_kva","exp_kva"];
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
              FormName= document.eb_generation;
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
