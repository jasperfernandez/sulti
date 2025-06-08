<script setup lang="ts">
import { Avatar, AvatarFallback, AvatarImage } from '@/components/ui/avatar';
import { getInitials } from '@/composables/useInitials';
import { RecentChat, User } from '@/types';
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

interface Props {
    recentChat: RecentChat;
}

const props = defineProps<Props>();

const memberNames = computed(() => {
    return props.recentChat.members.map((member: User) => member.name).join(', ');
});
</script>

<template>
    <Link :href="route('chat.edit', props.recentChat.chatId)" class="px-4 rounded-lg flex min-h-20 w-full items-center gap-2 hover:bg-secondary dark:hover:bg-background">
        <Avatar v-if="props.recentChat.members.length == 1" class="size-12 overflow-hidden rounded-full">
            <AvatarImage v-if="props.recentChat.members[0].avatar" :src="props.recentChat.members[0].avatar" :alt="props.recentChat.members[0].name" />
            <AvatarFallback class="rounded-lg bg-neutral-200 font-semibold text-black dark:bg-neutral-700 dark:text-white">
                {{ getInitials(props.recentChat.members[0].name) }}
            </AvatarFallback>
        </Avatar>

        <div v-if="props.recentChat.members.length > 1" class="flex">
            <Avatar class="size-12 overflow-hidden rounded-full z-20 border-2 border-secondary">
                <AvatarImage v-if="props.recentChat.members[0].avatar" :src="props.recentChat.members[0].avatar" :alt="props.recentChat.members[0].name" />
                <AvatarFallback class="rounded-lg bg-neutral-200 font-semibold text-black dark:bg-neutral-700 dark:text-white">
                    {{ getInitials(props.recentChat.members[0].name) }}
                </AvatarFallback>
            </Avatar>

            <Avatar class="size-12 overflow-hidden rounded-full -ml-4 -mt-2 z-10">
                <AvatarImage v-if="props.recentChat.members[1].avatar" :src="props.recentChat.members[1].avatar" :alt="props.recentChat.members[1].name" />
                <AvatarFallback class="rounded-lg bg-neutral-200 font-semibold text-black dark:bg-neutral-700 dark:text-white">
                    {{ getInitials(props.recentChat.members[1].name) }}
                </AvatarFallback>
            </Avatar>
        </div>

        <div>
            <h1 :class="{ 'font-bold': props.recentChat.hasUnreadMessage }">{{ memberNames }}</h1>
            <p>
                <span :class="['text-sm', props.recentChat.hasUnreadMessage ? 'text-foreground font-bold' : 'text-muted-foreground']">{{ props.recentChat.lastMessage }}</span>
                <span> · </span>
                <span class="text-sm text-muted-foreground">{{ props.recentChat.lastMessageAt }}</span>
            </p>
        </div>

        <div v-if="props.recentChat.hasUnreadMessage" class="size-2 bg-primary rounded-full ml-auto"></div>
    </Link>
</template>

<style scoped></style>
