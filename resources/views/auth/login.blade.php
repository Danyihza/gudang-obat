<!DOCTYPE html>
<html lang="en" class="dark">
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <link href="{{ asset('assets') }}/dist/images/Icons/pill.png" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Rubick admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Rubick Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>Login - GudangObat</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{ asset('assets') }}/dist/css/app.css" />
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<body class="login">
    <div class="container sm:px-10">
        <div class="block xl:grid grid-cols-2 gap-4">
            <!-- BEGIN: Login Info -->
            <div class="hidden xl:flex flex-col min-h-screen">
                <a href="{{ asset('') }}" class="-intro-x flex items-center pt-5">
                    <img alt="Rubick Tailwind HTML Admin Template" class="w-10" src="{{ asset('assets') }}/dist/images/Icons/pill.png">
                    <span class="text-white text-lg ml-3"> Gudang<span class="font-medium">Obat</span> </span>
                </a>
                <div class="my-auto">
                    <img alt="Rubick Tailwind HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="{{ asset('assets') }}/dist/images/Illustrations/Login-amico.png">
                    <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                        A few more clicks to
                        <br>
                        sign in to your account.
                    </div>
                    <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-gray-500">Manage all your e-commerce accounts in one place</div>
                </div>
            </div>
            <!-- END: Login Info -->
            <!-- BEGIN: Login Form -->
            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                <div class="my-auto mx-auto xl:ml-20 bg-white dark:bg-dark-1 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    <form action="{{ route('auth.signIn') }}" method="post">
                        @csrf
                        <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                            Sign In
                        </h2>
                        @if(session('error'))
                        <div class="intro-x alert alert-danger show flex items-center mt-2" role="alert"> <i data-feather="alert-octagon" class="w-6 h-6 mr-2"></i> Username atau password salah </div>
                        @endif
                        <div class="intro-x text-gray-500 xl:hidden text-center">A few more clicks to sign in to your account. Manage all your e-commerce accounts in one place</div>
                        <div class="intro-x mt-4">
                            <input name="username" type="text" class="intro-x login__input form-control py-3 px-4 border-gray-300 block" placeholder="Username">
                            <input name="password" type="password" class="intro-x login__input form-control py-3 px-4 border-gray-300 block mt-4" placeholder="Password">
                        </div>
                        <div class="intro-x flex text-gray-700 dark:text-gray-600 text-xs sm:text-sm mt-4">
                            {{-- <div class="flex items-center mr-auto">
                                    <input id="remember-me" type="checkbox" class="form-check-input border mr-2">
                                    <label class="cursor-pointer select-none" for="remember-me">Remember me</label>
                                </div> --}}
                            {{-- <a href="{{ asset('') }}">Forgot Password?</a> --}}
                        </div>
                        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                            <button class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Login</button>
                            {{-- <button class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top">Sign up</button> --}}
                        </div>
                        {{-- <div class="intro-x mt-10 xl:mt-24 text-gray-700 dark:text-gray-600 text-center xl:text-left">
                                By signin up, you agree to our 
                                <br>
                                <a class="text-theme-1 dark:text-theme-10" href="{{ asset('') }}">Terms and Conditions</a> & <a class="text-theme-1 dark:text-theme-10" href="{{ asset('') }}">Privacy Policy</a>
                </div> --}}
                </form>
            </div>
        </div>
        <!-- END: Login Form -->
    </div>
    </div>
    <!-- BEGIN: Dark Mode Switcher-->
    {{-- <div data-url="login-light-login.html" class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 right-0 box dark:bg-dark-2 border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 mr-10">
            <div class="mr-4 text-gray-700 dark:text-gray-300">Dark Mode</div>
            <div class="dark-mode-switcher__toggle dark-mode-switcher__toggle--active border"></div>
        </div> --}}
    <!-- END: Dark Mode Switcher-->
    <!-- BEGIN: JS Assets-->
    <script src="{{ asset('assets') }}/dist/js/app.js"></script>
    <!-- END: JS Assets-->
</body>

</html>