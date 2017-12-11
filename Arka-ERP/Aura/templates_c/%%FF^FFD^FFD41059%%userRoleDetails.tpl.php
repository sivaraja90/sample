<?php /* Smarty version 2.6.25, created on 2015-12-29 19:07:05
         compiled from userRoleDetails.tpl */ ?>

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
                            <h5 style="padding-left:40%;">Role Details</h5>
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
							
							   <!-- <div class="form-group">
							 <label class="col-sm-2 control-label" style="text-align:left;">roleid :</label>
							   <div class="col-md-2"><td><?php echo $this->_tpl_vars['ListDet']['role_id']; ?>
</td></div>-->
							   
							  
                            
                              <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;margin-left:15%"> Role Name:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['role_name']; ?>
</td></div>
					
							  
							  <label class="col-sm-2 control-label" style="text-align:left;"> Category:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['category']; ?>
</td></div>
					          
							</div>
							
							 <div class="form-group">
							 
							   <label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Created Time:</label>
							   <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['created_time']; ?>
</td></div>
							   <label class="col-sm-2 control-label" style="text-align:left;">Created Date:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['created_date']; ?>
</td></div>
							
							  
					
							   </div> 
                              
							

            	<br />
							   <div align="center">
                                         
<!--                                        <button class="btn btn-primary" type="button" onClick="validate()">ADD DEVICE</button>
-->										<a href="./userRoleList.php"><button class="btn btn-primary" type="button" id="back">BACK</button></a>                                     </div>
                                  <?php endforeach; endif; unset($_from); ?>
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
      
        