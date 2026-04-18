<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import {
    Breadcrumb,
    BreadcrumbItem,
    BreadcrumbLink,
    BreadcrumbList,
    BreadcrumbPage,
    BreadcrumbSeparator,
} from '@/components/ui/breadcrumb';
import type { BreadcrumbItem as BreadcrumbItemType } from '@/types';

type Props = {
    breadcrumbs: BreadcrumbItemType[];
};

defineProps<Props>();
</script>

<template>
    <Breadcrumb>
        <BreadcrumbList class="gap-1.5 text-[11px] uppercase tracking-[0.14em] text-muted-foreground sm:gap-1.5">
            <template v-for="(item, index) in breadcrumbs" :key="index">
                <BreadcrumbItem class="text-[11px]">
                    <template v-if="index === breadcrumbs.length - 1">
                        <BreadcrumbPage class="text-foreground">{{
                            item.title
                        }}</BreadcrumbPage>
                    </template>
                    <template v-else>
                        <BreadcrumbLink as-child class="text-muted-foreground hover:text-primary">
                            <Link :href="item.href">{{ item.title }}</Link>
                        </BreadcrumbLink>
                    </template>
                </BreadcrumbItem>
                <BreadcrumbSeparator
                    v-if="index !== breadcrumbs.length - 1"
                    class="text-border [&>svg]:hidden"
                >
                    <span>/</span>
                </BreadcrumbSeparator>
            </template>
        </BreadcrumbList>
    </Breadcrumb>
</template>
