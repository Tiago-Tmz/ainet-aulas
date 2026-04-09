<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Department of Computer Engineering</title>

    <!-- Styles and JavaScript-->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-800 min-w-0">

        <!-- Navigation Menu -->
        <nav class="bg-white dark:bg-gray-900 border-b
                    border-gray-100 dark:border-gray-800 min-w-0">
            <!-- Navigation Menu Full Container -->
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 min-w-0">
                <!-- Logo + Menu Items + Hamburger -->
                <div class="relative flex flex-col sm:flex-row px-6 sm:px-0 grow
                                    justify-between min-w-0">
                    <!-- Logo -->
                    <div class="shrink-0 -ms-4 block sm:hidden md:block">
                        <a href="{{  route('home') }}">
                            <div class="h-16 w-40 bg-cover bg-logo-light dark:bg-logo-dark"></div>
                        </a>
                    </div>

                    <!-- Menu Items -->
                    <div id="menu" class="grow flex flex-col sm:flex-row items-stretch
                                            invisible h-0 sm:visible sm:h-auto min-w-0">

                        <!-- Menu Item: Introduction -->
                        <x-menu.menu-item
                            href="{{ route('home') }}"
                            :selected="request()->routeIs('home')"
                            text="Introduction"/>

                        <!-- Menu Item: Courses -->
                        <x-menu.menu-item
                            :href="route('courses.index')"
                            :selected="request()->routeIs('courses.*')"
                            text="Courses"/>

                        <!-- Menu Item: Curricula -->
                        <x-menu.submenu-full-width
                            :selectable="true"
                            :selected="false"
                            text="Curricula">
                            <x-menu.submenu-item
                                :href="route('home')"
                                :selectable="true"
                                :selected="true"
                                text="Computer Engineering"/>
                            <x-menu.submenu-item
                                :href="route('home')"
                                :selectable="true"
                                :selected="false"
                                text="Digital Games and Multimedia"/>
                            <x-menu.submenu-item
                                :href="route('home')"
                                :selectable="true"
                                :selected="false"
                                text="Master's in Computer Engineering - Mobile Computing"/>
                            <x-menu.submenu-item
                                :href="route('home')"
                                :selectable="true"
                                :selected="false"
                                text="Master's in Cybersecurity and Computer Forensics"/>
                            <x-menu.submenu-item
                                :href="route('home')"
                                :selectable="true"
                                :selected="false"
                                text="Master's in Data Science"/>
                            <x-menu.submenu-item
                                :href="route('home')"
                                :selectable="true"
                                :selected="false"
                                text="TeSP - Web and Multimedia Development"/>
                            <x-menu.submenu-item
                                :href="route('home')"
                                :selectable="true"
                                :selected="false"
                                text="TeSP - Information System Programming"/>
                            <x-menu.submenu-item
                                :href="route('home')"
                                :selectable="true"
                                :selected="false"
                                text="TeSP - Computer Networks and Systems"/>
                            <x-menu.submenu-item
                                :href="route('home')"
                                :selectable="true"
                                :selected="false"
                                text="TeSP - Cybersecurity and Computer Networks"/>
                            <x-menu.submenu-item
                                :href="route('home')"
                                :selectable="true"
                                :selected="false"
                                text="TeSP - IT Technologies"/>
                        </x-menu.submenu-full-width>


                        <!-- Menu Item: Disciplines -->
                        <x-menu.menu-item
                            text="Disciplines"
                            :href="route('disciplines.index')"
                            :selectable="true"
                            :selected="Route::currentRouteName() == 'disciplines.*'"/>

                        <!-- Menu Item: Teachers -->
                        <x-menu.menu-item
                            text="Teachers"
                            :href="route('home')"
                            :selectable="true"
                            :selected="false"/>

                        <!-- Menu Item: Others -->
                        <x-menu.submenu
                            :selectable="true"
                            :selected="false"
                            text="More">
                            <x-menu.submenu-item
                                text="Students"
                                :href="route('home')"
                                :selectable="true"
                                :selected="false"/>
                            <x-menu.submenu-item
                                text="Administratives"
                                :href="route('home')"
                                :selectable="true"
                                :selected="false"/>
                            <hr class="text-gray-200 dark:text-gray-700">
                            <x-menu.submenu-item
                                text="Departments"
                                :href="route('home')"
                                :selectable="true"
                                :selected="false"/>

                            <x-menu.submenu-item
                                text="Course Management"
                                :href="route('courses.index')"
                                :selectable="true"
                                :selected="Route::currentRouteName() == 'courses.*'"/>
                        </x-menu.submenu>

                        <x-menu.cart
                            :total="3"
                            :href="route('home')"
                            :selectable="true"
                            :selected="false"/>

                        <!-- Menu Item: User -->
                        <x-menu.submenu
                            :selectable="true"
                            :selected="false"
                            submenuAlign="right"
                            class="sm:ms-auto min-w-0">
                            <x-slot:text>
                                    <div class="pe-1 shrink-0">
                                        <img src="{{ Vite::asset('resources/img/photos/photo_example.jpeg') }}" class="w-12 h-12 rounded-full">
                                    </div>
                                    <div class="ps-1 min-w-0 truncate shrink">
                                        João Miguel da Silva Pereira Antunes
                                    </div>
                            </x-slot:text>
                            <x-menu.submenu-item
                                :href="route('home')"
                                :selectable="true"
                                :selected="false"
                                text="Profile">
                            </x-menu.submenu-item>
                            <x-menu.submenu-item
                                :href="route('home')"
                                :selectable="true"
                                :selected="false"
                                text="Change Password">
                            </x-menu.submenu-item>
                            <hr class="text-gray-200 dark:text-gray-700">
                            <x-menu.submenu-item
                                :href="route('home')"
                                :selectable="false"
                                text="Log Out">
                            </x-menu.submenu-item>
                        </x-menu.submenu>
                    </div>

                    <!-- Hamburger -->
                    <div class="absolute right-0 top-0 flex sm:hidden pt-3 pe-3 dark:text-gray-50">
                        <button id="hamburger_btn">
                            <svg class="h-8 w-8" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path id="hamburger_btn_open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16"></path>
                                <path class="invisible" id="hamburger_btn_close" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Page Heading -->
        <header class="bg-white dark:bg-gray-900 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h4 class="mb-1 text-base text-gray-500 dark:text-gray-400 leading-5">
                    Department of Computer Engineering
                </h4>
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-5">
                    @yield('header-title')
                </h2>
            </div>
        </header>
        <main>
            <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
               @yield('main')
            </div>
        </main>
    </div>
</body>

</html>
