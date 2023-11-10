<script setup>
defineProps({
    student: Object,
});
</script>
<template>
    <div class="modal fade" :id="`staticBackdrop${student.id}`" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">
                        Student Profile
                    </h1>
                    <button type="button" class=" rounded border text-white bg-secondary" data-bs-dismiss="modal"
                        aria-label="Close">esc</button>
                </div>
                <div class="modal-body mb-3">
                    <div class="row justify-content-center">
                        <div style="width: 100px">
                            <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
                                alt="" class="w-100 shadow-sm mb-3" />
                        </div>
                        <div class="col-lg-6 border rounded  p-3 shadow-sm ">
                            <div class="d-flex name">
                                <p class="fw-bold me-2">Name -</p>
                                <p>{{ student.name }}</p>
                            </div>
                            <div class="d-flex email">
                                <p class="fw-bold me-2">Email -</p>
                                <p>{{ student.email }}</p>
                            </div>
                            <div class="d-flex phone">
                                <p class="fw-bold me-2">Phone -</p>
                                <p>{{ student.phone }}</p>
                            </div>
                            <div class="d-flex tier">
                                <p class="fw-bold me-2">Tier -</p>
                                <p>{{ student.board }}</p>
                            </div>
                            <div class="d-flex level">
                                <p class="fw-bold me-2">Level -</p>
                                <p>{{ student.level }}</p>
                            </div>
                            <div class="d-flex point">
                                <p class="fw-bold me-2">Point -</p>
                                <p>{{ student.point }}</p>
                            </div>
                            <div class="d-flex status">
                                <p class="fw-bold me-2">Status -</p>
                                <p>
                                    {{ student.isAuth ? "online" : "offline" }}
                                </p>
                            </div>
                            <div class="d-flex age">
                                <p class="fw-bold me-2">Age -</p>
                                <p>{{ student.isAuth }}</p>
                            </div>
                            <div class="subscribe ">
                                <p class="border rounded py-2 fw-bold">
                                    {{
                                        student.isSubscriber
                                        ? "Subscribe User"
                                        : "Free User"
                                    }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
