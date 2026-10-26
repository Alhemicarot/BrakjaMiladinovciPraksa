<header class="bg-cream border-b border-gray-200 py-4 px-6">
    <div class="max-w-7xl mx-auto flex items-center justify-between">

        <!-- Logo Section -->
        <div class="flex-shrink-0">
            <a href="/">
                <img src="{{ asset('images/logo.png') }}" alt="Library Logo" class="h-26 w-auto"> </a>
        </div>

        <!-- Navigation Menu -->
        <nav class="hidden md:flex items-center space-x-2 text-black font-medium">

            <!-- Simple Link -->
            <a href="/"
                class="px-3 py-2 transition {{ Request::is('/') ? 'text-library-red border-b-2 border-library-red' : 'hover:text-library-red' }}">
                Почетна
            </a>
            <!-- Dropdown Item: За нас -->
            <div class="relative group">
                <button class="flex items-center gap-1 px-3 py-2 hover:text-library-red transition focus:outline-none">
                    <a href="/about"
                        class="px-3 py-2 transition {{ Request::is('about*') ? 'text-library-red border-b-2 border-library-red' : 'hover:text-library-red' }}">
                        За нас
                    </a>
                    <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                <!-- Dropdown Menu -->
                <div
                    class="absolute left-0 hidden group-hover:block w-48 bg-white border border-gray-200 shadow-lg z-50">
                    <a href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-library-red">Историја</a>
                    <a href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-library-red">Културно
                        наследство</a>
                    <a href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-library-red">Мисија и
                        визија</a>
                    <a href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-library-red">Колекција
                        на уметнички слики</a>
                    <div class="border-t border-gray-100"></div>
                    <a href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-library-red">Органограм</a>
                </div>
            </div>

            <!-- Dropdown Item: Соопштенија -->
            <div class="relative group">
                <button class="flex items-center gap-1 px-3 py-2 hover:text-library-red transition focus:outline-none">
                    <a href="/news"
                        class="px-3 py-2 transition {{ Request::is('news*') ? 'text-library-red border-b-2 border-library-red' : 'hover:text-library-red' }}">
                        Соопштенија
                    </a>
                    <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div
                    class="absolute left-0 hidden group-hover:block w-48 bg-white border border-gray-200 shadow-lg z-50">
                    <a href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-library-red">Настани</a>
                    <a href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-library-red">Извештаи</a>
                    <a href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-library-red">Јавни
                        набавки</a>
                    <a href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-library-red">Огласи</a>
                </div>
            </div>

            <!-- Dropdown Item: Фонд -->
            <div class="relative group">
                <button class="flex items-center gap-1 px-3 py-2 hover:text-library-red transition focus:outline-none">
                    <a href="/font"
                        class="px-3 py-2 transition {{ Request::is('font*') ? 'text-library-red border-b-2 border-library-red' : 'hover:text-library-red' }}">
                        Фонт
                    </a>
                    <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div
                    class="absolute left-0 hidden group-hover:block w-48 bg-white border border-gray-200 shadow-lg z-50">
                    <a href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-library-red">Изданија</a>
                    <a href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-library-red">Збирка на
                        стари и ретки книги</a>
                </div>
            </div>

            <!-- Dropdown Item: Водич за корисници -->
            <div class="relative group">
                <button class="flex items-center gap-1 px-3 py-2 hover:text-library-red transition focus:outline-none">
                    <a href="/userLead"
                        class="px-3 py-2 transition {{ Request::is('userLead*') ? 'text-library-red border-b-2 border-library-red' : 'hover:text-library-red' }}">
                        Водич за корисници
                    </a>
                    <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div
                    class="absolute left-0 hidden group-hover:block w-48 bg-white border border-gray-200 shadow-lg z-50">
                    <a href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-library-red">Услуги</a>
                    <a href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-library-red">Позајмување
                        книги</a>
                    <a href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-library-red">Ценовник</a>
                </div>
            </div>

            <!-- Dropdown Item: Библиотеки -->
            <div class="relative group">
                <button class="flex items-center gap-1 px-3 py-2 hover:text-library-red transition focus:outline-none">
                    <a href="/libraries"
                        class="px-3 py-2 transition {{ Request::is('libraries*') ? 'text-library-red border-b-2 border-library-red' : 'hover:text-library-red' }}">
                        Библиотеки
                    </a>
                    <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div
                    class="absolute left-0 hidden group-hover:block w-48 bg-white border border-gray-200 shadow-lg z-50">
                    <a href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-library-red">Браќа
                        Миладиновци</a>
                    <a href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-library-red">Другарче</a>
                    <a href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-library-red">Цветан
                        Димов</a>
                    <a href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-library-red">Страшо
                        Пинџур</a>
                </div>
            </div>
        </nav>

        <!-- Right Side Actions -->
        <div class="flex items-center space-x-4">
            <a href="#"
                class="bg-[#8B3A3A] text-white px-6 py-2 rounded text-sm font-bold hover:bg-[#722f2f] transition">
                COBISS
            </a>

            <div class="flex flex-col text-[12px] font-bold leading-tight text-gray-600 cursor-pointer">
                <span class="hover:text-library-red transition">МКД</span>
                <span class="hover:text-library-red transition">АЛБ</span>
            </div>
        </div>
    </div>
</header>
