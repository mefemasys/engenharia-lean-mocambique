<?php
require_once __DIR__ . '/../config/bootstrap.php';
$pageTitle = "Transformação Organizacional";
include __DIR__ . '/../includes/head.php';
include __DIR__ . '/../includes/header.php';
?>

<!-- HERO -->
<section class="py-24 bg-red-50 dark:bg-gray-900">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6">
            Transformação <span class="text-red-600">Organizacional</span>
        </h1>
        <p class="text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">
            Integração da cultura Lean à estratégia do negócio para gerar
            mudanças profundas, sustentáveis e orientadas a resultados.
        </p>
    </div>
</section>

<!-- O QUE É TRANSFORMAÇÃO -->
<section class="py-20 bg-white dark:bg-gray-800">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-3xl font-bold mb-6">O que é Transformação Organizacional?</h2>
                <p class="text-gray-600 dark:text-gray-400 mb-6">
                    Transformação organizacional vai além de melhorar processos.
                    Trata-se de mudar mentalidades, comportamentos e a forma como
                    a organização toma decisões e cria valor.
                </p>
                <p class="text-gray-600 dark:text-gray-400">
                    Apoiamos líderes e equipas a incorporar a cultura Lean como
                    parte da estratégia, da liderança e do dia a dia da empresa.
                </p>
            </div>

            <div class="bg-gray-100 dark:bg-gray-700 p-14 rounded-3xl flex items-center justify-center">
                <i data-lucide="refresh-ccw" class="w-32 h-32 text-red-600"></i>
            </div>
        </div>
    </div>
</section>

<!-- PILARES DA TRANSFORMAÇÃO -->
<section class="py-20 bg-gray-50 dark:bg-gray-900">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-14">Pilares da Transformação</h2>

        <div class="grid md:grid-cols-4 gap-8">
            <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-sm text-center">
                <i data-lucide="crown" class="w-8 h-8 text-red-600 mx-auto mb-4"></i>
                <h4 class="font-bold mb-2">Liderança</h4>
                <p class="text-sm text-gray-600 dark:text-gray-400">
                    Desenvolvimento de líderes como agentes da mudança.
                </p>
            </div>

            <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-sm text-center">
                <i data-lucide="users" class="w-8 h-8 text-red-600 mx-auto mb-4"></i>
                <h4 class="font-bold mb-2">Pessoas</h4>
                <p class="text-sm text-gray-600 dark:text-gray-400">
                    Envolvimento e capacitação das equipas.
                </p>
            </div>

            <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-sm text-center">
                <i data-lucide="layers" class="w-8 h-8 text-red-600 mx-auto mb-4"></i>
                <h4 class="font-bold mb-2">Processos</h4>
                <p class="text-sm text-gray-600 dark:text-gray-400">
                    Fluxos simples, eficientes e orientados ao cliente.
                </p>
            </div>

            <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-sm text-center">
                <i data-lucide="bar-chart-3" class="w-8 h-8 text-red-600 mx-auto mb-4"></i>
                <h4 class="font-bold mb-2">Resultados</h4>
                <p class="text-sm text-gray-600 dark:text-gray-400">
                    Métricas claras e foco em valor sustentável.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- COMO TRABALHAMOS -->
<section class="py-20 bg-white dark:bg-gray-800">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-14">Como conduzimos a transformação</h2>

        <div class="grid md:grid-cols-5 gap-6">
            <?php
            $steps = [
                ["icon" => "search", "title" => "Avaliação", "desc" => "Diagnóstico cultural e estratégico."],
                ["icon" => "target", "title" => "Direção", "desc" => "Alinhamento com a estratégia do negócio."],
                ["icon" => "users", "title" => "Engajamento", "desc" => "Mobilização das lideranças e equipas."],
                ["icon" => "settings", "title" => "Execução", "desc" => "Implementação progressiva da cultura Lean."],
                ["icon" => "trending-up", "title" => "Sustentação", "desc" => "Acompanhamento e melhoria contínua."],
            ];

            foreach ($steps as $step): ?>
                <div class="bg-gray-50 dark:bg-gray-700 p-6 rounded-xl text-center">
                    <div class="mx-auto mb-4 bg-red-600/10 p-4 rounded-full w-fit">
                        <i data-lucide="<?= $step['icon']; ?>" class="w-6 h-6 text-red-600"></i>
                    </div>
                    <h4 class="font-bold mb-2"><?= $step['title']; ?></h4>
                    <p class="text-sm text-gray-600 dark:text-gray-400"><?= $step['desc']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- RESULTADOS ESPERADOS -->
<section class="py-20 bg-gray-50 dark:bg-gray-900">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-14">Resultados Esperados</h2>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-sm">
                <h3 class="font-bold text-xl mb-3 text-red-600">Cultura Forte</h3>
                <p class="text-gray-600 dark:text-gray-400">
                    Pessoas alinhadas, comprometidas e orientadas à melhoria contínua.
                </p>
            </div>
            <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-sm">
                <h3 class="font-bold text-xl mb-3 text-red-600">Performance</h3>
                <p class="text-gray-600 dark:text-gray-400">
                    Melhoria consistente de indicadores operacionais e financeiros.
                </p>
            </div>
            <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-sm">
                <h3 class="font-bold text-xl mb-3 text-red-600">Sustentabilidade</h3>
                <p class="text-gray-600 dark:text-gray-400">
                    Resultados que se mantêm ao longo do tempo.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-24 bg-red-600 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold mb-6">
            Pronto para liderar a transformação?
        </h2>
        <p class="text-lg opacity-90 max-w-2xl mx-auto mb-8">
            Fale connosco e descubra como implementar uma transformação organizacional
            sólida e sustentável.
        </p>
        <a href="contacto"
           class="inline-block bg-white text-red-600 font-semibold px-10 py-4 rounded-xl hover:bg-gray-100 transition">
            Iniciar Transformação
        </a>
    </div>
</section>

<?php
include __DIR__ . '/../includes/footer.php';
include __DIR__ . '/../includes/scripts.php';
?>
