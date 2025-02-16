<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - INCODE</title>
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
            letter-spacing: 1px;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 2rem;
        }

        .nav-link {
            color: #94a3b8;
            text-decoration: none;
            padding: 0.6rem 1.2rem;
            border-radius: 100px;
            transition: all 0.3s ease;
            font-size: 0.85rem;
            letter-spacing: 1px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            background: rgba(15, 23, 42, 0.3);
        }

        .nav-link:hover, 
        .nav-link.active {
            color: white;
            border-color: rgba(255, 255, 255, 0.2);
            background: rgba(255, 255, 255, 0.1);
        }

        @media screen and (max-width: 768px) {
            .nav-menu {
                gap: 1rem;
            }

            .nav-link {
                padding: 0.5rem 1rem;
                font-size: 0.8rem;
            }
        }

        .lets-talk-btn {
            background: #3498db;
            padding: 0.8rem 1.5rem;
            border-radius: 25px;
            color: white;
            text-decoration: none;
            font-weight: 500;
        }

        /* About page specific styles */
        .about-hero {
            padding: 6rem 5% 4rem;
            text-align: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* About content styles */
        .about-content {
            max-width: 1000px;
            margin: 0 auto;
            padding: 8rem 2rem;
            text-align: center;
        }

        .company-logo {
            font-size: 4rem;
            font-weight: 500;
            margin-bottom: 4rem;
            letter-spacing: -1px;
        }

        .main-description {
            font-size: 1.8rem;
            line-height: 1.5;
            margin-bottom: 4rem;
            font-weight: 400;
            opacity: 0.9;
        }

        .secondary-description {
            font-size: 1.4rem;
            line-height: 1.6;
            margin-bottom: 4rem;
            opacity: 0.8;
        }

        .copyright {
            font-size: 0.9rem;
            opacity: 0.5;
            letter-spacing: 1px;
        }

        @media screen and (max-width: 768px) {
            .nav-menu {
                gap: 1rem;
            }

            .nav-link {
                padding: 0.5rem 1rem;
                font-size: 0.8rem;
            }

            .about-content {
                padding: 4rem 1.5rem;
            }

            .company-logo {
                font-size: 3rem;
                margin-bottom: 3rem;
            }

            .main-description {
                font-size: 1.4rem;
                margin-bottom: 3rem;
            }

            .secondary-description {
                font-size: 1.1rem;
            }
        }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-transparent">
       
            <nav class="navbar">
        <a href="{{ route('home') }}" class="logo">INCODE</a>
        <div class="nav-menu">
            <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a>
            
            <a href="{{ route('portfolio') }}" class="nav-link {{ request()->routeIs('portfolio') ? 'active' : '' }}">Portfolio</a>
         
            <a href="#" class="lets-talk-btn">Let's Talk →</a>
        </div>
    </nav>
        </div>
    </header>

    <!-- About Us Content -->
    
    <div class="about-content">
        <h1 class="company-logo">INCODE</h1>
        
        <p class="main-description">
            INCODE is a cutting-edge digital design studio crafting exceptional web experiences 
            with precision and innovation. With our clean approach and balanced methodology, 
            we create perfect solutions for branding, digital products, and web applications.
        </p>

        <p class="secondary-description">
            Our expertise spans across multiple disciplines—UI/UX, Development, and Digital Strategy—allowing 
            us to create dynamic digital experiences with ease. Whether you're looking for a bold corporate 
            presence or an elegant e-commerce platform, INCODE delivers sophisticated solutions with 
            a touch of modern innovation.
        </p>

        <div class="copyright">
            © [2024] [INCODE] [DIGITAL DESIGN STUDIO]
        </div>
    </div>
</body>
</html>