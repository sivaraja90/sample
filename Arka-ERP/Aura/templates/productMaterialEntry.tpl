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
          {if $SuccessMessage1 neq ""}
			<div class="isa_success">
			<i class="fa fa-check"></i>
			{$SuccessMessage1}		 
			</div>
		 {/if}
		  {if $ErrorMessage neq ""}
			<div class="isa_error">
			<i class="fa fa-check"></i>
			{$ErrorMessage}		 
			</div>
		 {/if}
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
         {foreach from=$MtrlList item=ListMtrl}	
							    <option value="{$ListMtrl.product_id}">{$ListMtrl.product_id} </option>
							    {/foreach}
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
                      <h3>{if $smarty.post.product_id neq ""}Product Id :&nbsp;&nbsp;{$smarty.post.product_id}{/if}</h3>
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
{assign var="tabindex" value="1"} 
{foreach from=$PageList item=ListDet}			
 <input type="hidden" name="hdn_product_id" value="{$ListDet.product_id}" > 
	
    <tr>
        <td align="center"><input type="checkbox" id="checkbox[{$ListDet.product_id}]"  name="select_id[]" value="{$ListDet.product_id}" class="chk"  size="6" autocomplete="Off"   ></td>
        
        <td align="center">{$ListDet.material_name}<input type="hidden" id="location" name="material_name[{$ListDet.product_id}]" value="{$ListDet.material_name}" readonly="true"  size="6" autocomplete="Off"></td>
        <td align="center"><input type="text" id="display[{$ListDet.product_id}]" name="g1_kwh[{$ListDet.product_id}]" value="" onKeyUp=addG('{$ListDet.product_id}');return tab(this, event);" onBlur="autocheck('{$ListDet.product_id}');"  class="input" tabindex="{$i++}" size="6" autocomplete="Off" style="width:90%;"></td>
        <td align="center"><input type="text" id="model[{$ListDet.product_id}]" name="model[{$ListDet.product_id}]" value="" onKeyUp="addG('{$ListDet.product_id}');return tab(this, event);" onBlur="autocheck('{$ListDet.product_id}');" class="input" tabindex="{$i++}"  size="6" autocomplete="Off"style="width:90%;"></td>
	<td align="center"><input type="text" id="make[{$ListDet.product_id}]" onKeyUp="return tab(this, event);"  name="make[{$ListDet.product_id}]" value="" readonly='true' class="input" tabindex="{$i++}" size="6" autocomplete="Off" style="width:90%;"></td>
	
	<td align="center"><input type="text" id="spec[{$ListDet.product_id}]" onKeyUp="addGHOURS('{$ListDet.product_id}');return tab(this, event);" onBlur="autocheck('{$ListDet.product_id}');"  name="spec[{$ListDet.product_id}]" value="" tabindex="{$i++}"  size="6" autocomplete="off" style="width:90%;"></td>
	<td align="center"><input type="text" id="current_status[{$ListDet.product_id}]" onKeyUp="addGHOURS('{$ListDet.product_id}');return tab(this, event);" onBlur="autocheck('{$ListDet.product_id}');"  name="current_status[{$ListDet.product_id}]" value="" tabindex="{$i++}" size="6" autocomplete="off" style="width:90%;"></td>
	<td align="center"><input type="text" id="created_date[{$ListDet.product_id}]" onKeyUp="addGHOURS('{$ListDet.product_id}');return tab(this, event);" onBlur="autocheck('{$ListDet.product_id}');"  name="created_date[{$ListDet.product_id}]" value="" tabindex="{$i++}"  size="6" autocomplete="off" style="width:90%;"></td>
	<td align="center"><input type="text" id="created_time[{$ListDet.product_id}]" onKeyUp="addGHOURS('{$ListDet.product_id}');return tab(this, event);" onBlur="autocheck('{$ListDet.product_id}');"  name="created_time[{$ListDet.product_id}]" value="" tabindex="{$i++}"  size="6" autocomplete="off" style="width:90%;"></td>
	<td align="center"><input type="text" id="created_by[{$ListDet.product_id}]" onKeyUp="addGHOURS('{$ListDet.product_id}');return tab(this, event);" onBlur="autocheck('{$ListDet.product_id}');"  name="created_by[{$ListDet.product_id}]" value="" tabindex="{$i++}"  size="6" autocomplete="off" style="width:90%;"></td>
        
	<input id="search" name="search" value=""  class="btn" type="submit" style="visibility:hidden">	 
			
        </tr>
{foreachelse}
			<tr>
			<td height="20" colspan="16" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
			</tr>
{/foreach}       
		   
	
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