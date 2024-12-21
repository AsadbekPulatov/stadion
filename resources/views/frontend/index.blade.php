@extends('frontend.master')

@section('content')
    <section class="section">
        <div class="shell-wide">
            <div class="range range-30 range-xs-center">
                <div class="cell-lg-10 cell-xl-12">
                    <!-- Classic slider-->
                    @include('frontend.slider')
                </div>
{{--                @include('frontend.booking_form')--}}
            </div>
        </div>
    </section>
    <!--Indoor Pool-->
    @include('frontend.include_about')
    <!-- Portfolio-->
    @include('frontend.gallery')
@endsection
