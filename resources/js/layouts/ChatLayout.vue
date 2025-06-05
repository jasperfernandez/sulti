<script setup lang="ts">
import ChatSide from '@/components/chat/ChatSide.vue';
</script>

<template>
    <div class="flex w-full h-screen p-4 gap-4 overflow-hidden">
        <ChatSide class="w-full max-w-sm h-full" />
        <slot />
    </div>
</template>
