<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frosty Delights | Premium Ice Cream Services</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Pacifico&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
            scroll-behavior: smooth;
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
        .card-hover:hover {
            transform: translateY(-10px);
            transition: all 0.3s ease;
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
                        <a href="#home" class="nav-link px-3 py-2 text-lg font-medium hover:text-pink-500">Home</a>
                        <a href="#about" class="nav-link px-3 py-2 text-lg font-medium hover:text-pink-500">About</a>
                        <a href="#services" class="nav-link px-3 py-2 text-lg font-medium hover:text-pink-500">Services</a>
                        <a href="#contact" class="nav-link px-3 py-2 text-lg font-medium text-pink-500">Contact</a>
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
                <a href="#home" class="block px-3 py-2 text-base font-medium">Home</a>
                <a href="#aboutus" class="block px-3 py-2 text-base font-medium">About</a>
                <a href="#services" class="block px-3 py-2 text-base font-medium">Services</a>
                <a href="#contact" class="block px-3 py-2 text-base font-medium text-pink-500">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Home (Hero) Section -->
    <section id="home" class="hero-gradient min-h-screen flex items-center">
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
                    Welcome to Frosty Delights, where every scoop tells a story of pure cream, fresh fruits, and artisanal craft.
                </p>
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-6">
                    <a href="#services" class="bg-pink-500 text-white px-10 py-4 rounded-full text-lg font-bold hover:bg-pink-600 transition text-center shadow-xl">
                        View Services
                    </a>
                </div>
            </div>

            <!-- Right Side: Visual Asset -->
            <div class="relative flex justify-center items-center">
                <div class="absolute w-72 h-72 md:w-96 md:h-96 bg-pink-300 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse"></div>
                <div class="relative z-10 floating-icecream text-[150px] md:text-[200px]">
                    🍦
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <!-- Left: Image/Illustration -->
                <div class="relative">
                    <div class="bg-pink-100 rounded-[2rem] p-12 flex justify-center items-center h-[500px] shadow-inner">
                        <span class="text-[180px] drop-shadow-xl">🍨</span>
                    </div>
                    <!-- Stats Badge -->
                    <div class="absolute -bottom-6 -right-6 bg-white p-6 rounded-2xl shadow-2xl border-b-4 border-pink-500">
                        <p class="text-4xl font-bold text-pink-500">15+</p>
                        <p class="text-sm text-gray-500 font-semibold uppercase tracking-wider">Years of Joy</p>
                    </div>
                </div>

                <!-- Right: Content -->
                <div class="space-y-8">
                    <div class="space-y-4">
                        <h2 class="text-pink-500 font-cursive text-3xl">Our Delicious Journey</h2>
                        <h3 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight">
                            We believe in ice cream that makes you <span class="text-pink-500">smile.</span>
                        </h3>
                    </div>
                    
                    <p class="text-lg text-gray-600 leading-relaxed">
                        Started as a small family-owned parlor in 2009, Frosty Delights has always been about one thing: quality. We source our milk from local organic farms and our fruits are picked at the peak of ripeness.
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="flex items-start space-x-4">
                            <div class="bg-pink-100 p-3 rounded-lg text-pink-500 text-2xl">🌱</div>
                            <div>
                                <h4 class="font-bold text-gray-900">Natural Ingredients</h4>
                                <p class="text-sm text-gray-500">No artificial colors or preservatives, ever.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="bg-pink-100 p-3 rounded-lg text-pink-500 text-2xl">🥣</div>
                            <div>
                                <h4 class="font-bold text-gray-900">Small Batches</h4>
                                <p class="text-sm text-gray-500">Churned daily to ensure perfect texture.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-24 bg-pink-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 space-y-4">
                <h2 class="text-pink-500 font-cursive text-3xl">What We Offer</h2>
                <h3 class="text-4xl font-bold text-gray-900">Our Cool Services</h3>
                <div class="h-1.5 w-24 bg-pink-500 mx-auto rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <!-- Service Card 1 -->
                <div class="bg-white p-10 rounded-[2.5rem] shadow-xl text-center card-hover border-b-8 border-pink-400">
                    <div class="w-24 h-24 bg-pink-100 rounded-full flex items-center justify-center mx-auto mb-8 text-5xl">
                        🍦
                    </div>
                    <h4 class="text-2xl font-bold text-gray-900 mb-4">Artisanal Scoops</h4>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        From classic vanilla to exotic seasonal blends, we have over 50+ unique flavors to satisfy your cravings.
                    </p>
                    <button class="text-pink-500 font-bold hover:text-pink-600 transition">View Flavors →</button>
                </div>

                <!-- Service Card 2 -->
                <div class="bg-white p-10 rounded-[2.5rem] shadow-xl text-center card-hover border-b-8 border-blue-400">
                    <div class="w-24 h-24 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-8 text-5xl">
                        🎂
                    </div>
                    <h4 class="text-2xl font-bold text-gray-900 mb-4">Ice Cream Cakes</h4>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Customized multi-layered ice cream cakes for birthdays and anniversaries that taste as good as they look.
                    </p>
                    <button class="text-blue-500 font-bold hover:text-blue-600 transition">Order Custom →</button>
                </div>

                <!-- Service Card 3 -->
                <div class="bg-white p-10 rounded-[2.5rem] shadow-xl text-center card-hover border-b-8 border-yellow-400">
                    <div class="w-24 h-24 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-8 text-5xl">
                        🚚
                    </div>
                    <h4 class="text-2xl font-bold text-gray-900 mb-4">Party Catering</h4>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        We bring the parlor to you! Our mobile ice cream carts are perfect for weddings, office parties, and events.
                    </p>
                    <button class="text-yellow-600 font-bold hover:text-yellow-700 transition">Book Event →</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 space-y-4">
                <h2 class="text-pink-500 font-cursive text-3xl">Get In Touch</h2>
                <h3 class="text-4xl font-bold text-gray-900">Visit Our Parlor</h3>
                <div class="h-1.5 w-24 bg-pink-500 mx-auto rounded-full"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-12">
                <!-- Contact Details -->
                <div class="bg-pink-500 rounded-[2.5rem] p-10 md:p-14 text-white space-y-10 shadow-2xl">
                    <h4 class="text-3xl font-bold font-cursive">Let's Talk!</h4>
                    <div class="space-y-6">
                        <div class="flex items-center space-x-6">
                            <div class="bg-white/20 p-4 rounded-2xl text-2xl">📍</div>
                            <div>
                                <p class="font-bold text-lg">Our Location</p>
                                <p class="text-pink-100">123 Sweet Street, Dessert Valley, CA 90210</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-6">
                            <div class="bg-white/20 p-4 rounded-2xl text-2xl">📞</div>
                            <div>
                                <p class="font-bold text-lg">Phone Number</p>
                                <p class="text-pink-100">+1 (555) 123-4567</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-6">
                            <div class="bg-white/20 p-4 rounded-2xl text-2xl">✉️</div>
                            <div>
                                <p class="font-bold text-lg">Email Us</p>
                                <p class="text-pink-100">hello@frostydelights.com</p>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6 border-t border-white/20">
                        <p class="font-bold text-xl mb-4">Follow us for updates:</p>
                        <div class="flex space-x-4 text-3xl">
                            <a href="#" class="hover:scale-110 transition">📸</a>
                            <a href="#" class="hover:scale-110 transition">📘</a>
                            <a href="#" class="hover:scale-110 transition">🐦</a>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="bg-pink-50 rounded-[2.5rem] p-10 shadow-inner">
                    <form class="space-y-6">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 ml-1">Name</label>
                                <input type="text" placeholder="Your Name" class="mt-1 block w-full px-5 py-4 rounded-2xl border-none ring-1 ring-pink-100 focus:ring-2 focus:ring-pink-500 outline-none shadow-sm transition">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 ml-1">Email</label>
                                <input type="email" placeholder="Your Email" class="mt-1 block w-full px-5 py-4 rounded-2xl border-none ring-1 ring-pink-100 focus:ring-2 focus:ring-pink-500 outline-none shadow-sm transition">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 ml-1">Subject</label>
                            <select class="mt-1 block w-full px-5 py-4 rounded-2xl border-none ring-1 ring-pink-100 focus:ring-2 focus:ring-pink-500 outline-none shadow-sm transition">
                                <option>General Inquiry</option>
                                <option>Order Support</option>
                                <option>Event Catering</option>
                                <option>Feedback</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 ml-1">Message</label>
                            <textarea rows="4" placeholder="How can we make your day sweeter?" class="mt-1 block w-full px-5 py-4 rounded-2xl border-none ring-1 ring-pink-100 focus:ring-2 focus:ring-pink-500 outline-none shadow-sm transition"></textarea>
                        </div>
                        <button type="submit" class="w-full bg-pink-500 text-white font-bold py-5 rounded-2xl shadow-lg hover:bg-pink-600 transition transform hover:-translate-y-1">
                            Send Message ✨
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 py-16 text-white">
        <div class="max-w-7xl mx-auto px-4 text-center space-y-8">
            <h2 class="text-4xl font-cursive text-pink-500">Frosty Delights</h2>
            <p class="max-w-md mx-auto text-gray-400">Bringing scoops of happiness to your neighborhood since 2009. Best quality, best taste.</p>
            
            <div class="flex justify-center space-x-8 text-gray-400">
                <a href="#home" class="hover:text-pink-400 transition">Home</a>
                <a href="#about" class="hover:text-pink-400 transition">About</a>
                <a href="#services" class="hover:text-pink-400 transition">Services</a>
                <a href="#contact" class="hover:text-pink-400 transition">Contact</a>
            </div>

            <div class="pt-8 border-t border-gray-800 text-gray-500 text-sm">
                &copy; 2024 Frosty Delights Ice Cream. All rights reserved.
            </div>
        </div>
    </footer>

    <script>
        const btn = document.getElementById('mobile-menu-button');
        const menu = document.getElementById('mobile-menu');
        
        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });

        // Close mobile menu on link click
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', () => {
                menu.classList.add('hidden');
            });
        });
    </script>
</body>
</html>