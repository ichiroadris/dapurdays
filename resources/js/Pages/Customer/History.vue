<template>
    <div>
        <navbar></navbar>
        <div class="max-w-7xl mx-auto mt-5">
            <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                    <table class="w-full whitespace-no-wrap">
                        <thead>
                            <tr
                                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                            >
                                <th class="px-4 py-3">Cake name</th>
                                <th class="px-4 py-3">Amount</th>
                                <th class="px-4 py-3">Status</th>
                                <th class="px-4 py-3">Date</th>
                            </tr>
                        </thead>
                        <tbody
                            class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                        >
                            <tr
                                v-for="order in orders"
                                :key="order.index"
                                class="text-gray-700 dark:text-gray-400"
                            >
                                <td class="px-4 py-3">
                                    <div class="flex items-center text-sm">
                                        <div>
                                            <p class="font-semibold">
                                                {{order.cake_name}}
                                            </p>
                                            <p
                                                class="text-xs text-gray-600 dark:text-gray-400"
                                            >
                                                {{order.name}}
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    RM {{order.total_cost.toFixed(2)}}
                                </td>
                                <td class="px-4 py-3 text-xs">
                                    <span v-if="order.status == 0"
                                        class="px-2 py-1 font-semibold leading-tight text-blue-700 bg-blue-100 rounded-full dark:bg-blue-700 dark:text-blue-100"
                                    >
                                        Cooking
                                    </span>
                                    <span v-else-if="order.status == 1"
                                        class="px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full dark:bg-yellow-700 dark:text-yellow-100"
                                    >
                                        Delivering
                                    </span>
                                    <span v-else-if="order.status == 2"
                                        class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                                    >
                                        Completed
                                    </span>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{$luxon(order.created_at)}}
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
    </div>
</template>

<script>
import Navbar from "../../Shared/Navbar";
export default {
    props: ["orders"],
    components: {
        Navbar
    }
};
</script>

<style lang="scss" scoped></style>
