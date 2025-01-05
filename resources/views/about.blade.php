<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-gradient-to-r from-orange-300 to-yellow-300">
        <div class="container mx-auto px-4 py-4 flex items-center justify-between">
            <div class="flex items-center">
                <img src="/path-to-your-logo.png" alt="Logo" class="h-12">
            </div>
            <nav>
                <ul class="flex space-x-8">
                    <li><a href="{{ route('home') }}" class="text-white font-medium hover:text-gray-200">HOME</a></li>
                    <li><a href="#" class="text-white font-medium hover:text-gray-200">BOOK NOW</a></li>
                    <li><a href="{{ route('about') }}" class="text-white font-medium hover:text-gray-200">ABOUT US</a></li>
                    <li><a href="#" class="text-white font-medium hover:text-gray-200">CONTACT US</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- About Us Content -->
    <div class="container mx-auto px-4 py-12">
        <!-- Main Section -->
        <div class="max-w-4xl mx-auto">
            <h1 class="text-4xl font-bold text-gray-800 mb-8 text-center">About Us</h1>
            
            <!-- Mission Statement -->
            <div class="bg-white rounded-lg shadow-md p-8 mb-8">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Our Mission</h2>
                <p class="text-gray-600 leading-relaxed">
                    We are dedicated to providing exceptional service and creating memorable experiences for our customers. 
                    Our commitment to excellence drives everything we do.
                </p>
            </div>

            <!-- Our Story -->
            <div class="bg-white rounded-lg shadow-md p-8 mb-8">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Our Story</h2>
                <p class="text-gray-600 leading-relaxed mb-4">
                    Founded in [Year], our journey began with a simple vision: [Your Vision Here]. 
                    Since then, we've grown to become a trusted name in [Your Industry].
                </p>
                <p class="text-gray-600 leading-relaxed">
                    Today, we continue to innovate and improve, always putting our customers first 
                    and striving to exceed expectations in everything we do.
                </p>
            </div>

            <!-- Values -->
            <div class="grid md:grid-cols-3 gap-6 mb-8">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Quality</h3>
                    <p class="text-gray-600">
                        We maintain the highest standards in all our services and products.
                    </p>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Integrity</h3>
                    <p class="text-gray-600">
                        We conduct our business with honesty and transparency.
                    </p>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Innovation</h3>
                    <p class="text-gray-600">
                        We continuously evolve to meet changing customer needs.
                    </p>
                </div>
            </div>

            <!-- Team Section -->
            <div class="bg-white rounded-lg shadow-md p-8">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6">Our Team</h2>
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="text-center">
                        <img src="https://via.placeholder.com/150" alt="Team Member" class="rounded-full mx-auto mb-4">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">John Doe</h3>
                        <p class="text-gray-600">Founder & CEO</p>
                    </div>
                    <div class="text-center">
                        <img src="https://via.placeholder.com/150" alt="Team Member" class="rounded-full mx-auto mb-4">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Jane Smith</h3>
                        <p class="text-gray-600">Operations Manager</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>