<?php
require_once __DIR__ . '/../config/bootstrap.php';
$pageTitle = "Consultoria";
include __DIR__ . '/../includes/head.php';
include __DIR__ . '/../includes/header.php';
?>

<!-- HERO -->
<section class="py-24 bg-blue-50 dark:bg-gray-900">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6">
            Consultoria em <span class="text-lean-blue">Melhoria Contínua</span>
        </h1>
        <p class="text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">
            Abordagem estratégica e personalizada para eliminar desperdícios,
            aumentar produtividade e gerar resultados sustentáveis.
        </p>
    </div>
</section>

<!-- COMO AJUDAMOS -->
<section class="py-20 bg-white dark:bg-gray-800">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-3xl font-bold mb-8">Como ajudamos a sua empresa?</h2>

                <ul class="space-y-5">
                    <li class="flex items-start space-x-3">
                        <i data-lucide="search" class="text-lean-blue w-6 h-6 mt-1"></i>
                        <span>Diagnóstico completo de processos e identificação de gargalos críticos.</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <i data-lucide="map" class="text-lean-blue w-6 h-6 mt-1"></i>
                        <span>Desenho de planos estratégicos de melhoria alinhados ao negócio.</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <i data-lucide="settings" class="text-lean-blue w-6 h-6 mt-1"></i>
                        <span>Implementação prática de metodologias Lean, Six Sigma e Kaizen.</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <i data-lucide="dollar-sign" class="text-lean-blue w-6 h-6 mt-1"></i>
                        <span>Redução de custos operacionais e aumento de eficiência.</span>
                    </li>
                </ul>
            </div>

            <div class="bg-gray-100 dark:bg-gray-700 p-14 rounded-3xl flex items-center justify-center">
                <i data-lucide="trending-up" class="w-32 h-32 text-lean-blue"></i>
            </div>
        </div>
    </div>
</section>

<!-- SERVIÇOS DE CONSULTORIA -->
<section class="py-20 bg-gray-50 dark:bg-gray-900">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-14">Nossos Serviços</h2>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-sm">
                <div class="bg-blue-100 dark:bg-blue-900 p-3 rounded-xl w-fit mb-4">
                    <i data-lucide="layers" class="w-6 h-6 text-lean-blue"></i>
                </div>
                <h3 class="font-bold text-xl mb-3">Consultoria Lean</h3>
                <p class="text-gray-600 dark:text-gray-400">
                    Otimização de fluxos, eliminação de desperdícios e aumento de valor para o cliente.
                </p>
            </div>

            <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-sm">
                <div class="bg-green-100 dark:bg-green-900 p-3 rounded-xl w-fit mb-4">
                    <i data-lucide="activity" class="w-6 h-6 text-lean-green"></i>
                </div>
                <h3 class="font-bold text-xl mb-3">Six Sigma</h3>
                <p class="text-gray-600 dark:text-gray-400">
                    Redução de variabilidade, defeitos e falhas através de dados e análise estatística.
                </p>
            </div>

            <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-sm">
                <div class="bg-yellow-100 dark:bg-yellow-900 p-3 rounded-xl w-fit mb-4">
                    <i data-lucide="users" class="w-6 h-6 text-yellow-500"></i>
                </div>
                <h3 class="font-bold text-xl mb-3">Capacitação</h3>
                <p class="text-gray-600 dark:text-gray-400">
                    Formação e coaching de equipas para sustentar a melhoria contínua.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- METODOLOGIA -->
<section class="py-20 bg-white dark:bg-gray-800">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-14">Nossa Metodologia</h2>

        <div class="grid md:grid-cols-4 gap-6">
            <?php
            $steps = [
                ["icon" => "search", "title" => "Diagnóstico", "desc" => "Análise detalhada dos processos."],
                ["icon" => "pen-tool", "title" => "Planeamento", "desc" => "Definição das soluções Lean."],
                ["icon" => "play-circle", "title" => "Execução", "desc" => "Implementação no terreno."],
                ["icon" => "shield-check", "title" => "Sustentação", "desc" => "Monitoria e melhoria contínua."],
            ];

            foreach ($steps as $step): ?>
                <div class="bg-gray-50 dark:bg-gray-700 p-6 rounded-xl text-center">
                    <div class="mx-auto mb-4 bg-lean-blue/10 p-4 rounded-full w-fit">
                        <i data-lucide="<?= $step['icon']; ?>" class="w-6 h-6 text-lean-blue"></i>
                    </div>
                    <h4 class="font-bold mb-2"><?= $step['title']; ?></h4>
                    <p class="text-sm text-gray-600 dark:text-gray-400"><?= $step['desc']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-24 bg-lean-blue text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold mb-6">
            Pronto para transformar a sua empresa?
        </h2>
        <p class="text-lg opacity-90 max-w-2xl mx-auto mb-8">
            Fale connosco e descubra como a melhoria contínua pode gerar resultados reais.
        </p>
        <a href="/contacto"
           class="inline-block bg-white text-lean-blue font-semibold px-10 py-4 rounded-xl hover:bg-gray-100 transition">
            Solicitar Consultoria
        </a>
    </div>
</section>

<?php
include __DIR__ . '/../includes/footer.php';
include __DIR__ . '/../includes/scripts.php';
?>
