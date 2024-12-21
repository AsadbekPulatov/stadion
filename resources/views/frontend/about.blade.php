@extends('frontend.master')
@section('content')
    <section class="section section-md bg-secondary-4 text-center text-sm-left">
        <div class="shell">
            <div class="range range-50 range-md-justify range-sm-middle">
                <div class="cell-sm-6 wow fadeInUp" data-wow-delay=".1s">
                    <div class="box-outline box-outline__mod-1">
                        <figure>
                            <img src="{{ asset('front/images/about-01-546x516.jpg') }}" alt="" width="546" height="516"/>
                        </figure>
                    </div>
                </div>
                <div class="cell-sm-6 cell-md-5 wow fadeInUp" data-wow-delay=".2s">
                    <h3>A Few Words About Us</h3>
                    <p>Tired of your daily routine? Seeking for a place to stay and rest with your family? You are in the right place! Our spa resort and hotel provides luxury and historic accommodations for travelers. It combines modern style and amenities with traditional values.</p>
                    <p>All rooms are equipped with air conditioners and LCD TVs. Free WI-FI service is available throughout the territory of the hotel. Our restaurant food and meals from world cuisines unite people connecting history and traditions. Experience our warm hospitality, high quality of service and exceptional comfort! Make a reservation for your dream vacation today!</p><a class="button button-primary button button-square button-effect-ujarak button-lg" href="#"><span>read more</span></a>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-md">
        <div class="shell">
            <h3>Rooms & Suites</h3>
            <div class="range range-30" data-lightgallery="group">
                <div class="cell-sm-6 cell-md-4"><a class="thumbnail-classic" href="{{ asset('front/images/grid-gallery-1-1200x800_original.jpg') }}" data-lightgallery="item">
                        <figure><img src="{{ asset('front/images/grid-gallery-1-370x276.jpg') }}" alt="" width="370" height="276"/>
                        </figure>
                        <div class="caption">
                            <p class="caption-title">Single Room</p>
                            <p class="caption-text">Each room has its own unique décor and arrangement.</p>
                        </div></a>
                </div>
                <div class="cell-sm-6 cell-md-4"><a class="thumbnail-classic" href="{{ asset('front/images/grid-gallery-2-1200x800_original.jpg') }}" data-lightgallery="item">
                        <figure><img src="{{ asset('front/images/grid-gallery-2-370x276.jpg') }}" alt="" width="370" height="276"/>
                        </figure>
                        <div class="caption">
                            <p class="caption-title">Double Room</p>
                            <p class="caption-text">Each room has its own unique décor and arrangement.</p>
                        </div></a>
                </div>
                <div class="cell-sm-6 cell-md-4"><a class="thumbnail-classic" href="{{ asset('front/images/grid-gallery-3-1058x800_original.jpg') }}" data-lightgallery="item">
                        <figure><img src="{{ asset('front/images/grid-gallery-3-370x276.jpg') }}" alt="" width="370" height="276"/>
                        </figure>
                        <div class="caption">
                            <p class="caption-title">Twin Room</p>
                            <p class="caption-text">Each room has its own unique décor and arrangement.</p>
                        </div></a>
                </div>
            </div>
        </div>
    </section>
@endsection
