<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy New Year 2025! 🎉</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
            color: #fff;
            min-height: 100vh;
            position: relative;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
            position: relative;
            z-index: 2;
        }

        header {
            text-align: center;
            margin-bottom: 50px;
            animation: fadeInDown 1s ease;
        }

        h1 {
            font-size: 4rem;
            font-weight: bold;
            background: linear-gradient(45deg, #ffd700, #ff6b6b, #4ecdc4, #ffd700);
            background-size: 300% 300%;
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: gradientShift 3s ease infinite;
            margin-bottom: 20px;
            text-shadow: 0 0 30px rgba(255, 215, 0, 0.5);
        }

        .year {
            font-size: 6rem;
            font-weight: 900;
            color: #ffd700;
            text-shadow: 0 0 20px #ffd700, 0 0 40px #ffd700;
            animation: pulse 2s ease-in-out infinite;
        }

        .subtitle {
            font-size: 1.5rem;
            color: #4ecdc4;
            margin-top: 10px;
            animation: fadeIn 2s ease;
        }

        .countdown {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 40px;
            margin: 40px 0;
            border: 2px solid rgba(255, 215, 0, 0.3);
            animation: slideInUp 1s ease;
        }

        .countdown h2 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 2rem;
            color: #ffd700;
        }

        .countdown-timer {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }

        .time-unit {
            background: linear-gradient(135deg, rgba(78, 205, 196, 0.2), rgba(255, 107, 107, 0.2));
            border-radius: 15px;
            padding: 25px;
            min-width: 120px;
            text-align: center;
            border: 2px solid rgba(255, 215, 0, 0.5);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .time-unit:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(255, 215, 0, 0.4);
        }

        .time-value {
            font-size: 3rem;
            font-weight: bold;
            color: #ffd700;
            display: block;
        }

        .time-label {
            font-size: 1rem;
            color: #4ecdc4;
            text-transform: uppercase;
            margin-top: 10px;
        }

        .fireworks-btn {
            display: block;
            margin: 40px auto;
            padding: 20px 50px;
            font-size: 1.5rem;
            font-weight: bold;
            color: #1a1a2e;
            background: linear-gradient(45deg, #ffd700, #ff6b6b);
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 5px 20px rgba(255, 215, 0, 0.5);
            animation: bounce 2s infinite;
        }

        .fireworks-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 10px 40px rgba(255, 215, 0, 0.8);
        }

        .fireworks-btn:active {
            transform: scale(0.95);
        }

        .wishes-section {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 40px;
            margin: 40px 0;
            border: 2px solid rgba(78, 205, 196, 0.3);
            animation: fadeIn 1.5s ease;
        }

        .wishes-section h2 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 2rem;
            color: #4ecdc4;
        }

        .wish-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .wish-card {
            background: linear-gradient(135deg, rgba(255, 107, 107, 0.2), rgba(78, 205, 196, 0.2));
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            border: 2px solid rgba(255, 215, 0, 0.3);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .wish-card:hover {
            transform: translateY(-10px) rotate(2deg);
            box-shadow: 0 15px 40px rgba(78, 205, 196, 0.4);
            border-color: #ffd700;
        }

        .wish-icon {
            font-size: 3rem;
            margin-bottom: 15px;
        }

        .wish-text {
            font-size: 1.1rem;
            line-height: 1.6;
        }

        #fireworks {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
        }

        .stars {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 0;
        }

        .star {
            position: absolute;
            width: 2px;
            height: 2px;
            background: #fff;
            border-radius: 50%;
            animation: twinkle 3s infinite;
        }

        .music-toggle {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            background: linear-gradient(45deg, #ff6b6b, #4ecdc4);
            border: none;
            border-radius: 50%;
            cursor: pointer;
            font-size: 1.5rem;
            color: #fff;
            box-shadow: 0 5px 20px rgba(78, 205, 196, 0.5);
            transition: transform 0.3s ease;
            z-index: 1000;
        }

        .music-toggle:hover {
            transform: scale(1.1) rotate(15deg);
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
            40% { transform: translateY(-20px); }
            60% { transform: translateY(-10px); }
        }

        @keyframes twinkle {
            0%, 100% { opacity: 0.3; }
            50% { opacity: 1; }
        }

        @media (max-width: 768px) {
            h1 { font-size: 2.5rem; }
            .year { font-size: 4rem; }
            .subtitle { font-size: 1.2rem; }
            .countdown-timer { gap: 15px; }
            .time-unit { min-width: 80px; padding: 15px; }
            .time-value { font-size: 2rem; }
            .fireworks-btn { padding: 15px 30px; font-size: 1.2rem; }
        }
    </style>
</head>
<body>
    <div class="stars" id="stars"></div>
    <canvas id="fireworks"></canvas>
    
    <div class="container">
        <header>
            <h1>Happy New Year</h1>
            <div class="year">2026</div>
            <p class="subtitle">Wishing you joy, success, and endless possibilities!</p>
        </header>

        <div class="countdown">
            <h2>Time Until Next Year</h2>
            <div class="countdown-timer">
                <div class="time-unit">
                    <span class="time-value" id="days">00</span>
                    <span class="time-label">Days</span>
                </div>
                <div class="time-unit">
                    <span class="time-value" id="hours">00</span>
                    <span class="time-label">Hours</span>
                </div>
                <div class="time-unit">
                    <span class="time-value" id="minutes">00</span>
                    <span class="time-label">Minutes</span>
                </div>
                <div class="time-unit">
                    <span class="time-value" id="seconds">00</span>
                    <span class="time-label">Seconds</span>
                </div>
            </div>
        </div>

        <button class="fireworks-btn" onclick="launchFireworks()">🎆 Launch Fireworks! 🎆</button>

        <div class="wishes-section">
            <h2>New Year Wishes</h2>
            <div class="wish-cards">
                <div class="wish-card" onclick="showWish(this)">
                    <div class="wish-icon">🎯</div>
                    <div class="wish-text">May all your goals and dreams come true in 2026!</div>
                </div>
                <div class="wish-card" onclick="showWish(this)">
                    <div class="wish-icon">❤️</div>
                    <div class="wish-text">Wishing you health, happiness, and prosperity!</div>
                </div>
                <div class="wish-card" onclick="showWish(this)">
                    <div class="wish-icon">✨</div>
                    <div class="wish-text">May this year bring you endless opportunities!</div>
                </div>
                <div class="wish-card" onclick="showWish(this)">
                    <div class="wish-icon">🌟</div>
                    <div class="wish-text">Here's to new beginnings and amazing adventures!</div>
                </div>
            </div>
        </div>
    </div>

    <button class="music-toggle" onclick="toggleMusic()" title="Toggle celebration sounds">🔊</button>

    <script>
        // Generate stars
        const starsContainer = document.getElementById('stars');
        for (let i = 0; i < 100; i++) {
            const star = document.createElement('div');
            star.className = 'star';
            star.style.left = Math.random() * 100 + '%';
            star.style.top = Math.random() * 100 + '%';
            star.style.animationDelay = Math.random() * 3 + 's';
            starsContainer.appendChild(star);
        }

        // Countdown timer
        function updateCountdown() {
            const now = new Date();
            const nextYear = new Date(now.getFullYear() + 1, 0, 1);
            const diff = nextYear - now;

            const days = Math.floor(diff / (1000 * 60 * 60 * 24));
            const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((diff % (1000 * 60)) / 1000);

            document.getElementById('days').textContent = String(days).padStart(2, '0');
            document.getElementById('hours').textContent = String(hours).padStart(2, '0');
            document.getElementById('minutes').textContent = String(minutes).padStart(2, '0');
            document.getElementById('seconds').textContent = String(seconds).padStart(2, '0');
        }

        setInterval(updateCountdown, 1000);
        updateCountdown();

        // Fireworks
        const canvas = document.getElementById('fireworks');
        const ctx = canvas.getContext('2d');
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;

        let particles = [];
        let isFireworksActive = false;

        class Particle {
            constructor(x, y, color) {
                this.x = x;
                this.y = y;
                this.color = color;
                this.velocity = {
                    x: (Math.random() - 0.5) * 8,
                    y: (Math.random() - 0.5) * 8
                };
                this.alpha = 1;
                this.decay = Math.random() * 0.02 + 0.01;
            }

            draw() {
                ctx.save();
                ctx.globalAlpha = this.alpha;
                ctx.fillStyle = this.color;
                ctx.beginPath();
                ctx.arc(this.x, this.y, 3, 0, Math.PI * 2);
                ctx.fill();
                ctx.restore();
            }

            update() {
                this.velocity.y += 0.1;
                this.x += this.velocity.x;
                this.y += this.velocity.y;
                this.alpha -= this.decay;
            }
        }

        function createFirework(x, y) {
            const colors = ['#ffd700', '#ff6b6b', '#4ecdc4', '#ff1493', '#00ff00', '#ffff00'];
            for (let i = 0; i < 50; i++) {
                particles.push(new Particle(x, y, colors[Math.floor(Math.random() * colors.length)]));
            }
        }

        function animate() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);

            particles = particles.filter(p => p.alpha > 0);
            particles.forEach(p => {
                p.update();
                p.draw();
            });

            if (isFireworksActive && Math.random() < 0.1) {
                createFirework(
                    Math.random() * canvas.width,
                    Math.random() * canvas.height * 0.5
                );
            }

            requestAnimationFrame(animate);
        }

        animate();

        function launchFireworks() {
            isFireworksActive = true;
            for (let i = 0; i < 5; i++) {
                setTimeout(() => {
                    createFirework(
                        Math.random() * canvas.width,
                        Math.random() * canvas.height * 0.5
                    );
                }, i * 200);
            }
            setTimeout(() => {
                isFireworksActive = false;
            }, 3000);
        }

        window.addEventListener('resize', () => {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        });

        function showWish(card) {
            card.style.transform = 'scale(1.1) rotate(5deg)';
            setTimeout(() => {
                card.style.transform = '';
            }, 300);
        }

        let audioContext;
        let isSoundEnabled = false;

        function toggleMusic() {
            isSoundEnabled = !isSoundEnabled;
            const btn = document.querySelector('.music-toggle');
            btn.textContent = isSoundEnabled ? '🔊' : '🔇';
            
            if (isSoundEnabled && !audioContext) {
                audioContext = new (window.AudioContext || window.webkitAudioContext)();
            }
        }

        // Auto-launch fireworks on page load
        setTimeout(() => launchFireworks(), 1000);
    </script>
</body>
</html>