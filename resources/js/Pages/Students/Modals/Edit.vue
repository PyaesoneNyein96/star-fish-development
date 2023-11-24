<script setup>
import { router, useForm } from '@inertiajs/vue3';
const data = defineProps({
    student: Object
});

const form = useForm({
    id: data.student.id,
    profile_picture: data.student.profile_picture,
    name: data.student.name,
    nickName: data.student.nickName,
    email: data.student.email,
    phone: data.student.phone,
    board: data.student.board,
    level: data.student.level,
    point: data.student.point,
    status: data.student.status,
    age: data.student.age,
    isSubscriber: data.student.isSubscriber
});

const selectProfile = (event) => {
    form.profile_picture = event.target.files[0];
}

const removeProfile = (id) => {
    const confirmed = confirm(`Are you sure to remove ${data.student.name} 's profile picture ?`)
    if (confirmed) {
        $(`#staticBackdropEdit${id}`).modal('hide');
        router.get(`/dashboard/student/profilepic/remove/${id}`);
    }
}

const postEditData = () => {
    $(`#staticBackdropEdit${form.id}`).modal('hide');
    router.post('/dashboard/student/edit', form);
}
</script>
<template>
    <div class="modal fade" :id="`staticBackdropEdit${student.id}`" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">
                        Student Profile Edit
                    </h1>
                    <button type="button" class=" rounded border text-white btn btn-sm bg-secondary" data-bs-dismiss="modal"
                        aria-label="Close">esc</button>
                </div>

                <form @submit.prevent="postEditData">
                    <div class="modal-body overflow-y-scroll " style="height: 70vh;">
                        <div class="container">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>
                                            <div style="width: 100px" class=" d-flex ">
                                                <!-- <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
                                                                alt="" class="w-100 shadow-sm mb-3" /> -->
                                                <img :src="'/storage/' + form.profile_picture" alt="" />
                                                <div class=" text-end">
                                                    <button type="button" class="btn btn-sm text-white"
                                                        title="Upload Profile"><label for="uploadProfile">
                                                            <i class="fa-solid fa-arrow-up-from-bracket text-secondary"></i>
                                                        </label>
                                                        <input type="file" id="uploadProfile" class="d-none"
                                                            @input="selectProfile"></button>
                                                    <button type="button" class="btn btn-sm text-white "
                                                        title="Remove Profile"><i
                                                            class="fa-regular fa-trash-can text-danger "
                                                            @click.prevent="removeProfile(student.id)"></i></button>
                                                </div>
                                            </div>
                                        </th>
                                        <th scope="col"> </th>
                                    </tr>

                                </thead>
                                <tbody class="text-start">
                                    <tr>
                                        <th>Name</th>
                                        <td><input type="text" v-model="form.name" class=" shadow-sm bg-light w-100"
                                                placeholder="Enter Name . . . " required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Nickname</th>
                                        <td><input type="text" v-model="form.nickName" class=" shadow-sm bg-light w-100"
                                                placeholder="Enter Nickname . . . " required>
                                        </td>
                                    </tr>
                                    <tr v-if="form.email != null">
                                        <th>Email</th>
                                        <td><input type="text" v-model="form.email" class=" shadow-sm bg-light w-100"
                                                placeholder="Enter Email . . . " required></td>
                                    </tr>
                                    <tr v-if="form.phone">
                                        <th>Phone</th>
                                        <td><input type="text" v-model="form.phone" class=" shadow-sm bg-light w-100"
                                                placeholder="Enter Phone . . . " required></td>
                                    </tr>
                                    <tr>
                                        <th>Tier</th>
                                        <td>
                                            <select v-model="form.board" class=" w-100 shadow-sm bg-light">
                                                <option value="silver" :selected="form.board == 'silver'">Silver</option>
                                                <option value="platinum" :selected="form.board == 'platinum'">Platinum
                                                </option>
                                                <option value="gold" :selected="form.board == 'gold'">Gold</option>
                                                <option value="diamond" :selected="form.board == 'diamond'">Diamond
                                                </option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Level</th>
                                        <td><input type="text" v-model="form.level" class=" shadow-sm bg-light w-100"
                                                placeholder="Enter Level . . . " required></td>
                                    </tr>
                                    <tr>
                                        <th>Stars</th>
                                        <td><input type="text" v-model="form.point" class=" shadow-sm bg-light w-100"
                                                placeholder="Enter Stars . . . " required></td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>
                                            <select v-model="form.status" class=" w-100 shadow-sm bg-light">
                                                <option value="1" :selected="form.status == 1">online</option>
                                                <option value="0" :selected="form.status == 0">offline</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Age</th>
                                        <td><input type="text" v-model="form.age" class=" shadow-sm bg-light w-100"
                                                placeholder="Enter Age . . . " required></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <select v-model="form.isSubscriber"
                                                class=" w-100 shadow-sm bg-light text-center">
                                                <option value="1" :selected="form.isSubscriber == 1">Subscribe User
                                                </option>
                                                <option value="0" :selected="form.isSubscriber == 0">Free User</option>
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer ">
                        <button type="submit" class=" btn bg-secondary text-white px-5">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</template>
