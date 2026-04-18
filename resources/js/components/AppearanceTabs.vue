<script setup lang="ts">
import { useAppearance } from '@/composables/useAppearance';
import type { Appearance } from '@/types';

const { appearance, updateAppearance } = useAppearance();

const tabs: { value: Appearance; marker: string; label: string }[] = [
    { value: 'light', marker: '[L]', label: 'Light' },
    { value: 'dark', marker: '[D]', label: 'Dark' },
    { value: 'system', marker: '[S]', label: 'System' },
];
</script>

<template>
    <div class="inline-flex items-stretch border border-border">
        <button
            v-for="(tab, index) in tabs"
            :key="tab.value"
            type="button"
            @click="updateAppearance(tab.value)"
            :class="[
                'flex items-center gap-2 px-3 py-2 text-[12px] uppercase tracking-[0.14em] transition-colors',
                index !== tabs.length - 1 ? 'border-r border-border' : '',
                appearance === tab.value
                    ? 'bg-accent text-primary'
                    : 'text-muted-foreground hover:text-primary',
            ]"
        >
            <span class="font-mono">{{ tab.marker }}</span>
            <span>{{ tab.label }}</span>
        </button>
    </div>
</template>
