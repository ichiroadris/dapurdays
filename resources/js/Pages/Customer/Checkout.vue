<template>
    <div>
        <navbar></navbar>
        <div class="max-w-7xl mx-auto mt-6">
            <h2 class="font-bold text-lg">YOUR CHECKOUT</h2>
            <p>Please make sure all details are correct.</p>
            <hr class="my-4" />
            <div class="flex">
                <img
                    :src="menu.image_url"
                    alt=""
                    class="mr-3 border-gray-600 h-52"
                />
                <div class="flex w-full justify-between">
                    <div class="w-3/4">
                        <h3 class="font-bold text-2xl">{{ menu.cake_name }}</h3>
                        <p>{{ menu.cake_description }}</p>
                    </div>
                    <div class="self-center w-1/4 text-right">
                        <p>RM {{ menu.cake_price.toFixed(2) }}</p>
                    </div>
                </div>
            </div>
            <hr class="my-4" />
            <div>
                <p class="font-semibold">Enter Delivery Information</p>
                <form
                    @submit.prevent="submit"
                    :action="`/menu/${menu.id}/checkout`"
                    class="mt-2 w-3/5"
                >
                    <div class="flex flex-col">
                        <div class="mt-4">
                            <label for="name" class="text-gray-700 "
                                >Recipient Name</label
                            >
                            <input
                                v-model="form.name"
                                name="name"
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="Enter Recipient Name"
                            />
                        </div>
                        <div class="mt-4">
                            <label for="name" class="text-gray-700 "
                                >Address</label
                            >
                            <input
                                v-model="form.address"
                                name="address"
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="Enter Address"
                            />
                        </div>
                        <div class="mt-4">
                            <label for="name" class="text-gray-700 "
                                >Phone Number</label
                            >
                            <input
                                v-model="form.phone_number"
                                name="phone_number"
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="Enter Phone Number"
                            />
                        </div>
                        <label class="block mt-4">
                            <span class="text-gray-700 dark:text-gray-400">
                                Payment Method
                            </span>
                            <select
                                v-model="form.payment_method"
                                name="method"
                                class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                            >
                                <option value="Debit/Credit Card"
                                    >Debit/Credit Card</option
                                >
                                <option value="Cash">Cash</option>
                            </select>
                        </label>
                        <button
                            type="submit"
                            class="mt-7 px-4 py-2 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                        >
                            Checkout
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import Navbar from "../../Shared/Navbar";
export default {
    props: ["menu"],
    components: {
        Navbar
    },
    data() {
        return {
            form: {
                name: null,
                address: null,
                phone_number: null,
                payment_method: null,
                menu: this.menu.id
            }
        };
    },
    methods: {
        submit() {
            this.$inertia.post(`/menu/${this.menu.id}/checkout`, this.form);
        }
    }
};
</script>

<style lang="scss" scoped></style>
