@props(['tasks'])
<div class="flex justify-center p-4">
    <div class="service-card w-[60%]  shadow-xl cursor-pointer snap-start shrink-0 py-8 px-6 bg-white flex flex-col items-start gap-3 transition-all duration-300 group hover:bg-[#202127]">
        <svg stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="#000000" fill="none" viewBox="0 0 24 24" class="text-5xl h-12 w-12 stroke-gray-800 group-hover:stroke-gray-400" xmlns="http://www.w3.org/2000/svg">
            <rect ry="2" rx="2" height="14" width="20" y="3" x="2"></rect>
            <line y2="21" x2="16" y1="21" x1="8"></line>
            <line y2="21" x2="12" y1="17" x1="12"></line>
        </svg>

        <p class="font-bold text-2xl group-hover:text-white text-black/80">
            <strong>Name: </strong>{{$tasks->name}}
        </p>
        <p class="text-gray-400 text-sm">
            <strong>Task: </strong>{{$tasks->task}}
        </p>
        <p class="text-gray-400 text-sm">
            <strong>Due Date: </strong>{{$tasks->date->date}}
        </p>
        <p class="text-gray-400 text-sm">
            <strong>Priority Level: </strong> {{$tasks->priority}}

        </p>
        <p style="-webkit-text-stroke: 1px gray;
                                  -webkit-text-fill-color: transparent;" class="text-5xl font-bold self-end"><strong>
                <a href="{{route('home.edit',$tasks->id)}}" >Edit</a>
        </p>
    </div>
</div>
