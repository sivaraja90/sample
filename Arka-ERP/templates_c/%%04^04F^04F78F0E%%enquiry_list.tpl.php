<?php /* Smarty version 2.6.25, created on 2017-11-30 16:27:25
         compiled from enquiry_list.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "left.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

 <body class="hold-transition skin-blue sidebar-mini">
  <div class="content-wrapper">
	<section class="content-header">
          <h4>  <?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>	
			<?php if ($this->_tpl_vars['roles']['role_name'] == 'List Enquiry'): ?> 	&ensp;	
            <small><a href="enquiry_list.php"><i class="fa fa-list"> <label class="thin" style="font-family:Arial, Helvetica, sans-serif">
			List Enquiries</label></i></a></small>&ensp;&ensp;&ensp;
			<?php endif; ?>
			<?php if ($this->_tpl_vars['roles']['role_name'] == 'Add Enquiry'): ?>
            <small><a href="enquiry_reg.php"><i class="fa fa-user-plus"> <label class="thin" style="font-family:Arial, Helvetica, sans-serif">
			Create Enquiry</label></i></a></small>
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
          </h4>
         <!-- <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
          </ol>-->
        </section>

        <!-- Main content -->
          <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header">
                  <center><h3 class="box-title">Enquiry Lists</h3></center>
                </div><!-- /.box-header -->
                <?php if ($this->_tpl_vars['SuccessMessage'] != ""): ?>
			<div class="isa_success">
			<i class="fa fa-check"></i>
			<?php echo $this->_tpl_vars['SuccessMessage']; ?>
		 
			</div>
		 <?php endif; ?>
		  <?php if ($this->_tpl_vars['ErrorMessage'] != ""): ?>
			<div class="isa_error">
			<i class="fa fa-times"></i>
			<?php echo $this->_tpl_vars['ErrorMessage']; ?>
		 
			</div>
		 <?php endif; ?>
		 
		 <div class="box-body">
				<form name="enquiry_list" id="enquiry_list" method="post">
		 <div class="col-md-6">
		 <div class="form-group">
                      <label class="col-sm-4 thick">List Enquiries</label>
                  <div class="col-sm-5">
					<select id="enquiry_types" name="enquiry_types" class="form-control" tabindex="1" onChange="GetEnquiry(this.value)">
					<?php if ($this->_supers['post']['enquiry_types'] == 'my_enquiries'): ?>
						<option value="0" style="background-color:#0099FF">--Select--</option>
						<option value="my_enquiries" selected="selected" style="background-color:#CCCCCC">My Enquiries</option>
						<option value="all_my_enquiries" style="background-color:#CCCCCC"> All My Enquiries </option>
						<option value="assign_to_me" style="background-color:#CCCCCC"> Assign to Me </option>
						<option value="assign_to_others" style="background-color:#CCCCCC"> Assign to Others </option>
					<?php elseif ($this->_supers['post']['enquiry_types'] == 'assign_to_me'): ?>
						<option value="0" style="background-color:#0099FF">--Select--</option>
						<option value="assign_to_me" selected="selected" style="background-color:#CCCCCC"> Assign to Me </option>
						<option value="all_my_enquiries" style="background-color:#CCCCCC"> All My Enquiries </option>	
						<option value="my_enquiries" style="background-color:#CCCCCC">My Enquiries</option>
						<option value="assign_to_others" style="background-color:#CCCCCC"> Assign to Others </option>
						
					<?php elseif ($this->_supers['post']['enquiry_types'] == 'assign_to_others'): ?>
						<option value="0" style="background-color:#0099FF">--Select--</option>
						<option value="assign_to_others" selected="selected" style="background-color:#CCCCCC"> Assign to Others </option>
						<option value="all_my_enquiries" style="background-color:#CCCCCC"> All My Enquiries </option>	
						<option value="my_enquiries" style="background-color:#CCCCCC">My Enquiries</option>
						<option value="assign_to_me" style="background-color:#CCCCCC"> Assign to Me </option>
						
				<?php elseif ($this->_supers['post']['enquiry_types'] == 'all_my_enquiries'): ?>	
						<option value="0" style="background-color:#0099FF">--Select--</option>
						<option value="all_my_enquiries" selected="selected" style="background-color:#CCCCCC"> All My Enquiries </option>
						<option value="assign_to_others"  style="background-color:#CCCCCC"> Assign to Others </option>
						<option value="my_enquiries" style="background-color:#CCCCCC">My Enquiries</option>
						<option value="assign_to_me" style="background-color:#CCCCCC"> Assign to Me </option>
						
					<?php else: ?>
						<option value="0"  selected="selected" style="background-color:#0099FF">--Select--</option>
						<option value="assign_to_others" style="background-color:#CCCCCC"> Assign to Others </option>	
						<option value="my_enquiries" style="background-color:#CCCCCC">My Enquiries</option>
						<option value="assign_to_me" style="background-color:#CCCCCC"> Assign to Me </option>
						<option value="all_my_enquiries" style="background-color:#CCCCCC"> All My Enquiries </option>	
					<?php endif; ?>
									
						</select>
                      </div>
					  </div>
					  
                    </div> 
					 <div class="col-md-6">
					 <div class="form-group">
                      <label class="col-sm-4 thick">Enquiry Status </label>
						<div class="col-sm-5">
						<select id="enquiry_status1" name="enquiry_status1" class="form-control" tabindex="" onChange="GetEnquiryStatus(this.value)">
						<?php if ($this->_supers['post']['enquiry_status1'] == 'Open'): ?>
						<option value="0">--Select--</option>
						<option value="Open" selected="selected">Open</option>
						<option value="Won">Won</option>
						<option value="Loss">Loss</option>
						<?php elseif ($this->_supers['post']['enquiry_status1'] == 'Won'): ?>
						<option value="0">--Select--</option>
						<option value="Open" >Open</option>
						<option value="Won" selected="selected">Won</option>
						<option value="Loss">Loss</option>
						
						<?php elseif ($this->_supers['post']['enquiry_status1'] == 'Loss'): ?>
						<option value="0">--Select--</option>
						
						<option value="Open" >Open</option>
						<option value="Won" >Won</option>
						<option value="Loss" selected="selected">Loss</option>
						
						<?php else: ?>
						<option value="0" selected="selected">--Select--</option>
						<option value="Open" >Open</option>
						<option value="Won" >Won</option>
						<option value="Loss" >Loss</option>
						<?php endif; ?>
						</select>
                      </div>
					  
					<!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
                    </div>
					</div>
					<br> <br> <br> 
					 <table width="100%" border="0" cellspacing=1 cellpadding=2 style="margin-top:-1.5%">
					<tr>
				    	<td colspan="6" align="right"><?php echo $this->_tpl_vars['LinkPage']; ?>
<?php echo $this->_tpl_vars['PerPageNavigation']; ?>
</td>
				    </tr>
					<td colspan="2" align="right"><img src="images/yellow.png" alt="lapsed"/>&nbsp;&nbsp;Lapsed&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/progress.gif" alt="Open"/>&nbsp;&nbsp;Open&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/status_icon_ok.png" alt="Won"/>&nbsp;&nbsp;Won&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/red.png" alt="Loss"/>&nbsp;&nbsp;Loss</td>
					</table>
					
					

<br>

					<table id="example1" class="table table-striped ">
					
                    <thead align="left">
                      <tr>
					  <th>Status</th>
					   <th>Sl No</th>
                        <th>Enq Id</th>
                        <th>Company Name</th>
                        <th>Enquiry Status</th>
						<th>Enquiry Type</th>
						 <th>Last Touch Point</th>
						  <th>Assign To</th>
						<!-- <th>Snooze Time</th>-->
						 <?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						<?php if ($this->_tpl_vars['roles']['role_name'] == 'Edit Enquiry'): ?>
						 <th>Action</th>
						 <?php endif; ?>
						 <?php endforeach; endif; unset($_from); ?>
                      </tr>
                    </thead>
                    <tbody>
					<?php $_from = $this->_tpl_vars['ListView']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['View']):
?>
                        <tr <?php echo $this->_tpl_vars['i']++; ?>
>
						
						<?php if ($this->_tpl_vars['View']['Time'] < '00:00:00' && $this->_tpl_vars['View']['enquiry_status'] == 'Open'): ?>
						<td align="left"><img src="images/yellow.png" alt="lapsed"/></td>

						<?php elseif ($this->_tpl_vars['View']['enquiry_status'] == 'Open'): ?>
						<td align="left"><img src="images/progress.gif" alt="Open"/></td>
						<?php elseif ($this->_tpl_vars['View']['enquiry_status'] == 'Loss'): ?>
						<td align="left"><img src="images/red.png" alt="Loss"/></td>
						<?php elseif ($this->_tpl_vars['View']['enquiry_status'] == 'Won'): ?>
						<td align="left"><img src="images/status_icon_ok.png" alt="Won"/></td>
						
						
						<?php endif; ?>
						
                        <td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['enquiry_id']; ?>
')"><?php echo $this->_tpl_vars['i']; ?>
</a></td>
                        <td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['enquiry_id']; ?>
')"><?php echo $this->_tpl_vars['View']['enquiry_id']; ?>
</a></td>
                        <td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['enquiry_id']; ?>
')"><?php echo $this->_tpl_vars['View']['company_name']; ?>
</a></td>
                        <td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['enquiry_id']; ?>
')"><?php if ($this->_tpl_vars['View']['enquiry_status'] == 'Open' && $this->_tpl_vars['View']['open_status'] != ""): ?><?php echo $this->_tpl_vars['View']['enquiry_status']; ?>
-<?php echo $this->_tpl_vars['View']['open_status']; ?>
<?php elseif ($this->_tpl_vars['View']['enquiry_status'] == 'Open' && $this->_tpl_vars['View']['open_status'] == ""): ?><?php echo $this->_tpl_vars['View']['enquiry_status']; ?>
<?php elseif ($this->_tpl_vars['View']['enquiry_status'] != 'Open'): ?><?php echo $this->_tpl_vars['View']['enquiry_status']; ?>
<?php endif; ?></a></td>
						
						 <td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['enquiry_id']; ?>
')"><?php echo $this->_tpl_vars['View']['enquiry_type']; ?>
</a></td>
                        <td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['enquiry_id']; ?>
')"><?php echo $this->_tpl_vars['View']['snooze_date']; ?>
</a></td>
						<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['enquiry_id']; ?>
')"><?php echo $this->_tpl_vars['View']['assign_to']; ?>
</a></td>
						<?php if ($this->_tpl_vars['View']['enquiry_status'] == 'Open'): ?>
						<td align="center">
						 <?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						<?php if ($this->_tpl_vars['roles']['role_name'] == 'Edit Enquiry'): ?>
						&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:editCats('<?php echo $this->_tpl_vars['View']['enquiry_id']; ?>
')"><i class="fa fa-edit"></i></a><?php endif; ?>
						<?php if ($this->_tpl_vars['roles']['role_name'] == 'Delete Enquiry'): ?>
						&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:deleteCats('<?php echo $this->_tpl_vars['View']['enquiry_id']; ?>
')"><i class="fa fa-trash"></i></a>
						<?php endif; ?>
						<?php endforeach; endif; unset($_from); ?>
						</td> 
						<?php elseif ($this->_tpl_vars['View']['enquiry_status'] != 'Open'): ?>
						<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['enquiry_id']; ?>
')"><i class="fa fa-lock" aria-hidden="true"></i></a>
</td>
						<?php endif; ?>
                      </tr>
					  <?php endforeach; endif; unset($_from); ?>
                 </tbody>
                  </table>
				 </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!--.content-wrapper -->
            <!-- Control Sidebar -->
      <!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
<?php echo '

    <script>
      $(function () {
        $("#example1").DataTable();
        $(\'#example2\').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
  function deleteCats(CatIdent){
  if(confirm("Are you sure to Delete this Content?")){
  FormName		= document.enquiry_list;
  FormName.action= "enquiry_list.php?enquiry_id="+CatIdent;
  FormName.submit();
 }
 }
function editCats(CatIdent) {

   var cid = btoa(CatIdent);
   FormName		= document.enquiry_list;
   FormName.action =\'enquiry_edit.php?enquiry_id=\'+cid;          
   FormName.submit();
}

function GetEnquiry(x)
{
  document.getElementById("enquiry_status1").selectedIndex ="0";
  FormName		= document.enquiry_list;
  FormName.action =\'enquiry_list.php?searchvalue=\'+x;          
  FormName.submit();
}
function GetEnquiryStatus(y)
{
  var x = document.getElementById("enquiry_types").value;
  FormName		= document.enquiry_list;
  FormName.action ="enquiry_list.php?searchvalue1="+y+"&enq_type="+x;          
  FormName.submit();
}
 
  function viewCats(CatIdent) {
  var enq_id = btoa(CatIdent);   
  FormName		= document.enquiry_list;
  FormName.action =\'enquiry_detail_view.php?enquiry_id=\'+enq_id;          
  FormName.submit();

 }
    </script>
	<style>
	.isa_success
{
	color:#4F8A10;
	background-color:#DFF2BF;
}
.isa_error
{
	color:#D8000C;
	background-color:#FFBABA;
}
.isa_success i,.isa_error i
{
    margin:10px 22px;
	font-size:2em;
	vertical-align:middle;

}
label,td.thick
{
font-weight:bold;
}
label.thin
{
font-weight:normal;
}
	</style>
	'; ?>

  </body>