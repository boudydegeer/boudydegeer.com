<script setup lang="ts">
import { Link, usePage } from '@inertiajs/vue3';
import { Menu } from 'lucide-vue-next';
import { computed } from 'vue';
import AppearanceToggle from '@/components/AppearanceToggle.vue';
import Breadcrumbs from '@/components/Breadcrumbs.vue';
import { Avatar, AvatarFallback, AvatarImage } from '@/components/ui/avatar';
import { Button } from '@/components/ui/button';
import {
    DropdownMenu,
    DropdownMenuContent,
    DropdownMenuTrigger,
} from '@/components/ui/dropdown-menu';
import {
    Sheet,
    SheetContent,
    SheetHeader,
    SheetTitle,
    SheetTrigger,
} from '@/components/ui/sheet';
import UserMenuContent from '@/components/UserMenuContent.vue';
import { useCurrentUrl } from '@/composables/useCurrentUrl';
import { getInitials } from '@/composables/useInitials';
import { edit as editProfile } from '@/routes/profile';
import type { BreadcrumbItem, NavItem } from '@/types';

type Props = {
    breadcrumbs?: BreadcrumbItem[];
};

const props = withDefaults(defineProps<Props>(), {
    breadcrumbs: () => [],
});

const page = usePage();
const auth = computed(() => page.props.auth);
const { isCurrentUrl } = useCurrentUrl();

const mainNavItems: NavItem[] = [];
</script>

<template>
    <div>
        <div class="border-b border-border">
            <div class="mx-auto flex h-12 items-center px-4 md:max-w-7xl">
                <!-- Mobile Menu -->
                <div class="lg:hidden">
                    <Sheet>
                        <SheetTrigger :as-child="true">
                            <Button
                                variant="ghost"
                                size="icon"
                                class="mr-2 size-9 rounded-none"
                            >
                                <Menu class="size-4" />
                            </Button>
                        </SheetTrigger>
                        <SheetContent side="left" class="w-[280px] p-0">
                            <SheetTitle class="sr-only">Navigation menu</SheetTitle>
                            <SheetHeader class="border-b border-border px-4 py-3">
                                <span class="flex items-center gap-2 text-[13px] font-medium">
                                    <span class="text-primary">$</span>
                                    boudydegeer
                                </span>
                            </SheetHeader>
                            <div class="flex h-full flex-1 flex-col justify-between">
                                <nav class="flex flex-col">
                                    <Link
                                        v-for="item in mainNavItems"
                                        :key="item.title"
                                        :href="item.href"
                                        class="flex items-center gap-2 border-l-2 border-transparent border-b border-border px-4 py-3 text-[12px] uppercase tracking-[0.14em] hover:bg-accent hover:text-primary"
                                        :class="
                                            isCurrentUrl(item.href)
                                                ? 'border-l-primary bg-accent text-primary'
                                                : ''
                                        "
                                    >
                                        <span class="text-primary">&gt;</span>
                                        <component
                                            v-if="item.icon"
                                            :is="item.icon"
                                            class="size-4"
                                        />
                                        {{ item.title }}
                                    </Link>
                                </nav>
                                <div class="flex flex-col border-t border-border">
                                    <AppearanceToggle />
                                </div>
                            </div>
                        </SheetContent>
                    </Sheet>
                </div>

                <Link
                    :href="editProfile()"
                    class="flex items-center gap-2 text-[13px] font-medium hover:text-primary"
                >
                    <span class="text-primary">$</span>
                    <span>boudydegeer</span>
                </Link>

                <!-- Desktop Menu -->
                <nav class="ml-10 hidden h-full items-stretch lg:flex">
                    <Link
                        v-for="item in mainNavItems"
                        :key="item.title"
                        :href="item.href"
                        :class="[
                            'inline-flex h-12 items-center gap-2 border-b-2 border-transparent px-4 text-[12px] uppercase tracking-[0.14em] hover:text-primary',
                            isCurrentUrl(item.href)
                                ? 'border-b-primary text-primary'
                                : 'text-muted-foreground',
                        ]"
                    >
                        <span class="text-primary">&gt;</span>
                        <component
                            v-if="item.icon"
                            :is="item.icon"
                            class="size-4"
                        />
                        {{ item.title }}
                    </Link>
                </nav>

                <div class="ml-auto flex items-center gap-2">
                    <DropdownMenu>
                        <DropdownMenuTrigger :as-child="true">
                            <Button
                                variant="ghost"
                                size="icon"
                                class="size-9 rounded-none p-0 hover:bg-transparent"
                            >
                                <Avatar
                                    class="size-7 overflow-hidden rounded-none border border-border"
                                >
                                    <AvatarImage
                                        v-if="auth.user.avatar"
                                        :src="auth.user.avatar"
                                        :alt="auth.user.name"
                                    />
                                    <AvatarFallback
                                        class="rounded-none bg-transparent text-[10px] uppercase tracking-wider"
                                    >
                                        {{ getInitials(auth.user?.name) }}
                                    </AvatarFallback>
                                </Avatar>
                            </Button>
                        </DropdownMenuTrigger>
                        <DropdownMenuContent align="end" class="w-56">
                            <UserMenuContent :user="auth.user" />
                        </DropdownMenuContent>
                    </DropdownMenu>
                </div>
            </div>
        </div>

        <div
            v-if="props.breadcrumbs.length > 1"
            class="flex w-full border-b border-border"
        >
            <div
                class="mx-auto flex h-10 w-full items-center justify-start px-4 text-muted-foreground md:max-w-7xl"
            >
                <Breadcrumbs :breadcrumbs="breadcrumbs" />
            </div>
        </div>
    </div>
</template>
