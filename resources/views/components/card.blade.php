@props(['tasks'])

@foreach ($tasks as $task)
<div class="bg-gray-800 text-white max-w-md mx-auto rounded-xl shadow-md overflow-hidden md:max-w-2xl m-5 hover:shadow-2xl hover:bg-black transition-all duration-500 ease-in-out">
    <div class="flex flex-col md:flex-row justify-between p-5">
        <div class="p-4 md:p-8 text-start md:text-left">
            <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">{{$task->name}}</div>
            <p class="block mt-1 text-lg leading-tight font-medium text-white">{{$task->task}}</p>
            <p class="mt-2 text-gray-400">{{$task->date->date}}</p>
        </div>
        <div class="flex justify-end md:items-center mt-4 md:mt-0">
            <a href="{{route('home.show',$task->id)}}">
                <button class="text-red-500 hover:text-white px-4 py-2  rounded-md transition duration-300">
                    View
                </button>
            </a>
            <form action="{{route('home.destroy', $task->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="text-red-500 hover:text-white px-4 py-2  rounded-md transition duration-300">
                    Delete
                </button>
            </form>
        </div>
    </div>
</div>
@endforeach
