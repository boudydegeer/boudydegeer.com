<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { home } from '@/routes';

defineProps<{
    title?: string;
    description?: string;
}>();
</script>

<template>
    <div class="flex min-h-svh flex-col items-center justify-center bg-background p-6 md:p-10">
        <div class="w-full max-w-[440px]">
            <Link
                :href="home()"
                class="mb-6 inline-flex items-center gap-2 text-[13px] font-medium hover:text-primary"
            >
                <span class="text-primary">$</span>
                <span>boudydegeer</span>
            </Link>

            <div class="border border-border bg-card">
                <div class="border-b border-border px-8 pt-8 pb-6">
                    <p class="mb-2 text-[11px] uppercase tracking-[0.14em] text-muted-foreground">
                        <span class="text-primary">//</span> session
                    </p>
                    <h1 v-if="title" class="font-serif text-[32px] leading-[1.05] tracking-tight">
                        {{ title }}
                    </h1>
                    <p v-if="description" class="mt-3 text-[13px] leading-relaxed text-muted-foreground">
                        <span class="text-muted-foreground">&gt;</span>
                        {{ description }}
                    </p>
                </div>
                <div class="px-8 py-8">
                    <slot />
                </div>
            </div>

            <p class="mt-6 text-[11px] text-muted-foreground">
                <span class="text-primary">//</span> authenticated session
            </p>
        </div>
    </div>
</template>
