<script setup lang="ts">
import AuthUser from '@/components/AuthUser.vue';
import RecentChatList from '@/components/chat/RecentChatList.vue';
import type { HTMLAttributes } from 'vue';
import { cn } from '@/lib/utils';

const props = defineProps<{
    class?: HTMLAttributes['class']
}>()
</script>

<template>
    <div :class="cn('flex flex-col gap-4', props.class)">
        <RecentChatList class="flex-1 overflow-y-auto" />
        <AuthUser />
    </div>
</template>

<style scoped></style>
