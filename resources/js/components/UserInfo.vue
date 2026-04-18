<script setup lang="ts">
import { computed } from 'vue';
import { Avatar, AvatarFallback, AvatarImage } from '@/components/ui/avatar';
import { useInitials } from '@/composables/useInitials';
import type { User } from '@/types';

type Props = {
    user: User;
    showEmail?: boolean;
};

const props = withDefaults(defineProps<Props>(), {
    showEmail: false,
});

const { getInitials } = useInitials();

const showAvatar = computed(
    () => props.user.avatar && props.user.avatar !== '',
);
</script>

<template>
    <Avatar class="h-7 w-7 shrink-0 overflow-hidden rounded-none border border-border">
        <AvatarImage v-if="showAvatar" :src="user.avatar!" :alt="user.name" />
        <AvatarFallback
            class="rounded-none bg-transparent text-[10px] uppercase tracking-wider text-foreground"
        >
            {{ getInitials(user.name) }}
        </AvatarFallback>
    </Avatar>

    <div class="grid flex-1 text-left text-[12px] leading-tight">
        <span class="truncate font-medium uppercase tracking-[0.08em]">{{
            user.name
        }}</span>
        <span
            v-if="showEmail"
            class="truncate text-[11px] normal-case tracking-normal text-muted-foreground"
            >{{ user.email }}</span
        >
    </div>
</template>
