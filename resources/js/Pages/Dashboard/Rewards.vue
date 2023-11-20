<script setup>
import { router } from '@inertiajs/vue3'
defineProps({
    rewards: Object,
    rewards_name: Object
});

const toRewards = () => {
    router.get('/dashboard/rewards');
}

</script>

<template>
    <div style="height: 300px; width: 30%;" class=" overflow-hiddden shadow  border-1 m-3 px-5">
        <div class=" d-flex mb-1 pt-3">
            <h4>Rewards</h4>
            <div class="col text-end">
                <small class=" text-muted " style="cursor: pointer;" @click="toRewards()">View All</small>
            </div>
        </div>
        <div class=" overflow-y-scroll reward" style="height: 230px;">

            <div class="accordion-item" v-for="rn in rewards_name" :key="rn.name">
                <div class="accordion-header border-bottom d-flex py-3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        :data-bs-target="`#${rn.name}`" aria-expanded="false" :aria-controls="`${rn.name}`">
                        {{ rn.name }}
                    </button>
                    <small><i class="fa-solid fa-chevron-down text-muted " data-bs-toggle="collapse"
                            :data-bs-target="`#${rn.name}`" aria-expanded="false" :aria-controls="`${rn.name}`"></i></small>
                </div>
                <div :id="`${rn.name}`" class="accordion-collapse collapse">
                    <div class="accordion-body " style="list-style-type:circle;" v-for="r in rewards" :key="r.id">
                        <li class=" py-1 text-muted" v-if="r.name == rn.name">{{ r.item }}</li>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>
