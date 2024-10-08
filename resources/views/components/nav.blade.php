<nav class="absolute top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-nowrap md:justify-start flex items-center p-4">
    <div class="w-full mx-auto items-center flex justify-between md:flex-nowrap flex-wrap md:px-10 px-4">
        <a class="text-white text-sm uppercase hidden lg:inline-block font-semibold" href="#">
        </a>

        <form class="md:flex hidden flex-row flex-wrap items-center lg:ml-auto">

        </form>



        @if(file_exists(app_path('Http/Livewire/LanguageSwitcher.php')))
            <ul class="flex-col md:flex-row list-none items-center hidden md:flex">
                <livewire:language-switcher />
            </ul>
        @endif
    </div>
</nav>
