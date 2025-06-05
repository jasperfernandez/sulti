<script setup lang="ts">
import ChatInput from '@/components/chat/ChatInput.vue';
import ChatOpenHeader from '@/components/chat/ChatOpenHeader.vue';
import ChatOpenThread from '@/components/chat/ChatOpenThread.vue';
import { Card } from '@/components/ui/card';
import ChatLayout from '@/layouts/ChatLayout.vue';
import { User } from '@/types';

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
    <ChatLayout>
        <Card class="flex-1 flex gap-2 pt-0">
            <ChatOpenHeader :user="user" />
            <ChatOpenThread />
            <ChatInput />
        </Card>
    </ChatLayout>
</template>
