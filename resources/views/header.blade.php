<header class="text-gray-600 body-font sticky top-0 bg-teal-400 shadow-2xl">
    <div class="container mx-auto flex flex-wrap p-3 flex-col md:flex-row items-center justify-between">
        <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0" href="">
            <span class="ml-3 text-xl text-slate-600">Student Managenet</span>
        </a>
        <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center gap-1">
            <form action="{{route('student.search')}}">
            <input type='text' name="search" placeholder='Search student details' class='px-10 rounded-lg'/>
            <a class='px-2 py-2 bg-teal-300 hover:bg-teal-700 rounded-md text-sm font-semibold shadow-lg'>Sumbit</a>
        </form>
        </nav>
        <nav class="flex flex-wrap items-center text-base justify-end gap-4">
            <a href="" class="text-sm font-semibold px-3 py-2 rounded-lg shadow-lg hover:bg-teal-700 bg-teal-300 cursor-pointer">About</a>
            <a href="" class="text-sm font-semibold px-3 py-2 rounded-lg shadow-lg hover:bg-teal-700 bg-teal-300 cursor-pointer">Contact</a>
            <a class="text-sm font-semibold px-3 py-2 rounded-lg shadow-lg hover:bg-teal-700 bg-teal-300 cursor-pointer">Logout</a>
        </nav>
    </div>
</header>