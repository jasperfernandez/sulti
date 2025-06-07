<script setup lang="ts">
import { Card, CardContent } from '@/components/ui/card';
import ChatLayout from '@/layouts/ChatLayout.vue';
import { Head } from '@inertiajs/vue3';
import NewChatHeader from '@/components/chat/NewChatHeader.vue';
</script>

<template>
    <Head title="New" />

    <ChatLayout>
        <Card class="h-full gap-2 pt-0">
            <NewChatHeader />
            <CardContent>

            </CardContent>
        </Card>
    </ChatLayout>
</template>
