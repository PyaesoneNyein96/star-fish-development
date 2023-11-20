<script setup>
import SideBar from '../SideBar.vue';
import Nav from '../Nav.vue';
const data = defineProps({
    chat: Object
})
</script>
<template>
    <div class=" d-flex ">
        <SideBar />
        <div class="col">
            <Nav></Nav>
            <div class=" container">
                <div class=" border m-2 rounded  overflow-y-scroll chat" style="height: 87vb;">
                    <table class="table m-1" style="width: 99%;">
                        <thead>
                            <tr>
                                <th scope="col">Photo</th>
                                <th scope="col">Message</th>
                                <th scope="col">Name</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="c in chat" :key="c.id">
                                <td>
                                    <div style="width: 35px;">
                                        <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
                                            alt="" class="w-100">
                                        <img :src="`/storage/${c.profile_picture}`" alt="" class="w-100">
                                    </div>
                                </td>
                                <td>{{ c.message }}</td>
                                <td>{{ c.name }}</td>
                                <td class=" text-center ">
                                    <button class=" btn btn-danger "><i class="fa-solid fa-ban"></i> Ban </button>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</template>
<style>
.chat::-webkit-scrollbar {
    display: none;
}
</style>
