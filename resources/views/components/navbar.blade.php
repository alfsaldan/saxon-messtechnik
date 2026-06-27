<nav x-data="{ mobileMenuOpen: false }" class="fixed w-full z-50 top-0 transition-all duration-300 bg-[#05080D]/40 backdrop-blur-md border-b border-white/10" id="navbar">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-[88px]">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="/" class="flex items-center gap-2">
                    <img src="/logo.png" alt="Saxon Messtechnik Logo" class="h-10 w-auto">
                    <span class="font-bold text-xl tracking-tight leading-none uppercase">Saxon<br>Messtechnik</span>
                </a>
            </div>
            
            <!-- Desktop Menu -->
            <div class="hidden md:flex flex-1 justify-center">
                <div class="flex items-center space-x-12">
                    <a href="/" class="{{ request()->is('/') ? 'text-[#6EDC44] border-b-2 border-[#6EDC44]' : 'text-gray-300 hover:text-[#6EDC44] border-b-2 border-transparent hover:border-[#6EDC44]' }} transition-all px-1 py-2 text-sm font-medium">Home</a>
                    <a href="/about" class="{{ request()->is('about*') ? 'text-[#6EDC44] border-b-2 border-[#6EDC44]' : 'text-gray-300 hover:text-[#6EDC44] border-b-2 border-transparent hover:border-[#6EDC44]' }} transition-all px-1 py-2 text-sm font-medium">About</a>
                    <a href="/products" class="{{ request()->is('products*') ? 'text-[#6EDC44] border-b-2 border-[#6EDC44]' : 'text-gray-300 hover:text-[#6EDC44] border-b-2 border-transparent hover:border-[#6EDC44]' }} transition-all px-1 py-2 text-sm font-medium">Products</a>
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
                <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-white/10 focus:outline-none">
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
    <div x-show="mobileMenuOpen" style="display: none;" class="md:hidden bg-[#0E131B] border-b border-white/10 absolute w-full" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2">
        <div class="px-4 pt-2 pb-6 space-y-2 shadow-2xl">
            <a href="/" class="text-[#6EDC44] block px-3 py-2 rounded-md text-base font-medium bg-white/5">Home</a>
            <a href="/about" class="text-gray-300 hover:text-white hover:bg-white/5 block px-3 py-2 rounded-md text-base font-medium">About</a>
            <a href="/products" class="text-gray-300 hover:text-white hover:bg-white/5 block px-3 py-2 rounded-md text-base font-medium">Products</a>
            <a href="/contact" class="text-gray-300 hover:text-white hover:bg-white/5 block px-3 py-2 rounded-md text-base font-medium">Contact</a>
            <a href="/contact" class="bg-[#6EDC44] text-[#05080D] block px-3 py-2 rounded-md text-base font-bold mt-4 text-center">Get A Quote</a>
        </div>
    </div>
</nav>
