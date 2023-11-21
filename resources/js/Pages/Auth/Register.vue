<script setup>
import { router, useForm } from '@inertiajs/vue3';
import InputError from '@/Components/InputError.vue';


const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
    terms: false,
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};

const toLogin = () => {
    router.get('/login')
}
</script>

<template>
    <main>
        <div class="container">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <!-- <div class="d-flex justify-content-center py-4">
                                            <a href="index.html" class="logo d-flex align-items-center w-auto">
                                                <img src="assets/img/logo.png" alt="">
                                                <span class="d-none d-lg-block">NiceAdmin</span>
                                            </a>
                                        </div> -->

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                                        <p class="text-center small">Enter your personal details to create account</p>
                                    </div>

                                    <form class="row g-3 needs-validation" @submit.prevent="submit">
                                        <div class="col-12">
                                            <label for="yourName" class="form-label">Your Name</label>
                                            <input type="text" name="name"
                                                class="shadow-sm border border-light rounded form-control " id="yourName"
                                                v-model="form.name" required>
                                            <InputError class="mt-2" :message="form.errors.name" />
                                        </div>

                                        <div class="col-12">
                                            <label for="yourEmail" class="form-label">Your Email</label>
                                            <input type="email" name="email"
                                                class="shadow-sm border border-light rounded form-control " id="yourEmail"
                                                v-model="form.email" required>
                                            <InputError class="mt-2" :message="form.errors.email" />
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Password</label>
                                            <input type="password" name="password"
                                                class="shadow-sm border border-light rounded form-control "
                                                id="yourPassword" v-model="form.password" required>
                                            <InputError class="mt-2" :message="form.errors.password" />
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Confirm Password</label>
                                            <input type="password" name="password"
                                                class="shadow-sm border border-light rounded form-control "
                                                id="yourPassword" v-model="form.password_confirmation" required>
                                            <InputError class="mt-2" :message="form.errors.password_confirmation" />
                                        </div>

                                        <div class="col-12">
                                            <button class="btn text-white  bg-primary w-100" type="submit">Create
                                                Account</button>
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0">Already have an account? <a
                                                    class=" text-decoration-underline" @click.prevent="toLogin" href="#">Log
                                                    in</a></p>
                                        </div>
                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
</template>
