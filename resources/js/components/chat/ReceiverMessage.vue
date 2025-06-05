<script setup lang="ts">
import { Avatar, AvatarFallback, AvatarImage } from '@/components/ui/avatar';
import { Tooltip, TooltipContent, TooltipProvider, TooltipTrigger } from '@/components/ui/tooltip';
import { getInitials } from '@/composables/useInitials';
import { User } from '@/types';

interface Props {
    user: User;
    message: string;
    timestamp: string;
}

defineProps<Props>();
</script>

<template>
    <div class="mb-4 flex items-start justify-start">
        <TooltipProvider>
            <Tooltip>
                <TooltipTrigger as-child>
                    <div class="flex gap-2 items-end">
                        <Avatar class="size-8 overflow-hidden rounded-full">
                            <AvatarImage v-if="user.avatar" :src="user.avatar" :alt="user.name" />
                            <AvatarFallback class="rounded-lg bg-neutral-200 font-semibold text-black dark:bg-neutral-700 dark:text-white">
                                {{ getInitials(user.name) }}
                            </AvatarFallback>
                        </Avatar>

                        <div class="bg-background rounded-lg p-3 max-w-xs">
                            <p class="text-sm">{{ message }}</p>
                        </div>
                    </div>
                </TooltipTrigger>
                <TooltipContent side="bottom" align="center">
                    <p>{{ timestamp }}</p>
                </TooltipContent>
            </Tooltip>
        </TooltipProvider>
    </div>
</template>

<style scoped></style>
