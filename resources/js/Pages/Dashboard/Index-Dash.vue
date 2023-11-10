<script setup>
import Students from './Students.vue';
import Rewards from './Rewards.vue';
import Chat from './Chat.vue';

defineProps({
    students: Object,
    chat: Object,
    rewards: Object,
    rewards_name: Object
});

</script>

<template>
    <div class=" d-flex">
        <Students :students="students"></Students>
        <Rewards :rewards="rewards" :rewards_name="rewards_name"></Rewards>
    </div>
    <Chat :chat="chat"></Chat>
</template>

<style>
.reward::-webkit-scrollbar {
    display: none;
}
</style>
