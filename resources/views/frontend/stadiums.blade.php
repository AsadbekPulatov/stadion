@extends('frontend.master')
@section('content')
    <link rel="stylesheet" href="{{ asset('front/css/stadium.css') }}">

    <section id="stadium-list" class="stadium-list-section">
        <div class="container">
            <h2 class="stadium-list-title">Available Stadiums for Booking</h2>

            <!-- Filter -->
            <div class="filter-section">
                <input type="text" id="stadium-search" class="filter-input" placeholder="Search by stadium name or location..." />
            </div>

            <!-- Stadium List -->
            <div class="stadium-grid" id="stadium-grid">
                <!-- Stadium 1 -->
                <div class="stadium-card" data-name="Green Field Arena" data-location="Tashkent" data-size="100x50" data-price="50">
                    <img src="https://via.placeholder.com/400x250?text=Stadium+Image+1" alt="Stadium 1" class="stadium-image">
                    <div class="stadium-info">
                        <h3 class="stadium-name">Green Field Arena</h3>
                        <p class="stadium-location"><i class="fas fa-map-marker-alt"></i> Tashkent, Uzbekistan</p>
                        <p class="stadium-size"><i class="fas fa-ruler-combined"></i> Size: 100x50m</p>
                        <p class="stadium-price"><i class="fas fa-tag"></i> Price: $50/hour</p>
                        <button class="stadium-btn" onclick="openBookingModal('Green Field Arena')">Book Now</button>
                    </div>
                </div>
                <!-- Stadium 2 -->
                <div class="stadium-card" data-name="Victory Stadium" data-location="Samarkand" data-size="120x60" data-price="75">
                    <img src="https://via.placeholder.com/400x250?text=Stadium+Image+2" alt="Stadium 2" class="stadium-image">
                    <div class="stadium-info">
                        <h3 class="stadium-name">Victory Stadium</h3>
                        <p class="stadium-location"><i class="fas fa-map-marker-alt"></i> Samarkand, Uzbekistan</p>
                        <p class="stadium-size"><i class="fas fa-ruler-combined"></i> Size: 120x60m</p>
                        <p class="stadium-price"><i class="fas fa-tag"></i> Price: $75/hour</p>
                        <button class="stadium-btn" onclick="openBookingModal('Victory Stadium')">Book Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Booking Modal -->
    <div id="booking-modal" class="modal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeBookingModal()">&times;</span>
            <h2>Book Your Stadium</h2>
            <form id="booking-form">
                <label for="your-name">Your Name:</label>
                <input type="text" id="your-name" name="your-name" readonly />

                <label for="your-name">Your Phone:</label>
                <input type="text" id="your-phone" name="your-phone" readonly placeholder="+998 91 111 22 33" />

                <label for="stadium-name">Stadium Name:</label>
                <input type="text" id="stadium-name" name="stadium-name" readonly />

                <label for="booking-date">Date:</label>
                <input type="date" id="booking-date" name="booking-date" required />

                <label for="booking-time">Start Time:</label>
                <input type="time" id="start-time" name="booking-time" required />

                <label for="booking-time">End Time:</label>
                <input type="time" id="end-time" name="booking-time" required />

                <button type="submit" class="submit-btn">Confirm Booking</button>
            </form>
        </div>
    </div>

    <script src="{{ asset('front/js/stadium.js') }}"></script>
@endsection
