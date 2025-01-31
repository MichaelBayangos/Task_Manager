<x-layouts.app title="Edit">
    <x-navigation />
    <x-form :tasks="$tasks" :date="$date" :action="route('home.update',$tasks->id)"/>
</x-layouts.app>
