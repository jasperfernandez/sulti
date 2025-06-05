<script setup lang="ts">
import { Card } from '@/components/ui/card';
import ChatOpenHeader from '@/components/chat/ChatOpenHeader.vue';
import ChatOpenThread from '@/components/chat/ChatOpenThread.vue';
import ChatInput from '@/components/chat/ChatInput.vue';
import { User } from '@/types';
import type { HTMLAttributes } from 'vue';
import { cn } from '@/lib/utils';

const props = defineProps<{
    class?: HTMLAttributes['class']
}>()

const user: User = {
    id: 1,
    name: 'John Doe',
    email: 'jd@mail.com',
    email_verified_at: '2023-01-01T00:00:00Z',
    created_at: '2023-01-01T00:00:00Z',
    updated_at: '2023-01-01T00:00:00Z',
}
</script>

<template>
    <Card :class="cn('pt-0 flex gap-2', props.class)">
        <ChatOpenHeader :user="user" />
        <ChatOpenThread />
        <ChatInput />
    </Card>
</template>
