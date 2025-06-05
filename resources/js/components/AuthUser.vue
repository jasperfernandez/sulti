<script setup lang="ts">
import { Avatar, AvatarFallback, AvatarImage } from '@/components/ui/avatar';
import { Button } from '@/components/ui/button';
import { Card } from '@/components/ui/card';
import { getInitials } from '@/composables/useInitials';
import { SharedData, User } from '@/types';
import { Link, router, usePage } from '@inertiajs/vue3';
import { LogOut } from 'lucide-vue-next';
import type { HTMLAttributes } from 'vue';
import { cn } from '@/lib/utils';

const props = defineProps<{
    class?: HTMLAttributes['class']
}>()

const page = usePage<SharedData>();
const user = page.props.auth.user as User;

const handleLogout = () => {
    router.flushAll();
};
</script>

<template>
    <Card :class="cn('flex flex-row items-center gap-2 px-4 py-2', props.class)">
        <div class="flex items-center gap-2">
            <Avatar class="size-12 overflow-hidden rounded-full">
                <AvatarImage v-if="user.avatar" :src="user.avatar" :alt="user.name" />
                <AvatarFallback class="rounded-lg bg-neutral-200 font-semibold text-black dark:bg-neutral-700 dark:text-white">
                    {{ getInitials(user.name) }}
                </AvatarFallback>
            </Avatar>

            <div class="flex-1 text-left text-sm flex flex-col">
                <span class="truncate font-medium">{{ user.name }}</span>
                <span class="text-muted-foreground truncate text-xs">{{ user.email }}</span>
            </div>
        </div>

        <Button size="icon" class="ml-auto">
            <Link class="w-full flex items-center justify-center" method="post" :href="route('logout')" @click="handleLogout" as="button">
                <LogOut />
            </Link>
        </Button>
    </Card>
</template>

<style scoped></style>
