<?php /* Smarty version 2.6.25, created on 2015-09-13 11:00:25
         compiled from scadaDetails.tpl */ ?>
      </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Scada Registration</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="./scadaList.php">Scada Management</a>
                        </li>
                        <li>
                            <a href="#">Details Scada</a>
                        </li>

                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
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
                            <h5 style="padding-left:40%;">Scada Details</h5>
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
				        <label class="col-sm-2 control-label" style="text-align:left;">Scada_Id:</label>
                        <div class="col-md-2"><td><?php echo $this->_tpl_vars['ListDet']['Scada_Id']; ?>
</td></div></div>
						   <div id="err_Production_batch">  
							  <label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Production_batch:</label>
							  <div class="col-md-2"><td><?php echo $this->_tpl_vars['ListDet']['Production_batch']; ?>
</td></div></div>
						   </div>
                           <div class="form-group">
							  <div id="err_Production_date"> 
							     <label class="col-sm-2 control-label" style="text-align:left;">Production_date:</label>
                                 <div class="col-md-2"><td><?php echo $this->_tpl_vars['ListDet']['Production_date']; ?>
</td></div></div>
							        <div id="err_Tested_date"> 
							     	<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%"> Tested_date:</label>
							        <div class="col-md-2"><td><?php echo $this->_tpl_vars['ListDet']['Tested_date']; ?>
</td></div></div>
							</div>
							  <div class="form-group">
							   <div id="err_Modify_date"> 
							   		<label class="col-sm-2 control-label" style="text-align:left;">Modify_date:</label>
                               <div class="col-md-2"><td><?php echo $this->_tpl_vars['ListDet']['Modify_date']; ?>
</td></div></div>
							<div id="err_Modify_time"> 
									<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%">Modify_time:</label>
							<div class="col-md-2"><td><?php echo $this->_tpl_vars['ListDet']['Modify_time']; ?>
</td></div></div>
							</div>
							  <div class="form-group">
							   <div id="err_Modify_by">
							   		<label class="col-sm-2 control-label" style="text-align:left;">Modify_by:</label>
                               <div class="col-md-2"><td><?php echo $this->_tpl_vars['ListDet']['Modify_by']; ?>
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