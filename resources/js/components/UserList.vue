<script setup lang="ts">
import UserItem from '@/components/UserItem.vue';
import users from '@/data/users';
</script>

<template>
    <div class="flex flex-col gap-2">
        <h1 class="px-3 font-bold text-muted-foreground">Users</h1>
        <UserItem v-for="user in users" :key="user.id" :user="user" />
    </div>
</template>

<style scoped></style>
