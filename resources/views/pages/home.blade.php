@extends('layouts.app')

@section('title', 'Home | Saxon Messtechnik')

@section('content')
<!-- Hero Section -->
<section class="relative pt-32 pb-40 lg:pt-48 lg:pb-52 overflow-hidden min-h-[600px] lg:min-h-[700px]">
    <!-- Background image -->
    <div class="absolute inset-0 z-0">
        <img src="/assets/hero/home-hero.webp" alt="Industrial Background" class="w-full h-full object-cover object-[center_40%]" style="image-rendering: auto;">
        <!-- Dark gradient overlay for text readability -->
        <div class="absolute inset-0 bg-gradient-to-r from-[#05080D] from-[20%] via-[#05080D]/90 via-[50%] to-transparent"></div>
        <div class="absolute inset-x-0 bottom-0 h-40 bg-gradient-to-t from-[#05080D] via-[#05080D]/80 to-transparent"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20">
        <div class="flex flex-col lg:flex-row items-center gap-12">
            <!-- Text Content -->
            <div class="w-full lg:w-[65%] fade-in-up">
                <p class="text-[#6EDC44] font-bold tracking-widest text-xs lg:text-sm uppercase mb-2">Advanced Liquid Analysis Solutions</p>
                <h1 class="text-5xl lg:text-7xl font-black text-white leading-[1.05] tracking-tight mb-4">
                    Precision Sensors.<br>
                    Reliable Results.<br>
                    Better Processes.
                </h1>
                <p class="text-base lg:text-lg text-white/80 mb-6 max-w-xl font-medium leading-relaxed">
                    High-performance sensors for chlorine, dissolved oxygen, and TSS monitoring in challenging environments.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="/products" class="bg-[#6EDC44] hover:bg-[#52C22D] text-[#05080D] px-8 py-3.5 rounded-full font-bold transition-colors duration-300 text-center flex items-center justify-center gap-2">
                        Explore Products
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                    <a href="#video" class="bg-white/10 hover:bg-white/20 text-white px-8 py-3.5 rounded-full font-semibold transition-all duration-300 text-center flex items-center justify-center gap-2 backdrop-blur-sm">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Watch Overview
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Floating Card - Bridge between Hero and Products -->
<section class="relative z-30 -mt-24 lg:-mt-28 pb-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="features-fog-card bg-[#0E131B]/95 backdrop-blur-md rounded-2xl border border-white/10 shadow-2xl p-6 lg:p-8">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8 relative z-10">
                <!-- Feature 1 -->
                <div class="feature-item flex items-start gap-4 cursor-default" style="transition-delay: 0ms;">
                    <div class="feature-icon w-11 h-11 bg-[#6EDC44]/10 rounded-full flex items-center justify-center flex-shrink-0 border border-[#6EDC44]/20 text-[#6EDC44]">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <div>
                        <h3 class="text-white font-bold text-sm lg:text-base mb-1">High Accuracy</h3>
                        <p class="text-gray-400 text-xs lg:text-sm leading-relaxed">Reliable measurements you can trust in any condition.</p>
                    </div>
                </div>
                <!-- Feature 2 -->
                <div class="feature-item flex items-start gap-4 cursor-default" style="transition-delay: 150ms;">
                    <div class="feature-icon w-11 h-11 bg-[#6EDC44]/10 rounded-full flex items-center justify-center flex-shrink-0 border border-[#6EDC44]/20 text-[#6EDC44]">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    </div>
                    <div>
                        <h3 class="text-white font-bold text-sm lg:text-base mb-1">Built to Last</h3>
                        <p class="text-gray-400 text-xs lg:text-sm leading-relaxed">Rugged design specifically for harsh environments.</p>
                    </div>
                </div>
                <!-- Feature 3 -->
                <div class="feature-item flex items-start gap-4 cursor-default" style="transition-delay: 300ms;">
                    <div class="feature-icon w-11 h-11 bg-[#6EDC44]/10 rounded-full flex items-center justify-center flex-shrink-0 border border-[#6EDC44]/20 text-[#6EDC44]">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <div>
                        <h3 class="text-white font-bold text-sm lg:text-base mb-1">Real-time Monitoring</h3>
                        <p class="text-gray-400 text-xs lg:text-sm leading-relaxed">Instant data access for faster decision making.</p>
                    </div>
                </div>
                <!-- Feature 4 -->
                <div class="feature-item flex items-start gap-4 cursor-default" style="transition-delay: 450ms;">
                    <div class="feature-icon w-11 h-11 bg-[#6EDC44]/10 rounded-full flex items-center justify-center flex-shrink-0 border border-[#6EDC44]/20 text-[#6EDC44]">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <div>
                        <h3 class="text-white font-bold text-sm lg:text-base mb-1">Easy Integration</h3>
                        <p class="text-gray-400 text-xs lg:text-sm leading-relaxed">Seamless fit into your existing systems.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Products Section -->
<section class="py-20 bg-[#05080D]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row justify-between items-end mb-12">
            <div class="w-full lg:w-1/2 fade-in-up">
                <p class="text-[#6EDC44] font-semibold tracking-wider text-sm uppercase mb-3">Our Solutions</p>
                <h2 class="text-4xl font-extrabold text-white mb-4">Smart Sensors for<br>Every Need</h2>
                <p class="text-gray-400 max-w-md">Our advanced sensor technology delivers accurate, real-time data to optimize your water and wastewater processes.</p>
            </div>
            <div class="w-full lg:w-auto mt-6 lg:mt-0 fade-in-up" style="transition-delay: 200ms;">
                <a href="/products" class="inline-flex items-center gap-2 border border-white/20 hover:border-[#6EDC44] text-white hover:text-[#6EDC44] px-6 py-3 rounded-full font-semibold transition-all duration-300">
                    View All Products
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Product 1 -->
            <div class="bg-[#0E131B] border border-white/5 rounded-2xl overflow-hidden hover:border-[#6EDC44]/50 transition-colors duration-300 group fade-in-up">
                <div class="p-8 pb-0 flex justify-center bg-white/5 group-hover:bg-white/10 transition-colors">
                    <img src="/assets/product/1.webp" alt="Chlorine Sensor" class="h-48 object-contain mix-blend-screen opacity-80 group-hover:opacity-100 transition-opacity">
                </div>
                <div class="p-8">
                    <div class="w-10 h-10 bg-[#6EDC44]/10 rounded-full flex items-center justify-center mb-4 text-[#6EDC44]">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Chlorine Sensors</h3>
                    <p class="text-gray-400 text-sm mb-6">Accurate free chlorine measurement for disinfection control.</p>
                    <a href="/products" class="text-[#6EDC44] hover:text-[#52C22D] font-semibold inline-flex items-center gap-1">
                        Learn More <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="bg-[#0E131B] border border-white/5 rounded-2xl overflow-hidden hover:border-[#6EDC44]/50 transition-colors duration-300 group fade-in-up" style="transition-delay: 100ms;">
                <div class="p-8 pb-0 flex justify-center bg-white/5 group-hover:bg-white/10 transition-colors">
                    <img src="/assets/product/2.webp" alt="DO Sensor" class="h-48 object-contain mix-blend-screen opacity-80 group-hover:opacity-100 transition-opacity">
                </div>
                <div class="p-8">
                    <div class="w-10 h-10 bg-[#6EDC44]/10 rounded-full flex items-center justify-center mb-4 text-[#6EDC44]">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Dissolved Oxygen</h3>
                    <p class="text-gray-400 text-sm mb-6">Reliable DO monitoring for water quality and process efficiency.</p>
                    <a href="/products" class="text-[#6EDC44] hover:text-[#52C22D] font-semibold inline-flex items-center gap-1">
                        Learn More <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="bg-[#0E131B] border border-white/5 rounded-2xl overflow-hidden hover:border-[#6EDC44]/50 transition-colors duration-300 group fade-in-up" style="transition-delay: 200ms;">
                <div class="p-8 pb-0 flex justify-center bg-white/5 group-hover:bg-white/10 transition-colors">
                    <img src="/assets/product/3.webp" alt="TSS Sensor" class="h-48 object-contain mix-blend-screen opacity-80 group-hover:opacity-100 transition-opacity">
                </div>
                <div class="p-8">
                    <div class="w-10 h-10 bg-[#6EDC44]/10 rounded-full flex items-center justify-center mb-4 text-[#6EDC44]">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">TSS Sensors</h3>
                    <p class="text-gray-400 text-sm mb-6">Real-time total suspended solids measurement for process optimization.</p>
                    <a href="/products" class="text-[#6EDC44] hover:text-[#52C22D] font-semibold inline-flex items-center gap-1">
                        Learn More <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Industries Section -->
<section class="py-24 relative overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="/assets/mini-badge/mini-badge-home.webp" alt="Industry" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-[#05080D]/90"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="flex flex-col lg:flex-row items-center gap-12">
            <div class="w-full lg:w-1/3 fade-in-up">
                <p class="text-[#6EDC44] font-semibold tracking-wider text-sm uppercase mb-3">Industries We Serve</p>
                <h2 class="text-4xl font-extrabold text-white mb-4">Trusted by Industries Worldwide</h2>
            </div>
            
            <div class="w-full lg:w-2/3">
                <div class="grid grid-cols-2 md:grid-cols-5 gap-6">
                    <div class="flex flex-col items-center text-center fade-in-up" style="transition-delay: 100ms;">
                        <div class="w-16 h-16 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center mb-3">
                            <svg class="w-8 h-8 text-[#6EDC44]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                        </div>
                        <span class="text-white text-sm font-medium">Water & Wastewater</span>
                    </div>
                    <div class="flex flex-col items-center text-center fade-in-up" style="transition-delay: 200ms;">
                        <div class="w-16 h-16 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center mb-3">
                            <svg class="w-8 h-8 text-[#6EDC44]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <span class="text-white text-sm font-medium">Power Gen</span>
                    </div>
                    <div class="flex flex-col items-center text-center fade-in-up" style="transition-delay: 300ms;">
                        <div class="w-16 h-16 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center mb-3">
                            <svg class="w-8 h-8 text-[#6EDC44]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                        </div>
                        <span class="text-white text-sm font-medium">Chemical Processing</span>
                    </div>
                    <div class="flex flex-col items-center text-center fade-in-up" style="transition-delay: 400ms;">
                        <div class="w-16 h-16 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center mb-3">
                            <svg class="w-8 h-8 text-[#6EDC44]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                        </div>
                        <span class="text-white text-sm font-medium">Food & Beverage</span>
                    </div>
                    <div class="flex flex-col items-center text-center fade-in-up" style="transition-delay: 500ms;">
                        <div class="w-16 h-16 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center mb-3">
                            <svg class="w-8 h-8 text-[#6EDC44]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        </div>
                        <span class="text-white text-sm font-medium">Pulp & Paper</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-20 bg-[#05080D]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-12">
            <div class="w-full lg:w-1/3 fade-in-up">
                <p class="text-[#6EDC44] font-semibold tracking-wider text-sm uppercase mb-3">Why Choose Us</p>
                <h2 class="text-4xl font-extrabold text-white mb-4">Engineered for Excellence. Committed to You.</h2>
                <p class="text-gray-400">Saxon Messtechnik delivers reliable liquid analysis solutions backed by innovation, quality, and expertise.</p>
            </div>
            
            <div class="w-full lg:w-2/3">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-[#0E131B] border border-white/5 rounded-2xl p-8 fade-in-up" style="transition-delay: 100ms;">
                        <div class="w-12 h-12 rounded-full bg-[#6EDC44]/10 text-[#6EDC44] flex items-center justify-center mb-6">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                        </div>
                        <h3 class="text-white font-bold text-lg mb-2">German Engineering Quality</h3>
                        <p class="text-gray-400 text-sm">Precision and reliability engineered in Germany.</p>
                    </div>
                    
                    <div class="bg-[#0E131B] border border-white/5 rounded-2xl p-8 fade-in-up" style="transition-delay: 200ms;">
                        <div class="w-12 h-12 rounded-full bg-[#6EDC44]/10 text-[#6EDC44] flex items-center justify-center mb-6">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                        </div>
                        <h3 class="text-white font-bold text-lg mb-2">Expert Support</h3>
                        <p class="text-gray-400 text-sm">Our team is here to support you at every step.</p>
                    </div>
                    
                    <div class="bg-[#0E131B] border border-white/5 rounded-2xl p-8 fade-in-up" style="transition-delay: 300ms;">
                        <div class="w-12 h-12 rounded-full bg-[#6EDC44]/10 text-[#6EDC44] flex items-center justify-center mb-6">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <h3 class="text-white font-bold text-lg mb-2">Proven Performance</h3>
                        <p class="text-gray-400 text-sm">Thousands of installations across the globe.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
