<script setup>
import SideBar from './SideBar.vue';
import Nav from './Nav.vue';
import Dashboard from './Dashboard/Index-Dash.vue';
defineProps({
    user: Object,
    students: Object,
    chat: Object,
    rewards: Object,
    rewards_name: Object
})
</script>

<template>
    <div class=" d-flex ">
        <SideBar />
        <div class="col">
            <Nav :user="user"></Nav>
            <Dashboard :students="students" :chat="chat" :rewards="rewards" :rewards_name="rewards_name"></Dashboard>
        </div>
    </div>
</template>
