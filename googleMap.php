
<html>
    <head>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    </head>
<body>
    <div class="container">
        <h1>My First Google Map</h1>
    
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20428.783458626684!2d75.85300087123915!3d25.158237275698887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396f9b54ac939f67%3A0xcaebd0e0affefc66!2sAerodrome%20circle!5e0!3m2!1sen!2sin!4v1675944989714!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


        <div id="googleMap" style="width:100%;height:400px;"></div>
    </div>
<script>

    function myMap() {
    var mapProp= {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
    };
    var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
    console.log('hello', map);
    }

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>

</body>
</html>