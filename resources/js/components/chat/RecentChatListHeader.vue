<script setup lang="ts">
import { CardHeader } from '@/components/ui/card';
import { Input } from '@/components/ui/input';
import { Button } from '@/components/ui/button';
import { Link } from '@inertiajs/vue3';
import { SquarePen } from 'lucide-vue-next';
import { Tooltip, TooltipContent, TooltipProvider, TooltipTrigger } from '@/components/ui/tooltip';
</script>

<template>
    <CardHeader class="flex flex-col gap-2 px-4">
        <div class="flex w-full items-center justify-between">
            <h1 class="text-2xl font-bold">Sulti</h1>

            <TooltipProvider>
                <Tooltip>
                    <TooltipTrigger as-child>
                        <Button variant="ghost" size="icon" as-child>
                            <Link class="flex items-center justify-center" :href="route('chat.create')" as="button">
                                <SquarePen />
                            </Link>
                        </Button>
                    </TooltipTrigger>
                    <TooltipContent side="bottom" align="center">
                        <p>Compose</p>
                    </TooltipContent>
                </Tooltip>
            </TooltipProvider>
        </div>
        <Input placeholder="Search" />
    </CardHeader>
</template>
