@extends('layouts.app')

@section('title', 'Home | Saxon Messtechnik')

@section('content')
<!-- Hero Section -->
<section class="relative pt-32 pb-40 lg:pt-48 lg:pb-52 overflow-hidden min-h-[600px] lg:min-h-[700px]">
    <!-- Background image -->
    <div class="absolute inset-0 z-0 bg-[#05080D]">
        <img src="/assets/hero/home-hero.webp" alt="Industrial Background" class="w-full h-full object-cover object-[center_40%] opacity-80" style="image-rendering: auto;">
        <!-- Dark Edge Smoothing -->
        <div class="absolute inset-x-0 bottom-0 h-64 bg-gradient-to-t from-[#05080D] via-[#05080D]/60 to-transparent pointer-events-none"></div>
    </div>
    
    <!-- White Mist Transition to next section -->
    <div class="absolute inset-x-0 bottom-0 h-48 lg:h-72 bg-gradient-to-t from-white from-20% via-white/90 to-transparent pointer-events-none z-10"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20">
        <div class="flex flex-col lg:flex-row items-center gap-12">
            <!-- Text Content -->
            <div class="w-full lg:w-[75%] fade-in-up relative">
                <!-- Fog behind text -->
                <div class="absolute -inset-10 lg:-inset-20 z-0 pointer-events-none" style="background: radial-gradient(ellipse at center left, rgba(5,8,13,0.9) 0%, rgba(5,8,13,0.6) 50%, transparent 80%); filter: blur(40px);"></div>
                
                <div class="relative z-10">
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
                    <a href="/products" class="group bg-[#6EDC44] hover:bg-[#52C22D] text-[#05080D] px-8 py-3.5 rounded-full font-bold transition-all duration-300 text-center flex items-center justify-center gap-2 hover:scale-105 active:scale-95 hover:shadow-[0_0_25px_rgba(110,220,68,0.4)]">
                        Explore Products
                        <svg class="w-5 h-5 transform transition-transform duration-300 group-hover:translate-x-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                    <a href="/contact" class="group bg-white/10 hover:bg-white/20 text-white px-8 py-3.5 rounded-full font-semibold transition-all duration-300 text-center flex items-center justify-center gap-2 backdrop-blur-sm hover:scale-105 active:scale-95 hover:shadow-[0_0_25px_rgba(255,255,255,0.15)] border border-white/10 hover:border-white/30">
                        <svg class="w-5 h-5 transform transition-transform duration-300 group-hover:scale-110 text-[#6EDC44]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        Contact Us
                    </a>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Floating Card - Bridge between Hero and Products -->
<section class="relative z-30 -mt-24 lg:-mt-28 pt-8 lg:pt-12 pb-8">
    <!-- White background that starts exactly below the hero section to blend seamlessly with the mist -->
    <div class="absolute inset-x-0 bottom-0 top-24 lg:top-28 bg-white -z-10"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
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
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center mb-12 lg:mb-16 gap-6">
            <div class="w-full lg:w-1/2 fade-in-up">
                <p class="text-[#6EDC44] font-bold tracking-wider text-sm uppercase mb-3">Our Solutions</p>
                <h2 class="text-4xl lg:text-5xl font-extrabold text-[#05080D] tracking-tight mb-4">Smart Sensors for<br>Every Need</h2>
                <p class="text-gray-500 max-w-md text-lg">Our advanced sensor technology delivers accurate, real-time data to optimize your water and wastewater processes.</p>
            </div>
            <div class="w-full lg:w-auto mt-4 lg:mt-0 fade-in-up" style="transition-delay: 200ms;">
                <a href="/products" class="group inline-flex items-center justify-center gap-3 border-2 border-gray-200 hover:border-[#6EDC44] bg-white text-[#05080D] hover:text-[#6EDC44] px-8 py-3.5 rounded-full font-bold text-sm lg:text-base transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:shadow-[#6EDC44]/20">
                    <span>View All Products</span>
                    <svg class="w-5 h-5 transform transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Product 1 -->
            <div class="bg-white border-2 border-[#6EDC44] rounded-2xl overflow-hidden hover:-translate-y-2 hover:shadow-[0_15px_40px_-10px_rgba(110,220,68,0.5)] transition-all duration-300 group fade-in-up relative">
                <div class="p-8 pb-0 flex justify-center bg-transparent transition-colors duration-300 relative">
                    <img src="/assets/product/1.webp" alt="Chlorine Sensor" class="h-56 object-contain opacity-90 group-hover:opacity-100 group-hover:scale-105 transition-all duration-500 drop-shadow-md">
                </div>
                <div class="p-8 relative">
                    <div class="w-10 h-10 bg-[#6EDC44] rounded-full flex items-center justify-center mb-5 text-white group-hover:scale-110 transition-transform duration-300 shadow-md shadow-[#6EDC44]/20">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-[#05080D] mb-3 group-hover:text-[#6EDC44] transition-colors duration-300">Chlorine Sensors</h3>
                    <p class="text-gray-500 text-sm mb-8 leading-relaxed">Accurate free chlorine measurement for disinfection control.</p>
                    <a href="/products" class="text-[#05080D] hover:text-[#6EDC44] font-bold inline-flex items-center gap-2 group/link transition-colors duration-300">
                        Learn More <svg class="w-4 h-4 text-[#6EDC44] transform transition-transform duration-300 group-hover/link:translate-x-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                    <div class="absolute bottom-8 right-8 z-10">
                        <img src="/logo-brand.webp" alt="Saxon Logo" class="h-6 opacity-70 group-hover:opacity-100 transition-all duration-300 grayscale group-hover:grayscale-0">
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="bg-white border-2 border-[#6EDC44] rounded-2xl overflow-hidden hover:-translate-y-2 hover:shadow-[0_15px_40px_-10px_rgba(110,220,68,0.5)] transition-all duration-300 group fade-in-up relative" style="transition-delay: 100ms;">
                <div class="p-8 pb-0 flex justify-center bg-transparent transition-colors duration-300 relative">
                    <img src="/assets/product/2.webp" alt="DO Sensor" class="h-56 object-contain opacity-90 group-hover:opacity-100 group-hover:scale-105 transition-all duration-500 drop-shadow-md">
                </div>
                <div class="p-8 relative">
                    <div class="w-10 h-10 bg-[#6EDC44] rounded-full flex items-center justify-center mb-5 text-white group-hover:scale-110 transition-transform duration-300 shadow-md shadow-[#6EDC44]/20">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-[#05080D] mb-3 group-hover:text-[#6EDC44] transition-colors duration-300">Dissolved Oxygen Sensors</h3>
                    <p class="text-gray-500 text-sm mb-8 leading-relaxed">Reliable DO monitoring for water quality and process efficiency.</p>
                    <a href="/products" class="text-[#05080D] hover:text-[#6EDC44] font-bold inline-flex items-center gap-2 group/link transition-colors duration-300">
                        Learn More <svg class="w-4 h-4 text-[#6EDC44] transform transition-transform duration-300 group-hover/link:translate-x-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                    <div class="absolute bottom-8 right-8 z-10">
                        <img src="/logo-brand.webp" alt="Saxon Logo" class="h-6 opacity-70 group-hover:opacity-100 transition-all duration-300 grayscale group-hover:grayscale-0">
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="bg-white border-2 border-[#6EDC44] rounded-2xl overflow-hidden hover:-translate-y-2 hover:shadow-[0_15px_40px_-10px_rgba(110,220,68,0.5)] transition-all duration-300 group fade-in-up relative" style="transition-delay: 200ms;">
                <div class="p-8 pb-0 flex justify-center bg-transparent transition-colors duration-300 relative">
                    <img src="/assets/product/3.webp" alt="TSS Sensor" class="h-56 object-contain opacity-90 group-hover:opacity-100 group-hover:scale-105 transition-all duration-500 drop-shadow-md">
                </div>
                <div class="p-8 relative">
                    <div class="w-10 h-10 bg-[#6EDC44] rounded-full flex items-center justify-center mb-5 text-white group-hover:scale-110 transition-transform duration-300 shadow-md shadow-[#6EDC44]/20">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-[#05080D] mb-3 group-hover:text-[#6EDC44] transition-colors duration-300">TSS Sensors</h3>
                    <p class="text-gray-500 text-sm mb-8 leading-relaxed">Real-time total suspended solids measurement for process optimization.</p>
                    <a href="/products" class="text-[#05080D] hover:text-[#6EDC44] font-bold inline-flex items-center gap-2 group/link transition-colors duration-300">
                        Learn More <svg class="w-4 h-4 text-[#6EDC44] transform transition-transform duration-300 group-hover/link:translate-x-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                    <div class="absolute bottom-8 right-8 z-10">
                        <img src="/logo-brand.webp" alt="Saxon Logo" class="h-6 opacity-70 group-hover:opacity-100 transition-all duration-300 grayscale group-hover:grayscale-0">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Industries Section -->
<section class="py-24 relative overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="/assets/mini-badge/mini-badge-home.webp" alt="Industry" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-[#05080D]/60"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="flex flex-col lg:flex-row items-center gap-12">
            <div class="w-full lg:w-1/3 fade-in-up">
                <p class="text-[#6EDC44] font-semibold tracking-wider text-sm uppercase mb-3">Industries We Serve</p>
                <h2 class="text-4xl font-extrabold text-white mb-4">Trusted by Industries Worldwide</h2>
            </div>
            
            <div class="w-full lg:w-2/3">
                <div class="grid grid-cols-2 md:grid-cols-5 gap-6">
                    <div class="flex flex-col items-center text-center fade-in-up group cursor-pointer" style="transition-delay: 100ms;">
                        <div class="w-16 h-16 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center mb-3 transition-all duration-300 group-hover:-translate-y-2 group-hover:bg-white/10 group-hover:border-[#6EDC44]/50 group-hover:shadow-[0_0_20px_rgba(110,220,68,0.2)]">
                            <svg class="w-8 h-8 text-[#6EDC44] transition-transform duration-300 group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                        </div>
                        <span class="text-white text-sm font-medium transition-colors duration-300 group-hover:text-[#6EDC44]">Water & Wastewater</span>
                    </div>
                    <div class="flex flex-col items-center text-center fade-in-up group cursor-pointer" style="transition-delay: 200ms;">
                        <div class="w-16 h-16 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center mb-3 transition-all duration-300 group-hover:-translate-y-2 group-hover:bg-white/10 group-hover:border-[#6EDC44]/50 group-hover:shadow-[0_0_20px_rgba(110,220,68,0.2)]">
                            <svg class="w-8 h-8 text-[#6EDC44] transition-transform duration-300 group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <span class="text-white text-sm font-medium transition-colors duration-300 group-hover:text-[#6EDC44]">Power Gen</span>
                    </div>
                    <div class="flex flex-col items-center text-center fade-in-up group cursor-pointer" style="transition-delay: 300ms;">
                        <div class="w-16 h-16 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center mb-3 transition-all duration-300 group-hover:-translate-y-2 group-hover:bg-white/10 group-hover:border-[#6EDC44]/50 group-hover:shadow-[0_0_20px_rgba(110,220,68,0.2)]">
                            <svg class="w-8 h-8 text-[#6EDC44] transition-transform duration-300 group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                        </div>
                        <span class="text-white text-sm font-medium transition-colors duration-300 group-hover:text-[#6EDC44]">Chemical Processing</span>
                    </div>
                    <div class="flex flex-col items-center text-center fade-in-up group cursor-pointer" style="transition-delay: 400ms;">
                        <div class="w-16 h-16 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center mb-3 transition-all duration-300 group-hover:-translate-y-2 group-hover:bg-white/10 group-hover:border-[#6EDC44]/50 group-hover:shadow-[0_0_20px_rgba(110,220,68,0.2)]">
                            <svg class="w-8 h-8 text-[#6EDC44] transition-transform duration-300 group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                        </div>
                        <span class="text-white text-sm font-medium transition-colors duration-300 group-hover:text-[#6EDC44]">Food & Beverage</span>
                    </div>
                    <div class="flex flex-col items-center text-center fade-in-up group cursor-pointer" style="transition-delay: 500ms;">
                        <div class="w-16 h-16 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center mb-3 transition-all duration-300 group-hover:-translate-y-2 group-hover:bg-white/10 group-hover:border-[#6EDC44]/50 group-hover:shadow-[0_0_20px_rgba(110,220,68,0.2)]">
                            <svg class="w-8 h-8 text-[#6EDC44] transition-transform duration-300 group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        </div>
                        <span class="text-white text-sm font-medium transition-colors duration-300 group-hover:text-[#6EDC44]">Pulp & Paper</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-24 bg-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="flex flex-col lg:flex-row gap-16">
            <div class="w-full lg:w-1/3 fade-in-up">
                <p class="text-[#6EDC44] font-bold tracking-wider text-sm uppercase mb-3">Why Choose Us</p>
                <h2 class="text-4xl lg:text-5xl font-extrabold text-[#05080D] tracking-tight mb-6 leading-[1.1]">Engineered for Excellence.<br>Committed to You.</h2>
                <p class="text-gray-500 text-lg leading-relaxed">Saxon Messtechnik delivers reliable liquid analysis solutions backed by innovation, quality, and expertise.</p>
            </div>
            
            <div class="w-full lg:w-2/3">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white shadow-sm border border-gray-100 rounded-2xl p-8 fade-in-up group hover:-translate-y-2 hover:border-[#6EDC44]/30 hover:shadow-[0_20px_40px_-15px_rgba(0,0,0,0.1)] transition-all duration-300 cursor-default" style="transition-delay: 100ms;">
                        <div class="mb-6 text-[#6EDC44] transition-all duration-300 group-hover:scale-110">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16.5 18.75h-9m9 0a3 3 0 013 3h-15a3 3 0 013-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 01-.982-3.172M9.497 14.25a7.454 7.454 0 00.981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 007.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M7.73 9.728a6.726 6.726 0 002.748 1.35m8.272-6.842V4.5c0 2.108-.966 3.99-2.48 5.228m2.48-5.492a46.32 46.32 0 012.916.52 6.003 6.003 0 01-5.395 4.972m0 0a6.726 6.726 0 01-2.749 1.35m0 0a6.772 6.772 0 01-3.044 0"></path></svg>
                        </div>
                        <h3 class="text-[#05080D] font-bold text-lg mb-3">German Engineering Quality</h3>
                        <p class="text-gray-500 text-sm leading-relaxed">Precision and reliability engineered in Germany.</p>
                    </div>
                    
                    <div class="bg-white shadow-sm border border-gray-100 rounded-2xl p-8 fade-in-up group hover:-translate-y-2 hover:border-[#6EDC44]/30 hover:shadow-[0_20px_40px_-15px_rgba(0,0,0,0.1)] transition-all duration-300 cursor-default" style="transition-delay: 200ms;">
                        <div class="mb-6 text-[#6EDC44] transition-all duration-300 group-hover:scale-110">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418"></path></svg>
                        </div>
                        <h3 class="text-[#05080D] font-bold text-lg mb-3">Expert Support</h3>
                        <p class="text-gray-500 text-sm leading-relaxed">Our team is here to support you at every step.</p>
                    </div>
                    
                    <div class="bg-white shadow-sm border border-gray-100 rounded-2xl p-8 fade-in-up group hover:-translate-y-2 hover:border-[#6EDC44]/30 hover:shadow-[0_20px_40px_-15px_rgba(0,0,0,0.1)] transition-all duration-300 cursor-default" style="transition-delay: 300ms;">
                        <div class="mb-6 w-12 h-12 rounded-full bg-[#6EDC44] text-white flex items-center justify-center transition-all duration-300 group-hover:scale-110 shadow-md shadow-[#6EDC44]/30">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <h3 class="text-[#05080D] font-bold text-lg mb-3">Proven Performance</h3>
                        <p class="text-gray-500 text-sm leading-relaxed">Thousands of installations across the globe.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection