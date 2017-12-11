<?php /* Smarty version 2.6.25, created on 2016-03-18 19:07:00
         compiled from turbineDetails.tpl */ ?>
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
                          <h5 style="padding-left:40%;">Turbine Details</h5>
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
					        <div id="errcustomerId"> 
							   <label class="col-sm-2 control-label" style="text-align:left;">Turbine ID:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
</td></div></div>
							   <div id="errcustomerName">  
							   <label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Turbine Type:</label>
							   <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['turbine_type']; ?>
</td></div></div>
							   </div>
                              <div class="form-group">
							   <div id="errmobileNo"> <label class="col-sm-2 control-label" style="text-align:left;"> Turbine Name:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['turbine_name']; ?>
</td></div></div>
							<div id="erreMail"> 
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%"> Turbine HTSC No:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['turbine_htsc_no']; ?>
</td></div></div>
							</div>
							  <div class="form-group">
							   <div id="errmobileNo"> <label class="col-sm-2 control-label" style="text-align:left;"> Location No:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['location_no']; ?>
</td></div></div>
							<div id="erreMail"> 
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%"> Group Name:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['group_name']; ?>
</td></div></div>
							</div>
							  <div class="form-group">
							   <div id="errmobileNo"> <label class="col-sm-2 control-label" style="text-align:left;"> Survey No:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['survey_no']; ?>
</td></div></div>
							<div id="erreMail"> 
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%"> Village Name:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['village_name']; ?>
</td></div></div>
							</div>
							  <div class="form-group">
							   <div id="errmobileNo"> <label class="col-sm-2 control-label" style="text-align:left;"> Feeder Connection:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['feeder_conn']; ?>
</td></div></div>
							<div id="erreMail"> 
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%"> Capacity:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['capacity']; ?>
</td></div></div>
							</div>
							  <div class="form-group">
							   <div id="errmobileNo"> <label class="col-sm-2 control-label" style="text-align:left;"> MF:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['mf']; ?>
</td></div></div>
							<div id="erreMail"> 
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%"> Make:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['make']; ?>
</td></div></div>
							</div>
							  
							   <div class="form-group">
							  
							  <div id="errcustomerId"> 
							   <label class="col-sm-2 control-label" style="text-align:left;">Comission Date:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['commission_date']; ?>
</td></div></div>
							   <div id="errcustomerName">  
							   <label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Additional Info:</label>
							   <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['additional_info']; ?>
</td></div></div>
							   </div>
                              <div class="form-group">
							   <div id="errmobileNo"> <label class="col-sm-2 control-label" style="text-align:left;"> Latitude:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['latitude']; ?>
</td></div></div>
							<div id="erreMail"> 
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%"> Longitude:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['longitude']; ?>
</td></div></div>
							</div>
							  <div class="form-group">
							   <div id="errmobileNo"> <label class="col-sm-2 control-label" style="text-align:left;"> Height:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['height']; ?>
</td></div></div>
							<div id="erreMail"> 
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%"> Meter No:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['meter_no']; ?>
</td></div></div>
							</div>
							  <div class="form-group">
							   <div id="errmobileNo"> <label class="col-sm-2 control-label" style="text-align:left;"> Meter Make:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['meter_make']; ?>
</td></div></div>
							<div id="erreMail"> 
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%"> Contact Person:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['contact_person']; ?>
</td></div></div>
							</div>
							  <div class="form-group">
							   <div id="errmobileNo"> <label class="col-sm-2 control-label" style="text-align:left;"> Region:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['region']; ?>
</td></div></div>
							    <div id="errmobileNo"> <label class="col-sm-2 control-label" style="text-align:left;margin-left:15%"> Sub-Station No:</label>
                                <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['substation_no']; ?>
</td></div></div>
							</div>
				
												   						   						   					   						   		  
							  
							      
							   
							     <?php endforeach; endif; unset($_from); ?> 
							      
							  	<br />
							   <div align="center">
                                         
<!--                                        <button class="btn btn-primary" type="button" onClick="validate()">ADD CUSTOMER</button>
-->										<button class="btn btn-primary"  type="button" id="back">BACK</button>
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