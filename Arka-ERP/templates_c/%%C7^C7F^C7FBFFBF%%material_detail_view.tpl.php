<?php /* Smarty version 2.6.25, created on 2016-06-30 18:02:30
         compiled from material_detail_view.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "left.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '
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
</style>
	<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/> 
	<link rel=\'stylesheet\' type=\'text/css\' href=\'auto-complete/jquery.auto-complete.css?<?= mktime() ?>\' />
'; ?>

 <body class="hold-transition skin-blue sidebar-mini">
  <div class="content-wrapper">
	<section class="content-header">
          <h4>
            <small><a href="material_list.php"><i class="fa fa-list"> <label style="font-family:Arial, Helvetica, sans-serif">
List Materials</label></i></a></small>&ensp;&ensp;&ensp;
            <small><a href="material_reg.php"><i class="fa fa-user-plus"> <label style="font-family:Arial, Helvetica, sans-serif">
Create Material</label></i></a></small>
          </h4>
          <ul class="breadcrumb">
            <li>Status : Active</li>
          </ul>
        </section>
        <!-- Main content -->
          <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header">
				  <?php $_from = $this->_tpl_vars['ListView']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Edit']):
?>
				 <table width="118%">
				<tr>
				 <td>Created:&nbsp;<?php echo $this->_tpl_vars['Edit']['created_date']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['Edit']['created_time']; ?>
</td>
				 <td><h4 class="box-title">&nbsp;&nbsp;&nbsp;&nbsp;Material Detailed View</h4>
				 <h4><?php echo $this->_tpl_vars['Edit']['company_name']; ?>
</h4></td>
				<td style="margin-left:-1000px;"> Modified:&nbsp;<?php echo $this->_tpl_vars['Date_Stamp']['0']['Date']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['Time_Stamp']['0']['Time']; ?>
</td>
				 </tr>    
				 </table>
				 <?php endforeach; endif; unset($_from); ?>
				<form class="form-horizontal" id="detail_view_material" name="detail_view_material">
				<input type="hidden" name="hdAction" />
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
				  <?php $_from = $this->_tpl_vars['ListViews']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['EditList']):
?>
				   <div class="col-md-6">
                    <div class="form-group">			 
                      <label class="col-sm-4 thick">Materal Code</label>
                      <div class="col-sm-6">
                      <?php echo $this->_tpl_vars['EditList']['material_code']; ?>

                      </div>
                    </div>
					<?php if ($this->_tpl_vars['EditList']['material_make'] != ""): ?>
                    <div class="form-group">
                      <label class="col-sm-4 thick">Make</label>
                      <div class="col-sm-6">
                        <?php echo $this->_tpl_vars['EditList']['material_make']; ?>

                      </div>
                    </div>
					<?php endif; ?>
					  <div class="form-group">			 
                      <label class="col-sm-4 thick">Specification</label>
                      <div class="col-sm-6">
                      <?php echo $this->_tpl_vars['EditList']['specification']; ?>

                      </div>
                    </div>
					<div class="form-group">			 
                      <label class="col-sm-4 thick">Created By</label>
                      <div class="col-sm-6">
                      <?php echo $this->_tpl_vars['EditList']['created_by']; ?>

                      </div>
                    </div>
					</div>
					<div class="col-md-6">
					 <div class="form-group">
                      <label class="col-sm-4 thick">Material Name</label>
                      <div class="col-sm-6">
                         <?php echo $this->_tpl_vars['EditList']['material_name']; ?>

                      </div>
                    </div>
					<?php if ($this->_tpl_vars['EditList']['material_category'] != ""): ?>
					 <div class="form-group">
                      <label class="col-sm-4 thick">Category</label>
                      <div class="col-sm-6">
                         <?php echo $this->_tpl_vars['EditList']['material_category']; ?>

                      </div>
                    </div>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['EditList']['material_type'] != ""): ?>
					<div class="form-group">			 
                      <label class="col-sm-4 thick">Type</label>
                      <div class="col-sm-6">
                      <?php echo $this->_tpl_vars['EditList']['material_type']; ?>

                    </div>
                    </div>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['EditList']['remarks'] != ""): ?>
					<div class="form-group">			 
                      <label class="col-sm-4 thick">Remarks</label>
                      <div class="col-sm-6">
                      <?php echo $this->_tpl_vars['EditList']['remarks']; ?>

                      </div>
                    </div>
					<?php endif; ?>
					</div>
					</div>
					<?php endforeach; endif; unset($_from); ?>   
					</div>
					</form> 
				<div class="clear"></div>
				</div>
              </div>
         </div><!-- /.box-body -->
			</div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
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
</script>
<style>
label.thick
{
	font-weight: bold;
}
</style>
'; ?>

  </body>

 
