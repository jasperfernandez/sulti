import type { PageProps } from '@inertiajs/core';
import type { LucideIcon } from 'lucide-vue-next';
import type { Config } from 'ziggy-js';
import type { Reactive } from 'vue';

export interface Auth {
    user: User;
}

export interface BreadcrumbItem {
    title: string;
    href: string;
}

export interface NavItem {
    title: string;
    href: string;
    icon?: LucideIcon;
    isActive?: boolean;
}

export interface SharedData extends PageProps {
    name: string;
    quote: { message: string; author: string };
    auth: Auth;
    ziggy: Config & { location: string };
    sidebarOpen: boolean;
    recentChats: RecentChat[];
}

export interface User {
    id: number;
    name: string;
    email: string;
    avatar?: string;
}

export type BreadcrumbItemType = BreadcrumbItem;

export type ComposeUserListProvider = {
    users: Reactive<User[]>;
    addUser: (user: User) => void;
    removeUser: (userId: number) => void;
}

type ChatType = 'private' | 'group';

interface Chat {
    id: number;
    groupName: string;
    type: ChatType;
    createdBy: number;
    createdAt: string;

    members: User[];
    messages: Message[];
}

export type RecentChat = {
    chatId: number;
    members: User[];
    lastMessage: string;
    lastMessageAt: string;
    hasUnreadMessage: boolean;
}

export interface Message {
    id: number;
    content: string;
    chatId: number;
    sentBy: number;
    sentAt: string;

    sender: User;
}
