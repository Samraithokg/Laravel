<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frosty Delights | Premium Ice Cream Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Pacifico&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
        }
        .font-cursive {
            font-family: 'Pacifico', cursive;
        }
        .hero-gradient {
            background: linear-gradient(135deg, #fce4ec 0%, #f3e5f5 100%);
        }
        .nav-link:after {
            content: '';
            display: block;
            width: 0;
            height: 2px;
            background: #ec4899;
            transition: width .3s;
        }
        .nav-link:hover:after {
            width: 100%;
        }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
        .floating-icecream {
            animation: float 4s ease-in-out infinite;
        }
    </style>
</head>
<body class="bg-pink-50 text-gray-800">

    <!-- Navigation -->
    <nav class="fixed w-full z-50 bg-white/80 backdrop-blur-md shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex-shrink-0 flex items-center">
                    <span class="text-3xl font-cursive text-pink-500">Frosty Delights</span>
                </div>
                <!-- Desktop Menu -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <a href="#home" class="nav-link px-3 py-2 text-lg font-medium text-pink-500">Home</a>
                        <a href="#aboutus" class="nav-link px-3 py-2 text-lg font-medium hover:text-pink-500">About</a>
                        <a href="#service" class="nav-link px-3 py-2 text-lg font-medium hover:text-pink-500">Services</a>
                        <a href="#contact" class="nav-link px-3 py-2 text-lg font-medium hover:text-pink-500">Contact</a>
                    </div>
                </div>
                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-pink-500 p-2">
                        <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-b border-pink-100">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 text-center">
                <a href="#" class="block px-3 py-2 text-base font-medium text-pink-500">Home</a>
                <a href="#" class="block px-3 py-2 text-base font-medium">About</a>
                <a href="#" class="block px-3 py-2 text-base font-medium">Services</a>
                <a href="#" class="block px-3 py-2 text-base font-medium">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Home (Hero) Section -->
    <main id="home" class="hero-gradient min-h-screen flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid md:grid-cols-2 gap-12 items-center pt-20">
            <!-- Left Side: Text Content -->
            <div class="space-y-8">
                <div>
                    <span class="inline-block px-4 py-1 rounded-full bg-pink-200 text-pink-700 text-sm font-semibold tracking-wide uppercase mb-4">
                        Handcrafted with Love
                    </span>
                    <h1 class="text-6xl md:text-8xl font-bold leading-tight text-gray-900">
                        Savor the <br>
                        <span class="text-pink-500 font-cursive">Sweetest</span> <br>
                        Moments
                    </h1>
                </div>
                <p class="text-xl text-gray-600 max-w-lg leading-relaxed">
                    Welcome to Frosty Delights, where every scoop tells a story of pure cream, fresh fruits, and artisanal craft. Experience the magic of real flavors.
                </p>
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-6">
                    <button class="bg-pink-500 text-white px-10 py-4 rounded-full text-lg font-bold hover:bg-pink-600 transition transform hover:scale-105 shadow-xl">
                        Explore Menu
                    </button>
                    <button class="bg-white text-pink-500 border-2 border-pink-500 px-10 py-4 rounded-full text-lg font-bold hover:bg-pink-50 transition transform hover:scale-105">
                        Find a Store
                    </button>
                </div>
                <!-- Mini Stats/Features -->
                <div class="grid grid-cols-3 gap-4 pt-8 border-t border-pink-200">
                    <div class="text-center">
                        <div class="text-2xl font-bold text-pink-600">50+</div>
                        <div class="text-xs text-gray-500 uppercase">Flavors</div>
                    </div>
                    <div class="text-center border-x border-pink-200">
                        <div class="text-2xl font-bold text-pink-600">100%</div>
                        <div class="text-xs text-gray-500 uppercase">Natural</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-pink-600">Free</div>
                        <div class="text-xs text-gray-500 uppercase">Delivery</div>
                    </div>
                </div>
            </div>

            <!-- Right Side: Visual Asset -->
            <div class="relative flex justify-center items-center">
                <!-- Background Blob -->
                <div class="absolute w-72 h-72 md:w-96 md:h-96 bg-pink-300 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse"></div>
                
                <!-- Main Illustration Area -->
                <div class="relative z-10 floating-icecream">
                    <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="w-full max-w-md drop-shadow-2xl">
                        <circle cx="100" cy="100" r="80" fill="#ffffff" fill-opacity="0.4" />
                        <text x="45" y="130" font-size="100">🍦</text>
                        <text x="110" y="100" font-size="60" rotate="-15">🍨</text>
                    </svg>
                </div>

                <!-- Floating Elements -->
                <div class="absolute top-10 right-10 text-4xl animate-bounce">🍓</div>
                <div class="absolute bottom-20 left-0 text-3xl opacity-60">✨</div>
                <div class="absolute top-1/2 left-10 text-4xl animate-pulse">🍫</div>
            </div>
        </div>
    </main>

    <script>
        // Mobile menu logic
        const btn = document.getElementById('mobile-menu-button');
        const menu = document.getElementById('mobile-menu');
        
        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>