<?php /* Smarty version 2.6.25, created on 2016-12-20 14:39:17
         compiled from phone_prepaidDetails.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'phone_prepaidDetails.tpl', 134, false),)), $this); ?>

        </div><body onLoad="doOnLoad()">
        <div class="wrapper wrapper-content animated fadeInRight" >
            <div class="row">
            
                
            </div>
<!--            <div class="row">
                
                
            </div>
-->            <div class="row">
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
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                          <h5 style="padding-left:40%;">Phone Prepaid Details</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                               
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form method="post" class="form-horizontal" name="prepaidDetail">
                        <?php $_from = $this->_tpl_vars['PageList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDet']):
?>
							  
							   <div class="form-group">
							  
							  <div id="errsimId"> 
							   <label class="col-sm-2 control-label" style="text-align:left;">Sim ID:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['sim_id']; ?>
</td></div></div>
							   <div id="errsimNo">  
							   <label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Sim No:</label>
							   <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['sim_no']; ?>
</td></div></div>
							   </div>
                              <div class="form-group">
							   <div id="errmobileNo"> <label class="col-sm-2 control-label" style="text-align:left;"> Mobile No:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['mobile_no']; ?>
</td></div></div>
							<div id="errserviceNo"> 
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%"> Service No:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['service_no']; ?>
</td></div></div>
							</div>
							  <div class="form-group">
							   <div id="errnetwork"> <label class="col-sm-2 control-label" style="text-align:left;">Network:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['network']; ?>
</td></div></div>
							<div id="errvalidity"> 
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%"> Validity:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['validity']; ?>
</td></div></div>
							</div>
							  <div class="form-group">
							   <div id="errsimType"> <label class="col-sm-2 control-label" style="text-align:left;"> Sim Type:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['sim_type']; ?>
</td></div></div>
							<div id="errcircle"> 
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%"> Circle:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['circle']; ?>
</td></div></div>
							</div>
							<hr/>
							
							
							<div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;"> Recharge Details:</label>
                               
							<table class="table table-striped table-bordered table-hover dataTables-example"  >
								<tr>
								<th><center>Recharge Type</center></th>
                                <th><center>Recharge Amount</center></th>
								<th><center>Recharge Date</center></th>
                                <th><center> No_Of_Validity_Day's</center></th>
								<th><center> Valid_upto</center></th>
								<th><center> Action </center></th>
						        </tr>
						 <?php $_from = $this->_tpl_vars['PrepaidList1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListPrepaid']):
?>		
                    <tr class="gradeX" >
					
			<td class="form-control-2"><?php echo $this->_tpl_vars['ListPrepaid']['recharge_type']; ?>
</td>	
		  	<td class="form-control-2"><?php echo $this->_tpl_vars['ListPrepaid']['recharge_amount']; ?>
</td>			        
		    <td class="form-control-2"><?php echo $this->_tpl_vars['ListPrepaid']['recharge_date']; ?>
</td>	          	
            <td class="form-control-2"><?php echo $this->_tpl_vars['ListPrepaid']['no_of_validity_days']; ?>
</td>
			<td class="form-control-2"><?php echo $this->_tpl_vars['ListPrepaid']['validity_upto']; ?>
</td>	
			<td class="form-control-2" ><center><a href="#" class="fa fa-trash" onClick="deleteCats('<?php echo $this->_tpl_vars['ListDet']['sim_id']; ?>
','<?php echo $this->_tpl_vars['ListPrepaid']['sl_no']; ?>
');"></a></center></td>
		   
							  </tr><?php endforeach; endif; unset($_from); ?>
						
						 </table>
						  <div align="center">
                                         <button class="btn btn-primary" type="button" id="recharge" >Recharge</button>
<!--                                        <button class="btn btn-primary" type="button" onClick="validate()">ADD CUSTOMER</button>
-->										<button class="btn btn-primary" id="back" type="button">BACK</button>
                                      </div>
							</div>
							
							      <?php endforeach; endif; unset($_from); ?>
							  <br/>
								 <div  id="rechargeAdd" style="display:none">
									<table class="table table-striped table-bordered table-hover dataTables-example"  border="1px solid" >
								<tr>
								<th><center>Recharge_Type</center></th>
								<th><center>Recharge_Amount</center></th>
                                <th><center>Recharge_Date</center></th>
								<th><center>No_Of_Validity_Day's</center></th>
                                <th><center>Valid_Upto</center></th>
							
                                
						        </tr>
								
                    <tr class="gradeX" >
			  <input type="hidden"  id="hdAction"  name="hdAction" />
			    <input type="hidden" id="simId" name="simId" value="<?php echo $this->_tpl_vars['ListDet']['sim_id']; ?>
" class="form-control-2">
				<td><select class="form-control-1" name="recharge_type" id="recharge_type" value="<?php echo $this->_tpl_vars['recharge_type']; ?>
" autocomplete="off">
							   				  <option value="-Select-" >-Select-</option>
  											  <option value="Talk_Time" >Talk_Time</option>
											  <option value="SMS" >SMS</option>
											  <option value="2G">2G</option>
											  <option value="3G">3G</option>
											</select>	</td>	
		  	<td><input type="text"  id="recharge_amount"  name="recharge_amount" class="form-control-2" onKeyUp="numericFilter(this)" value="<?php echo $this->_tpl_vars['recharge_amount']; ?>
" autocomplete="off"></td>			        
		    <td><input type="text"  id="recharge_date"  name="recharge_date" class="form-control-2" value="<?php echo $this->_tpl_vars['recharge_date']; ?>
" onClick="calc();" autocomplete="off" ></td>          	
           <td><input type="text"  id="no_of_validity_days"  name="no_of_validity_days" class="form-control-2"  value="<?php echo $this->_tpl_vars['no_of_validity_days']; ?>
"  autocomplete="off" onKeyUp="validDate();"></td>	 
			
			<td><input type="text"  id="valid_upto"  name="valid_upto"class="form-control-2" value="<?php echo $this->_tpl_vars['valid_upto']; ?>
" autocomplete="off"  onKeyUp="numericFilter(this);"></td>
		  	<input type="hidden" id="created_date" name="created_date" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
">		        
		    <input type="hidden" id="created_time" name="created_time" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%I:%M:%S %p')); ?>
">          	
            <input type="hidden" id="created_by" name="created_by" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
">
							  </tr>
					
						 </table>
						  <div align="center">
                                         <button class="btn btn-primary" type="button" id="rechargeReg" name="rechargeReg" >Recharge Add</button>
<!--                                        <button class="btn btn-primary" type="button" onClick="validate()">ADD CUSTOMER</button>
-->										<button class="btn btn-primary" id="back1"  name="back1" type="button" >BACK</button>
                                      </div>
					
							</div>
							  
                                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
		</body>
		<?php echo '
			<script type="text/javascript" src="dhtmlxMessage/codebase/dhtmlxcalendar.js" ></script>
			<script type="text/javascript" src="./codebase/dhtmlxcalendar.js"></script>
			<script type="text/javascript" src="./codebase/dhtmlxcommon.js"></script>
			<script src="jquery/jquery.ui.datepicker.js"></script>

         	
           <link rel="stylesheet" type="text/css" href="css/datepickier_main.css">
	 	    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
	  		<link rel="stylesheet" href="./codebase/dhtmlxcalendar.css" type="text/css">
			<link rel="stylesheet" href="./codebase/dhtmlxcalendar_dhx_skyblue.css" type="text/css"> 
			<link rel="stylesheet" href="./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css">
			<link rel="stylesheet" type="text/css" href="css/datepicker.css">
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

    body.DTTT_Print {
        background: #fff;

    }
    .DTTT_Print #page-wrapper {
        margin: 0;
        background:#fff;
    }

    button.DTTT_button, div.DTTT_button, a.DTTT_button {
        border: 1px solid #e7eaec;
        background: #fff;
        color: #676a6c;
        box-shadow: none;
        padding: 6px 8px;
    }
    button.DTTT_button:hover, div.DTTT_button:hover, a.DTTT_button:hover {
        border: 1px solid #d2d2d2;
        background: #fff;
        color: #676a6c;
        box-shadow: none;
        padding: 6px 8px;
    }

    .dataTables_filter label {
        margin-right: 5px;

    }
</style>
		<script type="text/javascript">
		// calendar in datepicker
			function getval()
        {
		var recharge_date,valid_upto;
		recharge_date=document.getElementById("recharge_date").value;
		valid_upto=document.getElementById("valid_upto").value;
		if(recharge_date=="" || valid_upto=="")
		{
			alert("Please Specify Date");
			return false;
		}
		
        }	
var myCalendar;
function doOnLoad() { 
    
    var recharge_date;
	recharge_date=new Date();
    myCalendar = new dhtmlXCalendarObject(["recharge_date"]);
	//myCalendar = new dhtmlXCalendarObject(["valid_upto"]);
   
}	
		</script>
		<script>	
function validDate()
{
var d = new Date(document.getElementById("recharge_date").value);
var numberOfDaysToAdd = document.getElementById("no_of_validity_days").value;
d.setDate(d.getDate() + +numberOfDaysToAdd);
var dd = d.getDate();
var mm = d.getMonth() + 1;
var y = d.getFullYear();
var someFormattedDate = y + \'-\'+ mm + \'-\'+ dd;
document.getElementById("valid_upto").value = someFormattedDate;
}			
</script>
<script>
// picker closed
function numericFilter(data) 
{
   data.value = data.value.replace(/[^.0-9]/ig,"");
}	
function textFilter(data)
{
   data.value = data.value.replace(/[^ .a-z]/ig,"");
}	
		
        $(document).ready(function() {	
			
			 $("#rechargeReg").click(function(){
				var fields=["recharge_type","recharge_amount","no_of_validity_days","valid_upto","recharge_date"];
				for(i=0;i<fields.length;i++)
				{
		
				current_iteration = document.getElementById(fields[i]).value;
			//alert(fields[i]);
				document.getElementById(fields[i]).style.borderColor="";
						if(current_iteration=="")
						{			
						document.getElementById(fields[i]).focus();
						document.getElementById(fields[i]).style.borderColor="red";									
									return false;
						}	

				}	
              FormName= document.prepaidDetail;
  			  FormName.method= "POST";
              FormName.submit(); 
			                 });
										  
			
				$("#recharge").click(function(){
					
					document.getElementById(\'rechargeAdd\').style.display=\'inherit\';
				});
				$("#back1").click(function(){
					
					 $("#rechargeAdd").hide();
				});
				$(document).on("click", ".fa-trash", function () {
     var simId = $(this).data(\'id\');
     $(".modal-body #hdnDelsimId").val(simId);
});
 function addG1()
         {  
        var g1 = document.getElementById(\'recharge_date\' + "["+$parmtr+"]").value;
        var g2 = document.getElementById(\'no_of_validity_days\' + "["+$parmtr+"]").value;
        var tot = +g1 + +g2 ;
		document.getElementById(\'valid_upto\'+"["+$parmtr+"]").value=tot;
         }
/*function sum() {
      var txtFirstNumberValue = document.getElementById(\'recharge_date\').value;
      var txtSecondNumberValue = document.getElementById(\'no_of_validity_days\').value;
      var result = txtFirstNumberValue  + parseInt(txtSecondNumberValue);
      if (!isNaN(result)) 
	  {
         document.getElementById(\'valid_upto\').value = result;
      }
			  }*/
			  
			 /* function getdate() {
			  alert("hiiiii");
    var rd = document.getElementById(\'recharge_date\').value;
   
	  
    var date = new Date(rd);
    var newdate = new Date(date);

    newdate.setDate(newdate.getDate() + 3);
    
    var dd = newdate.getDate();
    var mm = newdate.getMonth() + 1;
    var y = newdate.getFullYear();<br />


    var someFormattedDate = mm + \'/\' + dd + \'/\' + y;
    document.getElementById(\'valid_upto\').value = someFormattedDate;
}
        */
function deletePrepaid(delData)
{
	if(confirm("Are you sure to Delete?"))
	{
				
					$(\'#modal-form3\').modal(\'show\')
													
					$("#phoneDeleteLoader").css("display","block");
					$.ajax({
					url: "./phone_prepaidDetails.php/deletePrepaid",
					type:"POST",
					beforeSend:function()
					{
					
					},
					data:{simId:delData},
					success: function(result)
					{
					$("#phoneDeleteLoader").css("display","none");
					$("#succsMsgPhoneDelete").html(result);
					setTimeout(function(){location.reload(); }, 2000);
					
					
					}
					});	
	}
	else
	{
		
	return false;
	}				

}
		 $(\'#side-menu\').metisMenu();
		 $("#back").click(function(){

         window.history.back();

         });

		 });
		 $(document).on("click", ".fa-trash", function () {
     var simId = $(this).data(\'id\');
     $(".modal-body #hdnDelsimId").val(simId);
});

		
		function deleteCats(CatIdent,SoIdent){
 if(confirm("Are you sure to Delete this Content?")){
 
  FormName		= document.prepaidDetail;
  FormName.action= "./phone_prepaidDetails.php?simId="+CatIdent+"&sno="+SoIdent;
  FormName.submit();
 }
 }
 $(document).ready(function(){

    $("#valid_upto").datepicker();

    $("#recharge_date").datepicker({

        onSelect: function(){

            var fecha = $(this).datepicker(\'getDate\');

            $("#valid_upto").datepicker("setDate", new Date(fecha.getTime()));

            $("#valid_upto").datepicker("setDate", "+15d");

        }

    });

});  
		 </script>
		 '; ?>