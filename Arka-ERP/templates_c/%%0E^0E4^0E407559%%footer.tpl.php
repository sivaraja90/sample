<?php /* Smarty version 2.6.25, created on 2017-11-29 17:06:55
         compiled from footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'footer.tpl', 5, false),)), $this); ?>
 <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; <?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y') : smarty_modifier_date_format($_tmp, '%Y')); ?>
 <a href="http://adroitsolutionz.com" target="_blank">Adroit Solutionz</a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
        <!--  <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>-->
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane active" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
              <li>
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">New Customer</h4>
					<?php $_from = $this->_tpl_vars['Customer1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['List']):
?>
					<a href="customer_detail_view.php?customer_id=<?php echo $this->_tpl_vars['List']['customer_id']; ?>
">
                    <p><?php echo $this->_tpl_vars['List']['customer_id']; ?>
&nbsp;/&nbsp;<?php echo $this->_tpl_vars['List']['timestamp_values']; ?>
</p>
					</a>
					<?php endforeach; endif; unset($_from); ?>
                  </div>
              </li>
              <li>

                  <i class="menu-icon fa fa-user bg-yellow"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">New Enquiry</h4>
                  <?php $_from = $this->_tpl_vars['EnqMas1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['List']):
?>
					<a href="enquiry_detail_view.php?enquiry_id=<?php echo $this->_tpl_vars['List']['enquiry_id']; ?>
">
                    <p><?php echo $this->_tpl_vars['List']['enquiry_id']; ?>
&nbsp;/&nbsp;<?php echo $this->_tpl_vars['List']['timestamp_value']; ?>
</p>
					</a>
					<?php endforeach; endif; unset($_from); ?>
                  </div>
 
              </li>
              <li>
               
                  <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">New Sales</h4>
                     <?php $_from = $this->_tpl_vars['SalMas1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['List']):
?>
					<a href="sales_detail_view.php?sales_order_no=<?php echo $this->_tpl_vars['List']['sales_order_no']; ?>
">
                    <p><?php echo $this->_tpl_vars['List']['sales_order_no']; ?>
&nbsp;/&nbsp;<?php echo $this->_tpl_vars['List']['timestamp_value']; ?>
</p>
					</a>
					<?php endforeach; endif; unset($_from); ?>
                  </div>
                 </li>
              <li>
                
                  <i class="menu-icon fa fa-file-code-o bg-green"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">New Services</h4>
                     <?php $_from = $this->_tpl_vars['SerMas1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['List']):
?>
					<a href="service_quote_detail_view.php?service_order_no=<?php echo $this->_tpl_vars['List']['service_quote_no']; ?>
">
                    <p><?php echo $this->_tpl_vars['List']['service_order_no']; ?>
&nbsp;/&nbsp;<?php echo $this->_tpl_vars['List']['timestamp_value']; ?>
</p>
					</a>
					<?php endforeach; endif; unset($_from); ?>
                  </div>
              </li>
			   <li>
               
                  <i class="menu-icon fa fa-file-code-o bg-green"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">New Projects</h4>
                   <?php $_from = $this->_tpl_vars['ProMas1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['List']):
?>
					<a href="project_quote_detail_view.php?project_order_no=<?php echo $this->_tpl_vars['List']['project_order_no']; ?>
">
                    <p><?php echo $this->_tpl_vars['List']['project_order_no']; ?>
&nbsp;/&nbsp;<?php echo $this->_tpl_vars['List']['timestamp_value']; ?>
</p>
					</a>
					<?php endforeach; endif; unset($_from); ?>
                  </div>
              </li>
            </ul><!-- /.control-sidebar-menu -->

          <!--  <h3 class="control-sidebar-heading">New Project</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="label label-danger pull-right">70%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Update Resume
                    <span class="label label-success pull-right">95%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Laravel Integration
                    <span class="label label-warning pull-right">50%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Back End Framework
                    <span class="label label-primary pull-right">68%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>
              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Some information about this general settings option
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Allow mail redirect
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Other sets of options are available
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Expose author name in posts
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Allow the user to show his name in blog posts
                </p>
              </div><!-- /.form-group -->

              <h3 class="control-sidebar-heading">Chat Settings</h3>

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Show me as online
                  <input type="checkbox" class="pull-right" checked>
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Turn off notifications
                  <input type="checkbox" class="pull-right">
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Delete chat history
                  <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                </label>
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->
	   <?php echo '
    <script>
      $.widget.bridge(\'uibutton\', $.ui.button);
    </script>

'; ?>

  </body>
</html>