<script setup lang="ts">
import { Card, CardContent } from '@/components/ui/card';
import ChatItem from '@/components/chat/ChatItem.vue';
import { User } from '@/types';
import ChatListHeader from '@/components/chat/ChatListHeader.vue';
import type { HTMLAttributes } from 'vue';
import { cn } from '@/lib/utils';

const props = defineProps<{
    class?: HTMLAttributes['class']
}>();

const user: User = {
    id: 1,
    name: 'John Doe',
    email: 'jd@mail.com',
    email_verified_at: '2023-01-01T00:00:00Z',
    created_at: '2023-01-01T00:00:00Z',
    updated_at: '2023-01-01T00:00:00Z',
};
</script>

<template>
    <Card :class="cn('pt-4 pb-0 gap-2', props.class)">
        <ChatListHeader />
        <CardContent class="px-2 overflow-y-auto">
            <ChatItem
                v-for="i in 8"
                :key="i"
                :user="user"
                latest-message="Yow"
                time-stamp="2h"
                has-unread-message
            />
        </CardContent>
    </Card>
</template>
