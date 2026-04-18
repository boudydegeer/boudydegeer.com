<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import AppearanceToggle from '@/components/AppearanceToggle.vue';
import NavMain from '@/components/NavMain.vue';
import NavUser from '@/components/NavUser.vue';
import {
    Sidebar,
    SidebarContent,
    SidebarFooter,
    SidebarHeader,
    SidebarMenu,
    SidebarMenuButton,
    SidebarMenuItem,
} from '@/components/ui/sidebar';
import { edit as editProfile } from '@/routes/profile';
import type { NavItem } from '@/types';

const mainNavItems: NavItem[] = [];
</script>

<template>
    <Sidebar collapsible="icon" variant="sidebar">
        <SidebarHeader class="border-b border-sidebar-border p-0">
            <SidebarMenu>
                <SidebarMenuItem>
                    <SidebarMenuButton
                        size="lg"
                        as-child
                        class="h-12 rounded-none px-3 hover:bg-transparent hover:text-primary"
                    >
                        <Link :href="editProfile()" class="flex items-center gap-2">
                            <span class="text-primary">$</span>
                            <span class="truncate text-[13px] font-medium tracking-tight">
                                boudydegeer
                            </span>
                        </Link>
                    </SidebarMenuButton>
                </SidebarMenuItem>
            </SidebarMenu>
        </SidebarHeader>

        <SidebarContent class="gap-0">
            <NavMain v-if="mainNavItems.length" :items="mainNavItems" />
        </SidebarContent>

        <SidebarFooter class="gap-0 border-t border-sidebar-border p-0">
            <AppearanceToggle />
            <div class="border-t border-sidebar-border">
                <NavUser />
            </div>
        </SidebarFooter>
    </Sidebar>
    <slot />
</template>
