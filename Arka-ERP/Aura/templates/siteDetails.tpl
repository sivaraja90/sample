
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
                            <h5 style="padding-left:40%;">Site Details</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                             
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form method="post" class="form-horizontal">
							 {foreach from=$PageList item=ListDet}
							
							 <div class="form-group">
							  
							   <label class="col-sm-2 control-label" style="text-align:left;">SiteID:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td>{$ListDet.site_id}</td></div>
							     
							   <label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Site Name:</label>
							   <div class="col-md-2 control-label" style="text-align:left;"><td>{$ListDet.site_name}</td></div>
							   </div>
                              <div class="form-group">
							  <label class="col-sm-2 control-label" style="text-align:left;"> Adress1:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td>{$ListDet.address1}</td></div>
					
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%"> Village:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td>{$ListDet.village}</td></div>
							</div>
							 <div class="form-group">
							  
							   <label class="col-sm-2 control-label" style="text-align:left;">Mobile:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td>{$ListDet.mobile}</td></div>
							     
							   <label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Phone:</label>
							   <div class="col-md-2 control-label" style="text-align:left;"><td>{$ListDet.phone}</td></div>
							   </div>
                              <div class="form-group">
							  <label class="col-sm-2 control-label" style="text-align:left;"> Email:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td>{$ListDet.email}</td></div>
					
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%"> City:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td>{$ListDet.city}</td></div>
							</div>
							 <div class="form-group">
							  
							   <label class="col-sm-2 control-label" style="text-align:left;">State:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td>{$ListDet.state}</td></div>
							     
							   <label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Pincode:</label>
							   <div class="col-md-2 control-label" style="text-align:left;"><td>{$ListDet.pincode}</td></div>
							   </div>
                              <div class="form-group">
							  <label class="col-sm-2 control-label" style="text-align:left;"> District:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td>{$ListDet.district}</td></div>
					
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%"> Contact Person:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td>{$ListDet.contact_person}</td></div>
							</div>
							<div class="form-group">
							  <label class="col-sm-2 control-label" style="text-align:left;"> Designation:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td>{$ListDet.designation}</td></div>
					
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%"> Region:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td>{$ListDet.region}</td></div>
							</div> 
                              <div class="form-group">
							  <label class="col-sm-2 control-label" style="text-align:left;"> No. Of Turbines:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td>{$ListDet.no_of_turbines}</td></div>
					</div>
								{/foreach}

            	<br />
							   <div align="center">
                                         
<!--                                        <button class="btn btn-primary" type="button" onClick="validate()">ADD DEVICE</button>
-->									<button class="btn btn-primary" type="button" id="back">BACK</button>
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