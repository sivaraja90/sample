<?php /* Smarty version 2.6.25, created on 2015-11-30 17:31:25
         compiled from powergenerationDetails.tpl */ ?>


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
                          <h5 style="padding-left:45%;">Panel Details</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                               
                            </div>
                        </div>
                        <div class="ibox-content">
                            <table style="width: 100%">
		  
    <form name="eb_generation_list" id="eb_generation_list" method="post">
	<?php $_from = $this->_tpl_vars['PageList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDet']):
?>
<input type="hidden" name="hdAction" />
		  <tr>
            <td><label>Region:</label></td>
            
				<?php if ($this->_supers['session']['Region'] != 'Chennai'): ?>	
                 <td><input type="text" name="region" id="datetodate_region" accesskey="date_to_date_"  value="Thirunelveli" size="15" readonly="true"></td>
				<?php elseif ($this->_supers['session']['Region'] == 'Chennai'): ?>
				<td>
				<select name="region" id="datetodate_region" onChange="showSites();">
				<option value="Tirunelveli">Tirunelveli</option>
				<option value="Coimbatore">Coimbatore</option>
				</select>
				</td>
				<?php endif; ?>			
			
				<td>Sites:</td>
			    <td><!--<select name="site_name" id="datetodate_site_name" onChange="showGroup(this.value,this.id);" style="height:18px;">-->
				<select name="site_name" id="datetodate_site_name"  style="height:20px;">
				<option value="Region">----Please Select Site-----</option>
         		<?php $_from = $this->_tpl_vars['SiteList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Listsite']):
?>	
							    <option value="<?php echo $this->_tpl_vars['Listsite']['site_name']; ?>
"><?php echo $this->_tpl_vars['Listsite']['site_name']; ?>
 </option>
							    <?php endforeach; endif; unset($_from); ?>	
			    </select>&nbsp;&nbsp;<font class="error"><b>*</b>&nbsp;</font></td>
                            
<!--                            <td>HTSC No: </td>
                            <td >
                                <select id="datetodate_htsc_grouping" name="htsc_no" style="height:18px;" >   
                                <option value=0 selected="selected">----Select Sites-----</option>
                                </select> 
                            </td>-->
                            <td><label>From Date:</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="from_date" name="from_date" size="20"  readonly="true" value="<?php echo $this->_tpl_vars['Date1']; ?>
">&nbsp;&nbsp;<font class="error"   ><b>*</b>&nbsp;</font></td>
                            <td><label>To Date:</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="to_date" name="to_date" size="20"  readonly="true" value="<?php echo $this->_tpl_vars['Date2']; ?>
">&nbsp;&nbsp;<font class="error"   ><b>*</b>&nbsp;</font></td>
                   <!--  <td><input class="button" type='submit' name="Submit" value='Get Details' /></td>-->

	        </tr>


                <input type="hidden" id="datetodate_hdn_region" value="<?php echo $_POST['region'] ?>"> 
                <!--<input type="hidden" id="datetodate_hdn_htsc_no" value="<?php echo $_POST['htsc_no'] ?>">-->
                <input type="hidden" id="datetodate_hdn_site_name" value="<?php echo $_POST['site_name'] ?>"> 
                <input type="hidden" id="datetodate_hdn_from_date" value="<?php echo $_POST['from_date'] ?>">
                <input type="hidden" id="datetodate_hdn_to_date" value="<?php echo $_POST['to_date'] ?>">
                
			</form>

        <?php endforeach; endif; unset($_from); ?>	
          </table>
						      
							  	<br />
							   <div align="center">
									<button class="btn btn-primary" id="back"  type="button">BACK</button>
                                      </div>
                                   
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
		 
		<style>
	 <link rel="codebase/dhtmlxcalendar.css" type="text/css">
	 <link rel="codebase/dhtmlxcalendar_dhx_skyblue.css" type="text/css">
	 <link rel="codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css">
	 
	</style>

<script src="dhtmlxMessage/codebase/dhtmlxcalendar.js" type="text/javascript"></script>
<script src="codebase/dhtmlxcalendar.js" type="text/javascript"></script>
<script src="codebase/dhtmlxcommon.js" type="text/javascript"></script>


	<script>
	$(function(Date1) {
				//alert("test");
				$( "#from_date" ).datepicker({
					altField: "#validity",
					altFormat: "yy-mm-dd"
				});
			});
			$(function(Date2) {
				//alert("test");
				$( "#to_date" ).datepicker({
					altField: "#validity",
					altFormat: "yy-mm-dd"
				});
			});
			</script>
		 '; ?>