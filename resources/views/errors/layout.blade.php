<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="noindex, nofollow">

        <title>@yield('code') · boudydegeer</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        {{-- Fonts: JetBrains Mono (mono/sans body) + Instrument Serif (display) --}}
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=jetbrains-mono:400,500,600,700|instrument-serif:400,400i" rel="stylesheet">

        <style>
            /* Default: dark (brutalist canonical). Light mode via prefers-color-scheme. */
            :root {
                --bg: #0A0A0A;
                --fg: #EDEDED;
                --muted: #888888;
                --border: #1F1F1F;
                --primary: #00FF87;
                --danger: #EF4444;
            }

            @media (prefers-color-scheme: light) {
                :root {
                    --bg: #FAFAFA;
                    --fg: #0A0A0A;
                    --muted: #666666;
                    --border: #E5E5E5;
                    --primary: #00A85A;
                    --danger: #DC2626;
                }
            }

            * {
                box-sizing: border-box;
                margin: 0;
                padding: 0;
            }

            html, body {
                background: var(--bg);
                color: var(--fg);
                font-family: 'JetBrains Mono', ui-monospace, SFMono-Regular, Menlo, Monaco, monospace;
                font-size: 13px;
                line-height: 1.5;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
            }

            body {
                min-height: 100vh;
                display: flex;
                flex-direction: column;
            }

            a {
                color: inherit;
                text-decoration: none;
            }

            .wrap {
                max-width: 1280px;
                width: 100%;
                margin: 0 auto;
                padding: 0 20px;
                flex: 1;
                display: flex;
                flex-direction: column;
            }

            @media (min-width: 768px) {
                .wrap { padding: 0 32px; }
            }

            /* Top bar */
            .top {
                display: flex;
                align-items: center;
                justify-content: space-between;
                height: 56px;
                border-bottom: 1px solid var(--border);
                font-size: 13px;
                font-weight: 500;
            }

            .brand {
                display: inline-flex;
                align-items: center;
                gap: 8px;
            }

            .brand .dollar {
                color: var(--primary);
            }

            .status {
                display: inline-flex;
                align-items: center;
                gap: 8px;
                color: var(--muted);
                font-size: 12px;
            }

            .status .dot {
                display: inline-block;
                width: 6px;
                height: 6px;
                background: var(--danger);
                border-radius: 0;
            }

            /* Center */
            .center {
                flex: 1;
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                justify-content: center;
                padding: 64px 0;
                gap: 24px;
            }

            .label {
                font-size: 11px;
                letter-spacing: 0.14em;
                text-transform: uppercase;
                color: var(--muted);
            }

            .label .accent { color: var(--primary); }

            .code {
                font-family: 'Instrument Serif', ui-serif, Georgia, serif;
                font-size: 140px;
                line-height: 0.95;
                letter-spacing: -0.03em;
                color: var(--fg);
            }

            @media (min-width: 768px) {
                .code { font-size: 220px; }
            }

            .slug {
                color: var(--muted);
                font-size: 13px;
            }

            .slug .slash {
                color: var(--primary);
            }

            .msg {
                color: var(--fg);
                font-size: 14px;
                max-width: 60ch;
                line-height: 1.6;
            }

            .msg .caret {
                color: var(--muted);
            }

            .cta {
                display: inline-flex;
                align-items: center;
                gap: 8px;
                border: 1px solid var(--border);
                padding: 10px 16px;
                font-size: 13px;
                color: var(--fg);
                transition: color 80ms linear, border-color 80ms linear;
            }

            .cta:hover {
                border-color: var(--primary);
                color: var(--primary);
            }

            .cta .arr {
                color: var(--primary);
            }

            /* Footer */
            .foot {
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                justify-content: space-between;
                gap: 8px;
                padding: 24px 0;
                border-top: 1px solid var(--border);
                color: var(--muted);
                font-size: 11px;
            }

            @media (min-width: 768px) {
                .foot {
                    flex-direction: row;
                    align-items: center;
                }
            }

            .foot .sep { color: var(--border); margin: 0 8px; }
            .foot .accent { color: var(--primary); }

            /* Grid backdrop (subtle) */
            .gridbg {
                position: fixed;
                inset: 0;
                pointer-events: none;
                background-image:
                    linear-gradient(to right, var(--border) 1px, transparent 1px),
                    linear-gradient(to bottom, var(--border) 1px, transparent 1px);
                background-size: 56px 56px;
                opacity: 0.35;
                z-index: 0;
            }

            .wrap { position: relative; z-index: 1; }
        </style>
    </head>
    <body>
        <div class="gridbg"></div>
        <div class="wrap">
            <header class="top">
                <a href="/" class="brand">
                    <span class="dollar">$</span>
                    <span>boudydegeer</span>
                </a>
                <span class="status">
                    <span class="dot"></span>
                    <span>&gt; error</span>
                </span>
            </header>

            <main class="center">
                <div class="label">
                    <span class="accent">//</span> @yield('label')
                </div>

                <div class="code">@yield('code')</div>

                <div class="slug">
                    <span class="slash">//</span> @yield('slug')
                </div>

                <p class="msg">
                    <span class="caret">&gt;</span>
                    @yield('message')
                </p>

                <a href="/" class="cta">
                    <span class="marker" style="color: var(--muted)">[</span>
                    ./back
                    <span class="marker" style="color: var(--muted)">]</span>
                    <span class="arr">&rarr;</span>
                </a>
            </main>

            <footer class="foot">
                <div>
                    <span class="accent">&#9642;</span>
                    <span>boudydegeer.com</span>
                    <span class="sep">/</span>
                    <span>&copy; 2026</span>
                </div>
                <div>
                    <span>@yield('code') &middot; @yield('slug')</span>
                    <span class="sep">/</span>
                    <span><span class="accent">$</span> exit @yield('code')</span>
                </div>
            </footer>
        </div>
    </body>
</html>
