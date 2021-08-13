<!DOCTYPE html>
<html>

<head>
    <title>Simple Markers</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <!-- jsFiddle will insert css and js -->
</head>
<style>
/* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
#map1 {
    height: 100%;
    width: 95%
}

/* Optional: Makes the sample page fill the window. */
html,
body {
    height: 100%;
    margin: 0;
    padding: 0;
}
</style>

<body>
    <div id="map1"></div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script async
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmWJreJs9fLopVda-I58oItjMGw9GQep4&callback=initMap1">
    </script>
    </script>
    <script>
    function initMap1() {
        const myLatLng1 = {
            lat: 13.69975077955458,
            lng: 100.4586459446204
        };
        const map1 = new google.maps.Map(document.getElementById("map1"), {
            zoom: 4,
            center: myLatLng1,
        });
        new google.maps.Marker({
            position: myLatLng1,
            map1,
            title: "Hello World!",
        });
    }
    </script>
</body>

</html>