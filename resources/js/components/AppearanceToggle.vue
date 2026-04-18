<script setup lang="ts">
import { useAppearance } from '@/composables/useAppearance';
import type { Appearance } from '@/types';

const { appearance, updateAppearance } = useAppearance();

const options: { value: Appearance; label: string; tooltip: string }[] = [
    { value: 'light', label: '[L]', tooltip: 'Light' },
    { value: 'dark', label: '[D]', tooltip: 'Dark' },
    { value: 'system', label: '[S]', tooltip: 'System' },
];
</script>

<template>
    <div
        class="flex h-9 items-center gap-0 px-3 text-[11px] uppercase tracking-[0.14em] text-muted-foreground group-data-[collapsible=icon]:hidden"
    >
        <span class="text-primary">//</span>
        <span class="ml-1 mr-2">theme</span>
        <div class="ml-auto flex items-center gap-0">
            <button
                v-for="opt in options"
                :key="opt.value"
                type="button"
                :title="opt.tooltip"
                :aria-pressed="appearance === opt.value"
                class="px-1.5 py-0.5 font-mono text-[11px] hover:text-primary"
                :class="
                    appearance === opt.value
                        ? 'text-primary'
                        : 'text-muted-foreground'
                "
                @click="updateAppearance(opt.value)"
            >
                {{ opt.label }}
            </button>
        </div>
    </div>
</template>
