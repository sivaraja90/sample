<?php /* Smarty version 2.6.25, created on 2016-04-05 19:10:52
         compiled from vestas_overall_details.tpl */ ?>
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

                          <div class="panel-options">
							 <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#tab-1">Overview &amp; Grid </a></li>
                                	<!--<li class=""><a data-toggle="tab" href="#tab-2">Grid</a></li>-->
									<li class=""><a data-toggle="tab" href="#tab-2">Temperature </a></li>
									<!--<li class=""><a data-toggle="tab" href="#tab-4">Temperature Actual</a></li>
									<li class=""><a data-toggle="tab" href="#tab-5">Temperature Maximum</a></li>-->
									<li class=""><a data-toggle="tab" href="#tab-3">Production Active </a></li>
									<!--<li class=""><a data-toggle="tab" href="#tab-7">Production Active Month</a></li>
									<li class=""><a data-toggle="tab" href="#tab-8">Production Active Trip</a></li>		-->
									<li class=""><a data-toggle="tab" href="#tab-4">Production Reactive </a></li>
								<!--	<li class=""><a data-toggle="tab" href="#tab-10">Production Reactive Month</a></li>
									<li class=""><a data-toggle="tab" href="#tab-11">Production Reactive Trip</a></li>	-->
									<li class=""><a data-toggle="tab" href="#tab-5">Hours </a></li>	
									<!--<li class=""><a data-toggle="tab" href="#tab-13">Hours Month</a></li>			
									<li class=""><a data-toggle="tab" href="#tab-14">Hours Trip</a></li>-->
							        <!--<li class=""><a data-toggle="tab" href="#tab-6">Data Log</a></li>-->
									<!--<li class=""><a data-toggle="tab" href="#tab-7">Date to Date</a></li>-->
									<li class=""><a data-toggle="tab" href="#tab-8">Power Curve</a></li>
									<li class=""><a data-toggle="tab" href="#tab-9">Average WS</a></li>
									<li class=""><a data-toggle="tab" href="#tab-14">Alarm Log</a></li>
									<!--<li class=""><a data-toggle="tab" href="#tab-15">Log</a></li>-->
									<!--<li class=""><a data-toggle="tab" href="#tab-10">Production Chart</a></li>-->
									<!--<li class=""><a data-toggle="tab" href="#tab-11">Production Report</a></li>-->
									<!--<li class=""><a data-toggle="tab" href="#tab-12">Run Hours Chart</a></li>-->
									<!--<li class=""><a data-toggle="tab" href="#tab-13">Hours Report</a></li>-->
									<!--<li class=""><a data-toggle="tab" href="#tab-12">Display</a></li>-->
									<!--<li class=""><a data-toggle="tab" href="#tab-13">UPS Status</a></li>-->
                                    
		
						     </ul>
                           <!-- </div>-->
                        </div>

                        <div class="panel-body">
						

                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane active">
									<iframe height="490px" width="98%" id="tab-1"  src="./vestasoverview_grid.php?id=<?php echo $this->_supers['get']['this']; ?>
" style="border:1px;"></iframe>
                                </div>
                               <!-- <div id="tab-2" class="tab-pane">
                        			<iframe  height="230px" width="98%"  id="tab-2" src="./grid.php?id=<?php echo $this->_supers['get']['this']; ?>
" style="border:1px;"></iframe>
                                </div>-->
								
								<div id="tab-2" class="tab-pane">
									<iframe height="700px" width="98%" src="./temperature.php?id=<?php echo $this->_supers['get']['this']; ?>
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
									<iframe height="580px" width="98%" src="./production_active.php?id=<?php echo $this->_supers['get']['this']; ?>
" style="border:1px;"></iframe>
                                </div>
 
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
								<div id="tab-12" class="tab-pane">
                        			<iframe  height="820px" width="98%" src="./display.php?id=<?php echo $this->_supers['get']['this']; ?>
" style="border:1px;"></iframe>
                                </div>
								<div id="tab-13" class="tab-pane">
                        			<iframe  height="820px" width="98%" src="./ups_status.php?id=<?php echo $this->_supers['get']['this']; ?>
" style="border:1px;"></iframe>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                
            </div>


            
           
        </div>
