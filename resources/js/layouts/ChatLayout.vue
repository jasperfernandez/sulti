<script setup lang="ts">
import ChatSide from '@/components/chat/ChatSide.vue';
import { provideComposeUserList } from '@/providers/composeUserList';

provideComposeUserList();
</script>

<template>
    <div class="flex h-screen w-full gap-4 overflow-hidden p-4">
        <ChatSide class="h-full w-full max-w-sm" />

        <div class="flex-1">
            <slot />
        </div>
    </div>
</template>
