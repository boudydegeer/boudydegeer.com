<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  @class(['dark' => ($appearance ?? 'dark') === 'dark'])>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- Inline script to apply theme before first paint and avoid flash.
             Default theme is `dark` (Terminal/Brutalist canonical). --}}
        <script>
            (function() {
                const appearance = '{{ $appearance ?? "dark" }}';

                if (appearance === 'system') {
                    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
                    if (prefersDark) {
                        document.documentElement.classList.add('dark');
                    } else {
                        document.documentElement.classList.remove('dark');
                    }
                } else if (appearance === 'dark') {
                    document.documentElement.classList.add('dark');
                } else {
                    document.documentElement.classList.remove('dark');
                }
            })();
        </script>

        {{-- Inline style to set the HTML background color based on our theme in app.css --}}
        <style>
            html {
                background-color: #FAFAFA;
            }

            html.dark {
                background-color: #0A0A0A;
            }
        </style>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">
        <link rel="manifest" href="/site.webmanifest" />
        <meta name="theme-color" content="#0A0A0A" />
        <meta name="msapplication-TileColor" content="#0A0A0A" />
        <meta name="apple-mobile-web-app-title" content="boudydegeer" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        <meta name="format-detection" content="telephone=no" />
        <link rel="canonical" href="{{ url()->current() }}" />

        <!-- Primary Meta Tags -->
        <meta name="title" content="Boudy de Geer — Senior FullStack Developer" />
        <meta name="description" content="Senior FullStack Developer based in Alicante, Spain. I bring SaaS ideas to life in ~2 weeks — Laravel, Vue.js, and AI engineering. CEO @ Mosaiqo." />
        <meta name="author" content="Boudy de Geer" />

        <!-- Open Graph / Facebook / LinkedIn -->
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://boudydegeer.com/" />
        <meta property="og:site_name" content="Boudy de Geer" />
        <meta property="og:title" content="Boudy de Geer — Senior FullStack Developer" />
        <meta property="og:description" content="Senior FullStack Developer based in Alicante, Spain. I bring SaaS ideas to life in ~2 weeks — Laravel, Vue.js, and AI engineering. CEO @ Mosaiqo." />
        <meta property="og:image" content="https://boudydegeer.com/og-image.png" />
        <meta property="og:image:secure_url" content="https://boudydegeer.com/og-image.png" />
        <meta property="og:image:width" content="1200" />
        <meta property="og:image:height" content="630" />
        <meta property="og:image:type" content="image/png" />
        <meta property="og:image:alt" content="Boudy de Geer — Senior FullStack Developer" />
        <meta property="og:locale" content="en_US" />

        <!-- Twitter / X -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:url" content="https://boudydegeer.com/" />
        <meta name="twitter:title" content="Boudy de Geer — Senior FullStack Developer" />
        <meta name="twitter:description" content="Senior FullStack Developer based in Alicante, Spain. I bring SaaS ideas to life in ~2 weeks — Laravel, Vue.js, and AI engineering. CEO @ Mosaiqo." />
        <meta name="twitter:image" content="https://boudydegeer.com/og-image.png" />
        <meta name="twitter:image:alt" content="Boudy de Geer — Senior FullStack Developer" />
        <meta name="twitter:creator" content="@boudydegeer" />
        <meta name="twitter:site" content="@boudydegeer" />

        {{-- Fonts: JetBrains Mono (mono/sans body) + Instrument Serif (display) --}}
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=jetbrains-mono:400,500,600,700|instrument-serif:400,400i" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.ts', "resources/js/pages/{$page['component']}.vue"])
        <x-inertia::head>
            <title>{{ config('app.name', 'Boudy de Geer') }}</title>
        </x-inertia::head>

        {{-- Plausible analytics (filtered by domain — no-op on localhost) --}}
        <script defer data-domain="boudydegeer.com" src="https://analytics.mosaiqo.com/js/script.js"></script>
    </head>
    <body class="font-sans antialiased">
        <x-inertia::app />
    </body>
</html>
