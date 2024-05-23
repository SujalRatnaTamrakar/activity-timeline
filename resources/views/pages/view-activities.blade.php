<x-filament-panels::page>
    {{ $this->activityInfolist }}
    <x-filament::pagination :paginator="$this->getActivites()" />
</x-filament-panels::page>
