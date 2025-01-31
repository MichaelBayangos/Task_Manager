<x-layouts.app title="Create">
    <x-navigation />
    <x-form :date="$date" :action="route('home.store')" />
</x-layouts.app>
