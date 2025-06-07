<script setup lang="ts">
import { CardHeader } from '@/components/ui/card';
import { Popover, PopoverContent, PopoverTrigger } from '@/components/ui/popover';
import UserList from '@/components/UserList.vue';
import { injectComposeUserList } from '@/providers/composeUserList';
import { X } from 'lucide-vue-next';
import { Button } from '@/components/ui/button';

const { users, removeUser } = injectComposeUserList();
</script>

<template>
    <CardHeader class="p-0">
        <div class="border-b-border flex items-center gap-2 border-b-1 p-4 min-h-20">
            <span>To:</span>
            <div class="flex flex-wrap gap-1 items-center">
                <span v-for="user in users" :key="user.id">
                    <span class="flex items-center gap-1 font-bold rounded bg-secondary px-2 py-1 text-xs text-secondary-foreground dark:bg-background text-nowrap">
                        {{ user.name }}
                        <Button size="icon" variant="ghost" class="size-6" @click="removeUser(user.id)">
                            <X class="size-4" />
                        </Button>
                    </span>
                </span>
                <Popover>
                    <PopoverTrigger>
                        <input class="m-0 appearance-none border-none bg-transparent p-0 outline-none focus:ring-0" />
                    </PopoverTrigger>
                    <PopoverContent align="start" class="h-96 overflow-y-auto p-1">
                        <UserList />
                    </PopoverContent>
                </Popover>
            </div>
        </div>
    </CardHeader>
</template>
