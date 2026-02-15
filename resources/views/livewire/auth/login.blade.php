<form class="w-full max-w-md bg-white p-8 rounded-2xl shadow-xl border border-gray-100" wire:submit.prevent="login">
    <x-forms.field
        wire:model="form.email"
        name="email"
        label="Your email"
        type="text"
    />
    <x-forms.field
        wire:model="form.password"
        label="Contraseña"
        name="email"
        type="password"
    />
    <button type="submit"> Enviar</button>
</form>
