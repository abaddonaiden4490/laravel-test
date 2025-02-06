<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bands', function () {
    $bands = [
        'Poppin\'Party' => 'A cheerful and upbeat band that loves to create fun and lively music.',
        'Afterglow' => 'A cool and edgy band known for their strong bonds and rock-inspired sound.',
        'Roselia' => 'A passionate and powerful band with a focus on elegance and perfection.',
        'Pastel*Palettes' => 'An idol-themed band with a poppy and sweet sound full of charm.',
        'Hello, Happy World!' => 'A bright and energetic band that brings smiles to everyone with their whimsical tunes.',
        'Morfonica' => 'A youthful and refreshing band that blends classical violin with soft rock.',
        'RAISE A SUILEN' => 'A dynamic and intense band that delivers high-energy performances and electronic rock.',
    ];

    return response()->json($bands);
});

Route::get('/emu', function () {
    $html = '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Emu Otori</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #fdf7ff;
                color: #333;
                margin: 0;
                padding: 0;
            }
            .container {
                max-width: 800px;
                margin: 50px auto;
                padding: 20px;
                background: #fff;
                border-radius: 8px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                text-align: center;
            }
            h1 {
                color: #ff70a6;
                font-size: 2.5rem;
            }
            h2 {
                color: #ff70a6;
                font-size: 1.8rem;
                margin-top: 20px;
            }
            p {
                font-size: 1.1rem;
                line-height: 1.6;
            }
            .highlight {
                font-weight: bold;
                color: #ff70a6;
            }
            img {
                width: 250px;
                height: auto;
                border-radius: 8px;
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Wonderhoy!☆ Emu Otori</h1>
            <img src="https://static.wikia.nocookie.net/projectsekai/images/2/20/Otori_Emu_chibi.png" alt="Emu Otori" />
            <p><span class="highlight">Personality:</span> Cheerful and impulsive, Emu acts on every idea she comes up with and often drags others into her plans.</p>
            <p><span class="highlight">Catchphrase:</span> "Wonderhoy!☆"</p>
            <p><span class="highlight">Goal:</span> Restore the park to its former glory with the help of her friends.</p>
            <h2>Strengths</h2>
            <ul>
                <li>Intuition about others\' sincerity, often noting when something feels "off."</li>
                <li>Highly intelligent, placing in the top 3 of her school exams.</li>
            </ul>
            <h2>Challenges</h2>
            <p>Often neglects her negative feelings and puts on a smile to avoid worrying others.</p>
            <h2>Fun Fact</h2>
            <p>Although she seems airheaded, Emu is quite sharp and thoughtful when it comes to people and situations.</p>
        </div>
    </body>
    </html>
    ';

    return response($html);
});

Route::get('/screensaver', function () {
    $imagePath = public_path('images/laravel.png'); // Replace 'your-image.png' with your image file name in the public/images folder.

    $html = '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DVD Screensaver</title>
        <style>
            body, html {
                height: 100%;
                margin: 0;
                overflow: hidden;
                background-color: #000;
            }
            img {
                position: absolute;
                width: 300px; /* Adjust image size */
                height: auto;
            }
        </style>
    </head>
    <body>
        <img id="image" src="' . asset('images/laravel.png') . '" alt="Bouncing Image" />
        <script>
            const img = document.getElementById("image");
            const speed = 4; // Speed of movement
            let xPos = Math.random() * window.innerWidth;
            let yPos = Math.random() * window.innerHeight;
            let xSpeed = speed * (Math.random() > 0.5 ? 1 : -1);
            let ySpeed = speed * (Math.random() > 0.5 ? 1 : -1);

            function animate() {
                xPos += xSpeed;
                yPos += ySpeed;

                // Check for collision with the window borders
                if (xPos <= 0 || xPos + img.width >= window.innerWidth) {
                    xSpeed = -xSpeed;
                }
                if (yPos <= 0 || yPos + img.height >= window.innerHeight) {
                    ySpeed = -ySpeed;
                }

                img.style.left = xPos + "px";
                img.style.top = yPos + "px";
                requestAnimationFrame(animate);
            }

            animate();
        </script>
    </body>
    </html>
    ';

    return response($html);
});

Route::get('/pusa', function () {
    $html = '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pusa GIF</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #fdf7ff;
                color: #333;
                margin: 0;
                padding: 0;
                text-align: center;
            }
            img {
                width: 80%; /* Adjust size as needed */
                max-width: 600px;
                height: auto;
                margin-top: 50px;
            }
        </style>
    </head>
    <body>
        <h1>Enjoy this GIF of a Pusa!</h1>
        <img src="https://media1.tenor.com/m/SJtzOjBZCIkAAAAd/hsr-honkai-star-rail.gif" alt="Pusa GIF" />
    </body>
    </html>
    ';

    return response($html);
});

Route::get('/SSPusa', function () {
    $gifUrl = 'https://media1.tenor.com/m/SJtzOjBZCIkAAAAd/hsr-honkai-star-rail.gif'; // Replace this with the actual GIF URL from the web.

    $html = '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bouncing GIF Screensaver</title>
        <style>
            body, html {
                height: 100%;
                margin: 0;
                overflow: hidden;
                background-color: #000;
            }
            img {
                position: absolute;
                width: 300px; /* Adjust image size */
                height: auto;
            }
        </style>
    </head>
    <body>
        <img id="image" src="' . $gifUrl . '" alt="Bouncing GIF" />
        <script>
            const img = document.getElementById("image");
            const speed = 4; // Speed of movement
            let xPos = Math.random() * window.innerWidth;
            let yPos = Math.random() * window.innerHeight;
            let xSpeed = speed * (Math.random() > 0.5 ? 1 : -1);
            let ySpeed = speed * (Math.random() > 0.5 ? 1 : -1);

            function animate() {
                xPos += xSpeed;
                yPos += ySpeed;

                // Check for collision with the window borders and change direction (DVD-style)
                if (xPos <= 0 || xPos + img.width >= window.innerWidth) {
                    xSpeed = -xSpeed;
                }
                if (yPos <= 0 || yPos + img.height >= window.innerHeight) {
                    ySpeed = -ySpeed;
                }

                img.style.left = xPos + "px";
                img.style.top = yPos + "px";
                requestAnimationFrame(animate);
            }

            animate();
        </script>
    </body>
    </html>
    ';

    return response($html);
});

Route::get('/Ceresfauna', function () {
    $imageUrls = [
        'https://static.wikitide.net/hololivewiki/thumb/d/dc/IRyS_-_Portrait_02.png/280px-IRyS_-_Portrait_02.png', // Replace with the actual image URL
        'https://static.wikitide.net/hololivewiki/thumb/a/a1/Ouro_Kronii_-_Portrait_01.png/280px-Ouro_Kronii_-_Portrait_01.png', // Replace with the actual image URL
        'https://static.wikitide.net/hololivewiki/thumb/1/16/Hakos_Baelz_-_Portrait_01.png/280px-Hakos_Baelz_-_Portrait_01.png', // Replace with the actual image URL
        'https://static.wikitide.net/hololivewiki/thumb/8/80/Nanashi_Mumei_-_Portrait_01.png/280px-Nanashi_Mumei_-_Portrait_01.png', // Replace with the actual image URL
    ];

    $html = '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bouncing Images Screensaver</title>
        <style>
            body, html {
                height: 100%;
                margin: 0;
                overflow: hidden;
                background-color: #000;
            }
            .bouncing-img {
                position: absolute;
                width: 150px; /* Adjust image size */
                height: auto;
            }
            .scrolling-text {
                position: absolute;
                bottom: 0;
                width: 100%;
                text-align: center;
                font-size: 24px;
                font-weight: bold;
                color: red;
                white-space: nowrap;
                animation: scrollText 20s linear infinite;
            }
            @keyframes scrollText {
                0% { left: 100%; }
                100% { left: -100%; }
            }
        </style>
    </head>
    <body>
        ';

    foreach ($imageUrls as $imageUrl) {
        $html .= '<img class="bouncing-img" src="' . $imageUrl . '" alt="Bouncing Image" />';
    }

    $html .= '
        <div class="scrolling-text">Umuwi ka na baby Ceres Fauna</div>
        <script>
            const images = document.querySelectorAll(".bouncing-img");
            const speed = 4; // Speed of movement

            images.forEach(img => {
                let xPos = Math.random() * window.innerWidth;
                let yPos = Math.random() * window.innerHeight;
                let xSpeed = speed * (Math.random() > 0.5 ? 1 : -1);
                let ySpeed = speed * (Math.random() > 0.5 ? 1 : -1);

                function animate() {
                    xPos += xSpeed;
                    yPos += ySpeed;

                    // Check for collision with the window borders and change direction (DVD-style)
                    if (xPos <= 0 || xPos + img.width >= window.innerWidth) {
                        xSpeed = -xSpeed;
                    }
                    if (yPos <= 0 || yPos + img.height >= window.innerHeight) {
                        ySpeed = -ySpeed;
                    }

                    img.style.left = xPos + "px";
                    img.style.top = yPos + "px";
                    requestAnimationFrame(animate);
                }

                animate();
            });
        </script>
    </body>
    </html>
    ';

    return response($html);
});

Route::get('/lampa', function () {
    return response()->make('
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Crying Fluid</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                text-align: center;
                margin: 0;
                padding: 0;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background-color: #f0f0f0;
            }
            #question, #button {
                margin-bottom: 20px;
            }
            #answer {
                display: none;
                font-size: 384px;
                font-weight: bold;
                font-style: italic;
                color: #333;
            }
        </style>
    </head>
    <body>
        <div id="content">
            <div id="question">What is crying fluid?</div>
            <button id="button" onclick="showAnswer()">Click Me</button>
        </div>
        <div id="answer">Tears</div>

        <script>
            function showAnswer() {
                document.getElementById("content").style.display = "none";
                document.getElementById("answer").style.display = "block";
            }
        </script>
    </body>
    </html>', 200)
    ->header('Content-Type', 'text/html');
});
