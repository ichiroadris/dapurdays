<template>
    <div class="bg-gray-100 min-h-screen">
        <div class="">
            <navbar></navbar>
            <div class="flex px-15 py-10 justify-center bg-indigo-200">
                <div>
                    <h3>Order Lovely Cakes For Any Occasion</h3>
                    <p>
                        Choose from our wide variety of delicious, fresh cakes.
                        All ingredients used are 100% halal. Get Free Same-Day
                        Delivery if you order before 3:00pm on all orders.
                    </p>
                </div>
            </div>
            <div class="grid grid-cols-4 gap-4 container mx-auto py-8">
                <div
                    class="bg-gray-200 shadow rounded-md p-4"
                    v-for="menu in menus.data"
                    :key="menu.index"
                >
                    <img :src="menu.image_url" class="rounded-md " alt="" />
                    <div class="my-3">
                        <inertia-link :href="'/menu/'+menu.id" class="font-bold text-xl">{{ menu.cake_name }}</inertia-link>
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
    </div>
</template>

<script>
import Navbar from "../Shared/Navbar";
export default {
    components: { Navbar },
    props: ["menus"]
};
</script>

<style lang="scss" scoped></style>
