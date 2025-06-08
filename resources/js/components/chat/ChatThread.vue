<script setup lang="ts">
import ReceiverMessage from '@/components/chat/ReceiverMessage.vue';
import SenderMessage from '@/components/chat/SenderMessage.vue';
import { CardContent } from '@/components/ui/card';
import { Message, SharedData } from '@/types';
import { usePage } from '@inertiajs/vue3';

interface Props {
    messages: Message[];
}

defineProps<Props>();


const page = usePage<SharedData>();
const user = page.props.auth.user;
</script>

<template>
    <CardContent class="flex-1 overflow-y-auto">
        <template v-for="message in messages" :key="message.id">
            <SenderMessage
                v-if="message.sentBy === user.id"
                :message="message.content"
                :sent-at="message.sentAt"
            />
            <ReceiverMessage
                v-else
                :user="message.sender"
                :message="message.content"
                :sent-at="message.sentAt"
            />
        </template>
    </CardContent>
</template>
