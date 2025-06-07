<script setup lang="ts">
import { CardFooter } from '@/components/ui/card';
import { Button } from '@/components/ui/button';
import { Send } from 'lucide-vue-next';
import { Textarea } from '@/components/ui/textarea';
</script>

<template>
    <CardFooter class="gap-2 items-end">
        <Textarea placeholder="Aa" />
        <Button>
            <Send />
        </Button>
    </CardFooter>
</template>
