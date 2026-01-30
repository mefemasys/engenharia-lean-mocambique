<header class="sticky top-0 z-50 bg-white/80 dark:bg-gray-900/80 backdrop-blur-md border-b border-gray-200 dark:border-gray-800">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <a href="<?php echo BASE_URL; ?>" class="flex items-center space-x-2">
            <img src="<?php echo BASE_URL; ?>images/logo.png" alt="Engenharia Lean Logo" class="w-10 h-10">
            <span class="font-bold text-xl tracking-tight">Engenharia Lean <span class="text-lean-blue">Moçambique</span></span>
        </a>
        
        <!-- Menu Desktop -->
        <nav class="hidden md:flex space-x-8 items-center">
            <a href="<?php echo BASE_URL; ?>" class="hover:text-lean-blue transition">Início</a>
            <a href="<?php echo BASE_URL; ?>pages/sobre" class="hover:text-lean-blue transition">Sobre</a>
            <div class="relative group">
                <button class="flex items-center space-x-1 hover:text-lean-blue transition">
                    <span>Serviços</span>
                    <i data-lucide="chevron-down" class="w-4 h-4"></i>
                </button>
                <div class="absolute left-0 mt-2 w-56 bg-white dark:bg-gray-800 border border-gray-100 dark:border-gray-700 rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                    <a href="<?php echo BASE_URL; ?>pages/consultoria" class="block px-4 py-2 hover:bg-gray-50 dark:hover:bg-gray-700 border-l-4 border-lean-blue">Consultoria</a>
                    <a href="<?php echo BASE_URL; ?>pages/formacao" class="block px-4 py-2 hover:bg-gray-50 dark:hover:bg-gray-700 border-l-4 border-lean-green">Formação</a>
                    <a href="<?php echo BASE_URL; ?>pages/gestao-processos" class="block px-4 py-2 hover:bg-gray-50 dark:hover:bg-gray-700 border-l-4 border-lean-orange">Gestão de Processos</a>
                    <a href="<?php echo BASE_URL; ?>pages/transformacao" class="block px-4 py-2 hover:bg-gray-50 dark:hover:bg-gray-700 border-l-4 border-lean-red">Transformação</a>
                    <a href="<?php echo BASE_URL; ?>pages/suporte" class="block px-4 py-2 hover:bg-gray-50 dark:hover:bg-gray-700 border-l-4 border-lean-cyan">Suporte e Mentoria</a>
                </div>
            </div>
            <a href="<?php echo BASE_URL; ?>pages/contacto" class="hover:text-lean-blue transition">Contacto</a>
            
            <button id="theme-toggle" class="p-2 rounded-full bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-300">
                <i data-lucide="sun" id="sun-icon" class="w-5 h-5 hidden"></i>
                <i data-lucide="moon" id="moon-icon" class="w-5 h-5 hidden"></i>
            </button>
        </nav>
        
        <!-- Botão Mobile -->
        <div class="flex items-center md:hidden space-x-4">
             <button id="theme-toggle-mobile" class="p-2 rounded-full bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-300">
                <i data-lucide="sun" class="w-5 h-5 dark:block hidden"></i>
                <i data-lucide="moon" class="w-5 h-5 dark:hidden block"></i>
            </button>
            <button id="mobile-menu-button" class="p-2 text-gray-600 dark:text-gray-300 focus:outline-none">
                <i data-lucide="menu" id="menu-icon-open" class="w-6 h-6"></i>
                <i data-lucide="x" id="menu-icon-close" class="w-6 h-6 hidden"></i>
            </button>
        </div>
    </div>

    <!-- Menu Mobile Dropdown (Escondido por padrão) -->
    <div id="mobile-menu" class="hidden md:hidden bg-white dark:bg-gray-900 border-b border-gray-200 dark:border-gray-800">
        <div class="px-4 pt-2 pb-6 space-y-2">
            <a href="<?php echo BASE_URL; ?>" class="block px-3 py-2 rounded-md hover:bg-gray-50 dark:hover:bg-gray-800 transition">Início</a>
            <a href="<?php echo BASE_URL; ?>pages/sobre" class="block px-3 py-2 rounded-md hover:bg-gray-50 dark:hover:bg-gray-800 transition">Sobre</a>
            
            <div class="space-y-1">
                <p class="px-3 py-2 text-xs font-semibold text-gray-500 uppercase tracking-wider">Serviços</p>
                <a href="<?php echo BASE_URL; ?>pages/consultoria" class="block px-3 py-2 pl-6 border-l-2 border-lean-blue hover:bg-gray-50 dark:hover:bg-gray-800">Consultoria</a>
                <a href="<?php echo BASE_URL; ?>pages/formacao" class="block px-3 py-2 pl-6 border-l-2 border-lean-green hover:bg-gray-50 dark:hover:bg-gray-800">Formação</a>
                <a href="<?php echo BASE_URL; ?>pages/gestao-processos" class="block px-3 py-2 pl-6 border-l-2 border-lean-orange hover:bg-gray-50 dark:hover:bg-gray-800">Gestão de Processos</a>
                <a href="<?php echo BASE_URL; ?>pages/transformacao" class="block px-3 py-2 pl-6 border-l-2 border-lean-red hover:bg-gray-50 dark:hover:bg-gray-800">Transformação</a>
                <a href="<?php echo BASE_URL; ?>pages/suporte" class="block px-3 py-2 pl-6 border-l-2 border-lean-cyan hover:bg-gray-50 dark:hover:bg-gray-800">Suporte e Mentoria</a>
            </div>
            
            <a href="<?php echo BASE_URL; ?>pages/contacto" class="block px-3 py-2 rounded-md hover:bg-gray-50 dark:hover:bg-gray-800 transition">Contacto</a>
        </div>
    </div>
</header>
