
      <ol class="breadcrumb breadcrumb-quirk">
        <li><a href="index.html"><i class="fa fa-home mr5"></i> Home</a></li>
        <li><a href="general-forms.html">Forms</a></li>
        <li class="active">General Forms</li>
      </ol>

      <div class="row">
        <div class="col-sm-6">
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">Input Fields</h4>
              <p>Individual form controls automatically receive some global styling with <code>.form-control</code> class that are set to 100% width by default.</p>
            </div>
            <div class="panel-body">
              <div class="form-group">
                <input type="text" placeholder="Default Input" class="form-control" />
              </div>

              <div class="form-group">
                <input type="text" placeholder="Disabled Input" class="form-control" disabled />
              </div>

              <div class="form-group">
                <input type="text" placeholder="Read-only Input" class="form-control" readonly />
              </div>

              <div class="form-group">
                <input type="text" placeholder="Help Text" class="form-control">
                <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
              </div>

              <div class="form-group">
                <input type="text" placeholder="Input with tooltip (Hover me)" title="Tooltip goes here" data-toggle="tooltip" data-trigger="hover" class="form-control tooltips" />
              </div>

              <div class="form-group nomargin">
                <input type="text" placeholder="Input with popover (Click Me)" class="form-control popovers" data-toggle="popover" data-placement="top" data-original-title="The Title" data-content="Content goes here..." data-trigger="click" />
              </div>

            </div>
          </div><!-- panel -->

          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">Input Sizing</h4>
              <p>Create taller or shorter form controls that match button sizes.</p>
            </div>
            <div class="panel-body">
              <div class="form-group">
                <input class="form-control input-lg" type="text" placeholder="Large Input (.input-lg)">
              </div>
              <div class="form-group">
                <input class="form-control" type="text" placeholder="Default Size">
              </div>
              <div class="form-group nomargin">
                <input class="form-control input-sm" type="text" placeholder="Small Input (.input-sm)">
              </div>
            </div>
          </div>

          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">Input Groups</h4>
              <p>Extend form controls by adding text or buttons before, after, or on both sides of any text-based input.</p>
            </div>
            <div class="panel-body">
              <div class="input-group mb15">
                <span class="input-group-addon">@</span>
                <input type="text" placeholder="Username" class="form-control" />
              </div>

              <div class="input-group mb15">
                <input type="text" class="form-control" />
                <span class="input-group-addon">.00</span>
              </div>

              <div class="input-group">
                <span class="input-group-addon">$</span>
                <input type="text" class="form-control" />
                <span class="input-group-addon">.00</span>
              </div>
            </div>
          </div>

          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">Select2 Boxes</h4>
              <p>Select2 gives you a customizable select box with support for searching, tagging, remote data sets, infinite scrolling, and many other highly used options. </p>
            </div>
            <div class="panel-body">
              <div class="form-group">
                <select id="select1" class="form-control" style="width: 100%" data-placeholder="Basic Select2 Box">
                  <option value="">&nbsp;</option>
                  <option value="United States">United States</option>
                  <option value="United Kingdom">United Kingdom</option>
                  <option value="Japan">Japan</option>
                  <option value="China">China</option>
                  <option value="Norway">Norway</option>
                  <option value="Australia">Australia</option>
                  <option value="South Korea">South Korea</option>
                  <option value="New Zealand">New Zealand</option>
                  <option value="Philippines">Philippines</option>
                </select>
              </div>

              <div class="form-group">
                <select id="select2" class="form-control" style="width: 100%" data-placeholder="Multiple Select2 Box" multiple>
                  <option value="United States">United States</option>
                  <option value="United Kingdom">United Kingdom</option>
                  <option value="Japan">Japan</option>
                  <option value="China">China</option>
                  <option value="Norway">Norway</option>
                  <option value="Australia">Australia</option>
                  <option value="South Korea">South Korea</option>
                  <option value="New Zealand">New Zealand</option>
                  <option value="Philippines">Philippines</option>
                </select>
              </div>

              <div class="form-group">
                <select id="select3" class="form-control" style="width: 100%" data-placeholder="Disabled Select2 Box" disabled>
                  <option value="">&nbsp;</option>
                  <option value="United States">United States</option>
                  <option value="United Kingdom">United Kingdom</option>
                  <option value="Japan">Japan</option>
                  <option value="China">China</option>
                  <option value="Norway">Norway</option>
                  <option value="Australia">Australia</option>
                  <option value="South Korea">South Korea</option>
                  <option value="New Zealand">New Zealand</option>
                  <option value="Philippines">Philippines</option>
                </select>
              </div>

              <hr class="invisible">

              <h4 class="panel-title mb10">Limit the number of selections</h4>
              <p class="mb20">Below is declared with the multiple attribute with <code>maxSelectionLength</code> in the select2 options.</p>

              <div class="form-group">
                <select id="select4" class="form-control" style="width: 100%" data-placeholder="Max Item 2" multiple>
                  <option value="">&nbsp;</option>
                  <option value="United States">United States</option>
                  <option value="United Kingdom">United Kingdom</option>
                  <option value="Japan">Japan</option>
                  <option value="China">China</option>
                  <option value="Norway">Norway</option>
                  <option value="Australia">Australia</option>
                  <option value="South Korea">South Korea</option>
                  <option value="New Zealand">New Zealand</option>
                  <option value="Philippines">Philippines</option>
                </select>
              </div>

              <hr class="invisible">

              <h4 class="panel-title mb10">Hiding The Search Box</h4>
              <p class="mb20">Select2 allows you to hide the search box depending on the number of options which are displayed by using the value Infinity to the search box.</p>

              <div class="form-group">
                <select id="select5" class="form-control" style="width: 100%" data-placeholder="Choose Country...">
                  <option value="">&nbsp;</option>
                  <option value="United States">United States</option>
                  <option value="United Kingdom">United Kingdom</option>
                  <option value="Japan">Japan</option>
                  <option value="China">China</option>
                  <option value="Norway">Norway</option>
                  <option value="Australia">Australia</option>
                  <option value="South Korea">South Korea</option>
                  <option value="New Zealand">New Zealand</option>
                  <option value="Philippines">Philippines</option>
                </select>
              </div>

              <hr class="invisible">

              <h4 class="panel-title mb10">Tagging Support</h4>
              <p class="mb20">Select2 can be used to quickly set up fields used for tagging.</p>

              <div class="form-group nomargin">
                <select id="select6" class="form-control" style="width: 100%" data-placeholder="Choose Country..." multiple>
                  <option value="United States" selected>United States</option>
                  <option value="United Kingdom">United Kingdom</option>
                  <option value="Japan" selected>Japan</option>
                  <option value="China">China</option>
                  <option value="Norway">Norway</option>
                  <option value="Australia">Australia</option>
                  <option value="South Korea">South Korea</option>
                  <option value="New Zealand">New Zealand</option>
                  <option value="Philippines">Philippines</option>
                </select>
              </div>

            </div>
          </div><!-- panel -->

          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">Color Picker</h4>
              <p>A simple component to select color in the same way you select color in Adobe Photoshop.</p>
            </div>
            <div class="panel-body">

              <div class="row demo-colorpicker">
                <div class="col-xs-12 col-sm-6 col-md-3">
                  <label>Basic Colorpicker:</label>
                  <input type="text" id="colorpicker1" class="form-control" placeholder="#FFFFFF">
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                  <label>Large Colorpicker:</label>
                  <input type="text" id="colorpicker2" class="form-control" placeholder="#FFFFFF">
                </div>
              </div>

            </div>
          </div><!-- panel -->

          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">Date Picker</h4>
              <p>The datepicker is tied to a standard form input field. Click on the input to open an interactive calendar in a small overlay. If a date is chosen, feedback is shown as the input's value.</p>
            </div>
            <div class="panel-body">
              <label>Default Functionality</label>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
              </div>

              <div class="mb20 invisible"></div>

              <label>Set the numberOfMonths option to an integer of 2 or more to show multiple months in a single datepicker.</label>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-multiple">
                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
              </div>

              <div class="mb20 invisible"></div>

              <label>Display the datepicker embedded in the page instead of in an overlay.</label>
              <div class="input-group">
                <div id="datepicker-inline"></div>
              </div>

            </div><!-- panel-body -->
          </div><!-- panel -->

        </div><!-- col-sm-6 -->

        <!-- ####################################################### -->

        <div class="col-sm-6">
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">Width Sizing</h4>
              <p>Set widths by wrapping inputs using column sizes.</p>
            </div>
            <div class="panel-body">
              <div class="row mb20">
                <div class="col-sm-5">
                  <input type="text" placeholder=".col-sm-5" class="form-control">
                </div>
                <div class="col-sm-7">
                  <input type="text" placeholder=".col-sm-7" class="form-control">
                </div>
              </div>

              <div class="row">
                <div class="col-sm-8">
                  <input type="text" placeholder=".col-sm-8" class="form-control">
                </div>
                <div class="col-sm-4">
                  <input type="text" placeholder=".col-sm-4" class="form-control">
                </div>
              </div>
            </div>
          </div>

          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">Validation States</h4>
              <p>Includes validation styles for error, warning, and success states on form controls.</p>
            </div>
            <div class="panel-body">
              <div class="form-group has-success">
                <input type="text" class="form-control" placeholder="Input with success">
              </div>
              <div class="form-group has-warning">
                <input type="text" class="form-control" placeholder="Input with warning">
              </div>
              <div class="form-group has-error nomargin">
                <input type="text" class="form-control" placeholder="Input with error">
              </div>
            </div>
          </div>

          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">Textarea</h4>
              <p>Form control which supports multiple lines of text. Change rows attribute as necessary.</p>
            </div>
            <div class="panel-body">
              <div class="form-group">
                <textarea class="form-control" rows="2" placeholder="Basic Textarea"></textarea>
              </div>
              <div class="form-group nomargin">
                <textarea id="autosize" class="form-control" rows="3" placeholder="Autogrow Textarea"></textarea>
              </div>
            </div>
          </div>

          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">Button Addons</h4>
              <p>Buttons in input groups are a bit different and require one extra level of nesting.</p>
            </div>
            <div class="panel-body">
              <div class="input-group mb15">
                <span class="input-group-btn">
                  <button type="button" class="btn btn-default">Go!</button>
                </span>
                <input type="text" class="form-control">
              </div>

              <div class="input-group mb15">
                <input type="text" class="form-control">
                <span class="input-group-btn">
                  <button type="button" class="btn btn-default">Go!</button>
                </span>
              </div>

              <div class="input-group mb15">
                <div class="input-group-btn">
                  <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">Action <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
                <input type="text" class="form-control" />
              </div>

              <div class="input-group">
                <input type="text" class="form-control" />
                <div class="input-group-btn">
                  <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">Action <span class="caret"></span></button>
                  <ul class="dropdown-menu pull-right">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
              </div>

            </div>
          </div>

          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">Toggle Switches</h4>
              <p>A lightweight jQuery plugin that creates easily-styleable toggle buttons.</p>
            </div>
            <div class="panel-body">
              <div class="toggle-wrapper">
                <div class="toggle toggle-light"></div>
              </div>
              <div class="toggle-wrapper">
                <div class="toggle toggle-light primary"></div>
              </div>
              <div class="toggle-wrapper">
                <div class="toggle toggle-light success"></div>
              </div>
              <div class="toggle-wrapper">
                <div class="toggle toggle-light warning"></div>
              </div>
              <div class="toggle-wrapper">
                <div class="toggle toggle-light danger"></div>
              </div>
              <div class="toggle-wrapper">
                <div class="toggle toggle-light info"></div>
              </div>

              <hr class="invisible">

              <div class="toggle-wrapper">
                <div class="toggle toggle-modern"></div>
              </div>

              <div class="toggle-wrapper">
                <div class="toggle toggle-modern primary"></div>
              </div>

              <div class="toggle-wrapper">
                <div class="toggle toggle-modern success"></div>
              </div>

              <div class="toggle-wrapper">
                <div class="toggle toggle-modern warning"></div>
              </div>

              <div class="toggle-wrapper">
                <div class="toggle toggle-modern danger"></div>
              </div>

              <div class="toggle-wrapper">
                <div class="toggle toggle-modern info"></div>
              </div>

            </div>
          </div><!-- panel -->

          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">Enhanced Checkboxes and Radios</h4>
              <p>An enhanced version of some of the html form elements written in less and compiled in css.</p>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-6">
                  <label class="ckbox">
                    <input type="checkbox" checked><span>Checkbox Default</span>
                  </label>

                  <label class="ckbox ckbox-primary">
                    <input type="checkbox" checked><span>Checkbox Primary</span>
                  </label>

                  <label class="ckbox ckbox-success">
                    <input type="checkbox" checked><span>Checkbox Success</span>
                  </label>

                  <label class="ckbox ckbox-warning">
                    <input type="checkbox" checked><span>Checkbox Warning</span>
                  </label>

                  <label class="ckbox ckbox-danger">
                    <input type="checkbox" checked><span>Checkbox Danger</span>
                  </label>

                  <label class="ckbox ckbox-info">
                    <input type="checkbox" checked><span>Checkbox Info</span>
                  </label>

                </div><!-- col-md-6 -->

                <div class="col-md-6">

                  <label class="rdiobox">
                    <input type="radio" name="rdio" checked>
                    <span>Radio Default</span>
                  </label>

                  <label class="rdiobox rdiobox-primary">
                    <input type="radio" name="rdio">
                    <span>Radio Primary</span>
                  </label>

                  <label class="rdiobox rdiobox-success">
                    <input type="radio" name="rdio">
                    <span>Radio Success</span>
                  </label>

                  <label class="rdiobox rdiobox-warning">
                    <input type="radio" name="rdio">
                    <span>Radio Warning</span>
                  </label>

                  <label class="rdiobox rdiobox-danger">
                    <input type="radio" name="rdio">
                    <span>Radio Danger</span>
                  </label>

                  <label class="rdiobox rdiobox-info">
                    <input type="radio" name="rdio">
                    <span>Radio Info</span>
                  </label>

                </div>
              </div><!-- row -->
            </div><!-- panel-body -->
          </div><!-- panel -->

          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">Input Masks</h4>
              <p>Input masks allows a user to more easily enter fixed width input where you would like them to enter the data in a certain format (dates,phones, etc).</p>
            </div>
            <div class="panel-body">

              <div class="input-group mb20">
                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                <input type="text" placeholder="Date" id="date" class="form-control" />
              </div>

              <div class="input-group mb20">
                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                <input type="text" placeholder="Phone" id="phone" class="form-control" />
              </div>

              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-plus"></i></span>
                <input type="text" placeholder="SSN" id="ssn" class="form-control" />
              </div>

            </div>
          </div><!-- panel -->

          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">Time Picker</h4>
              <p>Easily select a time for a text input using your mouse or keyboards arrow keys.</p>
            </div>
            <div class="panel-body">
              <label>Default Time Picker:</label>
              <div class="input-group mb15">
                <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                <div class="timepicker"><input id="tpBasic" type="text" class="form-control"/></div>
              </div>

              <label>Set the scroll position to local time if no value selected:</label>
              <div class="input-group mb15">
                <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                <div class="timepicker"><input id="tp2" type="text" class="form-control"/></div>
              </div>

              <label>Dynamically set the time using a Javascript Date object:</label>
              <div class="input-group mb15">
                <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                <div class="timepicker"><input id="tp3" type="text" class="form-control"/></div>
                <button id="setTimeButton" class="btn btn-primary ml5">Set Current Time</button>
              </div>

            </div>
          </div><!-- panel -->

          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">Dropzone Multi-File Upload</h4>
              <p>DropzoneJS is an open source library that provides drag'n'drop file uploads with image previews. <a href="http://dropzonejs.com/" target="_blank">http://dropzonejs.com/</a></p>
            </div>
            <div class="panel-body">
              <p>This is just a demo. Uploaded files are <strong>not</strong> stored. This does not handle your file uploads on the server. You have to implement the code to receive and store the file yourself.</p>
              <br />
              <form action="files" class="dropzone">
                <div class="fallback">
                  <input name="file" type="file" multiple />
                </div>
              </form>
            </div>
          </div>

        </div><!-- col-sm-6 -->
      </div><!-- row -->

<script src="<?php echo base_url(); ?>includes/admin/lib/jquery/jquery.js"></script>
<script src="<?php echo base_url(); ?>includes/admin/lib/jquery-ui/jquery-ui.js"></script>
<script src="<?php echo base_url(); ?>includes/admin/lib/bootstrap/js/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>includes/admin/lib/jquery-autosize/autosize.js"></script>
<script src="<?php echo base_url(); ?>includes/admin/lib/select2/select2.js"></script>
<script src="<?php echo base_url(); ?>includes/admin/lib/jquery-toggles/toggles.js"></script>
<script src="<?php echo base_url(); ?>includes/admin/lib/jquery-maskedinput/jquery.maskedinput.js"></script>
<script src="<?php echo base_url(); ?>includes/admin/lib/timepicker/jquery.timepicker.js"></script>
<script src="<?php echo base_url(); ?>includes/admin/lib/dropzone/dropzone.js"></script>
<script src="<?php echo base_url(); ?>includes/admin/lib/bootstrapcolorpicker/js/bootstrap-colorpicker.js"></script>

<script src="<?php echo base_url(); ?>includes/admin/js/quirk.js"></script>

<script>
$(function() {

  // Textarea Auto Resize
  autosize($('#autosize'));

  // Select2 Box
  $('#select1, #select2, #select3').select2();
  $("#select4").select2({ maximumSelectionLength: 2 });
  $("#select5").select2({ minimumResultsForSearch: Infinity });
  $("#select6").select2({ tags: true });

  // Toggles
  $('.toggle').toggles({
    on: true,
    height: 26
  });

  // Input Masks
  $("#date").mask("99/99/9999");
  $("#phone").mask("(999) 999-9999");
  $("#ssn").mask("999-99-9999");

  // Date Picker
  $('#datepicker').datepicker();
  $('#datepicker-inline').datepicker();
  $('#datepicker-multiple').datepicker({ numberOfMonths: 2 });

  // Time Picker
  $('#tpBasic').timepicker();
  $('#tp2').timepicker({'scrollDefault': 'now'});
  $('#tp3').timepicker();

  $('#setTimeButton').on('click', function (){
    $('#tp3').timepicker('setTime', new Date());
  });

  // Colorpicker
  $('#colorpicker1').colorpicker();
  $('#colorpicker2').colorpicker({
    customClass: 'colorpicker-lg',
    sliders: {
      saturation: {
        maxLeft: 200,
        maxTop: 200
      },
      hue: { maxTop: 200 },
      alpha: { maxTop: 200 }
    }
  });

});
</script>