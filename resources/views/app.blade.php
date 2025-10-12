<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Online Shop')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @inertiaHead
</head>

<body
    x-data="{ page: 'ecommerce', 'loaded': true, 'darkMode': false, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
    x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{'dark bg-gray-900': darkMode === true}">

    <include src="/partials/preloader.html"></include>
    <div class="flex h-screen overflow-hidden">
        @include('layout.sidebar')
        <div class="relative flex flex-col flex-1 overflow-x-hidden overflow-y-auto">
            @include('layout.overlay')
            @include('layout.header')
            <main>
                <div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6">
                    <div class="grid grid-cols-12 gap-4 md:gap-6">
                        @inertia
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>