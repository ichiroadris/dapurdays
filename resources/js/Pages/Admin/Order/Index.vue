<template>
    <dashboard-layout>
        <template #content>
            <div class="container px-6 mx-auto grid">
                <h2
                    class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
                >
                    Orders
                </h2>

            </div>
        </template>
    </dashboard-layout>
</template>

<script>
import DashboardLayout from "../../../Layouts/DashboardLayout.vue";
// import Welcome from '@/Jetstream/Welcome'

export default {
    components: { DashboardLayout }
};
</script>
