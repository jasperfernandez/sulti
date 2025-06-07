<script setup lang="ts">
import ReceiverMessage from '@/components/chat/ReceiverMessage.vue';
import SenderMessage from '@/components/chat/SenderMessage.vue';
import { CardContent } from '@/components/ui/card';
import { User } from '@/types';

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
    <CardContent class="flex-1 overflow-y-auto">
        <SenderMessage message="Hello" timestamp="6:21 PM" />
        <ReceiverMessage :user="user" message="Hello stupid" timestamp="6:22 PM" />
        <SenderMessage message="Hello" timestamp="6:21 PM" />
        <ReceiverMessage :user="user" message="Hello stupid" timestamp="6:22 PM" />
        <SenderMessage message="Hello" timestamp="6:21 PM" />
        <ReceiverMessage :user="user" message="Hello stupid" timestamp="6:22 PM" />
        <SenderMessage message="Hello" timestamp="6:21 PM" />
        <ReceiverMessage :user="user" message="Hello stupid" timestamp="6:22 PM" />
        <SenderMessage message="Hello" timestamp="6:21 PM" />
        <ReceiverMessage :user="user" message="Hello stupid" timestamp="6:22 PM" />
        <SenderMessage message="Hello" timestamp="6:21 PM" />
        <ReceiverMessage :user="user" message="Hello stupid" timestamp="6:22 PM" />
        <SenderMessage message="Hello" timestamp="6:21 PM" />
        <ReceiverMessage :user="user" message="Hello stupid" timestamp="6:22 PM" />
        <SenderMessage message="Hello" timestamp="6:21 PM" />
        <ReceiverMessage :user="user" message="Hello stupid" timestamp="6:22 PM" />
    </CardContent>
</template>
