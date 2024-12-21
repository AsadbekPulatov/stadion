<div class="w-100">
    <div class="hotel-booking-form">
        <h3>Book a Stadium</h3>
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
                    <p class="text-uppercase">Date</p>
                    <div class="form-wrap">
                        <label class="form-label form-label-icon" for="date-in"><span
                                class="icon icon-primary fa-calendar"></span><span>Check-in Date</span></label>
                        <input class="form-input" id="date-in" data-time-picker="date" type="date"
                               name="date">
                    </div>
                </div>
                <div class="cell-lg-12 cell-md-4 cell-sm-6">
                    <p class="text-uppercase">Time</p>
                    <div class="form-wrap">
                        <label class="form-label form-label-icon" for="date-out"><span
                                class="icon icon-primary fa-calendar"></span><span>Check-out Date</span></label>
                        <input class="form-input" id="date-out" data-time-picker="date" type="time"
                               name="date">
                    </div>
                </div>
                <div class="cell-lg-12 cell-md-4">
                    <button
                        class="button button-primary button-square button-block button-effect-ujarak"
                        type="submit"><span>Booking</span></button>
                </div>
            </div>
        </form>
    </div>
</div>
