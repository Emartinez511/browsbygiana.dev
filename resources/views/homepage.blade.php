@extends('layouts.master')

@section('content')



<div class="row featurette landing_background" id="home">
    <div class="col-md-5 col-md-offset-1 about_me">
            <p class="lead quote text-center">
                I started my "love affair" with brows while attending The Aveda Institute at San Antonio
                . After graduation, I became a licensed esthetician & started my career at K.Charles & Co. There I was able to build
                a steady brow based clientele. Soon after, I accepted an offer with Benefit San Francisco Cosmetics as an "Arch Expert".
                My "fuller shaped" brows became my signature. Fast forward 3 years & after major life changes, the dream of owning my brow
                studio came true on 10/30/2012. Brows by Giana is dedicated to my beautiful nephews Elijah & Avi. XO.
            </p>
    </div>
    <div class="col-md-5 col-md-offset-1">
        <a href="http://www.genbook.com/bookings/slot/reservation/30189523"><img class="featurette-image img-responsive center-block" src="img/booknow_button.png" alt="book now image"></a>
    </div>
</div>

<hr class="featurette-divider">

<div class="brow_gals" id="second_feature">

    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">
            <h2 class="featurette-heading">The Brow Gals</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-md-3 col-md-offset-2 text-center">
            <img class="img-responsive center-block" src="img/gianaframe.png" />
            <h3>Giana</h3>
        </div>
        <div class="col-xs-6 col-md-3 col-md-offset-2 text-center">
            <img class="img-responsive center-block" src="img/brooklynframe.png" />
            <h3>Brooklyn</h3>
        </div>
    </div>

</div>
<div class="reviews_segment">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">
            <h2 class="reviews_heading">Reviews</h2>
            <img src="img/stars.png" />
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <h3 class="text-center">The best!</h3>
            <blockquote>
                <p>
                    “I come all the way from Dallas, TX to have Giana work her magic on my brows. She is the Anastasia to my Kim K.”
                </p>
                <p class="pull-right"><small>Meghan G</small></p>
            </blockquote>
        </div>

        <div class="col-md-3 col-md-offset-1">
            <h3 class="text-center">She's amazing</h3>
            <blockquote>
                <p>
                    "Brooklyn is an artist and definitely knows what she is doing... Words of advice: Stop getting your brows done at nail salons!! Go to the experts.”
                </p>
                <p class="pull-right"><small>Priscilla</small></p>
            </blockquote>
        </div>

        <div class="col-md-3 col-md-offset-1">
            <h3 class="text-center">Best brow girls</h3>
            <blockquote>
                <p>
                    "Giana and Brooklyn have both done my brows and let me tell you they are the best team! Love the way my brows look after each visit. Thanks girls”
                </p>
                <p class="pull-right"><small>Vanessa M</small></p>
            </blockquote>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">
            {{-- <p>
                Click Below for More Reviews
            </p> --}}
            <button type="button" class="btn btn-warning" id="reviews_btn" href="http://www.genbook.com/bookings/slot/reservation/30189523/reviews/">REVIEWS</button>
        </div>
    </div>
</div>
<div class="location_segment" id="location">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">
            <h2 class="location_header">Location</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center">
            <p>
                <h4>We are located in Treusdell Salon & Spa in Suite 111</h3>
                    11106 Huebner Rd Suite #111 SAN ANTONIO,TX 78230
                </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">
            <iframe width="400" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJL_tLEDJnXIYRkP2zg1_0YYE&key=AIzaSyAx7VbchvbSpJT03UqHAU3j3tOz3fJNMSM" allowfullscreen></iframe>
        </div>
    </div>
</div>


@stop
