@extends('layouts.app')

@section('title', 'IT WEEK 2025 - Innovating Tomorrow, Today')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="bg-gradient-to-br from-blue-600 to-purple-700 text-white py-20">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-5xl md:text-6xl font-bold mb-4 animate-fade-in">IT WEEK 2025</h1>
            <p class="text-xl md:text-2xl mb-8 opacity-90">Innovating Tomorrow, Today</p>
            <button class="bg-white text-blue-600 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition transform hover:scale-105">
                Register Now
            </button>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">About IT WEEK 2025</h2>
                <div class="w-20 h-1 bg-blue-600 mx-auto"></div>
            </div>
            <div class="max-w-4xl mx-auto">
                <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                    IT WEEK 2025 is an annual celebration of innovation, technology, and creativity that brings together students, faculty, and industry professionals. This week-long event showcases the latest trends in information technology and provides a platform for learning, collaboration, and networking.
                </p>
                <div class="grid md:grid-cols-3 gap-8 mt-8">
                    <div class="text-center">
                        <div class="bg-blue-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="font-semibold text-lg mb-2">Main Objectives</h3>
                        <p class="text-gray-600">Promote IT literacy, showcase innovations, and foster industry-academe partnerships</p>
                    </div>
                    <div class="text-center">
                        <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"></path>
                            </svg>
                        </div>
                        <h3 class="font-semibold text-lg mb-2">Participants</h3>
                        <p class="text-gray-600">Computer Science, IT, Engineering departments, and industry partners</p>
                    </div>
                    <div class="text-center">
                        <div class="bg-green-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h3 class="font-semibold text-lg mb-2">Innovation</h3>
                        <p class="text-gray-600">Cutting-edge technology demonstrations and hands-on workshops</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Events/Activities Section -->
    <section id="events" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Featured Activities</h2>
                <div class="w-20 h-1 bg-blue-600 mx-auto"></div>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Robot Making -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
                    <img src="https://via.placeholder.com/400x250" alt="Robot Making" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Robot Making</h3>
                        <p class="text-gray-600 mb-4">Build and program your own robot with hands-on guidance from experts.</p>
                        <span class="inline-block bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Workshop</span>
                    </div>
                </div>

                <!-- Coding Competitions -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
                    <img src="https://via.placeholder.com/400x250" alt="Coding Competition" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Coding Competitions</h3>
                        <p class="text-gray-600 mb-4">Test your programming skills in exciting coding challenges and contests.</p>
                        <span class="inline-block bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">Competition</span>
                    </div>
                </div>

                <!-- Cosplay -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
                    <img src="https://via.placeholder.com/400x250" alt="Cosplay" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Cosplay</h3>
                        <p class="text-gray-600 mb-4">Show off your creative side with IT-themed cosplay and costume contests.</p>
                        <span class="inline-block bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm">Creative</span>
                    </div>
                </div>

                <!-- Workshops -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
                    <img src="https://via.placeholder.com/400x250" alt="Workshops" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Technical Workshops</h3>
                        <p class="text-gray-600 mb-4">Learn from industry professionals in intensive hands-on workshops.</p>
                        <span class="inline-block bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm">Learning</span>
                    </div>
                </div>

                <!-- Exhibits -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
                    <img src="https://via.placeholder.com/400x250" alt="Exhibits" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Tech Exhibits</h3>
                        <p class="text-gray-600 mb-4">Explore the latest technology innovations and products from leading companies.</p>
                        <span class="inline-block bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm">Exhibition</span>
                    </div>
                </div>

                <!-- Hackathon -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
                    <img src="https://via.placeholder.com/400x250" alt="Hackathon" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Hackathon</h3>
                        <p class="text-gray-600 mb-4">48-hour intensive programming competition to build innovative solutions.</p>
                        <span class="inline-block bg-indigo-100 text-indigo-800 px-3 py-1 rounded-full text-sm">Challenge</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact/Registration Section -->
    <section id="contact" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Get Involved</h2>
                <div class="w-20 h-1 bg-blue-600 mx-auto"></div>
            </div>
            <div class="max-w-4xl mx-auto grid md:grid-cols-2 gap-12">
                <!-- Registration Info -->
                <div>
                    <h3 class="text-2xl font-semibold mb-4">Registration Information</h3>
                    <div class="space-y-4">
                        <div class="bg-blue-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-blue-800">Event Dates</h4>
                            <p class="text-gray-700">March 15-21, 2025</p>
                        </div>
                        <div class="bg-green-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-green-800">Venue</h4>
                            <p class="text-gray-700">University Campus, IT Building</p>
                        </div>
                        <div class="bg-purple-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-purple-800">Registration Fee</h4>
                            <p class="text-gray-700">Free for all students</p>
                        </div>
                        <div class="bg-yellow-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-yellow-800">Contact</h4>
                            <p class="text-gray-700">itweek@university.edu</p>
                        </div>
                    </div>
                    <button class="mt-6 bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">
                        Register Now
                    </button>
                </div>

                <!-- Contact Form -->
                <div>
                    <h3 class="text-2xl font-semibold mb-4">Contact Us</h3>
                    <form class="space-y-4">
                        <div>
                            <label class="block text-gray-700 mb-2">Name</label>
                            <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Your Name">
                        </div>
                        <div>
                            <label class="block text-gray-700 mb-2">Email</label>
                            <input type="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="your@email.com">
                        </div>
                        <div>
                            <label class="block text-gray-700 mb-2">Message</label>
                            <textarea rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Your message..."></textarea>
                        </div>
                        <button type="button" class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 transition">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection