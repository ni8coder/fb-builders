
<?php if(isset($data)){?>
       <div class="table-responsive">
          <div id="dataTable1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="dataTable1_length"></div></div>
		  <div class="col-sm-6"><div id="dataTable1_filter" class="dataTables_filter"><label>Search:<input class="form-control input-sm" placeholder="" aria-controls="dataTable1" type="search"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="dataTable1" class="table table-bordered table-striped-col dataTable" role="grid" aria-describedby="dataTable1_info">
            <thead>
              <tr role="row">
			  <th class="sorting_asc" tabindex="0" aria-controls="dataTable1" rowspan="1" colspan="1" style="width: 232px;" aria-sort="ascending" aria-label="Date: activate to sort column descending">Created Date</th>
			  <th class="sorting" tabindex="0" aria-controls="dataTable1" rowspan="1" colspan="1" style="width: 202px;" aria-label="Amount: activate to sort column ascending">Amount</th>
			  <th class="sorting" tabindex="0" aria-controls="dataTable1" rowspan="1" colspan="1" style="width: 202px;" aria-label="Amount: activate to sort column ascending">Expense By</th>
			  <th class="sorting" tabindex="0" aria-controls="dataTable1" rowspan="1" colspan="1" style="width: 259px;" aria-label="Source: activate to sort column ascending">Description</th>
			  <th class="sorting" tabindex="0" aria-controls="dataTable1" rowspan="1" colspan="1" style="width: 233px;" aria-label="Action: activate to sort column ascending">Action</th></tr>
            </thead>
<?php foreach ($data as $agent) {?>			
            <tbody>        
      <tr role="row" class="odd">
                <td class="sorting_1"><?php echo $agent->createddate;?></td>
                <td><?php echo $agent->amount; ?></td>
				<td><?php echo $agent->expense_by; ?></td>
                <td><?php echo $agent->description; ?></td>
                <td>
                  <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                      Action <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      
                       <li><a class="editMe" href="<?php echo base_url(); ?>expense/edit_expense/<?php echo $agent->id; ?>">Edit</a></li>
					  <li><a class="editMe" href="<?php echo base_url(); ?>expense/delete_expense/<?php echo $agent->id; ?>">Delete</a></li>
                     
                      
                    </ul>
                  </div><!-- btn-group -->
                </td>
              </tr>
<?php } ?></tbody>
<?php } else echo "No data";?>