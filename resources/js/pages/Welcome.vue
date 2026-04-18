<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import { ExternalLink, Github, Linkedin, Youtube, Calendar, Mail } from 'lucide-vue-next';

interface FeaturedProject {
    name: string;
    description: string;
    url: string;
    year: string;
    tech: string;
}

interface OtherProject {
    name: string;
    description: string;
    url: string;
    year: string;
    tech: string;
}

const featuredProjects: FeaturedProject[] = [
    {
        name: 'Magia',
        description:
            'Agent-first native desktop coding environment. Built for engineers who treat agents as a daily driver, not a novelty.',
        url: 'https://magia.sh',
        year: '2025',
        tech: 'TypeScript · Tauri',
    },
    {
        name: 'Proofread',
        description:
            'Laravel-native AI evals. Test, score, and regression-check LLM outputs the same way you test code — inside your existing Pest suite.',
        url: 'https://mosaiqo.github.io/proofread/',
        year: '2025',
        tech: 'Laravel · AI',
    },
    {
        name: 'Hollow Kit',
        description:
            'Pixel-perfect skeleton screens. Framework-agnostic core with first-class Vue, React, Svelte, and Nuxt adapters.',
        url: 'https://mosaiqo.github.io/hollow-kit/',
        year: '2025',
        tech: 'TypeScript · Vite',
    },
];

const otherProjects: OtherProject[] = [
    {
        name: 'Baicon',
        description: 'Desktop app + dashboard to monitor and optimize AI coding tools.',
        url: '#', // TODO: URL not found, asked Boudy
        year: '2026',
        tech: 'Tauri · Laravel',
    },
    {
        name: 'ErrorPilot',
        description: 'Auto-fix production bugs from Sentry/Bugsnag webhooks via Claude PRs.',
        url: '#', // TODO: URL not found, asked Boudy
        year: '2026',
        tech: 'Laravel · Claude',
    },
    {
        name: 'Solonaut',
        description: 'OS for virtual AI teams — orchestrated agents that ship work autonomously.',
        url: '#', // TODO: URL not found, asked Boudy
        year: '2026',
        tech: 'Laravel · Tauri · Rust',
    },
    {
        name: 'Atelier',
        description: 'Native dev-environment manager built for the AI-agent era. Worktrees first.',
        url: '#', // TODO: URL not found (useatelier.com is parked), asked Boudy
        year: '2026',
        tech: 'Rust · Tauri · Vue',
    },
    {
        name: 'Pain Point Radar',
        description: 'Reddit-mined market intelligence reports, sold as PDFs and subscriptions.',
        url: '#', // TODO: URL not found, asked Boudy
        year: '2026',
        tech: 'Laravel · Claude CLI',
    },
    {
        name: 'Chime',
        description: 'Notification infrastructure for Laravel — workflows, digest, inbox. Open Core.',
        url: '#', // TODO: URL not found, asked Boudy
        year: '2026',
        tech: 'Laravel · PHP',
    },
    {
        name: 'VinoYMas',
        description: 'Boutique enoteca in Alicante: shop, guided tastings, and Wine Club.',
        url: 'https://vinoymas.com',
        year: '2024',
        tech: 'Laravel · Inertia · Vue',
    },
];

const socials = [
    { label: 'github.com/boudydegeer', url: 'https://github.com/boudydegeer', icon: Github },
    { label: 'linkedin.com/in/boudydegeer', url: 'https://www.linkedin.com/in/boudydegeer', icon: Linkedin },
    { label: 'x.com/boudydegeer', url: 'https://x.com/boudydegeer', icon: ExternalLink },
    { label: 'youtube.com/@alquim-ia', url: 'https://www.youtube.com/@alquim-ia', icon: Youtube },
];

const lastUpdated = '2026-04-18';

const asciiArt = `   ╔═══════════════════════════╗
   ║                           ║
   ║   ░░  ALQUIMIA   ░░       ║
   ║   ░░  ▪ AI · DEV ░░       ║
   ║                           ║
   ║   > agentic               ║
   ║     engineering           ║
   ║                           ║
   ║   [ ▶ ]  watch_latest     ║
   ║                           ║
   ╚═══════════════════════════╝`;
</script>

<template>
    <Head title="Boudy de Geer — Senior FullStack Developer" />

    <div class="min-h-screen bg-background text-foreground antialiased">
        <!-- ============== TOP NAV ============== -->
        <header class="sticky top-0 z-50 border-b border-border bg-background/95 backdrop-blur">
            <div class="mx-auto max-w-[1280px] px-5 md:px-8">
                <div class="flex h-14 items-center justify-between">
                    <a
                        href="#top"
                        class="group flex items-center gap-2 text-[13px] font-medium"
                    >
                        <span class="text-primary">$</span>
                        <span class="text-foreground">boudydegeer</span>
                        <span class="caret hidden sm:inline-block"></span>
                    </a>

                    <nav
                        class="hidden md:flex items-center gap-1 text-[13px]"
                    >
                        <a href="#work" class="px-3 py-1.5 text-muted-foreground l-hover">work</a>
                        <span class="text-border">/</span>
                        <a href="#channel" class="px-3 py-1.5 text-muted-foreground l-hover">channel</a>
                        <span class="text-border">/</span>
                        <a href="#about" class="px-3 py-1.5 text-muted-foreground l-hover">about</a>
                        <span class="text-border">/</span>
                        <a href="#contact" class="px-3 py-1.5 text-muted-foreground l-hover">contact</a>
                    </nav>

                    <div class="hidden md:flex items-center gap-3 text-[12px] text-muted-foreground">
                        <span class="inline-flex items-center gap-2">
                            <span class="inline-block h-1.5 w-1.5 bg-primary"></span>
                            <span>&gt; online</span>
                        </span>
                    </div>

                    <a href="#contact" class="md:hidden text-[13px] text-primary">contact →</a>
                </div>
            </div>
        </header>

        <!-- ============== HERO ============== -->
        <section id="top" class="relative border-b border-border">
            <div class="absolute inset-0 gridbg opacity-40 pointer-events-none"></div>
            <div class="relative mx-auto max-w-[1280px] px-5 md:px-8">
                <div class="grid grid-cols-12 gap-0">
                    <aside
                        class="hidden md:flex col-span-1 border-r border-border py-16 flex-col items-center justify-between text-[10px] text-muted-foreground"
                    >
                        <span class="rotate-180" style="writing-mode: vertical-rl;">// rev.2026.04</span>
                        <span class="rotate-180" style="writing-mode: vertical-rl;">utc+02 · alicante</span>
                    </aside>

                    <div class="col-span-12 md:col-span-11 py-16 md:py-24 md:pl-10">
                        <div class="label mb-6">
                            <span class="text-primary">▪</span> personal site &nbsp; // &nbsp; rev 003
                        </div>

                        <p class="text-muted-foreground text-[13px] mb-3">
                            <span class="text-primary">$</span> whoami
                        </p>

                        <h1
                            class="font-serif text-[68px] leading-[0.95] sm:text-[96px] md:text-[140px] tracking-tight text-foreground"
                        >
                            Boudy<span class="text-muted-foreground">.</span><br class="md:hidden" />
                            <span class="italic">de&nbsp;Geer</span><span class="caret align-baseline"></span>
                        </h1>

                        <p class="mt-6 text-[13px] md:text-[14px] text-muted-foreground tracking-wide">
                            <span class="text-primary">&gt;</span> Senior FullStack Developer — I bring SaaS ideas to life
                        </p>

                        <p
                            class="mt-6 max-w-[68ch] text-[14px] md:text-[15px] leading-relaxed text-foreground/90"
                        >
                            <span class="text-muted-foreground">//</span> Rapid SaaS &amp; MVP launch for new ventures in
                            <span class="text-primary">~2 weeks</span>. Production systems with
                            <span class="text-primary">Laravel</span>,
                            <span class="text-primary">Vue.js</span>, and applied
                            <span class="text-primary">AI engineering</span> —
                            agents, evals, RAG, and the boring plumbing that keeps them honest.
                        </p>

                        <div class="mt-10 flex flex-wrap items-center gap-4 text-[13px]">
                            <a
                                href="#work"
                                class="row-link inline-flex items-center gap-2 border border-border px-4 py-2 hover:border-primary hover:text-primary"
                            >
                                <span class="marker text-muted-foreground">[</span>
                                view work
                                <span class="marker text-muted-foreground">]</span>
                                <span class="arrow">→</span>
                            </a>
                            <a
                                href="https://calendly.com/boudydegeer/meeting"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="row-link inline-flex items-center gap-2 border border-primary bg-primary px-4 py-2 text-primary-foreground hover:bg-transparent hover:text-primary"
                            >
                                <Calendar class="h-3.5 w-3.5" />
                                book a call
                                <span class="arrow">→</span>
                            </a>
                        </div>

                        <div class="mt-16 grid grid-cols-2 md:grid-cols-5 border-t border-border">
                            <div class="border-r border-border p-4">
                                <div class="label mb-2">role</div>
                                <div class="text-[13px]">senior fullstack dev</div>
                            </div>
                            <div class="border-r border-border p-4">
                                <div class="label mb-2">company</div>
                                <div class="text-[13px]">
                                    <a
                                        href="https://mosaiqo.com"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="l-under"
                                    >ceo @ mosaiqo</a>
                                </div>
                            </div>
                            <div class="border-r border-border p-4">
                                <div class="label mb-2">based</div>
                                <div class="text-[13px]">alicante, es</div>
                            </div>
                            <div class="border-r border-border p-4">
                                <div class="label mb-2">lang</div>
                                <div class="text-[13px]">es / de / en</div>
                            </div>
                            <div class="p-4">
                                <div class="label mb-2">since</div>
                                <div class="text-[13px]">20+ years</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============== ABOUT ============== -->
        <section id="about" class="relative border-b border-border">
            <div class="mx-auto max-w-[1280px] px-5 md:px-8">
                <div class="grid grid-cols-12 gap-0">
                    <div
                        class="col-span-12 md:col-span-4 border-r-0 md:border-r border-border py-12 md:py-20"
                    >
                        <div class="label mb-3">// 01 · about</div>
                        <h2 class="text-[22px] md:text-[24px] leading-tight">
                            FullStack dev &amp; web artisan.
                        </h2>
                        <p class="mt-4 text-muted-foreground text-[12px]">
                            <span class="text-primary">$</span> cat about.md
                        </p>
                    </div>

                    <div
                        class="col-span-12 md:col-span-8 py-8 md:py-20 md:pl-10 space-y-5 text-[14px] leading-relaxed text-foreground/90"
                    >
                        <p>
                            <span class="text-muted-foreground">&gt;</span>
                            I'm Boudy (he/him). 20+ years writing software for products people actually use —
                            invoicing, scheduling, dashboards, and the unglamorous CRUD that pays the rent. CEO at
                            <a
                                href="https://mosaiqo.com"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="l-under"
                            >Mosaiqo</a>, working out of Alicante, Spain.
                        </p>
                        <p>
                            <span class="text-muted-foreground">&gt;</span>
                            Curiosity is my second name. I love Laravel, Vue.js, and the community around both. My
                            favourite work lives at the seam between a clean Laravel backend and a UI you can
                            actually think in. Tests that mean something. Migrations that don't scare you. Builds
                            that still work in three years.
                        </p>
                        <p>
                            <span class="text-muted-foreground">&gt;</span>
                            Lately I'm spending most of my hours on the AI side: turning sloppy human intent into
                            structured, debuggable systems — agents, evals, RAG pipelines, and the LLM plumbing
                            that makes them not-magic.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============== STACK ============== -->
        <section id="stack" class="relative border-b border-border">
            <div class="mx-auto max-w-[1280px] px-5 md:px-8">
                <div class="py-12 md:py-20">
                    <div class="flex items-baseline justify-between mb-10">
                        <div>
                            <div class="label mb-3">// 02 · stack</div>
                            <h2 class="text-[22px] md:text-[24px]">Tools currently in rotation.</h2>
                        </div>
                        <p class="hidden md:block text-muted-foreground text-[12px]">
                            <span class="text-primary">$</span> ls --skills
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-5 border-t border-l border-border">
                        <!-- Backend -->
                        <div class="border-b border-r border-border p-5">
                            <div class="label mb-3">
                                <span class="text-primary">▪</span> backend
                            </div>
                            <ul class="space-y-1.5 text-[13px]">
                                <li>Laravel</li>
                                <li>PHP 8.3</li>
                                <li>PostgreSQL</li>
                                <li>MySQL</li>
                                <li>Redis</li>
                                <li>Queue systems</li>
                                <li>Python</li>
                            </ul>
                        </div>
                        <!-- Frontend -->
                        <div class="border-b border-r border-border p-5">
                            <div class="label mb-3">
                                <span class="text-primary">▪</span> frontend
                            </div>
                            <ul class="space-y-1.5 text-[13px]">
                                <li>Vue.js</li>
                                <li>Nuxt</li>
                                <li>TypeScript</li>
                                <li>Tailwind CSS</li>
                                <li>Inertia</li>
                            </ul>
                        </div>
                        <!-- Native -->
                        <div class="border-b border-r border-border p-5">
                            <div class="label mb-3">
                                <span class="text-primary">▪</span> native
                            </div>
                            <ul class="space-y-1.5 text-[13px]">
                                <li>Swift</li>
                                <li>Tauri</li>
                                <li>Flutter</li>
                            </ul>
                        </div>
                        <!-- AI -->
                        <div class="border-b border-r border-border p-5">
                            <div class="label mb-3">
                                <span class="text-primary">▪</span> ai / agentic
                            </div>
                            <ul class="space-y-1.5 text-[13px]">
                                <li>LLM integrations</li>
                                <li>Agent architectures</li>
                                <li>Evals</li>
                                <li>RAG</li>
                                <li>Claude Code</li>
                            </ul>
                        </div>
                        <!-- DevOps -->
                        <div class="border-b border-r border-border p-5">
                            <div class="label mb-3">
                                <span class="text-primary">▪</span> devops
                            </div>
                            <ul class="space-y-1.5 text-[13px]">
                                <li>Docker</li>
                                <li>CI/CD</li>
                                <li>Vercel</li>
                                <li>AWS</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============== FEATURED WORK ============== -->
        <section id="work" class="relative border-b border-border">
            <div class="mx-auto max-w-[1280px] px-5 md:px-8">
                <div class="py-12 md:py-20">
                    <div class="flex items-baseline justify-between mb-10">
                        <div>
                            <div class="label mb-3">// 03 · featured work</div>
                            <h2 class="text-[22px] md:text-[24px]">Projects worth a second look.</h2>
                        </div>
                        <p class="hidden md:block text-muted-foreground text-[12px]">
                            <span class="text-primary">$</span> ls ./projects --featured
                        </p>
                    </div>

                    <ul class="border-t border-border">
                        <li v-for="(project, idx) in featuredProjects" :key="project.name">
                            <a
                                :href="project.url"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="row-link grid grid-cols-12 gap-4 border-b border-border py-6 group"
                            >
                                <div class="col-span-1 text-muted-foreground text-[12px] pt-1">
                                    {{ String(idx + 1).padStart(3, '0') }}
                                </div>
                                <div class="col-span-12 md:col-span-3">
                                    <div class="text-[15px] text-foreground group-hover:text-primary">
                                        {{ project.name }}
                                    </div>
                                    <div class="text-muted-foreground text-[12px] mt-1">
                                        {{ project.tech }}
                                    </div>
                                </div>
                                <div
                                    class="col-span-12 md:col-span-6 text-[13px] text-muted-foreground leading-relaxed"
                                >
                                    {{ project.description }}
                                </div>
                                <div class="col-span-6 md:col-span-1 text-[12px] text-muted-foreground pt-1">
                                    {{ project.year }}
                                </div>
                                <div
                                    class="col-span-6 md:col-span-1 text-right text-muted-foreground pt-1 arrow inline-flex items-center justify-end gap-1"
                                >
                                    <ExternalLink class="h-3.5 w-3.5" />
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- ============== MORE WORK ============== -->
        <section id="more-work" class="relative border-b border-border">
            <div class="mx-auto max-w-[1280px] px-5 md:px-8">
                <div class="py-12 md:py-20">
                    <div class="flex items-baseline justify-between mb-10">
                        <div>
                            <div class="label mb-3">// 04 · more work</div>
                            <h2 class="text-[22px] md:text-[24px]">From the lab.</h2>
                        </div>
                        <p class="hidden md:block text-muted-foreground text-[12px]">
                            <span class="text-primary">$</span> ls ./projects
                        </p>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-4 border-t border-l border-border">
                        <component
                            :is="project.url === '#' ? 'div' : 'a'"
                            v-for="(project, idx) in otherProjects"
                            :key="project.name"
                            :href="project.url === '#' ? undefined : project.url"
                            :target="project.url === '#' ? undefined : '_blank'"
                            :rel="project.url === '#' ? undefined : 'noopener noreferrer'"
                            class="block border-b border-r border-border p-4 group"
                            :class="project.url === '#' ? '' : 'row-link'"
                        >
                            <div class="flex items-baseline justify-between">
                                <span
                                    class="text-[14px] text-foreground"
                                    :class="project.url === '#' ? '' : 'group-hover:text-primary'"
                                >
                                    {{ project.name }}
                                </span>
                                <span class="text-muted-foreground text-[10px]">
                                    {{ String(idx + 4).padStart(3, '0') }}
                                </span>
                            </div>
                            <div class="mt-2 text-muted-foreground text-[11px] leading-snug">
                                {{ project.description }}
                            </div>
                            <div class="mt-3 flex items-center justify-between text-muted-foreground text-[10px]">
                                <span>{{ project.tech }}</span>
                                <span class="inline-flex items-center gap-1">
                                    <span>{{ project.year }}</span>
                                    <span v-if="project.url === '#'" class="text-border">// soon</span>
                                    <span v-else class="arrow">→</span>
                                </span>
                            </div>
                        </component>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============== THE CHANNEL ============== -->
        <section id="channel" class="relative border-b border-border">
            <div class="mx-auto max-w-[1280px] px-5 md:px-8">
                <div class="grid grid-cols-12 gap-0 py-12 md:py-20">
                    <div class="col-span-12 md:col-span-4">
                        <div class="label mb-3">// 05 · the channel</div>
                        <h2 class="text-[22px] md:text-[24px] leading-tight">
                            AI explained by an engineer,<br />not an influencer.
                        </h2>
                        <p class="mt-4 text-muted-foreground text-[13px]">
                            <span class="text-primary">$</span> tail -f alquim-ia
                        </p>
                    </div>

                    <div class="col-span-12 md:col-span-8 mt-8 md:mt-0 md:pl-10">
                        <a
                            href="https://www.youtube.com/@alquim-ia"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="block border border-border hover:border-primary group"
                        >
                            <div
                                class="flex items-center justify-between border-b border-border px-5 py-3"
                            >
                                <div class="flex items-center gap-2 text-[12px] text-muted-foreground">
                                    <span class="inline-block h-2 w-2 bg-primary animate-pulse"></span>
                                    <span>live · youtube.com/@alquim-ia</span>
                                </div>
                                <div class="hidden md:flex gap-1">
                                    <span class="block h-2 w-2 border border-border"></span>
                                    <span class="block h-2 w-2 border border-border"></span>
                                    <span class="block h-2 w-2 border border-border"></span>
                                </div>
                            </div>

                            <div class="grid grid-cols-12">
                                <div
                                    class="col-span-12 md:col-span-5 border-r-0 md:border-r border-border p-6 bg-card flex items-center justify-center"
                                >
                                    <pre class="text-primary text-[10px] leading-[1.05] select-none whitespace-pre font-mono">{{ asciiArt }}</pre>
                                </div>

                                <div class="col-span-12 md:col-span-7 p-6 md:p-8">
                                    <div class="label mb-2">channel</div>
                                    <div class="text-[18px] text-foreground group-hover:text-primary">
                                        @alquim-ia
                                    </div>
                                    <p class="mt-1 text-muted-foreground text-[12px] italic">
                                        The Agentic Engineering Lab
                                    </p>
                                    <p
                                        class="mt-3 text-[13px] text-muted-foreground leading-relaxed"
                                    >
                                        News without hype. Tutorials with real code. 20+ years of software
                                        experience. The lab where AI becomes a tool, not magic.
                                    </p>

                                    <div class="mt-6 grid grid-cols-3 border-t border-border">
                                        <div class="border-r border-border py-3 pr-3">
                                            <div class="label">subs</div>
                                            <div class="text-[14px] mt-1 text-foreground">38</div>
                                        </div>
                                        <div class="border-r border-border py-3 px-3">
                                            <div class="label">videos</div>
                                            <div class="text-[14px] mt-1 text-foreground">12</div>
                                        </div>
                                        <div class="py-3 pl-3">
                                            <div class="label">views</div>
                                            <div class="text-[14px] mt-1 text-foreground">9.8k</div>
                                        </div>
                                    </div>

                                    <div class="mt-4 text-[11px] text-muted-foreground">
                                        <span class="text-primary">▪</span> Spanish-language channel
                                    </div>

                                    <div
                                        class="mt-6 inline-flex items-center gap-2 text-[13px] text-foreground group-hover:text-primary"
                                    >
                                        <span class="text-muted-foreground">[</span> subscribe
                                        <span class="text-muted-foreground">]</span>
                                        <span class="arrow">→</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============== CONTACT ============== -->
        <footer id="contact" class="relative">
            <div class="mx-auto max-w-[1280px] px-5 md:px-8">
                <div class="py-16 md:py-24 grid grid-cols-12 gap-0 border-b border-border">
                    <div class="col-span-12 md:col-span-7">
                        <div class="label mb-4">// 06 · contact</div>
                        <h2
                            class="font-serif text-[44px] md:text-[68px] leading-[1] tracking-tight"
                        >
                            Got a SaaS idea<br />
                            that needs <span class="italic">shipping</span>?<span class="caret"></span>
                        </h2>
                        <p
                            class="mt-6 max-w-[52ch] text-muted-foreground text-[14px] leading-relaxed"
                        >
                            <span class="text-muted-foreground">&gt;</span>
                            I take on a few engagements a year — usually rapid MVP builds or long-haul Laravel +
                            AI products. If your team needs someone fluent in both halves, drop a line.
                        </p>

                        <div class="mt-8 flex flex-wrap items-center gap-3 text-[13px]">
                            <a
                                href="https://calendly.com/boudydegeer/meeting"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="row-link inline-flex items-center gap-2 border border-primary bg-primary px-4 py-2 text-primary-foreground hover:bg-transparent hover:text-primary"
                            >
                                <Calendar class="h-3.5 w-3.5" />
                                book a call
                                <span class="arrow">→</span>
                            </a>
                            <a
                                href="mailto:hi@boudydegeer.com"
                                class="row-link inline-flex items-center gap-2 border border-border px-4 py-2 hover:border-primary hover:text-primary"
                            >
                                <Mail class="h-3.5 w-3.5" />
                                <span>hi@boudydegeer.com</span>
                                <span class="arrow">→</span>
                            </a>
                        </div>
                    </div>

                    <div class="col-span-12 md:col-span-5 mt-12 md:mt-0 md:pl-10">
                        <div class="label mb-4">elsewhere</div>
                        <ul class="border-t border-border">
                            <li
                                v-for="(social, idx) in socials"
                                :key="social.url"
                                class="border-b border-border"
                            >
                                <a
                                    :href="social.url"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="row-link flex items-center justify-between py-3 group text-[13px]"
                                >
                                    <span class="inline-flex items-center gap-3">
                                        <span class="text-muted-foreground">
                                            {{ String(idx + 1).padStart(2, '0') }}
                                        </span>
                                        <component
                                            :is="social.icon"
                                            class="h-3.5 w-3.5 text-muted-foreground group-hover:text-primary"
                                        />
                                        <span class="group-hover:text-primary">{{ social.label }}</span>
                                    </span>
                                    <span class="arrow text-muted-foreground">→</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div
                    class="py-6 flex flex-col md:flex-row items-start md:items-center justify-between gap-3 text-[11px] text-muted-foreground"
                >
                    <div class="flex items-center gap-3 flex-wrap">
                        <span class="text-primary">▪</span>
                        <span>boudydegeer.com</span>
                        <span class="text-border">/</span>
                        <span>© 2014 — 2026</span>
                        <span class="text-border">/</span>
                        <span>alicante, es</span>
                    </div>
                    <div class="flex items-center gap-3 flex-wrap">
                        <span>built with laravel 13 + vue 3</span>
                        <span class="text-border">/</span>
                        <span>last updated {{ lastUpdated }}</span>
                        <span class="text-border">/</span>
                        <span><span class="text-primary">$</span> exit 0</span>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</template>

<style scoped>
/* blinking cursor */
.caret {
    display: inline-block;
    width: 0.55ch;
    height: 1em;
    transform: translateY(2px);
    background: var(--primary);
    margin-left: 2px;
    animation: blink 1.05s steps(1) infinite;
}
@keyframes blink {
    50% {
        background: transparent;
    }
}

/* hover marker */
.row-link {
    position: relative;
}
.row-link:hover .marker {
    color: var(--primary);
}
.row-link:hover .arrow {
    transform: translateX(4px);
    color: var(--primary);
}
.arrow {
    transition:
        transform 80ms linear,
        color 80ms linear;
}

/* grid backdrop on hero */
.gridbg {
    background-image:
        linear-gradient(to right, var(--border) 1px, transparent 1px),
        linear-gradient(to bottom, var(--border) 1px, transparent 1px);
    background-size: 56px 56px;
    background-position: -1px -1px;
}

/* small uppercase label */
.label {
    font-size: 11px;
    letter-spacing: 0.14em;
    text-transform: uppercase;
    color: var(--muted-foreground);
}

/* link hover */
.l-hover:hover {
    color: var(--primary);
}
.l-under {
    border-bottom: 1px solid var(--border);
}
.l-under:hover {
    border-color: var(--primary);
    color: var(--primary);
}
</style>
