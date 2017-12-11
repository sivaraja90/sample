<?php /* Smarty version 2.6.25, created on 2017-09-05 13:48:45
         compiled from dashBoard4.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'dashBoard4.tpl', 11, false),)), $this); ?>
	<meta http-equiv="refresh" content="180">
</div>
    <div id="wrapper">
    <div class="wrapper wrapper-content">
        <div class="row">
		
            <div class="col-md-2">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-primary pull-right">Today</span><br/>
                      <!--  <h5><?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y') : smarty_modifier_date_format($_tmp, '%Y')); ?>
</h5>-->
                    </div>
                   <div class="ibox-content" style="height:180PX">
					      <h2 class="no-margins"><?php if ($this->_tpl_vars['CurDateTotal']['0']['totalValue'] == ''): ?> 0 <?php else: ?> <?php echo $this->_tpl_vars['CurDateTotal']['0']['totalValue']; ?>
 <?php endif; ?></h2>
                          <div class="stat-percent font-bold text-success" >KWh<i class="fa fa-bolt"></i></div><hr/>
						  
                          <h2 class="no-margins"><?php if ($this->_tpl_vars['TodayTotalHours']['0']['Hours'] == ''): ?> 0 <?php else: ?> <?php echo $this->_tpl_vars['TodayTotalHours']['0']['Hours']; ?>
 <?php endif; ?></h2>
                          <div class="stat-percent font-bold text-success" >hrs<i class="fa fa-bolt"></i></div>
                     </div>



                    </div>
                </div>
            
           
			 <div class="col-md-2">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-primary pull-right">Current Month</span><br/>
                     <!--   <h5><?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y') : smarty_modifier_date_format($_tmp, '%Y')); ?>
</h5>-->
                    </div>
                    <div class="ibox-content" style="height:180PX">
                      <h2 class="no-margins"><?php if ($this->_tpl_vars['CurMonthTotal']['0']['totalValue'] == ''): ?> 0 <?php else: ?><?php echo $this->_tpl_vars['CurMonthTotal']['0']['totalValue']; ?>
<?php endif; ?></h2>
                         <div class="stat-percent font-bold text-success">KWh<i class="fa fa-bolt"></i></div><hr/>
						<h2 class="no-margins"><?php if ($this->_tpl_vars['CurMonthTotalHours']['0']['Hours'] == ''): ?> 0 <?php else: ?><?php echo $this->_tpl_vars['CurMonthTotalHours']['0']['Hours']; ?>
<?php endif; ?></h2>
                         <div class="stat-percent font-bold text-success">hrs<i class="fa fa-bolt"></i></div>
                        
                    </div>
                    </div>
                </div>
             <div class="col-md-2">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-info pull-right">Last Month</span>
                        <!--<h5><?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y') : smarty_modifier_date_format($_tmp, '%Y')); ?>
</h5>-->
                    </div>
                     <div class="ibox-content" style="height:180PX">
                       <h2 class="no-margins"><?php if ($this->_tpl_vars['LastMonthTotal']['0']['totalValue'] == ''): ?> 0 <?php else: ?><?php echo $this->_tpl_vars['LastMonthTotal']['0']['totalValue']; ?>
<?php endif; ?></h2>
                        <div class="stat-percent font-bold text-success">KWh<i class="fa fa-bolt"></i></div><hr/>
						
						<h2 class="no-margins"><?php if ($this->_tpl_vars['LastMonthTotalHours']['0']['Hours'] == ''): ?> 0 <?php else: ?><?php echo $this->_tpl_vars['LastMonthTotalHours']['0']['Hours']; ?>
<?php endif; ?></h2>
                        <div class="stat-percent font-bold text-success">hrs<i class="fa fa-bolt"></i></div>
                       
                    </div>
                </div>
            </div>
				<div class="col-md-2">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-success pull-right">Annual</span>
                        <h5><?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y') : smarty_modifier_date_format($_tmp, '%Y')); ?>
</h5>
                    </div>
                   <div class="ibox-content" style="height:180PX">
                       <h2 class="no-margins"><?php if ($this->_tpl_vars['AnnualTotal2']['0']['totalValue'] == ''): ?> 0 <?php else: ?><?php echo $this->_tpl_vars['AnnualTotal2']['0']['totalValue']; ?>
<?php endif; ?></h2>
                        <div class="stat-percent font-bold text-success">KWh<i class="fa fa-bolt"></i></div><hr/>
						
						<h2 class="no-margins"><?php if ($this->_tpl_vars['AnnualTotalHours']['0']['Hours'] == ''): ?> 0 <?php else: ?><?php echo $this->_tpl_vars['AnnualTotalHours']['0']['Hours']; ?>
<?php endif; ?></h2>
                        <div class="stat-percent font-bold text-success">hrs<i class="fa fa-bolt"></i></div>
                        
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Turbine Details</h5>
                        <div class="ibox-tools">
                            <span class="label label-primary">Updated <?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')); ?>
</span>
                        </div>
                    </div>
                    <div class="ibox-content no-padding" style="height:180PX">
	<?php if ($this->_supers['session']['USER_GROUP'] == 'Admin' || $this->_supers['session']['USER_GROUP'] == 'MD' || $this->_supers['session']['USER_GROUP'] == 'Support' || $this->_supers['session']['USER_GROUP'] == 'Developement'): ?>
					<?php if ($this->_supers['get']['customer_id'] == 'CUS1002'): ?>
					<div class="col-sm-12" align="center">
					<input type="hidden" value="<?php echo $this->_supers['session']['USER_GROUP']; ?>
" /><input type="hidden" value="<?php echo $this->_supers['get']['customer_id']; ?>
" />
					<br />
					<table class="table table-striped table-bordered table-hover dataTables-example">
                    <thead>
                    <tr style="width:150px;">
					    <th>Icon</th>
						<th>Status</th>
						<th>Count</th>
						</tr>
					</thead>
					<tbody>
			 <tr class="gradeX">
		<tr><td><img alt="image" src="images/green_16.gif"></td><td>Running</td><td><?php echo $this->_tpl_vars['RunList']['0']['runcount']; ?>
</td></tr>
        <tr><td><img alt="image" src="images/navy-wind-turbine-16.gif"></td><td>No Comm</td><td><?php echo $this->_tpl_vars['No_CommList']['0']['no_comm_count']; ?>
</td></tr>
		<tr><td><img alt="image" src="images/grid2.png"></td><td>Grid Drop</td><td><?php echo $this->_tpl_vars['GridList']['0']['gridcount']; ?>
</td></tr>
        <tr><td><img alt="image" src="images/red-wind-turbine-16.gif"></td><td>Other Errors</td><td><?php echo $this->_tpl_vars['OtherList']['0']['othercount']; ?>
</td> </tr>
			 </tr>
			      </tbody>
			      </table><br />
						</div>
					<?php else: ?>
					     <?php if ($this->_supers['get']['customer_id'] == 'CUS1004'): ?>
					<div class="col-sm-12" align="center">
					<input type="hidden" value="<?php echo $this->_supers['get']['customer_id']; ?>
" />
					<br />
					<table class="table table-striped table-bordered table-hover dataTables-example">
                    <thead>
                    <tr style="width:150px;">
					    <th>Icon</th>
						<th>Status</th>
						<th>Count</th>
						</tr>
					</thead>
					<tbody>
			 <tr class="gradeX">
		<tr><td><img alt="image" src="images/green_16.gif"></td><td>Running</td><td><?php echo $this->_tpl_vars['RunList']['0']['runcount']; ?>
</td></tr>
        <tr><td><img alt="image" src="images/navy-wind-turbine-16.gif"></td><td>No Comm</td><td><?php echo $this->_tpl_vars['No_CommList']['0']['no_comm_count']; ?>
</td></tr>
		<tr><td><img alt="image" src="images/grid2.png"></td><td>Grid Drop</td><td><?php echo $this->_tpl_vars['GridList']['0']['gridcount']; ?>
</td></tr>
        <tr><td><img alt="image" src="images/red-wind-turbine-16.gif"></td><td>Other Errors</td><td><?php echo $this->_tpl_vars['OtherList']['0']['othercount']; ?>
</td></tr>
			 </tr>
			      </tbody>
			      </table><br />
						</div>
				       	<?php else: ?>
					<div class="col-sm-12" align="center">
					<input type="hidden" value="<?php echo $this->_supers['session']['USER_GROUP']; ?>
" /><input type="hidden" value="<?php echo $this->_supers['get']['customer_id']; ?>
" />
					<table class="table table-striped table-bordered table-hover dataTables-example" style="margin-top:5px;">
                    <thead>
                    <tr style="width:150px;">
					    <th>Icon</th>
						<th>Status</th>
						<th>Count</th>
						</tr>
					</thead>
					<tbody>
			  <tr class="gradeX">
		<tr><td><img alt="image" src="images/green_16.gif"></td><td>Running</td><td><?php echo $this->_tpl_vars['RunList1']['0']['runcount']; ?>
</td></tr>
        <tr><td><img alt="image" src="images/navy-wind-turbine-16.gif"></td><td>No Comm</td><td><?php echo $this->_tpl_vars['No_CommList1']['0']['no_comm_count']; ?>
</td></tr>
		<tr><td><img alt="image" src="images/grid2.png"></td><td>Grid Drop</td><td><?php echo $this->_tpl_vars['GridList1']['0']['gridcount']; ?>
</td></tr>
        <tr><td><img alt="image" src="images/red-wind-turbine-16.gif"></td><td>Other Errors</td><td><?php echo $this->_tpl_vars['OtherList1']['0']['othercount']; ?>
</td></tr>
		<tr><td><img alt="image" src="images/wind-turbine-blue1.png"></td><td>Comm Failure</td><td><?php echo $this->_tpl_vars['CommList1']['0']['commFail']; ?>
</td></tr>
			 </tr>
			      </tbody>
			      </table><br />
						</div>
						  <?php endif; ?>
						<?php endif; ?>
	<?php elseif ($this->_supers['session']['USER_GROUP'] == 'RRPL MD Group' || $this->_supers['session']['USER_GROUP'] == 'RRPL Admin Group' || $this->_supers['session']['USER_GROUP'] == 'RRPL Site Incharge Group' || $this->_supers['session']['USER_GROUP'] == 'RRPL Site Operators Group'): ?>
						<div class="col-sm-12">
					
					<table class="table table-striped table-bordered table-hover dataTables-example" style="margin-top:5px;">
                    <thead>
                    <tr>
					    <th>Icon</th>
						<th>Status</th>
						<th>Count</th>
						</tr>
					</thead>
					<tbody>
			 <tr class="gradeX">
		<tr><td><img alt="image" src="images/green_16.gif"></td><td>Running</td><td><?php echo $this->_tpl_vars['RunList1']['0']['runcount']; ?>
</td></tr>
        <tr><td><img alt="image" src="images/navy-wind-turbine-16.gif"></td><td>No Comm</td><td><?php echo $this->_tpl_vars['No_CommList1']['0']['no_comm_count']; ?>
</td></tr>
		<tr><td><img alt="image" src="images/grid2.png"></td><td>Grid Drop</td><td><?php echo $this->_tpl_vars['GridList1']['0']['gridcount']; ?>
</td></tr>
        <tr><td><img alt="image" src="images/red-wind-turbine-16.gif"></td><td>Other Errors</td><td><?php echo $this->_tpl_vars['OtherList1']['0']['othercount']; ?>
</td></tr>
		<tr><td><img alt="image" src="images/wind-turbine-blue1.png"></td><td>Comm Failure</td><td><?php echo $this->_tpl_vars['CommList1']['0']['commFail']; ?>
</td></tr>
			 </tr>
			      </tbody>
			      </table><br />
						</div>
						<?php elseif ($this->_supers['session']['USER_GROUP'] == 'Customer_Admin'): ?>
						<div class="col-sm-12" align="center">
					<input type="hidden" value="<?php echo $this->_supers['session']['USER_GROUP']; ?>
" /><input type="hidden" value="<?php echo $this->_supers['get']['customer_id']; ?>
" />
					<br />
					<table class="table table-striped table-bordered table-hover dataTables-example">
                    <thead>
                    <tr style="width:150px;">
					    <th>Icon</th>
						<th>Status</th>
						<th>Count</th>
						</tr>
					</thead>
					<tbody>
			 <tr class="gradeX">
		<tr><td><img alt="image" src="images/green_16.gif"></td><td>Running</td><td><?php echo $this->_tpl_vars['RunList']['0']['runcount']; ?>
</td></tr>
        <tr><td><img alt="image" src="images/navy-wind-turbine-16.gif"></td><td>No Comm</td><td><?php echo $this->_tpl_vars['No_CommList']['0']['no_comm_count']; ?>
</td></tr>
		<tr><td><img alt="image" src="images/grid2.png"></td><td>Grid Drop</td><td><?php echo $this->_tpl_vars['GridList']['0']['gridcount']; ?>
</td></tr>
        <tr><td><img alt="image" src="images/red-wind-turbine-16.gif"></td><td>Other Errors</td><td><?php echo $this->_tpl_vars['OtherList']['0']['othercount']; ?>
</td> </tr>
			 </tr>
			      </tbody>
			      </table><br />
						</div>
						<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
		


		<div id="tab-1" class="tab-pane">
                                    
								<div class="ibox float-e-margins">
								
                    <div class="ibox-title" style="height:50px;">   
                        <h5  style="padding-left:40%;">List of Turbines</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                   
<!--                    <div class="col-sm-12" style="margin-top:10px; margin-bottom:10px; ">-->
					 <!--<table>
					 <tr>
					 
					 <td><strong>Region:</strong>&nbsp;&nbsp;
					 <select id="reg" name="reg" ><?php $_from = $this->_tpl_vars['regionList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Dash1']):
?><option value="<?php echo $this->_tpl_vars['Dash1']['region']; ?>
"><?php echo $this->_tpl_vars['Dash1']['region']; ?>
</option><?php endforeach; endif; unset($_from); ?></select></td>
					 
					 <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Site Name:</strong>&nbsp;&nbsp;
					 <select id="site" name="site" onChange="showHtsc(this.value);">
					 <option value="All">All</option>
					 <?php $_from = $this->_tpl_vars['SiteList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Dash2']):
?>
					 <option value="<?php echo $this->_tpl_vars['Dash2']['site_name']; ?>
"><?php echo $this->_tpl_vars['Dash2']['site_name']; ?>

					 </option>
					 <?php endforeach; endif; unset($_from); ?>
					 </select>
					 </td>
					 
					 <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>HTSC:</strong>&nbsp;&nbsp;
					 <select id="htsc" name="htsc" >
					  <option value="All">All</option>
					 <?php $_from = $this->_tpl_vars['TurList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Dash3']):
?>
					 <option value="<?php echo $this->_tpl_vars['Dash']['turbine_htsc_no']; ?>
"><?php echo $this->_tpl_vars['Dash3']['turbine_htsc_no']; ?>
</option>
					 <?php endforeach; endif; unset($_from); ?>
					 </select>
					 </td>
					 
					 <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Date:</strong></label>&nbsp;&nbsp;<input type="text" id="from_date" name="from_date" readonly="true" value="<?php echo $this->_tpl_vars['from_date']; ?>
" placeholder="select Date!" style="width:100px;"></td>
					 
					 <td><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date:</strong></label>&nbsp;&nbsp;<input type="text" id="to_date" name="to_date" readonly="true" value="<?php echo $this->_tpl_vars['to_date']; ?>
" placeholder="select Date!" style="width:100px;">&nbsp;&nbsp;</td>
					 <td>
					 <a href="#"><img src="img/graph_icon.png" height="26" width="26" style="margin-left:56%; " alt="Graph" onClick="getgraph()" title="Graph"></a> </td>
				  
					<td><a href="#"> <img src="img/xls.png" height="26" width="26" style="margin-left:25px;" alt="xls" onClick="getval('<?php echo $this->_tpl_vars['VestasList']['0']['MACHINE_ID']; ?>
')" border=0></a> </td>

					 
					 </tr>
					 </table>-->
<!--</div>-->
</div>
<!--</form>
</body>
-->                   
<?php echo '
<script type="text/javascript">
function get_xls()
{
	var cusid = document.getElementById("cusid").value;
	alert(cusid);
	var region = document.getElementById("reg").value;
	var sname = document.getElementById("site").value;
	var htsc = document.getElementById("htsc").value;
	var from = document.getElementById("from_date").value;
	var to = document.getElementById("to_date").value;
	if(from=="" || to=="")
		{
			alert("Please Enter the Date Correctly");
			return false;
		}
	else
		{
			document.getElementById("GetReport").submit();
			FormName = document.GetReport;
			FormName.method ="POST";
			FormName.submit;
		}
	
}

</script>

'; ?>

 <div class="ibox-content" style="overflow-x:auto">
<body onLoad="doOnLoad();"><form name="GetReport" id="GetReport" method="get" action="dgr_grouping.php">

<table>
					 <tr>
					 	<input type="hidden" id="cusid" name="cusid" value="<?php echo $this->_supers['get']['customer_id']; ?>
">
					 <td><strong>Region:</strong>&nbsp;&nbsp;
					 <select id="reg" name="reg" >
					 	<option value="0" selected="selected">--Select----</option>
					 <?php $_from = $this->_tpl_vars['regionList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Dash1']):
?>
					 <option value="<?php echo $this->_tpl_vars['Dash1']['region']; ?>
"><?php echo $this->_tpl_vars['Dash1']['region']; ?>
</option>
					 <?php endforeach; endif; unset($_from); ?></select></td>
					 
					 <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Site Name:</strong>&nbsp;&nbsp;
					 <select id="site" name="site" onChange="showHtsc(this.value);">
					 <option value="All">All</option>
					 <?php $_from = $this->_tpl_vars['SiteList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Dash2']):
?>
					 <option value="<?php echo $this->_tpl_vars['Dash2']['site_name']; ?>
"><?php echo $this->_tpl_vars['Dash2']['site_name']; ?>

					 </option>
					 <?php endforeach; endif; unset($_from); ?>
					 </select>
					 </td>
					 
					 <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>HTSC:</strong>&nbsp;&nbsp;
					 <select id="htsc" name="htsc" >
					  <option value="All">All</option>
					 <?php $_from = $this->_tpl_vars['TurList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Dash3']):
?>
					 <option value="<?php echo $this->_tpl_vars['Dash']['turbine_htsc_no']; ?>
"><?php echo $this->_tpl_vars['Dash3']['turbine_htsc_no']; ?>
</option>
					 <?php endforeach; endif; unset($_from); ?>
					 </select>
					 </td>
					 
					 <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Date:</strong>&nbsp;&nbsp;<input type="text" id="from_date" name="from_date" readonly="true" value="" placeholder="select Date!" style="width:90px;"></td>
					 
					 <td><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date:</strong>&nbsp;&nbsp;<input type="text" id="to_date" name="to_date" readonly="true" value="" placeholder="select Date!" style="width:90px;">&nbsp;&nbsp;</td>
					 <td>
					 <a href="#"><img src="img/graph_icon.png" height="24" width="24" style="margin-left:56%; " alt="Graph" title="Graph"></a> </td>
				  
					<td><input type="button" name="Submit" value="Download" onClick="get_xls();"></td>

					 
					 </tr>
					 </table>
					 </form>
					 </body>
					 </div>
 <div class="ibox-content" style="overflow-x:auto">

                  <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
					    <th>Icon</th>
					   <!-- <th>Sl.No</th>-->
						<th>Status</th>
						<th>Site Name</th>
						<!--<th>Make</th>-->
						<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						<?php if ($this->_tpl_vars['roles']['role_name'] == 'Arka'): ?>
							<th>Customer Name</th>
							<?php endif; ?>
							<?php endforeach; endif; unset($_from); ?>
						<th>HTSC-Loc. No.</th>
						<th>Wind Speed</th>
						<th>KW</th>
                        <!--<th>GRPM</th>
						<th>RRPM</th>
						<?php if ($this->_supers['session']['USER_GROUP'] == 'Admin'): ?>
						<th>Pitch Angle</th>
							<?php elseif ($this->_supers['session']['USER_GROUP'] == 'RRPL MD Group' || $this->_supers['session']['USER_GROUP'] == 'RRPL Admin Group' || $this->_supers['session']['USER_GROUP'] == 'RRPL Site Incharge Group' || $this->_supers['session']['USER_GROUP'] == 'RRPL Site Operators Group'): ?>
							<th>Yaw Angle</th>
							<?php else: ?>
							<th>Pitch Angle</th>
							<?php endif; ?>-->
						<!--<th>Today</th>
						<th>Month</th>
						<th>Yearly</th>-->
						<th>Date & Time</th>
						<!--<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						   <?php if ($this->_tpl_vars['roles']['role_name'] == 'Edit Turbine' || $this->_tpl_vars['roles']['role_name'] == 'Delete Turbine'): ?>-->
						      <!--<th>Action</th>	-->
						   <!--<?php endif; ?>
				        <?php endforeach; endif; unset($_from); ?>	-->
                       
                    </tr>
                    </thead>
                   <tbody>
				   <input type="hidden" id="datetime" name="datetime" value="<?php echo $this->_tpl_vars['VestasList']['0']['VDATE']; ?>
">
				    <input type="hidden" id="mach_id" name="mach_id" value="<?php echo $this->_tpl_vars['VestasList']['0']['MACHINE_ID']; ?>
">
				   <input type="hidden" id="datetime2" name="datetime2" value="<?php echo $this->_tpl_vars['VestasList']['0']['VDT']; ?>
">
	<?php $_from = $this->_tpl_vars['VestasList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Vestas']):
?>
	<!--************************************************************************************************************************************-->
  <div class="modal fade" id="ErrorDetail<?php echo $this->_tpl_vars['Vestas']['STATUS']; ?>
" role="dialog">
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Error Details</h4>

        </div>
        <div class="modal-body">
<iframe height="190px" width="100%" id="ErrorDetail" name="ErrorDetail"  src="./Error.php?ERROR_ID=<?php echo $this->_tpl_vars['Vestas']['STATUS']; ?>
" style="border:1px; font-size:12px;"></iframe>
        </div>
        <div class="modal-footer">
        </div>
      </div>
      
    </div>
  </div>
  <!--************************************************************************************************************************************-->
			      <tr class="gradeX" id="<?php echo $this->_tpl_vars['i']++; ?>
">
									  <?php if ($this->_tpl_vars['Vestas']['STATUS'] == 0): ?>
						<td> <a href="./dashBoard_vestas_overall_details.php?this=<?php echo $this->_tpl_vars['Vestas']['MACHINE_ID']; ?>
">
						 <img alt="image" class="img-circle m-t-xs img-responsive" src="images/grid2.png">
						</a> </td>
				<?php elseif ($this->_tpl_vars['Vestas']['STATUS'] == 225): ?>
				
						<td ><a href="./dashBoard_vestas_overall_details.php?this=<?php echo $this->_tpl_vars['Vestas']['MACHINE_ID']; ?>
">
							<?php if ($this->_tpl_vars['Vestas']['VDATE'] == ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')) || ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')) <= $this->_tpl_vars['Vestas']['VDT']): ?>
			 					<img alt="image" class="img-circle m-t-xs img-responsive" src="images/green_16.gif">
							<?php else: ?> 	
								<img alt="image" class="img-circle m-t-xs img-responsive" src="images/navy-wind-turbine-16.gif">	
							<?php endif; ?></a></td> 
				
				<?php elseif ($this->_tpl_vars['Vestas']['STATUS'] != 225 && $this->_tpl_vars['Vestas']['STATUS'] != 0): ?>
			
							<td><a href="./dashBoard_vestas_overall_details.php?this=<?php echo $this->_tpl_vars['Vestas']['MACHINE_ID']; ?>
">
							<?php if ($this->_tpl_vars['Vestas']['VDATE'] == ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')) || ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')) <= $this->_tpl_vars['Vestas']['VDT']): ?>
			 					<img alt="image" class="img-circle m-t-xs img-responsive" src="images/red_wind_turbine_16.gif">
							<?php else: ?> 	
								<img alt="image" class="img-circle m-t-xs img-responsive" src="images/navy-wind-turbine-16.gif">	
							<?php endif; ?></a></td>
				<?php endif; ?>
			<!--<td><?php echo $this->_tpl_vars['i']; ?>
 </td>-->
			<td><a href="./dashBoard_vestas_overall_details.php?this=<?php echo $this->_tpl_vars['Vestas']['MACHINE_ID']; ?>
">
				<?php if ($this->_tpl_vars['Vestas']['STATUS'] == 0): ?> 
						Grid Drop
				<?php elseif ($this->_tpl_vars['Vestas']['STATUS'] == 225): ?>
				<!--('+1 hour'|date_format:'%Y-%m-%d %H:%M:%S')-->
					<?php if ($this->_tpl_vars['Vestas']['VDATE'] == ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')) || ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')) <= $this->_tpl_vars['Vestas']['VDT']): ?>
						RUN
					<?php else: ?>
					 	No Comm.
					<?php endif; ?>	
							</a>	

				<?php elseif ($this->_tpl_vars['Vestas']['STATUS'] != 225): ?>
					<?php if ($this->_tpl_vars['Vestas']['VDATE'] == ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')) || ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')) <= $this->_tpl_vars['Vestas']['VDT']): ?>
						Error No:<a href="#" data-toggle="modal" data-target="#ErrorDetail<?php echo $this->_tpl_vars['Vestas']['STATUS']; ?>
" data-tooltip="tooltip" title="Click for Detail"><?php echo $this->_tpl_vars['Vestas']['STATUS']; ?>
</a><?php if ($this->_tpl_vars['Vestas']['STATUS'] == ''): ?>Other Error<?php endif; ?>
						<?php  
							require_once('Connections/ARKA.php');
							mysql_select_db($database_arka, $arka);
							$query_rs1 = "select DESCRIPTION from vestas_error_details where ERROR_ID='".$Vestas.STATUS."'";
							$rs1 = mysql_query($query_rs1, $arka) or die(mysql_error());
							$row_rs1 = mysql_fetch_assoc($rs1);
							echo $desc =$row_rs1["DESCRIPTION"];
						 ?>
					<?php else: ?>
					 	No Comm.
					<?php endif; ?>
				<?php endif; ?>		 
						
			</td>
			<td><a href="./dashBoard_vestas_overall_details.php?this=<?php echo $this->_tpl_vars['Vestas']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['Vestas']['site_name']; ?>
</td>
			
			<!--<td><a href="./dashBoard_vestas_overall_details.php?this=<?php echo $this->_tpl_vars['Vestas']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['Vestas']['make']; ?>
</a></td> -->
			<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						<?php if ($this->_tpl_vars['roles']['role_name'] == 'Arka'): ?><td><a href="./dashBoard_vestas_overall_details.php?this=<?php echo $this->_tpl_vars['Vestas']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['Vestas']['customer_name']; ?>
</a></td> <?php endif; ?>
							<?php endforeach; endif; unset($_from); ?>
            <td><a href="./dashBoard_vestas_overall_details.php?this=<?php echo $this->_tpl_vars['Vestas']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['Vestas']['turbine_htsc_no']; ?>
 - <?php echo $this->_tpl_vars['Vestas']['location_no']; ?>
</a></td>                
			<td><a href="./dashBoard_vestas_overall_details.php?this=<?php echo $this->_tpl_vars['Vestas']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['Vestas']['WS']; ?>
</a></td>
			<td><a href="./dashBoard_vestas_overall_details.php?this=<?php echo $this->_tpl_vars['Vestas']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['Vestas']['KW']; ?>
 </a></td>
			<!--<td><a href="./dashBoard_vestas_overall_details.php?this=<?php echo $this->_tpl_vars['Vestas']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['Vestas']['GRPM']; ?>
</a></td>
			<td><a href="./dashBoard_vestas_overall_details.php?this=<?php echo $this->_tpl_vars['Vestas']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['Vestas']['RRPM']; ?>
</a></td>
            <td><a href="./dashBoard_vestas_overall_details.php?this=<?php echo $this->_tpl_vars['Vestas']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['Vestas']['PITCH_ANGLE']; ?>
</a></td>-->
			<td ><a href="./dashBoard_vestas_overall_details.php?this=<?php echo $this->_tpl_vars['Vestas']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['Vestas']['TZ']; ?>
</a></td>
   
       <!--
	      <td class="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="./turbineEdit.php?turbine_id=<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
"><i class="fa fa-edit"></i></a></td>
	
   
	      <td class="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="fa fa-trash" onClick=" deleteCats('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');"></a></td>-->
	  
               
              <!--   <td class="center"> &nbsp;&nbsp;&nbsp;&nbsp;<a href="./turbineStatus.php"><img src=" ./img/wind_turbine.png" alt="Panel Entry"></a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="./turbineStatus.php"><img src="./img/eb_gen_entry.jpg" alt="EB Entry"></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="./turbineStatus.php"><img src="./img/maintenance_icon.png" alt="Material Entry"></a></td>-->
		 </tr> 	</a><?php endforeach; endif; unset($_from); ?>
		  <input type="hidden" id="datetime" name="datetime" value="<?php echo $this->_tpl_vars['NepcList']['0']['MACHINE_ID']; ?>
">
		 		<?php $_from = $this->_tpl_vars['NepcList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Nepc']):
?>
				 <input type="hidden" id="datetime" name="datetime" value="<?php echo $this->_tpl_vars['Nepc']['MACHINE_ID']; ?>
">
			<input type="hidden" value="<?php echo $this->_tpl_vars['Nepc']['VDATE']; ?>
" /><input type="hidden" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')); ?>
" />
			<div class="modal fade" id="ErrorDetail1<?php echo $this->_tpl_vars['Nepc']['STATUS']; ?>
" role="dialog">
							<div class="modal-dialog modal-sm">
							<!-- Modal content-->
							<div class="modal-content">
							<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Error Details</h4>
							</div>
							<div class="modal-body">
									<iframe height="190px" width="100%" id="ErrorDetail1"  src="./Error_Nepc.php?ERROR_ID=<?php echo $this->_tpl_vars['Nepc']['STATUS']; ?>
" style="border:1px;"></iframe>
							</div>
							 <div class="modal-footer">
							</div>
							</div>
							</div>
							</div>
                  <tr class="gradeX" id="<?php echo $this->_tpl_vars['i']++; ?>
">
			<?php if ($this->_tpl_vars['Nepc']['STATUS'] == 19): ?>
						<td> <a href="./dashBoard_nepc_overall_details.php?this=<?php echo $this->_tpl_vars['Nepc']['MACHINE_ID']; ?>
">
						 <img alt="image" class="img-circle m-t-xs img-responsive" src="images/grid2.png">
						 <!--<img alt="image" class="img-circle m-t-xs img-responsive" src="images/navy-wind-turbine-16.gif">-->
						</a> </td>
				<?php elseif ($this->_tpl_vars['Nepc']['STATUS'] == 49): ?>
				
						<td ><a href="./dashBoard_nepc_overall_details.php?this=<?php echo $this->_tpl_vars['Nepc']['MACHINE_ID']; ?>
">
							<?php if ($this->_tpl_vars['Nepc']['VDATE'] == ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')) || ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')) <= $this->_tpl_vars['Nepc']['VDT']): ?>
			 					<img alt="image" class="img-circle m-t-xs img-responsive" src="images/green_16.gif">
							<?php else: ?> 	
							<!--<img alt="image" class="img-circle m-t-xs img-responsive" src="images/grid2.png">-->
								<img alt="image" class="img-circle m-t-xs img-responsive" src="images/navy-wind-turbine-16.gif">
							<?php endif; ?></a></td> 
				
				<?php elseif ($this->_tpl_vars['Nepc']['STATUS'] != 49 && $this->_tpl_vars['Nepc']['STATUS'] != 19): ?>
			
							<td><a href="./dashBoard_nepc_overall_details.php?this=<?php echo $this->_tpl_vars['Nepc']['MACHINE_ID']; ?>
">
							<?php if ($this->_tpl_vars['Nepc']['VDATE'] == ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')) || ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')) <= $this->_tpl_vars['Nepc']['VDT']): ?>
			 					<img alt="image" class="img-circle m-t-xs img-responsive" src="images/red_wind_turbine_16.gif">
							<?php else: ?> 	
								<!--<img alt="image" class="img-circle m-t-xs img-responsive" src="images/grid2.png">-->
								<img alt="image" class="img-circle m-t-xs img-responsive" src="images/navy-wind-turbine-16.gif">
							<?php endif; ?></a></td>
			<?php endif; ?>
				 <!--<?php if ($this->_tpl_vars['Nepc']['VDATE'] == ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d'))): ?>
				<td > <?php if ($this->_tpl_vars['Nepc']['STATUS'] == '49'): ?><a href="./dashBoard_nepc_overall_details.php?this=<?php echo $this->_tpl_vars['Nepc']['MACHINE_ID']; ?>
">
			 <img alt="image" class="img-circle m-t-xs img-responsive" src="images/green_16.gif"></a>
			 <?php elseif ($this->_tpl_vars['Nepc']['STATUS'] != '49' && $this->_tpl_vars['Nepc']['STATUS'] != '19'): ?> 
				 <img alt="image" class="img-circle m-t-xs img-responsive" src="images/red-wind-turbine-16.gif">
				<?php endif; ?>	 </td> 
				<?php elseif ($this->_tpl_vars['Nepc']['STATUS'] == '19'): ?>
				<td> <a href="./dashBoard_nepc_overall_details.php?this=<?php echo $this->_tpl_vars['Nepc']['MACHINE_ID']; ?>
">
				 <img alt="image" class="img-circle m-t-xs img-responsive" src="images/grid2.png">
				</a> </td>
				<?php elseif ($this->_tpl_vars['Nepc']['VDATE'] != ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')) && $this->_tpl_vars['Nepc']['STATUS'] != '0'): ?>
				<td><a href="./dashBoard_nepc_overall_details.php?this=<?php echo $this->_tpl_vars['Nepc']['MACHINE_ID']; ?>
">
				<img alt="image" class="img-circle m-t-xs img-responsive" src="images/navy-wind-turbine-16.gif"></a>
				</td><?php endif; ?>-->
			<!--<td><?php echo $this->_tpl_vars['i']; ?>
 </td>-->
								
			  <td><a href="./dashBoard_nepc_overall_details.php?this=<?php echo $this->_tpl_vars['Nepc']['MACHINE_ID']; ?>
"><!--<?php if ($this->_tpl_vars['Nepc']['VDATE'] == ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')) || ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')) <= $this->_tpl_vars['Nepc']['VDT'] && $this->_tpl_vars['Nepc']['STATUS'] == 49): ?>
			   Running
			 <?php elseif ($this->_tpl_vars['Nepc']['STATUS'] == 19): ?> 
				Grid Drop
			 <?php elseif ($this->_tpl_vars['Nepc']['VDATE'] != ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')) || ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')) <= $this->_tpl_vars['Nepc']['VDT'] && $this->_tpl_vars['Nepc']['STATUS'] == 49): ?>
			  No Comm.
			 <?php else: ?>
			 Other Errors
				<?php endif; ?></a>-->
					
				<?php if ($this->_tpl_vars['Nepc']['STATUS'] == 19): ?> 
						<!--No Comm.-->Grid Drop
				<?php elseif ($this->_tpl_vars['Nepc']['STATUS'] == 49): ?>
				<!--('+1 hour'|date_format:'%Y-%m-%d %H:%M:%S')-->
					<?php if ($this->_tpl_vars['Nepc']['VDATE'] == ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')) || ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')) <= $this->_tpl_vars['Nepc']['VDT']): ?>
						RUN
					<?php else: ?>
					 	No Comm.
					<?php endif; ?>	
								

				<?php elseif ($this->_tpl_vars['Nepc']['STATUS'] != 49): ?>
					<?php if ($this->_tpl_vars['Nepc']['VDATE'] == ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')) || ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')) <= $this->_tpl_vars['Nepc']['VDT']): ?>
					<a href="#" data-toggle="modal" data-target="#ErrorDetail1<?php echo $this->_tpl_vars['Nepc']['STATUS']; ?>
" >Error No:<?php echo $this->_tpl_vars['Nepc']['STATUS']; ?>
</a><?php if ($this->_tpl_vars['Nepc']['STATUS'] == ''): ?>Other Error <?php endif; ?>
						<!--Error No:<a href="#" data-toggle="modal" data-target="#ErrorDetail<?php echo $this->_tpl_vars['Nepc']['STATUS']; ?>
" data-tooltip="tooltip" title="Click for Detail"><?php echo $this->_tpl_vars['Nepc']['STATUS']; ?>
</a><?php if ($this->_tpl_vars['Nepc']['STATUS'] == ''): ?><?php endif; ?>-->
						<!--<?php  
							require_once('Connections/ARKA.php');
							mysql_select_db($database_arka, $arka);
							$query_rs1 = "select DESCRIPTION from vestas_error_details where ERROR_ID='".$Nepc.STATUS."'";
							$rs1 = mysql_query($query_rs1, $arka) or die(mysql_error());
							$row_rs1 = mysql_fetch_assoc($rs1);
							echo $desc =$row_rs1["DESCRIPTION"];
						 ?>-->
					<?php else: ?>
					 	<!--Grid Drop.-->No Comm.
					<?php endif; ?>
				<?php endif; ?>	
				</a></td>		
			<td><a href="./dashBoard_nepc_overall_details.php?this=<?php echo $this->_tpl_vars['Nepc']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['Nepc']['site_name']; ?>
</td>
			
			<!--<td><a href="./dashBoard_nepc_overall_details.php?this=<?php echo $this->_tpl_vars['Nepc']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['Nepc']['make']; ?>
</a></td>--> 
			<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						<?php if ($this->_tpl_vars['roles']['role_name'] == 'Arka'): ?><td><a href="./dashBoard_vestas_overall_details.php?this=<?php echo $this->_tpl_vars['Nepc']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['Nepc']['customer_name']; ?>
</a></td> <?php endif; ?>
							<?php endforeach; endif; unset($_from); ?>
            <td><a href="./dashBoard_nepc_overall_details.php?this=<?php echo $this->_tpl_vars['Nepc']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['Nepc']['turbine_htsc_no']; ?>
 - <?php echo $this->_tpl_vars['Nepc']['location_no']; ?>
</a></td>                
			<td><a href="./dashBoard_nepc_overall_details.php?this=<?php echo $this->_tpl_vars['Nepc']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['Nepc']['WS']; ?>
</a></td>
			<td><a href="./dashBoard_nepc_overall_details.php?this=<?php echo $this->_tpl_vars['Nepc']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['Nepc']['KW']; ?>
 </a></td>
			<!--<td><a href="./dashBoard_nepc_overall_details.php?this=<?php echo $this->_tpl_vars['Nepc']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['Nepc']['GRPM']; ?>
</a></td>
			<td><a href="./dashBoard_nepc_overall_details.php?this=<?php echo $this->_tpl_vars['Nepc']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['Nepc']['RRPM']; ?>
</a></td>
            <td><a href="./dashBoard_nepc_overall_details.php?this=<?php echo $this->_tpl_vars['Nepc']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['Nepc']['YAW_ANGLE']; ?>
</a></td>-->
			
	       <!-- <td ><a href="./vestasOverAllDetails.php?this=<?php echo $this->_tpl_vars['Nepc']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['Todayval'][$this->_tpl_vars['key1']]; ?>
</a></td>
			<td ><a href="./vestasOverAllDetails.php?this=<?php echo $this->_tpl_vars['Nepc']['MACHINE_ID']; ?>
"><?php if ($this->_tpl_vars['CurMonthTotal'] == ''): ?> 0 <?php else: ?><?php echo $this->_tpl_vars['CurMonthTotal']; ?>
<?php endif; ?></a></td>
	        <td ><a href="./vestasOverAllDetails.php?this=<?php echo $this->_tpl_vars['Nepc']['MACHINE_ID']; ?>
"><?php if ($this->_tpl_vars['AnnualTotal'] == ''): ?> 0 <?php else: ?><?php echo $this->_tpl_vars['AnnualTotal']; ?>
<?php endif; ?></a></td>-->
			<td ><a href="./dashBoard_nepc_overall_details.php?this=<?php echo $this->_tpl_vars['Nepc']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['Nepc']['TZ']; ?>
</a></td>
   
       <!--
	      <td class="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="./turbineEdit.php?turbine_id=<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
"><i class="fa fa-edit"></i></a></td>
	
   
	      <td class="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="fa fa-trash" onClick=" deleteCats('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');"></a></td>-->
	  
               
              <!--   <td class="center"> &nbsp;&nbsp;&nbsp;&nbsp;<a href="./turbineStatus.php"><img src=" ./img/wind_turbine.png" alt="Panel Entry"></a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="./turbineStatus.php"><img src="./img/eb_gen_entry.jpg" alt="EB Entry"></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="./turbineStatus.php"><img src="./img/maintenance_icon.png" alt="Material Entry"></a></td>-->
		 </tr> 	</a><?php endforeach; endif; unset($_from); ?>
		 
		 <?php $_from = $this->_tpl_vars['TTGList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['TTG']):
?>
			
                  <tr class="gradeX" id="<?php echo $this->_tpl_vars['i']++; ?>
">
					 <?php if ($this->_tpl_vars['Nepc']['VDATE'] == ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d'))): ?>
				<td > <?php if ($this->_tpl_vars['Nepc']['STATUS'] == '49'): ?><a href="./dashBoard_nepc_overall_details.php?this=<?php echo $this->_tpl_vars['TTG']['MACHINE_ID']; ?>
">
			 <img alt="image" class="img-circle m-t-xs img-responsive" src="images/green_16.gif"></a>
			 <?php elseif ($this->_tpl_vars['TTG']['STATUS'] != '49' && $this->_tpl_vars['TTG']['STATUS'] != '19'): ?> 
				 <img alt="image" class="img-circle m-t-xs img-responsive" src="images/red-wind-turbine-16.gif">
				<?php endif; ?>	 </td> 
				<?php elseif ($this->_tpl_vars['TTG']['STATUS'] == '19'): ?>
				<td> <a href="./dashBoard_TTG_overall_details.php?this=<?php echo $this->_tpl_vars['TTG']['MACHINE_ID']; ?>
">
				 <img alt="image" class="img-circle m-t-xs img-responsive" src="images/grid2.png">
				</a> </td>
				<?php elseif ($this->_tpl_vars['TTG']['VDATE'] != ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')) && $this->_tpl_vars['TTG']['STATUS'] != 0): ?>
				<td><a href="./dashBoard_TTG_overall_details.php?this=<?php echo $this->_tpl_vars['TTG']['MACHINE_ID']; ?>
">
				<img alt="image" class="img-circle m-t-xs img-responsive" src="images/navy-wind-turbine-16.gif"></a>
				</td><?php endif; ?>
			<!--<td><?php echo $this->_tpl_vars['i']; ?>
 </td>-->
			<td><a href="./dashBoard_TTG_overall_details.php?this=<?php echo $this->_tpl_vars['TTG']['MACHINE_ID']; ?>
"><?php if ($this->_tpl_vars['TTG']['STATUS'] == 49): ?>
			   Running
			 <?php elseif ($this->_tpl_vars['TTG']['STATUS'] == 19): ?> 
				Grid Drop
			<?php elseif ($this->_tpl_vars['TTG']['VDATE'] != ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d'))): ?>
			 No Comm.
			<?php else: ?>
			 Other Errors
				<?php endif; ?></a>	</td>		
			<td><a href="./dashBoard_TTG_overall_details.php?this=<?php echo $this->_tpl_vars['TTG']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['TTG']['site_name']; ?>
</td>
			
			<td><a href="./dashBoard_TTG_overall_details.php?this=<?php echo $this->_tpl_vars['TTG']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['TTG']['make']; ?>
</a></td> 
			<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						<?php if ($this->_tpl_vars['roles']['role_name'] == 'Arka'): ?><td><a href="./dashBoard_vestas_overall_details.php?this=<?php echo $this->_tpl_vars['TTG']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['TTG']['customer_name']; ?>
</a></td> <?php endif; ?>
							<?php endforeach; endif; unset($_from); ?>
            <td><a href="./dashBoard_TTG_overall_details.php?this=<?php echo $this->_tpl_vars['TTG']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['TTG']['turbine_htsc_no']; ?>
 - <?php echo $this->_tpl_vars['TTG']['location_no']; ?>
</a></td>                
			<td><a href="./dashBoard_TTG_overall_details.php?this=<?php echo $this->_tpl_vars['TTG']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['TTG']['WS']; ?>
</a></td>
			<td><a href="./dashBoard_TTG_overall_details.php?this=<?php echo $this->_tpl_vars['TTG']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['TTG']['KW']; ?>
 </a></td>
			<td><a href="./dashBoard_TTG_overall_details.php?this=<?php echo $this->_tpl_vars['TTG']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['TTG']['GRPM']; ?>
</a></td>
			<td><a href="./dashBoard_TTG_overall_details.php?this=<?php echo $this->_tpl_vars['TTG']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['TTG']['RRPM']; ?>
</a></td>
            <td><a href="./dashBoard_TTG_overall_details.php?this=<?php echo $this->_tpl_vars['TTG']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['TTG']['PITCH_ANGLE']; ?>
</a></td>
			
	       <!-- <td ><a href="./vestasOverAllDetails.php?this=<?php echo $this->_tpl_vars['TTG']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['Todayval'][$this->_tpl_vars['key1']]; ?>
</a></td>
			<td ><a href="./vestasOverAllDetails.php?this=<?php echo $this->_tpl_vars['TTG']['MACHINE_ID']; ?>
"><?php if ($this->_tpl_vars['CurMonthTotal'] == ''): ?> 0 <?php else: ?><?php echo $this->_tpl_vars['CurMonthTotal']; ?>
<?php endif; ?></a></td>
	        <td ><a href="./vestasOverAllDetails.php?this=<?php echo $this->_tpl_vars['TTG']['MACHINE_ID']; ?>
"><?php if ($this->_tpl_vars['AnnualTotal'] == ''): ?> 0 <?php else: ?><?php echo $this->_tpl_vars['AnnualTotal']; ?>
<?php endif; ?></a></td>-->
			<td ><a href="./dashBoard_vestas_overall_details.php?this=<?php echo $this->_tpl_vars['TTG']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['TTG']['TZ']; ?>
</a></td>
   
       <!--
	      <td class="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="./turbineEdit.php?turbine_id=<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
"><i class="fa fa-edit"></i></a></td>
	
   
	      <td class="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="fa fa-trash" onClick=" deleteCats('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');"></a></td>-->
	  
               
              <!--   <td class="center"> &nbsp;&nbsp;&nbsp;&nbsp;<a href="./turbineStatus.php"><img src=" ./img/wind_turbine.png" alt="Panel Entry"></a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="./turbineStatus.php"><img src="./img/eb_gen_entry.jpg" alt="EB Entry"></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="./turbineStatus.php"><img src="./img/maintenance_icon.png" alt="Material Entry"></a></td>-->
		 </tr> 	</a><?php endforeach; endif; unset($_from); ?>


 <?php $_from = $this->_tpl_vars['PioneerList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Pioneer']):
?>
			
                  <tr class="gradeX" id="<?php echo $this->_tpl_vars['i']++; ?>
">
					 <?php if ($this->_tpl_vars['Pioneer']['VDATE'] == ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d'))): ?>
				<td > <?php if ($this->_tpl_vars['Pioneer']['STATUS'] == '49'): ?><a href="./dashBoard_Pioneer_overall_details.php?this=<?php echo $this->_tpl_vars['Pioneer']['MACHINE_ID']; ?>
">
			 <img alt="image" class="img-circle m-t-xs img-responsive" src="images/green_16.gif"></a>
			 <?php elseif ($this->_tpl_vars['Pioneer']['STATUS'] != '49' && $this->_tpl_vars['Pioneer']['STATUS'] != '19'): ?> 
				 <img alt="image" class="img-circle m-t-xs img-responsive" src="images/red-wind-turbine-16.gif">
				<?php endif; ?>	 </td> 
				<?php elseif ($this->_tpl_vars['Pioneer']['STATUS'] == '19'): ?>
				<td> <a href="./dashBoard_Pioneer_overall_details.php?this=<?php echo $this->_tpl_vars['Pioneer']['MACHINE_ID']; ?>
">
				 <img alt="image" class="img-circle m-t-xs img-responsive" src="images/grid2.png">
				</a> </td>
				<?php elseif ($this->_tpl_vars['Pioneer']['VDATE'] != ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')) && $this->_tpl_vars['Pioneer']['STATUS'] != 0): ?>
				<td><a href="./dashBoard_Pioneer_overall_details.php?this=<?php echo $this->_tpl_vars['Pioneer']['MACHINE_ID']; ?>
">
				<img alt="image" class="img-circle m-t-xs img-responsive" src="images/navy-wind-turbine-16.gif"></a>
				</td><?php endif; ?>
			<!--<td><?php echo $this->_tpl_vars['i']; ?>
 </td>-->
			<td><a href="./dashBoard_Pioneer_overall_details.php?this=<?php echo $this->_tpl_vars['Pioneer']['MACHINE_ID']; ?>
"><?php if ($this->_tpl_vars['Pioneer']['STATUS'] == 49): ?>
			   Running
			 <?php elseif ($this->_tpl_vars['Pioneer']['STATUS'] == 19): ?> 
				Grid Drop
			<?php elseif ($this->_tpl_vars['Pioneer']['VDATE'] != ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d'))): ?>
			 No Comm.
			<?php else: ?>
			 Other Errors
				<?php endif; ?></a>	</td>		
			<td><a href="./dashBoard_Pioneer_overall_details.php?this=<?php echo $this->_tpl_vars['Pioneer']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['Pioneer']['site_name']; ?>
</td>
			
			<td><a href="./dashBoard_Pioneer_overall_details.php?this=<?php echo $this->_tpl_vars['Pioneer']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['Pioneer']['make']; ?>
</a></td> 
			<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						<?php if ($this->_tpl_vars['roles']['role_name'] == 'Arka'): ?><td><a href="./dashBoard_vestas_overall_details.php?this=<?php echo $this->_tpl_vars['Pioneer']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['Pioneer']['customer_name']; ?>
</a></td> <?php endif; ?>
							<?php endforeach; endif; unset($_from); ?>
            <td><a href="./dashBoard_Pioneer_overall_details.php?this=<?php echo $this->_tpl_vars['Pioneer']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['Pioneer']['turbine_htsc_no']; ?>
 - <?php echo $this->_tpl_vars['Pioneer']['location_no']; ?>
</a></td>                
			<td><a href="./dashBoard_Pioneer_overall_details.php?this=<?php echo $this->_tpl_vars['Pioneer']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['Pioneer']['WS']; ?>
</a></td>
			<td><a href="./dashBoard_Pioneer_overall_details.php?this=<?php echo $this->_tpl_vars['Pioneer']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['Pioneer']['KW']; ?>
 </a></td>
			<td><a href="./dashBoard_Pioneer_overall_details.php?this=<?php echo $this->_tpl_vars['Pioneer']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['Pioneer']['GRPM']; ?>
</a></td>
			<td><a href="./dashBoard_Pioneer_overall_details.php?this=<?php echo $this->_tpl_vars['Pioneer']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['Pioneer']['RRPM']; ?>
</a></td>
            <td><a href="./dashBoard_Pioneer_overall_details.php?this=<?php echo $this->_tpl_vars['Pioneer']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['Pioneer']['PITCH_ANGLE']; ?>
</a></td>
			
	       <!-- <td ><a href="./vestasOverAllDetails.php?this=<?php echo $this->_tpl_vars['Pioneer']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['Todayval'][$this->_tpl_vars['key1']]; ?>
</a></td>
			<td ><a href="./vestasOverAllDetails.php?this=<?php echo $this->_tpl_vars['Pioneer']['MACHINE_ID']; ?>
"><?php if ($this->_tpl_vars['CurMonthTotal'] == ''): ?> 0 <?php else: ?><?php echo $this->_tpl_vars['CurMonthTotal']; ?>
<?php endif; ?></a></td>
	        <td ><a href="./vestasOverAllDetails.php?this=<?php echo $this->_tpl_vars['Pioneer']['MACHINE_ID']; ?>
"><?php if ($this->_tpl_vars['AnnualTotal'] == ''): ?> 0 <?php else: ?><?php echo $this->_tpl_vars['AnnualTotal']; ?>
<?php endif; ?></a></td>-->
			<td ><a href="./dashBoard_vestas_overall_details.php?this=<?php echo $this->_tpl_vars['Pioneer']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['Pioneer']['TZ']; ?>
</a></td>
   
       <!--
	      <td class="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="./turbineEdit.php?turbine_id=<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
"><i class="fa fa-edit"></i></a></td>
	
   
	      <td class="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="fa fa-trash" onClick=" deleteCats('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');"></a></td>-->
	  
               
              <!--   <td class="center"> &nbsp;&nbsp;&nbsp;&nbsp;<a href="./turbineStatus.php"><img src=" ./img/wind_turbine.png" alt="Panel Entry"></a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="./turbineStatus.php"><img src="./img/eb_gen_entry.jpg" alt="EB Entry"></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="./turbineStatus.php"><img src="./img/maintenance_icon.png" alt="Material Entry"></a></td>-->
		 </tr> 	</a><?php endforeach; endif; unset($_from); ?>


<!--<?php $_from = $this->_tpl_vars['SCADAList2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListSCADA2']):
?>
			
                  <tr class="gradeX" id="<?php echo $this->_tpl_vars['i']++; ?>
">
					 <?php if ($this->_tpl_vars['ListSCADA2']['VDATE'] == ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d'))): ?>
				<td > <?php if ($this->_tpl_vars['ListSCADA2']['STATUS'] == 225 || $this->_tpl_vars['ListSCADA2']['STATUS'] == 15 || $this->_tpl_vars['ListSCADA2']['STATUS'] == 1): ?><a href="./dashBoard_nepc_overall_details.php?this=<?php echo $this->_tpl_vars['ListSCADA2']['MACHINE_ID']; ?>
">
			 <img alt="image" class="img-circle m-t-xs img-responsive" src="images/green_16.gif"></a>
			 <?php elseif ($this->_tpl_vars['ListSCADA2']['STATUS'] == 0): ?> 
				 <img alt="image" class="img-circle m-t-xs img-responsive" src="images/red-wind-turbine-16.gif">
				<?php endif; ?>	 </td> 
				<?php elseif ($this->_tpl_vars['ListSCADA2']['VDATE'] != ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')) && $this->_tpl_vars['ListSCADA2']['STATUS'] == 0): ?>
				<td> <a href="./dashBoard_nepc_overall_details.php?this=<?php echo $this->_tpl_vars['ListSCADA2']['MACHINE_ID']; ?>
">
				 <img alt="image" class="img-circle m-t-xs img-responsive" src="images/grid2.png">
				</a> </td>
				<?php elseif ($this->_tpl_vars['ListSCADA2']['VDATE'] != ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')) && $this->_tpl_vars['ListSCADA2']['STATUS'] != 0): ?>
				<td><a href="./dashBoard_nepc_overall_details.php?this=<?php echo $this->_tpl_vars['ListSCADA2']['MACHINE_ID']; ?>
">
				<img alt="image" class="img-circle m-t-xs img-responsive" src="images/navy-wind-turbine-16.gif"></a>
				</td><?php endif; ?>
			<td><?php echo $this->_tpl_vars['i']; ?>
 </td>
			<td><a href="./dashBoard_nepc_overall_details.php?this=<?php echo $this->_tpl_vars['ListSCADA2']['MACHINE_ID']; ?>
"><?php if ($this->_tpl_vars['ListSCADA2']['STATUS'] == 225 || $this->_tpl_vars['ListSCADA2']['STATUS'] == 15 || $this->_tpl_vars['ListSCADA2']['STATUS'] == 1): ?>
			   Running
			 <?php elseif ($this->_tpl_vars['ListSCADA2']['STATUS'] == 0): ?> 
				Grid Drop
			<?php elseif ($this->_tpl_vars['ListSCADA2']['VDATE'] != ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d'))): ?>
			 No Comm.
			<?php else: ?>
			 Other Errors
				<?php endif; ?></a>	</td>		
			<td><a href="./dashBoard_nepc_overall_details.php?this=<?php echo $this->_tpl_vars['ListSCADA2']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['ListSCADA2']['site_name']; ?>
</td>
			
			<td><a href="./dashBoard_vestas_overall_details.php?this=<?php echo $this->_tpl_vars['ListSCADA']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['ListSCADA']['make']; ?>
</a></td> 
			<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						<?php if ($this->_tpl_vars['roles']['role_name'] == 'Arka'): ?><td><a href="./dashBoard_vestas_overall_details.php?this=<?php echo $this->_tpl_vars['ListSCADA']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['ListSCADA']['customer_name']; ?>
</a></td> <?php endif; ?>
							<?php endforeach; endif; unset($_from); ?>
            <td><a href="./dashBoard_nepc_overall_details.php?this=<?php echo $this->_tpl_vars['ListSCADA2']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['ListSCADA2']['location_no']; ?>
</a></td>                
			<td><a href="./dashBoard_nepc_overall_details.php?this=<?php echo $this->_tpl_vars['ListSCADA2']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['ListSCADA2']['WS']; ?>
</a></td>
			<td><a href="./dashBoard_nepc_overall_details.php?this=<?php echo $this->_tpl_vars['ListSCADA2']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['ListSCADA2']['KW']; ?>
 </a></td>
			<td><a href="./dashBoard_nepc_overall_details.php?this=<?php echo $this->_tpl_vars['ListSCADA2']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['ListSCADA2']['GRPM']; ?>
</a></td>
			<td><a href="./dashBoard_nepc_overall_details.php?this=<?php echo $this->_tpl_vars['ListSCADA2']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['ListSCADA2']['RRPM']; ?>
</a></td>
            <td><a href="./dashBoard_nepc_overall_details.php?this=<?php echo $this->_tpl_vars['ListSCADA2']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['ListSCADA2']['PITCH_ANGLE']; ?>
</a></td>
			
	        <td ><a href="./vestasOverAllDetails.php?this=<?php echo $this->_tpl_vars['ListSCADA2']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['Todayval'][$this->_tpl_vars['key1']]; ?>
</a></td>
			<td ><a href="./vestasOverAllDetails.php?this=<?php echo $this->_tpl_vars['ListSCADA2']['MACHINE_ID']; ?>
"><?php if ($this->_tpl_vars['CurMonthTotal'] == ''): ?> 0 <?php else: ?><?php echo $this->_tpl_vars['CurMonthTotal']; ?>
<?php endif; ?></a></td>
	        <td ><a href="./vestasOverAllDetails.php?this=<?php echo $this->_tpl_vars['ListSCADA2']['MACHINE_ID']; ?>
"><?php if ($this->_tpl_vars['AnnualTotal'] == ''): ?> 0 <?php else: ?><?php echo $this->_tpl_vars['AnnualTotal']; ?>
<?php endif; ?></a></td>
			<td ><a href="./dashBoard_nepc_overall_details.php?this=<?php echo $this->_tpl_vars['ListSCADA2']['MACHINE_ID']; ?>
"><?php echo $this->_tpl_vars['ListSCADA2']['TZ']; ?>
</a></td>
   
       
	      <td class="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="./turbineEdit.php?turbine_id=<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
"><i class="fa fa-edit"></i></a></td>
	
   
	      <td class="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="fa fa-trash" onClick=" deleteCats('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');"></a></td>
	  
               
                 <td class="center"> &nbsp;&nbsp;&nbsp;&nbsp;<a href="./turbineStatus.php"><img src=" ./img/wind_turbine.png" alt="Panel Entry"></a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="./turbineStatus.php"><img src="./img/eb_gen_entry.jpg" alt="EB Entry"></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="./turbineStatus.php"><img src="./img/maintenance_icon.png" alt="Material Entry"></a></td>
		 </tr> 	</a><?php endforeach; endif; unset($_from); ?>-->

                    </tbody>
					
                    </table>	

                    </div>
                </div>
								          
                               </div>
							   
							   
							   
         <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
				      <div class="ibox-title">
							<h3 class="font-bold no-margins">
                                Last 30 Days Production Revenue Graph
                            </h3>
                    </div>
                   <!-- <div class="ibox-content" >
                           
			     	<iframe class="prodclass" style="border:none;"  src="./dash_production_chart.php?id=<?php echo $this->_tpl_vars['VestasList']['0']['MACHINE_ID']; ?>
" style="width:770PX"></iframe>
			     </div>-->
	<?php if ($this->_supers['session']['USER_GROUP'] == 'Admin' || $this->_supers['session']['USER_GROUP'] == 'MD' || $this->_supers['session']['USER_GROUP'] == 'Support' || $this->_supers['session']['USER_GROUP'] == 'Developement'): ?>
				 <?php if ($this->_supers['get']['customer_id'] == 'CUS1002'): ?> 
                    <div class="ibox-content" >
			     	<iframe class="prodclass" style="border:none;"  src="./dash_production_chart.php?id=<?php echo $this->_tpl_vars['VestasList']['0']['MACHINE_ID']; ?>
" style="width:770PX"></iframe>
			        </div>
				  <?php else: ?>
				    <?php if ($this->_supers['get']['customer_id'] == 'CUS1004'): ?>
                       <div class="ibox-content" >
			     	   <iframe class="prodclass" style="border:none;"  src="./dash_production_chart.php?id=<?php echo $this->_tpl_vars['VestasList']['0']['MACHINE_ID']; ?>
" style="width:770PX"></iframe>
			           </div>
				    <?php else: ?>
				        <div class="ibox-content" >
			     	    <iframe class="prodclass" style="border:none;" src="./dash_production_chart3.php?id=<?php echo $this->_tpl_vars['NepcList']['0']['MACHINE_ID']; ?>
" style="width:770PX"></iframe>
			            </div>
                     <?php endif; ?>
				 <?php endif; ?>	 
		<?php elseif ($this->_supers['session']['USER_GROUP'] == 'RRPL MD Group' || $this->_supers['session']['USER_GROUP'] == 'RRPL Admin Group' || $this->_supers['session']['USER_GROUP'] == 'RRPL Site Incharge Group' || $this->_supers['session']['USER_GROUP'] == 'RRPL Site Operators Group'): ?> 
				  <div class="ibox-content" >
			     	<iframe class="prodclass" style="border:none;"  src="./dash_production_chart3.php?id=<?php echo $this->_tpl_vars['NepcList']['0']['MACHINE_ID']; ?>
" style="width:770PX"></iframe>
			     </div>
				 <?php elseif ($this->_supers['session']['USER_GROUP'] == 'Customer_Admin'): ?>
				 <div class="ibox-content" >
			     	<iframe class="prodclass" style="border:none;"  src="./dash_production_chart.php?id=<?php echo $this->_tpl_vars['VestasList']['0']['MACHINE_ID']; ?>
" style="width:770PX"></iframe>
			        </div>
				 <?php endif; ?>
                </div>
            </div>
			<!-- <div class="col-md-4">
                <div class="ibox float-e-margins">
				 <div class="ibox-title">
                        <h5>SCADA REPORT</h5>
                        <div class="ibox-tools">
                            <span class="label label-primary">Updated <?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
</span>
                        </div>
                    </div>
				<div class="ibox-content no-padding"  style="height:425PX">
                   <?php $_from = $this->_tpl_vars['SCADAList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListSCADA2']):
?>
            <div class="col-lg-16">
                <?php if ($this->_tpl_vars['ListSCADA2']['VDATE'] == ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d'))): ?>
                <div class="contact-box">
                   <a href="./vestasOverAllDetails.php?this=<?php echo $this->_tpl_vars['ListSCADA2']['MACHINE_ID']; ?>
">
                    <div class="col-sm-4">
                        <div class="text-center">
							 <?php if ($this->_tpl_vars['ListSCADA2']['STATUS'] == 225 || $this->_tpl_vars['ListSCADA2']['STATUS'] == 15 || $this->_tpl_vars['ListSCADA2']['STATUS'] == 1): ?>
						  <img alt="image" class="img-circle m-t-xs img-responsive" src="images/green.png">
                            <div class="m-t-xs font-bold">Running</div> 
						 <?php elseif ($this->_tpl_vars['ListSCADA2']['STATUS'] == 0): ?>
                            <img alt="image" class="img-circle m-t-xs img-responsive" src="images/yellow_turbine.png">
                            <div class="m-t-xs font-bold"> Grid Drop</div>
						<?php else: ?>
							<img alt="image" class="img-circle m-t-xs img-responsive" src="images/red.gif">
                            <div class="m-t-xs font-bold"> Other Errors</div>
							
						<?php endif; ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <h3><strong>HTSC :<?php echo $this->_tpl_vars['ListSCADA2']['turbine_htsc_no']; ?>
 / LOC: <?php echo $this->_tpl_vars['ListSCADA2']['location_no']; ?>
 </strong></h3>
                        <p><i class="fa fa-map-marker"></i>&nbsp;&nbsp;Site : <?php echo $this->_tpl_vars['ListSCADA2']['site_name']; ?>
</p>
                        <address>
							 <strong>Wind Speed : </strong><?php echo $this->_tpl_vars['ListSCADA2']['WS']; ?>
&nbsp; m/s<br>
                             <strong>Instant Kw : </strong> </abbr> <?php echo $this->_tpl_vars['ListSCADA2']['KW']; ?>
&nbsp;Kw<br>
                            <strong>Date &amp; Time: </strong><?php echo $this->_tpl_vars['ListSCADA2']['TZ']; ?>
<br>
                             
                        </address>
                    </div>
					</a>
					</div>
				<?php elseif ($this->_tpl_vars['ListSCADA2']['VDATE'] != ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d'))): ?>
				 <div class="contact-box">
                   <a href="./vestasOverAllDetails.php?this=<?php echo $this->_tpl_vars['ListSCADA2']['MACHINE_ID']; ?>
" >
                    <div class="col-sm-4">
                        <div class="text-center">
							<img alt="image" class="img-circle m-t-xs img-responsive" src="images/navy.gif">
                            <div class="m-t-xs font-bold"> No Comm.</div>
                       </div>
                    </div>
                    <div class="col-sm-8">
                        <h3><strong>HTSC :<?php echo $this->_tpl_vars['ListSCADA2']['turbine_htsc_no']; ?>
 / LOC: <?php echo $this->_tpl_vars['ListSCADA2']['location_no']; ?>
 </strong></h3>
                        <p><i class="fa fa-map-marker"></i>&nbsp;&nbsp;Site : <?php echo $this->_tpl_vars['ListSCADA2']['site_name']; ?>
</p>
                        <address>
							 <strong>Wind Speed : </strong><?php echo $this->_tpl_vars['ListSCADA2']['WS']; ?>
&nbsp; m/s<br>
                             <strong>Instant Kw : </strong> </abbr> <?php echo $this->_tpl_vars['ListSCADA2']['KW']; ?>
&nbsp;Kw<br>
                            <strong>Date &amp; Time: </strong><?php echo $this->_tpl_vars['ListSCADA2']['TZ']; ?>
<br>
                          
                        </address>
						   <hr/>
                    </div>
					</a>
					
					</div>
					<?php endif; ?>
                    <div class="clearfix"></div>
                       
              
            </div>
			<?php endforeach; endif; unset($_from); ?>
					
</div>
                </div>
            </div>
		</div>-->
		<!-- <div class="row">
            <div class="col-lg-4" style="width:1106px">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-warning pull-right">Data has changed</span>
                        <h5>User activity</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-xs-4">
                                <small class="stats-label">Pages / Visit</small>
                                <h4>236 321.80</h4>
                            </div>

                            <div class="col-xs-4">
                                <small class="stats-label">% New Visits</small>
                                <h4>46.11%</h4>
                            </div>
                            <div class="col-xs-4">
                                <small class="stats-label">Last week</small>
                                <h4>432.021</h4>
                            </div>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-xs-4">
                                <small class="stats-label">Pages / Visit</small>
                                <h4>643 321.10</h4>
                            </div>

                            <div class="col-xs-4">
                                <small class="stats-label">% New Visits</small>
                                <h4>92.43%</h4>
                            </div>
                            <div class="col-xs-4">
                                <small class="stats-label">Last week</small>
                                <h4>564.554</h4>
                            </div>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-xs-4">
                                <small class="stats-label">Pages / Visit</small>
                                <h4>436 547.20</h4>
                            </div>

                            <div class="col-xs-4">
                                <small class="stats-label">% New Visits</small>
                                <h4>150.23%</h4>
                            </div>
                            <div class="col-xs-4">
                                <small class="stats-label">Last week</small>
                                <h4>124.990</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
-->
       <!-- <div class="row">

        <div class="col-lg-12">
        <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Custom responsive table </h5>
            <div class="ibox-tools">
                <a class="collapse-link">
                    <i class="fa fa-chevron-up"></i>
                </a>
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-wrench"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#">Config option 1</a>
                    </li>
                    <li><a href="#">Config option 2</a>
                    </li>
                </ul>
                <a class="close-link">
                    <i class="fa fa-times"></i>
                </a>
            </div>
        </div>
        <div class="ibox-content">
            <div class="row">
                <div class="col-sm-9 m-b-xs">
                    <div data-toggle="buttons" class="btn-group">
                        <label class="btn btn-sm btn-white"> <input type="radio" id="option1" name="options" autocomplete="off"> Day </label>
                        <label class="btn btn-sm btn-white active"> <input type="radio" id="option2" name="options" autocomplete="off"> Week </label>
                        <label class="btn btn-sm btn-white"> <input type="radio" id="option3" name="options" autocomplete="off"> Month </label>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="input-group"><input type="text" placeholder="Search" class="input-sm form-control" autocomplete="off"> <span class="input-group-btn">
                                        <button type="button" class="btn btn-sm btn-primary"> Go!</button> </span></div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>

                        <th>#</th>
                        <th>Project </th>
                        <th>Name </th>
                        <th>Phone </th>
                        <th>Company </th>
                        <th>Completed </th>
                        <th>Task</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Project <small>This is example of project</small></td>
                        <td>Patrick Smith</td>
                        <td>0800 051213</td>
                        <td>Inceptos Hymenaeos Ltd</td>
                        <td><span class="pie">0.52/1.561</span></td>
                        <td>20%</td>
                        <td>Jul 14, 2013</td>
                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Alpha project</td>
                        <td>Alice Jackson</td>
                        <td>0500 780909</td>
                        <td>Nec Euismod In Company</td>
                        <td><span class="pie">6,9</span></td>
                        <td>40%</td>
                        <td>Jul 16, 2013</td>
                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Betha project</td>
                        <td>John Smith</td>
                        <td>0800 1111</td>
                        <td>Erat Volutpat</td>
                        <td><span class="pie">3,1</span></td>
                        <td>75%</td>
                        <td>Jul 18, 2013</td>
                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Gamma project</td>
                        <td>Anna Jordan</td>
                        <td>(016977) 0648</td>
                        <td>Tellus Ltd</td>
                        <td><span class="pie">4,9</span></td>
                        <td>18%</td>
                        <td>Jul 22, 2013</td>
                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Alpha project</td>
                        <td>Alice Jackson</td>
                        <td>0500 780909</td>
                        <td>Nec Euismod In Company</td>
                        <td><span class="pie">6,9</span></td>
                        <td>40%</td>
                        <td>Jul 16, 2013</td>
                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Project <small>This is example of project</small></td>
                        <td>Patrick Smith</td>
                        <td>0800 051213</td>
                        <td>Inceptos Hymenaeos Ltd</td>
                        <td><span class="pie">0.52/1.561</span></td>
                        <td>20%</td>
                        <td>Jul 14, 2013</td>
                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Gamma project</td>
                        <td>Anna Jordan</td>
                        <td>(016977) 0648</td>
                        <td>Tellus Ltd</td>
                        <td><span class="pie">4,9</span></td>
                        <td>18%</td>
                        <td>Jul 22, 2013</td>
                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Project <small>This is example of project</small></td>
                        <td>Patrick Smith</td>
                        <td>0800 051213</td>
                        <td>Inceptos Hymenaeos Ltd</td>
                        <td><span class="pie">0.52/1.561</span></td>
                        <td>20%</td>
                        <td>Jul 14, 2013</td>
                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Alpha project</td>
                        <td>Alice Jackson</td>
                        <td>0500 780909</td>
                        <td>Nec Euismod In Company</td>
                        <td><span class="pie">6,9</span></td>
                        <td>40%</td>
                        <td>Jul 16, 2013</td>
                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Betha project</td>
                        <td>John Smith</td>
                        <td>0800 1111</td>
                        <td>Erat Volutpat</td>
                        <td><span class="pie">3,1</span></td>
                        <td>75%</td>
                        <td>Jul 18, 2013</td>
                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Gamma project</td>
                        <td>Anna Jordan</td>
                        <td>(016977) 0648</td>
                        <td>Tellus Ltd</td>
                        <td><span class="pie">4,9</span></td>
                        <td>18%</td>
                        <td>Jul 22, 2013</td>
                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Alpha project</td>
                        <td>Alice Jackson</td>
                        <td>0500 780909</td>
                        <td>Nec Euismod In Company</td>
                        <td><span class="pie">6,9</span></td>
                        <td>40%</td>
                        <td>Jul 16, 2013</td>
                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Project <small>This is example of project</small></td>
                        <td>Patrick Smith</td>
                        <td>0800 051213</td>
                        <td>Inceptos Hymenaeos Ltd</td>
                        <td><span class="pie">0.52/1.561</span></td>
                        <td>20%</td>
                        <td>Jul 14, 2013</td>
                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Gamma project</td>
                        <td>Anna Jordan</td>
                        <td>(016977) 0648</td>
                        <td>Tellus Ltd</td>
                        <td><span class="pie">4,9</span></td>
                        <td>18%</td>
                        <td>Jul 22, 2013</td>
                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                    </tr>
                    </tbody>
                </table>-->
           <!-- </div>

        </div>
        </div>
        </div>

        </div>-->


        </div>


       
        </div>
    
   

   
<?php echo '
<script type="text/javascript">
function showHtsc(str) 
{
  //  alert(str);
if (str=="")
  {
  document.getElementById("txtHint").value="";
  return;
  }
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	var x;
	//if(xmlhttp.responseText.indexOf("|$|")!=-1)
        if(xmlhttp.responseText)
	   {
            // alert(xmlhttp.responseText);  
  
	x=xmlhttp.responseText;
	document.getElementById("htsc").innerHTML=x;

  //      var name_of_site_index =  document.getElementById("site_name").selectedIndex;
   //     var  name_of_site=   document.getElementById("site_name").options;
     //   showGroup(name_of_site[name_of_site_index].text);
	   }
	 else 
	   {
	   document.getElementById("htsc").innerHTML="<option value=\'0\'>Please select Site</option>";
        
	   }  
       
    }
  }

xmlhttp.open("GET","select_htsc_ajax.php?q="+str,true);
xmlhttp.send();


}
</script>
    <script>
        $(document).ready(function() {
					

            var d1 = [[1262304000000, 6], [1264982400000, 3057], [1267401600000, 20434], [1270080000000, 31982], [1272672000000, 26602], [1275350400000, 27826], [1277942400000, 24302], [1280620800000, 24237], [1283299200000, 21004], [1285891200000, 12144], [1288569600000, 10577], [1291161600000, 10295]];
            var d2 = [[1262304000000, 5], [1264982400000, 200], [1267401600000, 1605], [1270080000000, 6129], [1272672000000, 11643], [1275350400000, 19055], [1277942400000, 30062], [1280620800000, 39197], [1283299200000, 37000], [1285891200000, 27000], [1288569600000, 21000], [1291161600000, 17000]];

            var data1 = [
                { label: "Data 1", data: d1, color: \'#17a084\'},
                { label: "Data 2", data: d2, color: \'#127e68\' }
            ];
            $.plot($("#flot-chart1"), data1, {
                xaxis: {
                    tickDecimals: 0
                },
                series: {
                    lines: {
                        show: true,
                        fill: true,
                        fillColor: {
                            colors: [{
                                opacity: 1
                            }, {
                                opacity: 1
                            }]
                        },
                    },
                    points: {
                        width: 0.1,
                        show: false
                    },
                },
                grid: {
                    show: false,
                    borderWidth: 0
                },
                legend: {
                    show: false,
                }
            });

            var lineData = {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [
                    {
                        label: "Example dataset",
                        fillColor: "rgba(220,220,220,0.5)",
                        strokeColor: "rgba(220,220,220,1)",
                        pointColor: "rgba(220,220,220,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(220,220,220,1)",
                        data: [65, 59, 40, 51, 36, 25, 40]
                    },
                    {
                        label: "Example dataset",
                        fillColor: "rgba(26,179,148,0.5)",
                        strokeColor: "rgba(26,179,148,0.7)",
                        pointColor: "rgba(26,179,148,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(26,179,148,1)",
                        data: [48, 48, 60, 39, 56, 37, 30]
                    }
                ]
            };

            var lineOptions = {
                scaleShowGridLines: true,
                scaleGridLineColor: "rgba(0,0,0,.05)",
                scaleGridLineWidth: 1,
                bezierCurve: true,
                bezierCurveTension: 0.4,
                pointDot: true,

                pointDotRadius: 4,
                pointDotStrokeWidth: 1,
                pointHitDetectionRadius: 20,
                datasetStroke: true,
                datasetStrokeWidth: 2,
                datasetFill: true,
                responsive: true,
            };


            var ctx = document.getElementById("lineChart").getContext("2d");
            var myNewChart = new Chart(ctx).Line(lineData, lineOptions);

        });
    </script>
			
			<script type="text/javascript" src="dhtmlxMessage/codebase/dhtmlxcalendar.js" ></script>
			<script type="text/javascript" src="./codebase/dhtmlxcalendar.js"></script>
			<script type="text/javascript" src="./codebase/dhtmlxcommon.js"></script>
			<script src="jquery/jquery.ui.datepicker.js"></script>
			<link rel="stylesheet" type="text/css" href="css/datepickier_main.css">
			<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" />
			<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
			<link rel="stylesheet" href="./codebase/dhtmlxcalendar.css" type="text/css">
			<link rel="stylesheet" href="./codebase/dhtmlxcalendar_dhx_skyblue.css" type="text/css"> 
			<link rel="stylesheet" href="./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css">
			<link rel="stylesheet" type="text/css" href="css/datepicker.css">
<script>

function datetime()
{
var selectedDateTime = document.getElementById("datetime").value;
var splitarray = new Array(); 
splitarray= selectedDateTime.split(" "); 
document.write(splitarray[0]+"<br/>"+splitarray[1]);
}
</script>
			<script>
var myCalendar;
function doOnLoad() {
   // var date;date=new Date();
   
    myCalendar = new dhtmlXCalendarObject(["from_date"]);
	myCalendar = new dhtmlXCalendarObject(["to_date"]);
      var ev = document.getElementById(\'from_date\').value;
      
   var myEvent = myCalendar.attachEvent("onClick", function (){
    var elem = document.getElementById("htsc_no");
    var fields=["from_date","to_date","htsc_no","site_name","region"]; 
				for(i=0;i<fields.length;i++)
				{
				
				current_iteration = document.getElementById(fields[i]).value; 
				document.getElementById(fields[i]).style.borderColor=""; 

						if(current_iteration=="") 
						{			
						document.getElementById(fields[i]).focus();
						document.getElementById(fields[i]).style.borderColor="red";	
			       
									return false;
						}	
				}				
   document.getElementById("turbineList").submit(); 
      });
    }
	
	function getval(data)
{  
			var	xl_data=document.getElementById("mach_id").value;
			
			//alert(xl_data);
			var window_var=window.open(\'site_xls.php?site=\'+xl_data,\'popUpWindow\',\'height=150,width=300,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no,status=yes,url=no\')

}

	</script>
	<script>
	function getgraph(data)
{ 
			var	xl_data=document.getElementById("mach_id").value;
			
			//alert(xl_data);
			window.open("./graphDetails.php");

}
	</script>


	'; ?>

