  <script src="plugins/common/common.min.js"></script>
  <script src="js/custom.min.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/gleek.js"></script>
  <script src="js/styleSwitcher.js"></script>


  <script src="plugins/sweetalert/js/sweetalert.min.js"></script>
  <script src="plugins/sweetalert/js/sweetalert.init.js"></script>
  <script src="plugins/moment/moment.js"></script>
  <script src="plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
  <!-- Clock Plugin JavaScript -->
  <script src="plugins/clockpicker/dist/jquery-clockpicker.min.js"></script>
  <!-- Color Picker Plugin JavaScript -->
  <script src="plugins/jquery-asColorPicker-master/libs/jquery-asColor.js"></script>
  <script src="plugins/jquery-asColorPicker-master/libs/jquery-asGradient.js"></script>
  <script src="plugins/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js"></script>
  <!-- Date Picker Plugin JavaScript -->
  <script src="plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- Date range Plugin JavaScript -->
  <script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
  <script src="plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

  <script src="js/plugins-init/form-pickers-init.js"></script>

  <script>
jQuery(function($) {

    // Prevent Google Maps from hijacking scroll
    var onMapMouseleaveHandler = function(event) {
        var that = $(this);
        that.on('click', onMapClickHandler);
        that.off('mouseleave', onMapMouseleaveHandler);
        that.find('iframe').css("pointer-events", "none");
    }

    var onMapClickHandler = function(event) {
        var that = $(this);
        // Disable the click handler until the user leaves the map area
        that.off('click', onMapClickHandler);
        // Enable scrolling zoom
        that.find('iframe').css("pointer-events", "auto");
        // Handle the mouse leave event
        that.on('mouseleave', onMapMouseleaveHandler);
    }

    // Enable map zooming with mouse scroll when the user clicks the map
    $('.responsive-map').on('click', onMapClickHandler);

});
  </script>


  <script>
$('.radio-group .radio').click(function() {
    $('.card').removeClass('selected');
    $(this).addClass('selected');
    var val = $(this).attr('data-value');
    console.log(val);
    console.log($(this).closest());

    $(this).parents('.radio-group').find('input').val(val);
        document.getElementById("activitiesform").submit();

});
  </script>


  <script>
(function($) {
    $(function() {
        $('.file-upload-browse').on('click', function() {
            var file = $(this).parent().parent().parent().find('.file-upload-default');
            file.trigger('click');
        });
        $('.file-upload-default').on('change', function() {
            $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i,
                ''));
        });
    });
})(jQuery);
  </script>