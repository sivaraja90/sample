<?php /* Smarty version 2.6.25, created on 2016-07-02 15:47:15
         compiled from employee_detail_view.tpl */ ?>
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
label.thick
{
	font-weight: bold;
}
</style>
	<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/> 
	<link rel=\'stylesheet\' type=\'text/css\' href=\'auto-complete/jquery.auto-complete.css?<?= mktime() ?>\' />
'; ?>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="content-wrapper">
	<section class="content-header">
          <h4>
            <small class="active"><a href="employee_list.php"><i class="fa fa-list"> <label class="font" style="font-family:Arial, Helvetica, sans-serif">
List Employees</label></i></a></small>&ensp;&ensp;&ensp;
            <small><a href="employee_reg.php"> <i class="fa fa-user-plus"> <label class="font" style="font-family:Arial, Helvetica, sans-serif">
Create Employee</label></i></a></small>
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
				 <table width="110%">
				<tr>
				 <td>Created:<?php echo $this->_tpl_vars['Edit']['created_date']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['Edit']['created_time']; ?>
</td>
				 <td>
				 <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['Edit']['company_name']; ?>
&nbsp;&nbsp;[<?php echo $this->_tpl_vars['Edit']['emp_id']; ?>
]</h4></td>
				<td style="margin-left:-1000px;"> Modified:<?php echo $this->_tpl_vars['Date_Stamp']['0']['Date']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['Time_Stamp']['0']['Time']; ?>
</td>
				 </tr>
				 </table>
				 <?php endforeach; endif; unset($_from); ?>
				<form class="form-horizontal" id="detail_view_employee" name="detail_view_employee">
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
				  <?php $_from = $this->_tpl_vars['ListView']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['EditList']):
?>
				   <div class="col-md-6">
					 <div class="form-group">
                      <label class="col-sm-4 thick">Contact Person</label>
                      <div class="col-sm-6">
					  <?php echo $this->_tpl_vars['EditList']['salutation']; ?>
.
					  <?php echo $this->_tpl_vars['EditList']['emp_first_name']; ?>

					<?php echo $this->_tpl_vars['EditList']['emp_last_name']; ?>

                      </div>
                    </div>
 				  <div class="form-group">
                      <label class="col-sm-4 thick">Father Name </label>
                      <div class="col-sm-6">
			         <?php echo $this->_tpl_vars['EditList']['father_name']; ?>

                      </div>
                    </div>
					<?php if ($this->_tpl_vars['EditList']['d_o_b'] != ""): ?>
					  <div class="form-group">
                      <label class="col-sm-4 thick">DOB</label>
                      <div class="col-sm-6">
						<?php echo $this->_tpl_vars['EditList']['d_o_b']; ?>

                      </div>
                      </div>
					  <?php endif; ?>
					<?php if ($this->_tpl_vars['EditList']['mobile'] != "" && $this->_tpl_vars['EditList']['mobile'] != '0'): ?>
					<div class="form-group">
                      <label class="col-sm-4 thick">Mobile No </label>
                      <div class="col-sm-6">
                       <?php echo $this->_tpl_vars['EditList']['mobile']; ?>

                      </div>
                    </div> 
					<?php endif; ?>
					  <?php if ($this->_tpl_vars['EditList']['phone1'] != "" && $this->_tpl_vars['EditList']['phone1'] != '0' && $this->_tpl_vars['EditList']['area_code'] != "" && $this->_tpl_vars['EditList']['area_code'] != '0'): ?>
					  <div class="form-group">
                      <label class="col-sm-4 thick">Phone No</label>
					    <div class="col-sm-6">
						<?php echo $this->_tpl_vars['EditList']['area_code']; ?>
&nbsp;-&nbsp;
					  <?php echo $this->_tpl_vars['EditList']['phone1']; ?>

                      <?php echo $this->_tpl_vars['EditList']['extension']; ?>

                       </div>
					 </div>	
					 <?php endif; ?>
					   <div class="form-group">
                      <label class="col-sm-4 thick">Qualification</label>
                      <div class="col-sm-6">
						 <?php echo $this->_tpl_vars['EditList']['qualification']; ?>

                      </div>
					   </div>
				<div class="form-group">
                      <label class="col-sm-4 thick">Department</label>
                      <div class="col-sm-6">
						 <?php echo $this->_tpl_vars['EditList']['department']; ?>

                      </div>
					  </div>
					<div class="form-group">
                      <label class="col-sm-4 thick">Address</label>
                      <div class="col-sm-6">
						<?php echo $this->_tpl_vars['EditList']['address1']; ?>

                      </div>
					  </div>
					  <?php if ($this->_tpl_vars['EditList']['area'] != ""): ?>
					  <div class="form-group">
                      <label class="col-sm-4 thick">Area</label>
                      <div class="col-sm-6">
						<?php echo $this->_tpl_vars['EditList']['area']; ?>

                      </div>
					  </div>
					  <?php endif; ?>
					  <?php if ($this->_tpl_vars['EditList']['residence_mobile'] != "" && $this->_tpl_vars['EditList']['residence_mobile'] != '0'): ?>
					  <div class="form-group">
                      <label class="col-sm-4 thick">Residence Mobile</label>
                      <div class="col-sm-6">
					  <?php echo $this->_tpl_vars['EditList']['residence_mobile']; ?>

                      </div>
                    </div>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['EditList']['personal_mail'] != ""): ?>
					<div class="form-group">
                      <label class="col-sm-4 thick">Personal Mail</label>
                      <div class="col-sm-6">
                        <?php echo $this->_tpl_vars['EditList']['personal_mail']; ?>

                      </div>
                    </div>
					<?php endif; ?>
					  </div>
					  <!--**************************************************************-->
					  <div class="col-md-6">
					   <div class="form-group">
                      <label class="col-sm-4 thick">Company Code</label>
                      <div class="col-sm-6">
					    <?php echo $this->_tpl_vars['EditList']['company_code']; ?>

                      </div>
					  </div>
					  <div class="form-group">
                      <label class="col-sm-4 thick">Mother Name</label>
                      <div class="col-sm-6">
					    <?php echo $this->_tpl_vars['EditList']['mother_name']; ?>

					 </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-4 thick">Sex</label>
                      <div class="col-sm-6">
					  <?php echo $this->_tpl_vars['EditList']['sex']; ?>

                      </div>
                    </div>
					<?php if ($this->_tpl_vars['EditList']['mobile_1'] != "" && $this->_tpl_vars['EditList']['mobile_1'] != '0'): ?>
					 <div class="form-group">
                      <label class="col-sm-4 thick">Mobile No 1 </label>
                      <div class="col-sm-6">
						 <?php echo $this->_tpl_vars['EditList']['mobile_1']; ?>

                      </div>
					  </div>
					  <?php endif; ?>
					   <?php if ($this->_tpl_vars['EditList']['phone_no'] != "" && $this->_tpl_vars['EditList']['phone_no'] != '0' && $this->_tpl_vars['EditList']['area_code1'] != "" && $this->_tpl_vars['EditList']['area_code1'] != '0'): ?>
						 <div class="form-group">
                      <label class="col-sm-4 thick">Phone No 1</label>
					  <div class="col-sm-6">
					  <?php echo $this->_tpl_vars['EditList']['area_code1']; ?>
 &nbsp;-&nbsp;
					  <?php echo $this->_tpl_vars['EditList']['phone_no']; ?>

					  <?php echo $this->_tpl_vars['EditList']['extension1']; ?>

                        </div>
					 </div>
					 <?php endif; ?>	
					 <div class="form-group">
                      <label class="col-sm-4 thick">Designation</label>
                      <div class="col-sm-6">
					  <?php echo $this->_tpl_vars['EditList']['designation']; ?>

                      </div>
                     </div>
					 <?php if ($this->_tpl_vars['EditList']['no_of_year_exp'] != "" && $this->_tpl_vars['EditList']['no_of_year_exp'] != '0'): ?>
					  <div class="form-group">
                      <label class="col-sm-4 thick">No of year Exper</label>
                      <div class="col-sm-6">
                          <?php echo $this->_tpl_vars['EditList']['no_of_year_exp']; ?>

                      </div>
					   </div>
					   <?php endif; ?>
					   <?php if ($this->_tpl_vars['EditList']['joining_date'] != ""): ?>
					   <div class="form-group">
                      <label class="col-sm-4 thick">Joining Date</label>
                      <div class="col-sm-6">
                         <?php echo $this->_tpl_vars['EditList']['joining_date']; ?>

                      </div>
                    </div>
					<?php endif; ?>
					   <?php if ($this->_tpl_vars['EditList']['address2'] != ""): ?>
					 <div class="form-group">
                      <label class="col-sm-4 thick">Address1</label>
                      <div class="col-sm-6">
					  <?php echo $this->_tpl_vars['EditList']['address2']; ?>

                      </div>
                    </div>
					<?php endif; ?>
						<div class="form-group">
                      <label class="col-sm-4 thick">Pincode</label>
                      <div class="col-sm-6">
                        <?php echo $this->_tpl_vars['EditList']['pincode']; ?>

                      </div>
					  </div>
					<?php if ($this->_tpl_vars['EditList']['company_mail'] != ""): ?>
					   <div class="form-group">
                      <label class="col-sm-4 thick">Company Mail</label>
                      <div class="col-sm-6">
					  <?php echo $this->_tpl_vars['EditList']['company_mail']; ?>

						<?php echo $this->_tpl_vars['EditList']['profile_image']; ?>

                      </div>
                    </div>
					<?php endif; ?>
					 <?php if ($this->_tpl_vars['EditList']['remarks'] != ""): ?>
					 <div class="form-group">
                      <label class="col-sm-4 thick">Remarks</label>
                      <div class="col-sm-6" >
					  <?php echo $this->_tpl_vars['EditList']['remarks']; ?>

                      </div>
					  </div>
					  <?php endif; ?>
					<div class="form-group" style="visibility:hidden">
                      <label class="col-sm-4 thick">Created By</label>
                      <div class="col-sm-6">
					    <?php echo $this->_tpl_vars['EditList']['created_by']; ?>

					 </div>
					 </div>
					</div>
					<?php endforeach; endif; unset($_from); ?>		
                    </div>
					</form>
					<div class="clear"></div>
					 </div>
					<!-- /.box-header -->
                </div><!-- /.box-body -->
            </div> <!-- /.col -->
          </div> <!-- /.row -->
        </section> <!-- /.content -->
      </div><!-- /.content-wrapper -->
            <!-- Control Sidebar -->
      <!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"> </div>
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