<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Futbol Gazoni</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Futbol Gazoni</h1>
    <nav>
        <ul>
            <li><a href="#types">Gazon turlari</a></li>
            <li><a href="#maintenance">Parvarish</a></li>
            <li><a href="#standards">Standartlar</a></li>
            <li><a href="#contact">Aloqa</a></li>
        </ul>
    </nav>
</header>

<main>
    <section id="types">
        <h2>Gazon turlari</h2>
        <div class="type">
            <h3>Natijaviy gazon</h3>
            <p>Tabiiy o‘tlardan tayyorlanadi. U o‘yinchilar uchun qulay va estetik ko‘rinadi.</p>
        </div>
        <div class="type">
            <h3>Sun'iy gazon</h3>
            <p>Sintetik materiallardan tayyorlangan. Kamroq parvarish talab etadi.</p>
        </div>
    </section>

    <section id="maintenance">
        <h2>Gazonni parvarish qilish</h2>
        <p>Gazonga muntazam parvarish talab etiladi. Poliv, o‘g‘itlash va o‘t kesish muhimdir.</p>
    </section>

    <section id="standards">
        <h2>Standartlar</h2>
        <p>Futbol maydoni uchun standart o‘lchamlar 90-120 m uzunlik va 64-75 m kenglikda bo‘ladi.</p>
    </section>

    <section id="contact">
        <h2>Aloqa</h2>
        <form>
            <label for="name">Ismingiz:</label>
            <input type="text" id="name" required>

            <label for="email">Elektron pochta:</label>
            <input type="email" id="email" required>

            <label for="message">Xabar:</label>
            <textarea id="message" required></textarea>

            <button type="submit">Yuborish</button>
        </form>
    </section>
</main>

<footer>
    <p>&copy; 2024 Futbol Gazoni. Barcha huquqlar himoyalangan.</p>
</footer>

<script src="script.js"></script>
</body>
</html>
