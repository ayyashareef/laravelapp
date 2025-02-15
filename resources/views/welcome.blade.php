<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Excellence</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background: #000000;
            color: white;
            min-height: 100vh;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem 5%;
        }

        .logo {
            color: white;
            text-decoration: none;
            font-size: 1.5rem;
            font-weight: 700;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .nav-link {
            color: #94a3b8;
            text-decoration: none;
            padding: 0.6rem 1.2rem;
            border-radius: 100px;
            transition: all 0.3s ease;
            font-size: 0.95rem;
            border: 1px solid rgba(255, 255, 255, 0.1);
            background: rgba(15, 23, 42, 0.3);
        }

        .nav-link:hover {
            color: white;
            border-color: rgba(255, 255, 255, 0.2);
            background: rgba(255, 255, 255, 0.1);
        }

        .nav-link.active {
            color: white;
            background: rgba(255, 255, 255, 0.1);
            border-color: rgba(255, 255, 255, 0.2);
        }

        .lets-talk-btn {
            background: #3498db;
            padding: 0.8rem 1.5rem;
            border-radius: 25px;
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .lets-talk-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(52, 152, 219, 0.3);
        }

        .hero {
            text-align: center;
            padding: 8rem 5% 4rem;
            position: relative;
            z-index: 1;
        }

        .welcome-badge {
            background: rgba(52, 152, 219, 0.1);
            padding: 0.5rem 1rem;
            border-radius: 20px;
            display: inline-block;
            margin-bottom: 2rem;
            border: 1px solid rgba(52, 152, 219, 0.2);
            color: #3498db;
        }

        .hero h1 {
            font-size: 4rem;
            margin-bottom: 1.5rem;
            line-height: 1.2;
            background: linear-gradient(to right, #fff, #ccc);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: shimmer 2s infinite;
        }

        .hero p {
            font-size: 1.1rem;
            color: #999;
            margin-bottom: 2rem;
        }

        .get-started-btn {
            background: rgba(41, 128, 185, 0.8);
            padding: 1rem 2rem;
            border-radius: 25px;
            color: white;
            text-decoration: none;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .wave-bg {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 0;
            opacity: 0.6;
            pointer-events: none;
        }

        .trusted-by {
            text-align: center;
            padding: 4rem 5%;
        }

        .trusted-by p {
            color: #888;
            margin-bottom: 2rem;
        }

        .logo-grid {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 4rem;
            flex-wrap: wrap;
        }

        .logo-grid img {
            height: 40px;
            opacity: 0.5;
            filter: brightness(0.8) grayscale(1) invert(1);
        }

        .background {
            position: fixed;
            width: 100vw;
            height: 100vh;
            top: 0;
            left: 0;
            background: linear-gradient(135deg, #000000 0%, #111111 100%);
            overflow: hidden;
            z-index: -1;
        }

        .background span {
            position: absolute;
            pointer-events: none;
            background: linear-gradient(45deg, #1a1a1a, #333333);
            border-radius: 50%;
            filter: blur(30px);
            opacity: 0.4;
            animation: moveGradient 15s infinite;
        }

        .background span:nth-child(1) {
            width: 600px;
            height: 600px;
            left: -300px;
            top: -300px;
            animation-delay: 0s;
            background: linear-gradient(45deg, #1e3c72, #2a5298);
        }

        .background span:nth-child(2) {
            width: 500px;
            height: 500px;
            right: -250px;
            bottom: -250px;
            animation-delay: -2s;
            background: linear-gradient(45deg, #232526, #414345);
        }

        .background span:nth-child(3) {
            width: 400px;
            height: 400px;
            right: 30%;
            top: 30%;
            animation-delay: -4s;
            background: linear-gradient(45deg, #000428, #004e92);
        }

        .background span:nth-child(4) {
            width: 300px;
            height: 300px;
            left: 25%;
            bottom: 20%;
            animation-delay: -6s;
            background: linear-gradient(45deg, #0f2027, #203a43);
        }

        .background span:nth-child(5) {
            width: 200px;
            height: 200px;
            left: 60%;
            top: 15%;
            animation-delay: -8s;
            background: linear-gradient(45deg, #16222a, #3a6073);
        }

        .background span:nth-child(6) {
            width: 350px;
            height: 350px;
            right: 40%;
            bottom: 40%;
            animation-delay: -10s;
            background: linear-gradient(45deg, #1f1c2c, #928dab);
        }

        @keyframes moveGradient {
            0% {
                transform: translate(0, 0) rotate(0deg) scale(1);
            }
            25% {
                transform: translate(10%, 10%) rotate(90deg) scale(1.1);
            }
            50% {
                transform: translate(-5%, 5%) rotate(180deg) scale(0.9);
            }
            75% {
                transform: translate(5%, -5%) rotate(270deg) scale(1.1);
            }
            100% {
                transform: translate(0, 0) rotate(360deg) scale(1);
            }
        }

        .navbar, .hero, .trusted-by {
            position: relative;
            z-index: 1;
        }

        .hero h1, .hero p, .navbar a {
            text-shadow: 0 2px 4px rgba(0,0,0,0.2);
        }

        .hero h1 span {
            color: #3498db;
            text-shadow: 0 0 20px rgba(52, 152, 219, 0.3);
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at center, transparent 0%, rgba(0,0,0,0.8) 100%);
            pointer-events: none;
            z-index: -1;
        }

        body::after {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAMAAAAp4XiDAAAAUVBMVEWFhYWDg4N3d3dtbW17e3t1dXWBgYGHh4d5eXlzc3OLi4ubm5uVlZWPj4+NjY19fX2JiYl/f39ra2uRkZGZmZlpaWmXl5dvb29xcXGTk5NnZ2c8TV1mAAAAG3RSTlNAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEAvEOwtAAAFVklEQVR4XpWWB67c2BUFb3g557T/hRo9/WUMZHlgr4Bg8Z4qQgQJlHI4A8SzFVrapvmTF9O7dmYRFZ60YiBhJRCgh1FYhiLAmdvX0CzTOpNE77ME0Zty/nWWzchDtiqrmQDeuv3powQ5ta2eN0FY0InkqDD73lT9c9lEzwUNqgFHs9VQce3TVClFCQrSTfOiYkVJQBmpbq2L6iZavPnAPcoU0dSw0SUTqz/GtrGuXfbyyBniKykOWQWGqwwMA7QiYAxi+IlPdqo+hYHnUt5ZPfnsHJyNiDtnpJyayNBkF6cWoYGAMY92U2hXHF/C1M8uP/ZtYdiuj26UdAdQQSXQErwSOMzt/XWRWAz5GuSBIkwG1H3FabJ2OsUOUhGC6tK4EMtJO0ttC6IBD3kM0ve0tJwMdSfjZo+EEISaeTr9P3wYrGjXqyC1krcKdhMpxEnt5JetoulscpyzhXN5FRpuPHvbeQaKxFAEB6EN+cYN6xD7RYGpXpNndMmZgM5Dcs3YSNFDHUo2LGfZuukSWyUYirJAdYbF3MfqEKmjM+I2EfhA94iG3L7uKrR+GdWD73ydlIB+6hgref1QTlmgmbM3/LeX5GI1Ux1RWpgxpLuZ2+I+IjzZ8wqE4nilvQdkUdfhzI5QDWy+kw5Wgg2pGpeEVeCCA7b85BO3F9DzxB3cdqvBzWcmzbyMiqhzuYqtHRVG2y4x+KOlnyqla8AoWWpuBoYRxzXrfKuILl6SfiWCbjxoZJUaCBj1CjH7GIaDbc9kqBY3W/Rgjda1iqQcOJu2WW+76pZC9QG7M00dffe9hNnseupFL53r8F7YHSwJWUKP2q+k7RdsxyOB11n0xtOvnW4irMMFNV4H0uqwS5ExsmP9AxbDTc9JwgneAT5vTiUSm1E7BSflSt3bfa1tv8Di3R8n3Af7MNWzs49hmauE2wP+ttrq+AsWpFG2awvsuOqbipWHgtuvuaAE+A1Z/7gC9hesnr+7wqCwG8c5yAg3AL1fm8T9AZtp/bbJGwl1pNrE7RuOX7PeMRUERVaPpEs+yqeoSmuOlokqw49pgomjLeh7icHNlG19yjs6XXOMedYm5xH2YxpV2tc0Ro2jJfxC50ApuxGob7lMsxfTbeUv07TyYxpeLucEH1gNd4IKH2LAg5TdVhlCafZvpskfncCfx8pOhJzd76bJWeYFnFciwcYfubRc12Ip/ppIhA1/mSZ/RxjFDrJC5xifFjJpY2Xl5zXdguFqYyTR1zSp1Y9p+tktDYYSNflcxI0iyO4TPBdlRcpeqjK/piF5bklq77VSEaA+z8qmJTFzIW

        /* Responsive design */
        @media (max-width: 768px) {
            .nav-menu {
                display: none; /* For mobile, you'll need to add a hamburger menu */
            }
        }

        /* Optional: Add hover effect to the entire navbar */
        .navbar:hover {
            border-color: rgba(255, 255, 255, 0.2);
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }

        /* Optional: Add subtle transition to links */
        .nav-link {
            position: relative;
            overflow: hidden;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: #3498db;
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .nav-link:hover::after {
            width: 60%;
        }
    </style>
</head>
<body>
    <div class="background">
        <span></span>
        <span></span>
        <span></span>   
        <span></span>
        <span></span>
        <span></span>
    </div>

    <nav class="navbar">
        <a href="/" class="logo">INCODE</a>
        <div class="nav-menu">
            <a href="/" class="nav-link active">Home</a>
            <a href="/about" class="nav-link">About</a>
       
            <a href="/portfolio" class="nav-link">Portfolio</a>
     
            <a href="/contact" class="nav-link">Contact</a>
            <a href="#" class="lets-talk-btn">Let's Talk →</a>
        </div>
    </nav>

    <div class="hero">
        <div class="welcome-badge">🎨 Transforming Your Vision </div>
        <h1>Crafting Digital<br>Masterpieces With<br><span style="color: #3498db;">Design Excellence</span></h1>
        <p>Transform Your Vision into Stunning Websites.<br>Where Innovation Meets Beautiful Design.</p>
        <a href="#" class="get-started-btn">Start Your Project →</a>
    </div>

    <div class="trusted-by">
        <p>Trusted by innovative brands and creative businesses</p>
        <div class="logo-grid">
            <img src="path-to-logo1.png" alt="Client Logo">
            <img src="path-to-logo2.png" alt="Client Logo">
            <img src="path-to-logo3.png" alt="Client Logo">
            <img src="path-to-logo4.png" alt="Client Logo">
            <img src="path-to-logo5.png" alt="Client Logo">
        </div>
    </div>
</body>
</html>