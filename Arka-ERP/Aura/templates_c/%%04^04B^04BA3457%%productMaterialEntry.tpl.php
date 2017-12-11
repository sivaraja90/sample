<?php /* Smarty version 2.6.25, created on 2015-10-10 11:15:01
         compiled from productMaterialEntry.tpl */ ?>
   </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Customer Registration</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="./customerReg.php">Customer Management</a>
                        </li>
                        <li>
                          <a href="#">Registration Form</a>  
                        </li>
					</ol>
                </div>
                
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
           <div class="row">
          <?php if ($this->_tpl_vars['SuccessMessage1'] != ""): ?>
			<div class="isa_success">
			<i class="fa fa-check"></i>
			<?php echo $this->_tpl_vars['SuccessMessage1']; ?>
		 
			</div>
		 <?php endif; ?>
		  <?php if ($this->_tpl_vars['ErrorMessage'] != ""): ?>
			<div class="isa_error">
			<i class="fa fa-check"></i>
			<?php echo $this->_tpl_vars['ErrorMessage']; ?>
		 
			</div>
		 <?php endif; ?>
			<!--<div class="isa_error">
			<i class="fa fa-times-circle"></i>
			Customer inserted Successfully......
			</div>-->
            <div class="row">
                
                
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                          <h5  style="padding-left:40%;">Product material Registration Form</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
<!--                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
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
                                </a>-->
							
                            </div>
                        </div>
<form name="power_generation" id="power_generation" method="post">
<input type="hidden" name="hdAction" />
<!-- created by siva    -->
<table width="100%" cellpadding="2" cellspacing="0" border="0">	
<th> S.No </th> <th> Material Name </th> <th> Product Number </th> <th> Display Number </th> <th> Model </th> <th> Make </th> <th> Specification </th> <th> Scada ID </th> <th> Current Status </th> <th> Record Status </th>



	<table width="100%" cellpadding="2" cellspacing="0" border="0">	
            <tr><td>&nbsp;</td> </tr>
	<tr>
            
				<td>Product Id:</td>
			   <!-- <td><select name="site_name" id="site_name" onChange="showGroup(this.value);" style="height:18px;">  >-->
			    <td><select name="product_id" id="product_id"  style="height:18px;" value="">  
				<option value=0 selected="selected">---- Select -----</option>
         <?php $_from = $this->_tpl_vars['MtrlList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListMtrl']):
?>	
							    <option value="<?php echo $this->_tpl_vars['ListMtrl']['product_id']; ?>
"><?php echo $this->_tpl_vars['ListMtrl']['product_id']; ?>
 </option>
							    <?php endforeach; endif; unset($_from); ?>
								</select>	
	
			    </select>&nbsp;&nbsp;<font class="error"><b>*</b>&nbsp;</font></td>
                            
			 
       </tr>

       
			</form>

		
 
    </tr>
</table>
    <br> 


<table style="width: 100%">
              <tr>
                 
                  <td>
                      <h3><?php if ($this->_supers['post']['product_id'] != ""): ?>Product Id :&nbsp;&nbsp;<?php echo $this->_supers['post']['product_id']; ?>
<?php endif; ?></h3>
                  </td>
		  
              </tr>
          </table>
 
    
		<table class="dtable" cellspacing="1" cellpadding="1" width="100%" border=0>
			<tr>
                        <th width="20" align="center" >Select</th>    
			
	                <th width="5" align="center">Material_Name</th>
	                <th width="25" align="center">Display</th>
                        <th width="20" align="center">Model</th>
			<th width="25" align="center">Make</th>
			<th width="25" align="center">Current_Status</th>
			<th width="25" align="center">Created Date</th>
			
			
			<th width="25" align="center">Created Time</th>
			<th width="25" align="center">Created By</th>
    </tr>
	<form name="eb_generation" id="eb_generation" method="post" />
<input type="hidden" name="hdAction2" />
<?php $this->assign('tabindex', '1'); ?> 
<?php $_from = $this->_tpl_vars['PageList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDet']):
?>			
 <input type="hidden" name="hdn_product_id" value="<?php echo $this->_tpl_vars['ListDet']['product_id']; ?>
" > 
	
    <tr>
        <td align="center"><input type="checkbox" id="checkbox[<?php echo $this->_tpl_vars['ListDet']['product_id']; ?>
]"  name="select_id[]" value="<?php echo $this->_tpl_vars['ListDet']['product_id']; ?>
" class="chk"  size="6" autocomplete="Off"   ></td>
        
        <td align="center"><?php echo $this->_tpl_vars['ListDet']['material_name']; ?>
<input type="hidden" id="location" name="material_name[<?php echo $this->_tpl_vars['ListDet']['product_id']; ?>
]" value="<?php echo $this->_tpl_vars['ListDet']['material_name']; ?>
" readonly="true"  size="6" autocomplete="Off"></td>
        <td align="center"><input type="text" id="display[<?php echo $this->_tpl_vars['ListDet']['product_id']; ?>
]" name="g1_kwh[<?php echo $this->_tpl_vars['ListDet']['product_id']; ?>
]" value="" onKeyUp=addG('<?php echo $this->_tpl_vars['ListDet']['product_id']; ?>
');return tab(this, event);" onBlur="autocheck('<?php echo $this->_tpl_vars['ListDet']['product_id']; ?>
');"  class="input" tabindex="<?php echo $this->_tpl_vars['i']++; ?>
" size="6" autocomplete="Off" style="width:90%;"></td>
        <td align="center"><input type="text" id="model[<?php echo $this->_tpl_vars['ListDet']['product_id']; ?>
]" name="model[<?php echo $this->_tpl_vars['ListDet']['product_id']; ?>
]" value="" onKeyUp="addG('<?php echo $this->_tpl_vars['ListDet']['product_id']; ?>
');return tab(this, event);" onBlur="autocheck('<?php echo $this->_tpl_vars['ListDet']['product_id']; ?>
');" class="input" tabindex="<?php echo $this->_tpl_vars['i']++; ?>
"  size="6" autocomplete="Off"style="width:90%;"></td>
	<td align="center"><input type="text" id="make[<?php echo $this->_tpl_vars['ListDet']['product_id']; ?>
]" onKeyUp="return tab(this, event);"  name="make[<?php echo $this->_tpl_vars['ListDet']['product_id']; ?>
]" value="" readonly='true' class="input" tabindex="<?php echo $this->_tpl_vars['i']++; ?>
" size="6" autocomplete="Off" style="width:90%;"></td>
	
	<td align="center"><input type="text" id="spec[<?php echo $this->_tpl_vars['ListDet']['product_id']; ?>
]" onKeyUp="addGHOURS('<?php echo $this->_tpl_vars['ListDet']['product_id']; ?>
');return tab(this, event);" onBlur="autocheck('<?php echo $this->_tpl_vars['ListDet']['product_id']; ?>
');"  name="spec[<?php echo $this->_tpl_vars['ListDet']['product_id']; ?>
]" value="" tabindex="<?php echo $this->_tpl_vars['i']++; ?>
"  size="6" autocomplete="off" style="width:90%;"></td>
	<td align="center"><input type="text" id="current_status[<?php echo $this->_tpl_vars['ListDet']['product_id']; ?>
]" onKeyUp="addGHOURS('<?php echo $this->_tpl_vars['ListDet']['product_id']; ?>
');return tab(this, event);" onBlur="autocheck('<?php echo $this->_tpl_vars['ListDet']['product_id']; ?>
');"  name="current_status[<?php echo $this->_tpl_vars['ListDet']['product_id']; ?>
]" value="" tabindex="<?php echo $this->_tpl_vars['i']++; ?>
" size="6" autocomplete="off" style="width:90%;"></td>
	<td align="center"><input type="text" id="created_date[<?php echo $this->_tpl_vars['ListDet']['product_id']; ?>
]" onKeyUp="addGHOURS('<?php echo $this->_tpl_vars['ListDet']['product_id']; ?>
');return tab(this, event);" onBlur="autocheck('<?php echo $this->_tpl_vars['ListDet']['product_id']; ?>
');"  name="created_date[<?php echo $this->_tpl_vars['ListDet']['product_id']; ?>
]" value="" tabindex="<?php echo $this->_tpl_vars['i']++; ?>
"  size="6" autocomplete="off" style="width:90%;"></td>
	<td align="center"><input type="text" id="created_time[<?php echo $this->_tpl_vars['ListDet']['product_id']; ?>
]" onKeyUp="addGHOURS('<?php echo $this->_tpl_vars['ListDet']['product_id']; ?>
');return tab(this, event);" onBlur="autocheck('<?php echo $this->_tpl_vars['ListDet']['product_id']; ?>
');"  name="created_time[<?php echo $this->_tpl_vars['ListDet']['product_id']; ?>
]" value="" tabindex="<?php echo $this->_tpl_vars['i']++; ?>
"  size="6" autocomplete="off" style="width:90%;"></td>
	<td align="center"><input type="text" id="created_by[<?php echo $this->_tpl_vars['ListDet']['product_id']; ?>
]" onKeyUp="addGHOURS('<?php echo $this->_tpl_vars['ListDet']['product_id']; ?>
');return tab(this, event);" onBlur="autocheck('<?php echo $this->_tpl_vars['ListDet']['product_id']; ?>
');"  name="created_by[<?php echo $this->_tpl_vars['ListDet']['product_id']; ?>
]" value="" tabindex="<?php echo $this->_tpl_vars['i']++; ?>
"  size="6" autocomplete="off" style="width:90%;"></td>
        
	<input id="search" name="search" value=""  class="btn" type="submit" style="visibility:hidden">	 
			
        </tr>
<?php endforeach; else: ?>
			<tr>
			<td height="20" colspan="16" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
			</tr>
<?php endif; unset($_from); ?>       
		   
	
                </table>
	    
<table align="center" cellspacing="0" cellpadding="3" width="100%" border=0>
 
  <tr> <td align="center">
      <div class="tabber">

                        <p>
                            <div align="center" >
                                <input class="button" type='button' name="Insert" id="Insert" value='Add' />
                                <input class="button" type='button' value='Cancel' onClick="history.go(-1)" />
                            </div>
                        </p>
                    

            </div>
    </td>
 </tr>
</table>
</form> 