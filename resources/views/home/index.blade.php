<x-layouts.app title="Home">
    <x-navigation />
    <x-card :tasks="$tasks" />
    <div class="fixed bottom-0 left-0 w-full z-10">
        <div class="flex flex-col justify-between p-2">
            {{$tasks->links()}}
        </div>
    </div>
</x-layouts.app>
