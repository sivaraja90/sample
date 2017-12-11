<?php /* Smarty version 2.6.25, created on 2017-02-17 16:15:20
         compiled from Admin_dashBoard.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'Admin_dashBoard.tpl', 17, false),)), $this); ?>
	<meta http-equiv="refresh" content="30">
</div>
    <div id="wrapper">
    <div class="wrapper wrapper-content">
        <div class="row">
		
            
             
           
			 <div class="col-md-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
					<?php $_from = $this->_tpl_vars['CusIdsDetail']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Cus']):
?>
				<input type="hidden" value="<?php echo $this->_tpl_vars['Cus']['customer_id']; ?>
" >
                        <h5><a href="./dashBoard4.php?customer_id=<?php echo $this->_tpl_vars['Cus']['customer_id']; ?>
">Gamesa</a></h5>
                        <div class="ibox-tools">
                            <span class="label label-primary">Updated <?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')); ?>
</span>
                        </div>
						<?php endforeach; endif; unset($_from); ?>
                    </div>
                    <div class="ibox-content no-padding" style="height:180PX">
				
					<div class="col-sm-12" align="center">
					<input type="hidden" value="<?php echo $this->_supers['session']['USER_GROUP']; ?>
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
	
                    </div>
                </div>
            </div>
			
			<div class="col-md-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
					 <?php $_from = $this->_tpl_vars['CusIdsDetail2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Cus2']):
?>
				<input type="hidden" value="<?php echo $this->_tpl_vars['Cus2']['customer_id']; ?>
" >
                        <h5><a href="./dashBoard4.php?customer_id=<?php echo $this->_tpl_vars['Cus2']['customer_id']; ?>
">Leap Green Energy</a></h5>
                        <div class="ibox-tools">
                            <span class="label label-primary">Updated <?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')); ?>
</span>
                        </div>
						<?php endforeach; endif; unset($_from); ?>
                    </div>
                    <div class="ibox-content no-padding" style="height:180PX">
				
					<div class="col-sm-12" align="center">
					<input type="hidden" value="<?php echo $this->_supers['session']['USER_GROUP']; ?>
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
		<tr><td><img alt="image" src="images/green_16.gif"></td><td>Running</td><td><?php echo $this->_tpl_vars['RunList1']['0']['runcount']; ?>
</td></tr>
        <tr><td><img alt="image" src="images/navy-wind-turbine-16.gif"></td><td>No Comm</td><td><?php echo $this->_tpl_vars['No_CommList1']['0']['no_comm_count']; ?>
</td></tr>
		<tr><td><img alt="image" src="images/grid2.png"></td><td>Grid Drop</td><td><?php echo $this->_tpl_vars['GridList1']['0']['gridcount']; ?>
</td></tr>
        <tr><td><img alt="image" src="images/red-wind-turbine-16.gif"></td><td>Other Errors</td><td><?php echo $this->_tpl_vars['OtherList1']['0']['othercount']; ?>
</td></tr>
			 </tr>
			      </tbody>
			      </table><br />
						</div>
	
                    </div>
                </div>
            </div>
             
				
           
				
            <div class="col-md-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
					<?php $_from = $this->_tpl_vars['CusIdsDetail3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Cus3']):
?>
				<input type="hidden" value="<?php echo $this->_tpl_vars['Cus3']['customer_id']; ?>
" >
                        <h5><a href="./dashBoard4.php?customer_id=<?php echo $this->_tpl_vars['Cus3']['customer_id']; ?>
">RRPL</a></h5>
                        <div class="ibox-tools">
                            <span class="label label-primary">Updated <?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')); ?>
</span>
                        </div>
						<?php endforeach; endif; unset($_from); ?>
                    </div>
                    <div class="ibox-content no-padding" style="height:180PX">
				
					<div class="col-sm-12" align="center">
					<input type="hidden" value="<?php echo $this->_supers['session']['USER_GROUP']; ?>
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
		<tr><td><img alt="image" src="images/green_16.gif"></td><td>Running</td><td><?php echo $this->_tpl_vars['RunList2']['0']['runcount']; ?>
</td></tr>
        <tr><td><img alt="image" src="images/navy-wind-turbine-16.gif"></td><td>No Comm</td><td><?php echo $this->_tpl_vars['No_CommList2']['0']['no_comm_count']; ?>
</td></tr>
		<tr><td><img alt="image" src="images/grid2.png"></td><td>Grid Drop</td><td><?php echo $this->_tpl_vars['GridList2']['0']['gridcount']; ?>
</td></tr>
        <tr><td><img alt="image" src="images/red-wind-turbine-16.gif"></td><td>Other Errors</td><td><?php echo $this->_tpl_vars['OtherList2']['0']['othercount']; ?>
</td></tr>
		 <tr><td><img alt="image" src="images/wind-turbine-blue1.png"></td><td>Comm Failure</td><td><?php echo $this->_tpl_vars['CommList2']['0']['commFail']; ?>
</td></tr>
			 </tr>
			      </tbody>
			      </table><br />
						</div>
	
                    </div>
                </div>
            </div>
        </div>
		
<?php echo '
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" />
<script>
function datetime()
{
var selectedDateTime = document.getElementById("datetime").value;
var splitarray = new Array(); 
splitarray= selectedDateTime.split(" "); 
document.write(splitarray[0]+"<br/>"+splitarray[1]);
}
</script>
	'; ?>

