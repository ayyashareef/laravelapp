<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-md w-96">
            <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Login</h2>
            
            <form method="POST" action="/login">
                @csrf
                
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        Email Address
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                           id="email"
                           type="email"
                           name="email"
                           required
                           placeholder="Enter your email">
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Password
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                           id="password"
                           type="password"
                           name="password"
                           required
                           placeholder="Enter your password">
                </div>

                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center">
                        <input type="checkbox" id="remember" name="remember" class="mr-2">
                        <label class="text-sm text-gray-600" for="remember">
                            Remember me
                        </label>
                    </div>
                    <a class="text-sm text-blue-500 hover:text-blue-700" href="#">
                        Forgot Password?
                    </a>
                </div>

                <button class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                    Sign In
                </button>
            </form>

            <p class="mt-4 text-center text-sm text-gray-600">
                Don't have an account? 
                <a href="#" class="text-blue-500 hover:text-blue-700">
                    Register here
                </a>
            </p>
        </div>
    </div>
</body>
</html>