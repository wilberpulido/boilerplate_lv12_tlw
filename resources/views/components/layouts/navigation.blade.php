<nav x-data="{ open: false, atTop: true }"
    @scroll.window="atTop = (window.pageYOffset > 10 ? false : true)"
    :class="{
        'bg-white/80 dark:bg-slate-950/80 backdrop-blur-md border-b border-gray-100 dark:border-slate-800 shadow-sm': !atTop,
        'bg-transparent': atTop && !open,
        'bg-white dark:bg-slate-950': open
    }"
    class="fixed w-full z-50 transition-all duration-300">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">

            <div class="flex">
                <div class="shrink-0 flex items-center">
                    <a href="/" class="font-bold text-xl tracking-tighter text-indigo-600 dark:text-indigo-400">
                        TU<span class="text-slate-900 dark:text-white">LOGO</span>
                    </a>
                </div>

                <div class="hidden sm:ml-10 sm:flex sm:space-x-8">
                    @foreach($menu as $item)
                        <a href="{{ $item['url'] }}"
                                class="inline-flex items-center px-1 pt-1 text-sm font-medium transition-colors duration-200 {{ $item['active'] ? 'text-indigo-600 dark:text-indigo-400 border-b-2 border-indigo-600 dark:border-indigo-400' : 'text-gray-500 dark:text-slate-400 hover:text-gray-700 dark:hover:text-white hover:border-gray-300 dark:hover:border-slate-700' }}"
                                wire:navigate.hover
                            >
                            {{ $item['label'] }}
                        </a>
                    @endforeach
                </div>
            </div>

            <div class="hidden sm:ml-6 sm:flex sm:items-center gap-x-4">
                <x-ui.theme-toggle />
                @guest
                    <div class="flex items-center gap-x-6">
                        <x-ui.button wire:navigate.hover href="{{ route('login') }}" variant="ghost" size="sm">
                            {{ __('ui.auth.login') }}
                        </x-ui.button>
                        <x-ui.button wire:navigate.hover href="{{ route('register') }}" size="sm">
                            {{ __('ui.auth.register') }}
                        </x-ui.button>
                    </div>
                @endguest

                @auth
                    <div class="flex items-center gap-4">
                        <span class="text-sm text-gray-600 dark:text-slate-400 italic">Hola, {{ auth()->user()->name }}</span>
                        <x-ui.button href="{{ route('dashboard') }}" variant="secondary" size="sm">
                            {{ __('ui.nav.dashboard') }}
                        </x-ui.button>
                    </div>
                @endauth
            </div>

            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = !open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-slate-500 hover:text-gray-500 dark:hover:text-white hover:bg-gray-100 dark:hover:bg-slate-800 focus:outline-none transition-colors">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path x-show="open" x-cloak stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div x-show="open"
        x-cloak
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        class="sm:hidden bg-white dark:bg-slate-950 border-b border-gray-100 dark:border-slate-800">
        <div class="pt-2 pb-3 space-y-1 px-4">
            @foreach($menu as $item)
                <a href="{{ $item['url'] }}"
                        class="block py-2 text-base font-medium {{ $item['active'] ? 'text-indigo-600 dark:text-indigo-400' : 'text-gray-500 dark:text-slate-400' }}"
                        wire:navigate.hover
                    >
                    {{ $item['label'] }}
                </a>
            @endforeach
            <hr class="my-2 border-gray-100 dark:border-slate-800">
            @guest
                <div class="flex flex-col gap-y-2 pb-2">
                    <x-ui.button href="{{ route('login') }}" variant="ghost" class="justify-start">Log in</x-ui.button>
                    <x-ui.button href="{{ route('register') }}" class="w-full">Sign up</x-ui.button>
                </div>
            @endguest
        </div>
    </div>
</nav>
