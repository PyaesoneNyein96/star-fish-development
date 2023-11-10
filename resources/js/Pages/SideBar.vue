<script setup>
import { router } from '@inertiajs/vue3';

const toDashboard = () => {
    router.get('/dashboard/index');
}

const toStudents = () => {
    router.get('/dashboard/students');
}

const toRewards = () => {
    router.get('/dashboard/rewards');
}

const toChat = () => {
    router.get('/dashboard/chat');
}
</script>

<template>
    <aside class=" bg-dark">
        <div style="min-height: 100vh;">
            <div class="collapse collapse-horizontal" id="sideBar">
                <div style=" background-color: darkslategrey;padding: 13px 20px 13px;">
                    <img src="/mail-pic/icon-logo.png" alt="logo" class="ms-3" style="width: 120px;">
                </div>
                <div class=" text-white-50 mt-3" style="width: 250px;">
                    <ul class=" list-unstyled ">
                        <li class=" py-1 ps-3 py-2 " style="cursor: pointer;" @click="toDashboard"><a><i
                                    class="fa-solid fa-chart-line pe-2 "></i>Dashboard</a>
                        </li>
                        <li class=" py-1 ps-3 py-2" style="cursor: pointer;" @click="toStudents"><a><i
                                    class="fa-solid fa-children pe-2 "></i>Students</a></li>
                        <li class=" py-1 ps-3 py-2" style="cursor: pointer;" @click="toRewards"><i
                                class="fa-solid fa-trophy pe-2"></i>Rewards</li>
                        <li class=" py-1 ps-3 py-2" style="cursor: pointer;" @click="toChat"><i
                                class="fa-solid fa-comment pe-2"></i>Chat</li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
</template>

<style scoped>
li:hover {
    background-color: rgb(73, 73, 73);
}
</style>
