@props([
    'title' => 'Crea tu próximo SaaS en tiempo récord',
    'highlight' => 'Laravel 12 + Livewire',
    'subtitle' => 'La base sólida, moderna y escalable que necesitas para dejar de configurar y empezar a construir.',
    'ctaText' => 'Comenzar Proyecto',
    'ctaLink' => route('register'),
])

<section class="relative overflow-hidden py-16 md:py-32">

    {{-- Decoración de fondo: Bajamos la opacidad en Dark Mode --}}
    <div class="absolute inset-x-0 -top-20 -z-10 transform-gpu overflow-hidden blur-3xl md:-top-80" aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-1155/678 w-100 -translate-x-1/2 rotate-30 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 dark:opacity-10 md:left-[calc(50%-30rem)] md:w-6xl"></div>
    </div>

    <div class="mx-auto max-w-7xl px-4 md:px-8">
        <div class="mx-auto max-w-3xl text-center">

            {{-- Badge Dark Mode --}}
            <div class="mb-6 md:mb-8 flex justify-center">
                <span class="rounded-full px-3 py-1 text-xs md:text-sm font-semibold text-indigo-600 dark:text-indigo-400 ring-1 ring-inset ring-indigo-600/10 dark:ring-indigo-400/20 bg-indigo-50 dark:bg-indigo-900/30">
                    Novedad: Soporte para Volt
                </span>
            </div>

            {{-- Título --}}
            <h1 class="text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white md:text-6xl">
                {{ $title }} <span class="text-indigo-600 dark:text-indigo-400 block md:inline">{{ $highlight }}</span>
            </h1>

            {{-- Subtítulo --}}
            <p class="mt-4 md:mt-6 text-base md:text-lg leading-7 text-gray-600 dark:text-slate-400">
                {{ $subtitle }}
            </p>

            <div class="mt-8 md:mt-10 flex flex-col md:flex-row items-center justify-center gap-y-4 md:gap-x-6">
                <x-ui.button href="{{ $ctaLink }}" size="lg" class="w-full md:w-auto">
                    {{ $ctaText }}
                </x-ui.button>

                <a href="#features" class="text-sm font-semibold text-gray-900 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">
                    Ver características <span aria-hidden="true">→</span>
                </a>
            </div>
        </div>
    </div>
</section>
