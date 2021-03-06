

      <ol class="breadcrumb breadcrumb-quirk">
        <li><a href="index.html"><i class="fa fa-home mr5"></i> Home</a></li>
        <li><a href="buttons.html">UI Elements</a></li>
        <li class="active">Extras</li>
      </ol>

      <div class="row">
        <div class="col-md-6">
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">Pagination</h4>
              <p>Provide pagination links for your site or app with the multi-page pagination component.</p>
            </div><!-- panel-heading -->
            <div class="panel-body nopaddingtop">
              <hr>
              <h5 class="panel-title mb5">Default Pagination</h5>
              <p>Simple pagination inspired by Rdio, great for apps and search results.</p>
              <ul class="pagination">
                <li class="disabled"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
              </ul>

              <div class="mb20"></div>

              <h5 class="panel-title mb5">Bordered Pagination</h5>
              <p>Links are bordered and split to each other by adding a class of <code>.pagination-bordered</code></p>
              <ul class="pagination pagination-bordered">
                <li class="disabled"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
              </ul>

              <div class="mb20"></div>

              <h5 class="panel-title mb5">Sizing</h5>
              <p>Add <code>.pagination-lg</code> or <code>.pagination-sm</code> for additional sizes.</p>
              <ul class="pagination pagination-lg mb5">
                <li class="disabled"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
              </ul>

            </div>
          </div><!-- panel -->
        </div><!-- col-md-6 -->

        <div class="col-md-6">
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">Pager</h4>
              <p>Quick previous and next links for simple pagination with light markup and styles.</p>
            </div><!-- panel-heading -->
            <div class="panel-body nopaddingtop">
              <hr>
              <h5 class="panel-title mb5">Default</h5>
              <p class="mb20">By default, the pager centers links.</p>
              <ul class="pager">
                <li><a href="#"><i class="fa fa-angle-left"></i> Previous</a></li>
                <li><a href="#">Next <i class="fa fa-angle-right"></i></a></li>
              </ul>

              <div class="clearfix mb20"></div>

              <h5 class="panel-title mb5">Aligned Links</h5>
              <p class="mb20">Alternatively, you can align each link to the sides:</p>
              <ul class="pager">
                <li class="previous"><a href="#">&larr; Older</a></li>
                <li class="next"><a href="#">Newer &rarr;</a></li>
              </ul>

              <div class="clearfix mb20"></div>

              <h5 class="panel-title mb5">Optional Disabled State</h5>
              <p class="mb20">Pager links also use the general <code>.disabled</code> utility class from the pagination.</p>
              <ul class="pager">
                <li class="previous disabled"><a href="#">&larr; Older</a></li>
                <li class="next"><a href="#">Newer &rarr;</a></li>
              </ul>

            </div><!-- panel-body -->
          </div><!-- panel -->
        </div><!-- col-md-6 -->

      </div><!-- row -->

      <div class="row">
        <div class="col-md-6">
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">Progress Bars</h4>
              <p>Provide up-to-date feedback on the progress of a workflow or action with simple yet flexible progress bars.</p>
            </div><!-- panel-heading -->
            <div class="panel-body nopaddingtop">
              <hr>
              <h5 class="panel-title mb5">Basic Progress</h5>
              <p class="mb20">Default progress bar. Progress bars use some of the same button and alert classes for consistent styles.</p>
              <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                  <span class="sr-only">40% Complete (success)</span>
                </div>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                  <span class="sr-only">20% Complete</span>
                </div>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                  <span class="sr-only">60% Complete (warning)</span>
                </div>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                  <span class="sr-only">80% Complete</span>
                </div>
              </div>

              <div class="mb20"></div><br>

              <h5 class="panel-title">Striped Progress</h5>
              <p class="mb20">Uses a gradient to create a striped effect. Not available in IE8</p>
              <div class="progress progress-striped">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                  <span class="sr-only">40% Complete (success)</span>
                </div>
              </div>

              <div class="mb20"></div><br>

              <h5 class="panel-title mb5">Animated Progress</h5>
              <p class="mb20">Add <code>.active</code> to <code>.progress-striped</code> to animate the stripes right to left. Not available in all versions of IE.</p>
              <div class="progress progress-striped active">
                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                  <span class="sr-only">40% Complete (success)</span>
                </div>
              </div>

            </div><!-- panel-body -->
          </div><!-- panel -->

        </div><!-- col-md-6 -->

        <div class="col-md-6">
            <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">Labels</h4>
              <p>Add any of the below mentioned modifier classes to change the appearance of a label.</p>
            </div><!-- panel-heading -->
            <div class="panel-body">

              <span class="label label-default">Default</span>
              <span class="label label-primary">Primary</span>
              <span class="label label-success">Success</span>
              <span class="label label-info">Info</span>
              <span class="label label-warning">Warning</span>
              <span class="label label-danger">Danger</span>

              <hr>

              <h4 class="panel-title mb5">Badges</h4>
              <p class="mb20">Easily highlight new or unread items by adding below to links, navs, and more.</p>
              <span class="badge">42</span>
              <span class="badge badge-primary">10</span>
              <span class="badge badge-success">28</span>
              <span class="badge badge-warning">90</span>
              <span class="badge badge-danger">33</span>
              <span class="badge badge-info">21</span>


              <hr>

              <h5 class="panel-title mb5">Badge Example</h5>
              <p class="mb20">Adapts to active nav states.</p>
              <ul class="nav nav-pills nav-stacked width200">
                <li class="active">
                  <a href="#">
                    <span class="badge pull-right">42</span>
                    Home
                  </a>
                </li>
                <li><a href="#">Profile</a></li>
                <li>
                  <a href="#">
                    <span class="badge pull-right">3</span>
                    Messages
                  </a>
                </li>
              </ul>

            </div>
          </div><!-- panel -->

        </div><!-- col-md-6 -->

      </div>
