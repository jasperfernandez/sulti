<script setup lang="ts">
import ChatInput from '@/components/chat/ChatInput.vue';
import ChatHeader from '@/components/chat/ChatHeader.vue';
import ChatThread from '@/components/chat/ChatThread.vue';
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
        <Card class="h-full gap-2 pt-0">
            <ChatHeader :user="user" />
            <ChatThread />
            <ChatInput />
        </Card>
    </ChatLayout>
</template>
