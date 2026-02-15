@props([
    'name',
    'label',
    'containerClass'=>'',
])
<div
    {{ $attributes->only('class')->merge(['class' => "relative z-0 $containerClass"]) }}
>
    @if(isset($label))
        <x-forms.label for="{{$name}}">
            {{$label}}
        </x-forms.label>
    @endif
     {{-- wire:model.deep --}}
    <x-forms.input
        id="{{$name}}"
        {{ $attributes->whereStartsWith('wire:model') }}
        {{-- :$type
        :$name
        :$placeholder
        :$value
        :$autocomplete --}}
        {{ $attributes->whereDoesntStartWith('class') }}
    />
    <x-forms.error
        field="{{$name}}"
    />
</div>
