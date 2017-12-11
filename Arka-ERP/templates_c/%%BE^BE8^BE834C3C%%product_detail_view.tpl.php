<?php /* Smarty version 2.6.25, created on 2017-03-01 12:54:14
         compiled from product_detail_view.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "left.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '
	<script type="text/javascript" src=\'./dhtmlxMessage/codebase/dhtmlxmessage.js\'></script>
	<script type=\'text/javascript\' src=\'./auto-complete/jquery-1.3.2.js\'></script>
	<script type=\'text/javascript\' src=\'./auto-complete/jquery.metadata.js\'></script>
	<script type=\'text/javascript\' src=\'./auto-complete/jquery.auto-complete.js?<?= mktime() ?>\'></script>
	<script type=\'text/javascript\' src=\'./auto-complete/js.js?<?= mktime() ?>\'></script>
	<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/> 
	<link rel=\'stylesheet\' type=\'text/css\' href=\'auto-complete/jquery.auto-complete.css?<?= mktime() ?>\' />
'; ?>

 <body class="hold-transition skin-blue sidebar-mini">
  <div class="content-wrapper">
	<section class="content-header">
          <h4>
            <small class="active"><a href="product_list.php"><i class="fa fa-list"> <label class="font" style="font-family:Arial, Helvetica, sans-serif">
List Products</label></i></a></small>&ensp;&ensp;&ensp;
            <small><a href="product_reg.php"><i class="fa fa-user-plus"> <label class="font" style="font-family:Arial, Helvetica, sans-serif">
Create Product</label></i></a></small>
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
				<?php $_from = $this->_tpl_vars['ListMas']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['View']):
?>
			    <table width="118%">
				<tr>
				 <td>Created :<?php echo $this->_tpl_vars['View']['created_date']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['View']['created_time']; ?>
</td>
                  <td><h4 class="box-title">&nbsp;&nbsp;&nbsp;&nbsp;Product Detailed View</h4>
				 <h4>&nbsp;</h4></td>
				<td style="margin-left:-1000px;"> Modified :<?php echo $this->_tpl_vars['Date_Stamp']['0']['Date']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['Time_Stamp']['0']['Time']; ?>
</td>
				</tr>
				</table>
				<?php endforeach; endif; unset($_from); ?>
				<form class="form-horizontal" name="product_detail">
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
				   <?php $_from = $this->_tpl_vars['ListMas']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDet']):
?>	
				   <div class="col-md-6">
                    <div class="form-group">			 
                      <label class="col-sm-4  thick">Item Code</label>
                      <div class="col-sm-6">
                        <?php echo $this->_tpl_vars['ListDet']['item_code']; ?>

                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-4  thick">Category</label>
                      <div class="col-sm-6">
						<?php echo $this->_tpl_vars['ListDet']['item_category']; ?>

                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-4  thick">Description</label>
                      <div class="col-sm-6">
                       <?php echo $this->_tpl_vars['ListDet']['item_description']; ?>

                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4  thick">Consumer Basic</label>
                      <div class="col-sm-6">
                       <?php echo $this->_tpl_vars['ListDet']['consumer_basic']; ?>

                      </div>
                    </div>
					<?php if ($this->_tpl_vars['ListDet']['features'] != ""): ?>
					 <div class="form-group">
                      <label class="col-sm-4  thick">Features</label>
                      <div class="col-sm-6">
                        <?php echo $this->_tpl_vars['ListDet']['features']; ?>

                      </div>
                    </div>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['ListDet']['dimensions'] != ""): ?>
					 <div class="form-group">
                      <label class="col-sm-4  thick">Dimensions</label>
                      <div class="col-sm-6">
                        <?php echo $this->_tpl_vars['ListDet']['dimensions']; ?>

                      </div>
                    </div>
					<?php endif; ?>
					 <div class="form-group">
                      <label class="col-sm-4  thick">Total</label>
                      <div class="col-sm-6">
                        <?php echo $this->_tpl_vars['ListDet']['total']; ?>

                      </div>
                    </div>
					<?php if ($this->_tpl_vars['EditList']['remarks'] != ""): ?>
					<div class="form-group">
                      <label class="col-sm-4  thick">Remarks</label>
                      <div class="col-sm-6">
						<?php echo $this->_tpl_vars['ListDet']['remarks']; ?>

                      </div>
                    </div>
					<?php endif; ?>
					</div>
					<!--**********************************************************-->
                     <div class="col-md-6">
					 <div class="form-group">
                      <label class="col-sm-4  thick">Item Name</label>
                      <div class="col-sm-6">
						<?php echo $this->_tpl_vars['ListDet']['item_name']; ?>

                      </div>
					  </div>
					<div class="form-group">
                      <label class="col-sm-4  thick">Category code</label>
                      <div class="col-sm-6">
                        <?php echo $this->_tpl_vars['ListDet']['item_category_code']; ?>

                      </div>
                    </div>
					<?php if ($this->_tpl_vars['EditList']['item_color'] != ""): ?>
					<div class="form-group">
                      <label class="col-sm-4  thick"> Item Color</label>
                      <div class="col-sm-6">
						<?php echo $this->_tpl_vars['ListDet']['item_color']; ?>

                      </div>
                    </div>
					<?php endif; ?>
                    <div class="form-group">			 
                      <label class="col-sm-4  thick">Baan Company</label>
                      <div class="col-sm-6">
						<?php echo $this->_tpl_vars['ListDet']['baan_company']; ?>

                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-4  thick">Price Date</label>
                     <div class="col-sm-6">
                       <?php echo $this->_tpl_vars['ListDet']['price_date']; ?>

                      </div>
                    </div> 
					<div class="form-group">
                      <label class="col-sm-4  thick">Wh</label>
                      <div class="col-sm-6">
						<?php echo $this->_tpl_vars['ListDet']['ware_house']; ?>

                      </div>
                    </div>
					<?php if ($this->_tpl_vars['ListDet']['ed'] != ""): ?>
					<div class="form-group">
                      <label class="col-sm-4  thick">ED</label>
                      <div class="col-sm-6">
                        <?php echo $this->_tpl_vars['ListDet']['ed']; ?>
		
                      </div>
                    </div>
					<?php endif; ?>
					<div class="form-group" style="visibility:hidden">
                      <label class="col-sm-4  thick">Created By</label>
                      <div class="col-sm-6">
                       <?php echo $this->_tpl_vars['ListDet']['created_by']; ?>

                      </div>
                    </div>
					</div>
                    </div>
					<?php endforeach; endif; unset($_from); ?>
					</form>
					</div>
					</div>
				<div class="clear"></div>
						<!-- /.box-header -->
                </div><!-- /.box-body -->
            </div><!-- /.col -->
          </div> <!-- /.row -->
        </section> <!-- /.content -->
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
	label,td.thick
	{
	font-weight: bold;
	}
	label.font
	{
	font-weight: normal;
	}
</style>
'; ?>

	</body>
   </html>