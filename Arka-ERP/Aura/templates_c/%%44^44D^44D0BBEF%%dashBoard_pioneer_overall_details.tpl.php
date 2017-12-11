<?php /* Smarty version 2.6.25, created on 2016-05-07 12:50:35
         compiled from dashBoard_pioneer_overall_details.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'dashBoard_pioneer_overall_details.tpl', 29, false),)), $this); ?>
   </div>
<meta http-equiv="" content="30">   
<body onLoad="doOnLoad();">         
<div class="wrapper wrapper-content animated fadeInRight">
<?php echo '

<script>
// calendar
$("#postpaid").click(function(){
					
					document.getElementById(\'det\').style.display=\'inherit\';
				});
				$("#back1").click(function(){
					
					 $("#Bill_Details").hide();
				});
				
		 });
</script>
'; ?>


<div class="row">
                <div class="col-lg-12">
				<div class="panel blank-panel">
 <div class="col-md-2">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-primary pull-right">Today</span><br/>
                       <!-- <h5><?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y') : smarty_modifier_date_format($_tmp, '%Y')); ?>
</h5>-->
                    </div>
                    <div class="ibox-content" style="height:150PX">
					      <h2 class="no-margins"><?php if ($this->_tpl_vars['CurDateTotal2'] == ''): ?> 0 <?php else: ?> <?php echo $this->_tpl_vars['CurDateTotal2']; ?>
 <?php endif; ?></h2>
                          <div class="stat-percent font-bold text-success" >KWh<i class="fa fa-bolt"></i></div><hr/>
						  
                          <h2 class="no-margins"><?php if ($this->_tpl_vars['CurDateTotalHours2'] == ''): ?> 0 <?php else: ?> <?php echo $this->_tpl_vars['CurDateTotalHours2']; ?>
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
                     <div class="ibox-content" style="height:150PX">
                      <h2 class="no-margins"><?php if ($this->_tpl_vars['CurMonthTotal2'] == ''): ?> 0 <?php else: ?><?php echo $this->_tpl_vars['CurMonthTotal2']; ?>
<?php endif; ?></h2>
                         <div class="stat-percent font-bold text-success">KWh<i class="fa fa-bolt"></i></div><hr/>
						<h2 class="no-margins"><?php if ($this->_tpl_vars['CurMonthTotalHours2'] == ''): ?> 0 <?php else: ?><?php echo $this->_tpl_vars['CurMonthTotalHours2']; ?>
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
                    <div class="ibox-content" style="height:150PX">
                       <h2 class="no-margins"><?php if ($this->_tpl_vars['LastMonthTotal2'] == ''): ?> 0 <?php else: ?><?php echo $this->_tpl_vars['LastMonthTotal2']; ?>
<?php endif; ?></h2>
                        <div class="stat-percent font-bold text-success">KWh<i class="fa fa-bolt"></i></div><hr/>
						
						<h2 class="no-margins"><?php if ($this->_tpl_vars['LastMonthTotalHours2'] == ''): ?> 0 <?php else: ?><?php echo $this->_tpl_vars['LastMonthTotalHours2']; ?>
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
                    <div class="ibox-content" style="height:150PX">
                       <h2 class="no-margins"><?php if ($this->_tpl_vars['AnnualTotal2'] == ''): ?> 0 <?php else: ?><?php echo $this->_tpl_vars['AnnualTotal2']; ?>
<?php endif; ?></h2>
                        <div class="stat-percent font-bold text-success">KWh<i class="fa fa-bolt"></i></div><hr/>
						
						<h2 class="no-margins"><?php if ($this->_tpl_vars['AnnualTotalHours2'] == ''): ?> 0 <?php else: ?><?php echo $this->_tpl_vars['AnnualTotalHours2']; ?>
<?php endif; ?></h2>
                        <div class="stat-percent font-bold text-success">hrs<i class="fa fa-bolt"></i></div>
                        
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title" style="width:346PX">
                        <h5 align="center">Alarm Log </h5>
                        <div class="ibox-tools">
                            <span class="label label-primary">Updated <?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
</span>
                        </div>
                    </div>
                    <div class="ibox-content no-padding" style="height:150PX;width:346PX" >
					<div class="col-sm-8">
				<!--<table table width="333" class="sample" border="0" align="center">
                  <thead>
                    <tr>
					    <th>Sl No</th>
					   <!-- <th>Sl.No</th>
						<th>Date & Time</th>
						<th>Error Id</th>
						<th>Description</th>
						
                    </tr>
                 </thead>
                 <tbody>
				<?php $_from = $this->_tpl_vars['AlarmList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListAlm']):
?>
					<tr id="i++">
						<td><?php echo $this->_tpl_vars['i']; ?>
</td>
						<td><?php echo $this->_tpl_vars['ListAlm']['M_TIMESTAMP']; ?>
</td>
						<td><?php echo $this->_tpl_vars['Listdas']['ERROR_ID']; ?>
</td>
						<td><?php echo $this->_tpl_vars['Listdas']['DESCRIPTION']; ?>
</td>
					</tr>
                <?php endforeach; endif; unset($_from); ?>
                </tbody>
             </table>	-->
			
                           
			     	<iframe  style="border:none;"  src="./dashBoardAlarmLog.php?id=1001" ></iframe>
			  

                    </div>
                </div>
            </div>
        </div>
</div>
                    </div>
					<div class="col-lg-12">
                     <div class="panel blank-panel">

                          <div class="panel-options">
							 <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#tab-1">Overview &amp; Grid </a></li>
                                	<!--<li class=""><a data-toggle="tab" href="#tab-2">Grid</a></li>-->
									<li class=""><a data-toggle="tab" href="#tab-2">Last 16 Errors </a></li>
									<!--<li class=""><a data-toggle="tab" href="#tab-4">Temperature Actual</a></li>
									<li class=""><a data-toggle="tab" href="#tab-5">Temperature Maximum</a></li>-->
									<!--<li class=""><a data-toggle="tab" href="#tab-3">Production Active </a></li>-->
									<li class=""><a data-toggle="tab" href="#tab-3">Error Times </a></li>
									<!--<li class=""><a data-toggle="tab" href="#tab-7">Production Active Month</a></li>
									<li class=""><a data-toggle="tab" href="#tab-8">Production Active Trip</a></li>		-->
									<!--<li class=""><a data-toggle="tab" href="#tab-4">Production Reactive </a></li>-->
								<!--	<li class=""><a data-toggle="tab" href="#tab-10">Production Reactive Month</a></li>
									<li class=""><a data-toggle="tab" href="#tab-11">Production Reactive Trip</a></li>	-->
								<!--	<li class=""><a data-toggle="tab" href="#tab-5">Hours </a></li>	-->
									<!--<li class=""><a data-toggle="tab" href="#tab-13">Hours Month</a></li>			
									<li class=""><a data-toggle="tab" href="#tab-14">Hours Trip</a></li>-->
							        <!--<li class=""><a data-toggle="tab" href="#tab-6">Data Log</a></li>-->
									<!--<li class=""><a data-toggle="tab" href="#tab-7">Date to Date</a></li>-->
									<li class=""><a data-toggle="tab" href="#tab-8">Power Curve</a></li>
									<li class=""><a data-toggle="tab" href="#tab-9">Average WS</a></li>
									<li class=""><a data-toggle="tab" href="#tab-14">Alarm Log</a></li>
								<!--	<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						            <?php if ($this->_tpl_vars['roles']['role_name'] == 'EVENT LOG'): ?>	
									<li class=""><a data-toggle="tab" href="#tab-15">Event Log</a></li>
									<?php endif; ?>
					                <?php endforeach; endif; unset($_from); ?>-->
									<!--	<li class=""><a data-toggle="tab" href="#tab-12">Display</a></li>-->
									<!--<li class=""><a data-toggle="tab" href="#tab-10">Production Chart</a></li>-->
									<!--<li class=""><a data-toggle="tab" href="#tab-11">Production Report</a></li>-->
									<!--<li class=""><a data-toggle="tab" href="#tab-12">Run Hours Chart</a></li>-->
									<!--<li class=""><a data-toggle="tab" href="#tab-13">Hours Report</a></li>-->
									<li class=""><a data-toggle="tab" href="#tab-12">Display</a></li>
									<!--<li class=""><a data-toggle="tab" href="#tab-13">UPS Status</a></li>-->
                                    
		
						     </ul>
                           <!-- </div>-->
                        </div>

                        <div class="panel-body">
						

                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane active">
									<iframe height="490px" width="98%" id="tab-1"  src="./pioneer_overview.php?id=<?php echo $this->_supers['get']['this']; ?>
" style="border:1px;"></iframe>
                                </div>
                               <!-- <div id="tab-2" class="tab-pane">
                        			<iframe  height="230px" width="98%"  id="tab-2" src="./grid.php?id=<?php echo $this->_supers['get']['this']; ?>
" style="border:1px;"></iframe>
                                </div>-->
								
								<div id="tab-2" class="tab-pane">
									<iframe height="700px" width="98%" src="./last_16_errors.php?id=<?php echo $this->_supers['get']['this']; ?>
"  style="border:1px;"></iframe>
                                </div>

                               <!-- <div id="tab-4" class="tab-pane">
                        			<iframe  height="250px" width="98%"  src="./temperature_actual.php?id=<?php echo $this->_supers['get']['this']; ?>
"  style="border:1px;"></iframe>
                                </div>
								 <div id="tab-5" class="tab-pane">
                        			<iframe  height="250px" width="98%"  src="./temperature_maximum.php?id=<?php echo $this->_supers['get']['this']; ?>
"  style="border:1px;"></iframe>
                                </div>-->
								
								<div id="tab-3" class="tab-pane">
									<iframe height="580px" width="98%" src="./pioneer_error_no_of_times.php?id=<?php echo $this->_supers['get']['this']; ?>
" style="border:1px;"></iframe>
                                </div>
							<!--	<div id="tab-3" class="tab-pane">
									<iframe height="580px" width="98%" src="./production_active.php?id=<?php echo $this->_supers['get']['this']; ?>
" style="border:1px;"></iframe>
                                </div>-->
 
                               <!-- <div id="tab-7" class="tab-pane">
                        			<iframe  height="170px" width="98%" src="./production_active_month.php?id=<?php echo $this->_supers['get']['this']; ?>
" style="border:1px;"></iframe>
                                </div>
								
								<div id="tab-8" class="tab-pane">
									<iframe height="170px" width="98%" src="./production_active_trip.php?id=<?php echo $this->_supers['get']['this']; ?>
" style="border:1px;"></iframe>
                                </div>-->

                                <div id="tab-4" class="tab-pane">
                        			<iframe  height="580px" width="98%" src="./production_reactive.php?id=<?php echo $this->_supers['get']['this']; ?>
" style="border:1px;"></iframe>
                                </div>
								 <!--<div id="tab-10" class="tab-pane">
                        			<iframe  height="170px" width="98%" src="./production_reactive_month.php?id=<?php echo $this->_supers['get']['this']; ?>
" style="border:1px;"></iframe>
                                </div>
								      <div id="tab-11" class="tab-pane">
                        			<iframe  height="170px" width="98%" src="./production_reactive_trip.php?id=<?php echo $this->_supers['get']['this']; ?>
" style="border:1px;"></iframe>
                                </div>-->
								
								      <div id="tab-5" class="tab-pane">
                        			<iframe  height="650px" width="98%" src="./hours.php?id=<?php echo $this->_supers['get']['this']; ?>
" style="border:1px;"></iframe>
                                </div>
								
								     <!-- <div id="tab-13" class="tab-pane">
                        			<iframe  height="190px" width="98%" src="./hours_month.php?id=<?php echo $this->_supers['get']['this']; ?>
" style="border:1px;"></iframe>
                                </div>
								
								      <div id="tab-14" class="tab-pane">
                        			<iframe  height="190px" width="98%" src="./hours_trip.php?id=<?php echo $this->_supers['get']['this']; ?>
" style="border:1px;"></iframe>
                                </div>-->
							
								   <div id="tab-6" class="tab-pane">
                        			<iframe  height="820px" width="98%" src="./vestasdatalog.php?id=<?php echo $this->_supers['get']['this']; ?>
" style="border:1px;"></iframe>
                                </div>
								
									 <div id="tab-7" class="tab-pane">
                        			<iframe  height="820px" width="98%" src="./periodic.php?id=<?php echo $this->_supers['get']['this']; ?>
" style="border:1px;"></iframe>
                                </div>
								
								<div id="tab-8" class="tab-pane">
                        			<iframe  height="820px" width="98%" src="./power_curve.php?id=<?php echo $this->_supers['get']['this']; ?>
" style="border:1px;"></iframe>
                                </div>
								<div id="tab-9" class="tab-pane">
                        			<iframe  height="820px" width="98%" src="./avgws.php?id=<?php echo $this->_supers['get']['this']; ?>
" style="border:1px;"></iframe>
                                </div>
							
								<div id="tab-10" class="tab-pane">
                        			<iframe  height="820px" width="98%" src="./production_chart.php?id=<?php echo $this->_supers['get']['this']; ?>
" style="border:1px;"></iframe>
                                </div>
								<div id="tab-11" class="tab-pane">
                        			<iframe  height="820px" width="98%" src="./production_report.php?id=<?php echo $this->_supers['get']['this']; ?>
" style="border:1px;"></iframe>
                                </div>
								<!--<div id="tab-12" class="tab-pane">
                        			<iframe  height="820px" width="98%" src="./hours_chart.php?id=<?php echo $this->_supers['get']['this']; ?>
" style="border:1px;"></iframe>
                                </div>-->
								<div id="tab-13" class="tab-pane">
                        			<iframe  height="820px" width="98%" src="./hours_report.php?id=<?php echo $this->_supers['get']['this']; ?>
" style="border:1px;"></iframe>
                                </div>
								<div id="tab-14" class="tab-pane">
                        			<iframe  height="820px" width="98%" src="./vestasAlarmLog.php?id=<?php echo $this->_supers['get']['this']; ?>
" style="border:1px;"></iframe>
                                </div>
								<div id="tab-15" class="tab-pane">
                        			<iframe  height="820px" width="98%" src="./vestas_log.php?id=<?php echo $this->_supers['get']['this']; ?>
" style="border:1px;"></iframe>
                                </div>
								<!--<div id="tab-12" class="tab-pane">
                        			<iframe  height="820px" width="98%" src="./display.php?id=<?php echo $this->_supers['get']['this']; ?>
" style="border:1px;"></iframe>
                                </div>
							-->
						<div id="tab-12" class="tab-pane">
                        			<iframe  height="820px" width="98%" src="./pioneer_display.php?id=<?php echo $this->_supers['get']['this']; ?>
" style="border:1px;"></iframe>
                                </div>
				
									<!--	<div id="tab-13" class="tab-pane">
                        			<iframe  height="820px" width="98%" src="./ups_status.php?id=<?php echo $this->_supers['get']['this']; ?>
" style="border:1px;"></iframe>
                                </div>-->
                            </div>

                        </div>


                    </div>
                </div>

                
            </div>


            
           
        </div>
