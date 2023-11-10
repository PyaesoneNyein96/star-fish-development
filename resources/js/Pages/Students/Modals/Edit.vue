<script setup>
import { router, useForm } from '@inertiajs/vue3';
const data = defineProps({
    student: Object
});

const form = useForm({
    name: data.student.name,
    email: data.student.email,
    phone: data.student.phone,
    board: data.student.board,
    level: data.student.level,
    point: data.student.point,
    status: data.student.status,
    age: data.student.age,
    accState: data.student.isSubscriber
});

const postEditData = () => {
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
                    <button type="button" class=" rounded border text-white bg-secondary" data-bs-dismiss="modal"
                        aria-label="Close">esc</button>
                </div>

                <form class=" ">
                    <div class="modal-body overflow-y-scroll " style="height: 70vh;">
                        <div class="row justify-content-center">
                            <div style="width: 100px">
                                <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
                                    alt="" class="w-100 shadow-sm mb-3" />
                            </div>
                            <div class="col-lg-6 border rounded  p-3 shadow-sm ">
                                <div class="name text-start pb-2 ">
                                    <span class="fw-bold ">Name</span>
                                    <input type="text" name="name" class=" form-control " v-model="form.name">
                                </div>
                                <div class="email text-start pb-2 ">
                                    <span class="fw-bold ">Email</span>
                                    <input type="email" name="email" class=" form-control " v-model="form.email">
                                </div>
                                <div class="phone text-start pb-2 ">
                                    <span class="fw-bold ">Phone</span>
                                    <input type="text" name="phone" class=" form-control " v-model="form.phone">
                                </div>
                                <div class="tier text-start pb-2 ">
                                    <span class="fw-bold ">Tier</span>
                                    <input type="text" name="board" class=" form-control " v-model="form.board">
                                </div>
                                <div class="level text-start pb-2 ">
                                    <span class="fw-bold ">Level</span>
                                    <input type="text" name="level" class=" form-control " v-model="form.level">
                                </div>
                                <div class="point text-start pb-2 ">
                                    <span class="fw-bold ">Point</span>
                                    <input type="text" name="point" class=" form-control " v-model="form.point">
                                </div>
                                <div class="status text-start pb-2 ">
                                    <span class="fw-bold ">Status</span>
                                    <div class="input-group">
                                        <select class="form-select" id="inputGroupSelect03" v-model="form.status">
                                            <option value="1">online</option>
                                            <option value="0">offline</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="age text-start pb-2 ">
                                    <span class="fw-bold ">Age</span>
                                    <input type="text" name="age" class=" form-control " v-model="form.age">
                                </div>

                                <div class="subscribe text-start ">

                                    <span class="fw-bold ">Account Statement</span>

                                    <div class="input-group">
                                        <select class="form-select" id="inputGroupSelect03" v-model="form.accState">
                                            <option value="1">Subscribe User
                                            </option>
                                            <option value="0">Free User</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer ">
                        <button type="submit" class=" btn btn-secondary col">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</template>
