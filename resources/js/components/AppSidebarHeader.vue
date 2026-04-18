<script setup lang="ts">
import Breadcrumbs from '@/components/Breadcrumbs.vue';
import { SidebarTrigger } from '@/components/ui/sidebar';
import type { BreadcrumbItem } from '@/types';

withDefaults(
    defineProps<{
        breadcrumbs?: BreadcrumbItem[];
    }>(),
    {
        breadcrumbs: () => [],
    },
);
</script>

<template>
    <header
        class="flex h-12 shrink-0 items-center gap-3 border-b border-border bg-background px-4 transition-[width,height] ease-linear group-has-data-[collapsible=icon]/sidebar-wrapper:h-12"
    >
        <SidebarTrigger
            class="-ml-1 size-7 rounded-none text-muted-foreground hover:bg-transparent hover:text-primary"
        />
        <span class="text-[11px] uppercase tracking-[0.14em] text-muted-foreground">
            <span class="text-primary">$</span>
        </span>
        <template v-if="breadcrumbs && breadcrumbs.length > 0">
            <Breadcrumbs :breadcrumbs="breadcrumbs" />
        </template>
    </header>
</template>
