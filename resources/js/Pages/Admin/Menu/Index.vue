<template>
    <dashboard-layout>
        <template #content>
            <div class="container px-6 mx-auto grid">
                <div class="flex items-center justify-between">
                    <h2
                        class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
                    >
                        Products
                    </h2>
                    <button
                        @click="showProduct = !showProduct"
                        class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue"
                    >
                        <svg
                            class="w-4 h-4 mr-2 -ml-1"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6"
                            ></path>
                        </svg>
                        <span>Add Product</span>
                    </button>
                    <transition>
                        <div
                            v-show="showProduct"
                            class="fixed z-30 inset-0 overflow-y-auto"
                        >
                            <form
                                action="/admin/users/create"
                                method="POST"
                                @submit.prevent="addMenu"
                                enctype="multipart/form-data"
                            >
                                <div class="fixed z-40 inset-0 overflow-y-auto">
                                    <div
                                        class="flex justify-center items-center pt-4 px-4 min-h-screen"
                                    >
                                        <transition
                                            enter-active-class="ease-out duration-300"
                                            enter-class="opacity-0"
                                            enter-to-class="opacity-100"
                                            leave-active-class="ease-in duration-200"
                                            leave-class="opacity-100"
                                            leave-to-class="opacity-0"
                                        >
                                            <div
                                                v-show="showProduct"
                                                class="fixed inset-0 transition-opacity"
                                                @click="showProduct = false"
                                            >
                                                <div
                                                    class="absolute inset-0 bg-gray-500 opacity-75"
                                                ></div>
                                            </div>
                                        </transition>
                                        <transition
                                            enter-active-class="ease-out duration-300"
                                            enter-class="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                            enter-to-class="opacity-100 translate-y-0 sm:scale-100"
                                            leave-active-class="ease-in duration-200"
                                            leave-class="opacity-100 translate-y-0 sm:scale-100"
                                            leave-to-class="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                        >
                                            <div
                                                class=" bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:w-full md:w-2/3"
                                                role="dialog"
                                                aria-modal="true"
                                                aria-labelledby="modal-headline"
                                                v-show="showProduct"
                                            >
                                                <div
                                                    class="bg-white px-4 pt-4 pb-3 sm:p-6 sm:pb-4"
                                                >
                                                    <div class="mb-3">
                                                        <h3
                                                            class="text-xl font-semibold text-gray-700 mb-1"
                                                        >
                                                            Add new Menu
                                                        </h3>
                                                        <p
                                                            class="text-gray-500"
                                                        >
                                                            Add cake and other
                                                            menu for dapurdays
                                                            here.
                                                        </p>
                                                    </div>
                                                    <div class="rounded-md">
                                                        <div class="">
                                                            <div
                                                                class="grid grid-cols-12 gap-2"
                                                            >
                                                                <div
                                                                    class="col-span-9"
                                                                >
                                                                    <label
                                                                        for="name"
                                                                        class=" text-sm font-bold"
                                                                        >Name</label
                                                                    >
                                                                    <input
                                                                        aria-label="name address"
                                                                        name="name"
                                                                        type="text"
                                                                        v-model="
                                                                            form.name
                                                                        "
                                                                        required
                                                                        autofocus
                                                                        class=" appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5 form-control @error('name') is-invalid @enderror"
                                                                        id="name"
                                                                    />
                                                                </div>
                                                                <div
                                                                    class="flex flex-col col-span-3"
                                                                >
                                                                    <label
                                                                        for="category"
                                                                        class=" text-sm font-bold"
                                                                        >Category</label
                                                                    >
                                                                    <select
                                                                        name="category"
                                                                        v-model="
                                                                            form.category
                                                                        "
                                                                        id="category"
                                                                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                                                    >
                                                                        <option
                                                                            value="brownies"
                                                                            >Brownies</option
                                                                        >
                                                                        <option
                                                                            value="cakes"
                                                                            >Cakes</option
                                                                        >
                                                                        <option
                                                                            value="cheesecake"
                                                                            >Cheesecake</option
                                                                        >
                                                                        <option
                                                                            value="cookies"
                                                                            >Cookies</option
                                                                        >
                                                                        <option
                                                                            value="cupcakes"
                                                                            >Cupcakes</option
                                                                        >
                                                                        <option
                                                                            value="millecrepe"
                                                                            >MilleCrepe</option
                                                                        >
                                                                        <option
                                                                            value="vegan"
                                                                            >Vegan</option
                                                                        >
                                                                        <option
                                                                            value="unicorn"
                                                                            >Unicorn</option
                                                                        >
                                                                        <option
                                                                            value="bundles"
                                                                            >Bundles</option
                                                                        >
                                                                        <option
                                                                            value="icecreamcakes"
                                                                            >Ice
                                                                            Cream
                                                                            Cakes</option
                                                                        >
                                                                        <option
                                                                            value="others"
                                                                            >Others</option
                                                                        >
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br />
                                                        <div>
                                                            <label
                                                                for="description"
                                                                class=" text-sm font-bold"
                                                                >Description</label
                                                            >
                                                            <textarea
                                                                name="description"
                                                                id="description"
                                                                v-model="
                                                                    form.description
                                                                "
                                                                required
                                                                cols="30"
                                                                rows="10"
                                                                class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5 form-control @error('email') is-invalid @enderror"
                                                            ></textarea>
                                                        </div>
                                                        <br />
                                                        <div
                                                            class="grid grid-cols-12 gap-2"
                                                        >
                                                            <div
                                                                class="col-span-8"
                                                            >
                                                                <label
                                                                    for="price"
                                                                    class=" text-sm font-bold"
                                                                    >Price</label
                                                                >
                                                                <div
                                                                    class="flex items-center"
                                                                >
                                                                    <span
                                                                        class="mr-2"
                                                                        >RM</span
                                                                    >
                                                                    <input
                                                                        aria-label="Password"
                                                                        name="price"
                                                                        type="number"
                                                                        v-model="
                                                                            form.price
                                                                        "
                                                                        required
                                                                        id="price"
                                                                        class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5 form-control "
                                                                    />
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <label
                                                                    for="image"
                                                                    class=" text-sm font-bold"
                                                                    >Image</label
                                                                >
                                                                <input
                                                                    type="file"
                                                                    name="image"
                                                                    @change="
                                                                        selectFile
                                                                    "
                                                                    id="image"
                                                                    required
                                                                />
                                                            </div>
                                                        </div>
                                                        <br />
                                                    </div>
                                                </div>
                                                <div
                                                    class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse"
                                                >
                                                    <div
                                                        class="w-1/2 flex-row-reverse flex"
                                                    >
                                                        <span
                                                            class="mb-2 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto ml-2"
                                                        >
                                                            <button
                                                                type="submit"
                                                                class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-yellow-300 text-base font-medium text-black shadow-sm focus:outline-none  hover:bg-yellow-300 hover:shadow-outline-yellow focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                                                            >
                                                                Continue
                                                            </button>
                                                        </span>
                                                        <span
                                                            class="mb-2 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto"
                                                        >
                                                            <button
                                                                type="button"
                                                                class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                                                                @click="
                                                                    showProduct = false
                                                                "
                                                            >
                                                                Cancel
                                                            </button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </transition>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </transition>
                </div>
                <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
                    <div class="w-full overflow-x-auto">
                        <table class="w-full whitespace-no-wrap">
                            <thead>
                                <tr
                                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                                >
                                    <th class="px-4 py-3">Name</th>
                                    <th class="px-4 py-3">Price</th>
                                    <th class="px-4 py-3">Category</th>
                                    <th class="px-4 py-3">Date</th>
                                </tr>
                            </thead>
                            <tbody
                                class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                            >
                                <tr
                                    v-for="menu in menus"
                                    :key="menu.index"
                                    class="text-gray-700 dark:text-gray-400"
                                >
                                    <td class="px-4 py-3">
                                        <div class="flex items-center text-sm">
                                            <!-- Avatar with inset shadow -->
                                            <div
                                                class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                                            >
                                                <img
                                                    class="object-cover w-full h-full rounded-full"
                                                    :src="menu.image_url"
                                                    alt=""
                                                    loading="lazy"
                                                />
                                                <div
                                                    class="absolute inset-0 rounded-full shadow-inner"
                                                    aria-hidden="true"
                                                ></div>
                                            </div>
                                            <div>
                                                <p class="font-semibold">
                                                    {{menu.cake_name}}
                                                </p>
                                                <!-- <p
                                                    class="text-xs text-gray-600 dark:text-gray-400"
                                                >
                                                    10x Developer
                                                </p> -->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        RM {{menu.cake_price.toFixed(2)}}
                                    </td>
                                    <td class="px-4 py-3 text-xs">
                                        <span
                                            class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                                        >
                                            {{menu.cake_type.charAt(0).toUpperCase() + menu.cake_type.slice(1)}}
                                        </span>
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{$luxon(menu.created_at)}}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div
                        class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
                    >
                        <span class="flex items-center col-span-3">
                            Showing 21-30 of 100
                        </span>
                        <span class="col-span-2"></span>
                        <!-- Pagination -->
                        <span
                            class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end"
                        >
                            <nav aria-label="Table navigation">
                                <ul class="inline-flex items-center">
                                    <li>
                                        <button
                                            class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                                            aria-label="Previous"
                                        >
                                            <svg
                                                aria-hidden="true"
                                                class="w-4 h-4 fill-current"
                                                viewBox="0 0 20 20"
                                            >
                                                <path
                                                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"
                                                    fill-rule="evenodd"
                                                ></path>
                                            </svg>
                                        </button>
                                    </li>
                                    <li>
                                        <button
                                            class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                                        >
                                            1
                                        </button>
                                    </li>
                                    <li>
                                        <button
                                            class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                                        >
                                            2
                                        </button>
                                    </li>
                                    <li>
                                        <button
                                            class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple"
                                        >
                                            3
                                        </button>
                                    </li>
                                    <li>
                                        <button
                                            class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                                        >
                                            4
                                        </button>
                                    </li>
                                    <li>
                                        <span class="px-3 py-1">...</span>
                                    </li>
                                    <li>
                                        <button
                                            class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                                        >
                                            8
                                        </button>
                                    </li>
                                    <li>
                                        <button
                                            class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                                        >
                                            9
                                        </button>
                                    </li>
                                    <li>
                                        <button
                                            class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                                            aria-label="Next"
                                        >
                                            <svg
                                                class="w-4 h-4 fill-current"
                                                aria-hidden="true"
                                                viewBox="0 0 20 20"
                                            >
                                                <path
                                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                    clip-rule="evenodd"
                                                    fill-rule="evenodd"
                                                ></path>
                                            </svg>
                                        </button>
                                    </li>
                                </ul>
                            </nav>
                        </span>
                    </div>
                </div>
            </div>
        </template>
    </dashboard-layout>
</template>

<script>
import DashboardLayout from "../../../Layouts/DashboardLayout.vue";
import MenuCreate from "../../../Pages/Admin/Menu/Create";
// import Welcome from '@/Jetstream/Welcome'

export default {
    components: { DashboardLayout, MenuCreate },
    props: ["menus"],
    data() {
        return {
            showProduct: false,
            form: {
                name: null,
                description: null,
                category: null,
                price: null,
                image: null
            }
        };
    },
    methods: {
        addMenu() {
            var data = new FormData();
            data.append("name", this.form.name || "");
            data.append("description", this.form.description || "");
            data.append("category", this.form.category || "");
            data.append("price", this.form.price || "");
            data.append("image", this.form.image || "");
            this.$inertia.post("/admin/create/menu", data);
            this.showProduct = false;
            this.form = {
                name: null,
                description: null,
                category: null,
                price: null,
                image: null
            };
        },
        selectFile(event) {
            this.form.image = event.target.files[0];
        }
    }
};
</script>
