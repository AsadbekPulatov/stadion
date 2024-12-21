@extends('frontend.master')
@section('content')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <style>
        .features-section {
            background-color: white;
            padding: 80px 20px;
        }

        .container {
            max-width: 1300px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .features-title {
            text-align: center;
            font-size: 3rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 50px;
            position: relative;
        }

        .features-title::after {
            content: "";
            display: block;
            width: 80px;
            height: 3px;
            background-color: #4caf50;
            margin: 20px auto 0;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 40px;
        }

        .feature-item {
            background-color: #fff;
            padding: 30px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .feature-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .feature-icon-wrapper {
            background-color: #4caf50;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin: 0 auto 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .feature-icon {
            color: #fff;
            font-size: 2.5rem;
        }

        .feature-item h3 {
            font-size: 1.8rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 15px;
        }

        .feature-item p {
            font-size: 1.1rem;
            color: #666;
            line-height: 1.8;
        }
    </style>

    @include('frontend.include_about')

    <section id="features" class="features-section">
        <div class="container">
            <h2 class="features-title">Why Choose Us?</h2>
            <div class="features-grid">
                <div class="feature-item">
                    <div class="feature-icon-wrapper">
                        <i class="feature-icon fas fa-map-marked-alt"></i>
                    </div>
                    <h3>Stadionlarni Osongina Toping</h3>
                    <p>Hududingizdagi stadionlarni tez va qulay qidirish va band qilish imkoniyati.</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon-wrapper">
                        <i class="feature-icon fas fa-clock"></i>
                    </div>
                    <h3>Real Vaqt Bandlik Ma’lumotlari</h3>
                    <p>Stadionlarning mavjudligi va bandlik jadvalini real vaqt rejimida kuzating.</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon-wrapper">
                        <i class="feature-icon fas fa-filter"></i>
                    </div>
                    <h3>Shaxsiylashtirilgan Filtrlar</h3>
                    <p>Narx, joylashuv va faoliyat turiga ko‘ra stadionlarni osongina saralab tanlang.</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon-wrapper">
                        <i class="feature-icon fas fa-wallet"></i>
                    </div>
                    <h3>Onlayn To‘lov Qulayligi</h3>
                    <p>Bron qilishni xavfsiz va qulay onlayn to‘lov tizimi orqali amalga oshiring.</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon-wrapper">
                        <i class="feature-icon fas fa-handshake"></i>
                    </div>
                    <h3>Hamkorlik Imkoniyatlari</h3>
                    <p>Stadion egalari o‘z maydonlarini boshqarish va mijozlar bilan bog‘lanish imkoniyatiga ega
                        bo‘lishadi.</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon-wrapper">
                        <i class="feature-icon fas fa-headset"></i>
                    </div>
                    <h3>Mijozlar Qo‘llab-quvvatlovi</h3>
                    <p>Savollaringiz uchun tezkor va sifatli yordam ko‘rsatamiz.</p>
                </div>
            </div>
        </div>
    </section>

@endsection
