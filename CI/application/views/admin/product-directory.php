
<!-- END Modal -->

      <ol class="breadcrumb breadcrumb-quirk">
        <li><a href="index.html"><i class="fa fa-home mr5"></i> Home</a></li>
        <li><a href="basic-tables.html">Products</a></li>
      </ol>
      <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 people-list">
            <div class="people-options clearfix">
              <div class="btn-toolbar pull-left">
                <a href="<?php echo base_url(); ?>product_management/product/index"><button type="button" class="btn btn-success btn-quirk">Add New Product</button></a>
              </div>

              <div class="btn-group pull-right people-pager">
              <?php //echo $links;?>
                <!-- <button type="button" class="btn btn-default"><i class="fa fa-chevron-left"></i></button>
                <button type="button" class="btn btn-default"><i class="fa fa-chevron-right"></i></button> -->
              </div>
              <span class="people-count pull-right">Showing <strong>1-10</strong> of <strong>34,404</strong> users</span>
            </div><!-- people-options -->
          </div>
        </div>

      <div class="panel">
        <div class="panel-body">
          <div class="table-responsive">
            <table id="dataTable1" class="table table-bordered table-striped-col">
              <thead>
                <tr>
                  <th>Product Name</th>
                  <th>Project Name</th>
                  <th>Description</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <?php if(isset($data))
              {
                foreach ($data as $product) {?>
              <tbody>
                <tr>
                  <td><?php echo $product->product_name ?></td>
                  <td><?php echo $product->project_name ?></td>
                  <td><?php echo $product->description ?></td>
                  <td><?php echo $product->createddate ?></td>
                  <td>
                    <div class="btn-group">
                     <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"> Action <span class="caret"></span></button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo base_url(); ?>product_management/product/showDetail/<?php echo $product->id ?>" id="" >Details</a></li>
                        <li><a class="editMe" href="#"  data-toggle="modal" data-target="#editModal" id=""  >Edit</a></li>
                        <li><a href="#" id="" >Delete</a></li>
                      </ul>
                  </div><!-- btn-group -->
                  </td>
                </tr>
              </tbody>
              <?php }} ?>
            </table>
          </div>
        </div>
      </div><!-- panel -->



<!-- <script src="js/quirk.js"></script>
<script>
$(document).ready(function() {

  'use strict';

  $('#dataTable1').DataTable();

  var exRowTable = $('#exRowTable').DataTable({
    responsive: true,
    'fnDrawCallback': function(oSettings) {
      $('#exRowTable_paginate ul').addClass('pagination-active-success');
    },
    'ajax': 'ajax/objects.txt',
    'columns': [{
      'class': 'details-control',
      'orderable': false,
      'data': null,
      'defaultContent': ''
    },
    { 'data': 'name' },
    { 'data': 'position' },
    { 'data': 'office' },
    { 'data': 'start_date'},
    { 'data': 'salary' }
    ],
    'order': [[1, 'asc']]
  });

  // Add event listener for opening and closing details
  $('#exRowTable tbody').on('click', 'td.details-control', function () {
    var tr = $(this).closest('tr');
    var row = exRowTable.row( tr );

    if ( row.child.isShown() ) {
      // This row is already open - close it
      row.child.hide();
      tr.removeClass('shown');
    } else {
      // Open this row
      row.child( format(row.data()) ).show();
      tr.addClass('shown');
    }
  });

  function format (d) {
    // `d` is the original data object for the row
    return '<h4>'+d.name+'<small>'+d.position+'</small></h4>'+
    '<p class="nomargin">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>';
  }

  // Select2
  $('select').select2({ minimumResultsForSearch: Infinity });

});
</script> -->