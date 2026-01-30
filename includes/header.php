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
            <a href="<?php echo BASE_URL; ?>pages/contacto" class="hover:text-lean-blue transition">Contacto</a>
            
            <button id="theme-toggle" class="p-2 rounded-full bg-gray-100 dark:bg-gray-800">
                <i data-lucide="sun" class="w-5 h-5"></i>
            </button>
        </nav>
        
        <!-- Botão Mobile - Adicionado estilo cursor-pointer e z-index -->
        <button id="mobile-menu-button" class="md:hidden p-2 z-[60] relative cursor-pointer" aria-label="Abrir Menu">
            <i data-lucide="menu" id="menu-icon-open" class="w-6 h-6 block"></i>
            <i data-lucide="x" id="menu-icon-close" class="w-6 h-6 hidden"></i>
        </button>
    </div>

    <!-- Menu Mobile Dropdown -->
    <div id="mobile-menu" class="hidden fixed inset-0 top-[73px] z-40 bg-white dark:bg-gray-900 md:hidden overflow-y-auto">
        <div class="flex flex-col p-6 space-y-4">
            <a href="<?php echo BASE_URL; ?>" class="text-lg font-medium border-b pb-2">Início</a>
            <a href="<?php echo BASE_URL; ?>pages/sobre" class="text-lg font-medium border-b pb-2">Sobre</a>
            
            <div class="py-2">
                <p class="text-xs font-bold text-gray-400 uppercase mb-2">Serviços</p>
                <div class="pl-4 space-y-3 border-l-2 border-blue-500">
                    <a href="<?php echo BASE_URL; ?>pages/consultoria" class="block">Consultoria</a>
                    <a href="<?php echo BASE_URL; ?>pages/formacao" class="block">Formação</a>
                    <a href="<?php echo BASE_URL; ?>pages/gestao-processos" class="block">Gestão de Processos</a>
                    <a href="<?php echo BASE_URL; ?>pages/transformacao" class="block">Transformação</a>
                    <a href="<?php echo BASE_URL; ?>pages/suporte" class="block">Suporte e Mentoria</a>
                </div>
            </div>
            
            <a href="<?php echo BASE_URL; ?>pages/contacto" class="text-lg font-medium border-b pb-2">Contacto</a>
        </div>
    </div>
</header>

