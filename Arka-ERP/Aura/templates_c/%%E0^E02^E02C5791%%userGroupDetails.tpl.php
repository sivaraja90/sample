<?php /* Smarty version 2.6.25, created on 2016-04-04 12:21:45
         compiled from userGroupDetails.tpl */ ?>

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
                            <h5 style="padding-left:40%;">User Group Details</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                             
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form method="post" class="form-horizontal">
							
							<?php $_from = $this->_tpl_vars['MasterList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListMas']):
?>
							  <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Group Id:</label>
							   <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListMas']['group_id']; ?>
</td></div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left;  margin-left:15%"> Group Name:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListMas']['group_name']; ?>
</td></div>
					
							   </div>
                            
                              <div class="form-group">
							  <label class="col-sm-2 control-label" style="text-align:left;"> Group Description:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListMas']['group_description']; ?>
</td></div>
					           <label class="col-sm-2 control-label" style="text-align:left;  margin-left:15%"> Created Date:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListMas']['created_date']; ?>
</td></div>
							
							</div>
							
							   
							
							 <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Created Time:</label>
							   <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListMas']['created_time']; ?>
</td></div>
							   </div>                       
							<?php endforeach; endif; unset($_from); ?>
					<div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Roles Allotted:</label>
							    <div class="col-md-2 control-label" style="text-align:left;">
								<table border="1px solid" style="width:200Px" >
								<tr>
								<th><CENTER>Sl No</CENTER></th>
                                <th><CENTER>Roles</CENTER></th>
						        </tr>
								
								<?php $_from = $this->_tpl_vars['groupMapping']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['MappingGrp']):
?>
								<tr id="<?php echo $this->_tpl_vars['i']++; ?>
">
								<td>&nbsp;&nbsp;<?php echo $this->_tpl_vars['i']; ?>
&nbsp;&nbsp;</td>
							 	<td> &nbsp;&nbsp;<?php echo $this->_tpl_vars['MappingGrp']['role_name']; ?>
&nbsp;&nbsp;</td>
							  </tr>
						 <?php endforeach; endif; unset($_from); ?>
						 </table>
						 </div>
							   </div> 
            	<br />
							   <div align="center">
                                         
<!--                                        <button class="btn btn-primary" type="button" onClick="validate()">ADD DEVICE</button>
-->										<button class="btn btn-primary" type="button" id="back">BACK</button>                                 </div>
                                
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