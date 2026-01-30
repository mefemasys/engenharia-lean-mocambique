<?php
require_once __DIR__ . '/../config/bootstrap.php';
$pageTitle = "Suporte e Mentoria";
include __DIR__ . '/../includes/head.php';
include __DIR__ . '/../includes/header.php';
?>

<!-- HERO -->
<section class="py-24 bg-cyan-50 dark:bg-gray-900">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6">
            Suporte e <span class="text-cyan-600">Mentoria</span>
        </h1>
        <p class="text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">
            Acompanhamento contínuo para sustentar resultados, desenvolver líderes
            e garantir que a melhoria contínua faça parte do dia a dia.
        </p>
    </div>
</section>

<!-- O QUE É SUPORTE -->
<section class="py-20 bg-white dark:bg-gray-800">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-3xl font-bold mb-6">O que oferecemos em Suporte e Mentoria?</h2>
                <p class="text-gray-600 dark:text-gray-400 mb-6">
                    Após a implementação de melhorias, muitas organizações perdem
                    resultados por falta de acompanhamento estruturado.
                </p>
                <p class="text-gray-600 dark:text-gray-400">
                    O nosso serviço de suporte e mentoria garante disciplina,
                    evolução contínua e desenvolvimento das lideranças.
                </p>
            </div>

            <div class="bg-gray-100 dark:bg-gray-700 p-14 rounded-3xl flex items-center justify-center">
                <i data-lucide="life-buoy" class="w-32 h-32 text-cyan-600"></i>
            </div>
        </div>
    </div>
</section>

<!-- TIPOS DE SUPORTE -->
<section class="py-20 bg-gray-50 dark:bg-gray-900">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-14">Modelos de Suporte</h2>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-sm">
                <i data-lucide="calendar-check" class="w-8 h-8 text-cyan-600 mb-4"></i>
                <h3 class="font-bold text-xl mb-3">Acompanhamento Contínuo</h3>
                <p class="text-gray-600 dark:text-gray-400">
                    Sessões periódicas para monitorar indicadores,
                    projetos e evolução da cultura Lean.
                </p>
            </div>

            <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-sm">
                <i data-lucide="user-check" class="w-8 h-8 text-cyan-600 mb-4"></i>
                <h3 class="font-bold text-xl mb-3">Mentoria de Lideranças</h3>
                <p class="text-gray-600 dark:text-gray-400">
                    Apoio direto a gestores e líderes na tomada de decisão
                    e condução da melhoria contínua.
                </p>
            </div>

            <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-sm">
                <i data-lucide="bar-chart-4" class="w-8 h-8 text-cyan-600 mb-4"></i>
                <h3 class="font-bold text-xl mb-3">Suporte a Projetos</h3>
                <p class="text-gray-600 dark:text-gray-400">
                    Acompanhamento técnico de projetos Lean, Kaizen e Six Sigma.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- COMO FUNCIONA -->
<section class="py-20 bg-white dark:bg-gray-800">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-14">Como funciona o suporte</h2>

        <div class="grid md:grid-cols-4 gap-6">
            <?php
            $steps = [
                ["icon" => "clipboard-check", "title" => "Definição", "desc" => "Alinhamento de objetivos e escopo."],
                ["icon" => "calendar", "title" => "Planeamento", "desc" => "Agenda de sessões e indicadores."],
                ["icon" => "users", "title" => "Acompanhamento", "desc" => "Sessões práticas e mentoria."],
                ["icon" => "trending-up", "title" => "Evolução", "desc" => "Avaliação contínua dos resultados."],
            ];

            foreach ($steps as $step): ?>
                <div class="bg-gray-50 dark:bg-gray-700 p-6 rounded-xl text-center">
                    <div class="mx-auto mb-4 bg-cyan-600/10 p-4 rounded-full w-fit">
                        <i data-lucide="<?= $step['icon']; ?>" class="w-6 h-6 text-cyan-600"></i>
                    </div>
                    <h4 class="font-bold mb-2"><?= $step['title']; ?></h4>
                    <p class="text-sm text-gray-600 dark:text-gray-400"><?= $step['desc']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- BENEFÍCIOS -->
<section class="py-20 bg-gray-50 dark:bg-gray-900">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-14">Benefícios do Suporte</h2>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-sm">
                <h3 class="font-bold text-xl mb-3 text-cyan-600">Resultados Sustentáveis</h3>
                <p class="text-gray-600 dark:text-gray-400">
                    Garante que as melhorias implementadas se mantêm ao longo do tempo.
                </p>
            </div>

            <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-sm">
                <h3 class="font-bold text-xl mb-3 text-cyan-600">Lideranças Fortes</h3>
                <p class="text-gray-600 dark:text-gray-400">
                    Desenvolvimento contínuo de líderes capazes de conduzir mudanças.
                </p>
            </div>

            <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-sm">
                <h3 class="font-bold text-xl mb-3 text-cyan-600">Evolução Contínua</h3>
                <p class="text-gray-600 dark:text-gray-400">
                    Melhoria progressiva baseada em dados e disciplina.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-24 bg-cyan-600 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold mb-6">
            Precisa de apoio contínuo para sustentar resultados?
        </h2>
        <p class="text-lg opacity-90 max-w-2xl mx-auto mb-8">
            Fale connosco e descubra o modelo de suporte e mentoria ideal
            para a sua organização.
        </p>
        <a href="contacto"
           class="inline-block bg-white text-cyan-600 font-semibold px-10 py-4 rounded-xl hover:bg-gray-100 transition">
            Solicitar Suporte
        </a>
    </div>
</section>

<?php
include __DIR__ . '/../includes/footer.php';
include __DIR__ . '/../includes/scripts.php';
?>
