<div class="box-body" style="width:1300px;">
		<form class="form-horizontal" name="add_address">
			<input type="hidden" name="hdAction1" />
					<input type="hidden" id="mobile_fld_cnt" name="mobile_fld_cnt"  value="2"  >
					<input type="hidden" id="phone_fld_cnt" name="phone_fld_cnt"  value="2"  >
					<input type="hidden" id="email_fld_cnt" name="email_fld_cnt"  value="2"  >
					<input type="hidden" id="hdn_salutation" name="hdn_salutation" value="{$smarty.post.salutaion}">
					<input type="hidden" id="hdn_order_status" name="hdn_order_status" value="{$smarty.post.order_status}">
					<input type="hidden" id="hdn_customer_status" name="hdn_customer_status" value="{$smarty.post.customer_status}">
					<input type="hidden" id="hdn_customer_type" name="hdn_customer_type" value="{$smarty.post.customer_type}">
				   <div class="col-md-6">
					<div class="form-group" style="width:550px;">
                      <label class="col-sm-4 control-label">Contact Person</label>
                      <div class="col-sm-2">
					  <select id="salutation" name="salutation" class="form-control" tabindex="3" >
					  <option>Mr</option>
					  <option>Mrs</option>
					  <option>Miss</option>
					  </select>
					  </div>
					  <div class="form-group">
					  <div class="col-sm-3">
                        <input type="text" class="form-control" id="fname" name="fname" placeholder="First name" tabindex="4" style="margin-left:-25px; width:150px;" onKeyUp="text_filter(this);">
					  </div>
					  <div class="col-sm-3">
						<input type="text" class="form-control" id="lname" name="lname" placeholder="Last name" style="width:130px;" tabindex="5" onKeyUp="text_filter(this);"><font class="error" color="#f56954"><b>*</b>&nbsp;</font>
                      </div>
					  
                    </div>
				</div>
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Address</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="addres" name="addres" placeholder="Address" tabindex="13">
						
                      </div>
					  &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
                    </div>
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Address1</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="address1" name="address1" placeholder="Address1" tabindex="14">
                      </div> 
					  &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
					  </div>  
					<div class="form-group">
                      <label class="col-sm-3 control-label">Area</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="area" name="area" placeholder="Area" tabindex="15" onKeyUp="text_filter(this);">
                      </div>
					  &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Land Mark</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="landmark" name="landmark" placeholder="Land Mark" tabindex="17">
                      </div>
					  &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
                    </div>
					  <div class="form-group">
                      <label class="col-sm-3 control-label">City</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="city" name="city" placeholder="City" tabindex="16" onKeyUp="text_filter(this);">
						
                      </div>
					  &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
					  </div>
					  <div class="form-group">
                      <label class="col-sm-3 control-label">Pincode</label>
					  <div class="col-sm-5">
					   <input type="text" class="form-control" id="pincode" name="pincode" placeholder="Pincode" tabindex="18" maxlength="6" onBlur="chk_exist_pin(this)" onKeyUp="numericFilter(this);">
					  </div>
					  &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
					  </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Remarks</label>
                      <div class="col-sm-5">
                        <textarea class="form-control" id="remark" name="remark" placeholder="Remarks" tabindex="19"></textarea>
                      </div>
					  &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
                    </div>
					</div>
					</form>
					</div>