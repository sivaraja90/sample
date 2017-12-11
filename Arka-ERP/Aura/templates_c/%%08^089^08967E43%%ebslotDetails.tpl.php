<?php /* Smarty version 2.6.25, created on 2015-11-27 10:39:46
         compiled from ebslotDetails.tpl */ ?>

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
                          <h5 style="padding-left:40%;">EB Slot Details</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                               
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form method="post" class="form-horizontal" name="sback" id="sback">
                           <?php $_from = $this->_tpl_vars['PageList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDet']):
?>
							   <div class="form-group">
							  
							  <div id="errSlotName"> 
							   <label class="col-sm-2 control-label" style="text-align:left;">Slot Name:</label>
                               <div class="col-md-2  control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['slot_name']; ?>
</td></div></div>
							   <div id="errDescription">  
							   <label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Description:</label>
							   <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['description']; ?>
</td></div></div>
							   </div>
                              <div class="form-group">
							   <div id="errMFPrice"> <label class="col-sm-2 control-label" style="text-align:left;"> MF Price:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['mf_price']; ?>
</td></div></div>
							<div id="errFrom"> 
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%"> From:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['from']; ?>
</td></div></div>
							</div>
							  <div class="form-group">
							   <div id="errTo"> <label class="col-sm-2 control-label" style="text-align:left;"> To:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['to']; ?>
</td></div></div>
						<!--	<div id="errDesignation"> 
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%"> Designation:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['designation']; ?>
</td></div></div>
							</div>
							  <div class="form-group">
							   <div id="errCustomerType"> <label class="col-sm-2 control-label" style="text-align:left;"> Customer Type:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['customer_type']; ?>
</td></div></div>
							<div id="errContactPerson"> 
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%"> Contact Person:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['contact_person']; ?>
</td></div></div>
							</div>
							  <div class="form-group">
							   <div id="errAddress1"> <label class="col-sm-2 control-label" style="text-align:left;"> Address1:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['address1']; ?>
</td></div></div>
							<div id="errAddress2"> 
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%"> Address2:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['address2']; ?>
</td></div></div>
							</div>
							  <div class="form-group">
							   <div id="errCity"> <label class="col-sm-2 control-label" style="text-align:left;"> City:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['city']; ?>
</td></div></div>
							<div id="errPincode"> 
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%"> Pincode:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['pincode']; ?>
</td></div></div>
							</div>
							  <div class="form-group" >
							   <div id="errstate"> <label class="col-sm-2 control-label" style="text-align:left;"> State:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['state']; ?>
</td></div></div> -->
							<div id="errcreatedBy"> 
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%"> Created By:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['created_by']; ?>
</td></div></div>
							</div>
							  <div class="form-group" >
							   <div id="errCreatedDate"> <label class="col-sm-2 control-label" style="text-align:left;"> Created Date:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['created_date']; ?>
</td></div></div>
							<div id="errCreatedTime"> 
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%"> Created Time:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['created_time']; ?>
</td></div></div>
							  </div>
							<?php endforeach; endif; unset($_from); ?>
							      
							   
							     
							      
							  	
							   <div align="center">
                                         

									<button class="btn btn-primary" id="back"  type="button">BACK</button>
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
		$(\'#side-menu\').metisMenu();
		$("#back").click(function(){

        window.history.back();

        });

		
		 });
		 
		 </script>
		 '; ?>