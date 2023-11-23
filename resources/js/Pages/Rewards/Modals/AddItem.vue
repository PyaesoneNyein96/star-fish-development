<script setup>
import { ref } from 'vue';
import { router } from '@inertiajs/vue3';

const name = ref('');
const error = ref(false);
const items = ref([{ itemName: '', stars: '' }]);

const form = { name, items }

const addInputItem = () => {
    items.value.push({ itemName: '', stars: '' });
};
const postNewItem = () => {
    if (form.name.value == '') {
        error.value = true
    }
    else {
        error.value = false;
        router.post('/dashboard/rewards', form);
        name.value = '';
        items.value = [{ itemName: '', stars: '' }];
        $('#addNewItem').modal('hide');
    }
}
</script>
<template>
    <div class="modal fade" id="addNewItem" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
        aria-hidden="true">
        <div class="modal-dialog  modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Add New Item
                    </h1>
                    <button type="button" class="btn btn-sm bg-secondary text-light " data-bs-dismiss="modal">esc</button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="name mb-4">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="form-control border-0 shadow-sm rounded bg-light"
                                placeholder="Enter Name" v-model="name">
                            <small class=" text-danger" v-if="error"> * Name field required</small>
                        </div>

                        <div class="item mb-4">
                            <label for="item">Items & Stars</label>

                            <!-- Dynamic input fields -->
                            <div v-for="(item, index) in items" :key="index" class="d-flex mb-3">
                                <input v-model="item.itemName" type="text"
                                    class="form-control border-0 shadow-sm rounded bg-light me-2"
                                    placeholder="Enter Item" />
                                <input v-model="item.stars" type="text"
                                    class="form-control border-0 shadow-sm rounded bg-light ms-2"
                                    placeholder="Enter Stars" />
                            </div>

                            <div class="text-end">
                                <i class="fa-regular fa-square-plus fs-5" @click="addInputItem"></i>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-secondary text-white " data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn bg-primary text-white " @click="postNewItem">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</template>
