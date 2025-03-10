@props(['date' ,'tasks','action'=>'',])
<div class="">
    <section class="rounded-md p-2 bg-white">
        <div class="flex items-center justify-center my-3">
            <div class="xl:mx-auto shadow-md p-4 xl:w-full xl:max-w-sm 2xl:max-w-md">
                <div class="mb-2"></div>
                <h2 class="text-2xl font-bold leading-tight">
                    {{isset($tasks) ? 'Edit Task' : 'Create Task'}}
                </h2>
                <form class="mt-5" action="{{$action}}" method="POST">
                    @csrf
                    @if (isset($tasks))
                    @method('put')
                    @endif
                    <div class="space-y-4">
                        <div>
                            <div class="mt-2">
                                <input placeholder="Name" type="text" class="flex h-10 w-full rounded-md border border-gray-300 bg-transparent px-3 py-2 text-sm placeholder:text-gray-400 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:ring-offset-1 disabled:cursor-not-allowed disabled:opacity-50" name="name" value="{{old('name',$tasks->name ?? '')}}" />
                            </div>
                            <div class="text-red-600">
                                @error('name')
                                <p>{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <div class="mt-2">
                                <input placeholder="Task" type="text" class="flex h-10 w-full rounded-md border border-gray-300 bg-transparent px-3 py-2 text-sm placeholder:text-gray-400 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:ring-offset-1 disabled:cursor-not-allowed disabled:opacity-50" name="task" value="{{old('task', $tasks->task ?? '')}}" />
                            </div>
                            <div class="text-red-600">
                                @error('task')
                                <p>{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <div class="mt-2">
                                <input placeholder="Priority" type="number" class="flex h-10 w-full rounded-md border border-gray-300 bg-transparent px-3 py-2 text-sm placeholder:text-gray-400 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:ring-ojffset-1 disabled:cursor-not-allowed disabled:opacity-50" name="priority" max="10" value="{{old('priority',$tasks->priority ?? '')}}" />
                            </div>
                            <div class="text-red-600">
                                @error('priority')
                                <p>{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="w-full mt-4">
                            <div class="mt-2 w-full">
                                <select name="date_id" id="date" class="w-full p-2 border border-gray-300 rounded-md">
                                    <option>Select Due on Days of Week</option>
                                    @foreach ($date as $daysOfWeek)
                                    <option value="{{$daysOfWeek->id}}">{{$daysOfWeek->date}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="text-red-600 w-full">
                                @error('date_id')
                                <p>{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <button class="inline-flex w-full items-center justify-center rounded-md bg-black px-3.5 py-2.5 font-semibold leading-7 text-white hover:bg-black/80" type="submit">
                                {{isset($tasks) ? 'Update' : 'Create'}}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
