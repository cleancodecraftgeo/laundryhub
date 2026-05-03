<x-filament-panels::page>
    <div>
        {{ $this->form }}

        <x-filament::button wire:click="save">
            Save
        </x-filament::button>
    </div>
</x-filament-panels::page>
