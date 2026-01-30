<?php
require_once __DIR__ . '/../config/bootstrap.php';
$pageTitle = "Galeria";
include __DIR__ . '/../includes/head.php';
include __DIR__ . '/../includes/header.php';
?>

<!-- HERO -->
<section class="py-20 bg-gray-50 dark:bg-gray-900">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold mb-6">Galeria de Projectos & Actividades</h1>
        <p class="text-xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
            Alguns momentos da nossa actuação em consultoria, formação e transformação organizacional.
        </p>
    </div>
</section>

<!-- GALERIA -->
<section class="py-20 bg-white dark:bg-gray-800">
    <div class="container mx-auto px-4 md:px-16 lg:px-24">

        <!-- FILTROS (visual, pode ligar depois com JS) -->
        <div class="flex flex-wrap justify-center gap-4 mb-14">
            <span class="px-6 py-2 rounded-full bg-lean-blue text-white text-sm font-bold">Todos</span>
            <span class="px-6 py-2 rounded-full bg-gray-100 dark:bg-gray-700 text-sm cursor-pointer">Consultoria</span>
            <span class="px-6 py-2 rounded-full bg-gray-100 dark:bg-gray-700 text-sm cursor-pointer">Formação</span>
            <span class="px-6 py-2 rounded-full bg-gray-100 dark:bg-gray-700 text-sm cursor-pointer">Workshops</span>
        </div>

        <!-- GRID -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <?php for ($i = 1; $i <= 6; $i++): ?>
                <div class="group relative overflow-hidden rounded-2xl shadow hover:shadow-xl transition bg-gray-100 dark:bg-gray-700">
                    
                    <!-- Placeholder de imagem -->
                    <div class="aspect-video flex items-center justify-center">
                        <i data-lucide="image"
                           class="w-14 h-14 text-gray-300 group-hover:scale-110 transition"></i>
                    </div>

                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                        <div class="text-center text-white px-6">
                            <h3 class="font-bold text-lg mb-2">Projecto Lean</h3>
                            <p class="text-sm opacity-90">Melhoria de processos e capacitação</p>
                        </div>
                    </div>

                </div>
            <?php endfor; ?>

        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-20 bg-lean-blue text-white text-center">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-6">
            Quer ver o seu projecto aqui?
        </h2>
        <p class="max-w-xl mx-auto mb-8 opacity-90">
            Entre em contacto connosco e descubra como podemos apoiar a sua organização
            na melhoria contínua.
        </p>
        <a href="<?= BASE_URL; ?>pages/contacto"
           class="inline-block bg-white text-lean-blue px-10 py-4 rounded-xl font-bold hover:bg-gray-100 transition">
            Falar Connosco
        </a>
    </div>
</section>

<?php
include __DIR__ . '/../includes/footer.php';
include __DIR__ . '/../includes/scripts.php';
?>
