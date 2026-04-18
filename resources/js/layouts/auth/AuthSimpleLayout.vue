<script setup lang="ts">
import { Link, usePage } from '@inertiajs/vue3';
import { computed } from 'vue';
import { home } from '@/routes';

defineProps<{
    title?: string;
    description?: string;
}>();

const page = usePage();

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
    <div class="relative flex min-h-svh flex-col bg-background text-foreground">
        <header class="border-b border-border">
            <div class="mx-auto flex h-12 w-full max-w-[1280px] items-center justify-between px-5 md:px-8">
                <Link
                    :href="home()"
                    class="flex items-center gap-2 text-[13px] font-medium hover:text-primary"
                >
                    <span class="text-primary">$</span>
                    <span>boudydegeer</span>
                </Link>

                <span class="text-[12px] uppercase tracking-[0.14em] text-muted-foreground">
                    {{ command }}
                </span>
            </div>
        </header>

        <main class="flex flex-1 items-center justify-center px-5 py-12 md:px-8">
            <div class="w-full max-w-[440px]">
                <div class="mb-8 border-b border-border pb-6">
                    <p class="mb-3 text-[11px] uppercase tracking-[0.14em] text-muted-foreground">
                        <span class="text-primary">//</span>
                        {{ command.replace('$ ', '') }}
                    </p>
                    <h1
                        v-if="title"
                        class="font-serif text-[40px] leading-[1.05] tracking-tight md:text-[52px]"
                    >
                        {{ title }}
                    </h1>
                    <p
                        v-if="description"
                        class="mt-3 max-w-[52ch] text-[13px] leading-relaxed text-muted-foreground"
                    >
                        <span class="text-muted-foreground">&gt;</span>
                        {{ description }}
                    </p>
                </div>

                <slot />
            </div>
        </main>

        <footer class="border-t border-border">
            <div
                class="mx-auto flex h-10 w-full max-w-[1280px] items-center justify-between px-5 text-[11px] text-muted-foreground md:px-8"
            >
                <span>
                    <span class="text-primary">//</span>
                    authenticated session
                </span>
                <span>
                    <span class="text-primary">$</span>
                    exit 0
                </span>
            </div>
        </footer>
    </div>
</template>
