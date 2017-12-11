
        </div>
            
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
            {if $SuccessMessage neq ""}
			<div class="isa_success">
			<i class="fa fa-check"></i>
			{$SuccessMessage}		 
			</div>
		 {/if}
		  {if $ErrorMessage neq ""}
			<div class="isa_error">
			<i class="fa fa-check"></i>
			{$ErrorMessage}		 
			</div>
		 {/if}
                
            </div>
            <div class="row">
                
                
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                          <h5 style="padding-left:40%;">Edit Product Details</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                               
                            </div>
                        </div>
                        <div class="ibox-content"><body onLoad="doOnLoad();">
                            <form method="post" id="productUpdate" name="productUpdate"class="form-horizontal">
							<input type="hidden"  id="hdAction"  name="hdAction" />
                              {foreach from=$PageList item=ListDet}
							   <div class="form-group">
							  <div id="err_scada_Id"> 
<label class="col-sm-2 control-label" style="text-align:left;">Scada_ID:</label>
<div class="col-md-3"><input type="text" id="scada_Id"  name="scada_Id"class="form-control"  maxlength="10" value="{$ListDet.scada_id}" onKeyUp="numericFilter(this)" autocomplete="Off"></div></div>
							  <div id="err_product_id">  
							   <label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Product_Id:</label>
							   <div class="col-md-3"><input type="text" id="product_id"  name="product_id"class="form-control" value="{$ListDet.product_id}" readonly="true" autocomplete="Off">
							   </div> </div>
							  
							   </div>	
                              <div class="form-group">
							   <div id="err_production_batch">  
							   <label class="col-sm-2 control-label" style="text-align:left;">Production_batch:</label>
							   <div class="col-md-3"><input type="text" id="production_batch"  name="production_batch"class="form-control" value="{$ListDet.Production_batch}" autocomplete="Off">
							   </div> </div>
							   <div id="err_production_date"> <label class="col-sm-2 control-label" style="text-align:left; margin-left:15%"> Production_date:</label>
                               <div class="col-md-3"><input type="date" id="production_date"  name="production_date" class="form-control" value="{$ListDet.Production_date}" readonly="true" autocomplete="Off">
							   </div>
							   </div>
							   
							   </div>	
                            <div class="form-group">
							<div id="err_tested_date"> 
										<label class="col-sm-2 control-label" style="text-align:left;"> Tested_date:</label>
										<div class="col-md-3"><input type="date"  id="tested_date"  name="tested_date"class="form-control" value="{$ListDet.Tested_date}" readonly="true" autocomplete="Off">
										</div>
										</div>
							  <div id="err_modify_date">  
							  <label class="col-sm-2 control-label" style="text-align:left;margin-left:15%">Modify_date:</label>
                               <div class="col-md-3"><input type="text" id="modify_date"  name="modify_date"class="form-control" value="{$smarty.now|date_format:'%Y-%m-%d'}" readonly="true" autocomplete="Off">
							   </div>
							   </div>	
							   
							   							    
							   </div>	
                             	   						   
                              <div class="form-group" >
							  <div id="err_modify_time"> 
								<label class="col-sm-2 control-label" style="text-align:left; ">Modify time:</label>
								<div class="col-md-3"><input type="text"  id="modify_time"  name="modify_time"class="form-control" value="{$smarty.now|date_format:'%I:%M:%S%p'}" readonly="true" autocomplete="Off">
								</div>
								</div>
							  <div id="err_modify_by">  
							  <label class="col-sm-2 control-label" style="text-align:left;margin-left:15%">Modify by:</label>
                               <div class="col-md-3"><input type="text" id="modify_by"  name="modify_by"class="form-control"  value="{$smarty.session.UserName}" readonly="true" autocomplete="Off">
							   </div>
							   </div>
							   		
                              </div>
							   <div class="form-group" >
							  <div id="err_modify_time"> 
								<label class="col-sm-2 control-label" style="text-align:left; ">Model Name:</label>
								<div class="col-md-3"><select id="modelName"  name="modelName" class="form-control"  value="{$ListDet.model_name}" autocomplete="Off">
						
								{foreach from=$ModelList  item=ListMod}
								  {if $ListMod.model_name eq $ListDet.model_name} 
								   <option value="{$ListMod.model_name}" selected="selected">{$ListMod.model_name}</option>	
							      {else}
							       <option value="{$ListMod.model_name}">{$ListMod.model_name} </option>
								  {/if}
							    {/foreach}
								</select>
								   
								
								</div>
								</div>
							 
							   		
                              </div>
							  {/foreach }
							  	<br />
								<!--
								<div class="row">
						   <div class="col-md-4">&nbsp;</div>
						   <div class="col-md-4">&nbsp;</div>
						   </div>													   												   													   
												<h3 class="m-t-none m-b" align="center">Product materials</h3>
                                                <div class="hr-line-dashed"></div>	   
                                 
                                        <div class="row">
                                            <div class="col-md-4"> 
											<select class="form-control input-lg" multiple="" name="exam16[]" id="exam16" size="10" value="{$exam16}">
												//	{foreach from=$PageList item=ListDet}
														<option value="{$ListDet.material_name}">{$ListDet.material_name}</option>	
													//{/foreach}
                                            </select>
											</div>
                                            <div class="col-md-1 top-buffer" >
											<br /><br /><br /><br /><br /><br />
											<input type="button" class="btn btn-sm btn-primary m-t-n-xs" name="add" value=">>" onClick="moveOptionLeftToRight(this.form.exam16,this.form.dexam16)" id="roleadd"><br><br>
   				                                   <input type="button" class="btn btn-sm btn-primary m-t-n-xs" name="remove" value="<<" onClick="moveOptionRightToLeft(this.form.dexam16, this.form.exam16)" id="roleremove">
											</div>
                                            <div class="col-md-4">
											 
											 <select class="form-control input-lg" multiple="" name="dexam16[]" id="dexam16" size="10" value="{$dexam16}">
												//	{foreach from=$MtrlList item=ListMtrl}  
													<option value="{$ListMtrl.material_name}">{$ListMtrl.material_name}</option>
													//{/foreach}  
                                              </select>
											 </div>
                                        </div>
                                   												   -->
													   
													   <div class="row">
													   <div class="col-md-4">&nbsp;</div>
													   <div class="col-md-4">&nbsp;</div>
                                                       </div>
													   
                                                        <div align="right">
                                         <div class="row"> 
                                         <div class="col-md-3"> 
						                 <button class="btn btn-primary" type="button" id="upDateProduct">UPDATE</button>
										<button class="btn btn-white" type="button" id="back">CANCEL</button>
                                      </div>
									   </div>
									   </div>
                                    </form>
                        </body>
						</div>
                    </div>
                </div>
            </div>
        </div>
		{literal}
		<script type="text/javascript">
		function getval()
        {
		var production_date,date2;
		production_date=document.getElementById("production_date").value;
		tested_date=document.getElementById("tested_date").value;
		if(production_date=="" || tested_date=="")
		{
			alert("Please Specify Date");
			return false;
		}
		
        }	
	var myCalendar;
function doOnLoad() {
    
    var production_date;
	production_date=new Date();
    myCalendar = new dhtmlXCalendarObject(["production_date"]);
	myCalendar = new dhtmlXCalendarObject(["tested_date"]);
   
}	
		// calendar in datepicker
			/*$(function(production_date) {
				//alert("test");
				$( "#production_date" ).datepicker({
					altField: "#validity",
					altFormat: "yy-mm-dd"
				});
			});
			$(function(tested_date) {
				//alert("test");
				$( "#tested_date" ).datepicker({
					altField: "#validity",
					altFormat: "yy-mm-dd"
				});
			});*/
// picker closed
		
        $(document).ready(function() {	
		 $('#side-menu').metisMenu();

$("#upDateProduct").click(function(){ 
				var fields=["scada_Id","product_id","production_batch","production_date","tested_date"];
				for(i=0;i<fields.length;i++)
				{
				
				current_iteration = document.getElementById(fields[i]).value;
				//alert(current_iteration);
				document.getElementById(fields[i]).style.borderColor="";
						if(current_iteration=="")
						{			
						document.getElementById(fields[i]).focus();
						document.getElementById(fields[i]).style.borderColor="red";									
									return false;
						}	

				}				
              FormName= document.productUpdate;
  			  FormName.method= "POST";
              FormName.submit(); 
			              });
										  
/*$("#mobileNo").keyUp(function(){
numericFilter();
}*/
			$("#back").click(function(){

window.history.back();

});				  
        
		 });
		 
		 
function numericFilter(data) 
{
   data.value = data.value.replace(/[^.0-9]/ig,"");
}	
function textFilter(data)
{
   data.value = data.value.replace(/[^ .a-z]/ig,"");
}		 
	
	   /* $('.datepicker').datepicker({
                todayBtn: "linked",
				format:'yyyy-mm-dd',
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });	*/ 
</script>
		<script src="jquery/jquery.ui.datepicker.js"></script>
<script type="text/javascript" src="dhtmlxMessage/codebase/dhtmlxcalendar.js" ></script>
<script type="text/javascript" src="./codebase/dhtmlxcalendar.js"></script>
<script type="text/javascript" src="./codebase/dhtmlxcommon.js"></script>
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
{/literal}
        