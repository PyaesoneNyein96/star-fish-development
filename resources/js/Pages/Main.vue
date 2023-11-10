<script setup>
import SideBar from './SideBar.vue';
import Nav from './Nav.vue';
import Dashboard from './Dashboard.vue';
defineProps({
    students: Object,
    rewards: Object,
})
</script>

<template>
    <div class=" d-flex ">
        <SideBar />
        <div class="col">
            <Nav></Nav>
            <Dashboard :students="students" :rewards="rewards"></Dashboard>
        </div>
    </div>
</template>
