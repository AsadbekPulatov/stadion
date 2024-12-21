@extends('frontend.master')
@section('content')
    <section class="section section-md bg-white text-center">
        <div class="shell">
            <div class="range range-50 range-md-center">
                <div class="cell-sm-8">
                    <div class="contact-box">
                        <h3>Get in Touch</h3>
                        <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                            <div class="range range-sm-bottom spacing-20">
                                <div class="cell-sm-6">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-first-name" type="text" name="name">
                                        <label class="form-label" for="contact-first-name">Your name</label>
                                    </div>
                                </div>
                                <div class="cell-sm-6">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-last-name" type="text" name="phone" data-constraints="@Numeric">
                                        <label class="form-label" for="contact-last-name">Phone</label>
                                    </div>
                                </div>
                                <div class="cell-xs-12">
                                    <div class="form-wrap">
                                        <textarea class="form-input" id="contact-message" name="message"></textarea>
                                        <label class="form-label" for="contact-message">Your Message</label>
                                    </div>
                                </div>
                                <div class="cell-sm-6">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-email" type="email" name="email">
                                        <label class="form-label" for="contact-email">E-mail</label>
                                    </div>
                                </div>
                                <div class="cell-sm-6">
                                    <button class="button button-primary button-square button-block button-effect-ujarak" type="submit"><span>send message</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="cell-sm-4">
                    <aside class="contact-box-aside text-left">
                        <div class="range range-50">
                            <div class="cell-xs-6 cell-sm-12">
                                <p class="aside-title"> Phone</p>
                                <hr class="divider divider-left divider-custom">
                                <div class="unit unit-middle unit-horizontal unit-spacing-xs unit-xs-top">
                                    <div class="unit__left"><span class="text-middle icon icon-sm mdi mdi-phone icon-primary"></span></div>
                                    <div class="unit__body"><a class="text-middle link link-gray-dark" href="tel:#">+998 (91) 435–14-16</a></div>
                                </div>
                            </div>
                            <div class="cell-xs-6 cell-sm-12">
                                <p class="aside-title"> Address</p>
                                <hr class="divider divider-left divider-custom">
                                <div class="unit unit-middle unit-horizontal unit-spacing-xs unit-xs-top">
                                    <div class="unit__left"><span class="text-middle icon icon-sm mdi mdi-map-marker icon-primary"></span></div>
                                    <div class="unit__body"><a class="text-middle link link-gray-dark" href="contacts.html">267 Park Avenue New York, NY 90210</a></div>
                                </div>
                            </div>
                            <div class="cell-xs-6 cell-sm-12">
                                <p class="aside-title"> opening hours</p>
                                <hr class="divider divider-left divider-custom">
                                <div class="unit unit-middle unit-horizontal unit-spacing-xs unit-xs-top">
                                    <div class="unit__left"><span class="text-middle icon icon-sm mdi mdi-clock icon-primary"></span></div>
                                    <div class="unit__body text-gray-darker">
                                        <p>We work every day 9:00–23:00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

@endsection
