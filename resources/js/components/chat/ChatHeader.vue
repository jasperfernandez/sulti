<script setup lang="ts">
import { getInitials } from '@/composables/useInitials';
import { Avatar, AvatarFallback, AvatarImage } from '@/components/ui/avatar';
import { CardHeader } from '@/components/ui/card';
import { User } from '@/types';
import { computed } from 'vue';

interface Props {
    members: User[];
}

const props = defineProps<Props>();

const memberNames = computed(() => {
    return props.members.map((member: User) => member.name).join(', ');
});
</script>

<template>
    <CardHeader class="p-0">
        <div class="p-4 flex items-center gap-2 border-b-1 border-b-border min-h-20">
            <Avatar v-if="props.members.length == 1" class="size-10 overflow-hidden rounded-full">
                <AvatarImage v-if="props.members[0].avatar" :src="props.members[0].avatar" :alt="props.members[0].name" />
                <AvatarFallback class="rounded-lg bg-neutral-200 font-semibold text-black dark:bg-neutral-700 dark:text-white">
                    {{ getInitials(props.members[0].name) }}
                </AvatarFallback>
            </Avatar>

            <div v-if="props.members.length > 1" class="flex">
                <Avatar class="size-10 overflow-hidden rounded-full z-20 border-2 border-secondary">
                    <AvatarImage v-if="props.members[0].avatar" :src="props.members[0].avatar" :alt="props.members[0].name" />
                    <AvatarFallback class="rounded-lg bg-neutral-200 font-semibold text-black dark:bg-neutral-700 dark:text-white">
                        {{ getInitials(props.members[0].name) }}
                    </AvatarFallback>
                </Avatar>

                <Avatar class="size-10 overflow-hidden rounded-full -ml-4 -mt-2 z-10">
                    <AvatarImage v-if="props.members[1].avatar" :src="props.members[1].avatar" :alt="props.members[1].name" />
                    <AvatarFallback class="rounded-lg bg-neutral-200 font-semibold text-black dark:bg-neutral-700 dark:text-white">
                        {{ getInitials(props.members[1].name) }}
                    </AvatarFallback>
                </Avatar>
            </div>

            <h1 class="text-lg font-bold">{{memberNames}}</h1>
        </div>
    </CardHeader>
</template>

<style scoped>

</style>
