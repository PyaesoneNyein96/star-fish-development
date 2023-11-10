<script setup>
import SideBar from '../SideBar.vue';
import Nav from '../Nav.vue';
import Details from './Modals/Details.vue';
import Edit from './Modals/Edit.vue';

defineProps({
    students: Object
})

</script>

<template>
    <div class=" d-flex ">
        <SideBar />
        <div class="col">
            <Nav></Nav>
            <div class=" mx-3 ">
                <div class=" d-flex mb-4 pt-3 border-bottom ">
                    <h4>Students</h4>
                    <div class="col text-end">
                        <small class=" text-muted " style="cursor: pointer;"></small>
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
                            <th>level</th>
                            <th>board</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody style=" font-size: small;">
                        <tr v-for="s in students.data" :key="s.id">
                            <td>{{ s.id }}</td>
                            <td><img :src="'/storage/' + s.profile_picture" alt=""></td>
                            <td>{{ s.name }}</td>
                            <td>{{ s.email }}</td>
                            <td>{{ s.phone }}</td>
                            <td>{{ s.age }}</td>
                            <td>{{ s.level }}</td>
                            <td>{{ s.board }}</td>
                            <td class=" text-center">
                                <button class=" btn btn-outline-success" data-bs-toggle="modal"
                                    :data-bs-target="`#staticBackdrop${s.id}`">View</button>
                                <Details :student="s"></Details>
                                <button class=" btn btn-outline-warning ms-2" data-bs-toggle="modal"
                                    :data-bs-target="`#staticBackdropEdit${s.id}`">Edit</button>
                                <Edit :student="s"></Edit>
                                <button class=" btn btn-outline-danger ms-2">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>
