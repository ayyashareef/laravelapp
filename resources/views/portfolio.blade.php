<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - INCODE </title>
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
        }

        /* Navbar styles */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem 5%;
        }

        .logo {
            color: white;
            text-decoration: none;
            font-size: 1.2rem;
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

        .nav-link:hover, .nav-link.active {
            color: white;
            border-color: rgba(255, 255, 255, 0.2);
            background: rgba(255, 255, 255, 0.1);
        }

        .lets-talk-btn {
            background: #3498db;
            padding: 0.8rem 1.5rem;
            border-radius: 25px;
            color: white;
            text-decoration: none;
            font-weight: 500;
        }

        /* Portfolio styles */
        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            padding: 4rem 5%;
            max-width: 1400px;
            margin: 0 auto;
        }

        .portfolio-item {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            background: #111;
            aspect-ratio: 9/16;
            transition: transform 0.3s ease;
        }

        .portfolio-item:hover {
            transform: translateY(-10px);
        }

        .portfolio-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: grayscale(100%);
        }

        .portfolio-content {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom, rgba(0,0,0,0.3), rgba(0,0,0,0.8));
            padding: 2rem;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .portfolio-item:hover .portfolio-content {
            opacity: 1;
        }

        .portfolio-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .portfolio-category {
            font-size: 0.9rem;
            color: #3498db;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .portfolio-link {
            align-self: flex-end;
            color: white;
            text-decoration: none;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
        }

        @media screen and (max-width: 768px) {
            .portfolio-grid {
                grid-template-columns: 1fr;
                padding: 2rem 1.5rem;
            }

            .nav-menu {
                display: none;
            }

            .mobile-menu-btn {
                display: block;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <a href="{{ route('home') }}" class="logo">INCODE.</a>
        <div class="nav-menu">
            <a href="{{ route('home') }}" class="nav-link">Home</a>
            <a href="{{ route('about') }}" class="nav-link">About</a>
         
            <a href="{{ route('portfolio') }}" class="nav-link active">Portfolio</a>
        
            
            <a href="#" class="lets-talk-btn">Let's Talk →</a>
        </div>
    </nav>

    <div class="portfolio-grid">
        <div class="portfolio-item">
            <img src="https://via.placeholder.com/600x800" alt="Wonder Mobile App" class="portfolio-image">
            <div class="portfolio-content">
                <div>
                    <div class="portfolio-category">Mobile App</div>
                    <h3 class="portfolio-title">Wonder</h3>
                </div>
                <a href="#" class="portfolio-link">View Project →</a>
            </div>
        </div>

        <div class="portfolio-item">
            <img src="https://via.placeholder.com/600x800" alt="Digital Universe" class="portfolio-image">
            <div class="portfolio-content">
                <div>
                    <div class="portfolio-category">Website</div>
                    <h3 class="portfolio-title">Digital Universe</h3>
                </div>
                <a href="#" class="portfolio-link">View Project →</a>
            </div>
        </div>

        <div class="portfolio-item">
            <img src="https://via.placeholder.com/600x800" alt="Wonder Brand" class="portfolio-image">
            <div class="portfolio-content">
                <div>
                    <div class="portfolio-category">Branding</div>
                    <h3 class="portfolio-title">Wonder Brand</h3>
                </div>
                <a href="#" class="portfolio-link">View Project →</a>
            </div>
        </div>
    </div>
</body>
</html> 