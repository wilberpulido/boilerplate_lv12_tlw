<section id="test" class="relative min-h-screen flex items-center justify-center">
    <form wire:submit.prevent="login"
          {{-- min-h-screen en móvil para que sea TODO blanco, sm:min-h-0 para que sea card en PC --}}
          class="w-full min-h-screen sm:min-h-0 sm:max-w-md bg-white p-6 sm:p-10 sm:rounded-3xl shadow-2xl flex flex-col justify-center space-y-6">

        <div class="sm:hidden mb-4"> {{-- Logo solo visible en móvil arriba --}}
            {{-- <x-application-logo class="w-12 h-12 text-indigo-600" /> --}}
        </div>

        <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight">
            {{ __('ui.auth.login_title') }}
        </h2>

        {{-- Contenedores de Inputs --}}
        <div class="space-y-4">
            <x-forms.field
                wire:model="form.email"
                name="form.email"
                :label="__('ui.auth.email')"
                type="email"
                placeholder="email@example.com"
            />

            <x-forms.field
                wire:model="form.password"
                name="form.password"
                :label="__('ui.auth.password')"
                type="password"
                placeholder="••••••••"
            />
        </div>

        {{-- Links y Checkbox: En móvil uno debajo del otro para que no se encimen --}}
        <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between pt-2">
            <label class="inline-flex items-center cursor-pointer">
                <input type="checkbox" wire:model="form.remember" class="w-5 h-5 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                <span class="ml-3 text-sm text-gray-600 font-medium">{{ __('ui.auth.remember_me') }}</span>
            </label>

            <a href="#" class="text-sm font-semibold text-indigo-600 hover:text-indigo-500">
                {{ __('ui.auth.forgot_password') }}
            </a>
        </div>

        <button type="submit" class="w-full py-4 bg-indigo-600 hover:bg-indigo-700 text-white rounded-2xl font-bold text-lg shadow-xl active:scale-[0.98] transition-all">
            {{ __('ui.buttons.login') }}
        </button>
    </form>
    {{-- @foreach ($errors->toArray() as $error)
        @dump($error)
    @endforeach --}}
</section>
