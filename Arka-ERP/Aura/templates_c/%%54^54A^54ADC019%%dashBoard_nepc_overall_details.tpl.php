<?php /* Smarty version 2.6.25, created on 2017-03-07 16:56:20
         compiled from dashBoard_nepc_overall_details.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'dashBoard_nepc_overall_details.tpl', 39, false),)), $this); ?>
   </div>
     <?php echo '
   <style type="text/css">
.style1 {font-size: 13px}
</style>
'; ?>

<meta http-equiv="refresh" content="120">   
<body onLoad="doOnLoad();">         
<div class="wrapper wrapper-content animated fadeInRight">
 <?php $_from = $this->_tpl_vars['ListName']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListSite']):
?>
 <div>
<table style="width:60%; font-size:14px; margin-bottom:10px;">
<tr>
<td>
<strong>Site Name: </strong> <?php echo $this->_tpl_vars['ListSite']['site_name']; ?>
	 </td>					   

 <td>
<strong> Region: </strong><?php echo $this->_tpl_vars['ListSite']['region']; ?>
 </td>
 
 <td>
<strong> HTSC No: </strong> <?php echo $this->_tpl_vars['ListSite']['turbine_htsc_no']; ?>
 </td>
 
 <td>
<strong> Location:</strong> <?php echo $this->_tpl_vars['ListSite']['location_no']; ?>
	 </td>
 

</tr>
</table>
</div>
 <?php endforeach; endif; unset($_from); ?>

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
                     <div class="ibox-content" style="height:150PX">
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
                    <div class="ibox-content" style="height:150PX">
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
                    <div class="ibox-content" style="height:150PX">
                       <h2 class="no-margins"><?php if ($this->_tpl_vars['AnnualTotal2']['0']['totalValue'] == ''): ?> 0 <?php else: ?><?php echo $this->_tpl_vars['AnnualTotal2']['0']['totalValue']; ?>
<?php endif; ?></h2>
                        <div class="stat-percent font-bold text-success">KWh<i class="fa fa-bolt"></i></div><hr/>
						
						<h2 class="no-margins"><?php if ($this->_tpl_vars['AnnualTotalHours']['0']['Hours'] == ''): ?> 0 <?php else: ?><?php echo $this->_tpl_vars['AnnualTotalHours']['0']['Hours']; ?>
<?php endif; ?></h2>
                        <div class="stat-percent font-bold text-success">hrs<i class="fa fa-bolt"></i></div>
                        
                    </div>
                </div>
            </div>
			
            <div class="col-md-2">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-primary pull-right">Signal Strength</span>
                        <!--<h5><?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y') : smarty_modifier_date_format($_tmp, '%Y')); ?>
</h5>-->
                    </div>
                    <div class="ibox-content" style="height:150PX">
                       <?php $_from = $this->_tpl_vars['SignalList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value']):
?> 
                     <?php if (( $this->_tpl_vars['value']['SIGNAL_STRENGTH'] >= 0 && $this->_tpl_vars['value']['SIGNAL_STRENGTH'] <= 9 || $this->_tpl_vars['value']['SIGNAL_STRENGTH'] == '99' )): ?>
					 <div class="stat-percent font-bold text-success"><img src="./Signals/white_square.png" alt=""></div>
                        <?php elseif (( $this->_tpl_vars['value']['SIGNAL_STRENGTH'] >= 10 && $this->_tpl_vars['value']['SIGNAL_STRENGTH'] <= 14 )): ?>
						 <div class="stat-percent font-bold text-success"><img src="./Signals/red_square.png" alt=""></div>
						  <?php elseif (( $this->_tpl_vars['value']['SIGNAL_STRENGTH'] >= 15 && $this->_tpl_vars['value']['SIGNAL_STRENGTH'] <= 19 )): ?>
						 <div class="stat-percent font-bold text-success"><img src="./Signals/orange_square.png" alt=""></div>
						  <?php elseif (( $this->_tpl_vars['value']['SIGNAL_STRENGTH'] >= 20 && $this->_tpl_vars['value']['SIGNAL_STRENGTH'] <= 24 )): ?>
						 <div class="stat-percent font-bold text-success"><img src="./Signals/yellow_square.png" alt=""></div>
						  <?php elseif (( $this->_tpl_vars['value']['SIGNAL_STRENGTH'] >= 25 && $this->_tpl_vars['value']['SIGNAL_STRENGTH'] <= 28 )): ?>
						 <div class="stat-percent font-bold text-success"><img src="./Signals/blue_square.png" alt=""></div>
						  <?php elseif (( $this->_tpl_vars['value']['SIGNAL_STRENGTH'] >= 29 && $this->_tpl_vars['value']['SIGNAL_STRENGTH'] <= 31 )): ?>
						 <div class="stat-percent font-bold text-success"><img src="./Signals/green_square.png" alt=""></div>
						 <?php elseif (( $this->_tpl_vars['value']['SIGNAL_STRENGTH'] == '-1' && $this->_tpl_vars['value']['SIGNAL_STRENGTH'] == '00' )): ?>
						 <div class="stat-percent font-bold text-success"></div>
						 <?php endif; ?>
						 <?php endforeach; endif; unset($_from); ?>
                    </div>
                </div>
            </div>
            <!--<div class="col-md-4">
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
             </table>	
			
                           
			     	<iframe  style="border:none;"  src="./dashBoardAlarmLog.php?id=1001" ></iframe>
			  

                    </div>
                </div>
            </div>
        </div>-->
</div>
                    </div>
					<div class="col-lg-12">
                     <div class="panel blank-panel">

                          <div class="panel-options">
							 <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#tab-1" style="font-size:12px;">Overview </a></li>
									<li class=""><a data-toggle="tab" href="#tab-9" style="font-size:12px;">Grid </a></li>
									<li class=""><a data-toggle="tab" href="#tab-2" style="font-size:12px;">Last 16 Errors </a></li>
									<li class=""><a data-toggle="tab" href="#tab-3" style="font-size:12px;">Error Times </a></li>
									<li class=""><a data-toggle="tab" href="#tab-4" style="font-size:12px;">Daily Gen Reports</a></li>
									<li class=""><a data-toggle="tab" href="#tab-5" style="font-size:12px;">Power Curve</a></li>
									<li class=""><a data-toggle="tab" href="#tab-6" style="font-size:12px;">Average WS</a></li>
									<li class=""><a data-toggle="tab" href="#tab-7" style="font-size:12px;">Display</a></li>
									<li class=""><a data-toggle="tab" href="#tab-8" style="font-size:12px;">Network Signal </a></li>
									
                                    
		
						     </ul>
                           <!-- </div>-->
                        </div>

                        <div class="panel-body">
						

                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane active">
									<iframe height="490px" width="98%" id="tab-1"  src="./nepc_overview.php?id=<?php echo $this->_supers['get']['this']; ?>
" style="border:1px;"></iframe>
                                </div>
                           
						        <div id="tab-9" class="tab-pane">
									<iframe height="490px" width="98%" id="tab-9"  src="./nepc_grid.php?id=<?php echo $this->_supers['get']['this']; ?>
" style="border:1px;"></iframe>
                                </div>
								
								<div id="tab-2" class="tab-pane">
									<iframe height="700px" width="98%" src="./last_16_errors.php?id=<?php echo $this->_supers['get']['this']; ?>
"  style="border:1px;"></iframe>
                                </div>

								<div id="tab-3" class="tab-pane">
									<iframe height="580px" width="98%" src="./nepc_error_no_of_times.php?id=<?php echo $this->_supers['get']['this']; ?>
" style="border:1px;"></iframe>
                                </div>
							

                                <div id="tab-4" class="tab-pane">
                        			<iframe  height="580px" width="98%" src="./production_report_nepc.php?id=<?php echo $this->_supers['get']['this']; ?>
" style="border:1px;"></iframe>
                                </div>
								
								<div id="tab-5" class="tab-pane">
                        			<iframe  height="820px" width="98%" src="./nepc_power_curve.php?id=<?php echo $this->_supers['get']['this']; ?>
" style="border:1px;"></iframe>
                                </div>
								<div id="tab-6" class="tab-pane">
                        			<iframe  height="820px" width="98%" src="./nepc_avgws.php?id=<?php echo $this->_supers['get']['this']; ?>
" style="border:1px;"></iframe>
                                </div>
								<div id="tab-7" class="tab-pane">
                        			<iframe  height="820px" width="98%" src="./nepc_display.php?id=<?php echo $this->_supers['get']['this']; ?>
" style="border:1px;"></iframe>
                                </div>
								
								<div id="tab-8" class="tab-pane">
                        			<iframe  height="820px" width="98%" src="./nepc_signal.php?id=<?php echo $this->_supers['get']['this']; ?>
" style="border:1px;"></iframe>
                                </div>
				
                            </div>

                        </div>


                    </div>
                </div>

                
            </div>


            
           
        </div>
