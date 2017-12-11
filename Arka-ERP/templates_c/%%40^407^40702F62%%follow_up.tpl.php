<?php /* Smarty version 2.6.25, created on 2016-01-12 14:38:10
         compiled from follow_up.tpl */ ?>
<?php echo $this->_tpl_vars['IncludeJS']; ?>

<?php echo $this->_tpl_vars['IncludeCSS']; ?>
          
		  <div class="row">
            <div class="col-xs-12">

                <div class="box-header">
		<form class="form-horizontal" name="add_address">
			<input type="hidden" name="hdAction1" />
					<input type="hidden" id="mobile_fld_cnt" name="mobile_fld_cnt"  value="2"  >
					<input type="hidden" id="phone_fld_cnt" name="phone_fld_cnt"  value="2"  >
					<input type="hidden" id="email_fld_cnt" name="email_fld_cnt"  value="2"  >
					<input type="hidden" id="hdn_salutation" name="hdn_salutation" value="<?php echo $this->_supers['post']['salutaion']; ?>
">
					<input type="hidden" id="hdn_order_status" name="hdn_order_status" value="<?php echo $this->_supers['post']['order_status']; ?>
">
					<input type="hidden" id="hdn_customer_status" name="hdn_customer_status" value="<?php echo $this->_supers['post']['customer_status']; ?>
">
					<input type="hidden" id="hdn_customer_type" name="hdn_customer_type" value="<?php echo $this->_supers['post']['customer_type']; ?>
">
				   <table class="col-md-6">
					<tr class="form-group" style="width:550px;">
                      <th class="col-sm-4 control-th">Contact Person</th>
                      <td class="col-sm-2">
					  <select id="salutation" name="salutation" class="form-control" tabindex="3" >
					  <option>Mr</option>
					  <option>Mrs</option>
					  <option>Miss</option>
					  </select>
					  </td>
					  <td class="col-sm-3">
                        <input type="text" class="form-control" id="fname" name="fname" placeholder="First name" tabindex="4" style="margin-left:-25px; width:150px;" onKeyUp="text_filter(this);">
					  </td>
					  <td class="col-sm-3">
						<input type="text" class="form-control" id="lname" name="lname" placeholder="Last name" style="width:130px;" tabindex="5" onKeyUp="text_filter(this);"><td>&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font></td>
                      </td>

				</tr>
					 <tr class="form-group">
                      <th class="col-sm-3 control-th">Address</th>
                      <td class="col-sm-5">
                        <input type="text" class="form-control" id="addres" name="addres" placeholder="Address" tabindex="13">
						<td>&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font></td>
                     </td>
                    </tr>
					 <tr class="form-group">
                      <th class="col-sm-3 control-th">Address1</th>
                      <td class="col-sm-5">
                        <input type="text" class="form-control" id="address1" name="address1" placeholder="Address1" tabindex="14">
                      </td> 
					  </tr> 
					<tr class="form-group">
                      <th class="col-sm-3 control-th">Area</th>
                      <td class="col-sm-5">
                        <input type="text" class="form-control" id="area" name="area" placeholder="Area" tabindex="15" onKeyUp="text_filter(this);">
						<td>&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font></td>
                      </td>
                    </tr>
					<tr class="form-group">
                      <th class="col-sm-3 control-th">Land Mark</th>
                      <td class="col-sm-5">
                        <input type="text" class="form-control" id="landmark" name="landmark" placeholder="Land Mark" tabindex="17">
						<td>&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font></td>
                      </td>
					 </tr>
					  <tr class="form-group">
                      <th class="col-sm-3 control-th">City</th>
                      <td class="col-sm-5">
                        <input type="text" class="form-control" id="city" name="city" placeholder="City" tabindex="16" onKeyUp="text_filter(this);">
						<td>&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font></td>
                     </td>
					  
					  </tr>
					  <tr class="form-group">
                      <th class="col-sm-3 control-th">Pincode</th>
					  <td class="col-sm-5">
					   <input type="text" class="form-control" id="pincode" name="pincode" placeholder="Pincode" tabindex="18" maxlength="6" onBlur="chk_exist_pin(this)" onKeyUp="numericFilter(this);"><td>&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font></td>
					  </td>
					  
					  </tr>
					<tr class="form-group">
                      <th class="col-sm-3 control-th">Remarks</th>
                      <td class="col-sm-5">
                        <textarea class="form-control" id="remark" name="remark" placeholder="Remarks" tabindex="19"></textarea>
                      </td><td>&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font></td>
					</tr>
					</tr>
					</table>
					</form>
					
					<div class="box-footer">
					<center>
                    <!--<button type="submit" class="btn btn-info pull-center" onClick="validate_fields();">ADD CUSTOMER</button>-->
					<input type="button" class="btn btn-info pull-center" value="ADD"  onClick="hi();">&nbsp;&nbsp;
                    <input type="button" class="btn btn-info pull-center" value="CANCEL"  onClick="GoBack();">&nbsp;&nbsp;
					</center>
                  </div>
                   </div>
      </div>
      
    </div>