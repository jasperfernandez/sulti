<script setup lang="ts">
import { getInitials } from '@/composables/useInitials';
import { Avatar, AvatarFallback, AvatarImage } from '@/components/ui/avatar';
import { CardHeader } from '@/components/ui/card';
import { User } from '@/types';

interface Props {
    user: User;
}

defineProps<Props>();
</script>

<template>
    <CardHeader class="p-0">
        <div class="p-4 flex items-center gap-2 border-b-1 border-b-border">
            <Avatar class="size-10 overflow-hidden rounded-full">
                <AvatarImage v-if="user.avatar" :src="user.avatar" :alt="user.name" />
                <AvatarFallback class="rounded-lg bg-neutral-200 font-semibold text-black dark:bg-neutral-700 dark:text-white">
                    {{ getInitials(user?.name) }}
                </AvatarFallback>
            </Avatar>

            <h1 class="text-lg font-bold">{{user.name}}</h1>
        </div>
    </CardHeader>
</template>

<style scoped>

</style>
