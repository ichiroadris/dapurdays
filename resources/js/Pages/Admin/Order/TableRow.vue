<template>
    <tr class="text-gray-700 dark:text-gray-400">
        <td class="px-4 py-3">
            <div class="flex items-center text-sm">
                <div>
                    <p class="font-semibold">
                        {{ lOrder.cake_name }}
                    </p>
                    <p class="text-xs text-gray-600 dark:text-gray-400">
                        {{ lOrder.name }}
                    </p>
                </div>
            </div>
        </td>
        <td class="px-4 py-3 text-sm">RM {{ lOrder.total_cost.toFixed(2) }}</td>
        <td class="px-4 py-3 text-xs">
            <span
                v-if="lOrder.status == 0"
                class="px-2 py-1 font-semibold leading-tight text-blue-700 bg-blue-100 rounded-full dark:bg-blue-700 dark:text-blue-100"
            >
                Cooking
            </span>
            <span
                v-else-if="lOrder.status == 1"
                class="px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full dark:bg-yellow-700 dark:text-yellow-100"
            >
                Delivering
            </span>
            <span
                v-else-if="lOrder.status == 2"
                class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
            >
                Completed
            </span>
        </td>
        <td class="px-4 py-3 text-sm">
            {{ $luxon(lOrder.created_at) }}
        </td>
        <td class="px-4 py-3 text-sm">
            <button @click="completeCake(lOrder)" v-if="lOrder.status == 0">
                <svg
                    class="w-6 h-6 mr-2"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z"
                    ></path>
                </svg>
            </button>
            <button @click="completeDelivering(lOrder)" v-if="order.status == 1">
                <svg
                    class="w-6 h-6"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M5 13l4 4L19 7"
                    ></path>
                </svg>
            </button>
        </td>
    </tr>
</template>

<script>
export default {
    props: ["order"],
    data() {
        return{
            lOrder: {},
        }
    },
    created() {
        this.lOrder = this.order;
    },
    methods: {
        completeCake(status) {
            this.lOrder.status = 1;
            this.$inertia.post('/admin/order/status/completecake', this.lOrder);
        },
        completeDelivering(status) {
            this.lOrder.status = 2;
            this.$inertia.post('/admin/order/status/completedelivering', this.lOrder);
        }
    }
};
</script>

<style lang="scss" scoped></style>
