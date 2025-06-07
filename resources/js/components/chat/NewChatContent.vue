<script setup lang="ts">
import { Avatar, AvatarFallback, AvatarImage } from '@/components/ui/avatar';
import { CardContent } from '@/components/ui/card';
import { getInitials } from '@/composables/useInitials';
import { injectComposeUserList } from '@/providers/composeUserList';
import { computed } from 'vue';

const { users } = injectComposeUserList();
const userNames = computed(() => {
    return users.map((user) => user.name).join(', ');
});
</script>

<template>
    <CardContent class="flex-1 pt-16">
        <div v-if="users.length != 0" class="flex flex-col items-center gap-2">
            <div>
                <Avatar v-if="users.length == 1" class="size-14 overflow-hidden rounded-full">
                    <AvatarImage v-if="users[0].avatar" :src="users[0].avatar" :alt="users[0].name" />
                    <AvatarFallback class="rounded-lg bg-neutral-200 font-semibold text-black dark:bg-neutral-700 dark:text-white">
                        {{ getInitials(users[0].name) }}
                    </AvatarFallback>
                </Avatar>

                <div v-if="users.length > 1" class="flex">
                    <Avatar class="size-14 overflow-hidden rounded-full z-20 border-2 border-secondary">
                        <AvatarImage v-if="users[0].avatar" :src="users[0].avatar" :alt="users[0].name" />
                        <AvatarFallback class="rounded-lg bg-neutral-200 font-semibold text-black dark:bg-neutral-700 dark:text-white">
                            {{ getInitials(users[0].name) }}
                        </AvatarFallback>
                    </Avatar>

                    <Avatar class="size-12 overflow-hidden rounded-full -ml-4 -mt-2 z-10">
                        <AvatarImage v-if="users[1].avatar" :src="users[1].avatar" :alt="users[1].name" />
                        <AvatarFallback class="rounded-lg bg-neutral-200 font-semibold text-black dark:bg-neutral-700 dark:text-white">
                            {{ getInitials(users[1].name) }}
                        </AvatarFallback>
                    </Avatar>
                </div>
            </div>
            <span class="font-bold">{{ userNames }}</span>
        </div>
    </CardContent>
</template>
