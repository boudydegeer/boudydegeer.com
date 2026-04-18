<script setup lang="ts">
import { Link, usePage } from '@inertiajs/vue3';
import { computed } from 'vue';
import { home } from '@/routes';

const page = usePage();
const name = page.props.name;

defineProps<{
    title?: string;
    description?: string;
}>();

const command = computed<string>(() => {
    const url = page.url ?? '';

    if (url.includes('register')) {
return '$ register';
}

    if (url.includes('forgot-password')) {
return '$ recover';
}

    if (url.includes('reset-password')) {
return '$ reset';
}

    if (url.includes('confirm-password')) {
return '$ confirm';
}

    if (url.includes('verify-email')) {
return '$ verify';
}

    if (url.includes('two-factor')) {
return '$ 2fa';
}

    return '$ login';
});
</script>

<template>
    <div class="relative grid min-h-svh grid-cols-1 lg:grid-cols-2">
        <aside
            class="relative hidden flex-col justify-between border-r border-border bg-card p-10 lg:flex"
        >
            <Link
                :href="home()"
                class="inline-flex items-center gap-2 text-[14px] font-medium hover:text-primary"
            >
                <span class="text-primary">$</span>
                <span>boudydegeer</span>
            </Link>

            <div class="space-y-4">
                <p class="text-[11px] uppercase tracking-[0.14em] text-muted-foreground">
                    <span class="text-primary">//</span> {{ name }}
                </p>
                <p class="font-serif text-[40px] leading-[1.05] tracking-tight">
                    Software systems<br />
                    that survive <span class="italic">contact</span>.
                </p>
                <p class="max-w-[42ch] text-[13px] leading-relaxed text-muted-foreground">
                    <span class="text-muted-foreground">&gt;</span>
                    Internal tooling, AI plumbing, and the boring parts of Laravel done right.
                </p>
            </div>

            <div class="flex items-center justify-between text-[11px] text-muted-foreground">
                <span>
                    <span class="text-primary">//</span> authenticated session
                </span>
                <span>v.2026.04</span>
            </div>
        </aside>

        <div class="flex flex-col">
            <header class="flex h-12 items-center justify-between border-b border-border px-5 md:px-8 lg:hidden">
                <Link
                    :href="home()"
                    class="inline-flex items-center gap-2 text-[13px] font-medium hover:text-primary"
                >
                    <span class="text-primary">$</span>
                    <span>boudydegeer</span>
                </Link>
                <span class="text-[12px] uppercase tracking-[0.14em] text-muted-foreground">
                    {{ command }}
                </span>
            </header>

            <main class="flex flex-1 items-center justify-center px-5 py-12 md:px-8">
                <div class="w-full max-w-[400px]">
                    <p class="mb-3 text-[11px] uppercase tracking-[0.14em] text-muted-foreground">
                        <span class="text-primary">//</span>
                        {{ command.replace('$ ', '') }}
                    </p>
                    <h1
                        v-if="title"
                        class="mb-3 font-serif text-[32px] leading-[1.05] tracking-tight"
                    >
                        {{ title }}
                    </h1>
                    <p
                        v-if="description"
                        class="mb-8 text-[13px] leading-relaxed text-muted-foreground"
                    >
                        <span class="text-muted-foreground">&gt;</span>
                        {{ description }}
                    </p>

                    <slot />
                </div>
            </main>

            <footer class="border-t border-border">
                <div class="flex h-10 items-center justify-between px-5 text-[11px] text-muted-foreground md:px-8">
                    <span>
                        <span class="text-primary">//</span> authenticated session
                    </span>
                    <span>
                        <span class="text-primary">$</span> exit 0
                    </span>
                </div>
            </footer>
        </div>
    </div>
</template>
