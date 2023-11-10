<script setup>
import { router } from '@inertiajs/vue3';

defineProps({
    students: Object,
    rewards: Object
});

const toStudents = () => {
    router.get('/dashboard/students');
}


</script>

<template>
    <div style="height: 300px; width: 80%;" class=" overflow-hiddden shadow  border-1 m-3 px-5">
        <div class=" d-flex mb-1 pt-3">
            <h4>Students</h4>
            <div class="col text-end">
                <small class=" text-muted " style="cursor: pointer;" @click="toStudents()">View All</small>
            </div>
        </div>
        <table class="table table-hover rounded-5">
            <thead>
                <tr class=" ">
                    <th>id</th>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>age</th>
                </tr>
            </thead>
            <tbody style=" font-size: small;">
                <tr v-for="s in students" :key="s.id">
                    <td>{{ s.id }}</td>
                    <td><img :src="'/storage/' + s.profile_picture" alt=""></td>
                    <td>{{ s.name }}</td>
                    <td>{{ s.email }}</td>
                    <td>{{ s.phone }}</td>
                    <td>{{ s.age }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
