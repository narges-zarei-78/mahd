@extends('layouts', ['style_file' => 'morabi.css'])
@section('header-style')
    <style type="text/css">
        #map-canvas {
            width: 700px;
            height: 500px;
            margin: 0 auto;
        }
    </style>
@endsection

@section('header-script')
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script type="text/javascript">
        function initialize() {
            var myLatlng = new google.maps.LatLng(36.219214, 59.616799);
            var mapOptions = {
                zoom     : 15,
                center   : myLatlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }

            var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

            var contentString = '<div style="direction: rtl; text-align: right;font-family: Tahoma;">' +
                '<h4>mashad , مهدکودک نرگس</h4>' +
                '</div>';

            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });

            var marker = new google.maps.Marker({
                position: myLatlng,
                map     : map,
                title   : 'Takhte Jamshid'
            });

            infowindow.open(map, marker);
            google.maps.event.addListener(marker, 'click', function () {
                infowindow.open(map, marker);
            });
        }
    </script>
@endsection

@section('content')
    <img src="../image/tamas-ba-ma.jpg" class="img-fluid" alt="...">
    <section>
        <div class="row pt-5">
            <div class="col-md-4 mt-5">
                <div class="row icon-footer mb-5">
                    <span class=" fs-3 text"><i class="bi bi-geo-alt-fill"></i></span>
                    <p class="ms-3 fs-5 titr-saie-tosi fw-bold">مشهد_خیابان صبا _ صبا78_ پلاک 78</p>
                </div>


                <div class="row  icon-footer mb-5">
                    <span class="  fs-3 text"><i class="bi bi-telephone-fill"></i></span>
                    <p class="ms-3 fs-5 titr-saie-tosi fw-bold">+05133126923</p>
                </div>
                <div class="row icon-footer mb-5">
                    <span class=" fs-3 text"><i class="bi bi-envelope-fill"></i></span>
                    <p class="ms-3 fs-5 titr-saie-tosi fw-bold">@narges</p>
                </div>
                <div class="row icon-footer mb-5">
                    <span class="fs-3 text"><i class="bi bi-clock-fill"></i></span>
                    <p class="ms-3 fs-5 titr-saie-tosi fw-bold">شنبه تا چهارشنبه ها از ساعت 7 صبح تا 4 عصر</p>
                </div>


            </div>
            <div class="col-md-8 mb-5">
                <div id="map-canvas"></div>
            </div>
        </div>
    </section>
@endsection