
      <ol class="breadcrumb breadcrumb-quirk">
        <li><a href="index.html"><i class="fa fa-home mr5"></i> Home</a></li>
        <li class="active">Maps</li>
      </ol>

      <hr class="darken">

      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">Map Basic</h4>
              <p>A default map style by Google Maps</p>
            </div>
            <div class="panel-body">
              <div id="mapBasic" class="map-wrapper"></div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">Map Shift Worker Style</h4>
              <p>Based on <a href="https://snazzymaps.com/style/27/shift-worker">Shift Worker</a> style. Almost grey scale, uses subdued tones to display streets. </p>
            </div>
            <div class="panel-body">
              <div id="mapShiftWorker" class="map-wrapper"></div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">Map Blue Water Style</h4>
              <p>Based on <a href="https://snazzymaps.com/style/25/blue-water">Blue Water</a>. A simple map with blue water and roads/landscape in grayscale.</p>
            </div>
            <div class="panel-body">
              <div id="mapBlueWater" class="map-wrapper"></div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">Map Shades of  Grey Style</h4>
              <p>Based on <a href="https://snazzymaps.com/style/38/shades-of-grey">Shades of Grey</a>. A map with various shades of grey. Great for dark theme.</p>
            </div>
            <div class="panel-body">
              <div id="mapShadesOfGrey" class="map-wrapper"></div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">Map Apple Like Style</h4>
              <p>Based on <a href="https://snazzymaps.com/style/42/apple-maps-esque">Apple Maps-esque</a>. A theme that largely resembles the Apple Maps theme.</p>
            </div>
            <div class="panel-body">
              <div id="mapApple" class="map-wrapper"></div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">Map MapBox Like Style</h4>
              <p>Based on <a href="https://snazzymaps.com/style/44/mapbox">MapBox</a>. Light blue and grey color inspired by MapBox's default map color. </p>
            </div>
            <div class="panel-body">
              <div id="mapMapBox" class="map-wrapper"></div>
            </div>
          </div>
        </div>

      </div>

      <hr class="darken"><br>

      <div class="row">
        <div class="col-md-4">

          <h4 class="panel-title mb5">Basic Map Widget</h4>
          <p class="mb20">A simple map widget that contains company address.</p>

          <div class="panel panel-map-location">
            <div id="mapBasic2" class="map-wrapper"></div>
            <div class="panel-body">
              <div class="media">
                <div class="media-left">
                  <img src="/images/image.png" class="width80" alt="Company Logo">
                </div>
                <div class="media-body">
                  <address>
                    <strong>ThemePixels, Inc.</strong>
                    4975 Cambridge Road
                    Miami Gardens, FL 33056<br>
                    <abbr title="Phone">P:</abbr> (123) 456-7890
                  </address>
                </div><!-- media-body -->
              </div><!-- media -->

              <div class="btn-group pull-left">
                <button class="btn btn-primary" type="button"><i class="fa fa-phone mr5"></i> Call</button>
                <button class="btn btn-primary" type="button"><i class="fa fa-envelope mr5"></i> Email</button>
              </div>

              <div class="btn-group pull-right">
                <button class="btn btn-success" type="button"><i class="fa fa-star mr5"></i> 4.2 Rating</button>
              </div>

            </div><!-- panel-body -->
          </div><!-- panel -->

        </div><!-- col-md-4 -->

        <div class="col-md-8">

          <h4 class="panel-title mb5">Map Widget With Sidebar</h4>
          <p class="mb20">A map widget that has a sidebar on the right and map on the left using custom styled map.</p>

          <div class="panel panel-map-sidebar">
            <div class="row">
              <div class="col-md-7 main">
                <div id="mapShiftWorker2" class="map-wrapper"></div>
              </div>
              <div class="col-md-5 map-sidebar">
                <div class="panel-body">
                  <h4 class="panel-title mb20">Driving Directions</h4>
                  <p>Type or click the map to enter your starting point and end point of your trip.</p>


                  <form class="form" action="#">
                    <div class="form-group">
                      <label class="control-label">Start:</label>
                      <input type="text" class="form-control" placeholder="San Francisco, CA, USA">
                    </div>
                    <div class="form-group">
                      <label class="control-label">End:</label>
                      <input type="text" class="form-control" placeholder="New York, NY, USA">
                    </div>

                    <div class="form-group">
                      <label class="control-label">Transportation:</label>
                      <div class="btn-group">
                        <button class="btn btn-default" type="button"><i class="fa fa-bicycle"></i></button>
                        <button class="btn btn-default active" type="button"><i class="fa fa-train"></i></button>
                        <button class="btn btn-default" type="button"><i class="fa fa-bus"></i></button>
                        <button class="btn btn-default" type="button"><i class="fa fa-ship"></i></button>
                        <button class="btn btn-default" type="button"><i class="fa fa-plane"></i></button>
                      </div>
                    </div>

                    <hr>

                    <button class="btn btn-success btn-block">Get Directions</button>

                  </form>
                </div>
              </div>
            </div>
          </div><!-- panel -->

        </div><!-- col-md-4 -->
      </div><!-- row -->


<script src="<?php echo base_url(); ?>includes/admin/lib/jquery/jquery.js"></script>
<script src="<?php echo base_url(); ?>includes/admin/lib/jquery-ui/jquery-ui.js"></script>
<script src="<?php echo base_url(); ?>includes/admin/lib/bootstrap/js/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>includes/admin/lib/jquery-toggles/toggles.js"></script>

<script src="//maps.google.com/maps/api/js?sensor=true"></script>
<script src="<?php echo base_url(); ?>includes/admin/lib/gmaps/gmaps.js"></script>

<script src="<?php echo base_url(); ?>includes/admin/js/quirk.js"></script>

<script src="<?php echo base_url(); ?>includes/admin/js/map.shiftworker.js"></script>
<script src="<?php echo base_url(); ?>includes/admin/js/map.bluewater.js"></script>
<script src="<?php echo base_url(); ?>includes/admin/js/map.shadesofgrey.js"></script>
<script src="<?php echo base_url(); ?>includes/admin/js/map.apple.js"></script>
<script src="<?php echo base_url(); ?>includes/admin/js/map.mapbox.js"></script>

<script>
$(function() {

  'use strict';

  var mapBasic = new GMaps({
    el: '#mapBasic',
    zoom: 14,
    lat: 37.702549,
    lng: -122.487619
  });

  mapBasic.addMarker({
    lat: 37.702549,
    lng: -122.487619
  });

  var mapBasic2 = new GMaps({
    el: '#mapBasic2',
    zoom: 14,
    lat: 37.702549,
    lng: -122.487619
  });

  mapBasic2.addMarker({
    lat: 37.702549,
    lng: -122.487619
  });
});
</script>
