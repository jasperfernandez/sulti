<script setup lang="ts">
import { Card } from '@/components/ui/card';
import ChatLayout from '@/layouts/ChatLayout.vue';
import { Head } from '@inertiajs/vue3';
import NewChatHeader from '@/components/chat/NewChatHeader.vue';
import ChatInput from '@/components/chat/ChatInput.vue';
import NewChatContent from '@/components/chat/NewChatContent.vue';
</script>

<template>
    <Head title="New" />

    <ChatLayout>
        <Card class="h-full gap-2 pt-0">
            <NewChatHeader />
            <NewChatContent />
            <ChatInput />
        </Card>
    </ChatLayout>
</template>
