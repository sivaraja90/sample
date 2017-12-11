<?php /* Smarty version 2.6.25, created on 2015-10-27 14:53:57
         compiled from phoneDetails.tpl */ ?>

        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Phone Details</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="./phoneDetails.php">Phone Management</a>
                        </li>
                        <li>
                            <a href="#">Details Phone</a>
                        </li>

                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
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
                          <h5 style="padding-left:40%;">Phone Details</h5>
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
							  
							  <div id="errsimId"> 
							   <label class="col-sm-2 control-label" style="text-align:left;">Sim ID:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['sim_id']; ?>
</td></div></div>
							   <div id="errsimNo">  
							   <label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Sim No:</label>
							   <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['sim_no']; ?>
</td></div></div>
							   </div>
                              <div class="form-group">
							   <div id="errmobileNo"> <label class="col-sm-2 control-label" style="text-align:left;"> Mobile No:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['mobile_no']; ?>
</td></div></div>
							<div id="errserviceNo"> 
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%"> Service No:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['service_no']; ?>
</td></div></div>
							</div>
							  <div class="form-group">
							   <div id="errnetwork"> <label class="col-sm-2 control-label" style="text-align:left;">Network:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['network']; ?>
</td></div></div>
							<div id="errvalidity"> 
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%"> Validity:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['validity']; ?>
</td></div></div>
							</div>
							  <div class="form-group">
							   <div id="errsimType"> <label class="col-sm-2 control-label" style="text-align:left;"> Sim Type:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['sim_type']; ?>
</td></div></div>
							<div id="errcircle"> 
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%"> Circle:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['circle']; ?>
</td></div></div>
							</div>
							<div class="form-group">
							   <div id="errbill_Date"> <label class="col-sm-2 control-label" style="text-align:left;"> Bill Date:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['bill_date']; ?>
</td></div></div>
							<div id="errdue_Date"> 
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%"> Due Date::</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['due_date']; ?>
</td></div></div>
							</div>
							<div class="form-group">
							   <div id="errbill_Amount"> <label class="col-sm-2 control-label" style="text-align:left;"> Bill Amount:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['bill_amt']; ?>
</td></div></div>
							<div id="errpaid_Amount"> 
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%"> Paid Amount:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['paid_amt']; ?>
</td></div></div>
							</div>
							<div class="form-group">
							   <div id="errpaid_Date"> <label class="col-sm-2 control-label" style="text-align:left;"> Paid Date:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['paid_date']; ?>
</td></div></div>
							<div id="errpayment_mode"> 
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%"> Payment Mode:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['payment_mode']; ?>
</td></div></div>
							</div>
							<div class="form-group">
							   <div id="errpayment_Status"> <label class="col-sm-2 control-label" style="text-align:left;"> Payment Status:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['payment_status']; ?>
</td></div></div>
							<div id="errpayment_Ref"> 
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%"> Payment Ref:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['payment_ref']; ?>
</td></div></div>
							</div>
							  <div class="form-group">
							   <div id="errpayment_Status"> <label class="col-sm-2 control-label" style="text-align:left;"> Purchase Date:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListDet']['purchase_date']; ?>
</td></div></div>
							    </div>
							      <?php endforeach; endif; unset($_from); ?>
							  	<br />
							   <div align="center">
                                         
<!--                                        <button class="btn btn-primary" type="button" onClick="validate()">ADD CUSTOMER</button>
-->										<button class="btn btn-primary" id="back" type="button">BACK</button>
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