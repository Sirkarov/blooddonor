<script src="js/tether.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.bxslider.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/lobipanel.min.js"></script>
<script src="js/jquery.accordion.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Tinymce-JS -->
<script src="js/tinymce/tinymce.min.js"></script>
<script src="js/custom.js"></script>
<script type='text/javascript'>
    var element = $(this);
    var map;
    function initialize(myCenter,selector) {
        var marker = new google.maps.Marker({
            position: myCenter
        });
        var mapProp = {
            center: myCenter,
            zoom: 8,
            draggable: false,
            scrollwheel: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(selector, mapProp);
        marker.setMap(map);
    };

    $('#post_listing_modal_one').on('shown.bs.modal', function(e) {
        var element = $(e.relatedTarget);
        var data = element.data("lat").split(',')
        initialize(new google.maps.LatLng(data[0], data[1]),document.getElementById("listing_post_map_one"));
        google.maps.event.trigger(map, 'resize');
    });
    $('#post_listing_modal_two').on('shown.bs.modal', function(e) {
        var element = $(e.relatedTarget);
        var data = element.data("lat").split(',')
        initialize(new google.maps.LatLng(data[0], data[1]),document.getElementById("listing_post_map_two"));
        google.maps.event.trigger(map, 'resize');
    });
    $('#post_listing_modal_three').on('shown.bs.modal', function(e) {
        var element = $(e.relatedTarget);
        var data = element.data("lat").split(',')
        initialize(new google.maps.LatLng(data[0], data[1]),document.getElementById("listing_post_map_three"));
        google.maps.event.trigger(map, 'resize');
    });
</script>
<script type="text/javascript">
    $(function () {
        $('#datetimepicker1').datetimepicker();
    });
</script>
