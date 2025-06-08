<script setup lang="ts">
import ChatInput from '@/components/chat/ChatInput.vue';
import ChatHeader from '@/components/chat/ChatHeader.vue';
import ChatThread from '@/components/chat/ChatThread.vue';
import { Card } from '@/components/ui/card';
import ChatLayout from '@/layouts/ChatLayout.vue';
import { Chat, SharedData } from '@/types';
import { computed } from 'vue';
import { Head, usePage } from '@inertiajs/vue3';

interface Props {
    chat: {
        data: Chat;
    };
}

const props = defineProps<Props>();
const page = usePage<SharedData>();
const user = page.props.auth.user;

const members = computed(() => {
    return props.chat.data.members.filter(member => member.id !== user.id);
});

const memberNames = computed(() => {
    return members.value.map(member => member.name).join(', ');
});
</script>

<template>
    <Head :title="memberNames" />

    <ChatLayout>
        <Card class="h-full gap-2 pt-0">
            <ChatHeader :members="members" />
            <ChatThread :messages="props.chat.data.messages" />
            <ChatInput />
        </Card>
    </ChatLayout>
</template>
