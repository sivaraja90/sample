      </div>
            
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
            
                
            </div>
            <div class="row">
                
                
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5 style="padding-left:40%;">Product Details</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                             
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form method="post" class="form-horizontal" name="prodDet" id="prodDet">
                  {foreach from=$PageList item=ListDet}
				  <div class="form-group">
				     <div id="err_Scada_Id"> 
				        <label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Scada_Id:</label>
                        <div class="col-md-2 control-label" style="text-align:left;">{$ListDet.scada_id}</div></div>
						<div id="err_Product_id">  
							  <label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Product_Id:</label>
							  <div class="col-md-2 control-label" style="text-align:left;"><td>{$ListDet.product_id}</td></div></div>
						  </div>
						  
                           <div class="form-group">
						    <div id="err_Production_batch">  
							  <label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Production_batch:</label>
							  <div class="col-md-2 control-label" style="text-align:left;"><td>{$ListDet.Production_batch}</td></div></div>
							  <div id="err_Production_date"> 
							     <label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Production_date:</label>
                                 <div class="col-md-2 control-label" style="text-align:left;"><td>{$ListDet.Production_date}</td></div></div>
							       
							</div>
							  <div class="form-group">
							   <div id="err_Tested_date"> 
							     	<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%"> Tested_date:</label>
							        <div class="col-md-2 control-label" style="text-align:left;"><td>{$ListDet.Tested_date}</td></div></div>
							   <div id="err_Modify_date"> 
							   		<label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Model_Name:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td>{$ListDet.model_name}</td></div></div>
							
							</div>
							  <div class="form-group">
							  <div id="err_Modify_time"> 
									<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%">Modify_time:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td>{$ListDet.Modify_time}</td></div></div>
							   <div id="err_Modify_by">
							   		<label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Modify_by:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td>{$ListDet.Modify_by}</td></div></div>
							</div>
							<div class="form-group">
					         <div id="err_Modify_date"> 
							   		<label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Modify_date:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td>{$ListDet.Modify_date}</td></div></div>
							   <br/><br/>
							   <div id="err_MaterialDetails"> 
							   
							   <table class="table table-striped table-bordered table-hover dataTables-example"  >
								<tr>
								<th><center>Material Name</center></th>
								<th><center>Production Serial_No</center></th>
                                <th><center>Model</center></th>
								<th><center>Make</center></th>
                                <th><center>Spec</center></th>
                                
						        </tr>
								{foreach from=$MtrlDet item=DetMtrl}
                    <tr class="gradeX" >
			
			<td>{$DetMtrl.material_name}</td>	
		  	<td>{$DetMtrl.prod_sl_no}</td>			        
		    <td>{$DetMtrl.model}</td>	          	
            <td>{$DetMtrl.make}</td>
			
			<td>{$DetMtrl.spec}</td>	
		  
							  </tr>
						 {/foreach}
						 </table>
						 <table class="table table-striped table-bordered table-hover dataTables-example" >
							   	<td>	<label class="col-sm-2 control-label" style="text-align:left; margin-left:15%"><h3>Material Change:</h3></label>
                               <div class="col-md-2 control-label" style="text-align:left;"><button class="btn btn-primary" type="button" id="pwdchange">Click Here!</button> </div></td></table></div>
							</div>
							    {/foreach}  
								 <!--{foreach from=$ProdMat item=MatProd}
								     <table class="table table-striped table-bordered table-hover dataTables-example" border="1px solid" >
								<tr>
								<th><center>Material Name</center></th>
								<th><center>Production Serial_No</center></th>
                                <th><center>Model</center></th>
								<th><center>Make</center></th>
                                <th><center>Spec</center></th>
                                
						        </tr>
								
                    <tr class="gradeX" >
			
			<td><input type="text" id="material_name" name="material_name" value="{$MatProd.material_name}" readonly="true"></td>	
		  	<td><input type="text" id="prod_sl_no" name="prod_sl_no" value="{$MatProd.prod_sl_no}"></td>			        
		    <td><input type="text" id="model" name="model" value="{$MatProd.model}"></td>	          	
            <td><input type="text" id="make" name="make" value="{$MatProd.make}"></td>
			
			<td><input type="text" width="120px" id="spec" name="spec" value="{$MatProd.spec}"></td>	
		  	<input type="hidden" id="created_date" name="created_date" value="">		        
		    <input type="hidden" id="created_time" name="created_time" value="">          	
            <input type="hidden" id="created_by" name="created_by" value="">
							  </tr>
						
						 </table>
								 {/foreach}-->
							  	<br/>
								 <div class="form-group" id="chg_pwd" style="display:none">
									<table class="table table-striped table-bordered table-hover dataTables-example" border="1px solid" >
								<tr>
								<th><center>Material Name</center></th>
								<th><center>Production Serial_No</center></th>
                                <th><center>Model</center></th>
								<th><center>Make</center></th>
                                <th><center>Spec</center></th>
								<th><center>Last Material_status</center></th>
                                
						        </tr>
								
                    <tr class="gradeX" >
			
			<td><select id="material_name"  name="material_name"  value="{$material_name}" autocomplete="Off">
						        <option value="select" selected="selected">-select- </option>
								{foreach from=$MtrlList item=ListMtrl}	
							    <option value="{$ListMtrl.material_name}">{$ListMtrl.material_name} </option>
							    {/foreach}
								</select>	</td>	
		  	<td><input type="text" id="prod_sl_no" name="prod_sl_no" value="" ></td>			        
		    <td><input type="text" id="model" name="model" value="" ></td>	          	
            <td><input type="text" id="make" name="make" value="" ></td>
			
			<td><input type="text" id="spec" name="spec" value="" ></td>
			<td><select  id="Last_Mtrl_status" name="Last_Mtrl_status" value="{$Last_Mtrl_status}" autocomplete="off" style="width:100%">
  											  <option value="Select" >Select</option>
											  <option id="active" name="active" value="Active" >Active</option>
											  <option id="service" name="service" value="Service" >Service</option>
											  <option id="failure" name="failure" value="Failure" >Failure</option>
											</select></td>		
		  	<input type="hidden" id="created_date" name="created_date" value="">		        
		    <input type="hidden" id="created_time" name="created_time" value="">          	
            <input type="hidden" id="created_by" name="created_by" value="">
							  </tr>
						
						 </table>
					
							</div>
					
							   <div align="center">
                                         
                                        <button class="btn btn-primary" type="button" id="profileUpdate" >UPDATE</button>
									<button class="btn btn-primary" type="button" id="back">BACK</button>
                                      </div>
                                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		{literal}<script type="text/javascript">
		
        $(document).ready(function() {	
			
			$("#profileUpdate").click(function(){
			var fields=["material_name","prod_sl_no","model","make","spec","Last_Mtrl_status"];
					
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
              FormName= document.prodDet;
  			  FormName.method= "POST";
              FormName.submit(); 
				});
			
				$("#pwdchange").click(function(){
					document.getElementById('chg_pwd').style.display='inherit';
				});
				
	
		
       
	
		 $("#back").click(function(){

window.history.back();

});
		 });
		 </script>
		 {/literal}