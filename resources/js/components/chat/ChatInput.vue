<script setup lang="ts">
import { CardFooter } from '@/components/ui/card';
import { Input } from '@/components/ui/input';
import { Button } from '@/components/ui/button';
import { Send } from 'lucide-vue-next';
</script>

<template>
    <CardFooter class="gap-2">
        <Input placeholder="Aa" />
        <Button>
            <Send />
        </Button>
    </CardFooter>
</template>
