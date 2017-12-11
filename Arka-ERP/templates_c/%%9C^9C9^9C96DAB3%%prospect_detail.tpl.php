<?php /* Smarty version 2.6.25, created on 2017-06-20 17:49:38
         compiled from prospect_detail.tpl */ ?>
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
label,td.thick
{
font-weight:bold;
}
label.font
{
font-weight: normal;
}
</style>
	<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/>
	<link rel=\'stylesheet\' type=\'text/css\' href=\'auto-complete/jquery.auto-complete.css?<?= mktime() ?>\' />
'; ?>

 <body class="hold-transition skin-blue sidebar-mini">
  <div class="content-wrapper">
	<section class="content-header">
          <h4>
            <small class="active"><a href="prospect_list.php"><i class="fa fa-list"> <label class="font" style="font-family:Arial, Helvetica, sans-serif">
List Prospect</label></i></a></small>&ensp;&ensp;&ensp;
            <small><a href="prospect.php"><i class="fa fa-user-plus"> <label class="font" style="font-family:Arial, Helvetica, sans-serif">
Create Prospect</label></i></a></small></h4>
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
                  <center><h3 class="box-title">Prospect View</h3></center>
                </div>
                <div class="box-header">
 				    <?php $_from = $this->_tpl_vars['ListEdit']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['View']):
?>
				<table width="110%">
				<tr>
				 <td>Created:<?php echo $this->_tpl_vars['View']['created_date']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['View']['created_time']; ?>
</td>
                  <td>
				 <h4><?php echo $this->_tpl_vars['View']['company_name']; ?>
&nbsp;<?php echo $this->_tpl_vars['View']['user_id']; ?>
</h4></td>
				<td style="margin-left:-1000px;"> Modified:<?php echo $this->_tpl_vars['Date_Stamp']['0']['Date']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['Time_Stamp']['0']['Time']; ?>
</td>
				</tr>
				</table>
				<?php endforeach; endif; unset($_from); ?>
				<form class="form-horizontal" name="prospect_detail">
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
				   <?php $_from = $this->_tpl_vars['ListView1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDet']):
?>	
				   <div class="col-md-6">
                    <div class="form-group">			 
                      <label class="col-sm-4  thick">Prospect Id</label>
                      <div class="col-sm-6">
                        <?php echo $this->_tpl_vars['ListDet']['prospect_id']; ?>

                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="col-sm-4  thick">Contact Person</label>
                      <div class="col-sm-6">
                       <?php echo $this->_tpl_vars['ListDet']['contact_person']; ?>

                      </div>
                    </div>
                   
					 <div class="form-group">
                      <label class="col-sm-4  thick">Address</label>
                      <div class="col-sm-6">
                        <?php echo $this->_tpl_vars['ListDet']['address']; ?>

                      </div>
                    </div>
					 <div class="form-group">
                      <label class="col-sm-4  thick">Created By</label>
                      <div class="col-sm-6">
                        <?php echo $this->_tpl_vars['ListDet']['created_by']; ?>

                      </div>
                    </div>
					
					</div>
					
					
					 <div class="col-md-6">
					 
					 <div class="form-group" >
                      <label class="col-sm-4  thick">Company Name</label>
                      <div class="col-sm-6">
						<?php echo $this->_tpl_vars['ListDet']['company_name']; ?>

                      </div>
                    </div>
					 <div class="form-group">
                      <label class="col-sm-4  thick">Contact No</label>
                      <div class="col-sm-6">
                       <?php echo $this->_tpl_vars['ListDet']['mobile_no']; ?>

                      </div>
                    </div>
					</div>
					 <div class="form-group">
                      <label class="col-sm-4  thick">Mail Id</label>
                      <div class="col-sm-6">
                      <?php echo $this->_tpl_vars['ListDet']['mail_id']; ?>

                      </div>
					  </div>
					 
                    
					
					 </div>
                  
					<?php endforeach; endif; unset($_from); ?>
					</form>
					 </div>
				  </div>
               </div><!-- /.box-body -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
            <!-- Control Sidebar -->
      <!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
    
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
	'; ?>

  </body>
 </html>