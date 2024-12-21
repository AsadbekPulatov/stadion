@extends('frontend.master')

@section('content')
    <section class="section">
        <div class="shell-wide">
            <div class="range range-30 range-xs-center">
                <div class="cell-lg-8 cell-xl-9">
                    <!-- Classic slider-->
                    @include('frontend.slider')
                </div>
                @include('frontend.booking_form')
            </div>
        </div>
    </section>
    <!-- About us-->
    @include('frontend.include_about')
    <!--Indoor Pool-->
    @include('frontend.include_pool')
    <!-- Portfolio-->
    @include('frontend.gallery')
    <!-- Blog-->
    @include('frontend.blog')
@endsection
