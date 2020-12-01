<template>
    <div>
        <form action="/admin/users/create" method="POST">
            <div x-show.transition.in.duration.200ms.opacity.out.duration.300ms.opacity="askOpen"
                x-on:click.away="askOpen = false" class="fixed z-40 inset-0 overflow-y-auto">
                <div class="flex justify-center items-center pt-4 px-4 min-h-screen">
                    <div class="fixed inset-0 transition-opacity" @click="showProduct = false">
                        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                    </div>
                    <div class=" bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:w-full md:w-2/3"
                        role="dialog" aria-modal="true" aria-labelledby="modal-headline"
                        x-show.transition.in.duration.200ms.opacity.scale.100.out.duration.300ms.opacity.scale.95="askOpen">
                        <div class="bg-white px-4 pt-4 pb-3 sm:p-6 sm:pb-4">
                            <div class="mb-3">
                                <h3 class="text-xl font-semibold text-gray-700 mb-1">Add new Menu</h3>
                                <p class="text-gray-500">Add cake and other menu for dapurdays here.
                                </p>
                            </div>
                            <div class="rounded-md">
                                <div class="grid grid-cols-12 gap-2">
                                    <div class="col-span-9">
                                        <label for="name" class=" text-sm font-bold">Name</label>
                                        <input aria-label="name address" name="name" type="text" required
                                            autocomplete="name" autofocus
                                            class=" appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5 form-control @error('name') is-invalid @enderror"
                                            id="name">


                                    </div>
                                    <div class="col-span-3">
                                        <h4 class="text-sm font-bold">Type</h4>
                                        <div class="relative ">
                                            <select
                                                class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal"
                                                name="role" id="role">
                                                <option value="2">Admin</option>
                                                <option value="3">Manager</option>
                                            </select>
                                            <div
                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                <svg class="fill-current h-4 w-4"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path
                                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div>
                                    <label for="email" class=" text-sm font-bold">Email address</label>
                                    <input aria-label="Email address" name="email" type="email" required
                                        autocomplete="email" autofocus
                                        class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5 form-control @error('email') is-invalid @enderror"
                                        id="email">


                                </div>
                                <br>
                                <div class="">
                                    <label for="password" class=" text-sm font-bold">Password</label>
                                    <input aria-label="Password" name="password" type="password" required
                                        id="password" autocomplete="new-password"
                                        class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5 form-control @error('password') is-invalid @enderror">


                                </div>
                                <br>
                                <div>
                                    <label for="password-confirm" class=" text-sm font-bold">Confirm
                                        Password</label>
                                    <input aria-label="Email address" name="password_confirmation"
                                        type="password" required autocomplete="new-password" autofocus
                                        class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5 form-control @error('password') is-invalid @enderror"
                                        id="password-confirm">
                                </div>
                                <br>
                            </div>

                        </div>
                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">

                            <div class="w-1/2 flex-row-reverse flex">
                                <span class="mb-2 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto ml-2">
                                    <button type="submit"
                                        class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-yellow-300 text-base font-medium text-black shadow-sm focus:outline-none  hover:bg-yellow-300 hover:shadow-outline-yellow focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                        Continue
                                    </button>
                                </span>
                                <span class="mb-2 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                                    <button type="button"
                                        class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                                        x-on:click="askOpen = false">
                                        Cancel
                                    </button>
                                </span>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </form>
    </div>
</template>

<script>
export default {};
</script>

<style lang="scss" scoped></style>
