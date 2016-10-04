

      <ol class="breadcrumb breadcrumb-quirk">
        <li><a href="index.html"><i class="fa fa-home mr5"></i> Home</a></li>
        <li><a href="general-forms.html">Forms</a></li>
        <li class="active">Form Editor</li>
      </ol>

      <div class="panel">
        <div class="panel-heading">
          <h4 class="panel-title">HTML 5 WYSIWYG Editor</h4>
          <p>Open source rich text editor based on HTML5 and the progressive-enhancement approach. Uses a sophisticated security concept and aims to generate fully valid HTML5 markup by preventing unmaintainable tag soups and inline styles. <a href="http://jhollingworth.github.io/bootstrap-wysihtml5/" target="_blank">http://jhollingworth.github.io/bootstrap-wysihtml5/</a></p>
        </div>
        <div class="panel-body">
          <textarea id="wysiwyg" placeholder="Enter text here..." class="form-control" rows="10"></textarea>
        </div>
      </div>

      <div class="panel">
        <div class="panel-heading">
          <h4 class="panel-title">Summernote</h4>
          <p>Super Simple WYSIWYG Editor on Bootstrap. <a href="http://summernote.org/" target="_blank">http://summernote.org/</a></p>
        </div>
        <div class="panel-body">
          <div id="summernote">Hello Summernote</div>
        </div>
      </div>


<script src="<?php echo base_url(); ?>includes/admin/lib/jquery/jquery.js"></script>
<script src="<?php echo base_url(); ?>includes/admin/lib/bootstrap/js/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>includes/admin/lib/jquery-toggles/toggles.js"></script>

<script src="<?php echo base_url(); ?>includes/admin/lib/wysihtml5x/wysihtml5x.js"></script>
<script src="<?php echo base_url(); ?>includes/admin/lib/wysihtml5x/wysihtml5x-toolbar.js"></script>
<script src="<?php echo base_url(); ?>includes/admin/lib/handlebars/handlebars.js"></script>
<script src="<?php echo base_url(); ?>includes/admin/lib/summernote/summernote.js"></script>
<script src="<?php echo base_url(); ?>includes/admin/lib/bootstrap3-wysihtml5-bower/bootstrap3-wysihtml5.all.js"></script>

<script src="<?php echo base_url(); ?>includes/admin/js/quirk.js"></script>

<script>
$(document).ready(function(){

  'use strict';

  // HTML5 WYSIWYG Editor
  $('#wysiwyg').wysihtml5({
    toolbar: {
      fa: true
    }
  });

  // Summernote
  $('#summernote').summernote({
    height: 200
  });

});
</script>