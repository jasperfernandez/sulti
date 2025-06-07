import { provide, inject, reactive } from 'vue';
import type { ComposeUserListProvider, User } from '@/types';

function createComposeUserList() {
    const users = reactive<User[]>([]);

    const addUser = (user: User) => {
        if (!users.some(u => u.id === user.id)) {
            users.push(user);
        }
    }

    const removeUser = (userId: number) => {
        const index = users.findIndex(u => u.id === userId);
        if (index !== -1) {
            users.splice(index, 1);
        }
    }

    return {
        users,
        addUser,
        removeUser
    };
}

export function provideComposeUserList() {
    provide<ComposeUserListProvider>('composeUserList', createComposeUserList());
}

export function injectComposeUserList() {
   return inject<ComposeUserListProvider>('composeUserList', createComposeUserList());
}
