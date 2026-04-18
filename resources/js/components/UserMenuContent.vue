<script setup lang="ts">
import { Link, router } from '@inertiajs/vue3';
import { LogOut, Settings } from 'lucide-vue-next';
import {
    DropdownMenuGroup,
    DropdownMenuItem,
    DropdownMenuLabel,
    DropdownMenuSeparator,
} from '@/components/ui/dropdown-menu';
import UserInfo from '@/components/UserInfo.vue';
import { logout } from '@/routes';
import { edit } from '@/routes/profile';
import type { User } from '@/types';

type Props = {
    user: User;
};

const handleLogout = () => {
    router.flushAll();
};

defineProps<Props>();
</script>

<template>
    <DropdownMenuLabel class="p-0 font-normal">
        <div class="flex items-center gap-2 px-2 py-2 text-left text-sm">
            <UserInfo :user="user" :show-email="true" />
        </div>
    </DropdownMenuLabel>
    <DropdownMenuSeparator />
    <DropdownMenuGroup>
        <DropdownMenuItem :as-child="true" class="rounded-none">
            <Link
                class="block w-full cursor-pointer text-[12px] uppercase tracking-[0.14em]"
                :href="edit()"
                prefetch
            >
                <span class="text-primary">&gt;</span>
                <Settings class="mr-2 size-4" />
                Settings
            </Link>
        </DropdownMenuItem>
    </DropdownMenuGroup>
    <DropdownMenuSeparator />
    <DropdownMenuItem :as-child="true" class="rounded-none">
        <Link
            class="block w-full cursor-pointer text-[12px] uppercase tracking-[0.14em]"
            :href="logout()"
            @click="handleLogout"
            as="button"
            data-test="logout-button"
        >
            <span class="text-primary">&gt;</span>
            <LogOut class="mr-2 size-4" />
            Log out
        </Link>
    </DropdownMenuItem>
</template>
