	<meta http-equiv="refresh" content="30">
</div>
    <div id="wrapper">
    <div class="wrapper wrapper-content">
        <div class="row">
		
            <div class="col-md-2">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-primary pull-right">Today</span><br/>
                      <!--  <h5>{$smarty.now|date_format:'%Y'}</h5>-->
                    </div>
                   <div class="ibox-content" style="height:180PX">
					      <h2 class="no-margins">{if $CurDateTotal eq ''} 0 {else} {$CurDateTotal} {/if}</h2>
                          <div class="stat-percent font-bold text-success" >KWh<i class="fa fa-bolt"></i></div><hr/>
						  
                          <h2 class="no-margins">{if $CurDateTotalHours eq ''} 0 {else} {$CurDateTotalHours} {/if}</h2>
                          <div class="stat-percent font-bold text-success" >hrs<i class="fa fa-bolt"></i></div>
                     </div>



                    </div>
                </div>
            
           
			 <div class="col-md-2">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-primary pull-right">Current Month</span><br/>
                     <!--   <h5>{$smarty.now|date_format:'%Y'}</h5>-->
                    </div>
                    <div class="ibox-content" style="height:180PX">
                      <h2 class="no-margins">{if $CurMonthTotal eq ''} 0 {else}{$CurMonthTotal}{/if}</h2>
                         <div class="stat-percent font-bold text-success">KWh<i class="fa fa-bolt"></i></div><hr/>
						<h2 class="no-margins">{if $CurMonthTotalHours eq ''} 0 {else}{$CurMonthTotalHours}{/if}</h2>
                         <div class="stat-percent font-bold text-success">hrs<i class="fa fa-bolt"></i></div>
                        
                    </div>


                    </div>
                </div>
             <div class="col-md-2">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-info pull-right">Last Month</span>
                        <!--<h5>{$smarty.now|date_format:'%Y'}</h5>-->
                    </div>
                     <div class="ibox-content" style="height:180PX">
                       <h2 class="no-margins">{if $LastMonthTotal eq ''} 0 {else}{$LastMonthTotal}{/if}</h2>
                        <div class="stat-percent font-bold text-success">KWh<i class="fa fa-bolt"></i></div><hr/>
						
						<h2 class="no-margins">{if $LastMonthTotalHours eq ''} 0 {else}{$LastMonthTotalHours}{/if}</h2>
                        <div class="stat-percent font-bold text-success">hrs<i class="fa fa-bolt"></i></div>
                       
                    </div>
                </div>
            </div>
				<div class="col-md-2">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-success pull-right">Annual</span>
                        <h5>{$smarty.now|date_format:'%Y'}</h5>
                    </div>
                   <div class="ibox-content" style="height:180PX">
                       <h2 class="no-margins">{if $AnnualTotal2 eq ''} 0 {else}{$AnnualTotal2}{/if}</h2>
                        <div class="stat-percent font-bold text-success">KWh<i class="fa fa-bolt"></i></div><hr/>
						
						<h2 class="no-margins">{if $AnnualTotalHours eq ''} 0 {else}{$AnnualTotalHours}{/if}</h2>
                        <div class="stat-percent font-bold text-success">hrs<i class="fa fa-bolt"></i></div>
                        
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Turbine Details</h5>
                        <div class="ibox-tools">
                            <span class="label label-primary">Updated {$smarty.now|date_format:'%Y-%m-%d %H:%M:%S'}</span>
                        </div>
                    </div>
                    <div class="ibox-content no-padding" style="height:180PX">
					<div class="col-sm-8"><br/>
					<strong>&nbsp;<img alt="image" src="images/green_16.gif" style="padding-bottom:2PX">&nbsp;Running:</strong> {$RunList.0.runcount}</br></br>
				<strong>&nbsp;<img alt="image" src="images/navy-wind-turbine-16.gif" style="padding-bottom:2PX">&nbsp;No Comm:</strong> {$No_CommList.0.no_comm_count}</br></br>
					<strong>&nbsp;<img alt="image" src="images/grid2.png" style="padding-bottom:2PX">&nbsp;Grid Drop :</strong> {$GridList.0.gridcount}<br></br>
                    <strong>&nbsp;<img alt="image" src="images/red-wind-turbine-16.gif" style="padding-bottom:2PX">&nbsp;Other Errors :</strong> {$OtherList.0.othercount}<br></br>
						<!--<strong>&nbsp;<img alt="image" src="images/total2-wind.jpg">&nbsp;Total Turbines :</strong>{$TotalList.0.totalcount} </br></br>-->
						</div>
                    </div>
                </div>
            </div>
        </div>
		
		
		<div id="tab-1" class="tab-pane">
                                    
								<div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5  style="padding-left:40%;">List of Turbines</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                          
                        </div>
                    </div>
                    <div class="ibox-content">

                  <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
					    <th>Status Icon</th>
					   <!-- <th>Sl.No</th>-->
						<th>Status</th>
						<th>Site Name</th>
						<th>Make</th>
						{foreach from=$RList item=roles}
						{if $roles.role_name eq 'Arka'}
							<th>Customer Name</th>
							{/if}
							{/foreach}
						<th>HTSC-Loc. No.</th>
						<th>Wind Speed</th>
						<th>KW</th>
                        <th>GRPM</th>
						<th>RRPM</th>
						<th>Pitch Angle</th>
						<!--<th>Today</th>
						<th>Month</th>
						<th>Yearly</th>-->
						<th>Date & Time</th>
						<!--{foreach from=$RList item=roles}
						   {if $roles.role_name eq 'Edit Turbine' || $roles.role_name eq 'Delete Turbine'}-->
						      <!--<th>Action</th>	-->
						   <!--{/if}
				        {/foreach}	-->
                       
                    </tr>
                    </thead>
                   <tbody>
	{foreach from=$VestasList item=Vestas}
			      <tr class="gradeX" id="{$i++}">
									  {if $Vestas.STATUS==0}
						<td> <a href="./dashBoard_vestas_overall_details.php?this={$Vestas.MACHINE_ID}">
						 <img alt="image" class="img-circle m-t-xs img-responsive" src="images/grid2.png">
						</a> </td>
				{elseif $Vestas.STATUS==225}
				
						<td ><a href="./dashBoard_vestas_overall_details.php?this={$Vestas.MACHINE_ID}">
							{if $Vestas.VDATE eq $smarty.now|date_format:'%Y-%m-%d' }
			 					<img alt="image" class="img-circle m-t-xs img-responsive" src="images/green_16.gif">
							{else} 	
								<img alt="image" class="img-circle m-t-xs img-responsive" src="images/navy-wind-turbine-16.gif">	
							{/if}</a></td> 
				
				{elseif $Vestas.STATUS!=225 && $Vestas.STATUS!=0 }
			
							<td><a href="./dashBoard_vestas_overall_details.php?this={$Vestas.MACHINE_ID}">
							{if $Vestas.VDATE eq $smarty.now|date_format:'%Y-%m-%d' }
			 					<img alt="image" class="img-circle m-t-xs img-responsive" src="images/red_wind_turbine_16.gif">
							{else} 	
								<img alt="image" class="img-circle m-t-xs img-responsive" src="images/navy-wind-turbine-16.gif">	
							{/if}</a></td>
				{/if}
			<!--<td>{$i} </td>-->
			<td><a href="./dashBoard_vestas_overall_details.php?this={$Vestas.MACHINE_ID}">
				{if $Vestas.STATUS==0} 
						Grid Drop
				{elseif $Vestas.STATUS==225}
				<!--('+1 hour'|date_format:'%Y-%m-%d %H:%M:%S')-->
					{if $Vestas.VDATE eq $smarty.now|date_format:'%Y-%m-%d'}
						RUN
					{else}
					 	No Comm.
					{/if}	
				{elseif $Vestas.STATUS!=225}
					{if $Vestas.VDATE eq $smarty.now|date_format:'%Y-%m-%d' }
						Error No: {$Vestas.DESCRIPTION}
						{php} 
							require_once('Connections/ARKA.php');
							mysql_select_db($database_arka, $arka);
							$query_rs1 = "select DESCRIPTION from vestas_error_details where ERROR_ID='".$Vestas.STATUS."'";
							$rs1 = mysql_query($query_rs1, $arka) or die(mysql_error());
							$row_rs1 = mysql_fetch_assoc($rs1);
							echo $desc =$row_rs1["DESCRIPTION"];
							echo $row_rs1["DESCRIPTION"];
						{/php}
					{else}
					 	No Comm.
					{/if}
				{/if}		 
					</a>	
			</td>
			<td><a href="./dashBoard_vestas_overall_details.php?this={$Vestas.MACHINE_ID}">{$Vestas.site_name}</td>
			
			<td><a href="./dashBoard_vestas_overall_details.php?this={$Vestas.MACHINE_ID}">{$Vestas.make}</a></td> 
			{foreach from=$RList item=roles}
						{if $roles.role_name eq 'Arka'}<td><a href="./dashBoard_vestas_overall_details.php?this={$Vestas.MACHINE_ID}">{$Vestas.customer_name}</a></td> {/if}
							{/foreach}
            <td><a href="./dashBoard_vestas_overall_details.php?this={$Vestas.MACHINE_ID}">{$Vestas.turbine_htsc_no} - {$Vestas.location_no}</a></td>                
			<td><a href="./dashBoard_vestas_overall_details.php?this={$Vestas.MACHINE_ID}">{$Vestas.WS}</a></td>
			<td><a href="./dashBoard_vestas_overall_details.php?this={$Vestas.MACHINE_ID}">{$Vestas.KW} </a></td>
			<td><a href="./dashBoard_vestas_overall_details.php?this={$Vestas.MACHINE_ID}">{$Vestas.GRPM}</a></td>
			<td><a href="./dashBoard_vestas_overall_details.php?this={$Vestas.MACHINE_ID}">{$Vestas.RRPM}</a></td>
            <td><a href="./dashBoard_vestas_overall_details.php?this={$Vestas.MACHINE_ID}">{$Vestas.PITCH_ANGLE}</a></td>
			<td ><a href="./dashBoard_vestas_overall_details.php?this={$Vestas.MACHINE_ID}">{$Vestas.TZ}</a></td>
   
       <!--
	      <td class="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="./turbineEdit.php?turbine_id={$ListDet.turbine_id}"><i class="fa fa-edit"></i></a></td>
	
   
	      <td class="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="fa fa-trash" onClick=" deleteCats('{$ListDet.turbine_id}');"></a></td>-->
	  
               
              <!--   <td class="center"> &nbsp;&nbsp;&nbsp;&nbsp;<a href="./turbineStatus.php"><img src=" ./img/wind_turbine.png" alt="Panel Entry"></a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="./turbineStatus.php"><img src="./img/eb_gen_entry.jpg" alt="EB Entry"></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="./turbineStatus.php"><img src="./img/maintenance_icon.png" alt="Material Entry"></a></td>-->
		 </tr> 	</a>{/foreach}
		 
		 		{foreach from=$NepcList item=Nepc}
			
                  <tr class="gradeX" id="{$i++}">
					 {if $Nepc.VDATE eq $smarty.now|date_format:'%Y-%m-%d'}
				<td > {if $Nepc.STATUS eq '49'}<a href="./dashBoard_nepc_overall_details.php?this={$Nepc.MACHINE_ID}">
			 <img alt="image" class="img-circle m-t-xs img-responsive" src="images/green_16.gif"></a>
			 {elseif $Nepc.STATUS neq '49' && $Nepc.STATUS neq '19'  } 
				 <img alt="image" class="img-circle m-t-xs img-responsive" src="images/red-wind-turbine-16.gif">
				{/if}	 </td> 
				{elseif $Nepc.STATUS eq '19'}
				<td> <a href="./dashBoard_nepc_overall_details.php?this={$Nepc.MACHINE_ID}">
				 <img alt="image" class="img-circle m-t-xs img-responsive" src="images/grid2.png">
				</a> </td>
				{elseif $Nepc.VDATE neq $smarty.now|date_format:'%Y-%m-%d' && $Nepc.STATUS neq 0}
				<td><a href="./dashBoard_nepc_overall_details.php?this={$Nepc.MACHINE_ID}">
				<img alt="image" class="img-circle m-t-xs img-responsive" src="images/navy-wind-turbine-16.gif"></a>
				</td>{/if}
			<!--<td>{$i} </td>-->
			<td><a href="./dashBoard_nepc_overall_details.php?this={$Nepc.MACHINE_ID}">{if $Nepc.STATUS==49}
			   Running
			 {elseif $Nepc.STATUS==19} 
				Grid Drop
			{elseif $Nepc.VDATE neq $smarty.now|date_format:'%Y-%m-%d'}
			 No Comm.
			{else}
			 Other Errors
				{/if}</a>	</td>		
			<td><a href="./dashBoard_nepc_overall_details.php?this={$Nepc.MACHINE_ID}">{$Nepc.site_name}</td>
			
			<td><a href="./dashBoard_nepc_overall_details.php?this={$Nepc.MACHINE_ID}">{$Nepc.make}</a></td> 
			{foreach from=$RList item=roles}
						{if $roles.role_name eq 'Arka'}<td><a href="./dashBoard_vestas_overall_details.php?this={$Nepc.MACHINE_ID}">{$Nepc.customer_name}</a></td> {/if}
							{/foreach}
            <td><a href="./dashBoard_nepc_overall_details.php?this={$Nepc.MACHINE_ID}">{$Nepc.turbine_htsc_no} - {$Nepc.location_no}</a></td>                
			<td><a href="./dashBoard_nepc_overall_details.php?this={$Nepc.MACHINE_ID}">{$Nepc.WS}</a></td>
			<td><a href="./dashBoard_nepc_overall_details.php?this={$Nepc.MACHINE_ID}">{$Nepc.KW} </a></td>
			<td><a href="./dashBoard_nepc_overall_details.php?this={$Nepc.MACHINE_ID}">{$Nepc.GRPM}</a></td>
			<td><a href="./dashBoard_nepc_overall_details.php?this={$Nepc.MACHINE_ID}">{$Nepc.RRPM}</a></td>
            <td><a href="./dashBoard_nepc_overall_details.php?this={$Nepc.MACHINE_ID}">{$Nepc.PITCH_ANGLE}</a></td>
			
	       <!-- <td ><a href="./vestasOverAllDetails.php?this={$Nepc.MACHINE_ID}">{$Todayval[$key1]}</a></td>
			<td ><a href="./vestasOverAllDetails.php?this={$Nepc.MACHINE_ID}">{if $CurMonthTotal eq ''} 0 {else}{$CurMonthTotal}{/if}</a></td>
	        <td ><a href="./vestasOverAllDetails.php?this={$Nepc.MACHINE_ID}">{if $AnnualTotal eq ''} 0 {else}{$AnnualTotal}{/if}</a></td>-->
			<td ><a href="./dashBoard_nepc_overall_details.php?this={$Nepc.MACHINE_ID}">{$Nepc.TZ}</a></td>
   
       <!--
	      <td class="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="./turbineEdit.php?turbine_id={$ListDet.turbine_id}"><i class="fa fa-edit"></i></a></td>
	
   
	      <td class="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="fa fa-trash" onClick=" deleteCats('{$ListDet.turbine_id}');"></a></td>-->
	  
               
              <!--   <td class="center"> &nbsp;&nbsp;&nbsp;&nbsp;<a href="./turbineStatus.php"><img src=" ./img/wind_turbine.png" alt="Panel Entry"></a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="./turbineStatus.php"><img src="./img/eb_gen_entry.jpg" alt="EB Entry"></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="./turbineStatus.php"><img src="./img/maintenance_icon.png" alt="Material Entry"></a></td>-->
		 </tr> 	</a>{/foreach}
		 
		 {foreach from=$TTGList item=TTG}
			
                  <tr class="gradeX" id="{$i++}">
					 {if $Nepc.VDATE eq $smarty.now|date_format:'%Y-%m-%d'}
				<td > {if $Nepc.STATUS eq '49'}<a href="./dashBoard_nepc_overall_details.php?this={$TTG.MACHINE_ID}">
			 <img alt="image" class="img-circle m-t-xs img-responsive" src="images/green_16.gif"></a>
			 {elseif $TTG.STATUS neq '49' && $TTG.STATUS neq '19'  } 
				 <img alt="image" class="img-circle m-t-xs img-responsive" src="images/red-wind-turbine-16.gif">
				{/if}	 </td> 
				{elseif $TTG.STATUS eq '19'}
				<td> <a href="./dashBoard_TTG_overall_details.php?this={$TTG.MACHINE_ID}">
				 <img alt="image" class="img-circle m-t-xs img-responsive" src="images/grid2.png">
				</a> </td>
				{elseif $TTG.VDATE neq $smarty.now|date_format:'%Y-%m-%d' && $TTG.STATUS neq 0}
				<td><a href="./dashBoard_TTG_overall_details.php?this={$TTG.MACHINE_ID}">
				<img alt="image" class="img-circle m-t-xs img-responsive" src="images/navy-wind-turbine-16.gif"></a>
				</td>{/if}
			<!--<td>{$i} </td>-->
			<td><a href="./dashBoard_TTG_overall_details.php?this={$TTG.MACHINE_ID}">{if $TTG.STATUS==49}
			   Running
			 {elseif $TTG.STATUS==19} 
				Grid Drop
			{elseif $TTG.VDATE neq $smarty.now|date_format:'%Y-%m-%d'}
			 No Comm.
			{else}
			 Other Errors
				{/if}</a>	</td>		
			<td><a href="./dashBoard_TTG_overall_details.php?this={$TTG.MACHINE_ID}">{$TTG.site_name}</td>
			
			<td><a href="./dashBoard_TTG_overall_details.php?this={$TTG.MACHINE_ID}">{$TTG.make}</a></td> 
			{foreach from=$RList item=roles}
						{if $roles.role_name eq 'Arka'}<td><a href="./dashBoard_vestas_overall_details.php?this={$TTG.MACHINE_ID}">{$TTG.customer_name}</a></td> {/if}
							{/foreach}
            <td><a href="./dashBoard_TTG_overall_details.php?this={$TTG.MACHINE_ID}">{$TTG.turbine_htsc_no} - {$TTG.location_no}</a></td>                
			<td><a href="./dashBoard_TTG_overall_details.php?this={$TTG.MACHINE_ID}">{$TTG.WS}</a></td>
			<td><a href="./dashBoard_TTG_overall_details.php?this={$TTG.MACHINE_ID}">{$TTG.KW} </a></td>
			<td><a href="./dashBoard_TTG_overall_details.php?this={$TTG.MACHINE_ID}">{$TTG.GRPM}</a></td>
			<td><a href="./dashBoard_TTG_overall_details.php?this={$TTG.MACHINE_ID}">{$TTG.RRPM}</a></td>
            <td><a href="./dashBoard_TTG_overall_details.php?this={$TTG.MACHINE_ID}">{$TTG.PITCH_ANGLE}</a></td>
			
	       <!-- <td ><a href="./vestasOverAllDetails.php?this={$TTG.MACHINE_ID}">{$Todayval[$key1]}</a></td>
			<td ><a href="./vestasOverAllDetails.php?this={$TTG.MACHINE_ID}">{if $CurMonthTotal eq ''} 0 {else}{$CurMonthTotal}{/if}</a></td>
	        <td ><a href="./vestasOverAllDetails.php?this={$TTG.MACHINE_ID}">{if $AnnualTotal eq ''} 0 {else}{$AnnualTotal}{/if}</a></td>-->
			<td ><a href="./dashBoard_vestas_overall_details.php?this={$TTG.MACHINE_ID}">{$TTG.TZ}</a></td>
   
       <!--
	      <td class="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="./turbineEdit.php?turbine_id={$ListDet.turbine_id}"><i class="fa fa-edit"></i></a></td>
	
   
	      <td class="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="fa fa-trash" onClick=" deleteCats('{$ListDet.turbine_id}');"></a></td>-->
	  
               
              <!--   <td class="center"> &nbsp;&nbsp;&nbsp;&nbsp;<a href="./turbineStatus.php"><img src=" ./img/wind_turbine.png" alt="Panel Entry"></a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="./turbineStatus.php"><img src="./img/eb_gen_entry.jpg" alt="EB Entry"></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="./turbineStatus.php"><img src="./img/maintenance_icon.png" alt="Material Entry"></a></td>-->
		 </tr> 	</a>{/foreach}


 {foreach from=$PioneerList item=Pioneer}
			
                  <tr class="gradeX" id="{$i++}">
					 {if $Pioneer.VDATE eq $smarty.now|date_format:'%Y-%m-%d'}
				<td > {if $Pioneer.STATUS eq '49'}<a href="./dashBoard_Pioneer_overall_details.php?this={$Pioneer.MACHINE_ID}">
			 <img alt="image" class="img-circle m-t-xs img-responsive" src="images/green_16.gif"></a>
			 {elseif $Pioneer.STATUS neq '49' && $Pioneer.STATUS neq '19'  } 
				 <img alt="image" class="img-circle m-t-xs img-responsive" src="images/red-wind-turbine-16.gif">
				{/if}	 </td> 
				{elseif $Pioneer.STATUS eq '19'}
				<td> <a href="./dashBoard_Pioneer_overall_details.php?this={$Pioneer.MACHINE_ID}">
				 <img alt="image" class="img-circle m-t-xs img-responsive" src="images/grid2.png">
				</a> </td>
				{elseif $Pioneer.VDATE neq $smarty.now|date_format:'%Y-%m-%d' && $Pioneer.STATUS neq 0}
				<td><a href="./dashBoard_Pioneer_overall_details.php?this={$Pioneer.MACHINE_ID}">
				<img alt="image" class="img-circle m-t-xs img-responsive" src="images/navy-wind-turbine-16.gif"></a>
				</td>{/if}
			<!--<td>{$i} </td>-->
			<td><a href="./dashBoard_Pioneer_overall_details.php?this={$Pioneer.MACHINE_ID}">{if $Pioneer.STATUS==49}
			   Running
			 {elseif $Pioneer.STATUS==19} 
				Grid Drop
			{elseif $Pioneer.VDATE neq $smarty.now|date_format:'%Y-%m-%d'}
			 No Comm.
			{else}
			 Other Errors
				{/if}</a>	</td>		
			<td><a href="./dashBoard_Pioneer_overall_details.php?this={$Pioneer.MACHINE_ID}">{$Pioneer.site_name}</td>
			
			<td><a href="./dashBoard_Pioneer_overall_details.php?this={$Pioneer.MACHINE_ID}">{$Pioneer.make}</a></td> 
			{foreach from=$RList item=roles}
						{if $roles.role_name eq 'Arka'}<td><a href="./dashBoard_vestas_overall_details.php?this={$Pioneer.MACHINE_ID}">{$Pioneer.customer_name}</a></td> {/if}
							{/foreach}
            <td><a href="./dashBoard_Pioneer_overall_details.php?this={$Pioneer.MACHINE_ID}">{$Pioneer.turbine_htsc_no} - {$Pioneer.location_no}</a></td>                
			<td><a href="./dashBoard_Pioneer_overall_details.php?this={$Pioneer.MACHINE_ID}">{$Pioneer.WS}</a></td>
			<td><a href="./dashBoard_Pioneer_overall_details.php?this={$Pioneer.MACHINE_ID}">{$Pioneer.KW} </a></td>
			<td><a href="./dashBoard_Pioneer_overall_details.php?this={$Pioneer.MACHINE_ID}">{$Pioneer.GRPM}</a></td>
			<td><a href="./dashBoard_Pioneer_overall_details.php?this={$Pioneer.MACHINE_ID}">{$Pioneer.RRPM}</a></td>
            <td><a href="./dashBoard_Pioneer_overall_details.php?this={$Pioneer.MACHINE_ID}">{$Pioneer.PITCH_ANGLE}</a></td>
			
	       <!-- <td ><a href="./vestasOverAllDetails.php?this={$Pioneer.MACHINE_ID}">{$Todayval[$key1]}</a></td>
			<td ><a href="./vestasOverAllDetails.php?this={$Pioneer.MACHINE_ID}">{if $CurMonthTotal eq ''} 0 {else}{$CurMonthTotal}{/if}</a></td>
	        <td ><a href="./vestasOverAllDetails.php?this={$Pioneer.MACHINE_ID}">{if $AnnualTotal eq ''} 0 {else}{$AnnualTotal}{/if}</a></td>-->
			<td ><a href="./dashBoard_vestas_overall_details.php?this={$Pioneer.MACHINE_ID}">{$Pioneer.TZ}</a></td>
   
       <!--
	      <td class="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="./turbineEdit.php?turbine_id={$ListDet.turbine_id}"><i class="fa fa-edit"></i></a></td>
	
   
	      <td class="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="fa fa-trash" onClick=" deleteCats('{$ListDet.turbine_id}');"></a></td>-->
	  
               
              <!--   <td class="center"> &nbsp;&nbsp;&nbsp;&nbsp;<a href="./turbineStatus.php"><img src=" ./img/wind_turbine.png" alt="Panel Entry"></a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="./turbineStatus.php"><img src="./img/eb_gen_entry.jpg" alt="EB Entry"></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="./turbineStatus.php"><img src="./img/maintenance_icon.png" alt="Material Entry"></a></td>-->
		 </tr> 	</a>{/foreach}


<!--{foreach from=$SCADAList2 item=ListSCADA2}
			
                  <tr class="gradeX" id="{$i++}">
					 {if $ListSCADA2.VDATE eq $smarty.now|date_format:'%Y-%m-%d'}
				<td > {if $ListSCADA2.STATUS==225 || $ListSCADA2.STATUS==15 || $ListSCADA2.STATUS==1 }<a href="./dashBoard_nepc_overall_details.php?this={$ListSCADA2.MACHINE_ID}">
			 <img alt="image" class="img-circle m-t-xs img-responsive" src="images/green_16.gif"></a>
			 {elseif $ListSCADA2.STATUS==0} 
				 <img alt="image" class="img-circle m-t-xs img-responsive" src="images/red-wind-turbine-16.gif">
				{/if}	 </td> 
				{elseif $ListSCADA2.VDATE neq $smarty.now|date_format:'%Y-%m-%d' && $ListSCADA2.STATUS eq 0}
				<td> <a href="./dashBoard_nepc_overall_details.php?this={$ListSCADA2.MACHINE_ID}">
				 <img alt="image" class="img-circle m-t-xs img-responsive" src="images/grid2.png">
				</a> </td>
				{elseif $ListSCADA2.VDATE neq $smarty.now|date_format:'%Y-%m-%d' && $ListSCADA2.STATUS neq 0}
				<td><a href="./dashBoard_nepc_overall_details.php?this={$ListSCADA2.MACHINE_ID}">
				<img alt="image" class="img-circle m-t-xs img-responsive" src="images/navy-wind-turbine-16.gif"></a>
				</td>{/if}
			<td>{$i} </td>
			<td><a href="./dashBoard_nepc_overall_details.php?this={$ListSCADA2.MACHINE_ID}">{if $ListSCADA2.STATUS==225 || $ListSCADA2.STATUS==15 || $ListSCADA2.STATUS==1 }
			   Running
			 {elseif $ListSCADA2.STATUS==0} 
				Grid Drop
			{elseif $ListSCADA2.VDATE neq $smarty.now|date_format:'%Y-%m-%d'}
			 No Comm.
			{else}
			 Other Errors
				{/if}</a>	</td>		
			<td><a href="./dashBoard_nepc_overall_details.php?this={$ListSCADA2.MACHINE_ID}">{$ListSCADA2.site_name}</td>
			
			<td><a href="./dashBoard_vestas_overall_details.php?this={$ListSCADA.MACHINE_ID}">{$ListSCADA.make}</a></td> 
			{foreach from=$RList item=roles}
						{if $roles.role_name eq 'Arka'}<td><a href="./dashBoard_vestas_overall_details.php?this={$ListSCADA.MACHINE_ID}">{$ListSCADA.customer_name}</a></td> {/if}
							{/foreach}
            <td><a href="./dashBoard_nepc_overall_details.php?this={$ListSCADA2.MACHINE_ID}">{$ListSCADA2.location_no}</a></td>                
			<td><a href="./dashBoard_nepc_overall_details.php?this={$ListSCADA2.MACHINE_ID}">{$ListSCADA2.WS}</a></td>
			<td><a href="./dashBoard_nepc_overall_details.php?this={$ListSCADA2.MACHINE_ID}">{$ListSCADA2.KW} </a></td>
			<td><a href="./dashBoard_nepc_overall_details.php?this={$ListSCADA2.MACHINE_ID}">{$ListSCADA2.GRPM}</a></td>
			<td><a href="./dashBoard_nepc_overall_details.php?this={$ListSCADA2.MACHINE_ID}">{$ListSCADA2.RRPM}</a></td>
            <td><a href="./dashBoard_nepc_overall_details.php?this={$ListSCADA2.MACHINE_ID}">{$ListSCADA2.PITCH_ANGLE}</a></td>
			
	        <td ><a href="./vestasOverAllDetails.php?this={$ListSCADA2.MACHINE_ID}">{$Todayval[$key1]}</a></td>
			<td ><a href="./vestasOverAllDetails.php?this={$ListSCADA2.MACHINE_ID}">{if $CurMonthTotal eq ''} 0 {else}{$CurMonthTotal}{/if}</a></td>
	        <td ><a href="./vestasOverAllDetails.php?this={$ListSCADA2.MACHINE_ID}">{if $AnnualTotal eq ''} 0 {else}{$AnnualTotal}{/if}</a></td>
			<td ><a href="./dashBoard_nepc_overall_details.php?this={$ListSCADA2.MACHINE_ID}">{$ListSCADA2.TZ}</a></td>
   
       
	      <td class="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="./turbineEdit.php?turbine_id={$ListDet.turbine_id}"><i class="fa fa-edit"></i></a></td>
	
   
	      <td class="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="fa fa-trash" onClick=" deleteCats('{$ListDet.turbine_id}');"></a></td>
	  
               
                 <td class="center"> &nbsp;&nbsp;&nbsp;&nbsp;<a href="./turbineStatus.php"><img src=" ./img/wind_turbine.png" alt="Panel Entry"></a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="./turbineStatus.php"><img src="./img/eb_gen_entry.jpg" alt="EB Entry"></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="./turbineStatus.php"><img src="./img/maintenance_icon.png" alt="Material Entry"></a></td>
		 </tr> 	</a>{/foreach}-->

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
                    <div class="ibox-content" >
                           
			     	<iframe class="prodclass" style="border:none;"  src="./dash_production_chart.php?id={$VestasList.0.MACHINE_ID}" style="width:770PX"></iframe>
			     </div>
                </div>
            </div>
			<!-- <div class="col-md-4">
                <div class="ibox float-e-margins">
				 <div class="ibox-title">
                        <h5>SCADA REPORT</h5>
                        <div class="ibox-tools">
                            <span class="label label-primary">Updated {$smarty.now|date_format:'%Y-%m-%d'}</span>
                        </div>
                    </div>
				<div class="ibox-content no-padding"  style="height:425PX">
                   {foreach from=$SCADAList item=ListSCADA2}
            <div class="col-lg-16">
                {if $ListSCADA2.VDATE eq $smarty.now|date_format:'%Y-%m-%d'}
                <div class="contact-box">
                   <a href="./vestasOverAllDetails.php?this={$ListSCADA2.MACHINE_ID}">
                    <div class="col-sm-4">
                        <div class="text-center">
							 {if $ListSCADA2.STATUS==225 || $ListSCADA2.STATUS==15 || $ListSCADA2.STATUS==1 }
						  <img alt="image" class="img-circle m-t-xs img-responsive" src="images/green.png">
                            <div class="m-t-xs font-bold">Running</div> 
						 {elseif $ListSCADA2.STATUS==0}
                            <img alt="image" class="img-circle m-t-xs img-responsive" src="images/yellow_turbine.png">
                            <div class="m-t-xs font-bold"> Grid Drop</div>
						{else}
							<img alt="image" class="img-circle m-t-xs img-responsive" src="images/red.gif">
                            <div class="m-t-xs font-bold"> Other Errors</div>
							
						{/if}
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <h3><strong>HTSC :{$ListSCADA2.turbine_htsc_no} / LOC: {$ListSCADA2.location_no} </strong></h3>
                        <p><i class="fa fa-map-marker"></i>&nbsp;&nbsp;Site : {$ListSCADA2.site_name}</p>
                        <address>
							 <strong>Wind Speed : </strong>{$ListSCADA2.WS}&nbsp; m/s<br>
                             <strong>Instant Kw : </strong> </abbr> {$ListSCADA2.KW}&nbsp;Kw<br>
                            <strong>Date &amp; Time: </strong>{$ListSCADA2.TZ}<br>
                             
                        </address>
                    </div>
					</a>
					</div>
				{elseif $ListSCADA2.VDATE neq $smarty.now|date_format:'%Y-%m-%d'}
				 <div class="contact-box">
                   <a href="./vestasOverAllDetails.php?this={$ListSCADA2.MACHINE_ID}" >
                    <div class="col-sm-4">
                        <div class="text-center">
							<img alt="image" class="img-circle m-t-xs img-responsive" src="images/navy.gif">
                            <div class="m-t-xs font-bold"> No Comm.</div>
                       </div>
                    </div>
                    <div class="col-sm-8">
                        <h3><strong>HTSC :{$ListSCADA2.turbine_htsc_no} / LOC: {$ListSCADA2.location_no} </strong></h3>
                        <p><i class="fa fa-map-marker"></i>&nbsp;&nbsp;Site : {$ListSCADA2.site_name}</p>
                        <address>
							 <strong>Wind Speed : </strong>{$ListSCADA2.WS}&nbsp; m/s<br>
                             <strong>Instant Kw : </strong> </abbr> {$ListSCADA2.KW}&nbsp;Kw<br>
                            <strong>Date &amp; Time: </strong>{$ListSCADA2.TZ}<br>
                          
                        </address>
						   <hr/>
                    </div>
					</a>
					
					</div>
					{/if}
                    <div class="clearfix"></div>
                       
              
            </div>
			{/foreach}
					
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
		<div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content animated bounceInRight">
                                        
                                        <div class="modal-body">
										<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
										<h2 class="modal-title" align="center">ERROR Details</h2>
                                           <div id="std">            
<!-- SEARCH FORM END -->
{literal}
<script type="text/javascript">
function closeit(val,val2){
	parent.document.forms['ErrorDes'].elements['ERROR_ID'].value=val;
	parent.document.forms['ErrorDes'].elements['DESCRIPTION'].value=val2;
	parent.dhxWins.window("w1").close();
//	parent.dhxWins.window("w1").close();
/*	var supplier_name = document.getElementById("supplier_name");
    var id = supplier_name.options[supplier_name.selectedIndex].value;
	alert('hi');*/
	
}
 $(document).ready(function() {	
 $("#table").click(function(){
					
					 $("#myModal").hide();
				});
 
 
      });
</script>
{/literal}

 <table class="table table-bordered">
    <form name="ErrorDes" method="post" >
    <!--<input type="hidden" name="a" value="search" >-->
					<tr>
				    <td colspan="2" align="right">{$LinkPage}{$PerPageNavigation}</td>
				    </tr>
    <tr><td>
       <table width="100%" border="1PX solid black" cellspacing=0 cellpadding=1 class="table table-bordered"  id="table">
        <tr >
	        <th width="30" align="center">&nbsp;&nbsp;S No.</th>
	        <th width="70" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Error Id</th>
			<th width="30" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Description</th>
	       
        </tr>
		 <!-- <tr>
                <td align="center" bgcolor="#CCFFFF">&nbsp;</td>
                <td align="center" bgcolor="#CCFFFF"><input type="text" id="supplier_name" name="supplier_name" size="45" autocomplete="Off"><input id="search" name="search" value="" size="10" class="btn" type="submit" style="visibility:hidden"></td>
				<td align="center" bgcolor="#CCFFFF"><input type="text" id="supplier_code" name="supplier_code" size="23" autocomplete="Off"><input id="search" name="search" value="" size="10" class="btn" type="submit" style="visibility:hidden"></td>
            </tr>-->
			
        {foreach from=$ErrorList item=ListErr}
            <tr id="data" >          
                <td align="center" title="">
                  <a href="#."  onClick="closeit('{$ListErr.ERROR_ID}','{$ListErr.DESCRIPTION}');">{$i++}</a></td>
                <td align="left"><a  href="#." onClick="closeit('{$ListErr.ERROR_ID}','{$ListErr.DESCRIPTION}');">{$ListErr.ERROR_ID}</a></td>
				<td align="left"><a  href="#." onClick="closeit('{$ListErr.ERROR_ID}','{$ListErr.DESCRIPTION}');">{$ListErr.DESCRIPTION}</a></td>
			
            </tr>
			{foreachelse}
			<tr>
			<td height="20" colspan="11" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
			</tr>
              {/foreach}	

       </table>
	  
    </td></tr>
         
       
    </form>
 </table>
 <center><button type="button" class="btn btn-primary" data-dismiss="modal">Close</button></center>
</div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>


       
        </div>
    
   

   
{literal}
    <script>
        $(document).ready(function() {


            var d1 = [[1262304000000, 6], [1264982400000, 3057], [1267401600000, 20434], [1270080000000, 31982], [1272672000000, 26602], [1275350400000, 27826], [1277942400000, 24302], [1280620800000, 24237], [1283299200000, 21004], [1285891200000, 12144], [1288569600000, 10577], [1291161600000, 10295]];
            var d2 = [[1262304000000, 5], [1264982400000, 200], [1267401600000, 1605], [1270080000000, 6129], [1272672000000, 11643], [1275350400000, 19055], [1277942400000, 30062], [1280620800000, 39197], [1283299200000, 37000], [1285891200000, 27000], [1288569600000, 21000], [1291161600000, 17000]];

            var data1 = [
                { label: "Data 1", data: d1, color: '#17a084'},
                { label: "Data 2", data: d2, color: '#127e68' }
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
	        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" />

	{/literal}

