

      <ol class="breadcrumb breadcrumb-quirk">
        <li><a href="index.html"><i class="fa fa-home mr5"></i> Home</a></li>
        <li><a href="buttons.html">UI Elements</a></li>
        <li class="active">Sliders</li>
      </ol>

      <div class="row">
        <div class="col-md-6">
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">Basic Slider</h4>
              <p>The basic slider is horizontal and has a single handle that can be moved with the mouse or by using the arrow keys.</p>
            </div><!-- panel-heading -->
            <div class="panel-body">
              <div id="slider" class="mb20"></div>
              <div id="slider-primary" class="slider-primary mb20"></div>
              <div id="slider-success" class="slider-success mb20"></div>
              <div id="slider-warning" class="slider-warning mb20"></div>
              <div id="slider-danger" class="slider-danger mb20"></div>
              <div id="slider-info" class="slider-info"></div>
            </div><!-- panel-body -->
          </div><!-- panel -->
        </div><!-- col-md-6 -->

        <div class="col-md-6">
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">Range Slider</h4>
              <p>Set the range using two drag handles. Space between the handles is filled with background color to indicate those values are selected.</p>
            </div><!-- panel-heading -->
            <div class="panel-body">
              <div id="slider-range" class="slider-primary mb20"></div>
              <div id="slider-range-success" class="slider-success mb20"></div>
              <div id="slider-range-danger" class="slider-danger mb20"></div>
              <div id="slider-range-warning" class="slider-warning mb20"></div>
              <div id="slider-range-info" class="slider-info"></div>
            </div><!-- panel-body -->
          </div><!-- panel -->
        </div><!-- col-md-6 -->
      </div><!-- row -->

      <div class="row">
        <div class="col-md-6">
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">Range With Fixed Maximum</h4>
              <p>Fix the maximum value of the range slider so that the user can only select a minimum. Set the <code>range</code> option to <code>max</code>.</p>
            </div><!-- panel-heading -->
            <div class="panel-body">
              <div id="slider-max"></div>
            </div><!-- panel-body -->
          </div><!-- panel -->
        </div><!-- col-md-6 -->

        <div class="col-md-6">
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">Range With Fixed Minimum</h4>
              <p>Fix the minimum value of the range slider so that the user can only select a maximum. Set the <code>range</code> option to <code>min</code>.</p>
            </div><!-- panel-heading -->
            <div class="panel-body">
              <div id="slider-min"></div>
            </div><!-- panel-body -->
          </div><!-- panel -->
        </div><!-- col-md-6 -->
      </div><!-- row -->

      <div class="row">
        <div class="col-md-6">
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">Vertical Slider</h4>
              <p>Change the <code>orientation</code> of the slider to <code>vertical</code>. Assign a height value via <code>.height()</code> or by setting the height through CSS, and set the orientation option to <code>vertical</code></p>
            </div><!-- panel-heading -->
            <div class="panel-body">
              <div id="vslider" class="mr30" style="height: 200px;"></div>
              <div id="vslider-primary" class="slider-primary mr30" style="height: 200px;"></div>
              <div id="vslider-success" class="slider-success mr30" style="height: 200px;"></div>
              <div id="vslider-warning" class="slider-warning mr30" style="height: 200px;"></div>
              <div id="vslider-danger" class="slider-danger mr30" style="height: 200px;"></div>
              <div id="vslider-info" class="slider-info" style="height: 200px;"></div>
            </div><!-- panel-body -->
          </div><!-- panel -->
        </div><!-- col-md-6 -->

        <div class="col-md-6">
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">Vertical Range Slider</h4>
              <p>Change the <code>orientation</code> of the range slider to <code>vertical</code>. Assign a height value via <code>.height()</code> or by setting the height through CSS, and set the orientation option to <code>vertical</code></p>
            </div><!-- panel-heading -->
            <div class="panel-body">
              <div id="vslider-range" class="slider-primary mr30" style="height: 200px;"></div>
              <div id="vslider-range-success" class="slider-success mr30" style="height: 200px;"></div>
              <div id="vslider-range-danger" class="slider-danger mr30" style="height: 200px;"></div>
              <div id="vslider-range-warning" class="slider-warning mr30" style="height: 200px;"></div>
              <div id="vslider-range-info" class="slider-info" style="height: 200px;"></div>
            </div><!-- panel-body -->
          </div><!-- panel -->
        </div><!-- col-md-6 -->
      </div><!-- row -->

<script src="<?php echo base_url(); ?>includes/admin/lib/jquery/jquery.js"></script>
<script src="<?php echo base_url(); ?>includes/admin/lib/jquery-ui/jquery-ui.js"></script>
<script src="<?php echo base_url(); ?>includes/admin/lib/jqueryui-touch-punch/jquery.ui.touch-punch.js"></script>
<script src="<?php echo base_url(); ?>includes/admin/lib/bootstrap/js/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>includes/admin/lib/jquery-toggles/toggles.js"></script>

<script src="<?php echo base_url(); ?>includes/admin/js/quirk.js"></script>

<script>
  $(document).ready(function() {

    'use strict';

    // Basic Slider
    $('#slider').slider({
      range: "min",
      max: 100,
      value: 50
    });

    // Basic Slider: Primary
    $('#slider-primary').slider({
      range: "min",
      max: 100,
      value: 43
    });

    // Basic Slider: Success
    $('#slider-success').slider({
      range: "min",
      max: 100,
      value: 60
    });

    // Basic Slider: Warning
    $('#slider-warning').slider({
      range: "min",
      max: 100,
      value: 37
    });

    // Basic Slider: Danger
    $('#slider-danger').slider({
      range: "min",
      max: 100,
      value: 45
    });

    // Basic Slider: Info
    $('#slider-info').slider({
      range: "min",
      max: 100,
      value: 55
    });

    // Range Slider
    $('#slider-range').slider({
      range: true,
      max: 100,
      values: [25,75]
    });

    // Range Slider: Success
    $('#slider-range-success').slider({
      range: true,
      max: 100,
      values: [35,65]
    });

    // Range Slider: Danger
    $('#slider-range-danger').slider({
      range: true,
      max: 100,
      values: [25,75]
    });

    // Range Slider: Warning
    $('#slider-range-warning').slider({
      range: true,
      max: 100,
      values: [40,60]
    });

    // Range Slider: Info
    $('#slider-range-info').slider({
      range: true,
      max: 100,
      values: [20,80]
    });

    // Range Slider Maximum
    $('#slider-max').slider({
      range: 'max',
      max: 100,
      value: 50
    });

    // Range Slider Maximum
    $('#slider-min').slider({
      range: 'min',
      max: 100,
      value: 50
    });

    // Vertical Slider
    $('#vslider').slider({
      orientation: 'vertical',
      range: "min",
      max: 100,
      value: 50
    });

    // Vertical Slider: Primary
    $('#vslider-primary').slider({
      orientation: 'vertical',
      range: "min",
      max: 100,
      value: 43
    });

    // Vertical Slider: Success
    $('#vslider-success').slider({
      orientation: 'vertical',
      range: "min",
      max: 100,
      value: 60
    });

    // Vertical Slider: Warning
    $('#vslider-warning').slider({
      orientation: 'vertical',
      range: "min",
      max: 100,
      value: 37
    });

    // Vertical Slider: Danger
    $('#vslider-danger').slider({
      orientation: 'vertical',
      range: "min",
      max: 100,
      value: 45
    });

    // Vertical Slider: Info
    $('#vslider-info').slider({
      orientation: 'vertical',
      range: "min",
      max: 100,
      value: 55
    });

    // Range Vertical Slider
    $('#vslider-range').slider({
      orientation: 'vertical',
      range: true,
      max: 100,
      values: [25,75]
    });

    // Range Vertical Slider: Success
    $('#vslider-range-success').slider({
      orientation: 'vertical',
      range: true,
      max: 100,
      values: [35,65]
    });

    // Range Vertical Slider: Danger
    $('#vslider-range-danger').slider({
      orientation: 'vertical',
      range: true,
      max: 100,
      values: [25,75]
    });

    // Range Vertical Slider: Warning
    $('#vslider-range-warning').slider({
      orientation: 'vertical',
      range: true,
      max: 100,
      values: [40,60]
    });

    // Range Vertical Slider: Info
    $('#vslider-range-info').slider({
      orientation: 'vertical',
      range: true,
      max: 100,
      values: [20,80]
    });


  });
</script>