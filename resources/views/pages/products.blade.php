@extends('layouts.app')

@section('title', 'Products | Saxon Messtechnik')

@php
    $category = request()->query('category', 'gas-analyzer');

    if (!in_array($category, ['gas-analyzer', 'gas-detector', 'liquid-analyzer'])) {
        $category = 'gas-analyzer';
    }

    $content = [];

    if ($category === 'gas-analyzer') {
        $content = [
            'category_name' => 'Gas Analyzer',
            'hero_img' => '/assets/hero/hero-gasanalyzer.webp',
            'hero_title' => 'Precision Gas Analysis <br>for Critical Environments.',
            'hero_desc' => 'High-performance gas analyzers engineered for accurate, real-time monitoring and maximum reliability in critical applications.',
            'categories' => [
                [
                    'name' => 'Oxygen Analyzer',
                    'desc' => 'Reliable oxygen monitoring for safety, process efficiency, and emissions control.',
                    'products' => [
                        [
                            'name' => 'OXYM 25',
                            'img' => '/assets/product/gas-analyzer/oxygen-analyzer/OXYM 25.webp',
                            'desc' => 'High-precision oxygen analyzer for continuous process monitoring with smart digital communication and rapid response.',
                        ],
                        [
                            'name' => 'TOX 290',
                            'img' => '/assets/product/gas-analyzer/oxygen-analyzer/TOX 290.webp',
                            'desc' => 'Robust trace oxygen analyzer designed for harsh industrial environments, ensuring maximum stability and reliability.',
                        ]
                    ]
                ],
                [
                    'name' => 'Humidity Analyzer',
                    'desc' => 'Accurate moisture and humidity measurement for process optimization.',
                    'products' => [
                        [
                            'name' => 'MH1223',
                            'img' => '/assets/product/gas-analyzer/humidity-analyzer/MH1223.webp',
                            'desc' => 'Advanced humidity analyzer providing real-time data for critical moisture control applications and industrial drying.',
                        ],
                        [
                            'name' => 'MHS1225',
                            'img' => '/assets/product/gas-analyzer/humidity-analyzer/MHS1225.webp',
                            'desc' => 'High-performance sensor for continuous humidity measurement in extreme temperature conditions with excellent durability.',
                        ],
                        [
                            'name' => 'MHK1233',
                            'img' => '/assets/product/gas-analyzer/humidity-analyzer/MHK1233.webp',
                            'desc' => 'Versatile humidity and temperature analyzer featuring superior interference resistance and low maintenance requirements.',
                        ]
                    ]
                ]
            ]
        ];
    } elseif ($category === 'gas-detector') {
        $content = [
            'category_name' => 'Gas Detector',
            'hero_img' => '/assets/hero/hero-gasdetector.webp',
            'hero_title' => 'Advanced Gas Detection <br>for Maximum Safety.',
            'hero_desc' => 'Protect your personnel and plant with our comprehensive range of toxic and combustible gas detectors, ensuring a safe working environment.',
            'categories' => [
                [
                    'name' => 'Toxic & Combustible Gas Detectors',
                    'desc' => 'Comprehensive continuous detection solutions for a wide range of hazardous gases.',
                    'products' => [
                        [
                            'name' => 'Combustible & Corrosive Gas Detector',
                            'img' => '/assets/product/gas-detector/CombustibleCorrosiveGasDetector_CL2, NH3, O3, HCL.webp',
                            'desc' => 'Designed for early detection of CL2, NH3, O3, and HCL with high sensitivity and rapid response times to prevent accidents.',
                        ],
                        [
                            'name' => 'Electrochemical Toxic Gas Detector',
                            'img' => '/assets/product/gas-detector/ElectrochemicalToxicGasDetector_CO, H2S, H2, NO, NO2, SO2.webp',
                            'desc' => 'Precision electrochemical sensing for CO, H2S, H2, NO, NO2, and SO2 in hazardous industrial areas and confined spaces.',
                        ],
                        [
                            'name' => 'Oxygen & IR Gas Detector',
                            'img' => '/assets/product/gas-detector/Oxygen& IRGasDetector_O2, CO2, NOX.webp',
                            'desc' => 'Advanced infrared and oxygen detection technology for O2, CO2, and NOX monitoring with long-term stability and minimal drift.',
                        ]
                    ]
                ]
            ]
        ];
    } elseif ($category === 'liquid-analyzer') {
        $content = [
            'category_name' => 'Liquid Analyzer',
            'hero_img' => '/assets/hero/hero-liquidanalyzer.webp',
            'hero_title' => 'Accurate Liquid Analysis <br>for Process Optimization.',
            'hero_desc' => 'High-performance liquid analysis instruments engineered for precision water quality monitoring and industrial fluid control.',
            'categories' => [
                [
                    'name' => 'Liquid Analyzer Sensors',
                    'desc' => 'Reliable and accurate measurement solutions for free chlorine, pH, ORP, and other critical water quality parameters.',
                    'products' => [
                        [
                            'name' => 'Free Chlorine Sensor (Standard)',
                            'img' => '/assets/product/liquid-analyzer/freechlorinesensor.webp',
                            'desc' => 'Digital free chlorine sensor for drinking water and wastewater applications featuring smart communication and easy calibration.',
                        ],
                        [
                            'name' => 'Free Chlorine Sensor (Advanced)',
                            'img' => '/assets/product/liquid-analyzer/freechlorinesensor2.webp',
                            'desc' => 'High-performance sensor for continuous chlorine measurement in critical processes, equipped with superior interference resistance.',
                        ],
                        [
                            'name' => 'PH & ORP Sensor',
                            'img' => '/assets/product/liquid-analyzer/ORP&PHSensor.webp',
                            'desc' => 'Combined pH and ORP measurement solution designed for maximum durability, accurate readings, and seamless integration.',
                        ]
                    ]
                ]
            ]
        ];
    }
@endphp

@section('content')
<!-- Hero Section -->
<section class="relative pt-32 pb-24 lg:pt-48 lg:pb-32 overflow-hidden min-h-[500px] lg:min-h-[700px] bg-[#05080D]">
    <!-- Background image -->
    <div class="absolute inset-0 z-0">
        <img src="{{ $content['hero_img'] }}" alt="Products Background" class="w-full h-full object-cover object-center opacity-60 mix-blend-screen" style="image-rendering: auto;">
        <!-- Dark Edge Smoothing to white -->
        <div class="absolute inset-x-0 bottom-0 h-24 lg:h-32 bg-gradient-to-t from-white via-white/70 to-transparent pointer-events-none z-10"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20">
        <div class="w-full lg:w-[75%] fade-in-up relative">
            <!-- Fog behind text -->
            <div class="absolute -inset-10 lg:-inset-20 z-0 pointer-events-none" style="background: radial-gradient(ellipse at center left, rgba(5,8,13,0.9) 0%, rgba(5,8,13,0.6) 50%, transparent 80%); filter: blur(40px);"></div>
            
            <div class="relative z-10">
            <p class="text-[#6EDC44] font-bold tracking-widest text-xs lg:text-sm uppercase mb-3">Our Products &bull; {{ $content['category_name'] }}</p>
            <h1 class="text-5xl lg:text-7xl font-black text-white leading-[1.05] tracking-tight mb-6">
                {!! $content['hero_title'] !!}
            </h1>
            <p class="text-base lg:text-lg text-white/80 mb-10 max-w-2xl font-medium leading-relaxed">
                {{ $content['hero_desc'] }}
            </p>
            
            <div class="flex flex-col sm:flex-row gap-6 sm:gap-8 lg:gap-12">
                 <div class="flex items-start gap-4">
                     <div class="w-12 h-12 rounded-full border border-[#6EDC44]/30 flex items-center justify-center text-[#6EDC44] bg-[#6EDC44]/10 shrink-0">
                         <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                     </div>
                     <div>
                         <p class="text-white font-bold text-sm lg:text-base mb-1">High Accuracy</p>
                         <p class="text-white/60 text-xs lg:text-sm leading-relaxed">Reliable measurement<br>you can trust</p>
                     </div>
                 </div>
                 <div class="flex items-start gap-4">
                     <div class="w-12 h-12 rounded-full border border-[#6EDC44]/30 flex items-center justify-center text-[#6EDC44] bg-[#6EDC44]/10 shrink-0">
                         <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                     </div>
                     <div>
                         <p class="text-white font-bold text-sm lg:text-base mb-1">Built to Last</p>
                         <p class="text-white/60 text-xs lg:text-sm leading-relaxed">Rugged design for<br>harsh environments</p>
                     </div>
                 </div>
                 <div class="flex items-start gap-4">
                     <div class="w-12 h-12 rounded-full border border-[#6EDC44]/30 flex items-center justify-center text-[#6EDC44] bg-[#6EDC44]/10 shrink-0">
                         <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                     </div>
                     <div>
                         <p class="text-white font-bold text-sm lg:text-base mb-1">Easy Integration</p>
                         <p class="text-white/60 text-xs lg:text-sm leading-relaxed">Seamless fit into your<br>existing systems</p>
                     </div>
                 </div>
            </div>
            </div>
        </div>
    </div>
</section>

<!-- Products Display Sections -->
@foreach ($content['categories'] as $catIndex => $subcat)
<section class="py-20 {{ $catIndex % 2 == 0 ? 'bg-white' : 'bg-gray-50' }} relative z-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <p class="text-[#6EDC44] font-bold tracking-wider text-sm uppercase mb-4 inline-block">{{ $content['category_name'] }} Series</p>
            <h2 class="text-4xl lg:text-5xl font-extrabold text-[#05080D] tracking-tight mb-4">{{ $subcat['name'] }}</h2>
            <p class="text-gray-500 max-w-2xl mx-auto text-lg">{{ $subcat['desc'] }}</p>
        </div>
        
        @php
            $productCount = count($subcat['products']);
            $gridClasses = 'grid-cols-1 md:grid-cols-2 lg:grid-cols-3';
            $containerClasses = 'w-full';
            if ($productCount === 1) {
                $gridClasses = 'grid-cols-1';
                $containerClasses = 'max-w-md mx-auto';
            } elseif ($productCount === 2) {
                $gridClasses = 'grid-cols-1 md:grid-cols-2';
                $containerClasses = 'max-w-4xl mx-auto';
            }
        @endphp
        
        <div class="grid {{ $gridClasses }} gap-8 justify-center {{ $containerClasses }}">
            @foreach ($subcat['products'] as $product)
            <div class="bg-white border border-gray-200 rounded-3xl p-8 flex flex-col group hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 mx-auto w-full max-w-md">
                <div class="flex justify-center items-center h-56 mb-8 cursor-pointer relative" onclick="openPreview('{{ $product['img'] }}', '{{ addslashes($product['name']) }}', '{{ addslashes($product['desc']) }}')">
                    <img src="{{ $product['img'] }}" alt="{{ $product['name'] }}" class="h-48 object-contain group-hover:scale-110 transition-transform duration-500 drop-shadow-md">
                </div>
                <h3 class="font-black text-[#05080D] text-xl mb-3 text-center">{{ $product['name'] }}</h3>
                <p class="text-gray-500 text-sm mb-6 leading-relaxed flex-grow text-center">{{ $product['desc'] }}</p>
                
                <a href="/contact?product={{ urlencode($product['name']) }}" class="mt-auto text-[#05080D] font-bold text-sm flex items-center justify-center gap-2 hover:text-[#6EDC44] transition-colors bg-gray-50 py-3 rounded-xl hover:bg-[#6EDC44]/10 border border-transparent hover:border-[#6EDC44]/20">
                    Ask About Product <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endforeach

<!-- Why Choose Us Mini Badge Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="rounded-[2rem] overflow-hidden relative shadow-2xl bg-[#05080D]">
            <!-- Subtle Water Texture/Droplet background -->
            <div class="absolute inset-0 z-0">
                <img src="/assets/mini-badge/mini-badge-product.webp" alt="Why Choose Us" class="w-full h-full object-cover mix-blend-overlay grayscale opacity-70">
                <div class="absolute inset-0 bg-gradient-to-r from-[#05080D] via-[#05080D]/70 to-transparent"></div>
            </div>
            
            <div class="relative z-10 p-12 lg:p-16 flex flex-col lg:flex-row gap-12 items-center">
                <div class="w-full lg:w-1/3">
                    <p class="text-[#6EDC44] font-bold tracking-wider text-xs uppercase mb-3">Why Choose Saxon Products?</p>
                    <h2 class="text-4xl lg:text-5xl font-extrabold text-white leading-[1.1]">Engineered for Precision.<br>Built for Performance.</h2>
                </div>
                
                <div class="w-full lg:w-2/3 grid grid-cols-1 sm:grid-cols-2 gap-10">
                    <div class="flex gap-4">
                        <div class="w-12 h-12 rounded-full border border-[#6EDC44]/30 flex items-center justify-center text-[#6EDC44] bg-[#6EDC44]/10 shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <div>
                            <h3 class="text-white font-bold text-lg mb-2">Precise Measurements</h3>
                            <p class="text-gray-400 text-sm leading-relaxed">Advanced technology for accurate and reliable results in all conditions.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="w-12 h-12 rounded-full border border-[#6EDC44]/30 flex items-center justify-center text-[#6EDC44] bg-[#6EDC44]/10 shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        <div>
                            <h3 class="text-white font-bold text-lg mb-2">Built for Tough Conditions</h3>
                            <p class="text-gray-400 text-sm leading-relaxed">Robust construction ensures long-term stability in harsh environments.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="w-12 h-12 rounded-full border border-[#6EDC44]/30 flex items-center justify-center text-[#6EDC44] bg-[#6EDC44]/10 shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                        <div>
                            <h3 class="text-white font-bold text-lg mb-2">Easy to Integrate</h3>
                            <p class="text-gray-400 text-sm leading-relaxed">Designed for seamless integration with your existing systems.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="w-12 h-12 rounded-full border border-[#6EDC44]/30 flex items-center justify-center text-[#6EDC44] bg-[#6EDC44]/10 shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                        </div>
                        <div>
                            <h3 class="text-white font-bold text-lg mb-2">Trusted Global Support</h3>
                            <p class="text-gray-400 text-sm leading-relaxed">Our experts are here to support you at every step of your process.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Support Section -->
<section class="py-12 bg-white pb-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-10 items-start">
            <div class="w-full lg:w-1/3">
                <p class="text-[#6EDC44] font-bold tracking-wider text-xs uppercase mb-3">Need help choosing the right product?</p>
                <h2 class="text-4xl lg:text-5xl font-extrabold text-[#05080D] leading-[1.1]">Our experts are ready to help you.</h2>
            </div>
            
            <div class="w-full lg:w-2/3 grid grid-cols-1 sm:grid-cols-3 gap-5">
                <!-- Support Card 1 -->
                <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 rounded-full bg-[#6EDC44]/10 text-[#6EDC44] flex items-center justify-center mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                    </div>
                    <h3 class="font-bold text-[#05080D] text-lg mb-2">Expert Consultation</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Get product recommendations tailored to your needs.</p>
                </div>
                
                <!-- Support Card 2 -->
                <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 rounded-full bg-[#6EDC44]/10 text-[#6EDC44] flex items-center justify-center mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    </div>
                    <h3 class="font-bold text-[#05080D] text-lg mb-2">Technical Support</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Application support and technical guidance from our specialists.</p>
                </div>
                
                <!-- Get in Touch CTA Card -->
                <a href="/contact" class="bg-[#6EDC44] rounded-2xl p-6 shadow-md hover:bg-[#52C22D] hover:shadow-lg transition-all duration-300 group flex flex-col justify-between relative overflow-hidden">
                    <div>
                        <h3 class="font-bold text-[#05080D] text-lg mb-2">Get in Touch</h3>
                        <p class="text-[#05080D]/70 text-sm leading-relaxed">Let us help you find the best solution for your process.</p>
                    </div>
                    <div class="mt-4 w-12 h-12 rounded-full bg-[#05080D] text-white flex items-center justify-center self-end group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Product Preview Modal -->
<div id="productModal" class="fixed inset-0 z-[100] hidden items-center justify-center">
    <!-- Backdrop -->
    <div id="modalBackdrop" class="absolute inset-0 bg-[#05080D]/80 backdrop-blur-sm opacity-0 transition-opacity duration-300 cursor-pointer"></div>
    
    <!-- Modal Content -->
    <div id="modalContent" class="relative bg-white rounded-[2rem] w-11/12 max-w-4xl overflow-hidden shadow-2xl scale-95 opacity-0 transition-all duration-300 z-10 flex flex-col md:flex-row border border-white/20">
        <!-- Close Button -->
        <button onclick="closePreview()" class="absolute top-4 right-4 w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center text-gray-500 hover:bg-red-50 hover:text-red-500 transition-colors z-20">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>
        
        <!-- Image Area -->
        <div class="w-full md:w-1/2 bg-white p-10 flex items-center justify-center relative">
            <img id="previewImage" src="" alt="Product Preview" class="w-full h-auto max-h-[400px] object-contain drop-shadow-2xl relative z-10 transform hover:scale-105 transition-transform duration-500">
        </div>
        
        <!-- Text Area -->
        <div class="w-full md:w-1/2 bg-gray-50 p-10 md:p-12 flex flex-col justify-center border-l border-gray-100">
            <div class="w-14 h-14 rounded-full bg-[#6EDC44]/10 text-[#6EDC44] flex items-center justify-center mb-6 border border-[#6EDC44]/20">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
            </div>
            <h3 id="previewTitle" class="text-3xl font-black text-[#05080D] mb-4">Product Name</h3>
            <p id="previewDesc" class="text-gray-600 mb-8 leading-relaxed text-lg">Product description goes here.</p>
            
            <a id="previewLink" href="/contact" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-[#6EDC44] text-[#05080D] font-bold rounded-xl hover:bg-[#52C22D] hover:shadow-[0_0_25px_rgba(110,220,68,0.4)] transition-all duration-300 w-full sm:w-auto mt-auto">
                Ask About Product <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
        </div>
    </div>
</div>

<script>
    const modal = document.getElementById('productModal');
    const backdrop = document.getElementById('modalBackdrop');
    const content = document.getElementById('modalContent');
    
    function openPreview(imageSrc, title, desc) {
        // Set content
        document.getElementById('previewImage').src = imageSrc;
        document.getElementById('previewTitle').textContent = title;
        document.getElementById('previewDesc').textContent = desc;
        document.getElementById('previewLink').href = '/contact?product=' + encodeURIComponent(title);
        
        // Show modal container
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        
        // Small delay to allow display:flex to apply before animating opacity/scale
        setTimeout(() => {
            backdrop.classList.remove('opacity-0');
            backdrop.classList.add('opacity-100');
            
            content.classList.remove('opacity-0', 'scale-95');
            content.classList.add('opacity-100', 'scale-100');
        }, 10);
        
        // Prevent body scroll
        document.body.style.overflow = 'hidden';
    }
    
    function closePreview() {
        // Animate out
        backdrop.classList.remove('opacity-100');
        backdrop.classList.add('opacity-0');
        
        content.classList.remove('opacity-100', 'scale-100');
        content.classList.add('opacity-0', 'scale-95');
        
        // Hide container after animation
        setTimeout(() => {
            modal.classList.remove('flex');
            modal.classList.add('hidden');
            
            // Restore body scroll
            document.body.style.overflow = '';
        }, 300); // 300ms matches the duration-300 utility
    }
    
    // Close modal when clicking on backdrop
    backdrop.addEventListener('click', closePreview);
    
    // Close modal on Escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
            closePreview();
        }
    });
</script>
@endsection
