@extends('layouts.app')

@section('title', 'Contact Us | Saxon Messtechnik')

@section('content')

<!-- Hero Section -->
<section class="relative pt-32 pb-24 lg:pt-48 lg:pb-32 overflow-hidden min-h-[500px] lg:min-h-[700px] bg-[#05080D]">
    <!-- Background image -->
    <div class="absolute inset-0 z-0">
        <img src="/assets/hero/contact-hero.webp" alt="Contact Us Background" class="w-full h-full object-cover object-center opacity-60 mix-blend-screen" style="image-rendering: auto;">
        <!-- Dark Edge Smoothing to white -->
        <div class="absolute inset-x-0 bottom-0 h-24 lg:h-32 bg-gradient-to-t from-white via-white/70 to-transparent pointer-events-none z-10"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20">
        <div class="w-full lg:w-[75%] fade-in-up relative">
            <!-- Fog behind text -->
            <div class="absolute -inset-10 lg:-inset-20 z-0 pointer-events-none" style="background: radial-gradient(ellipse at center left, rgba(5,8,13,0.9) 0%, rgba(5,8,13,0.6) 50%, transparent 80%); filter: blur(40px);"></div>
            
            <div class="relative z-10">
                <p class="text-[#6EDC44] font-bold tracking-widest text-xs lg:text-sm uppercase mb-3">Contact Us</p>
                <h1 class="text-5xl lg:text-7xl font-black text-white leading-[1.05] tracking-tight mb-6">
                    We're Here to Help You<br>Achieve Better Results.
                </h1>
                <p class="text-base lg:text-lg text-white/80 mb-10 max-w-2xl font-medium leading-relaxed">
                    Do you have questions about our products, need technical support, or looking for the right solution for your application? Our team of experts is ready to assist you.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-6 sm:gap-8 lg:gap-12">
                     <div class="flex items-start gap-4">
                         <div class="w-12 h-12 rounded-full border border-[#6EDC44]/30 flex items-center justify-center text-[#6EDC44] bg-[#6EDC44]/10 shrink-0">
                             <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                         </div>
                         <div>
                             <p class="text-white font-bold text-sm lg:text-base mb-1">Expert Support</p>
                             <p class="text-white/60 text-xs lg:text-sm leading-relaxed">Get help from our<br>experienced team</p>
                         </div>
                     </div>
                     <div class="flex items-start gap-4">
                         <div class="w-12 h-12 rounded-full border border-[#6EDC44]/30 flex items-center justify-center text-[#6EDC44] bg-[#6EDC44]/10 shrink-0">
                             <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                         </div>
                         <div>
                             <p class="text-white font-bold text-sm lg:text-base mb-1">Quick Response</p>
                             <p class="text-white/60 text-xs lg:text-sm leading-relaxed">We respond as fast<br>as possible</p>
                         </div>
                     </div>
                     <div class="flex items-start gap-4">
                         <div class="w-12 h-12 rounded-full border border-[#6EDC44]/30 flex items-center justify-center text-[#6EDC44] bg-[#6EDC44]/10 shrink-0">
                             <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                         </div>
                         <div>
                             <p class="text-white font-bold text-sm lg:text-base mb-1">Global Service</p>
                             <p class="text-white/60 text-xs lg:text-sm leading-relaxed">Supporting customers<br>worldwide</p>
                         </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Contact Content Section -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-16">
            
            <!-- Left Column: Contact Form -->
            <div class="w-full lg:w-1/2 fade-in-up flex flex-col h-full">
                <p class="text-[#6EDC44] font-bold tracking-wider text-xs uppercase mb-3">Send Us A Message</p>
                <h2 class="text-3xl lg:text-4xl font-extrabold text-[#05080D] tracking-tight mb-4">Let's Start a Conversation</h2>
                <p class="text-gray-500 mb-10 leading-relaxed text-sm lg:text-base">
                    Fill out the form, and our team will get back to you<br class="hidden lg:block"> with the best solution for your needs.
                </p>
                
                <form class="space-y-6 flex-grow flex flex-col">
                    <!-- Full Name -->
                    <div>
                        <label for="name" class="block text-sm font-bold text-[#05080D] mb-2">Full Name <span class="text-red-500">*</span></label>
                        <input type="text" id="name" class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-white text-[#05080D] focus:border-[#6EDC44] focus:ring-1 focus:ring-[#6EDC44] outline-none transition-colors text-sm" placeholder="Enter your name">
                    </div>
                    
                    <!-- Email Address -->
                    <div>
                        <label for="email" class="block text-sm font-bold text-[#05080D] mb-2">Email Address <span class="text-red-500">*</span></label>
                        <input type="email" id="email" class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-white text-[#05080D] focus:border-[#6EDC44] focus:ring-1 focus:ring-[#6EDC44] outline-none transition-colors text-sm" placeholder="Masukkan email anda">
                    </div>
                    
                    <!-- Subject -->
                    <div>
                        <label for="subject" class="block text-sm font-bold text-[#05080D] mb-2">Message Subject <span class="text-red-500">*</span></label>
                        <input type="text" id="subject" class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-white text-[#05080D] focus:border-[#6EDC44] focus:ring-1 focus:ring-[#6EDC44] outline-none transition-colors text-sm" placeholder="How can we help you?">
                    </div>
                    
                    <!-- Message Content -->
                    <div class="flex-grow flex flex-col">
                        <label for="message" class="block text-sm font-bold text-[#05080D] mb-2">Message Content <span class="text-red-500">*</span></label>
                        <textarea id="message" rows="5" class="flex-grow w-full px-4 py-3 rounded-xl border border-gray-200 bg-white text-[#05080D] focus:border-[#6EDC44] focus:ring-1 focus:ring-[#6EDC44] outline-none transition-colors text-sm resize-y" placeholder="How can we help you?"></textarea>
                    </div>
                    
                    <!-- Submit -->
                    <div class="mt-auto pt-4 flex flex-col items-start gap-4">
                        <button type="button" onclick="sendEmail()" class="group bg-[#6EDC44] text-[#05080D] px-8 py-3.5 rounded-xl font-bold text-sm transition-all duration-300 flex items-center justify-center gap-2 hover:bg-[#52C22D] hover:shadow-[0_10px_25px_rgba(110,220,68,0.3)]">
                            Send Message
                            <svg class="w-4 h-4 transform transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </button>
                        
                        <div class="flex items-center gap-2 text-gray-500 text-xs">
                            <svg class="w-4 h-4 text-[#6EDC44] flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path></svg>
                            <span>Your information is safe with us. We respect your privacy.</span>
                        </div>
                    </div>
                </form>
            </div>
            
            <!-- Right Column: Contact Info & Technical Support -->
            <div class="w-full lg:w-1/2 fade-in-up flex flex-col h-full" style="transition-delay: 100ms;">
                <p class="text-[#6EDC44] font-bold tracking-wider text-xs uppercase mb-3">Contact Information</p>
                <h2 class="text-3xl lg:text-4xl font-extrabold text-[#05080D] tracking-tight mb-4">Get in Touch With Us</h2>
                <p class="text-gray-500 mb-10 leading-relaxed text-sm lg:text-base">
                    Reach out to us through any of the channels below.<br class="hidden lg:block"> We're here to support your business.
                </p>
                
                <div class="flex flex-col gap-4 mb-8">
                    <!-- Email -->
                    <div class="flex items-center p-5 border border-gray-100 rounded-2xl bg-white shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 rounded-full border border-[#6EDC44]/20 bg-[#6EDC44]/5 flex items-center justify-center text-[#6EDC44] shrink-0 mr-5">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <div class="flex-grow flex flex-col sm:flex-row sm:items-center justify-between">
                            <h4 class="font-bold text-[#05080D] text-sm mb-1 sm:mb-0 w-32 shrink-0">Email</h4>
                            <p class="text-gray-500 text-sm">info@saxon-messtechnik.com</p>
                        </div>
                    </div>
                    
                    <!-- Website -->
                    <div class="flex items-center p-5 border border-gray-100 rounded-2xl bg-white shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 rounded-full border border-[#6EDC44]/20 bg-[#6EDC44]/5 flex items-center justify-center text-[#6EDC44] shrink-0 mr-5">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                        </div>
                        <div class="flex-grow flex flex-col sm:flex-row sm:items-center justify-between">
                            <h4 class="font-bold text-[#05080D] text-sm mb-1 sm:mb-0 w-32 shrink-0">Website</h4>
                            <p class="text-gray-500 text-sm">www.saxon-messtechnik.com</p>
                        </div>
                    </div>
                    
                    <!-- Business Hours -->
                    <div class="flex items-center p-5 border border-gray-100 rounded-2xl bg-white shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 rounded-full border border-[#6EDC44]/20 bg-[#6EDC44]/5 flex items-center justify-center text-[#6EDC44] shrink-0 mr-5">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <div class="flex-grow flex flex-col sm:flex-row sm:items-center justify-between">
                            <h4 class="font-bold text-[#05080D] text-sm mb-1 sm:mb-0 w-32 shrink-0">Business Hours</h4>
                            <p class="text-gray-500 text-sm">Mon - Fri: 08:00 - 17:00 (CET)<br>Sat - Sun: Closed</p>
                        </div>
                    </div>
                </div>
                
                <!-- Need Technical Support Banner -->
                <div class="mt-auto rounded-3xl overflow-hidden relative shadow-lg bg-[#05080D] p-10 group">
                    <!-- Background Image -->
                    <div class="absolute inset-0 z-0">
                        <img src="/assets/mini-badge/mini-badge-contact1.webp" alt="Technical Support" class="w-full h-full object-cover mix-blend-overlay opacity-60 group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-r from-[#05080D] via-[#05080D]/80 to-transparent"></div>
                    </div>
                    
                    <div class="relative z-10">
                        <p class="text-[#6EDC44] font-bold tracking-wider text-[11px] uppercase mb-2">Need Technical Support?</p>
                        <h3 class="text-2xl lg:text-3xl font-extrabold text-white mb-3">We're Ready to Help</h3>
                        <p class="text-gray-400 text-sm mb-6 leading-relaxed max-w-sm">
                            Our technical support team is available to assist you with installation, configuration, and troubleshooting.
                        </p>
                        <a href="#" class="inline-flex items-center gap-2 border border-white/20 hover:border-white text-white px-6 py-2.5 rounded-full font-bold text-sm transition-all duration-300 hover:bg-white/5">
                            Visit Support Center <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

<!-- Our Locations Section -->
<section class="py-16 pb-24 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="rounded-[2.5rem] overflow-hidden relative border border-gray-100 shadow-xl bg-white p-12 lg:p-16 flex flex-col lg:flex-row items-center gap-12 group">
            
            <!-- Left Text -->
            <div class="w-full lg:w-1/3 relative z-10 fade-in-up">
                <p class="text-[#6EDC44] font-bold tracking-wider text-xs uppercase mb-3">Our Locations</p>
                <h2 class="text-3xl lg:text-4xl font-extrabold text-[#05080D] leading-[1.1] mb-4">
                    Global Presence.<br>Local Support.
                </h2>
                <p class="text-gray-500 text-sm leading-relaxed">
                    We serve customers around the world through our headquarters and trusted partner network.
                </p>
            </div>
            
            <!-- Right Map -->
            <div class="w-full lg:w-2/3 relative flex justify-center items-center fade-in-up" style="transition-delay: 200ms;">
                <img src="/assets/mini-badge/mini-badge-contact2.webp" alt="Global Locations Map" class="w-full max-w-2xl h-auto object-contain opacity-80 group-hover:opacity-100 transition-opacity duration-500">
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
function sendEmail() {
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const subject = document.getElementById('subject').value || 'Inquiry via Contact Form';
    const message = document.getElementById('message').value;
    
    // Construct email body
    const body = `Name: ${name}%0AEmail: ${email}%0A%0A${message}`;
    
    // Open Gmail compose window explicitly
    const gmailUrl = `https://mail.google.com/mail/?view=cm&fs=1&to=info@saxon-messtechnik.com&su=${encodeURIComponent(subject)}&body=${body}`;
    window.open(gmailUrl, '_blank');
}
</script>
@endpush
