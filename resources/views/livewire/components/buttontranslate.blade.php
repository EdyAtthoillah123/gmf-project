<div class="w-full py-8 flex justify-end">
    <div class="relative inline-block text-left">
        <button type="button" class="inline-flex justify-center w-full rounded-md px-4 py-2 text-title2 text-white" id="menu-button" aria-expanded="true" aria-haspopup="true">
            <svg class="h-5 w-5 text-white mr-2 mt-[3px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm0-14a6 6 0 110 12A6 6 0 0110 4zm0 8a2 2 0 110-4 2 2 0 010 4z" clip-rule="evenodd" />
            </svg>
            <span class="hover:font-bold">Indonesia</span>
            <svg class="-mr-1 ml-2 h-5 w-5 mt-1 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.293l3.71-4.064a.75.75 0 111.08 1.04l-4 4.375a.75.75 0 01-1.08 0l-4-4.375a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
            </svg>
        </button>

        <!-- Dropdown menu -->
        <div class="origin-bottom-right absolute right-0 -mt-32 w-56 rounded-md shadow-lg bg-lgreen/15 ring-1 ring-black ring-opacity-5 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
            <div class="py-1" role="none">
                <a href="#" class="text-title2 text-white block px-4 py-2 hover:bg-lgreen/25 hover:text-bold" role="menuitem" tabindex="-1" id="menu-item-0">Indonesia</a>
                <a href="#" class="text-title2 text-white block px-4 py-2 hover:bg-lgreen/25 hover:text-bold" role="menuitem" tabindex="-1" id="menu-item-1">English</a>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('menu-button').addEventListener('click', function() {
        const menu = document.querySelector('[role="menu"]');
        menu.classList.toggle('hidden');
    });
</script>
