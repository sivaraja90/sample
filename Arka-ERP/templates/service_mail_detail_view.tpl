{include file="left.tpl"}
 <body class="hold-transition skin-blue sidebar-mini">
  <div class="content-wrapper">
	<section class="content-header">
          <h4>
            <small><a href="#"><i class="fa fa-list"> <label class="font" style="font-family:Arial, Helvetica, sans-serif">
List Service Mail</label></i></a></small>&ensp;&ensp;&ensp;
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
								{foreach from=$ServiceMail item=View}
									<table width="110%">
									<tr>
									 <td>Created:{$View.created_date}&nbsp;&nbsp;{$View.created_time}</td>
					                  <td align="justify">
									 <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Enquiry Mail Details</h4></td>
									<td>Modified:{$View.timestamp_value}</td>
									</tr>
									</table>
									{/foreach}
									</div>
									<form class="form-horizontal" id="service_mail_details" name="service_mail_details">
									<input type="hidden" name="hdAction" />
									<br><br>
									   <div class="box-body">
									  {foreach from=$ServiceMail item=enqMail}
									  	<div class="col-md-6">
					                    <div class="form-group">
					                      <label class="col-sm-4 thick"><b>Enquiry Id</b></label>
					                      <div class="col-sm-6">
					                       {$enqMail.enquiry_id}
					                      </div>
					                    </div>
										</div>
										<div class="col-md-6">
					                    <div class="form-group">
					                      <label class="col-sm-4 thick" style="margin-left:85px;"><b>Enquiry Type</b></label>
					                      <div class="col-sm-6">
					                       {$enqMail.enquiry_type}
					                      </div>
					                    </div>
										</div>
										</div>
									{/foreach}
					<br>
					<table  class="table table-bordered table-striped">

					  {foreach from=$ServiceMail item=enqMail}
					<tr>
					<th style="width:15%;">Mail From</th>
					<td>{$enqMail.mail_from}</td>
					</tr>
					<tr>
					<th>Mail CC</th>
					<td>{$enqMail.mail_cc}</td>
					</tr>
					<tr>
					<th>Subject</th>
					<td>{$enqMail.mail_subject}</td>
					</tr>
					<tr>
					<th>Message</th>
					<td>{$enqMail.message}</td>
					</tr>
					{if $enqMail.mail_attachments1 neq ""}
					<tr>
					<th>Attachment 1</th>
					<td><a href="./images/mail/{$enqMail.mail_attachments1}" target="_blank">{$enqMail.mail_attachments1}</a> </td>
					</tr>
					{/if}
					{if $enqMail.mail_attachments2 neq ""}
					<tr>
					<th>Attachment 2</th>
					<td><a href="./images/mail/{$enqMail.mail_attachments2}" target="_blank">{$enqMail.mail_attachments2}</a></td>
					</tr>
					{/if}
					{if $enqMail.mail_attachments3 neq ""}
					<tr>
					<th>Attachment 3</th>
					<td><a href="./images/mail/{$enqMail.mail_attachments3}" target="_blank">{$enqMail.mail_attachments3}</a></td>
					</tr>
					{/if}
					</table>
					{/foreach}


						</form>

					</div>
					</div>
					</div>
					</div>
					</div>
					  </body>
