<script setup>
import SideBar from '../SideBar.vue';
import Nav from '../Nav.vue';
const data = defineProps({
    rewards: Object,
    rewards_name: Object,
})
</script>

<template>
    <div class=" d-flex ">
        <SideBar />
        <div class="col">
            <Nav></Nav>
            <div class=" container ">
                <div class=" d-flex mb-4 pt-3 border-bottom ">
                    <h4>Rewards</h4>
                    <div class="col text-end">
                        <small class=" text-muted " style="cursor: pointer;"></small>
                    </div>
                </div>
                <div class=" m-auto " style="width: 80%;">
                    <table class="table table-hover rounded-5 ">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody style=" font-size: small;">
                            <div class="accordion-item" v-for="rn in rewards_name" :key="rn.name">
                                <div class="accordion-header border-bottom d-flex py-3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        :data-bs-target="`#${rn.name}`" aria-expanded="false" :aria-controls="`${rn.name}`">
                                        {{ rn.name }}
                                    </button>
                                    <button class="btn" data-bs-toggle="collapse" :data-bs-target="`#${rn.name}`"
                                        aria-expanded="false" :aria-controls="`${rn.name}`">
                                        <small><i class="fa-solid fa-chevron-down text-muted "></i></small>
                                    </button>
                                    <button class="ms-3 btn" title="Edit"><i
                                            class="fa-regular fa-pen-to-square  text-success "></i></button>
                                    <button class=" btn" title="Delete"><i
                                            class="fa-solid fa-trash text-danger "></i></button>

                                </div>
                                <div class=" m-auto w-75 ">
                                    <table :id="`${rn.name}`" class="accordion-collapse collapse table table-hover ">
                                        <thead>
                                            <tr>
                                                <th>Item</th>
                                                <th>Points</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="accordion-body " v-for="r in rewards" :key="r.id">
                                                <td class=" py-1 text-muted" v-if="r.name == rn.name">{{ r.item }}</td>
                                                <td class=" py-1 text-muted" v-if="r.name == rn.name">{{ r.point }}</td>
                                                <td v-if="r.name == rn.name" class=" text-end ">
                                                    <button class="btn btn-sm  btn-outline-success me-4 "><i
                                                            class="fa-regular fa-pen-to-square  "></i>
                                                    </button>
                                                    <button class="btn btn-sm  btn-outline-danger "><i
                                                            class="fa-solid fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>
