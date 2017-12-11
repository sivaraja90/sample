<?php /* Smarty version 2.6.25, created on 2015-12-29 17:12:00
         compiled from ebgenerationDetails.tpl */ ?>

        </div>
            
        <div class="wrapper wrapper-content animated fadeInRight" >
            <div class="row">
            
                
            </div>
            <div class="row">
                
                
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                          <h5 style="padding-left:45%;">EB Details</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                               
                            </div>
                        </div>
                        <div class="ibox-content">
                  <form name="eb_generation" id="eb_generation" method="post">
                       <input type="hidden" name="hdAction" />
                           <?php $_from = $this->_tpl_vars['PageList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDet']):
?>
							     
                            
	<table width="100%" cellpadding="2" cellspacing="0" border="0">	
	<tr>
          <!--  <td><label>Select Region:</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="region" id="region" readonly="true" value="<?php echo $this->_supers['session']['Region']; ?>
" style="height:18px;"> &nbsp;&nbsp;<font class="error"><b>*</b>&nbsp;</font></td>  -->
				<td>Sites:
			    <select name="site_name" id="site_name" onChange="showGroup(this.value);" style="height:18px;">  
				<option value=0 selected="selected">---Please Select Site---</option>
         			    </select>&nbsp;&nbsp;<font class="error"><b>*</b>&nbsp;</font></td>
                            
                            <td>HTSC No: 
                                <select id="htsc_grouping" name="htsc_no" style="height:18px;" >   
                                <option value=0 selected="selected">----Please Select Sites-----</option>
                                </select> 
                            </td>
</tr>
                            <br />
                            <tr><td><label>From Date:</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="from_date" name="from_date" size="15"  readonly="true" value="">&nbsp;&nbsp;<font class="error"   ><b>*</b>&nbsp;</font></td>
							 <td><label>To Date:</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="to_date" name="to_date" size="15"  readonly="true" value="">&nbsp;&nbsp;<font class="error"   ><b>*</b>&nbsp;</font></td>
                     <!--<td><input class="button" type='submit' name="get_details" value='Get Details' /></td>-->
				 
       </tr>
       
			</table>
			
							<?php endforeach; endif; unset($_from); ?>
							     
							   <div align="center">

									<button class="btn btn-primary" id="back"  type="button">BACK</button>
                                      </div>
                                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<?php echo '
		<script type="text/javascript">
		
        $(document).ready(function() {	
		$(\'#side-menu\').metisMenu();
		$("#back").click(function(){

        window.history.back();

        });

		
		 });
		 
		 </script>
		 '; ?>
