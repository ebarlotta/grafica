<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Grafilar</title>
        <style>
            /* Centrar el modal verticalmente */

            .modal-dialog {
                display: flex;
                align-items: center;
                min-height: calc(100vh - 1rem);
            }
        </style>
    </head>

    {{--  FIN DE HEADER  --}}

    {{--  <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" />
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                        <div class="flex lg:justify-center lg:col-start-2">
                            <svg class="h-12 w-auto text-white lg:h-16 lg:text-[#FF2D20]" viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="currentColor"/></svg>
                        </div>
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </header>  --}}



                    {{--  <main class="mt-6">
                        <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
                            <a
                                href="https://laravel.com/docs"
                                id="docs-card"
                                class="flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] md:row-span-3 lg:p-10 lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
                            >
                                <div id="screenshot-container" class="relative flex w-full flex-1 items-stretch">
                                    <img
                                        src="https://laravel.com/assets/img/welcome/docs-light.svg"
                                        alt="Laravel documentation screenshot"
                                        class="aspect-video h-full w-full flex-1 rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.06)] dark:hidden"
                                        onerror="
                                            document.getElementById('screenshot-container').classList.add('!hidden');
                                            document.getElementById('docs-card').classList.add('!row-span-1');
                                            document.getElementById('docs-card-content').classList.add('!flex-row');
                                            document.getElementById('background').classList.add('!hidden');
                                        "
                                    />
                                    <img
                                        src="https://laravel.com/assets/img/welcome/docs-dark.svg"
                                        alt="Laravel documentation screenshot"
                                        class="hidden aspect-video h-full w-full flex-1 rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.25)] dark:block"
                                    />
                                    <div
                                        class="absolute -bottom-16 -left-16 h-40 w-[calc(100%+8rem)] bg-gradient-to-b from-transparent via-white to-white dark:via-zinc-900 dark:to-zinc-900"
                                    ></div>
                                </div>

                                <div class="relative flex items-center gap-6 lg:items-end">
                                    <div id="docs-card-content" class="flex items-start gap-6 lg:flex-col">
                                        <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                            <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><path fill="#FF2D20" d="M23 4a1 1 0 0 0-1.447-.894L12.224 7.77a.5.5 0 0 1-.448 0L2.447 3.106A1 1 0 0 0 1 4v13.382a1.99 1.99 0 0 0 1.105 1.79l9.448 4.728c.14.065.293.1.447.1.154-.005.306-.04.447-.105l9.453-4.724a1.99 1.99 0 0 0 1.1-1.789V4ZM3 6.023a.25.25 0 0 1 .362-.223l7.5 3.75a.251.251 0 0 1 .138.223v11.2a.25.25 0 0 1-.362.224l-7.5-3.75a.25.25 0 0 1-.138-.22V6.023Zm18 11.2a.25.25 0 0 1-.138.224l-7.5 3.75a.249.249 0 0 1-.329-.099.249.249 0 0 1-.033-.12V9.772a.251.251 0 0 1 .138-.224l7.5-3.75a.25.25 0 0 1 .362.224v11.2Z"/><path fill="#FF2D20" d="m3.55 1.893 8 4.048a1.008 1.008 0 0 0 .9 0l8-4.048a1 1 0 0 0-.9-1.785l-7.322 3.706a.506.506 0 0 1-.452 0L4.454.108a1 1 0 0 0-.9 1.785H3.55Z"/></svg>
                                        </div>

                                        <div class="pt-3 sm:pt-5 lg:pt-0">
                                            <h2 class="text-xl font-semibold text-black dark:text-white">Documentation *</h2>

                                            <p class="mt-4 text-sm/relaxed">
                                                Laravel has wonderful documentation covering every aspect of the framework. Whether you are a newcomer or have prior experience with Laravel, we recommend reading our documentation from beginning to end.
                                            </p>
                                        </div>
                                    </div>

                                    <svg class="size-6 shrink-0 stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/></svg>
                                </div>
                            </a>

                            <a
                                href="https://laracasts.com"
                                class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
                            >
                                <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                    <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><g fill="#FF2D20"><path d="M24 8.25a.5.5 0 0 0-.5-.5H.5a.5.5 0 0 0-.5.5v12a2.5 2.5 0 0 0 2.5 2.5h19a2.5 2.5 0 0 0 2.5-2.5v-12Zm-7.765 5.868a1.221 1.221 0 0 1 0 2.264l-6.626 2.776A1.153 1.153 0 0 1 8 18.123v-5.746a1.151 1.151 0 0 1 1.609-1.035l6.626 2.776ZM19.564 1.677a.25.25 0 0 0-.177-.427H15.6a.106.106 0 0 0-.072.03l-4.54 4.543a.25.25 0 0 0 .177.427h3.783c.027 0 .054-.01.073-.03l4.543-4.543ZM22.071 1.318a.047.047 0 0 0-.045.013l-4.492 4.492a.249.249 0 0 0 .038.385.25.25 0 0 0 .14.042h5.784a.5.5 0 0 0 .5-.5v-2a2.5 2.5 0 0 0-1.925-2.432ZM13.014 1.677a.25.25 0 0 0-.178-.427H9.101a.106.106 0 0 0-.073.03l-4.54 4.543a.25.25 0 0 0 .177.427H8.4a.106.106 0 0 0 .073-.03l4.54-4.543ZM6.513 1.677a.25.25 0 0 0-.177-.427H2.5A2.5 2.5 0 0 0 0 3.75v2a.5.5 0 0 0 .5.5h1.4a.106.106 0 0 0 .073-.03l4.54-4.543Z"/></g></svg>
                                </div>

                                <div class="pt-3 sm:pt-5">
                                    <h2 class="text-xl font-semibold text-black dark:text-white">Laracasts</h2>

                                    <p class="mt-4 text-sm/relaxed">
                                        Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                    </p>
                                </div>

                                <svg class="size-6 shrink-0 self-center stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/></svg>
                            </a>

                            <a
                                href="https://laravel-news.com"
                                class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
                            >
                                <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                    <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><g fill="#FF2D20"><path d="M8.75 4.5H5.5c-.69 0-1.25.56-1.25 1.25v4.75c0 .69.56 1.25 1.25 1.25h3.25c.69 0 1.25-.56 1.25-1.25V5.75c0-.69-.56-1.25-1.25-1.25Z"/><path d="M24 10a3 3 0 0 0-3-3h-2V2.5a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2V20a3.5 3.5 0 0 0 3.5 3.5h17A3.5 3.5 0 0 0 24 20V10ZM3.5 21.5A1.5 1.5 0 0 1 2 20V3a.5.5 0 0 1 .5-.5h14a.5.5 0 0 1 .5.5v17c0 .295.037.588.11.874a.5.5 0 0 1-.484.625L3.5 21.5ZM22 20a1.5 1.5 0 1 1-3 0V9.5a.5.5 0 0 1 .5-.5H21a1 1 0 0 1 1 1v10Z"/><path d="M12.751 6.047h2a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-2A.75.75 0 0 1 12 7.3v-.5a.75.75 0 0 1 .751-.753ZM12.751 10.047h2a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-2A.75.75 0 0 1 12 11.3v-.5a.75.75 0 0 1 .751-.753ZM4.751 14.047h10a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-10A.75.75 0 0 1 4 15.3v-.5a.75.75 0 0 1 .751-.753ZM4.75 18.047h7.5a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-7.5A.75.75 0 0 1 4 19.3v-.5a.75.75 0 0 1 .75-.753Z"/></g></svg>
                                </div>

                                <div class="pt-3 sm:pt-5">
                                    <h2 class="text-xl font-semibold text-black dark:text-white">Laravel News</h2>

                                    <p class="mt-4 text-sm/relaxed">
                                        Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                    </p>
                                </div>

                                <svg class="size-6 shrink-0 self-center stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/></svg>
                            </a>

                            <div class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                                <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                    <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <g fill="#FF2D20">
                                            <path
                                                d="M16.597 12.635a.247.247 0 0 0-.08-.237 2.234 2.234 0 0 1-.769-1.68c.001-.195.03-.39.084-.578a.25.25 0 0 0-.09-.267 8.8 8.8 0 0 0-4.826-1.66.25.25 0 0 0-.268.181 2.5 2.5 0 0 1-2.4 1.824.045.045 0 0 0-.045.037 12.255 12.255 0 0 0-.093 3.86.251.251 0 0 0 .208.214c2.22.366 4.367 1.08 6.362 2.118a.252.252 0 0 0 .32-.079 10.09 10.09 0 0 0 1.597-3.733ZM13.616 17.968a.25.25 0 0 0-.063-.407A19.697 19.697 0 0 0 8.91 15.98a.25.25 0 0 0-.287.325c.151.455.334.898.548 1.328.437.827.981 1.594 1.619 2.28a.249.249 0 0 0 .32.044 29.13 29.13 0 0 0 2.506-1.99ZM6.303 14.105a.25.25 0 0 0 .265-.274 13.048 13.048 0 0 1 .205-4.045.062.062 0 0 0-.022-.07 2.5 2.5 0 0 1-.777-.982.25.25 0 0 0-.271-.149 11 11 0 0 0-5.6 2.815.255.255 0 0 0-.075.163c-.008.135-.02.27-.02.406.002.8.084 1.598.246 2.381a.25.25 0 0 0 .303.193 19.924 19.924 0 0 1 5.746-.438ZM9.228 20.914a.25.25 0 0 0 .1-.393 11.53 11.53 0 0 1-1.5-2.22 12.238 12.238 0 0 1-.91-2.465.248.248 0 0 0-.22-.187 18.876 18.876 0 0 0-5.69.33.249.249 0 0 0-.179.336c.838 2.142 2.272 4 4.132 5.353a.254.254 0 0 0 .15.048c1.41-.01 2.807-.282 4.117-.802ZM18.93 12.957l-.005-.008a.25.25 0 0 0-.268-.082 2.21 2.21 0 0 1-.41.081.25.25 0 0 0-.217.2c-.582 2.66-2.127 5.35-5.75 7.843a.248.248 0 0 0-.09.299.25.25 0 0 0 .065.091 28.703 28.703 0 0 0 2.662 2.12.246.246 0 0 0 .209.037c2.579-.701 4.85-2.242 6.456-4.378a.25.25 0 0 0 .048-.189 13.51 13.51 0 0 0-2.7-6.014ZM5.702 7.058a.254.254 0 0 0 .2-.165A2.488 2.488 0 0 1 7.98 5.245a.093.093 0 0 0 .078-.062 19.734 19.734 0 0 1 3.055-4.74.25.25 0 0 0-.21-.41 12.009 12.009 0 0 0-10.4 8.558.25.25 0 0 0 .373.281 12.912 12.912 0 0 1 4.826-1.814ZM10.773 22.052a.25.25 0 0 0-.28-.046c-.758.356-1.55.635-2.365.833a.25.25 0 0 0-.022.48c1.252.43 2.568.65 3.893.65.1 0 .2 0 .3-.008a.25.25 0 0 0 .147-.444c-.526-.424-1.1-.917-1.673-1.465ZM18.744 8.436a.249.249 0 0 0 .15.228 2.246 2.246 0 0 1 1.352 2.054c0 .337-.08.67-.23.972a.25.25 0 0 0 .042.28l.007.009a15.016 15.016 0 0 1 2.52 4.6.25.25 0 0 0 .37.132.25.25 0 0 0 .096-.114c.623-1.464.944-3.039.945-4.63a12.005 12.005 0 0 0-5.78-10.258.25.25 0 0 0-.373.274c.547 2.109.85 4.274.901 6.453ZM9.61 5.38a.25.25 0 0 0 .08.31c.34.24.616.561.8.935a.25.25 0 0 0 .3.127.631.631 0 0 1 .206-.034c2.054.078 4.036.772 5.69 1.991a.251.251 0 0 0 .267.024c.046-.024.093-.047.141-.067a.25.25 0 0 0 .151-.23A29.98 29.98 0 0 0 15.957.764a.25.25 0 0 0-.16-.164 11.924 11.924 0 0 0-2.21-.518.252.252 0 0 0-.215.076A22.456 22.456 0 0 0 9.61 5.38Z"
                                            />
                                        </g>
                                    </svg>
                                </div>

                                <div class="pt-3 sm:pt-5">
                                    <h2 class="text-xl font-semibold text-black dark:text-white">Vibrant Ecosystem</h2>

                                    <p class="mt-4 text-sm/relaxed">
                                        Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white dark:focus-visible:ring-[#FF2D20]">Forge</a>, <a href="https://vapor.laravel.com" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Vapor</a>, <a href="https://nova.laravel.com" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Nova</a>, <a href="https://envoyer.io" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Envoyer</a>, and <a href="https://herd.laravel.com" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Herd</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Echo</a>, <a href="https://laravel.com/docs/horizon" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Telescope</a>, and more.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </main>  --}}




                    {{--  DESDE ACA EL CODIGO DE MARIO  --}}

                    @extends('layouts.app')

                    <div class="container">

                        @section('content')
                        <div class="row justify-content-center">

                            {{--  desde aca se costruye la pagina  --}}

                            {{--  INICIO DE LA BARRA DE MENU  --}}

                            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                                <div class="container-fluid">
                                    <a class="navbar-brand" href="#">Menu Barra</a>
                                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                                        </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Otra *</a>
                                            </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Mas Opciones
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link disabled" aria-disabled="true">Apagado</a>
                                        </li>
                                    </ul>
                                    <form class="d-flex" role="search">
                                        <input class="form-control me-2" type="search" placeholder="Escriba" aria-label="Search">
                                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                                    </form>
                                </div>
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @endif

                                    @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                    @endif
                                </div>
                            </nav>

                            {{--  FIN DE LA BARRA DE MENU  --}}

                            {{-- INICIO DEL  CARRUCEL  --}}
                            <div id="carouselExampleIndicators" class="carousel slide mb-3">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('fotos/carrucel_01.jpg') }}" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('fotos/carrucel_02.jpg') }}" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('fotos/carrucel_03.jpg') }}" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                            </div>


                            {{--  FIN DEL CARRUCEL  --}}


                            {{-- INCIO DE BOTONNES   --}}



                        <div class="justify-content-center mb-5 mt-3" >

                            <div class="container mt-6">
                                <div class="row justify-content-center">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-2">
                                        <button class="btn btn-primary btn-custom mb-4">
                                            <img src="{{ asset('fotos/imagen-imprenta.jpg') }}" alt="Imprenta">
                                            <label for="titulo">Imprenta</label>
                                        </button>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-2">
                                        <button class="btn btn-primary btn-custom mb-4">
                                            <img src="{{ asset('fotos/imagen-rotulacion.jpg') }}" alt="Rotulación">
                                            <label for="titulo">Rotulación</label>
                                        </button>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-2">
                                        <button class="btn btn-primary btn-custom mb-4">
                                            <img src="{{ asset('fotos/imagen-cajas.jpg') }}" alt="Cajas y Bolsas">
                                            <label for="titulo">Cajas y Bolsas</label>
                                        </button>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-2">
                                        <button class="btn btn-primary btn-custom mb-4">
                                            <img src="{{ asset('fotos/imagen-merchan.jpg') }}" alt="Merchandising">
                                            <label for="titulo">Merchandising</label>
                                        </button>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-2">
                                        <button class="btn btn-primary btn-custom mb-4">
                                            <img src="{{ asset('fotos/imagen-deco.jpg') }}" alt="Decoración">
                                            <label for="titulo">Decoración</label>
                                        </button>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-2">
                                        <button class="btn btn-primary btn-custom mb-4">
                                            <img src="{{ asset('fotos/imagen-folletos.jpg') }}" alt="Folletos">
                                            <label for="titulo">Folletos</label>
                                        </button>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-2">
                                        <button class="btn btn-primary btn-custom mb-4">
                                            <img src="{{ asset('fotos/imagen-revista.jpg') }}" alt="Revistas">
                                            <label for="titulo">Revistas</label>
                                        </button>
                                    </div>

                                    {{--  NESECITO CONECTA ESTE BOTON MODULO PARA ENVIAR ARCHIVOS enviartrabajos.html ** --}}
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-2">
                                        <button class="btn btn-danger btn-custom mb-4" data-bs-toggle="modal" data-bs-target="#mainModal">
                                            <a href="pedidos">
                                                <img src="{{ asset('fotos/enviar.jpg') }}" alt="Enviar">
                                                <label for="titulo">Enviar</label>
                                            </a>
                                        </button>
                                    </div>
                                </div>
                                <div class="modal fade" id="mainModal" tabindex="-1" aria-labelledby="mainModalLabel" aria-hidden="true" >
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="mainModalLabel">Elige tu opción</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <div>
                                                    <button type="button" data-bs-toggle="modal" data-bs-target="#primeravezModal" class="btn btn-danger mt-3 fw-bold" style="width: 200px; height: 55px;">Mi Primera Vez</button>
                                                </div>
                                                <div>
                                                    <button type="button" data-bs-toggle="modal" data-bs-target="#soyClienteModal" class="btn btn-primary mt-3 fw-bold" style="width: 200px; height: 55px;">Ya Soy Cliente</button>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">* Salir *</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                

                                <div class="modal fade" id="primeravezModal" tabindex="-1" aria-labelledby="primeravezModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="primeravezModalLabel">FORMULARIO DE ENVIO DE ARCHIVOS - PRIMERA VEZ</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container">
                                                    <h3 class="mb-4 btn btn-danger">Tus datos para conocerte</h3>
                                                    <form id="primeravezForm">
                                                        <div class="row">
                                                            <div class="form-group col-sm-12 col-lg-6 col-xl-4 mb-2">
                                                                <label for="nombre">Nombre:</label>
                                                                <input type="text" class="form-control" id="nombre" placeholder="Escribe tu Nombre">
                                                            </div>
                                                            <div class="form-group col-sm-12 col-lg-6 col-xl-4 mb-2">
                                                                <label for="telefono">Teléfono:</label>
                                                                <input type="text" class="form-control" id="telefono" placeholder="Teléfono">
                                                            </div>
                                                            <div class="form-group col-sm-12 col-lg-6 col-xl-4 mb-2">
                                                                <label for="direccion">Dirección:</label>
                                                                <input type="text" class="form-control" id="direccion" placeholder="Dirección">
                                                            </div>
                                                            <div class="form-group col-sm-12 col-lg-6 col-xl-4 mb-2">
                                                                <label for="dni">DNI:</label>
                                                                <input type="text" class="form-control" id="dni" placeholder="DNI">
                                                            </div>
                                                            <div class="form-group col-sm-12 col-lg-6 col-xl-4 mb-2">
                                                                <label for="institucion">Institución:</label>
                                                                <input type="text" class="form-control" id="institucion" placeholder="Institución">
                                                            </div>
                                                            <div class="form-group col-sm-12 col-lg-6 col-xl-4 mb-2">
                                                                <label for="email">Email:</label>
                                                                <input type="email" class="form-control" id="email" placeholder="Email">
                                                            </div>
                                                            <div class="form-group col-md-12 mb-2 btn btn-warning">
                                                                <label for="archivo">Déjanos tu archivo:</label>
                                                                <input type="file" class="form-control" id="archivo">
                                                            </div>
                                                            <div class="form-group col-sm-12 col-lg-6 col-xl-4 mb-2">
                                                                <label for="cantidadHojas">Cantidad de Hojas:</label>
                                                                <input type="number" class="form-control" id="cantidadHojas" placeholder="Cantidad de Hojas">
                                                            </div>
                                                            <div class="form-group col-sm-12 col-lg-6 col-xl-4 mb-2">
                                                                <label for="tipoImpresion">Tipo de Impresión:</label>
                                                                <select id="tipoImpresion" class="form-control">
                                                                <option selected>Seleccionar...</option>
                                                                <option>Laser color</option>
                                                                <option>Laser B/N</option>
                                                            </select>
                                                            </div>
                                                            <div class="form-group col-sm-12 col-lg-6 col-xl-4 mb-2">
                                                                <label for="tipoPapel">Tipo de Papel:</label>
                                                                <select id="tipoPapel" class="form-control">
                                                                <option selected>Seleccionar...</option>
                                                                <option>Obra de 80 Grs</option>
                                                                <option>Obra de 90 Grs</option>
                                                                <option>Obra de 115 Grs</option>
                                                            </select>
                                                            </div>
                                                            <div class="form-group col-sm-12 col-lg-6 col-xl-4 mb-2">
                                                                <label for="simpleDobleFas">Simple o Doble Faz:</label>
                                                                <select id="simpleDobleFas" class="form-control">
                                                                <option selected>Seleccionar...</option>
                                                                <option>Simple Faz</option>
                                                                <option>Doble Faz</option>
                                                            </select>
                                                            </div>
                                                            <div class="form-group col-sm-12 col-lg-6 col-xl-4 mb-2">
                                                                <label for="cantidadEjemplares">Cantidad de Ejemplares:</label>
                                                                <input type="number" class="form-control" id="cantidadEjemplares" placeholder="Cantidad de Ejemplares">
                                                            </div>
                                                            <div class="form-group col-sm-12 col-md-12 col-lg-4 mt-3 mb-2">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="deliveryOptions" id="homePickup" value="homePickup" checked>
                                                                    <label class="form-check-label" for="homePickup">Retira por El Local</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="deliveryOptions" id="deliveryService" value="deliveryService">
                                                                    <label class="form-check-label" for="deliveryService">Enviar por delivery $</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col-sm-12 col-md-12 col-lg-4 btn btn-danger">
                                                                <h4 class="marg">Costo Aprox: $5780.45</h4>
                                                            </div>
                                                            <div class="col-md-8">

                                                                <button type="submit" class="btn btn-primary mt-3">Enviar</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="primeravezModal" tabindex="-1" aria-labelledby="primeravezModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="primeravezModalLabel">FORMULARIO DE ENVIO DE ARCHIVOS - PRIMERA VEZ</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container">
                                                    <h3 class="mb-4 btn btn-danger">Tus datos para conocerte</h3>
                                                    <form id="primeravezForm">
                                                        <div class="row">
                                                            <div class="form-group col-sm-12 col-lg-6 col-xl-4 mb-2">
                                                                <label for="nombre">Nombre:</label>
                                                                <input type="text" class="form-control" id="nombre" placeholder="Escribe tu Nombre">
                                                            </div>
                                                            <div class="form-group col-sm-12 col-lg-6 col-xl-4 mb-2">
                                                                <label for="telefono">Teléfono:</label>
                                                                <input type="text" class="form-control" id="telefono" placeholder="Teléfono">
                                                            </div>
                                                            <div class="form-group col-sm-12 col-lg-6 col-xl-4 mb-2">
                                                                <label for="direccion">Dirección:</label>
                                                                <input type="text" class="form-control" id="direccion" placeholder="Dirección">
                                                            </div>
                                                            <div class="form-group col-sm-12 col-lg-6 col-xl-4 mb-2">
                                                                <label for="dni">DNI:</label>
                                                                <input type="text" class="form-control" id="dni" placeholder="DNI">
                                                            </div>
                                                            <div class="form-group col-sm-12 col-lg-6 col-xl-4 mb-2">
                                                                <label for="institucion">Institución:</label>
                                                                <input type="text" class="form-control" id="institucion" placeholder="Institución">
                                                            </div>
                                                            <div class="form-group col-sm-12 col-lg-6 col-xl-4 mb-2">
                                                                <label for="email">Email:</label>
                                                                <input type="email" class="form-control" id="email" placeholder="Email">
                                                            </div>
                                                            <div class="form-group col-md-12 mb-2 btn btn-warning">
                                                                <label for="archivo">Déjanos tu archivo:</label>
                                                                <input type="file" class="form-control" id="archivo">
                                                            </div>
                                                            <div class="form-group col-sm-12 col-lg-6 col-xl-4 mb-2">
                                                                <label for="cantidadHojas">Cantidad de Hojas:</label>
                                                                <input type="number" class="form-control" id="cantidadHojas" placeholder="Cantidad de Hojas">
                                                            </div>
                                                            <div class="form-group col-sm-12 col-lg-6 col-xl-4 mb-2">
                                                                <label for="tipoImpresion">Tipo de Impresión:</label>
                                                                <select id="tipoImpresion" class="form-control">
                                                                <option selected>Seleccionar...</option>
                                                                <option>Laser color</option>
                                                                <option>Laser B/N</option>
                                                            </select>
                                                            </div>
                                                            <div class="form-group col-sm-12 col-lg-6 col-xl-4 mb-2">
                                                                <label for="tipoPapel">Tipo de Papel:</label>
                                                                <select id="tipoPapel" class="form-control">
                                                                <option selected>Seleccionar...</option>
                                                                <option>Obra de 80 Grs</option>
                                                                <option>Obra de 90 Grs</option>
                                                                <option>Obra de 115 Grs</option>
                                                            </select>
                                                            </div>
                                                            <div class="form-group col-sm-12 col-lg-6 col-xl-4 mb-2">
                                                                <label for="simpleDobleFas">Simple o Doble Faz:</label>
                                                                <select id="simpleDobleFas" class="form-control">
                                                                <option selected>Seleccionar...</option>
                                                                <option>Simple Faz</option>
                                                                <option>Doble Faz</option>
                                                            </select>
                                                            </div>
                                                            <div class="form-group col-sm-12 col-lg-6 col-xl-4 mb-2">
                                                                <label for="cantidadEjemplares">Cantidad de Ejemplares:</label>
                                                                <input type="number" class="form-control" id="cantidadEjemplares" placeholder="Cantidad de Ejemplares">
                                                            </div>
                                                            <div class="form-group col-sm-12 col-md-12 col-lg-4 mt-3 mb-2">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="deliveryOptions" id="homePickup" value="homePickup" checked>
                                                                    <label class="form-check-label" for="homePickup">Retira por El Local</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="deliveryOptions" id="deliveryService" value="deliveryService">
                                                                    <label class="form-check-label" for="deliveryService">Enviar por delivery $</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col-sm-12 col-md-12 col-lg-4 btn btn-danger">
                                                                <h4 class="marg">Costo Aprox: $5780.45</h4>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <button type="submit" class="btn btn-primary mt-3">Enviar</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                            </div>

                            {{--  FIN DE BOTONES   --}}

                            <h2 class="row justify-content-center">GALERIA DE TRABAJOS</h2>

                            {{--  INICIO DE GALERIA DE IMAGEN  --}}


                                <style>
                                    .gallery-img {
                                        width: 100%;
                                        height: auto;
                                        max-height: 200px; /* Ajusta esta altura máxima según tus necesidades */
                                        object-fit: contain; /* Asegura que la imagen se ajuste dentro del contenedor sin recortarse */
                                        border: 2px solid #000; /* Agrega un borde negro de 2px */
                                        box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3); /* Agrega una sombra desplazada */
                                        padding: 5px; /* Espacio entre la imagen y el borde */
                                        transition: transform 0.3s ease-in-out; /* Añade una transición suave */
                                    }

                                    .gallery-img:hover {
                                        transform: scale(1.10); /* Aumenta ligeramente el tamaño de la imagen */
                                    }

                                </style>

                                <div class="container mt-5">
                                    <div class="row ms-3 me-3">
                                        <!-- Fila 1 -->
                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                                            <img src="{{ asset('fotos/Libros 01.jpg') }}" alt="Imagen 1" class="gallery-img img-fluid mb-3">
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                                            <img src="{{ asset('fotos/Libros 02.jpg') }}" alt="Imagen 2" class="gallery-img img-fluid mb-3">
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                                            <img src="{{ asset('fotos/Libros 03.jpg') }}" alt="Imagen 3" class="gallery-img img-fluid mb-3">
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                                            <img src="{{ asset('fotos/Libros 04.jpg') }}" alt="Imagen 4" class="gallery-img img-fluid mb-3">
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                                            <img src="{{ asset('fotos/Libros 05.jpg') }}" alt="Imagen 5" class="gallery-img img-fluid mb-3">
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                                            <img src="{{ asset('fotos/Libros 06.jpg') }}" alt="Imagen 6" class="gallery-img img-fluid mb-3">
                                        </div>
                                        <!-- Fila 2 -->
                                        <div class="col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                                            <img src="{{ asset('fotos/remeras 01.jpg') }}" alt="Imagen 7" class="gallery-img img-fluid mb-3">
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                                            <img src="{{ asset('fotos/remeras 02.jpg') }}" alt="Imagen 8" class="gallery-img img-fluid mb-3">
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                                            <img src="{{ asset('fotos/remeras 03.jpg') }}" alt="Imagen 9" class="gallery-img img-fluid mb-3">
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                                            <img src="{{ asset('fotos/remeras 04.jpg') }}" alt="Imagen 10" class="gallery-img img-fluid mb-3">
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                                            <img src="{{ asset('fotos/remeras 05.jpg') }}" alt="Imagen 11" class="gallery-img img-fluid mb-3">
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                                            <img src="{{ asset('fotos/mercha 01.jpg') }}" alt="Imagen 12" class="gallery-img img-fluid mb-3">
                                        </div>
                                        <!-- Fila 3 -->

                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                                            <img src="{{ asset('fotos/estampado 01.jpg') }}" alt="Imagen 14" class="gallery-img img-fluid mb-3">
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                                            <img src="{{ asset('fotos/estampado 02.jpg') }}" alt="Imagen 15" class="gallery-img img-fluid mb-3">
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                                            <img src="{{ asset('fotos/estampado 03.jpg') }}" alt="Imagen 16" class="gallery-img img-fluid mb-3">
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                                            <img src="{{ asset('fotos/estampado 04.jpg') }}" alt="Imagen 17" class="gallery-img img-fluid mb-3">
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                                            <img src="{{ asset('fotos/estampado 05.jpg') }}" alt="Imagen 18" class="gallery-img img-fluid mb-3">
                                        </div>
                                        <!-- Fila 4 -->
                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                                            <img src="{{ asset('fotos/estampado 06.jpg') }}" alt="Imagen 19" class="gallery-img img-fluid mb-3">
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                                            <img src="{{ asset('fotos/estampado 07.jpg') }}" alt="Imagen 20" class="gallery-img img-fluid mb-3">
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                                            <img src="{{ asset('fotos/cajas 01.jpg') }}" alt="Imagen 21" class="gallery-img img-fluid mb-3">
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                                            <img src="{{ asset('fotos/cajas 02.jpg') }}" alt="Imagen 22" class="gallery-img img-fluid mb-3">
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                                            <img src="{{ asset('fotos/cajas 03.jpg') }}" alt="Imagen 23" class="gallery-img img-fluid mb-3">
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                                            <img src="{{ asset('fotos/tarjetas 01.jpg') }}" alt="Imagen 24" class="gallery-img img-fluid mb-3">
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                                            <img src="{{ asset('fotos/ploter 01.jpg') }}" alt="Imagen 25" class="gallery-img img-fluid mb-3">
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                                            <img src="{{ asset('fotos/ploter 02.jpg') }}" alt="Imagen 26" class="gallery-img img-fluid mb-3">
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                                            <img src="{{ asset('fotos/rotulacion 01.jpg') }}" alt="Imagen 27" class="gallery-img img-fluid mb-3">
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                                            <img src="{{ asset('fotos/etiquetas 01.jpg') }}" alt="Imagen 28" class="gallery-img img-fluid mb-3">
                                        </div>

                                    </div>
                                </div>

                            {{--  FIN DE GALERIA DE IMAGENES  --}}



                            {{--  Incio del Footer  --}}

                            <footer class="bg-dark text-white pt-4">
                                <div class="container">
                                    <div class="row">
                                        <!-- Datos Útiles -->
                                        <div class="col-md-3">
                                            <h5>Datos Útiles</h5>
                                            <ul class="list-unstyled">
                                                <li><a href="#" class="text-white" target="_blank">Sumate a nuestro Staff</a></li>
                                                <li><a href="#" class="text-white" target="_blank">Descargar Brochure Institucional</a></li>
                                                <li><a href="#" class="text-white" target="_blank">Club Pyme / Distribuidores</a></li>
                                                <li><a href="#" class="text-white" target="_blank">Datos Bancarios</a></li>
                                                <li><a href="#" class="text-white" target="_blank">Tutoriales</a></li>
                                                <li><a href="#" class="text-white" target="_blank">Diseño web</a></li>
                                                <li><a href="#" class="text-white" target="_blank">Envíos</a></li>
                                                <li><a href="#" class="text-white" target="_blank">Newsletter</a></li>
                                                <li><a href="#" class="text-white" target="_blank">Order Tracking</a></li>
                                                <li><a href="#" class="text-white" target="_blank">Reclamos</a></li>
                                                <li><a href="#" class="text-white" target="_blank">Política de Privacidad</a></li>
                                            </ul>
                                        </div>
                                        <!-- Contáctenos -->
                                        <div class="col-md-3">
                                            <h5>Contáctenos</h5>
                                            <ul class="list-unstyled">
                                                <li><a href="#" class="text-white" target="_blank">Facebook</a></li>
                                                <li><a href="#" class="text-white" target="_blank">Instagram</a></li>
                                                <li><a href="#" class="text-white" target="_blank">Telegram</a></li>
                                                <li><a href="#" class="text-white" target="_blank">WhatsApp</a></li>
                                                <li><a href="#" class="text-white" target="_blank">Mensajes Internos</a></li>
                                            </ul>
                                        </div>
                                        <!-- Mi Cuenta -->
                                        <div class="col-md-3">
                                            <h5>Mi Cuenta</h5>
                                            <ul class="list-unstyled">
                                                <li><a href="#" class="text-white" target="_blank">Inicio de Sesión</a></li>
                                                <li><a href="#" class="text-white" target="_blank">Registrarme</a></li>
                                            </ul>
                                        </div>
                                        <!-- Ubicación -->
                                        <div class="col-md-3">
                                            <h5>Ubicación</h5>
                                            <ul class="list-unstyled">
                                                <li><a href="#" class="text-white" target="_blank">San Martin 286, La Rioja, Argentina</a></li>
                                                <li><a href="#" class="text-white" target="_blank">Cómo Llegar</a></li>
                                            </ul>
                                            <div id="mapa" style="height: 200px;">
                                                <!-- Aquí puedes insertar el iframe de Google Maps -->
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3349.923456789!2d-66.856748!3d-29.411234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjnCsDI0JzQwLjQiUyA2NsKwNTEnMjAuOCJX!5e0!3m2!1ses!2sar!4v1633021234567!5m2!1ses!2sar" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </footer>


                            {{--  Fin del Footer  --}}


                            {{--  fin de la Pagina   --}}

                        </div>
                    </div>
                    @endsection


                    {{--  FIN DEL CODIGO DE MARIO  --}}

                    {{-- <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </footer> --}}
                </div>
            </div>
        </div>


        {{--  INICIO DEL FORMULARIO ENVIO DE ARCHIVOS  --}}

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
