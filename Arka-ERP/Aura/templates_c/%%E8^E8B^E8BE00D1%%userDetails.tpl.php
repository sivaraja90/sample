<?php /* Smarty version 2.6.25, created on 2016-02-13 17:57:46
         compiled from userDetails.tpl */ ?>

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
                            <h5 style="padding-left:40%;">User Details</h5>
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
							   <label class="col-sm-2 control-label" style="text-align:left;">Customer Id:</label>
							   <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['customer_id']; ?>
</td></div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left;  margin-left:15%"> Customer Name:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['customer_name']; ?>
</td></div>
					
							   </div>
                              <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;"> Contact Person:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['contact_person']; ?>
</td></div>
							
							   <label class="col-sm-2 control-label" style="text-align:left;margin-left:15%">Type:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['customer_type']; ?>
</td></div>
							   
							</div>
							<div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;"> Site Id:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['site_id']; ?>
</td></div>
							
							   <label class="col-sm-2 control-label" style="text-align:left;margin-left:15%">Site Name:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['site_name']; ?>
</td></div>
							   
							</div>
							
							 <div class="form-group">
							  
							   <label class="col-sm-2 control-label" style="text-align:left;">UserID:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['user_id']; ?>
</td></div>
							     
							   <label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">User Name:</label>
							   <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['username']; ?>
</td></div>
							   </div>
                              <div class="form-group">
							  <label class="col-sm-2 control-label" style="text-align:left;"> Department:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['department']; ?>
</td></div>
					
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%"> User Group:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['user_group']; ?>
</td></div>
							</div>
							 <div class="form-group">
							  
							   <label class="col-sm-2 control-label" style="text-align:left;">Mobile:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['mobile']; ?>
</td></div>
							     
							   <label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Phone:</label>
							   <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['phone']; ?>
</td></div>
							   </div>
                              <div class="form-group">
							  <label class="col-sm-2 control-label" style="text-align:left;"> Email:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['email_id']; ?>
</td></div>
					
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%"> Password:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td>*********</td></div>
							</div>
							
							 
                              
							<?php endforeach; endif; unset($_from); ?>
            	<br />
							   <div align="center">
                                         
<!--                                        <button class="btn btn-primary" type="button" onClick="validate()">ADD DEVICE</button>
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
		$(\'#side-menu\').metisMenu();
		$("#back").click(function(){

        window.history.back();

        });

		
		 });
		 
		 </script>
		 '; ?>