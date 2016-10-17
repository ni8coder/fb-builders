<?php if(isset($data)){?>
       <div class="table-responsive">
          <div id="dataTable1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="dataTable1_length"><label>Show <select name="dataTable1_length" aria-controls="dataTable1" class="form-control input-sm select2-hidden-accessible" tabindex="-1" aria-hidden="true"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 61px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-dataTable1_length-s5-container"><span class="select2-selection__rendered" id="select2-dataTable1_length-s5-container" title="10">10</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> entries</label></div></div><div class="col-sm-6"><div id="dataTable1_filter" class="dataTables_filter"><label>Search:<input class="form-control input-sm" placeholder="" aria-controls="dataTable1" type="search"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="dataTable1" class="table table-bordered table-striped-col dataTable" role="grid" aria-describedby="dataTable1_info">
            <thead>
              <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="dataTable1" rowspan="1" colspan="1" style="width: 232px;" aria-sort="ascending" aria-label="Date: activate to sort column descending">Created Date</th>
			  <th class="sorting" tabindex="0" aria-controls="dataTable1" rowspan="1" colspan="1" style="width: 202px;" aria-label="Amount: activate to sort column ascending">Amount</th>
			  <th class="sorting" tabindex="0" aria-controls="dataTable1" rowspan="1" colspan="1" style="width: 259px;" aria-label="Source: activate to sort column ascending">Description</th>
			  <th class="sorting" tabindex="0" aria-controls="dataTable1" rowspan="1" colspan="1" style="width: 233px;" aria-label="Action: activate to sort column ascending">Customers</th>
			  <th class="sorting" tabindex="0" aria-controls="dataTable1" rowspan="1" colspan="1" style="width: 233px;" aria-label="Action: activate to sort column ascending">Agents</th>
			  <th class="sorting" tabindex="0" aria-controls="dataTable1" rowspan="1" colspan="1" style="width: 233px;" aria-label="Action: activate to sort column ascending">Project</th>
			  <th class="sorting" tabindex="0" aria-controls="dataTable1" rowspan="1" colspan="1" style="width: 233px;" aria-label="Action: activate to sort column ascending">Action</th>
			  </tr>
            </thead>
<?php foreach ($data as $agent) {?>			
            <tbody>        
      <tr role="row" class="odd">
                <td class="sorting_1"><?php echo $agent->createddate;?></td>
                <td><?php echo $agent->amount; ?></td>
                <td><?php echo $agent->description; ?></td>
				<td><?php echo $agent->customer_name; ?></td>
				<td><?php echo $agent->agent_name; ?></td>
				<td><?php echo $agent->project_name; ?></td>
                <td>
                  <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                      Action <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      
                      <li><a class="editMe" href="<?php echo base_url(); ?>income/edit_income/<?php echo $agent->id; ?>">Edit</a></li>
					  <li><a class="editMe" href="<?php echo base_url(); ?>income/delete_income/<?php echo $agent->id; ?>">Delete</a></li>
                      </ul>
                  </div><!-- btn-group -->
                </td>
              </tr>
<?php } ?></tbody>
<?php } else echo "No data";?>