<!DOCTYPE html>
<html lang="en" class="light">
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <link href="{{ asset('/assets/dist/') }}/images/Icons/pill.png" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Rubick admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Rubick Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>@yield('title')</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{ asset('/assets/dist/') }}/css/app.css" />
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<body class="main">
    @include('templates.topbarmobile')
    <!-- BEGIN: Top Bar -->
    <div class="border-b border-theme-29 -mt-10 md:-mt-5 -mx-3 sm:-mx-8 px-3 sm:px-8 pt-3 md:pt-0 mb-10">
        <div class="top-bar-boxed flex items-center">
            <!-- BEGIN: Logo -->
            <a href="" class="-intro-x hidden md:flex">
                <img alt="" class="w-6" src="{{ asset('/assets/dist/') }}/images/Icons/pill.png">
                <span class="text-white text-lg ml-3"> Gudang<span class="font-medium">Obat</span> </span>
            </a>
            <!-- END: Logo -->
            @include('templates.breadcrumb')
            <!-- BEGIN: Search -->
            <div class="intro-x relative mr-3 sm:mr-6">
            </div>
            <!-- END: Search -->
            <!-- BEGIN: Notifications -->
            <div class="intro-x dropdown mr-4 sm:mr-6">
                <div class="dropdown-toggle notification notification--light notification--bullet cursor-pointer" role="button" aria-expanded="false"> <i data-feather="bell" class="notification__icon dark:text-gray-300"></i> </div>
                <div class="notification-content pt-2 dropdown-menu">
                    <div class="notification-content__box dropdown-menu__content box dark:bg-dark-6">
                        <div class="notification-content__title">Notifications</div>
                        <div class="cursor-pointer relative flex items-center ">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('/assets/dist/') }}/images/profile-7.jpg">
                                <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Johnny Depp</a>
                                    <div class="text-xs text-gray-500 ml-auto whitespace-nowrap">01:10 PM</div>
                                </div>
                                <div class="w-full truncate text-gray-600 mt-0.5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('/assets/dist/') }}/images/profile-3.jpg">
                                <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Russell Crowe</a>
                                    <div class="text-xs text-gray-500 ml-auto whitespace-nowrap">01:10 PM</div>
                                </div>
                                <div class="w-full truncate text-gray-600 mt-0.5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('/assets/dist/') }}/images/profile-13.jpg">
                                <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Denzel Washington</a>
                                    <div class="text-xs text-gray-500 ml-auto whitespace-nowrap">01:10 PM</div>
                                </div>
                                <div class="w-full truncate text-gray-600 mt-0.5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('/assets/dist/') }}/images/profile-12.jpg">
                                <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Sylvester Stallone</a>
                                    <div class="text-xs text-gray-500 ml-auto whitespace-nowrap">05:09 AM</div>
                                </div>
                                <div class="w-full truncate text-gray-600 mt-0.5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('/assets/dist/') }}/images/profile-1.jpg">
                                <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">John Travolta</a>
                                    <div class="text-xs text-gray-500 ml-auto whitespace-nowrap">01:10 PM</div>
                                </div>
                                <div class="w-full truncate text-gray-600 mt-0.5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Notifications -->
            <!-- BEGIN: Account Menu -->
            <div class="intro-x dropdown w-8 h-8">
                <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110" role="button" aria-expanded="false">
                    <img alt="Rubick Tailwind HTML Admin Template" src="{{ asset('/assets/dist/') }}/images/profile-2.jpg">
                </div>
                <div class="dropdown-menu w-56">
                    <div class="dropdown-menu__content box bg-theme-26 dark:bg-dark-6 text-white">
                        <div class="p-4 border-b border-theme-27 dark:border-dark-3">
                            <div class="font-medium">Johnny Depp</div>
                            <div class="text-xs text-theme-28 mt-0.5 dark:text-gray-600">Backend Engineer</div>
                        </div>
                        <div class="p-2">
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile </a>
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="edit" class="w-4 h-4 mr-2"></i> Add Account </a>
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="help-circle" class="w-4 h-4 mr-2"></i> Help </a>
                        </div>
                        <div class="p-2 border-t border-theme-27 dark:border-dark-3">
                            <a href="{{ route('auth.signOut') }}" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Account Menu -->
        </div>
    </div>
    <!-- END: Top Bar -->
    @include('templates.topbar')
    <!-- BEGIN: Content -->
    <div class="content">
        @yield('content')
    </div>
    <!-- END: Content -->
    <!-- BEGIN: JS Assets-->
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=[" your-google-map-api"]&libraries=places"></script>
    <script src="{{ asset('/assets/dist/') }}/js/app.js"></script>
    <!-- END: JS Assets-->
</body>

</html>