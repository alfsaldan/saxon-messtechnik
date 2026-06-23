@extends('layouts.app')

@section('title', 'About Us | Saxon Messtechnik')

@section('content')

<!-- Hero Section -->
<section class="relative pt-32 pb-32 lg:pt-48 lg:pb-40 overflow-hidden min-h-[550px] lg:min-h-[650px]">
    <div class="absolute inset-0 z-0">
        <img src="/assets/hero/about-hero.webp" alt="About Us Background" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-[#05080D]/90 from-[10%] via-[#05080D]/50 via-[60%] to-transparent"></div>
        <div class="absolute inset-x-0 bottom-0 h-40 bg-gradient-to-t from-[#05080D] via-[#05080D]/50 to-transparent"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20">
        <div class="w-full lg:w-[70%] fade-in-up">
            <p class="text-[#6EDC44] font-bold tracking-widest text-xs lg:text-sm uppercase mb-3">About Us</p>
            <h1 class="text-4xl lg:text-6xl font-black text-white leading-[1.1] tracking-tight mb-6">
                Engineering Precision<br>
                for Smarter Water<br>
                Quality Management
            </h1>
            <p class="text-base lg:text-lg text-white/80 max-w-2xl font-medium leading-relaxed">
                Saxon Messtechnik is a manufacturer of advanced liquid analysis solutions, delivering reliable monitoring technologies for industries and a sustainable future.
            </p>
        </div>
    </div>
</section>

<!-- About Details Section -->
<section class="py-24 bg-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="flex flex-col lg:flex-row gap-16 items-center">
            <!-- Text Content -->
            <div class="w-full lg:w-1/2 fade-in-up">
                <p class="text-[#6EDC44] font-bold tracking-wider text-sm uppercase mb-3">About Saxon Messtechnik</p>
                <h2 class="text-4xl lg:text-5xl font-extrabold text-[#05080D] tracking-tight mb-6 leading-[1.1]">
                    Precision. Reliability.<br>Performance.
                </h2>
                <div class="space-y-4 text-gray-600 text-lg leading-relaxed mb-8">
                    <p>Saxon Messtechnik specializes in the development and manufacturing of advanced liquid analysis instruments designed to help industries achieve accurate, reliable, and real-time process monitoring.</p>
                    <p>Our solutions include high-performance chlorine sensors, dissolved oxygen (DO) sensors, TSS sensors, controllers, transmitters, and integrated monitoring systems for critical water and wastewater applications.</p>
                    <p>Through German engineering, rigorous quality standards, and continuous innovation, Saxon delivers measurement technologies trusted by industries, utilities, and environmental organizations worldwide.</p>
                </div>
                <a href="#vision-mission" class="group inline-flex items-center justify-center gap-3 border border-gray-300 shadow-sm hover:border-[#6EDC44] bg-white text-[#05080D] hover:text-[#6EDC44] px-8 py-3.5 rounded-full font-bold text-sm lg:text-base transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:shadow-[#6EDC44]/20">
                    <span>Learn More About Us</span>
                    <svg class="w-5 h-5 transform transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
            
            <!-- Image Content -->
            <div class="w-full lg:w-1/2 fade-in-up" style="transition-delay: 200ms;">
                <div class="relative">
                    <img src="/assets/hero/about-hero2.webp" alt="Saxon Products" class="w-full h-auto object-contain mix-blend-multiply hover:scale-105 transition-transform duration-700">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision & Mission Section -->
<section id="vision-mission" class="pb-24 pt-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-8 items-stretch">
            
            <!-- Vision (Dark, Premium) -->
            <div class="w-full lg:w-2/5 rounded-[2rem] p-10 lg:p-12 relative overflow-hidden group fade-in-up shadow-2xl">
                <!-- Background Layer -->
                <div class="absolute inset-0 bg-[#05080D]"></div>
                <div class="absolute inset-0 opacity-80 group-hover:scale-110 transition-transform duration-700">
                    <img src="/assets/mini-badge/mini-badge-about2.webp" alt="Vision Background" class="w-full h-full object-cover mix-blend-overlay grayscale">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-[#05080D] via-transparent to-transparent"></div>
                <!-- Content Layer -->
                <div class="relative z-10 h-full flex flex-col justify-between min-h-[350px]">
                    <div class="w-20 h-20 bg-white/10 rounded-2xl flex items-center justify-center text-[#6EDC44] mb-12 backdrop-blur-md border border-white/20 group-hover:bg-[#6EDC44] group-hover:text-[#05080D] group-hover:-translate-y-2 group-hover:shadow-[0_10px_20px_rgba(110,220,68,0.3)] transition-all duration-500">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    </div>
                    <div>
                        <h3 class="text-3xl font-black text-white mb-6">Our Vision</h3>
                        <p class="text-gray-300 text-sm md:text-base leading-relaxed font-medium">
                            To become a globally recognized leader in liquid analysis technology by delivering innovative solutions that improve water quality, environmental sustainability, and industrial efficiency.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Mission (Light, Dynamic List) -->
            <div class="w-full lg:w-3/5 bg-white border border-gray-200 rounded-[2rem] p-10 lg:p-12 hover:border-[#6EDC44]/50 hover:shadow-[0_20px_50px_-15px_rgba(110,220,68,0.15)] transition-all duration-500 fade-in-up" style="transition-delay: 200ms;">
                <div class="flex items-center gap-5 mb-10">
                    <div class="w-16 h-16 bg-[#05080D] rounded-2xl flex items-center justify-center text-white shrink-0 shadow-lg">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="text-3xl font-extrabold text-[#05080D]">Our Mission</h3>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4">
                    <!-- Mission Item 1 -->
                    <div class="flex items-start gap-4 p-4 rounded-2xl hover:bg-gray-50 transition-colors duration-300 group/item">
                        <div class="w-10 h-10 rounded-full bg-[#6EDC44]/10 flex items-center justify-center shrink-0 mt-0.5 border border-[#6EDC44]/20 group-hover/item:bg-[#6EDC44] group-hover/item:text-white transition-colors duration-300 text-[#6EDC44]">
                            <span class="font-bold text-sm">01</span>
                        </div>
                        <p class="text-gray-600 font-medium text-sm leading-relaxed mt-1">Develop highly accurate and reliable liquid analysis instruments.</p>
                    </div>
                    <!-- Mission Item 2 -->
                    <div class="flex items-start gap-4 p-4 rounded-2xl hover:bg-gray-50 transition-colors duration-300 group/item">
                        <div class="w-10 h-10 rounded-full bg-[#6EDC44]/10 flex items-center justify-center shrink-0 mt-0.5 border border-[#6EDC44]/20 group-hover/item:bg-[#6EDC44] group-hover/item:text-white transition-colors duration-300 text-[#6EDC44]">
                            <span class="font-bold text-sm">02</span>
                        </div>
                        <p class="text-gray-600 font-medium text-sm leading-relaxed mt-1">Support industries in achieving environmental compliance.</p>
                    </div>
                    <!-- Mission Item 3 -->
                    <div class="flex items-start gap-4 p-4 rounded-2xl hover:bg-gray-50 transition-colors duration-300 group/item">
                        <div class="w-10 h-10 rounded-full bg-[#6EDC44]/10 flex items-center justify-center shrink-0 mt-0.5 border border-[#6EDC44]/20 group-hover/item:bg-[#6EDC44] group-hover/item:text-white transition-colors duration-300 text-[#6EDC44]">
                            <span class="font-bold text-sm">03</span>
                        </div>
                        <p class="text-gray-600 font-medium text-sm leading-relaxed mt-1">Drive innovation through advanced sensor technology.</p>
                    </div>
                    <!-- Mission Item 4 -->
                    <div class="flex items-start gap-4 p-4 rounded-2xl hover:bg-gray-50 transition-colors duration-300 group/item">
                        <div class="w-10 h-10 rounded-full bg-[#6EDC44]/10 flex items-center justify-center shrink-0 mt-0.5 border border-[#6EDC44]/20 group-hover/item:bg-[#6EDC44] group-hover/item:text-white transition-colors duration-300 text-[#6EDC44]">
                            <span class="font-bold text-sm">04</span>
                        </div>
                        <p class="text-gray-600 font-medium text-sm leading-relaxed mt-1">Deliver exceptional technical support and engineering expertise.</p>
                    </div>
                    <!-- Mission Item 5 -->
                    <div class="flex items-start gap-4 p-4 rounded-2xl hover:bg-gray-50 transition-colors duration-300 group/item md:col-span-2">
                        <div class="w-10 h-10 rounded-full bg-[#6EDC44]/10 flex items-center justify-center shrink-0 mt-0.5 border border-[#6EDC44]/20 group-hover/item:bg-[#6EDC44] group-hover/item:text-white transition-colors duration-300 text-[#6EDC44]">
                            <span class="font-bold text-sm">05</span>
                        </div>
                        <p class="text-gray-600 font-medium text-sm leading-relaxed mt-1">Build long-term partnerships with customers worldwide.</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- Our Expertise (Advanced Liquid Analysis Technologies) -->
<section class="py-24 bg-white border-t border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <p class="text-[#6EDC44] font-bold tracking-wider text-sm uppercase mb-3 fade-in-up">Our Expertise</p>
        <h2 class="text-3xl lg:text-4xl font-extrabold text-[#05080D] tracking-tight mb-16 fade-in-up" style="transition-delay: 100ms;">Advanced Liquid Analysis Technologies</h2>
        
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8 lg:gap-4 divide-x-0 lg:divide-x divide-gray-100">
            <!-- Item 1 -->
            <div class="flex flex-col items-center group fade-in-up px-4" style="transition-delay: 100ms;">
                <div class="mb-5 text-[#6EDC44] transition-transform duration-300 group-hover:-translate-y-2 group-hover:scale-110">
                    <svg class="w-14 h-14" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                </div>
                <h4 class="text-[#05080D] font-bold mb-3 text-[15px]">Free Chlorine</h4>
                <p class="text-gray-500 text-xs leading-relaxed">Drinking water disinfection</p>
            </div>
            
            <!-- Item 2 -->
            <div class="flex flex-col items-center group fade-in-up px-4" style="transition-delay: 200ms;">
                <div class="mb-5 text-[#6EDC44] transition-transform duration-300 group-hover:-translate-y-2 group-hover:scale-110">
                    <svg class="w-14 h-14" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path></svg>
                </div>
                <h4 class="text-[#05080D] font-bold mb-3 text-[15px] text-center">Dissolved Oxygen<br>(DO)</h4>
                <p class="text-gray-500 text-xs leading-relaxed">Wastewater treatment</p>
            </div>
            
            <!-- Item 3 -->
            <div class="flex flex-col items-center group fade-in-up px-4" style="transition-delay: 300ms;">
                <div class="mb-5 text-[#6EDC44] transition-transform duration-300 group-hover:-translate-y-2 group-hover:scale-110">
                    <svg class="w-14 h-14" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                </div>
                <h4 class="text-[#05080D] font-bold mb-3 text-[15px] text-center">TSS (Total<br>Suspended Solids)</h4>
                <p class="text-gray-500 text-xs leading-relaxed">Sludge and filtration monitoring</p>
            </div>
            
            <!-- Item 4 -->
            <div class="flex flex-col items-center group fade-in-up px-4" style="transition-delay: 400ms;">
                <div class="mb-5 text-[#6EDC44] transition-transform duration-300 group-hover:-translate-y-2 group-hover:scale-110">
                    <svg class="w-14 h-14" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                </div>
                <h4 class="text-[#05080D] font-bold mb-3 text-[15px]">pH & ORP</h4>
                <p class="text-gray-500 text-xs leading-relaxed">Chemical process control</p>
            </div>
            
            <!-- Item 5 -->
            <div class="flex flex-col items-center group fade-in-up px-4" style="transition-delay: 500ms;">
                <div class="mb-5 text-[#6EDC44] transition-transform duration-300 group-hover:-translate-y-2 group-hover:scale-110">
                    <svg class="w-14 h-14" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h4 class="text-[#05080D] font-bold mb-3 text-[15px]">Conductivity</h4>
                <p class="text-gray-500 text-xs leading-relaxed">Water quality management</p>
            </div>
            
            <!-- Item 6 -->
            <div class="flex flex-col items-center group fade-in-up px-4" style="transition-delay: 600ms;">
                <div class="mb-5 text-[#6EDC44] transition-transform duration-300 group-hover:-translate-y-2 group-hover:scale-110">
                    <svg class="w-14 h-14" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"></path></svg>
                </div>
                <h4 class="text-[#05080D] font-bold mb-3 text-[15px]">Turbidity</h4>
                <p class="text-gray-500 text-xs leading-relaxed">Environmental monitoring</p>
            </div>
        </div>
    </div>
</section>

<!-- Values Section (Dark background) -->
<section class="py-12 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="rounded-[2.5rem] overflow-hidden relative shadow-2xl">
            <div class="absolute inset-0 z-0">
                <img src="/assets/mini-badge/mini-badge-about1.webp" alt="Background" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-[#05080D]/60"></div>
            </div>
            
            <div class="relative z-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 divide-y md:divide-y-0 lg:divide-x divide-white/10">
                <!-- Value 1 -->
                <div class="p-10 lg:p-12 text-center group hover:bg-white/5 transition-colors duration-300 fade-in-up">
                    <div class="w-14 h-14 mx-auto mb-6 text-[#6EDC44] group-hover:-translate-y-2 group-hover:scale-110 transition-transform duration-300">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <h3 class="text-white font-bold text-lg mb-3">German Engineering<br>Excellence</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">Designed with precision and reliability to meet the highest industrial standards.</p>
                </div>
                <!-- Value 2 -->
                <div class="p-10 lg:p-12 text-center group hover:bg-white/5 transition-colors duration-300 fade-in-up" style="transition-delay: 100ms;">
                    <div class="w-14 h-14 mx-auto mb-6 text-[#6EDC44] group-hover:-translate-y-2 group-hover:scale-110 transition-transform duration-300">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    </div>
                    <h3 class="text-white font-bold text-lg mb-3">Long-Term<br>Stability</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">Robust sensors engineered for continuous operation in demanding environments.</p>
                </div>
                <!-- Value 3 -->
                <div class="p-10 lg:p-12 text-center group hover:bg-white/5 transition-colors duration-300 fade-in-up" style="transition-delay: 200ms;">
                    <div class="w-14 h-14 mx-auto mb-6 text-[#6EDC44] group-hover:-translate-y-2 group-hover:scale-110 transition-transform duration-300">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="text-white font-bold text-lg mb-3">Accurate Real-Time<br>Data</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">Deliver instant process insights for faster and smarter decision making.</p>
                </div>
                <!-- Value 4 -->
                <div class="p-10 lg:p-12 text-center group hover:bg-white/5 transition-colors duration-300 fade-in-up" style="transition-delay: 300ms;">
                    <div class="w-14 h-14 mx-auto mb-6 text-[#6EDC44] group-hover:-translate-y-2 group-hover:scale-110 transition-transform duration-300">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    </div>
                    <h3 class="text-white font-bold text-lg mb-3">Global Technical<br>Support</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">Dedicated engineering assistance and application support worldwide.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Industries We Serve Section -->
<section class="py-24 bg-white text-center">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-[#6EDC44] font-bold tracking-wider text-sm uppercase mb-3 fade-in-up">Industries We Serve</p>
        <h2 class="text-3xl lg:text-4xl font-extrabold text-[#05080D] tracking-tight mb-16 fade-in-up" style="transition-delay: 100ms;">Solutions for Every Industry</h2>
        
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8">
            <div class="flex flex-col items-center group fade-in-up" style="transition-delay: 100ms;">
                <div class="w-20 h-20 rounded-full border border-gray-200 flex items-center justify-center mb-4 group-hover:border-[#6EDC44] group-hover:shadow-[0_0_20px_rgba(110,220,68,0.2)] group-hover:-translate-y-2 transition-all duration-300">
                    <svg class="w-8 h-8 text-[#05080D] group-hover:text-[#6EDC44] transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                </div>
                <h4 class="text-[#05080D] font-bold text-[15px] mb-2">Water &<br>Wastewater</h4>
                <p class="text-gray-500 text-xs px-2">Monitoring and optimization of treatment processes.</p>
            </div>
            
            <div class="flex flex-col items-center group fade-in-up" style="transition-delay: 200ms;">
                <div class="w-20 h-20 rounded-full border border-gray-200 flex items-center justify-center mb-4 group-hover:border-[#6EDC44] group-hover:shadow-[0_0_20px_rgba(110,220,68,0.2)] group-hover:-translate-y-2 transition-all duration-300">
                    <svg class="w-8 h-8 text-[#05080D] group-hover:text-[#6EDC44] transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z"></path></svg>
                </div>
                <h4 class="text-[#05080D] font-bold text-[15px] mb-2">Food &<br>Beverage</h4>
                <p class="text-gray-500 text-xs px-2">Ensuring product quality and process compliance.</p>
            </div>

            <div class="flex flex-col items-center group fade-in-up" style="transition-delay: 300ms;">
                <div class="w-20 h-20 rounded-full border border-gray-200 flex items-center justify-center mb-4 group-hover:border-[#6EDC44] group-hover:shadow-[0_0_20px_rgba(110,220,68,0.2)] group-hover:-translate-y-2 transition-all duration-300">
                    <svg class="w-8 h-8 text-[#05080D] group-hover:text-[#6EDC44] transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                </div>
                <h4 class="text-[#05080D] font-bold text-[15px] mb-2">Chemical<br>Processing</h4>
                <p class="text-gray-500 text-xs px-2">Reliable control of critical chemical environments.</p>
            </div>

            <div class="flex flex-col items-center group fade-in-up" style="transition-delay: 400ms;">
                <div class="w-20 h-20 rounded-full border border-gray-200 flex items-center justify-center mb-4 group-hover:border-[#6EDC44] group-hover:shadow-[0_0_20px_rgba(110,220,68,0.2)] group-hover:-translate-y-2 transition-all duration-300">
                    <svg class="w-8 h-8 text-[#05080D] group-hover:text-[#6EDC44] transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h4 class="text-[#05080D] font-bold text-[15px] mb-2">Power<br>Generation</h4>
                <p class="text-gray-500 text-xs px-2">Water chemistry monitoring for efficient plant operation.</p>
            </div>

            <div class="flex flex-col items-center group fade-in-up" style="transition-delay: 500ms;">
                <div class="w-20 h-20 rounded-full border border-gray-200 flex items-center justify-center mb-4 group-hover:border-[#6EDC44] group-hover:shadow-[0_0_20px_rgba(110,220,68,0.2)] group-hover:-translate-y-2 transition-all duration-300">
                    <svg class="w-8 h-8 text-[#05080D] group-hover:text-[#6EDC44] transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                </div>
                <h4 class="text-[#05080D] font-bold text-[15px] mb-2">Environmental<br>Monitoring</h4>
                <p class="text-gray-500 text-xs px-2">Supporting regulatory compliance and environmental protection.</p>
            </div>

            <div class="flex flex-col items-center group fade-in-up" style="transition-delay: 600ms;">
                <div class="w-20 h-20 rounded-full border border-gray-200 flex items-center justify-center mb-4 group-hover:border-[#6EDC44] group-hover:shadow-[0_0_20px_rgba(110,220,68,0.2)] group-hover:-translate-y-2 transition-all duration-300">
                    <svg class="w-8 h-8 text-[#05080D] group-hover:text-[#6EDC44] transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                </div>
                <h4 class="text-[#05080D] font-bold text-[15px] mb-2">Pulp &<br>Paper</h4>
                <p class="text-gray-500 text-xs px-2">Process optimization through continuous liquid analysis.</p>
            </div>
        </div>
    </div>
</section>


<!-- CTA Section -->
<section class="py-12 bg-white relative mb-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="rounded-[2rem] overflow-hidden relative shadow-2xl bg-[#05080D]">
            <!-- Subtle Water Texture/Droplet background -->
            <div class="absolute inset-0 z-0 opacity-100">
                <img src="/assets/mini-badge/mini-badge-home.webp" alt="Water Background" class="w-full h-full object-cover mix-blend-overlay grayscale">
                <div class="absolute inset-0 bg-gradient-to-r from-[#0E131B]/90 via-[#0E131B]/70 to-[#05080D]/50"></div>
            </div>
            
            <div class="relative z-10 p-12 lg:p-16 flex flex-col lg:flex-row items-center justify-between gap-10">
                <div class="max-w-xl fade-in-up">
                    <h2 class="text-3xl lg:text-4xl font-extrabold text-white tracking-tight mb-4 leading-tight">Ready to Optimize Your<br>Process Monitoring?</h2>
                    <p class="text-gray-400 text-sm leading-relaxed">Discover how Saxon's advanced liquid analysis solutions can improve accuracy, efficiency, and operational performance.</p>
                </div>
                
                <div class="flex flex-col sm:flex-row gap-4 shrink-0 fade-in-up" style="transition-delay: 200ms;">
                    <a href="/products" class="group bg-[#6EDC44] hover:bg-[#52C22D] text-[#05080D] px-8 py-3.5 rounded-full font-bold text-sm transition-all duration-300 text-center flex items-center justify-center gap-2 hover:-translate-y-1 hover:shadow-[0_10px_25px_rgba(110,220,68,0.3)]">
                        Explore Products
                        <svg class="w-4 h-4 transform transition-transform duration-300 group-hover:translate-x-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                    <a href="/contact" class="group border border-white/20 hover:border-white text-white px-8 py-3.5 rounded-full font-bold text-sm transition-all duration-300 text-center flex items-center justify-center gap-2 hover:-translate-y-1 hover:bg-white/5">
                        Contact Our Experts
                        <svg class="w-4 h-4 transform transition-transform duration-300 group-hover:translate-x-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
