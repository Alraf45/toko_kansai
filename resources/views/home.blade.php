<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind CSS UI</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <!-- Header Section -->
        <header class="bg-white shadow-md rounded-lg p-6 mb-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="flex items-center mb-4 md:mb-0">
                    <img src="https://placehold.co/60x60" alt="Company logo - modern abstract design in blue gradient" class="w-12 h-12 mr-4 rounded-full">
                    <h1 class="text-2xl font-bold text-gray-800">My App</h1>
                </div>
                <nav class="flex space-x-4">
                    <a href="#" class="px-3 py-2 rounded-md text-gray-700 hover:bg-gray-100">Home</a>
                    <a href="#" class="px-3 py-2 rounded-md text-gray-700 hover:bg-gray-100">Features</a>
                    <a href="#" class="px-3 py-2 rounded-md text-gray-700 hover:bg-gray-100">Pricing</a>
                    <a href="#" class="px-3 py-2 rounded-md bg-blue-600 text-white hover:bg-blue-700">Sign Up</a>
                </nav>
            </div>
        </header>

        <!-- Hero Section -->
        <section class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
            <div class="md:flex">
                <div class="p-8 md:w-1/2">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Build amazing things</h2>
                    <p class="text-gray-600 mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <div class="flex space-x-4">
                        <button class="px-6 py-3 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Get Started</button>
                        <button class="px-6 py-3 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50">Learn More</button>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <img src="https://placehold.co/800x500" alt="Abstract digital design showing colorful ui elements and components" class="w-full h-full object-cover">
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Key Features</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Feature 1 -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Fast Performance</h3>
                    <p class="text-gray-600">Optimized for speed and efficiency to provide the best user experience.</p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15l8-8-8-8"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Easy Customization</h3>
                    <p class="text-gray-600">Simple to customize and adapt to your specific needs and preferences.</p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Cloud Integration</h3>
                    <p class="text-gray-600">Seamlessly connect with cloud services for enhanced functionality.</p>
                </div>
            </div>
        </section>

        <!-- Testimonials -->
        <section class="bg-white rounded-lg shadow-md p-8 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">What Our Users Say</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-gray-50 p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <img src="c:\Users\hittc\Downloads\CAT TEMBOK PROPERTY KANSAI PAINT 5KG.jpeg" alt="Profile picture of satisfied female customer with glasses" class="w-10 h-10 rounded-full mr-4">
                        <div>
                            <h4 class="font-medium text-gray-800">Sarah Johnson</h4>
                            <p class="text-sm text-gray-500">Marketing Director</p>
                        </div>
                    </div>
                    <p class="text-gray-600">"This product has transformed how our team works. The seamless integration and intuitive interface make it a joy to use daily."</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <img src="https://placehold.co/40x40" alt="Profile picture of male entrepreneur customer" class="w-10 h-10 rounded-full mr-4">
                        <div>
                            <h4 class="font-medium text-gray-800">Michael Chen</h4>
                            <p class="text-sm text-gray-500">CEO, Startup</p>
                        </div>
                    </div>
                    <p class="text-gray-600">"As a small business owner, I appreciate tools that just work. This one delivers exceptional value with minimal setup."</p>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-gray-800 text-white rounded-lg p-6">
            <div class="flex flex-col md:flex-row justify-between">
                <div class="mb-6 md:mb-0">
                    <div class="flex items-center mb-4">
                        <img src="https://placehold.co/40x40" alt="Company logo in white version" class="w-10 h-10 mr-3">
                        <h2 class="text-xl font-bold">My App</h2>
                    </div>
                    <p class="text-gray-300">Building the future, one pixel at a time.</p>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-8">
                    <div>
                        <h3 class="text-sm font-semibold uppercase tracking-wider mb-4">Product</h3>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-300 hover:text-white">Features</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white">Pricing</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white">API</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-sm font-semibold uppercase tracking-wider mb-4">Company</h3>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-300 hover:text-white">About</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white">Blog</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white">Careers</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-sm font-semibold uppercase tracking-wider mb-4">Legal</h3>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-300 hover:text-white">Privacy</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white">Terms</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white">Cookie Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-gray-700 flex justify-between items-center">
                <p class="text-gray-400">© 2023 My App. All rights reserved.</p>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-white">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.41a11.616 11.616 0 006.29 1.84"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.903 53.903 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
