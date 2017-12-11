<?php /* Smarty version 2.6.25, created on 2016-02-02 16:11:08
         compiled from materialDetails.tpl */ ?>

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
                           <?php $_from = $this->_tpl_vars['PageList3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDet']):
?>
							   <div class="form-group">
							  
							  <div id="errmaterialType"> 
							   <label class="col-sm-2 control-label" style="text-align:left;">Material Type:</label>
                               <div class="col-md-2  control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['m_type']; ?>
</td></div></div>
							   <div id="errprice">  
							   <label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Price :</label>
							   <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['price']; ?>
</td></div></div>
							   </div>
                              <div class="form-group">
							   <div id="errmaterialCategory"> <label class="col-sm-2 control-label" style="text-align:left;"> Material Category :</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['m_cat']; ?>
</td></div></div>
							<div id="errdate"> 
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%"> Date:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['doe']; ?>
</td></div></div>
							</div>
							  <div class="form-group">
							   <div id="errmaterialCode"> <label class="col-sm-2 control-label" style="text-align:left;"> Material Code:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['m_code']; ?>
</td></div></div>
							<div id="errmaterialName"> 
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%"> Material Name:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['m_name']; ?>
</td></div></div>
							</div>
							  <div class="form-group">
							   <div id="errmaterialDescription"> <label class="col-sm-2 control-label" style="text-align:left;"> Material Description:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['description']; ?>
</td></div>
							   </div>
							   </div>
							
							<?php endforeach; endif; unset($_from); ?>
							      
							   
							     
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