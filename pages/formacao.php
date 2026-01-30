<?php
require_once __DIR__ . '/../config/bootstrap.php';
$pageTitle = "Formação";
include __DIR__ . '/../includes/head.php';
include __DIR__ . '/../includes/header.php';
?>

<!-- HERO -->
<section class="py-24 bg-green-50 dark:bg-gray-900">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6">
            Formação e <span class="text-lean-green">Capacitação</span>
        </h1>
        <p class="text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">
            Programas de formação práticos e orientados a resultados para desenvolver
            competências e transformar a cultura das organizações.
        </p>
    </div>
</section>

<!-- PORQUÊ FORMAÇÃO -->
<section class="py-20 bg-white dark:bg-gray-800">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-3xl font-bold mb-6">Porquê investir em formação?</h2>
                <p class="text-gray-600 dark:text-gray-400 mb-6">
                    A melhoria contínua só é sustentável quando as pessoas possuem
                    conhecimento, método e mentalidade certa para agir.
                </p>

                <ul class="space-y-4">
                    <li class="flex items-start space-x-3">
                        <i data-lucide="check-circle" class="text-lean-green w-6 h-6 mt-1"></i>
                        <span>Equipas mais produtivas e alinhadas</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <i data-lucide="check-circle" class="text-lean-green w-6 h-6 mt-1"></i>
                        <span>Redução de erros e retrabalho</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <i data-lucide="check-circle" class="text-lean-green w-6 h-6 mt-1"></i>
                        <span>Criação de cultura de melhoria contínua</span>
                    </li>
                </ul>
            </div>

            <div class="bg-gray-100 dark:bg-gray-700 p-14 rounded-3xl flex items-center justify-center">
                <i data-lucide="graduation-cap" class="w-32 h-32 text-lean-green"></i>
            </div>
        </div>
    </div>
</section>

<!-- PROGRAMAS DE FORMAÇÃO -->
<section class="py-20 bg-gray-50 dark:bg-gray-900">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-14">Programas de Formação</h2>

        <div class="grid md:grid-cols-3 gap-8">

            <!-- Lean Six Sigma -->
            <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-sm hover:shadow-md transition">
                <div class="bg-green-100 dark:bg-green-900 p-3 rounded-xl w-fit mb-4">
                    <i data-lucide="award" class="w-6 h-6 text-lean-green"></i>
                </div>
                <h3 class="text-xl font-bold mb-3 text-lean-green">Lean Six Sigma</h3>
                <p class="text-gray-500 dark:text-gray-400 text-sm mb-6">
                    Certificações White, Yellow, Green e Black Belt com foco prático
                    e aplicação direta em projetos reais.
                </p>
                <a href="contacto" class="text-lean-green font-bold inline-flex items-center">
                    Saber mais <i data-lucide="arrow-right" class="ml-2 w-4 h-4"></i>
                </a>
            </div>

            <!-- Workshops Kaizen -->
            <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-sm hover:shadow-md transition">
                <div class="bg-blue-100 dark:bg-blue-900 p-3 rounded-xl w-fit mb-4">
                    <i data-lucide="zap" class="w-6 h-6 text-lean-blue"></i>
                </div>
                <h3 class="text-xl font-bold mb-3 text-lean-green">Workshops Kaizen</h3>
                <p class="text-gray-500 dark:text-gray-400 text-sm mb-6">
                    Eventos intensivos focados na resolução rápida de problemas
                    e melhoria imediata de processos críticos.
                </p>
                <a href="contacto" class="text-lean-green font-bold inline-flex items-center">
                    Saber mais <i data-lucide="arrow-right" class="ml-2 w-4 h-4"></i>
                </a>
            </div>

            <!-- 5S -->
            <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-sm hover:shadow-md transition">
                <div class="bg-yellow-100 dark:bg-yellow-900 p-3 rounded-xl w-fit mb-4">
                    <i data-lucide="layout-grid" class="w-6 h-6 text-yellow-500"></i>
                </div>
                <h3 class="text-xl font-bold mb-3 text-lean-green">Metodologia 5S</h3>
                <p class="text-gray-500 dark:text-gray-400 text-sm mb-6">
                    Organização, disciplina e padronização para ambientes de trabalho
                    mais seguros e produtivos.
                </p>
                <a href="contacto" class="text-lean-green font-bold inline-flex items-center">
                    Saber mais <i data-lucide="arrow-right" class="ml-2 w-4 h-4"></i>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- DIFERENCIAIS -->
<section class="py-20 bg-white dark:bg-gray-800">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-14">O que nos diferencia</h2>

        <div class="grid md:grid-cols-4 gap-6">
            <div class="bg-gray-50 dark:bg-gray-700 p-6 rounded-xl text-center">
                <i data-lucide="briefcase" class="w-8 h-8 text-lean-green mx-auto mb-3"></i>
                <h4 class="font-bold mb-2">Prático</h4>
                <p class="text-sm text-gray-600 dark:text-gray-400">
                    Formação baseada em casos reais.
                </p>
            </div>
            <div class="bg-gray-50 dark:bg-gray-700 p-6 rounded-xl text-center">
                <i data-lucide="users" class="w-8 h-8 text-lean-green mx-auto mb-3"></i>
                <h4 class="font-bold mb-2">Customizado</h4>
                <p class="text-sm text-gray-600 dark:text-gray-400">
                    Conteúdo adaptado à realidade da empresa.
                </p>
            </div>
            <div class="bg-gray-50 dark:bg-gray-700 p-6 rounded-xl text-center">
                <i data-lucide="clock" class="w-8 h-8 text-lean-green mx-auto mb-3"></i>
                <h4 class="font-bold mb-2">Eficiente</h4>
                <p class="text-sm text-gray-600 dark:text-gray-400">
                    Resultados visíveis em curto prazo.
                </p>
            </div>
            <div class="bg-gray-50 dark:bg-gray-700 p-6 rounded-xl text-center">
                <i data-lucide="shield-check" class="w-8 h-8 text-lean-green mx-auto mb-3"></i>
                <h4 class="font-bold mb-2">Sustentável</h4>
                <p class="text-sm text-gray-600 dark:text-gray-400">
                    Conhecimento que fica na organização.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-24 bg-lean-green text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold mb-6">
            Capacite a sua equipa para melhores resultados
        </h2>
        <p class="text-lg opacity-90 max-w-2xl mx-auto mb-8">
            Entre em contacto connosco e descubra o programa ideal para a sua organização.
        </p>
        <a href="contacto"
           class="inline-block bg-white text-lean-green font-semibold px-10 py-4 rounded-xl hover:bg-gray-100 transition">
            Solicitar Formação
        </a>
    </div>
</section>

<?php
include __DIR__ . '/../includes/footer.php';
include __DIR__ . '/../includes/scripts.php';
?>
