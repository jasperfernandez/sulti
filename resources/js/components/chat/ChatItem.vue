<script setup lang="ts">
import { Avatar, AvatarFallback, AvatarImage } from '@/components/ui/avatar';
import { getInitials } from '@/composables/useInitials';
import { User } from '@/types';

interface Props {
    user: User;
    latestMessage: string;
    timeStamp: string;
    hasUnreadMessage: boolean;
}

defineProps<Props>();
</script>

<template>
    <div class="px-4 rounded-lg flex min-h-20 w-full items-center gap-2 hover:bg-background">
        <Avatar class="size-12 overflow-hidden rounded-full">
            <AvatarImage v-if="user.avatar" :src="user.avatar" :alt="user.name" />
            <AvatarFallback class="rounded-lg bg-neutral-200 font-semibold text-black dark:bg-neutral-700 dark:text-white">
                {{ getInitials(user.name) }}
            </AvatarFallback>
        </Avatar>

        <div>
            <h1 :class="{ 'font-bold': hasUnreadMessage }">{{ user.name }}</h1>
            <p :class="['text-sm', hasUnreadMessage ? 'text-foreground font-bold' : 'text-muted-foreground']">
                <span>{{ latestMessage }}</span>
                <span> · </span>
                <span>{{ timeStamp }}</span>
            </p>
        </div>

        <div v-if="hasUnreadMessage" class="size-2 bg-primary rounded-full ml-auto"></div>
    </div>
</template>

<style scoped></style>
