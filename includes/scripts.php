<!-- Scripts -->
<script src="<?php echo BASE_URL; ?>js/main.js"></script>
<script>
    // Inicializar ícones Lucide
    lucide.createIcons();
</script>
<script>
(function() {
    function initMenu() {
        const btn = document.getElementById('mobile-menu-button');
        const menu = document.getElementById('mobile-menu');
        const iconOpen = document.getElementById('menu-icon-open');
        const iconClose = document.getElementById('menu-icon-close');

        if (!btn || !menu) {
            console.error("Erro: Elementos do menu não encontrados no DOM.");
            return;
        }

        btn.onclick = function(e) {
            e.preventDefault();
            console.log("Botão mobile clicado!"); // Verifique isso no console do navegador

            const isHidden = menu.classList.contains('hidden');
            
            if (isHidden) {
                menu.classList.remove('hidden');
                iconOpen.classList.add('hidden');
                iconClose.classList.remove('hidden');
                document.body.style.overflow = 'hidden'; // Impede scroll do fundo
            } else {
                menu.classList.add('hidden');
                iconOpen.classList.remove('hidden');
                iconClose.classList.add('hidden');
                document.body.style.overflow = ''; // Libera scroll
            }
        };

        // Garante que o Lucide processe os ícones novos se necessário
        if (window.lucide) {
            window.lucide.createIcons();
        }
    }

    // Tenta inicializar em diferentes estágios de carregamento
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initMenu);
    } else {
        initMenu();
    }
})();
</script>
</body>
</html>
