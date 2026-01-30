<header class="sticky top-0 z-50 bg-white/80 dark:bg-gray-900/80 backdrop-blur-md border-b border-gray-200 dark:border-gray-800">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <a href="<?php echo BASE_URL; ?>" class="flex items-center space-x-2">
            <img src="<?php echo BASE_URL; ?>images/logo.png" alt="Engenharia Lean Logo" class="w-10 h-10">
            <span class="font-bold text-xl tracking-tight">Engenharia Lean <span class="text-lean-blue">Moçambique</span></span>
        </a>
        
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
        
        <button class="md:hidden p-2">
            <i data-lucide="menu" class="w-6 h-6"></i>
        </button>
    </div>
</header>
