<div>
    <!-- navbar -->
    <nav class="flex justify-between bg-gray-900 text-white w-screen">
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



    <div class="flex justify-center items-center bg-gray-300 min-h-screen">
        <div class="h-auto md:w-1/2 px-2 w-96 bg-white rounded-lg">
            <div class="input_text relative"> <input class="text-sm h-12 w-full my-4 pr-20 md:pr-28 outline-none pl-8" type="text" placeholder="Write a new task"> <button class="add_task text-sm transition-all hover:bg-blue-700 cursor-pointer text-white bg-blue-400 rounded-lg h-10 w-16 md:w-24 absolute right-1 top-[20px]">Add task</button> <i class="absolute top-[27px] text-gray-600 text-xl left-2 fa fa-pencil-square"></i> </div>
            <ul class="all_tasks">
                <li id="1">
                    <hr class="mt-2">
                    <div class="my-4 flex justify-between px-1">
                        <div class="flex items-center gap-2"> <span onclick="tick(1)" class="h-8 cursor-pointer w-8 flex justify-center items-center border border-gray-600 rounded-full "><i id="checked1" class="transition-all hover:text-lg text-blue-500 hover:text-blue-900 fa fa-check"></i></span>
                            <p class="md:max-w-[375px] truncate max-w-[280px] "><strike id="strike1" class="text-gray-600 text-sm no-underline ">hi this is john doe</strike></p>
                        </div> <span onclick="trash(1)" class="h-8 cursor-pointer w-8 flex justify-center items-center border border-gray-600 rounded-full "><i class="transition-all hover:text-lg text-red-600 hover:text-red-900 fa fa-trash"></i></span>
                    </div>
                </li>
            </ul>
        </div>
    </div>






    <div class="flex justify-center items-center min-h-screen bg-[#cbd7e3]">
        <div class="h-auto  w-96 bg-white rounded-lg p-4">
            <div class="mt-3 text-sm text-[#8ea6c8] flex justify-between items-center">
                <p class="set_date">Thursday 28 May</p>
                <p class="set_time">8:00 AM</p>
            </div>
            <p class="text-xl font-semibold mt-2 text-[#063c76]">To-do List</p>
            <div class="w-full mt-4 flex text-sm flex-col text-center justify-center ">
                <div class=" px-[15px] flex justify-between text-center items-center">
                    <p>s</p>
                    <p>m</p>
                    <p>t</p>
                    <p>w</p>
                    <p>t</p>
                    <p>f</p>
                    <p>s</p>
                </div>
                <div class="w-full pl-1 flex justify-between text-center items-center">
                    <span class="h-7 w-7 rounded-full cursor-pointer transition-all hover:bg-[#063c76] hover:text-white bg-[#fff] flex justify-center items-center"><p>24</p></span>
                    <span class="h-7 w-7 rounded-full cursor-pointer transition-all hover:bg-[#063c76] hover:text-white bg-[#fff] flex justify-center items-center"><p>25</p></span>
                    <span class="h-7 w-7 rounded-full cursor-pointer transition-all hover:bg-[#063c76] hover:text-white bg-[#fff] flex justify-center items-center"><p>26</p></span>
                    <span class="h-7 w-7 rounded-full cursor-pointer transition-all hover:bg-[#063c76] hover:text-white bg-[#fff] flex justify-center items-center"><p>27</p></span>
                    <span class="h-7 w-7 rounded-full cursor-pointer transition-all hover:bg-[#063c76] hover:text-white bg-[#fff] flex justify-center items-center"><p>28</p></span>
                    <span class="h-7 w-7 rounded-full cursor-pointer transition-all hover:bg-[#063c76] hover:text-white bg-[#fff] flex justify-center items-center"><p>29</p></span>
                    <span class="h-7 w-7 rounded-full cursor-pointer transition-all hover:bg-[#063c76] hover:text-white bg-[#fff] flex justify-center items-center"><p>30</p></span>
                </div>
            </div>
            <ul class="my-4 ">
                <li class=" mt-4" id="1">
                    <div class="flex gap-2">
                        <div class="w-9/12 h-12 bg-[#e0ebff] rounded-[7px] flex justify-start items-center px-3">
                            <span id="check1" class=" w-7 h-7 bg-white rounded-full border border-white transition-all cursor-pointer hover:border-[#36d344] flex justify-center items-center" onclick="checked(1)"><i class="text-white fa fa-check"></i></span>
                            <strike id="strike1" class="strike_none text-sm ml-4 text-[#5b7a9d] font-semibold">take out the trash</strike>
                        </div>
                        <span class="w-1/4 h-12 bg-[#e0ebff] rounded-[7px] flex justify-center text-sm text-[#5b7a9d] font-semibold items-center ">9:00 AM</span>
                    </div>
                </li>
                <li class=" mt-4" id="2">
                    <div class="flex gap-2">
                        <div class="w-9/12 h-12 bg-[#e0ebff] rounded-[7px] flex justify-start items-center px-3">
                            <span id="check2" class=" w-7 h-7 bg-white rounded-full border border-white transition-all cursor-pointer hover:border-[#36d344] flex justify-center items-center" onclick="checked(2)"><i class="text-white fa fa-check"></i></span>
                            <strike id="strike2" class="strike_none text-sm ml-4 text-[#5b7a9d] font-semibold">do homework </strike>
                        </div>
                        <span class="w-1/4 h-12 bg-[#e0ebff] rounded-[7px] flex justify-center text-sm text-[#5b7a9d] font-semibold items-center ">12:00 PM</span>
                    </div>
                </li>
                <li class=" mt-4" id="3">
                    <div class="flex gap-2">
                        <div class="w-9/12 h-12 bg-[#e0ebff] rounded-[7px] flex justify-start items-center px-3">
                            <span id="check3" class=" w-7 h-7 bg-white rounded-full border border-white transition-all cursor-pointer hover:border-[#36d344] flex justify-center items-center" onclick="checked(3)"><i class="text-white fa fa-check"></i></span>
                            <strike id="strike3" class="strike_none  text-sm ml-4 text-[#5b7a9d] font-semibold">go to grocery store</strike>
                        </div>
                        <span class="w-1/4 h-12 bg-[#e0ebff] rounded-[7px] flex justify-center text-sm text-[#5b7a9d] font-semibold items-center ">1:00 PM</span>
                    </div>
                </li>
                <li class=" mt-4" id="4">
                    <div class="flex gap-2">
                        <div class="w-9/12 h-12 bg-[#e0ebff] rounded-[7px] flex justify-start items-center px-3">
                            <span id="check4" class=" w-7 h-7 bg-white rounded-full border border-white transition-all cursor-pointer hover:border-[#36d344] flex justify-center items-center" onclick="checked(4)"><i class="text-white fa fa-check"></i></span>
                            <strike id="strike4" class="strike_none text-sm ml-4 text-[#5b7a9d] font-semibold">run 5 kilometers</strike>
                        </div>
                        <span class="w-1/4 h-12 bg-[#e0ebff] rounded-[7px] flex justify-center text-sm text-[#5b7a9d] font-semibold items-center ">4:20 PM</span>
                    </div>
                </li>
                <li class=" mt-4" id="5">
                    <div class="flex gap-2">
                        <div class="w-9/12 h-12 bg-[#e0ebff] rounded-[7px] flex justify-start items-center px-3">
                            <span id="check5" class=" w-7 h-7 bg-white rounded-full border border-white transition-all cursor-pointer hover:border-[#36d344] flex justify-center items-center" onclick="checked(5)"><i class="text-white fa fa-check"></i></span>
                            <strike id="strike5" class="strike_none text-sm ml-4 text-[#5b7a9d] font-semibold">load the dishwasher</strike>
                        </div>
                        <span class="w-1/4 h-12 bg-[#e0ebff] rounded-[7px] flex justify-center text-sm text-[#5b7a9d] font-semibold items-center ">9:00 PM</span>
                    </div>
                </li>
                <li class=" mt-4" id="6">
                    <div class="flex gap-2">
                        <div class="w-9/12 h-12 bg-[#e0ebff] rounded-[7px] flex justify-start items-center px-3">
                            <span id="check6" class=" w-7 h-7 bg-white rounded-full border border-white transition-all cursor-pointer hover:border-[#36d344] flex justify-center items-center" onclick="checked(6)"><i class="text-white fa fa-check"></i></span>
                            <strike id="strike6" class="strike_none text-sm ml-4 text-[#5b7a9d] font-semibold">Take out the trash</strike>
                        </div>
                        <span class="w-1/4 h-12 bg-[#e0ebff] rounded-[7px] flex justify-center text-sm text-[#5b7a9d] font-semibold items-center ">9:00 AM</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
