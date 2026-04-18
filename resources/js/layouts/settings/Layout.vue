<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { useCurrentUrl } from '@/composables/useCurrentUrl';
import { toUrl } from '@/lib/utils';
import { edit as editAppearance } from '@/routes/appearance';
import { edit as editProfile } from '@/routes/profile';
import { edit as editSecurity } from '@/routes/security';
import type { NavItem } from '@/types';

const sidebarNavItems: NavItem[] = [
    {
        title: 'Profile',
        href: editProfile(),
    },
    {
        title: 'Security',
        href: editSecurity(),
    },
    {
        title: 'Appearance',
        href: editAppearance(),
    },
];

const { isCurrentOrParentUrl } = useCurrentUrl();
</script>

<template>
    <div class="px-4 py-6 md:px-6">
        <div class="mb-6 border-b border-border pb-6">
            <p class="mb-2 text-[11px] uppercase tracking-[0.18em] text-muted-foreground">
                <span class="text-primary">//</span> settings
            </p>
            <h1 class="font-serif text-[36px] leading-[1.05] tracking-tight">
                Manage your account.
            </h1>
            <p class="mt-2 text-[13px] text-muted-foreground">
                <span class="text-muted-foreground">&gt;</span>
                profile, security, and appearance preferences.
            </p>
        </div>

        <div class="flex flex-col gap-8 lg:flex-row lg:gap-12">
            <aside class="w-full lg:w-56 lg:shrink-0">
                <p class="mb-2 text-[11px] uppercase tracking-[0.18em] text-muted-foreground">
                    <span class="text-primary">//</span> sections
                </p>
                <nav class="flex flex-col border border-border" aria-label="Settings">
                    <Link
                        v-for="(item, index) in sidebarNavItems"
                        :key="toUrl(item.href)"
                        :href="item.href"
                        :class="[
                            'flex items-center gap-2 border-l-2 border-transparent px-3 py-2 text-[12px] uppercase tracking-[0.14em] hover:bg-accent hover:text-primary',
                            index !== sidebarNavItems.length - 1
                                ? 'border-b border-border'
                                : '',
                            isCurrentOrParentUrl(item.href)
                                ? 'border-l-primary bg-accent text-primary'
                                : 'text-muted-foreground',
                        ]"
                    >
                        <span class="text-primary">&gt;</span>
                        {{ item.title }}
                    </Link>
                </nav>
            </aside>

            <div class="flex-1 md:max-w-2xl">
                <section class="space-y-12">
                    <slot />
                </section>
            </div>
        </div>
    </div>
</template>
