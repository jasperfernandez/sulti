<script setup lang="ts">
import { Card, CardContent } from '@/components/ui/card';
import RecentChatItem from '@/components/chat/RecentChatItem.vue';
import { SharedData } from '@/types';
import RecentChatListHeader from '@/components/chat/RecentChatListHeader.vue';
import type { HTMLAttributes } from 'vue';
import { cn } from '@/lib/utils';
import { usePage } from '@inertiajs/vue3';

const props = defineProps<{
    class?: HTMLAttributes['class']
}>();

const page = usePage<SharedData>();
const recentChats = page.props.recentChats;
</script>

<template>
    <Card :class="cn('pt-4 pb-0 gap-2', props.class)">
        <RecentChatListHeader />
        <CardContent class="px-2 overflow-y-auto">
            <RecentChatItem
                v-for="rc in recentChats"
                :key="rc.chatId"
                :recent-chat="rc"
            />
        </CardContent>
    </Card>
</template>
