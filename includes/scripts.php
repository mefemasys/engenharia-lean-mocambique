<!-- Scripts -->
<script src="<?php echo BASE_URL; ?>js/main.js"></script>
<script>
    // Inicializar ícones Lucide
    lucide.createIcons();
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIconOpen = document.getElementById('menu-icon-open');
        const menuIconClose = document.getElementById('menu-icon-close');

        mobileMenuButton.addEventListener('click', () => {
            // Alterna a visibilidade do menu
            const isHidden = mobileMenu.classList.toggle('hidden');
            
            // Alterna os ícones (Menu / X)
            if (isHidden) {
                menuIconOpen.classList.remove('hidden');
                menuIconClose.classList.add('hidden');
            } else {
                menuIconOpen.classList.add('hidden');
                menuIconClose.classList.remove('hidden');
            }
        });

        // Opcional: Fechar o menu ao clicar em um link
        const mobileLinks = mobileMenu.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                menuIconOpen.classList.remove('hidden');
                menuIconClose.classList.add('hidden');
            });
        });
    });
</script>
</body>
</html>
