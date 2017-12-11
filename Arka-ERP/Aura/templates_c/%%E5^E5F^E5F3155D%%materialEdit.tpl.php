<?php /* Smarty version 2.6.25, created on 2017-01-21 17:17:47
         compiled from materialEdit.tpl */ ?>

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
                          <h5 style="padding-left:40%;">Edit Material Details</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                               
                            </div>
                        </div>
                        <div class="ibox-content"><body onLoad="doOnLoad();">
                            <form method="post"  name="materialUpdate" id="materialUpdate" class="form-horizontal">
							<input type="hidden" name="hdAction" id="hdAction">
							<?php $_from = $this->_tpl_vars['PageList3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDet']):
?>
							<div class="ibox-title">
                          <h5  style="padding-left:40%;">Material Information:</h5>
						  </div>
							   	 <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Material Type:</label>
                               <div class="col-md-4"  id="errmaterialType"> <input type="text" id="materialype" name="materialType" class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['m_type']; ?>
" autocomplete="off">						</div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">Price:</label>
							   <div class="col-md-4" id="errprice"> <input type="text"  id="price"  name="price" class="form-control" maxlength="19" value="<?php echo $this->_tpl_vars['ListDet']['price']; ?>
" autocomplete="off" onKeyUp="numericFilter(this)"></div>
							   </div>
							    <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Material Category:</label>
                               <div class="col-md-4"  id="errmaterialCategory"> <input type="text" id="materialCategory" name="materialCategory" class="form-control" autocomplete="off" value="<?php echo $this->_tpl_vars['ListDet']['m_cat']; ?>
">						</div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">Date:</label>
							   <div class="col-md-4" id="errdate"> <input type="text"  id="date"  name="date" class="form-control" maxlength="19" value="<?php echo $this->_tpl_vars['ListDet']['doe']; ?>
" autocomplete="off"></div>
							   </div>
							    <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Material Code:</label>
                               <div class="col-md-4"  id="errmaterialCode"> <input type="text" id="materialCode" name="materialCode" class="form-control" autocomplete="off" value="<?php echo $this->_tpl_vars['ListDet']['m_code']; ?>
">						</div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">Material Name:</label>
							    <div class="col-md-4"  id="errmaterialName"> <input type="text" id="materialName" name="materialName" class="form-control" autocomplete="off" value="<?php echo $this->_tpl_vars['ListDet']['m_name']; ?>
">						</div>
							   </div>
							    <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Material Description:</label>
                               <div class="col-md-4"  id="errmaterialDescription"> <textarea id="materialDescription" name="materialDescription" class="form-control" autocomplete="off" rows="2" cols="8"><?php echo $this->_tpl_vars['ListDet']['description']; ?>
</textarea>						</div>
							    </div>
		   <?php endforeach; endif; unset($_from); ?>
		   <br/>

		 											  	 <div align="center">
                                         
                                        <button class="btn btn-primary" type="button" id="upDateMaterial">UPDATE</button>
										<button class="btn btn-primary" type="button" id="addMaterial">RESET</button>
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
        $("#upDateMaterial").click(function(){
			var fields=["materialype","price","materialCategory","date","materialCode","materialName","materialDescription"];
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
              FormName= document.materialUpdate;
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
</script>
<script>
function getval()
        {
		var date;
		date=document.getElementById("date").value;
		
		if(date=="" )
		{
			alert("Please Specify Date");
			return false;
		}
		
        }	
	var myCalendar;
function doOnLoad() {
    
    var date;
	date=new Date();
    myCalendar = new dhtmlXCalendarObject(["date"]);
	
   
}
	 </script>
	 <script>
function numericFilter(data) 
{
   data.value = data.value.replace(/[^.0-9]/ig,"");
}	
function textFilter(data)
{
   data.value = data.value.replace(/[^ .a-z]/ig,"");
}		 
	
/*	    $(\'.datepicker\').datepicker({
                todayBtn: "linked",
				format:\'yyyy-mm-dd\',
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });*/	 
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
<link rel="stylesheet" type="text/css" href="css/datepickier_main.css">
	 	    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
	  		<link rel="stylesheet" href="./codebase/dhtmlxcalendar.css" type="text/css">
			<link rel="stylesheet" href="./codebase/dhtmlxcalendar_dhx_skyblue.css" type="text/css"> 
			<link rel="stylesheet" href="./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css">
			<link rel="stylesheet" type="text/css" href="css/datepicker.css">	
			<script type="text/javascript" src="dhtmlxMessage/codebase/dhtmlxcalendar.js" ></script>
<script type="text/javascript" src="./codebase/dhtmlxcalendar.js"></script>
<script type="text/javascript" src="./codebase/dhtmlxcommon.js"></script>	
		<script src="jquery/jquery.ui.datepicker.js"></script>
        '; ?>