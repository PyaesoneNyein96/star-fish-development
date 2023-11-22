<script setup>

const data = defineProps({
    student: Object,
});


</script>
<template>
    <div class="modal fade" :id="`staticBackdrop${student.id}`" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">
                        Student Profile
                    </h1>
                    <button type="button" class="rounded border text-white btn btn-sm bg-secondary" data-bs-dismiss="modal"
                        aria-label="Close">
                        esc
                    </button>
                </div>
            <div class="modal-body">
                    <div class="container">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>
                                        <div style="width: 100px">
                                            <!-- <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
                                                                                                                                                                                                                                                                                                                                                            alt="" class="w-100 shadow-sm mb-3" /> -->
                                            <img :src="
                                                '/storage/' +
                                                student.profile_picture
                                            " alt="" />

                                        </div>
                                    </th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody class="text-start">
                                <tr>
                                    <th>Name</th>
                                    <td>{{ student.name }}</td>
                                </tr>
                                <tr>
                                    <th>Nickname</th>
                                    <td>{{ student.nickName }}</td>
                                </tr>
                                <tr v-if="student.email != null">
                                    <th>Email</th>
                                    <td>{{ student.email }}</td>
                                </tr>

                                <tr v-if="student.phone">
                                    <th>Phone</th>
                                    <td>{{ student.phone }}</td>
                                </tr>

                                <tr>
                                    <th>Tier</th>
                                    <td>{{ student.board }}</td>
                                </tr>
                                <tr>
                                    <th>Level</th>
                                    <td>{{ student.level }}</td>
                                </tr>
                                <tr>
                                    <th>Stars</th>
                                    <td>{{ student.point }}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>
                                        {{
                                            student.isAuth
                                            ? "online"
                                            : "offline"
                                        }}
                                    </td>

                                </tr>
                                <tr>
                                    <th>Age</th>
                                    <td>{{ student.age }}</td>
                                </tr>
                                <tr class="text-center">
                                    <td colspan="2">
                                        <p class="border rounded p-2 fw-bold">
                                            {{
                                                student.isSubscriber
                                                ? "Subscribe User"
                                                : "Free User"
                                            }}
                                        </p>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
