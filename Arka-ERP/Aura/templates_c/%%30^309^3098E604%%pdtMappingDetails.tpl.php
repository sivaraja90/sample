<?php /* Smarty version 2.6.25, created on 2015-12-18 17:14:19
         compiled from pdtMappingDetails.tpl */ ?>
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
                            <h5 style="padding-left:40%;">Product Mapping Details</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                             
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form method="post" class="form-horizontal">
                  <?php $_from = $this->_tpl_vars['PageList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDet']):
?>
				  <div class="form-group">
				     <div id="err_Scada_Id">
				        <label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Turbine ID:</label>
                        <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
</td></div></div>
						<div id="err_Product_id">  
							  <label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Location:</label>
							  <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['location']; ?>
</td></div></div>
						  
						   </div>
                           <div class="form-group">
						    <div id="err_Production_batch">  
							  <label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">HTSC:</label>
							  <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['htsc']; ?>
</td></div></div>
							  <div id="err_Production_date"> 
							     <label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Site Name:</label>
                                 <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['site_name']; ?>
</td></div></div>
							       
							</div>
							  <div class="form-group">
							   <div id="err_Tested_date"> 
							     	<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%"> Scada ID:</label>
							        <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['scada_id']; ?>
</td></div></div>
							   <div id="err_Modify_date"> 
							   		<label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Product ID:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['product_id']; ?>
</td></div></div>
							
							</div>
							  <div class="form-group">
							  <div id="err_Modify_time"> 
									<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%">Install Date:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['install_date']; ?>
</td></div></div>
							   <div id="err_Modify_by">
							   		<label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Install By:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['install_by']; ?>
</td></div></div>
							</div>
					
							    <?php endforeach; endif; unset($_from); ?>  
							  	<br/>
							   <div align="center">
                                         
<!--                                        <button class="btn btn-primary" type="button" onClick="validate()">ADD CUSTOMER</button>
-->										<button class="btn btn-primary" type="button" id="back">BACK</button>
                                      </div>
                                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<?php echo '
		<script type="text/javascript">
		
        $(document).ready(function() {	
	
		 $("#back").click(function(){

window.history.back();

});
		 });
		 </script>
		 '; ?>