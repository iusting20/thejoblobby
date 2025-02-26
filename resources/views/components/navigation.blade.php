<nav class="bg-white dark:bg-zinc-800 shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ url('/') }}" class="text-[#FF2D20] text-2xl font-bold">
                        {{ config('app.name', 'The Job Lobby') }}
                    </a>
                </div>
                
                <!-- Desktop Navigation Links -->
                <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                    <a href="{{ url('/') }}" class="inline-flex items-center px-1 pt-1 border-b-2 border-[#FF2D20] text-sm font-medium leading-5 text-gray-900 dark:text-white focus:outline-none focus:border-[#FF2D20] transition duration-150 ease-in-out">
                        Home
                    </a>
                    <a href="#" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300 dark:hover:border-gray-700 focus:outline-none focus:text-gray-700 dark:focus:text-gray-300 focus:border-gray-300 dark:focus:border-gray-700 transition duration-150 ease-in-out">
                        Features
                    </a>
                    <a href="#" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300 dark:hover:border-gray-700 focus:outline-none focus:text-gray-700 dark:focus:text-gray-300 focus:border-gray-300 dark:focus:border-gray-700 transition duration-150 ease-in-out">
                        Pricing
                    </a>
                    <a href="#" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300 dark:hover:border-gray-700 focus:outline-none focus:text-gray-700 dark:focus:text-gray-300 focus:border-gray-300 dark:focus:border-gray-700 transition duration-150 ease-in-out">
                        Contact
                    </a>
                </div>
            </div>
            
            <!-- Login/Register Buttons -->
            <div class="hidden sm:ml-6 sm:flex sm:items-center">
                <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-gray-700 dark:text-gray-300 bg-white dark:bg-zinc-800 hover:bg-gray-50 dark:hover:bg-zinc-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#FF2D20] dark:focus:ring-offset-zinc-800 transition duration-150 ease-in-out">
                    Login
                </a>
                <a href="#" class="ml-3 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-[#FF2D20] hover:bg-[#FF2D20]/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#FF2D20] dark:focus:ring-offset-zinc-800 transition duration-150 ease-in-out">
                    Register
                </a>
            </div>
            
            <!-- Mobile menu button -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button type="button" class="bg-white dark:bg-zinc-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-zinc-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-[#FF2D20] dark:focus:ring-offset-zinc-800" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!-- Icon when menu is closed -->
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!-- Icon when menu is open -->
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Mobile menu, show/hide based on menu state -->
    <div class="sm:hidden" id="mobile-menu" style="display: none;">
        <div class="pt-2 pb-3 space-y-1">
            <a href="{{ url('/') }}" class="bg-[#FF2D20]/10 border-l-4 border-[#FF2D20] text-[#FF2D20] block pl-3 pr-4 py-2 text-base font-medium dark:bg-zinc-700">
                Home
            </a>
            <a href="#" class="border-l-4 border-transparent text-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-zinc-700 hover:border-gray-300 dark:hover:border-gray-600 hover:text-gray-800 dark:hover:text-gray-300 block pl-3 pr-4 py-2 text-base font-medium">
                Features
            </a>
            <a href="#" class="border-l-4 border-transparent text-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-zinc-700 hover:border-gray-300 dark:hover:border-gray-600 hover:text-gray-800 dark:hover:text-gray-300 block pl-3 pr-4 py-2 text-base font-medium">
                Pricing
            </a>
            <a href="#" class="border-l-4 border-transparent text-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-zinc-700 hover:border-gray-300 dark:hover:border-gray-600 hover:text-gray-800 dark:hover:text-gray-300 block pl-3 pr-4 py-2 text-base font-medium">
                Contact
            </a>
        </div>
        <div class="pt-4 pb-3 border-t border-gray-200 dark:border-zinc-700">
            <div class="flex items-center px-4">
                <a href="#" class="block w-full px-4 py-2 text-center text-sm font-medium text-gray-700 dark:text-gray-300 bg-gray-50 dark:bg-zinc-700 hover:bg-gray-100 dark:hover:bg-zinc-600 rounded-md">
                    Login
                </a>
                <a href="#" class="block w-full px-4 py-2 ml-3 text-center text-sm font-medium text-white bg-[#FF2D20] hover:bg-[#FF2D20]/90 rounded-md">
                    Register
                </a>
            </div>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuButton = document.querySelector('[aria-controls="mobile-menu"]');
        const mobileMenu = document.getElementById('mobile-menu');
        const iconClosed = mobileMenuButton.querySelector('.block');
        const iconOpen = mobileMenuButton.querySelector('.hidden');
        
        mobileMenuButton.addEventListener('click', function() {
            const expanded = this.getAttribute('aria-expanded') === 'true';
            this.setAttribute('aria-expanded', !expanded);
            
            if (expanded) {
                mobileMenu.style.display = 'none';
                iconClosed.classList.remove('hidden');
                iconClosed.classList.add('block');
                iconOpen.classList.remove('block');
                iconOpen.classList.add('hidden');
            } else {
                mobileMenu.style.display = 'block';
                iconClosed.classList.remove('block');
                iconClosed.classList.add('hidden');
                iconOpen.classList.remove('hidden');
                iconOpen.classList.add('block');
            }
        });
    });
</script> 