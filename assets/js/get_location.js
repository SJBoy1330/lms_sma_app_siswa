$(document).ready(function () {
    x = navigator.geolocation;

    x.getCurrentPosition(success, failure);

    function success(position) {
        var myLat = position.coords.latitude;
        var myLong = position.coords.longitude;
        $('#map_iframe').attr("src", "https://maps.google.com/maps?q=" + myLat + "," + myLong + "&hl=en;z=14&output=embed");
        $("#lat").val(myLat);
        $("#long").val(myLong);
    }
    function failure(position) {
        alert('error : ' + position.message);
    }


    $('.button_get_lokasi').on('click', function () {
        x = navigator.geolocation;

        x.getCurrentPosition(success, failure);

    });

    function success(position) {
        var myLat = position.coords.latitude;
        var myLong = position.coords.longitude;
        $('#map_iframe').attr("src", "https://maps.google.com/maps?q=" + myLat + "," + myLong + "&hl=en;z=14&output=embed");
        $('#map_mapel').attr("src", "https://maps.google.com/maps?q=" + myLat + "," + myLong + "&hl=en;z=14&output=embed")
        $(".lat").val(myLat);
        $(".long").val(myLong);
    }
    function failure(position) {
        alert('error : ' + position.message);
    }

})