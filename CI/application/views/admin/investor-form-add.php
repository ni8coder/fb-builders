<div id="container" class="container">
	<div class="row">
		<div class="col-md-12 ">
			<h2 class="text-center">Add a New Investor</h2>
			<br><br>
		<form id="basicForm" action="validate" method="post" class="form-horizontal" pmbx_context="656015A6-0CC3-416A-8981-2ACD5F993540">
               
            <label class="col-md-3 control-label">Name<span class="text-danger">*</span></label>
			<div class="col-md-9">
                <input type="text" name="name" value="" class="form-control" placeholder="" required="" pmbx_context="7C7F34F0-48DC-4F9A-B8E4-907A5C49B032">
            </div>
            <label class="col-md-3 control-label">Email<span class="text-danger">*</span></label>
			<div class="col-md-9">
                <input type="text" name="email" value="" class="form-control" placeholder="" required="" pmbx_context="7C7F34F0-48DC-4F9A-B8E4-907A5C49B032">
            </div>
            <label class="col-md-3 control-label">Username<span class="text-danger">*</span></label>
			<div class="col-md-9">
                <input type="text" name="username" value="" class="form-control" placeholder="" required="" pmbx_context="7C7F34F0-48DC-4F9A-B8E4-907A5C49B032">
            </div>
             <label class="col-md-3 control-label">Password<span class="text-danger">*</span></label>
			<div class="col-md-9">
                <input type="password" name="password" value="" class="form-control" placeholder="" required="" pmbx_context="7C7F34F0-48DC-4F9A-B8E4-907A5C49B032">
            </div>
             <label class="col-md-3 control-label">Address<span class="text-danger">*</span></label>
			<div class="col-md-9">
                <input type="text" name="address" value="" class="form-control" placeholder="" required="" pmbx_context="7C7F34F0-48DC-4F9A-B8E4-907A5C49B032">
            </div>
             <label class="col-md-3 control-label">Date of Birth<span class="text-danger">*</span></label>
			<div class="col-md-9">
                <input type="date" name="dob" value="" class="form-control" placeholder="" required="" pmbx_context="7C7F34F0-48DC-4F9A-B8E4-907A5C49B032">
            </div>
             <label class="col-md-3 control-label">CNIC<span class="text-danger">*</span></label>
			<div class="col-md-9">
                <input type="text" name="cnic" value="" class="form-control" placeholder="" required="" pmbx_context="7C7F34F0-48DC-4F9A-B8E4-907A5C49B032">
            </div>
             <label class="col-md-3 control-label">Phone No<span class="text-danger">*</span></label>
			<div class="col-md-9">
                <input type="text" name="phoneno" value="" class="form-control" placeholder="" required="" pmbx_context="7C7F34F0-48DC-4F9A-B8E4-907A5C49B032">
            </div>
            <div class="col-md-9 col-md-offset-3">
	            <button class="btn btn-success btn-quirk btn-wide mr5">Submit</button>
	            <button type="reset" class="btn btn-quirk btn-wide btn-default">Reset</button>
	        </div>
			<?php echo validation_errors('<label class="col-md-3 control-label"><span class="text-danger"></span></label>'); ?>
			
			
		  </form>
		</div>
	</div>
</div>