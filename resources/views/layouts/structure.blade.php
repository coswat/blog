<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
                    <title>Articles - Jess Archer</title>
                <meta name="description" content="Things that are too long to tweet.">

<meta name="viewport" 
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <meta property="og:type" content="website" />
                    <meta property="og:title" content="Articles - Jess Archer" />
                <meta property="og:url" content="https://jessarcher.com/articles" />
        <meta property="og:image" content="/assets/images/social.png" />
        <meta property="og:description" content="Things that are too long to tweet." />

        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:site" content="@jessarchercodes" />
                    <meta name="twitter:title" content="Articles - Jess Archer" />
                <meta name="twitter:description" content="Things that are too long to tweet." />
        <meta name="twitter:image" content="/assets/images/social.png" />
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('/css/tailwind.css?id=2e1abdcd1ab0bb3c78d60c6772dc2c1f') }}">

        <link rel="home" href="/">
        <link rel="icon" href="/favicon.ico">

        <link rel="alternate" type="application/atom+xml" title="Jess Archer's Blog"  href="/feed/atom" />
<link rel="alternate" type="application/rss+xml" title="Jess Archer's Blog"  href="/feed" />
<link rel="stylesheet"
      href="{{ asset('css/one-dark.css') }}">
        <script src="//unpkg.com/alpinejs" defer></script>

        <script>
            const setDarkClass = () => {
                if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                    document.documentElement.classList.add('dark')
                } else {
                    document.documentElement.classList.remove('dark')
                }
            }

            setDarkClass()

            window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', setDarkClass)
        </script>

                    <script src="https://smile-calm.jessarcher.com/script.js" data-site="JGZVJFVC" defer></script>
<style>
  .hljs {
    background: #272729 !important;
  }
  img{
    border-radius: 20px;
  }
</style>
            </head>
    <body
        class="min-h-screen flex flex-col bg-white dark:bg-gray-900 selection:bg-indigo-500 selection:text-white"
        x-data="{ menu: false }"
        x-init="$watch('menu', value => value
            ? document.body.classList.add('overflow-hidden')
            : document.body.classList.remove('overflow-hidden')
        )"
    >
        <header class="h-20 flex items-center bg-white/80 dark:bg-gray-900/60 backdrop-blur-md sticky top-0 z-10">
            <div class="w-full max-w-4xl px-4 mx-auto flex items-center">
                <div class="flex-1">
                    <a class="block h-14 w-14 relative rounded-full border-2 border-white dark:border-gray-700 group shadow" href="/">
                    <img src="{{ asset('favicon.ico') }}" alt="" />
                    </a>
                </div>


                <div class="flex-1 flex gap-4 items-center justify-end">
                    <div
                        class="relative"
                        x-data="{
                            menu: false,
                            theme: localStorage.theme,
                            darkMode() {
                                this.theme = 'dark'
                                localStorage.theme = 'dark'
                                setDarkClass()
                            },
                            lightMode() {
                                this.theme = 'light'
                                localStorage.theme = 'light'
                                setDarkClass()
                            },
                            systemMode() {
                                this.theme = undefined
                                localStorage.removeItem('theme')
                                setDarkClass()
                            },
                        }"
                        @click.outside="menu = false"
                    >
                        <button
                            x-cloak
                            class="p-1 border dark:border-gray-700 rounded-full hover:bg-gray-50 dark:hover:bg-gray-800 focus:hover-gray-50 dark:focus:hover-gray-800 hover:border-gray-300 dark:hover:border-gray-600 dark:focus:border-gray-600"
                            :class="theme ? 'text-gray-700 dark:text-gray-300' : 'text-gray-400 dark:text-gray-600 hover:text-gray-500 focus:text-gray-500 dark:hover:text-gray-500 dark:focus:text-gray-500'"
                            @click="menu = ! menu"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="block dark:hidden w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="hidden dark:block w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
                            </svg>
                        </button>

                        <div x-show="menu" class="absolute origin-top-right right-0 py-2 bg-white dark:bg-gray-800 rounded-md shadow-xl flex flex-col" style="display: none;" @click="menu = false">
                            <button class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700" :class="theme === 'light' ? 'text-gray-900 dark:text-gray-100' : 'text-gray-500 dark:text-gray-400'" @click="lightMode()">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-5 h-5 stroke-current">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                                </svg>
                                <span class="ml-2 text-sm">Light</span>
                            </button>
                            <button class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700" :class="theme === 'dark' ? 'text-gray-900 dark:text-gray-100' : 'text-gray-500 dark:text-gray-400'" @click="darkMode()">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-5 h-5 stroke-current">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
                                </svg>
                                <span class="ml-2 text-sm">Dark</span>
                            </button>
                            <button class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700" :class="theme === undefined ? 'text-gray-900 dark:text-gray-100' : 'text-gray-500 dark:text-gray-400'" @click="systemMode()">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-5 h-5 stroke-current">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" />
                                </svg>
                                <span class="ml-2 text-sm">System</span>
                            </button>
                        </div>
                    </div>
                    <button class="sm:hidden" @click="menu = ! menu">
                        <svg class="w-6 h-6 text-gray-700 dark:text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
            </div>
        </header>

        <div
            x-show="menu"
            style="display: none;"
            class="fixed inset-0 bg-white dark:bg-gray-900 z-20"
        >
            <div class="h-20 px-4 flex items-center justify-between">
                <a class="block h-14 w-14 relative rounded-full border-2 border-white dark:border-gray-700 group shadow" href="/">
                    <img
                        class="absolute inset-0 rounded-full group-hover:opacity-80 transition-all duration-150"
                      
                        alt="Jess Archer"
                    />
                </a>
                <button @click="menu = ! menu">
                    <svg class="w-6 h-6 text-gray-700 dark:text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

        </div>

@yield('content')

    
</div>


        </main>

        <footer class="p-8">
                            <div class="mb-6 flex justify-center">
                    <ul class="flex gap-4">
    <li>
        <a href="https://twitter.com/xcoswat" class="text-gray-400 hover:text-gray-600">
            <svg role="img" aria-label="Twitter" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M20.055 7.983C20.066 8.157 20.066 8.33 20.066 8.506C20.066 13.844 16.146 20 8.976 20V19.997C6.84873 19.9976 4.76906 19.3674 3 18.186C3.308 18.224 3.618 18.243 3.928 18.244C5.69321 18.2418 7.40341 17.6295 8.769 16.511C7.101 16.479 5.639 15.351 5.127 13.706C5.71091 13.8226 6.31419 13.7986 6.887 13.636C5.07 13.256 3.76 11.6 3.76 9.676V9.626C4.29921 9.93799 4.90734 10.1115 5.53 10.131C3.816 8.945 3.288 6.583 4.322 4.737C6.302 7.261 9.222 8.795 12.356 8.957C12.2002 8.27078 12.222 7.55616 12.4194 6.88072C12.6168 6.20528 12.9832 5.59136 13.484 5.097C13.8515 4.73444 14.2888 4.45039 14.7695 4.26212C15.2501 4.07386 15.764 3.98531 16.28 4.00187C16.7959 4.01842 17.3031 4.13973 17.7707 4.35843C18.2383 4.57712 18.6565 4.88862 19 5.274C19.8759 5.09435 20.7135 4.76267 21.475 4.294C21.185 5.228 20.575 6.023 19.762 6.527C20.5365 6.43175 21.2915 6.21686 22 5.89C21.4811 6.69762 20.8225 7.40635 20.055 7.983Z"/>
            </svg>
        </a>
    </li>

    <li>
        <a href="https://github.com/coswat" class="text-gray-400 hover:text-gray-600">
            <svg role="img" aria-label="GitHub" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 1.99994C6.475 1.99994 2 6.58794 2 12.2529C2 16.7899 4.862 20.6219 8.838 21.9799C9.338 22.0699 9.525 21.7619 9.525 21.4929C9.525 21.2499 9.512 20.4429 9.512 19.5829C7 20.0589 6.35 18.9569 6.15 18.3799C6.037 18.0849 5.55 17.1749 5.125 16.9319C4.775 16.7399 4.275 16.2649 5.112 16.2519C5.9 16.2399 6.462 16.9959 6.65 17.3029C7.55 18.8539 8.988 18.4189 9.562 18.1489C9.65 17.4829 9.912 17.0339 10.2 16.7779C7.975 16.5219 5.65 15.6379 5.65 11.7159C5.65 10.6009 6.037 9.67794 6.675 8.95994C6.575 8.70394 6.225 7.65294 6.775 6.24294C6.775 6.24294 7.612 5.97394 9.525 7.29394C10.325 7.06394 11.175 6.94794 12.025 6.94794C12.875 6.94794 13.725 7.06294 14.525 7.29394C16.437 5.96094 17.275 6.24394 17.275 6.24394C17.825 7.65294 17.475 8.70394 17.375 8.95994C18.012 9.67794 18.4 10.5879 18.4 11.7159C18.4 15.6499 16.063 16.5219 13.838 16.7779C14.2 17.0979 14.513 17.7139 14.513 18.6749C14.513 20.0459 14.5 21.1479 14.5 21.4949C14.5 21.7629 14.688 22.0839 15.188 21.9809C17.1849 21.2849 18.911 19.976 20.12 18.2409C21.3456 16.4848 22.0019 14.3945 22 12.2529C22 6.58794 17.525 1.99994 12 1.99994Z"/>
            </svg>
        </a>
    </li>


    <li>
        <a href="https://www.youtube.com/@coderswat" class="text-gray-400 hover:text-gray-600">
            <svg role="img" aria-label="YouTube" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.0644 4.97519H12.1756C13.2032 4.97894 18.4098 5.01644 19.8136 5.39397C20.238 5.50918 20.6247 5.73376 20.9351 6.04527C21.2455 6.35677 21.4688 6.74428 21.5825 7.16908C21.7087 7.64411 21.7975 8.2729 21.8575 8.92169L21.87 9.05169L21.8975 9.37671L21.9075 9.50672C21.9888 10.6493 21.9988 11.7194 22 11.9531V12.0469C21.9988 12.2894 21.9875 13.432 21.8975 14.622L21.8875 14.7533L21.8762 14.8833C21.8137 15.5984 21.7212 16.3084 21.5825 16.8309C21.4691 17.2559 21.246 17.6436 20.9355 17.9551C20.6251 18.2667 20.2382 18.4912 19.8136 18.606C18.3635 18.9961 12.8519 19.0236 12.0881 19.0248H11.9106C11.5243 19.0248 9.92675 19.0173 8.25164 18.9598L8.03913 18.9523L7.93037 18.9473L7.71661 18.9386L7.50284 18.9298C6.11526 18.8686 4.79392 18.7698 4.18514 18.6048C3.76072 18.49 3.37392 18.2658 3.06347 17.9544C2.75303 17.6431 2.52984 17.2557 2.41628 16.8309C2.27752 16.3096 2.18501 15.5984 2.12251 14.8833L2.11251 14.7521L2.10251 14.622C2.04081 13.775 2.00663 12.9262 2 12.0769L2 11.9231C2.0025 11.6544 2.0125 10.7255 2.08001 9.70048L2.08876 9.57173L2.09251 9.50672L2.10251 9.37671L2.13001 9.05169L2.14251 8.92169C2.20251 8.2729 2.29127 7.64286 2.41753 7.16908C2.5309 6.74411 2.754 6.35641 3.06446 6.04486C3.37492 5.7333 3.76182 5.50884 4.18639 5.39397C4.79517 5.23146 6.11651 5.13145 7.50409 5.06894L7.71661 5.06019L7.93162 5.05269L8.03913 5.04894L8.25289 5.04019C9.4426 5.00191 10.6328 4.98066 11.8231 4.97644H12.0644V4.97519ZM10.0005 8.98794V15.0108L15.1971 12.0006L10.0005 8.98794Z"/>
            </svg>
        </a>
    </li>

</div>

                </div>
            
            <p class="text-center text-xs text-gray-500">
                &copy; 2022 Jess Archer.
                <a href="https://github.com/coswat/blog" class="hover:text-gray-700 hover:underline focus:text-gray-700 focus:underline">This website is open source</a>.
            </p>
        </footer>

        <script src="/js/site.js?id=b1209ee077a2a35c987091be58e4b154"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/highlight.min.js"></script> 
        <script>
          hljs.highlightAll();
        </script>
    </body>
</html>
