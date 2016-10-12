	   <div id="container" class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h2 class="text-center">Edit Agent</h2>
			<br><br>
		<form method="post" action="<?php echo base_url(); ?>user_management/agent/update_data/<?php echo $edit_data->id; ?>" class="form-horizontal" pmbx_context="656015A6-0CC3-416A-8981-2ACD5F993540">
			
               
            <label class="col-sm-3 control-label">Name<span class="text-danger">*</span></label>
			<div class="col-sm-8">
                <input type="text" name="name" value="<?php echo $edit_data->name; ?>" class="form-control" placeholder="" required="" pmbx_context="7C7F34F0-48DC-4F9A-B8E4-907A5C49B032">
            </div>
            <label class="col-sm-3 control-label">Email<span class="text-danger">*</span></label>
			<div class="col-sm-8">
                <input type="text" name="email" value="<?php echo $edit_data->email; ?>" class="form-control" placeholder="" required="" pmbx_context="7C7F34F0-48DC-4F9A-B8E4-907A5C49B032">
            </div>
            <label class="col-sm-3 control-label">Username<span class="text-danger">*</span></label>
			<div class="col-sm-8">
                <input type="text" name="username" value="<?php echo $edit_data->username; ?>" class="form-control" placeholder="" required="" pmbx_context="7C7F34F0-48DC-4F9A-B8E4-907A5C49B032">
            </div>
             <label class="col-sm-3 control-label">Password<span class="text-danger">*</span></label>
			<div class="col-sm-8">
                <input type="password" name="password" value="<?php echo $edit_data->password; ?>" class="form-control" placeholder="" required="" pmbx_context="7C7F34F0-48DC-4F9A-B8E4-907A5C49B032">
            </div>
             <label class="col-sm-3 control-label">Address<span class="text-danger">*</span></label>
			<div class="col-sm-8">
                <input type="text" name="address" value="<?php echo $edit_data->address ?>" class="form-control" placeholder="" required="" pmbx_context="7C7F34F0-48DC-4F9A-B8E4-907A5C49B032">
            </div>
             <label class="col-sm-3 control-label">Date of Birth<span class="text-danger">*</span></label>
			<div class="col-sm-8">
                <input type="date" name="dob" value="<?php echo $edit_data->dob; ?>" class="form-control" placeholder="" required="" pmbx_context="7C7F34F0-48DC-4F9A-B8E4-907A5C49B032">
            </div>
             <label class="col-sm-3 control-label">CNIC<span class="text-danger">*</span></label>
			<div class="col-sm-8">
                <input type="text" name="cnic" value="<?php echo $edit_data->cnic; ?>" class="form-control" placeholder="" required="" pmbx_context="7C7F34F0-48DC-4F9A-B8E4-907A5C49B032">
            </div>
             <label class="col-sm-3 control-label">Phone No<span class="text-danger">*</span></label>
			<div class="col-sm-8">
                <input type="text" name="phoneno" value="<?php echo $edit_data->phoneno; ?>" class="form-control" placeholder="" required="" pmbx_context="7C7F34F0-48DC-4F9A-B8E4-907A5C49B032">
            </div>
	   
            <div class="col-sm-9 col-sm-offset-3">
	            <button class="btn btn-success btn-quirk btn-wide mr5">Submit</button>
	            <button type="reset" class="btn btn-quirk btn-wide btn-default">Reset</button>
	        </div>			
			
		  </form>
		</div>
	</div>
</div>