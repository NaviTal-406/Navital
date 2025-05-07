<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.meta')

    <!-- title -->
    <title>Navital | Admin</title>

    @stack('before-style')

    @include('includes.style')

    @stack('after-style')

</head>

<body>

    <header
        class="@@link-color fixed top-0 inset-x-0 flex items-center z-40 w-full bg-white transition-all py-3.5">
        <div class="container">
            <nav class="flex items-center">
                <!-- Navbar Brand Logo -->
                    <a href="{{ route('home') }}" class="flex items-center gap-3">
                        {{-- <img src="/assets/images/logo-dark.png" class="h-8 logo-dark" alt="Logo Dark">
                        <img src="/assets/images/logo-light.png" class="h-8 logo-light" alt="Logo Light"> --}}
                        <img src="/assets/images/logonavital.png" alt="logonavital" class="w-10">
                        <h1 class="text-biru text-2xl font-bold">
                            navital
                        </h1>
                    </a>

                <!-- Nevigation Menu -->
                <div class="hidden lg:block mx-auto grow">
                    <ul id="navbar-navlist"
                        class="grow flex flex-col lg:flex-row lg:items-center lg:justify-center mt-4 lg:mt-0">
                        <li class="nav-item pe-4">
                            <a class="nav-link flex items-center font-semibold py-2 px-4 lg:py-0 text-gray-700 hover:text-ijo"
                                href="{{ route('dashboard.dashboard') }}">
                                <span class="shrink-0 me-2">
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                            <rect id="Rectangle-7" fill="currentColor" x="4" y="4" width="7"
                                                height="7" rx="1.5"></rect>
                                            <path
                                                d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                                id="Combined-Shape" fill="currentColor" opacity="0.3"></path>
                                        </g>
                                    </svg>
                                </span>
                                <span class="grow">Dashboard</span>
                            </a>
                        </li>

                    </ul>
                </div>

                <div class="block grow ms-auto lg:shrink me-4 lg:me-0">
                    <ul class="navbar-nav flex gap-x-3 items-center justify-end lg:justify-center">
                        <!-- Inner Page Dropdown -->
                        <li class="nav-item">
                            <a href="javascript:void(0);"
                                class="nav-link after:absolute hover:after:-bottom-10 after:inset-0"
                                data-fc-target="innerPageDropdownMenu" data-fc-type="dropdown"
                                data-fc-placement="bottom">
                                <div class="flex items-center">
                                    <div class="shrink">
                                    </div>
                                    <div class="hidden lg:block grow ms-1 leading-normal">
                                        <span class="block text-sm text-biru font-medium hover:text-biru">{{  Auth::user()->name  }}</span>
                                        <span class="block text-gray-400 text-xs">{{ Auth::user()->roles  }}</span>
                                    </div>
                                </div>
                            </a>

                            <div id="innerPageDropdownMenu"
                                class="hidden opacity-0 mt-4 fc-dropdown-open:opacity-100 fc-dropdown-open:translate-y-0 translate-y-3 origin-center transition-all bg-white rounded-lg shadow-lg border p-2 w-48 space-y-1.5">

                                <!-- Dropdown item -->
                                <div class="nav-item rounded hover:bg-blue-50 transition-all">
                                    <a class="flex items-center text-black hover:text-biru !p-2" href="{{ route('dashboard.dashboard') }}">
                                        <svg class="h-4 w-4 me-2" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-settings icon icon-xxs me-1 icon-dual">
                                            <circle cx="12" cy="12" r="3"></circle>
                                            <path
                                                d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                            </path>
                                        </svg>
                                        Dashboard
                                    </a>
                                </div>
                                <hr class="-mx-2 my-2">

                                <!-- Dropdown item -->
                                <div class="nav-item rounded hover:bg-blue-50 transition-all">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <a class="text-black !p-2 flex items-center hover:text-biru" href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); this.closest('form').submit();">
                                            <svg class="h-4 w-4 me-2" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-unlock icon icon-xxs me-1 icon-dual">
                                                <rect x="3" y="11" width="18" height="11" rx="2"
                                                    ry="2"></rect>
                                                <path d="M7 11V7a5 5 0 0 1 9.9-1"></path>
                                            </svg>
                                            Sign Out
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Moblie Menu Toggle Button (Offcanvas Button) -->
                <div class="lg:hidden flex items-center ms-auto px-2.5">
                    <button type="button" data-fc-target="mobileMenu" data-fc-type="offcanvas">
                        <i class="fa-solid fa-bars text-2xl text-gray-500"></i>
                    </button>
                </div>
            </nav>
        </div>
    </header>

    @yield('content')

    <!-- footer start -->
    <section class="bg-white py-6 relative">
        <div class="container">
            <div class="flex items-center flex-wrap">
                <div class="grow">
                    <div class="flex items-center gap-3">
                        <div>
                            <a href="https://www.facebook.com/fathi.adlikhalafah">
                                <svg class="w-5 h-5 text-gray-500 hover:text-ijo transition-all"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                </svg>
                            </a>
                        </div>
                        <div>
                            <a href="https://www.instagram.com/fathikhlfh/?hl=en">
                                <svg class="w-5 h-5 text-gray-500 hover:text-ijo transition-all"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 16a4 4 0 1 0 0-8a4 4 0 0 0 0 8"/><path d="M3 16V8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5Z"/><path stroke-linecap="round" stroke-linejoin="round" d="m17.5 6.51l.01-.011">
                                    </path>
                                </svg>
                            </a>
                        </div>
                        <div>
                            <a href="https://www.linkedin.com/in/fathiadlikhalafah/">
                                <svg class="w-5 h-5 text-gray-500 hover:text-ijo transition-all"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path
                                        d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                                    </path>
                                    <rect x="2" y="9" width="4" height="12"></rect>
                                    <circle cx="4" cy="4" r="2"></circle>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="text-ijo text-sm font-bold">
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        © MedisMap. All rights reserved. 
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- footer end -->

    @stack('before-script')

    @include('includes.script')

    @stack('after-script')

</body>

</html>
