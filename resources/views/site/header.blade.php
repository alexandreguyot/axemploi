<div>
    <nav x-show="open" @click.away="open = false" class="absolute left-0 mt-2 w-48 bg-white rounded shadow-lg z-10" x-transition:enter="menu-enter" x-transition:enter-start="menu-enter" x-transition:enter-end="menu-enter-active" x-transition:leave="menu-leave" x-transition:leave-start="menu-leave" x-transition:leave-end="menu-leave-active">
        <ul class="flex flex-col">
            <li>
                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Item 1</a>
                <ul class="hidden" x-show="subMenu1" x-data="{ subMenu1: false }">
                    <li>
                        <a @click.prevent="subMenu1 = !subMenu1" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Sous-Menu 1</a>
                        <ul class="ml-4" x-show="subMenu1">
                            <li>
                                <a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-200">Sous-Sous-Menu 1</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-200">Sous-Sous-Menu 2</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Item 2</a>
                <ul class="hidden" x-show="subMenu2" x-data="{ subMenu2: false }">
                    <li>
                        <a @click.prevent="subMenu2 = !subMenu2" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Sous-Menu 2</a>
                        <ul class="ml-4" x-show="subMenu2">
                            <li>
                                <a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-200">Sous-Sous-Menu 1</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-200">Sous-Sous-Menu 2</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Item 3</a>
            </li>
        </ul>
    </nav>
</div>
