<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import {
    SidebarGroup,
    SidebarGroupLabel,
    SidebarMenu,
    SidebarMenuButton,
    SidebarMenuItem,
} from '@/components/ui/sidebar';
import { useCurrentUrl } from '@/composables/useCurrentUrl';
import type { NavItem } from '@/types';

defineProps<{
    items: NavItem[];
}>();

const { isCurrentUrl } = useCurrentUrl();
</script>

<template>
    <SidebarGroup class="gap-0 px-0 py-0">
        <SidebarGroupLabel
            class="h-9 rounded-none border-b border-sidebar-border px-3 text-[10px] uppercase tracking-[0.18em] text-muted-foreground"
        >
            <span class="text-primary">//</span>
            <span class="ml-1">platform</span>
        </SidebarGroupLabel>
        <SidebarMenu class="gap-0">
            <SidebarMenuItem v-for="item in items" :key="item.title">
                <SidebarMenuButton
                    as-child
                    :is-active="isCurrentUrl(item.href)"
                    :tooltip="item.title"
                    :class="[
                        'group/navitem h-9 rounded-none border-l-2 border-transparent px-3 text-[12px] uppercase tracking-[0.14em]',
                        'hover:bg-sidebar-accent hover:text-primary',
                        'data-[active=true]:border-primary data-[active=true]:bg-sidebar-accent data-[active=true]:text-primary',
                    ]"
                >
                    <Link :href="item.href" class="flex items-center gap-2">
                        <span
                            class="text-primary group-data-[active=true]/navitem:text-primary"
                            >&gt;</span
                        >
                        <component
                            :is="item.icon"
                            v-if="item.icon"
                            class="size-4 shrink-0"
                        />
                        <span>{{ item.title }}</span>
                    </Link>
                </SidebarMenuButton>
            </SidebarMenuItem>
        </SidebarMenu>
    </SidebarGroup>
</template>
