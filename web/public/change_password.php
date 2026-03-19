<?php
$pageSubTitle = 'Change Password';
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
                                        Change Password
                                    </h2>
                                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-300">
                                        Ensure your account is using a long, random password to stay secure.
                                    </p>
                                </header>
                                <form method="post" action="#" class="mt-6 space-y-6">
                                    <div>
                                        <label class="block font-medium text-sm text-gray-700 dark:text-gray-300"
                                            for="update_password_current_password">
                                            Current Password
                                        </label>
                                        <input class="bg-white dark:bg-gray-900 text-black dark:text-gray-50
                                                        border-gray-300 dark:border-gray-700
                                                    focus:border-indigo-500 dark:focus:border-indigo-400 focus:ring-indigo-500 dark:focus:ring-indigo-400
                                                    rounded-md shadow-sm mt-1 block w-full" id="update_password_current_password"
                                            name="current_password" type="password">
                                        <ul class="text-sm text-red-600 dark:text-red-300 space-y-1 mt-2">
                                            <li>First validation error message.</li>
                                            <li>Second validation error message.</li>
                                        </ul>
                                    </div>
                                    <div>
                                        <label class="block font-medium text-sm text-gray-700 dark:text-gray-300"
                                            for="update_password_password">
                                            New Password
                                        </label>
                                        <input class="bg-white dark:bg-gray-900 text-black dark:text-gray-50
                                                            border-gray-300 dark:border-gray-700
                                                            focus:border-indigo-500 dark:focus:border-indigo-400v  focus:ring-indigo-500 dark:focus:ring-indigo-400
                                                            rounded-md shadow-sm mt-1 block w-full" id="update_password_password"
                                            name="password" type="password">
                                    </div>
                                    <div>
                                        <label class="block font-medium text-sm text-gray-700 dark:text-gray-300"
                                            for="update_password_password_confirmation">
                                            Confirm Password
                                        </label>
                                        <input class="bg-white dark:bg-gray-900 text-black dark:text-gray-50
                                                            border-gray-300 dark:border-gray-700
                                                            focus:border-indigo-500 dark:focus:border-indigo-400v  focus:ring-indigo-500 dark:focus:ring-indigo-400
                                                            rounded-md shadow-sm mt-1 block w-full"
                                            id="update_password_password_confirmation" name="password_confirmation"
                                            type="password">
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800
                                                    border border-transparent rounded-md
                                                    font-semibold text-xs text-white uppercase
                                                    tracking-widest hover:bg-gray-700
                                                    transition ease-in-out duration-150">
                                            Save
                                        </button>
                                    </div>
                                </form>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>