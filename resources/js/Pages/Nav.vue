<script setup>
import Profile from './Modals/Profile.vue';
// defineProps({
//     user: Object
// })
</script>

<template>
    <nav>
        <div class="bg-light d-flex justify-content-between pt-3 pb-2 px-3 ">

            <button class="btn pt-1 " type="button" data-bs-toggle="collapse" data-bs-target="#sideBar"
                aria-expanded="false" aria-controls="sideBar">
                <i class="fa-solid fa-bars fs-4 "></i>
            </button>

            <div style=" width: 45px;">
                <img src="https://static.vecteezy.com/system/resources/previews/020/765/399/non_2x/default-profile-account-unknown-icon-black-silhouette-free-vector.jpg"
                    alt="profile" class=" rounded-circle img-thumbnail dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">
                <ul class="dropdown-menu">
                    <li class="bg-light px-3 d-flex align-items-center " style="height: 100px;"><a
                            class=" text-decoration-none text-muted fw-bold " href="#">
                            <!-- {{ user.name }} -->
                            <span class=" d-block">Admin</span>
                            <small>admin@example.com</small>
                        </a></li>
                    <li><a class="dropdown-item  text-muted py-2" href="#" data-bs-toggle="modal"
                            data-bs-target="#profile"><i class="fa-solid fa-user me-2"></i>My
                            Profile</a>
                    </li>
                    <li><a class="dropdown-item  text-muted py-2" href="#"><i class="fa-solid fa-key me-2"></i>Change
                            Password</a>
                    </li>
                    <li><a class="dropdown-item  text-muted py-2" href="#"><i
                                class="fa-solid fa-arrow-right-from-bracket me-2"></i>Logout</a>
                    </li>
                </ul>
                <Profile></Profile>
            </div>
        </div>
    </nav>
</template>
