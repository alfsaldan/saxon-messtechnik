<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name', 'Saxon Messtechnik'))</title>
    
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/favicon/site.webmanifest') }}">
    <link rel="shortcut icon" href="{{ asset('assets/favicon/favicon.ico') }}">

    <!-- Fonts -->
    <style>
        @font-face {
            font-family: 'Inter';
            src: url('/assets/fonts/inter/Inter-Regular.ttf') format('truetype');
            font-weight: 400;
            font-display: swap;
        }
        @font-face {
            font-family: 'Inter';
            src: url('/assets/fonts/inter/Inter-Medium.ttf') format('truetype');
            font-weight: 500;
            font-display: swap;
        }
        @font-face {
            font-family: 'Inter';
            src: url('/assets/fonts/inter/Inter-SemiBold.ttf') format('truetype');
            font-weight: 600;
            font-display: swap;
        }
        @font-face {
            font-family: 'Inter';
            src: url('/assets/fonts/inter/Inter-Bold.ttf') format('truetype');
            font-weight: 700;
            font-display: swap;
        }
        @font-face {
            font-family: 'Inter';
            src: url('/assets/fonts/inter/Inter-ExtraBold.ttf') format('truetype');
            font-weight: 800;
            font-display: swap;
        }
        body { font-family: 'Inter', sans-serif; background-color: #05080D; color: #FFFFFF; }
        
        /* Scroll Animation Utility */
        .fade-in-up {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }
        .fade-in-up.is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* ---- Feature Card Fog / Smoke Effect ---- */
        .features-fog-card {
            position: relative;
            overflow: hidden;
        }
        .features-fog-card::before,
        .features-fog-card::after {
            content: '';
            position: absolute;
            border-radius: 50%;
            pointer-events: none;
            filter: blur(60px);
            opacity: 0;
            transition: opacity 1.2s ease;
        }
        .features-fog-card.is-visible::before,
        .features-fog-card.is-visible::after {
            opacity: 1;
        }
        /* Left fog blob */
        .features-fog-card::before {
            width: 320px; height: 180px;
            left: -40px; top: -30px;
            background: radial-gradient(ellipse, rgba(110,220,68,.08) 0%, transparent 70%);
            animation: fogDrift 8s ease-in-out infinite alternate;
        }
        /* Right fog blob */
        .features-fog-card::after {
            width: 280px; height: 160px;
            right: -30px; bottom: -20px;
            background: radial-gradient(ellipse, rgba(255,255,255,.04) 0%, transparent 70%);
            animation: fogDrift 10s ease-in-out 2s infinite alternate-reverse;
        }
        @keyframes fogDrift {
            0%   { transform: translateX(0)   translateY(0)   scale(1);   }
            50%  { transform: translateX(30px) translateY(-10px) scale(1.15); }
            100% { transform: translateX(-20px) translateY(8px) scale(1.05);  }
        }

        /* ---- Feature Card Slide-in Animation ---- */
        .feature-item {
            opacity: 0;
            transform: translateY(24px) scale(.96);
            transition: opacity .7s cubic-bezier(.22,1,.36,1),
                        transform .7s cubic-bezier(.22,1,.36,1);
        }
        .feature-item.is-visible {
            opacity: 1;
            transform: translateY(0) scale(1);
        }

        /* ---- Feature Icon Glow Pulse ---- */
        .feature-icon {
            transition: box-shadow .4s ease, transform .4s ease;
        }
        .feature-item.is-visible .feature-icon {
            animation: iconPulse 2.5s ease-in-out infinite;
        }
        @keyframes iconPulse {
            0%, 100% { box-shadow: 0 0 0 0 rgba(110,220,68,.15); }
            50%      { box-shadow: 0 0 18px 4px rgba(110,220,68,.25); }
        }

        /* ---- Feature Card Hover ---- */
        .feature-item:hover {
            transform: translateY(-4px) scale(1.02);
        }
        .feature-item:hover .feature-icon {
            transform: scale(1.12);
            box-shadow: 0 0 20px 6px rgba(110,220,68,.3);
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#05080D] text-white antialiased overflow-x-hidden">
    @include('components.navbar')

    <main>
        @yield('content')
    </main>

    @include('components.footer')

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                    }
                });
            }, { threshold: 0.1 });

            document.querySelectorAll('.fade-in-up, .feature-item, .features-fog-card').forEach((el) => observer.observe(el));
        });
    </script>
</body>
</html>
