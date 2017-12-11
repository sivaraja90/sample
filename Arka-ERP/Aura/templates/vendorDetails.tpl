
        </div>
            
        <div class="wrapper wrapper-content animated fadeInRight" >
            <div class="row">
            
                
            </div>
            <div class="row">
                
                
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                          <h5 style="padding-left:40%;">Vendor Details</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                               
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form method="post" class="form-horizontal" name="sback" id="sback">
                           {foreach from=$PageList2 item=ListDet}
							   <div class="form-group">
							  <div id="errsupplier_code"> 
							   <label class="col-sm-2 control-label" style="text-align:left;">Supplier Code:</label>
                               <div class="col-md-2  control-label" style="text-align:left;"><td>{$ListDet.supplier_code}</td></div></div>
							  <!-- <div id="errsupplier_name">  
							   <label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Supplier Code :</label>
							   <div class="col-md-2 control-label" style="text-align:left;"><td>{$ListDet.supplier_name}</td></div></div>-->
							  
							   <div id="errpan_no"> <label class="col-sm-2 control-label" style="text-align:left;"> PAN No :</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td>{$ListDet.pan_no}</td></div></div>
							    </div>
                             
							  <div class="form-group">
							<div id="errvat_no"> 
							<label class="col-sm-2 control-label" style="text-align:left;">VAT No:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td>{$ListDet.vat_no}</td></div></div>
							   <div id="errcst_no"> <label class="col-sm-2 control-label" style="text-align:left;">CST No:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td>{$ListDet.cst_no}</td></div></div>
							   </div>
							  
							  <div class="form-group">
							<div id="errservicetax_no"> 
							<label class="col-sm-2 control-label" style="text-align:left;"> Service Tax No:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td>{$ListDet.servicetax_no}</td></div></div>
							   <div id="errcontact_person"> <label class="col-sm-2 control-label" style="text-align:left;"> Contact Person:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td>{$ListDet.contact_person}</td></div>
							   </div></div>
							 
							  <div class="form-group">
							   <div id="errservicetax_no"> 
							<label class="col-sm-2 control-label" style="text-align:left;"> Service Tax No:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td>{$ListDet.servicetax_no}</td></div></div>
							   <div id="erraddress"> <label class="col-sm-2 control-label" style="text-align:left;">Address:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td>{$ListDet.address}</td></div>
							   </div>
							   </div>
							  
							  <div class="form-group">
							   <div id="erraddress2"> 
							<label class="col-sm-2 control-label" style="text-align:left;">Address:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td>{$ListDet.address2}</td></div></div>
						 <div id="errdesignation"> <label class="col-sm-2 control-label" style="text-align:left;">Designation:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td>{$ListDet.designation}</td></div>
							   </div>
							   </div>
							 
							  <div class="form-group">
							   <div id="errmobile_no"> 
							<label class="col-sm-2 control-label" style="text-align:left;"> Mobile No:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td>{$ListDet.mobile_no}</td></div></div>
							   <div id="errphone_no"> <label class="col-sm-2 control-label" style="text-align:left;">Phone No:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td>{$ListDet.phone_no}</td></div>
							   </div>
							   </div>
							   
							   <div class="form-group">
							   <div id="errcity"> 
							<label class="col-sm-2 control-label" style="text-align:left;"> City :</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td>{$ListDet.city}</td></div></div>
							   <div id="errstate"> <label class="col-sm-2 control-label" style="text-align:left;">State:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td>{$ListDet.state}</td></div>
							   </div>
							    </div>
							   
							   <div class="form-group">
							   <div id="erremail"> 
							<label class="col-sm-2 control-label" style="text-align:left;"> E-Mail :</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td>{$ListDet.email}</td></div></div>
							 <div id="errpincode"> <label class="col-sm-2 control-label" style="text-align:left;">PINCode:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td>{$ListDet.pincode}</td></div>
							   </div>
							   </div>
							{/foreach}
							      
							   
							     
							      <br/>

							  	
							   <div align="center">
                                         

									<button class="btn btn-primary" id="back"  type="button">BACK</button>
                                      </div>
                                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
		{literal}
		<script type="text/javascript">
		
        $(document).ready(function() {	
		$('#side-menu').metisMenu();
		$("#back").click(function(){

        window.history.back();

        });

		
		 });
		 
		 </script>
		 {/literal}
