<script setup>
import { ref } from 'vue';


const data = defineProps({
    student: Object,
});

const date = new Date(data.student.created_at);
const loginDate = new Date(data.student.updated_at);

const month = new Intl.DateTimeFormat('en-US', { month: 'short' }).format(date);
const day = new Intl.DateTimeFormat('en-US', { day: 'numeric' }).format(date);
const year = new Intl.DateTimeFormat('en-US', { year: 'numeric' }).format(date);

let timeAgo = ref('');

const timeDifferenceLogin = loginDate - date;
const secondsDifference = Math.floor(timeDifferenceLogin / 1000);
const minutesDifference = Math.floor(secondsDifference / 60);
const hoursDifference = Math.floor(minutesDifference / 60);
const daysDifference = Math.floor(hoursDifference / 24);
const monthsDifference = Math.floor(daysDifference / 30);
const yearsDifference = Math.floor(daysDifference / 365);

if (yearsDifference > 0) {
    timeAgo = yearsDifference === 1 ? '1 year ago' : `${yearsDifference} years ago`;
} else if (monthsDifference > 0) {
    timeAgo = monthsDifference === 1 ? '1 month ago' : `${monthsDifference} months ago`;
} else if (daysDifference > 0) {
    timeAgo = daysDifference === 1 ? '1 day ago' : `${daysDifference} days ago`;
} else if (hoursDifference > 0) {
    timeAgo = hoursDifference === 1 ? '1 hour ago' : `${hoursDifference} hours ago`;
} else if (minutesDifference > 0) {
    timeAgo = minutesDifference === 1 ? '1 minute ago' : `${minutesDifference} minutes ago`;
} else {
    timeAgo = secondsDifference <= 10 ? 'just now' : `${secondsDifference} seconds ago`;
}

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
                        <div class="">
                            <small class="d-block text-decoration-underline "><strong>Account Created Date</strong></small>
                            <small>{{ day + " " + month + " " + year }}</small>
                        </div>
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>
                                        <div style="width: 100px">
                                            <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
                                                alt="" class="w-100 shadow-sm mb-3" />
                                            <img :src="
                                                '/storage/' +
                                                student.profile_picture
                                            " alt="" />

                                        </div>
                                    </th>
                                    <th></th>
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
                                        <span :class="[student.isAuth ? 'text-primary' : '']" class=" me-3 "> {{
                                            student.isAuth
                                            ? "online"
                                            : "offline"
                                        }}</span>
                                        <small v-if="!student.isAuth">( Active {{ timeAgo }} )</small>
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
