<script setup>
import { router } from '@inertiajs/vue3'

defineProps({
    chat: Object
});

const toChat = () => {
    router.get('/dashboard/chat');
}
</script>

<template>
    <div style="height: 300px; width: 30%;" class=" overflow-hiddden shadow  border-1 m-3 px-5">
        <div class=" d-flex mb-1 pt-3">
            <h4>Chat</h4>
            <div class="col text-end">
                <small class=" text-muted " style="cursor: pointer;" @click="toChat()">View All</small>
            </div>
        </div>
        <div class=" overflow-y-scroll reward border rounded p-2 " style="height: 230px;">
            <div class="my-2 d-flex" v-for="c in chat" :key="c.id">
                <div style="width: 30px;" class="me-2 mt-4 ">
                    <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
                        class="rounded-circle w-100" alt="">
                    <!-- <img :src="`/storage/${c.profile_picture}`" class="rounded-circle w-100" alt=""> -->
                </div>
                <div class=" col">
                    <small class=" text-muted d-block mb-2 " style="font-size: smaller;">{{ c.name }}</small>
                    <span class="px-3 py-2 bg-light rounded-3 ">{{ c.message }}</span>
                </div>
            </div>
        </div>
    </div>
</template>
