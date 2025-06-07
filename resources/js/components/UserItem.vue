<script setup lang="ts">
import { Avatar, AvatarFallback, AvatarImage } from '@/components/ui/avatar';
import { getInitials } from '@/composables/useInitials';
import { injectComposeUserList } from '@/providers/composeUserList';
import { User } from '@/types';

interface Props {
    user: User;
}

defineProps<Props>();

const { addUser } = injectComposeUserList();
</script>

<template>
    <div class="hover:bg-background flex items-center gap-2 rounded-md p-2" @click="addUser(user)">
        <Avatar class="size-10 overflow-hidden rounded-full">
            <AvatarImage v-if="user.avatar" :src="user.avatar" :alt="user.name" />
            <AvatarFallback class="rounded-lg bg-neutral-200 font-semibold text-black dark:bg-neutral-700 dark:text-white">
                {{ getInitials(user.name) }}
            </AvatarFallback>
        </Avatar>

        <h1>{{ user.name }}</h1>
    </div>
</template>

<style scoped></style>
