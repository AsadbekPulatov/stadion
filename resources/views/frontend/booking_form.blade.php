<div class="cell-lg-4 cell-xl-3 reveal-lg-flex">
    <div class="hotel-booking-form">
        <h3>Book a Room</h3>
        <!-- RD Mailform-->
        <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact"
              method="post" action="bat/rd-mailform.php">
            <div class="range range-sm-bottom spacing-20">
                <div class="cell-lg-12 cell-md-4">
                    <p class="text-uppercase">Your Name</p>
                    <div class="form-wrap">
                        <input class="form-input" id="contact-first-name" type="text" name="name">
                        <label class="form-label" for="contact-first-name">Your Full Name</label>
                    </div>
                </div>
                <div class="cell-lg-12 cell-md-4 cell-sm-6">
                    <p class="text-uppercase">Arrival</p>
                    <div class="form-wrap">
                        <label class="form-label form-label-icon" for="date-in"><span
                                class="icon icon-primary fa-calendar"></span><span>Check-in Date</span></label>
                        <input class="form-input" id="date-in" data-time-picker="date" type="text"
                               name="date">
                    </div>
                </div>
                <div class="cell-lg-12 cell-md-4 cell-sm-6">
                    <p class="text-uppercase">Departure</p>
                    <div class="form-wrap">
                        <label class="form-label form-label-icon" for="date-out"><span
                                class="icon icon-primary fa-calendar"></span><span>Check-out Date</span></label>
                        <input class="form-input" id="date-out" data-time-picker="date" type="text"
                               name="date">
                    </div>
                </div>
                <div class="cell-lg-6 cell-md-4 cell-xs-6">
                    <p class="text-uppercase">Adults</p>
                    <div class="form-wrap form-wrap-validation">
                        <!--Select 2-->
                        <select class="form-input select-filter" data-minimum-results-search="-1"
                                data-placeholder="1">
                            <option>&nbsp;</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div>
                <div class="cell-lg-6 cell-md-4 cell-xs-6">
                    <p class="text-uppercase">Children</p>
                    <div class="form-wrap form-wrap-validation">
                        <!--Select 2-->
                        <select class="form-input select-filter" data-minimum-results-search="-1"
                                data-placeholder="0">
                            <option>&nbsp;</option>
                            <option value="1">0</option>
                            <option value="2">1</option>
                            <option value="3">2</option>
                            <option value="4">3</option>
                            <option value="5">4</option>
                        </select>
                    </div>
                </div>
                <div class="cell-lg-12 cell-md-4">
                    <button
                        class="button button-primary button-square button-block button-effect-ujarak"
                        type="submit"><span>check availability</span></button>
                </div>
            </div>
        </form>
    </div>
</div>
