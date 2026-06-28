<nav x-data="{ mobileMenuOpen: false }" class="sticky w-full z-50 top-0 transition-all duration-300 bg-[#05080D]/80 backdrop-blur-md border-b border-white/10" id="navbar">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-[88px]">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="/" class="flex items-center gap-2">
                    <img src="/logo.png" alt="Saxon Messtechnik Logo" class="h-10 w-auto">
                    <span class="font-bold text-xl tracking-tight leading-none uppercase text-white">Saxon<br>Messtechnik</span>
                </a>
            </div>
            
            <!-- Desktop Menu -->
            <div class="hidden md:flex flex-1 justify-center">
                <div class="flex items-center space-x-12 h-full">
                    <a href="/" class="{{ request()->is('/') ? 'text-[#6EDC44] border-b-2 border-[#6EDC44]' : 'text-gray-300 hover:text-[#6EDC44] border-b-2 border-transparent hover:border-[#6EDC44]' }} transition-all px-1 py-2 text-sm font-medium">Home</a>
                    <a href="/about" class="{{ request()->is('about*') ? 'text-[#6EDC44] border-b-2 border-[#6EDC44]' : 'text-gray-300 hover:text-[#6EDC44] border-b-2 border-transparent hover:border-[#6EDC44]' }} transition-all px-1 py-2 text-sm font-medium">About</a>
                    
                    <!-- Products Dropdown -->
                    <div class="relative group h-full flex items-center py-8">
                        <a href="/products" class="{{ request()->is('products*') ? 'text-[#6EDC44] border-b-2 border-[#6EDC44]' : 'text-gray-300 hover:text-[#6EDC44] border-b-2 border-transparent hover:border-[#6EDC44]' }} transition-all px-1 py-2 text-sm font-medium inline-flex items-center gap-1">
                            Products
                            <svg class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </a>
                        <!-- Dropdown Menu -->
                        <div class="absolute top-[80px] left-1/2 -translate-x-1/2 w-64 rounded-xl shadow-2xl bg-white ring-1 ring-black/5 overflow-hidden z-50 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0 py-2">
                            <!-- Gas Analyzer -->
                            <a href="/products?category=gas-analyzer" class="flex items-center gap-3 px-5 py-3 hover:bg-gray-50 transition-colors group/item">
                                <div class="w-10 h-10 rounded-lg bg-blue-50 flex items-center justify-center text-blue-500 group-hover/item:bg-blue-500 group-hover/item:text-white transition-colors shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m14-6h2m-2 6h2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path></svg>
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-[#05080D]">Gas Analyzer</p>
                                    <p class="text-xs text-gray-500">Precision monitoring</p>
                                </div>
                            </a>
                            <!-- Gas Detector -->
                            <a href="/products?category=gas-detector" class="flex items-center gap-3 px-5 py-3 hover:bg-gray-50 transition-colors group/item">
                                <div class="w-10 h-10 rounded-lg bg-orange-50 flex items-center justify-center text-orange-500 group-hover/item:bg-orange-500 group-hover/item:text-white transition-colors shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-[#05080D]">Gas Detector</p>
                                    <p class="text-xs text-gray-500">Safety & protection</p>
                                </div>
                            </a>
                            <!-- Liquid Analyzer -->
                            <a href="/products?category=liquid-analyzer" class="flex items-center gap-3 px-5 py-3 hover:bg-gray-50 transition-colors group/item">
                                <div class="w-10 h-10 rounded-lg bg-cyan-50 flex items-center justify-center text-cyan-500 group-hover/item:bg-cyan-500 group-hover/item:text-white transition-colors shrink-0">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3c0 0-6.5 7.5-6.5 12a6.5 6.5 0 1013 0c0-4.5-6.5-12-6.5-12z"></path></svg>
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-[#05080D]">Liquid Analyzer</p>
                                    <p class="text-xs text-gray-500">Water quality analysis</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <a href="/contact" class="{{ request()->is('contact*') ? 'text-[#6EDC44] border-b-2 border-[#6EDC44]' : 'text-gray-300 hover:text-[#6EDC44] border-b-2 border-transparent hover:border-[#6EDC44]' }} transition-all px-1 py-2 text-sm font-medium">Contact</a>
                </div>
            </div>
            
            <!-- CTA Button Desktop -->
            <div class="hidden md:block">
                <a href="/contact" class="bg-[#6EDC44] hover:bg-[#52C22D] text-[#05080D] px-6 py-2.5 rounded-full font-semibold transition-colors duration-300 text-sm flex items-center gap-2">
                    Get A Quote
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="-mr-2 flex md:hidden">
                <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-white/10 focus:outline-none transition-colors">
                    <svg class="h-6 w-6" x-show="!mobileMenuOpen" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg class="h-6 w-6" x-show="mobileMenuOpen" style="display: none;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="mobileMenuOpen" style="display: none;" class="md:hidden bg-[#0E131B] border-b border-white/10 absolute w-full z-40" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2">
        <div class="px-4 pt-2 pb-6 space-y-2 shadow-2xl">
            <a href="/" class="{{ request()->is('/') ? 'text-[#6EDC44] bg-white/5' : 'text-gray-300 hover:text-white hover:bg-white/5' }} block px-3 py-2 rounded-md text-base font-medium transition-colors">Home</a>
            <a href="/about" class="{{ request()->is('about*') ? 'text-[#6EDC44] bg-white/5' : 'text-gray-300 hover:text-white hover:bg-white/5' }} block px-3 py-2 rounded-md text-base font-medium transition-colors">About</a>
            
            <!-- Mobile Products Dropdown -->
            <div x-data="{ openProducts: false }">
                <button @click="openProducts = !openProducts" class="w-full text-left {{ request()->is('products*') ? 'text-[#6EDC44]' : 'text-gray-300 hover:text-white' }} px-3 py-2 rounded-md text-base font-medium flex justify-between items-center transition-colors">
                    Products
                    <svg class="w-4 h-4 transition-transform duration-200" :class="openProducts ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div x-show="openProducts" class="pl-6 pr-3 py-2 space-y-3" style="display: none;"
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 -translate-y-2"
                     x-transition:enter-end="opacity-100 translate-y-0">
                    <a href="/products?category=gas-analyzer" class="flex items-center gap-3 px-3 py-2 rounded-md hover:bg-white/5 transition-colors group/mob">
                        <div class="w-8 h-8 rounded bg-blue-500/20 text-blue-400 flex items-center justify-center group-hover/mob:bg-blue-500 group-hover/mob:text-white transition-colors shrink-0">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m14-6h2m-2 6h2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path></svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-300 group-hover/mob:text-white transition-colors">Gas Analyzer</p>
                        </div>
                    </a>
                    <a href="/products?category=gas-detector" class="flex items-center gap-3 px-3 py-2 rounded-md hover:bg-white/5 transition-colors group/mob">
                        <div class="w-8 h-8 rounded bg-orange-500/20 text-orange-400 flex items-center justify-center group-hover/mob:bg-orange-500 group-hover/mob:text-white transition-colors shrink-0">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-300 group-hover/mob:text-white transition-colors">Gas Detector</p>
                        </div>
                    </a>
                    <a href="/products?category=liquid-analyzer" class="flex items-center gap-3 px-3 py-2 rounded-md hover:bg-white/5 transition-colors group/mob">
                        <div class="w-8 h-8 rounded bg-cyan-500/20 text-cyan-400 flex items-center justify-center group-hover/mob:bg-cyan-500 group-hover/mob:text-white transition-colors shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3c0 0-6.5 7.5-6.5 12a6.5 6.5 0 1013 0c0-4.5-6.5-12-6.5-12z"></path></svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-300 group-hover/mob:text-white transition-colors">Liquid Analyzer</p>
                        </div>
                    </a>
                </div>
            </div>

            <a href="/contact" class="{{ request()->is('contact*') ? 'text-[#6EDC44] bg-white/5' : 'text-gray-300 hover:text-white hover:bg-white/5' }} block px-3 py-2 rounded-md text-base font-medium transition-colors">Contact</a>
            
            <a href="/contact" class="bg-[#6EDC44] text-[#05080D] block px-3 py-2 rounded-md text-base font-bold mt-4 text-center hover:bg-[#52C22D] transition-colors">Get A Quote</a>
        </div>
    </div>
</nav>
