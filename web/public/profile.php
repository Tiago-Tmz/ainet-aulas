<?php
$pageSubTitle = 'Profile';
include('template.php');
?>

        <main>
            <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
                <div class="flex flex-col space-y-6">
                    <div class="p-4 sm:p-8 bg-white dark:bg-gray-900 shadow sm:rounded-lg">
                        <div class="max-w-xl">
                            <section>
                                <header>
                                    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                        Profile Information
                                    </h2>

                                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-300">
                                        Update your account's profile information and email address.
                                    </p>
                                </header>
                                <form method="post" action="#" class="mt-6 space-y-6">
                                    <div>
                                        <label class="block font-medium text-sm text-gray-700 dark:text-gray-300" for="name">
                                            Name
                                        </label>
                                        <input class="bg-white dark:bg-gray-900 text-black dark:text-gray-50
                                                        border-gray-300 dark:border-gray-700
                                                        focus:border-indigo-500 dark:focus:border-indigo-400 focus:ring-indigo-500 dark:focus:ring-indigo-400
                                                        rounded-md shadow-sm mt-1 block w-full" id="name" name="name" type="text"
                                            value="João Miguel da Silva Pereira Antunes" required="required"
                                            autofocus="autofocus">
                                    </div>
                                    <div>
                                        <label class="block font-medium text-sm text-gray-700 dark:text-gray-300" for="email">
                                            Email
                                        </label>
                                        <input class="bg-white dark:bg-gray-900 text-black dark:text-gray-50
                                                        border-gray-300 dark:border-gray-700
                                                        focus:border-indigo-500 dark:focus:border-indigo-400 focus:ring-indigo-500 dark:focus:ring-indigo-400
                                                        rounded-md shadow-sm mt-1 block w-full" id="email" name="email" type="email"
                                            value="j.antunes@mail.pt" required="required">
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <button type="submit" class="inline-flex items-center px-4 py-2 
                                                        bg-gray-800 dark:bg-gray-200
                                                        border border-transparent rounded-md
                                                        font-semibold text-xs text-white dark:text-gray-900 uppercase
                                                        tracking-widest hover:bg-gray-700 dark:hover:bg-gray-300 focus:bg-gray-700 dark:focus:bg-gray-300 
                                                        active:bg-gray-900 dark:active:bg-gray-100
                                                        focus:outline-none focus:ring-2
                                                        focus:ring-indigo-500 dark:focus:ring-indigo-400 focus:ring-offset-2
                                                        transition ease-in-out duration-150">
                                            Save
                                        </button>
                                    </div>
                                </form>
                            </section>
                        </div>
                    </div>

                    <div class="p-4 sm:p-8 bg-white dark:bg-gray-900 shadow sm:rounded-lg">
                        <div class="max-w-xl">
                            <section class="space-y-6">
                                <header>
                                    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                        Delete Account
                                    </h2>
                                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-300">
                                        Once your account is deleted, all of its resources and data will be permanently deleted.
                                        Before deleting your account, please download any data or information that you wish to
                                        retain.
                                    </p>
                                </header>
                                <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-600
                                                border border-transparent rounded-md font-semibold
                                                text-xs text-white uppercase tracking-widest
                                                hover:bg-red-500 active:bg-red-700
                                                focus:outline-none focus:ring-2
                                                focus:ring-red-500 focus:ring-offset-2
                                                transition ease-in-out duration-150">
                                    Delete Account
                                </button>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>