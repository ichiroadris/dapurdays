<template>
    <div class="relative bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div
                class="flex justify-between items-center border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10"
            >
                <div class="flex justify-start lg:w-0 lg:flex-1">
                    <inertia-link href="/">
                        <span class="sr-only">Workflow</span>
                        <img
                            class="h-14  -my-3 w-auto sm:h-15 rounded-full"
                            src="/img/logo.jpg"
                            alt=""
                        />
                    </inertia-link>
                </div>
                <div class="-mr-2 -my-2 md:hidden">
                    <button
                        type="button"
                        class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                    >
                        <span class="sr-only">Open menu</span>
                        <!-- Heroicon name: menu -->
                        <svg
                            class="h-6 w-6"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            aria-hidden="true"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"
                            />
                        </svg>
                    </button>
                </div>
                <nav class="hidden md:flex space-x-10">
                    <a
                        href="#"
                        class="text-base font-medium text-gray-500 hover:text-gray-900"
                    >
                        Cakes
                    </a>
                    <div class="relative">
                        <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
                        <button
                            @click="showCategory = !showCategory"
                            type="button"
                            class="group bg-white rounded-md text-gray-500 inline-flex items-center text-base font-medium hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        >
                            <span>Cakes Category</span>
                            <!--
              Heroicon name: chevron-down

              Item active: "text-gray-600", Item inactive: "text-gray-400"
            -->
                            <svg
                                class="ml-2 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                        </button>
                        <transition
                            enter-active-class="transition ease-out duration-200"
                            enter-class="opacity-0 translate-y-1"
                            enter-to-class="opacity-100 translate-y-0"
                            leave-active-class="transition ease-in duration-150"
                            leave-class="opacity-100 translate-y-0"
                            leave-to-class="opacity-0 translate-y-1"
                        >
                            <div
                                v-show="showCategory"
                                class="absolute z-10 -ml-4 mt-3 transform px-2 w-screen max-w-md sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2"
                            >
                                <div
                                    class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden"
                                >
                                    <div
                                        class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8"
                                    >
                                        <a
                                            href="#"
                                            class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50"
                                        >
                                            <div class="">
                                                <p
                                                    class="text-base font-medium text-gray-900"
                                                >
                                                    Brownies
                                                </p>
                                            </div>
                                        </a>
                                        <a
                                            href="#"
                                            class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50"
                                        >
                                            <div class="">
                                                <p
                                                    class="text-base font-medium text-gray-900"
                                                >
                                                    Cakes
                                                </p>
                                            </div> </a
                                        ><a
                                            href="#"
                                            class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50"
                                        >
                                            <div class="">
                                                <p
                                                    class="text-base font-medium text-gray-900"
                                                >
                                                    Cheesecakes
                                                </p>
                                            </div> </a
                                        ><a
                                            href="#"
                                            class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50"
                                        >
                                            <div class="">
                                                <p
                                                    class="text-base font-medium text-gray-900"
                                                >
                                                    Ice Cream Cakes
                                                </p>
                                            </div> </a
                                        ><a
                                            href="#"
                                            class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50"
                                        >
                                            <div class="">
                                                <p
                                                    class="text-base font-medium text-gray-900"
                                                >
                                                    Cookies
                                                </p>
                                            </div> </a
                                        ><a
                                            href="#"
                                            class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50"
                                        >
                                            <div class="">
                                                <p
                                                    class="text-base font-medium text-gray-900"
                                                >
                                                    Cupcakes
                                                </p>
                                            </div> </a
                                        ><a
                                            href="#"
                                            class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50"
                                        >
                                            <div class="">
                                                <p
                                                    class="text-base font-medium text-gray-900"
                                                >
                                                    Mille Crepe
                                                </p>
                                            </div> </a
                                        ><a
                                            href="#"
                                            class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50"
                                        >
                                            <div class="">
                                                <p
                                                    class="text-base font-medium text-gray-900"
                                                >
                                                    Vegan
                                                </p>
                                            </div> </a
                                        ><a
                                            href="#"
                                            class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50"
                                        >
                                            <div class="">
                                                <p
                                                    class="text-base font-medium text-gray-900"
                                                >
                                                    Unicorn Cakes
                                                </p>
                                            </div> </a
                                        ><a
                                            href="#"
                                            class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50"
                                        >
                                            <div class="">
                                                <p
                                                    class="text-base font-medium text-gray-900"
                                                >
                                                    Bundles
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </transition>
                    </div>

                    <a
                        href="/about"
                        class="text-base font-medium text-gray-500 hover:text-gray-900"
                    >
                        About Us
                    </a>
                </nav>
                <!-- <div
                    class="hidden md:flex items-center justify-end md:flex-1 lg:w-0"
                >
                    <a
                        href="/login"
                        class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900"
                    >
                        Sign in
                    </a>
                    <a
                        href="/register"
                        class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700"
                    >
                        Sign up
                    </a>
                </div> -->
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <div class="ml-3 relative">
                        <jet-dropdown align="right" width="48">
                            <template #trigger>
                                <button
                                    v-if="$page.jetstream.managesProfilePhotos"
                                    class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out"
                                >
                                    <img
                                        class="h-8 w-8 rounded-full object-cover"
                                        :src="$page.user.profile_photo_url"
                                        :alt="$page.user.name"
                                    />
                                </button>

                                <button
                                    v-else
                                    class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out"
                                >
                                    <div>{{ $page.user.name }}</div>

                                    <div class="ml-1">
                                        <svg
                                            class="fill-current h-4 w-4"
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd"
                                            />
                                        </svg>
                                    </div>
                                </button>
                            </template>

                            <template #content>
                                <!-- Account Management -->
                                <div
                                    class="block px-4 py-2 text-xs text-gray-400"
                                >
                                    Manage Account
                                </div>

                                <jet-dropdown-link
                                    :href="route('profile.show')"
                                >
                                    Profile
                                </jet-dropdown-link>

                                <jet-dropdown-link
                                    :href="route('api-tokens.index')"
                                    v-if="$page.jetstream.hasApiFeatures"
                                >
                                    API Tokens
                                </jet-dropdown-link>

                                <div class="border-t border-gray-100"></div>

                                <!-- Team Management -->
                                <template
                                    v-if="$page.jetstream.hasTeamFeatures"
                                >
                                    <div
                                        class="block px-4 py-2 text-xs text-gray-400"
                                    >
                                        Manage Team
                                    </div>

                                    <!-- Team Settings -->
                                    <jet-dropdown-link
                                        :href="
                                            route(
                                                'teams.show',
                                                $page.user.current_team
                                            )
                                        "
                                    >
                                        Team Settings
                                    </jet-dropdown-link>

                                    <jet-dropdown-link
                                        :href="route('teams.create')"
                                        v-if="$page.jetstream.canCreateTeams"
                                    >
                                        Create New Team
                                    </jet-dropdown-link>

                                    <div class="border-t border-gray-100"></div>

                                    <!-- Team Switcher -->
                                    <div
                                        class="block px-4 py-2 text-xs text-gray-400"
                                    >
                                        Switch Teams
                                    </div>

                                    <template
                                        v-for="team in $page.user.all_teams"
                                    >
                                        <form
                                            @submit.prevent="switchToTeam(team)"
                                            :key="team.id"
                                        >
                                            <jet-dropdown-link as="button">
                                                <div class="flex items-center">
                                                    <svg
                                                        v-if="
                                                            team.id ==
                                                                $page.user
                                                                    .current_team_id
                                                        "
                                                        class="mr-2 h-5 w-5 text-green-400"
                                                        fill="none"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="2"
                                                        stroke="currentColor"
                                                        viewBox="0 0 24 24"
                                                    >
                                                        <path
                                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                                                        ></path>
                                                    </svg>
                                                    <div>{{ team.name }}</div>
                                                </div>
                                            </jet-dropdown-link>
                                        </form>
                                    </template>

                                    <div class="border-t border-gray-100"></div>
                                </template>

                                <!-- Authentication -->
                                <form @submit.prevent="logout">
                                    <jet-dropdown-link as="button">
                                        Logout
                                    </jet-dropdown-link>
                                </form>
                            </template>
                        </jet-dropdown>
                    </div>
                </div>
            </div>
        </div>

        <!--
    Mobile menu, show/hide based on mobile menu state.

    Entering: "duration-200 ease-out"
      From: "opacity-0 scale-95"
      To: "opacity-100 scale-100"
    Leaving: "duration-100 ease-in"
      From: "opacity-100 scale-100"
      To: "opacity-0 scale-95"
  -->
        <div
            class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden"
        >
            <div
                class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50"
            >
                <div class="pt-5 pb-6 px-5">
                    <div class="flex items-center justify-between">
                        <div>
                            <img
                                class="h-8 w-auto"
                                src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg"
                                alt="Workflow"
                            />
                        </div>
                        <div class="-mr-2">
                            <button
                                type="button"
                                class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                            >
                                <span class="sr-only">Close menu</span>
                                <!-- Heroicon name: x -->
                                <svg
                                    class="h-6 w-6"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    aria-hidden="true"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"
                                    />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="mt-6">
                        <nav class="grid gap-y-8">
                            <a
                                href="#"
                                class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50"
                            >
                                <!-- Heroicon name: chart-bar -->
                                <svg
                                    class="flex-shrink-0 h-6 w-6 text-indigo-600"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    aria-hidden="true"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"
                                    />
                                </svg>
                                <span
                                    class="ml-3 text-base font-medium text-gray-900"
                                >
                                    Analytics
                                </span>
                            </a>

                            <a
                                href="#"
                                class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50"
                            >
                                <!-- Heroicon name: cursor-click -->
                                <svg
                                    class="flex-shrink-0 h-6 w-6 text-indigo-600"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    aria-hidden="true"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"
                                    />
                                </svg>
                                <span
                                    class="ml-3 text-base font-medium text-gray-900"
                                >
                                    Engagement
                                </span>
                            </a>

                            <a
                                href="#"
                                class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50"
                            >
                                <!-- Heroicon name: shield-check -->
                                <svg
                                    class="flex-shrink-0 h-6 w-6 text-indigo-600"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    aria-hidden="true"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"
                                    />
                                </svg>
                                <span
                                    class="ml-3 text-base font-medium text-gray-900"
                                >
                                    Security
                                </span>
                            </a>

                            <a
                                href="#"
                                class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50"
                            >
                                <!-- Heroicon name: view-grid -->
                                <svg
                                    class="flex-shrink-0 h-6 w-6 text-indigo-600"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    aria-hidden="true"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"
                                    />
                                </svg>
                                <span
                                    class="ml-3 text-base font-medium text-gray-900"
                                >
                                    Integrations
                                </span>
                            </a>

                            <a
                                href="#"
                                class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50"
                            >
                                <!-- Heroicon name: refresh -->
                                <svg
                                    class="flex-shrink-0 h-6 w-6 text-indigo-600"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    aria-hidden="true"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"
                                    />
                                </svg>
                                <span
                                    class="ml-3 text-base font-medium text-gray-900"
                                >
                                    Automations
                                </span>
                            </a>
                        </nav>
                    </div>
                </div>
                <div class="py-6 px-5 space-y-6">
                    <div class="grid grid-cols-2 gap-y-4 gap-x-8">
                        <a
                            href="#"
                            class="text-base font-medium text-gray-900 hover:text-gray-700"
                        >
                            Pricing
                        </a>

                        <a
                            href="#"
                            class="text-base font-medium text-gray-900 hover:text-gray-700"
                        >
                            Docs
                        </a>

                        <a
                            href="#"
                            class="text-base font-medium text-gray-900 hover:text-gray-700"
                        >
                            Enterprise
                        </a>

                        <a
                            href="#"
                            class="text-base font-medium text-gray-900 hover:text-gray-700"
                        >
                            Blog
                        </a>

                        <a
                            href="#"
                            class="text-base font-medium text-gray-900 hover:text-gray-700"
                        >
                            Help Center
                        </a>

                        <a
                            href="#"
                            class="text-base font-medium text-gray-900 hover:text-gray-700"
                        >
                            Guides
                        </a>

                        <a
                            href="#"
                            class="text-base font-medium text-gray-900 hover:text-gray-700"
                        >
                            Security
                        </a>

                        <a
                            href="#"
                            class="text-base font-medium text-gray-900 hover:text-gray-700"
                        >
                            Events
                        </a>
                    </div>
                    <div>
                        <a
                            href="#"
                            class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700"
                        >
                            Sign up
                        </a>
                        <p
                            class="mt-6 text-center text-base font-medium text-gray-500"
                        >
                            Existing customer?
                            <a
                                href="#"
                                class="text-indigo-600 hover:text-indigo-500"
                            >
                                Sign in
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { directives as clickaway } from "vue-clickaway";
export default {
    directives: { onClickaway: clickaway },
    data() {
        return {
            showCategory: false
        };
    }
};
</script>

<style lang="scss" scoped></style>
