<template>
    <div>
        <navbar></navbar>
        <div class="py-6 px-9 flex max-w-7xl mx-auto">
            <div class="mr-7 w-2/6">
                <img :src="menu.image_url" alt="" class="h-80" />
            </div>
            <div class="w-4/5 flex flex-col h-100">
                <div class="flex items-center">
                    <h2 class="text-3xl font-bold mr-5">
                        {{ menu.cake_name }}
                    </h2>
                    <p
                        class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                    >
                        {{ menu.cake_type }}
                    </p>
                </div>
                <div class="flex flex-col justify-between h-full">
                    <p>{{ menu.cake_description }}</p>
                    <div class="flex justify-between items-center">
                        <p class="font-semibold text-2xl">
                            RM {{ menu.cake_price.toFixed(2) }}
                        </p>
                        <inertia-link :href="`/menu/${menu.id}/purchase`"
                            class="px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue"
                        >
                            Purchase
                        </inertia-link>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-4 gap-4 max-w-6xl mx-auto py-16">
            <div
                class="bg-gray-200 shadow rounded-md p-4"
                v-for="menu in menus.data"
                :key="menu.index"
            >
                <img :src="menu.image_url" class="rounded-md " alt="" />
                <div class="my-3">
                    <inertia-link
                        :href="'/menu/' + menu.id"
                        class="font-bold text-xl"
                        >{{ menu.cake_name }}</inertia-link
                    >
                    <div class="flex items-center justify-between">
                        <p>RM {{ menu.cake_price.toFixed(2) }}</p>
                        <span
                            class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:bg-orange-700 dark:text-orange-100"
                        >
                            {{ menu.cake_type }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Navbar from "../Shared/Navbar";
export default {
    components: {
        Navbar
    },
    props: ["menu", "menus"]
};
</script>

<style lang="scss" scoped></style>
