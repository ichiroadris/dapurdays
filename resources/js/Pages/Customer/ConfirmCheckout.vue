<template>
    <div>
        <navbar></navbar>
        <div class="max-w-7xl mx-auto">
            <div class="flex justify-center">
                <div>
                    <h2 class="font-bold text-2xl">Purchase Confirmation</h2>
                    <div class="flex">
                        <img :src="menu.image_url" class="mr-2 h-20" alt="" />
                        <div class="">
                            <p class="font-semibold">{{ menu.cake_name }}</p>
                            <p>RM {{ menu.cake_price.toFixed(2) }}</p>
                        </div>
                    </div>
                    <p>
                        <span class="font-medium">Name:</span> {{ data.name }}
                    </p>
                    <p>
                        <span class="font-medium">Address:</span>
                        {{ data.address }}
                    </p>
                    <p>
                        <span class="font-medium">Phone Number:</span>
                        {{ data.phone_number }}
                    </p>
                    <p>
                        <span class="font-medium">Payment Method:</span>
                        {{ data.payment_method }}
                    </p>
                </div>
            </div>
            <div class="flex justify-center w-full my-2">
                <button
                    @click="confirm"
                    class="px-4 py-2 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                >
                    Confirm Purchase
                </button>
            </div>
        </div>
    </div>
</template>

<script>
import Navbar from "../../Shared/Navbar";
export default {
    props: ["data", "menu"],
    components: {
        Navbar
    },
    methods: {
        confirm() {
            this.$inertia.post("/user/checkout/create", this.data);
        }
    }
};
</script>

<style lang="scss" scoped></style>
