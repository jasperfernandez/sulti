<script setup lang="ts">
import { Tooltip, TooltipContent, TooltipProvider, TooltipTrigger } from '@/components/ui/tooltip';

interface Props {
    message: string;
    timestamp: string;
}

defineProps<Props>();
</script>

<template>
    <div class="mb-4 flex items-end justify-end">
        <TooltipProvider>
            <Tooltip>
                <TooltipTrigger as-child>
                    <div class="bg-primary text-primary-foreground max-w-xs rounded-lg p-3">
                        <p class="text-sm">{{ message }}</p>
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
