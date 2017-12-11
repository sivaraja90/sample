
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
                          <h5 style="padding-left:40%;">Material Details</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                               
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form method="post" class="form-horizontal" name="sback" id="sback">
                           {foreach from=$PageList3 item=ListDet}
							   <div class="form-group">
							  
							  <div id="errmaterialType"> 
							   <label class="col-sm-2 control-label" style="text-align:left;">Material Type:</label>
                               <div class="col-md-2  control-label" style="text-align:left;"><td>{$ListDet.m_type}</td></div></div>
							   <div id="errprice">  
							   <label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Price :</label>
							   <div class="col-md-2 control-label" style="text-align:left;"><td>{$ListDet.price}</td></div></div>
							   </div>
                              <div class="form-group">
							   <div id="errmaterialCategory"> <label class="col-sm-2 control-label" style="text-align:left;"> Material Category :</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td>{$ListDet.m_cat}</td></div></div>
							<div id="errdate"> 
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%"> Date:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td>{$ListDet.doe}</td></div></div>
							</div>
							  <div class="form-group">
							   <div id="errmaterialCode"> <label class="col-sm-2 control-label" style="text-align:left;"> Material Code:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td>{$ListDet.m_code}</td></div></div>
							<div id="errmaterialName"> 
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%"> Material Name:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td>{$ListDet.m_name}</td></div></div>
							</div>
							  <div class="form-group">
							   <div id="errmaterialDescription"> <label class="col-sm-2 control-label" style="text-align:left;"> Material Description:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td>{$ListDet.description}</td></div>
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