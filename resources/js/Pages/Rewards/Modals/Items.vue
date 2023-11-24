<script setup>
import { router } from '@inertiajs/vue3';
import { ref } from 'vue';

defineProps({
    rewards_name: Object,
    rewards: Object
})

const name = ref('');
const item = ref('');
const point = ref('');
let inputToggle = ref(false);
let addNewItemToggle = ref(false);
const newItem = ref({ item: '', point: '' });
const addNewItemError = ref(false);

const rename = () => {
    inputToggle.value = true;
}

const renameUpdate = (originalName) => {
    const form = { originalName, name };

    if (form.name.value == '') {
        inputToggle.value = false;
    } else {
        router.post('/dashboard/rewards/rename', form);
        inputToggle.value = false;
    }
}

const inputPerItem = (id) => {
    $(`.${id}td`).css('display', 'none');
    $(`.${id}`).removeAttr('style');
}

const closePerItem = (id) => {
    $(`.${id}td`).removeAttr('style');
    $(`.${id}`).css('display', 'none');
}

const editPerItem = (id) => {
    const form = { id, item, point };
    if (form.item.value == '' || form.point.value == '') {
        $(`.${id}`).css('display', 'none');
        $(`.${id}td`).removeAttr('style');
    }
    else {
        router.post('/dashboard/rewards/per/edit', form);
        $(`.${id}`).css('display', 'none');
        $(`.${id}td`).removeAttr('style');
    }
}

const deletePerItem = (id) => {
    const ID = { id };
    router.post(`/dashboard/rewards/per/delete`, ID);
}

const addNewItemInputToggle = () => {
    addNewItemToggle.value = true;
}

const closeNewItemInput = () => {
    newItem.value = { item: '', point: '' };
    addNewItemToggle.value = false;
    addNewItemError.value = false;
}

const addNewItem = (name) => {
    const form = { name, newItem };

    if (form.newItem.value.item == '' || form.newItem.value.point == '') {
        addNewItemError.value = true;
    }
    else {
        addNewItemError.value = false;
        router.post('/dashboard/rewards/per/add', form);

        newItem.value = { item: '', point: '' };
        addNewItemToggle.value = false;
    }
}

const removeItem = (name) => {
    const confirmed = confirm(`This will remove all items from ${name}`)
    if (confirmed) {
        router.get(`/dashboard/rewards/remove/${name}`);
        $(`#${name.replace(/\s/g, '')}`).modal('hide');
    }
}

</script>
<template>
    <div class="modal fade" v-for="rn in rewards_name" :id="`${rn.name.replace(/\s/g, '')}`" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" v-if="!inputToggle" id="staticBackdropLabel">{{ rn.name }}
                        <i class="fa-solid fa-pen-to-square text-success fs-6 ms-3" title="rename" @click="rename"></i>
                    </h1>
                    <input type="text" v-model="name" class="renameInput shadow-sm rounded bg-light border-0"
                        v-if="inputToggle" :placeholder="rn.name" @keyup.enter="renameUpdate(rn.name)">
                    <button type="button" class="btn btn-sm bg-secondary text-light " data-bs-dismiss="modal">esc</button>
                </div>
                <div class="modal-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Items</th>
                                <th>Stars</th>
                                <th class=" text-end "><button class="btn btn-sm btn-outline-secondary "
                                        @click="addNewItemInputToggle">+ Add Item</button>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-if="addNewItemToggle">
                                <td><input type="text" style="width:150px" class="border-0 rounded  shadow-sm bg-light"
                                        placeholder="Enter Item . . . " v-model="newItem.item">
                                    <small class=" text-danger  d-block " v-if="addNewItemError"> * item field
                                        required</small>
                                </td>
                                <td><input type="text" style="width: 120px;" class="border-0 rounded  shadow-sm bg-light"
                                        placeholder="Enter Stars . . . " v-model="newItem.point">
                                    <small class=" text-danger  d-block " v-if="addNewItemError"> * stars field
                                        required</small>
                                </td>
                                <td class="text-end">
                                    <button class="btn btn-sm  btn-outline-secondary me-2 " @click="addNewItem(rn.name)">+
                                        Add</button>
                                    <button class="btn btn-sm btn-danger " @click="closeNewItemInput">Close</button>

                                </td>
                            </tr>
                        </tbody>
                        <tbody v-for="r in rewards">
                            <tr v-if="r.name == rn.name">
                                <td :class="`${r.id}td`">{{ r.item }}</td>
                                <td :class="`${r.id}td`">{{ r.point }}</td>
                                <td :class="`${r.id}`" style="display: none;"><input type="text" style="width:150px"
                                        class="border-0 rounded  shadow-sm bg-light" :placeholder="`${r.item}`"
                                        v-model="item">
                                </td>
                                <td :class="`${r.id}`" style="display: none;"><input type="text" style="width: 90px;"
                                        class="border-0 rounded  shadow-sm bg-light" :placeholder="`${r.point}`"
                                        v-model="point">
                                </td>
                                <td class="text-end">
                                    <button :class="`btn btn-sm  btn-success me-3 ${r.id}td `"
                                        @click="inputPerItem(r.id)">Edit</button>
                                    <button :class="`btn btn-sm  btn-primary me-3 ${r.id} `" style="display: none;"
                                        @click="editPerItem(r.id)">Update</button>
                                    <button :class="` btn btn-sm btn-outline-danger ${r.id}td `"
                                        @click="deletePerItem(r.id)">Delete</button>
                                    <button :class="` btn btn-sm btn-danger ${r.id} `" style="display: none;"
                                        @click="closePerItem(r.id)">Close</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn text-white  bg-danger" @click="removeItem(rn.name)">Remove {{
                        rn.name
                    }}</button>
                </div>
            </div>
        </div>
    </div>
</template>
<style>
.modal-body::-webkit-scrollbar {
    display: none;
}
</style>
