@extends('layouts.app')

@section('title', 'Page Not Found | Saxon Messtechnik')

@section('content')
<section class="relative pt-40 pb-32 lg:pt-56 lg:pb-48 overflow-hidden min-h-[80vh] flex items-center justify-center bg-[#05080D]">
    <!-- Background image and effects -->
    <div class="absolute inset-0 z-0">
        <!-- Subtle noise or texture could go here if we had an asset, we'll use a deep gradient -->
        <div class="absolute inset-0 bg-gradient-to-br from-[#05080D] via-[#0a0f18] to-[#05080D]"></div>
        
        <!-- Fog / Glow effects -->
        <div class="absolute top-1/4 left-1/4 w-[500px] h-[500px] bg-[#6EDC44]/5 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute bottom-1/4 right-1/4 w-[400px] h-[400px] bg-white/5 rounded-full blur-[80px] pointer-events-none"></div>
        
        <!-- Grid pattern overlay (industrial tech feel) -->
        <div class="absolute inset-0" style="background-image: radial-gradient(rgba(255, 255, 255, 0.05) 1px, transparent 1px); background-size: 40px 40px;"></div>
    </div>
    
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20 text-center fade-in-up">
        <!-- 404 Large Text -->
        <div class="relative inline-block mb-2">
            <h1 class="text-[8rem] lg:text-[14rem] font-black text-transparent bg-clip-text bg-gradient-to-b from-white via-white/80 to-white/5 leading-none tracking-tighter" style="line-height: 0.85;">
                404
            </h1>
            <!-- Small floating elements around the 404 -->
            <div class="absolute top-10 -left-10 w-4 h-4 rounded-full border border-[#6EDC44]/30 animate-pulse"></div>
            <div class="absolute bottom-10 -right-10 w-2 h-2 rounded-full bg-[#6EDC44]/50"></div>
        </div>
        
        <div class="w-16 h-1.5 bg-[#6EDC44] mx-auto mb-8 rounded-full shadow-[0_0_15px_rgba(110,220,68,0.5)]"></div>
        
        <h2 class="text-3xl lg:text-4xl font-extrabold text-white tracking-tight mb-4">
            Connection Lost
        </h2>
        
        <p class="text-gray-400 text-base lg:text-lg mb-10 max-w-xl mx-auto leading-relaxed">
            The page you are looking for has drifted off the radar. It might have been removed, renamed, or is temporarily unavailable. 
        </p>
        
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="/" class="group bg-[#6EDC44] hover:bg-[#52C22D] text-[#05080D] px-8 py-3.5 rounded-xl font-bold transition-all duration-300 flex items-center justify-center gap-2 hover:shadow-[0_10px_25px_rgba(110,220,68,0.3)] w-full sm:w-auto">
                <svg class="w-5 h-5 transform transition-transform duration-300 group-hover:-translate-x-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Return to Dashboard
            </a>
            <a href="/contact" class="group bg-white/5 hover:bg-white/10 border border-white/10 text-white px-8 py-3.5 rounded-xl font-bold transition-all duration-300 flex items-center justify-center gap-2 w-full sm:w-auto backdrop-blur-sm hover:border-white/20">
                Contact Support
            </a>
        </div>
    </div>
</section>
@endsection
