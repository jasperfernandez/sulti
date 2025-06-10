<script setup lang="ts">
import { Avatar, AvatarFallback, AvatarImage } from '@/components/ui/avatar';
import { Button } from '@/components/ui/button';
import { Card } from '@/components/ui/card';
import { Tooltip, TooltipContent, TooltipProvider, TooltipTrigger } from '@/components/ui/tooltip';
import { getInitials } from '@/composables/useInitials';
import { cn } from '@/lib/utils';
import { SharedData, User } from '@/types';
import { Link, router, usePage } from '@inertiajs/vue3';
import { LogOut } from 'lucide-vue-next';
import type { HTMLAttributes } from 'vue';

const props = defineProps<{
    class?: HTMLAttributes['class'];
}>();

const page = usePage<SharedData>();
const user = page.props.auth.user as User;

const handleLogout = () => {
    router.flushAll();
};
</script>

<template>
    <Card :class="cn('flex flex-row items-center gap-2 px-4 py-2', props.class)">
        <div class="flex items-center gap-2">
            <Avatar class="size-12 overflow-hidden rounded-full">
                <AvatarImage v-if="user.avatar" :src="user.avatar" :alt="user.name" />
                <AvatarFallback class="rounded-lg bg-neutral-200 font-semibold text-black dark:bg-neutral-700 dark:text-white">
                    {{ getInitials(user.name) }}
                </AvatarFallback>
            </Avatar>

            <div class="flex flex-1 flex-col text-left text-sm">
                <span class="truncate font-medium">{{ user.name }}</span>
                <span class="text-muted-foreground truncate text-xs">{{ user.email }}</span>
            </div>
        </div>

        <TooltipProvider>
            <Tooltip>
                <TooltipTrigger as-child>
                    <Button variant="ghost" size="icon" class="ml-auto" as-child>
                        <Link class="flex items-center justify-center" method="post" :href="route('logout')" @click="handleLogout" as="button">
                            <LogOut />
                        </Link>
                    </Button>
                </TooltipTrigger>
                <TooltipContent>
                    <p>Log out</p>
                </TooltipContent>
            </Tooltip>
        </TooltipProvider>
    </Card>
</template>

<style scoped></style>
