<footer class="bg-gray-900 pt-16 pb-10 border-t border-gray-800">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-10 md:gap-12 mb-12">
            <!-- Coluna 1 - Logo + Descrição -->
            <div class="col-span-1">
                <a href="<?php echo BASE_URL; ?>" class="flex items-center space-x-2 mb-6">
                    <img src="<?php echo BASE_URL; ?>images/logo.png" alt="Engenharia Lean Logo" class="w-10 h-10">
                    <span class="font-bold text-xl tracking-tight text-white">Engenharia Lean</span>
                </a>
                <p class="text-gray-400 mb-6 leading-relaxed">
                    Excelência construída continuamente. Transformando processos em resultados duradouros em Moçambique.
                </p>
                <div class="flex space-x-5">
                    <a href="#" class="text-gray-400 hover:text-lean-blue transition-colors duration-200">
                        <i data-lucide="facebook" class="w-5 h-5"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-lean-blue transition-colors duration-200">
                        <i data-lucide="linkedin" class="w-5 h-5"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-lean-blue transition-colors duration-200">
                        <i data-lucide="instagram" class="w-5 h-5"></i>
                    </a>
                </div>
            </div>
            
            <!-- Coluna 2 - Serviços -->
            <div>
                <h4 class="font-semibold text-lg text-white mb-6">Serviços</h4>
                <ul class="space-y-3 text-gray-400">
                    <li><a href="<?php echo BASE_URL; ?>pages/consultoria" class="hover:text-lean-blue transition-colors">Consultoria Lean</a></li>
                    <li><a href="<?php echo BASE_URL; ?>pages/formacao" class="hover:text-lean-blue transition-colors">Formação & Treinamento</a></li>
                    <li><a href="<?php echo BASE_URL; ?>pages/gestao-processos" class="hover:text-lean-blue transition-colors">Gestão de Processos</a></li>
                    <li><a href="<?php echo BASE_URL; ?>pages/transformacao" class="hover:text-lean-blue transition-colors">Transformação Cultural</a></li>
                </ul>
            </div>
            
            <!-- Coluna 3 - Links Rápidos -->
            <div>
                <h4 class="font-semibold text-lg text-white mb-6">Links Rápidos</h4>
                <ul class="space-y-3 text-gray-400">
                    <li><a href="<?php echo BASE_URL; ?>pages/sobre" class="hover:text-lean-blue transition-colors">Sobre Nós</a></li>
                    <li><a href="<?php echo BASE_URL; ?>pages/contacto" class="hover:text-lean-blue transition-colors">Fale Connosco</a></li>
                    <li><a href="<?php echo BASE_URL; ?>pages/galeria" class="hover:text-lean-blue transition-colors">Galeria</a></li>
                    <li><a href="#" class="hover:text-lean-blue transition-colors">Política de Privacidade</a></li>
                </ul>
            </div>
            
            <!-- Coluna 4 - Contacto -->
            <div>
                <h4 class="font-semibold text-lg text-white mb-6">Contacto</h4>
                <ul class="space-y-4 text-gray-400">
                    <li class="flex items-start space-x-3">
                        <i data-lucide="map-pin" class="w-5 h-5 text-lean-blue shrink-0 mt-1"></i>
                        <span>Av. 25 de Setembro, Maputo, Moçambique</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i data-lucide="phone" class="w-5 h-5 text-lean-blue shrink-0"></i>
                        <span>+258 84 000 0000</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i data-lucide="mail" class="w-5 h-5 text-lean-blue shrink-0"></i>
                        <span>contacto@engenharialean.com</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Linha inferior com créditos -->
        <div class="border-t border-gray-800 pt-8 mt-4">
            <div class="flex flex-col md:flex-row justify-between items-center text-sm text-gray-500 gap-4">
                <p>© <?php echo date('Y'); ?> Centro de Melhoria Contínua - Engenharia Lean Moçambique. Todos os direitos reservados.</p>
                
                <p class="text-gray-500">
                    Desenvolvido por 
                    <a href="https://mefemasys.co.mz" target="_blank" rel="noopener" 
                       class="text-gray-300 hover:text-lean-blue transition-colors font-medium">
                        MEFEMA Systems
                    </a>
                </p>
            </div>
        </div>
    </div>
</footer>