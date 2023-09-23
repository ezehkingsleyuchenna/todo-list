<div>
    <!-- navbar -->
    <nav class="flex justify-between bg-gray-900 text-white">
        <div class="px-5 xl:px-12 py-6 flex w-full justify-between items-center">
            <a class="text-3xl font-bold font-heading" href="{{ route('list') }}">
                Logo Here.
            </a>
            <!-- Nav Links -->
            <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
                <li><a class="hover:text-gray-200" href="{{ route('list') }}">Home</a></li>
            </ul>
            <!-- Header Icons -->
            <div class="flex items-center space-x-5">
                <a class="hover:text-gray-200" href="javascript:">
                    <x-icons.user-circle class="h-6 w-6 hover:text-gray-200" />
                </a>
                <!-- Sign In / Register      -->
                <a class="flex items-center hover:text-gray-200" href="{{ route('logout') }}">
                    <x-icons.arrow-right-on-rectangle class="h-6 w-6 hover:text-gray-200" />
                </a>
            </div>
        </div>
    </nav>

    <div class="bg-slate-700 min-h-screen space-y-10 pt-10">
        <div class="h-auto w-11/12 md:w-1/2 mx-auto px-2 bg-white rounded-lg">
            <form wire:submit="addTodo" class="relative">
                <label for="task" class="sr-only">Task</label>
                <input id="task" wire:model="task" class="text-sm h-12 w-full my-4 pr-20 md:pr-28 outline-none pl-8" type="text" placeholder="Write a new task">
                <button
                    class="add_task text-sm transition-all hover:bg-blue-700 cursor-pointer text-white bg-blue-400 rounded-lg h-10 w-16 md:w-24 absolute right-1 top-[20px]">
                    Add task
                </button>
                <x-icons.pencil-square class="w-5 h-5 absolute top-[27px] text-gray-600 left-2" />
            </form>
            @if($errors->first('task'))
                <p @class(['text-red-500 mt-1 text-xs'])>
                    {{ $errors->first('task') }}
                </p>
            @endif
        </div>

        <div class="lg:flex justify-between lg:space-x-6 space-y-6 lg:space-y-0 w-11/12 md:w-1/2 lg:w-10/12 mx-auto">
            @foreach(['open' => 'openTasks', 'done' => 'doneTasks'] as $key => $item)
                <div class="lg:w-1/2 bg-white rounded-lg p-4">
                    <p class="text-xl font-semibold mt-2 text-blue-900 capitalize">{{ $key }} Task</p>
                    <ul class="my-4 text-gray-300">
                        @forelse($$item as $task)
                            <li class=" mt-4" id="1">
                                <div class="flex gap-2">
                                        @if($key == 'open')
                                            <div wire:click="markAsDone({{ $task->id }})"
                                                class="w-9/12 h-12 bg-slate-700 text-slate-400 rounded-[7px] flex justify-start items-center px-3 group cursor-pointer">
                                                <x-icons.check-circle class="w-6 h-6 group-hover:text-green-600 transition-all" />
                                                <span class="text-sm ml-4 group-hover:line-through font-semibold">{{ $task->task }}</span>
                                            </div>
                                        @else
                                            <div wire:click="delete({{ $task->id }})"
                                                 class="w-9/12 h-12 bg-slate-700 rounded-[7px] flex justify-start items-center px-3 group cursor-pointer">
                                                <x-icons.check-circle class="w-6 h-6 text-green-600 group-hover:hidden transition-all" />
                                                <x-icons.trash class="w-6 h-6 text-red-500 hidden group-hover:inline-block transition-all" />
                                                <span class="text-sm ml-4 group-hover:line-through font-semibold">{{ $task->task }}</span>
                                            </div>
                                        @endif
                                    <div class="w-1/4 h-12 bg-slate-700 rounded-[7px] flex justify-center text-xs font-semibold text-slate-400 items-center">
                                        <div class="text-center">
                                            @if($key == 'open')
                                                {{ $task->created_at->format('M.d.Y') }} <br>
                                                {{ $task->created_at->format('h:ia') }}
                                            @else
                                                {{ $task->updated_at->format('M.d.Y') }} <br>
                                                {{ $task->updated_at->format('h:ia') }}
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @empty
                            <li class=" mt-4" id="2">
                                <div class="flex gap-2">
                                    <div class="w-9/12 h-12 bg-slate-700 rounded-[7px] flex justify-start items-center px-3">No {{ $key }} Task found</div>
                                    <span class="w-1/4 h-12 bg-slate-700 rounded-[7px] flex justify-center text-sm text-gray-400 font-semibold items-center ">..:..</span>
                                </div>
                            </li>
                        @endforelse
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
</div>
