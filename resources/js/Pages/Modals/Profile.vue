<script setup>
const data = {
    updateProfile: false,
};

const editProfile = () => {
    data.updateProfile = true;
}
</script>
<template>
    <div class="modal fade" id="profile" data-bs-keyboard="false" tabindex="-1" aria-labelledby="profileLabel"
        aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="profileLabel">Profile</h1>
                    <button type="button" class=" rounded border text-white bg-secondary" data-bs-dismiss="modal"
                        aria-label="Close">esc</button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center  py-4">
                        <div style="width: 100px">
                            <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
                                alt="" class="w-100 shadow-sm mb-3" />
                        </div>
                        <div class="col-lg-6 border rounded  p-3 shadow-sm ">
                            <div class="d-flex name">
                                <p class="fw-bold me-1">Name -</p>
                                <!-- <p>{{ student.name }}</p> -->
                                <p>Admin</p>
                            </div>
                            <div class="d-flex email">
                                <p class="fw-bold me-1">Email -</p>
                                <!-- <p>{{ student.email }}</p> -->
                                <p>admin@example.com</p>
                            </div>
                        </div>
                        <div class=" row pt-5">
                            <button class=" btn btn-sm  btn-primary col" v-if="!data.updateProfile"
                                @click="editProfile">Edit
                                Profile</button>
                            <button class=" btn btn-sm  btn-danger col" v-if="data.updateProfile">update Profile</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
