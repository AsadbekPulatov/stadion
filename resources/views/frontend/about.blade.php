@extends('frontend.master')
@section('content')
    @include('frontend.include_about')
    <section class="section section-md">
        <div class="shell">
            <h3>Our Features</h3>
            <div class="range range-30" data-lightgallery="group">
                <div class="cell-sm-6 cell-md-4">
                    <a class="thumbnail-classic" href="{{ asset('front/images/grid-gallery-1-1200x800_original.jpg') }}" data-lightgallery="item">
                        <figure>
                            <img src="{{ asset('front/images/grid-gallery-1-370x276.jpg') }}" alt="" width="370" height="276"/>
                        </figure>
                        <div class="caption">
                            <p class="caption-title">Hududingizdagi stadionlarni tez va qulay qidirish va band qilish imkoniyati.</p>
                        </div>
                    </a>
                </div>
                <div class="cell-sm-6 cell-md-4">
                    <a class="thumbnail-classic" href="{{ asset('front/images/grid-gallery-2-1200x800_original.jpg') }}" data-lightgallery="item">
                        <figure><img src="{{ asset('front/images/grid-gallery-2-370x276.jpg') }}" alt="" width="370" height="276"/>
                        </figure>
                        <div class="caption">
                            <p class="caption-title">Stadionlarning mavjudligi va bandlik jadvalini real vaqt rejimida kuzating.</p>
                        </div>
                    </a>
                </div>
                <div class="cell-sm-6 cell-md-4">
                    <a class="thumbnail-classic" href="{{ asset('front/images/grid-gallery-3-1058x800_original.jpg') }}" data-lightgallery="item">
                        <figure><img src="{{ asset('front/images/grid-gallery-3-370x276.jpg') }}" alt="" width="370" height="276"/>
                        </figure>
                        <div class="caption">
                            <p class="caption-title">Narx, joylashuv va faoliyat turiga ko‘ra stadionlarni osongina saralab tanlang.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
