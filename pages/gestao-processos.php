<?php
require_once __DIR__ . '/../config/bootstrap.php';
$pageTitle = "Gestão de Processos";
include __DIR__ . '/../includes/head.php';
include __DIR__ . '/../includes/header.php';
?>

<!-- HERO -->
<section class="py-24 bg-orange-50 dark:bg-gray-900">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6">
            Gestão de <span class="text-lean-orange">Processos</span>
        </h1>
        <p class="text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">
            Consistência, eficiência e qualidade através de processos
            bem definidos, padronizados e orientados a valor.
        </p>
    </div>
</section>

<!-- PORQUÊ GESTÃO DE PROCESSOS -->
<section class="py-20 bg-white dark:bg-gray-800">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-3xl font-bold mb-6">Porquê gerir e padronizar processos?</h2>
                <p class="text-gray-600 dark:text-gray-400 mb-6">
                    Processos mal definidos geram variabilidade, erros,
                    retrabalho e perda de produtividade.
                </p>
                <p class="text-gray-600 dark:text-gray-400">
                    A gestão de processos cria estabilidade operacional,
                    permitindo melhoria contínua e crescimento sustentável.
                </p>
            </div>

            <div class="bg-gray-100 dark:bg-gray-700 p-14 rounded-3xl flex items-center justify-center">
                <i data-lucide="workflow" class="w-32 h-32 text-lean-orange"></i>
            </div>
        </div>
    </div>
</section>

<!-- NOSSA ABORDAGEM -->
<section class="py-20 bg-gray-50 dark:bg-gray-900">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-16">Nossa Abordagem</h2>

        <div class="max-w-4xl mx-auto space-y-10">
            <?php
            $steps = [
                [
                    "title" => "Mapeamento AS-IS",
                    "desc"  => "Compreendemos como os processos funcionam atualmente, identificando fluxos, papéis, tempos e desperdícios."
                ],
                [
                    "title" => "Desenho TO-BE",
                    "desc"  => "Definimos o estado futuro ideal, com processos simples, eficientes e orientados ao cliente."
                ],
                [
                    "title" => "Padronização",
                    "desc"  => "Criamos Procedimentos Operacionais Padrão (POPs), instruções de trabalho e indicadores claros."
                ],
                [
                    "title" => "Gestão e Melhoria",
                    "desc"  => "Implementamos rotinas de gestão para garantir disciplina e melhoria contínua."
                ],
            ];

            $i = 1;
            foreach ($steps as $step): ?>
                <div class="flex items-start space-x-6">
                    <div class="w-12 h-12 bg-lean-orange text-white rounded-full flex items-center justify-center shrink-0 font-bold">
                        <?= $i++; ?>
                    </div>
                    <div>
                        <h4 class="font-bold text-xl mb-2"><?= $step['title']; ?></h4>
                        <p class="text-gray-600 dark:text-gray-400"><?= $step['desc']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- BENEFÍCIOS -->
<section class="py-20 bg-white dark:bg-gray-800">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-14">Benefícios da Gestão de Processos</h2>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-gray-50 dark:bg-gray-700 p-8 rounded-2xl shadow-sm">
                <h3 class="font-bold text-xl mb-3 text-lean-orange">Consistência</h3>
                <p class="text-gray-600 dark:text-gray-400">
                    Processos executados da mesma forma, todos os dias.
                </p>
            </div>

            <div class="bg-gray-50 dark:bg-gray-700 p-8 rounded-2xl shadow-sm">
                <h3 class="font-bold text-xl mb-3 text-lean-orange">Qualidade</h3>
                <p class="text-gray-600 dark:text-gray-400">
                    Redução de erros, retrabalho e variação.
                </p>
            </div>

            <div class="bg-gray-50 dark:bg-gray-700 p-8 rounded-2xl shadow-sm">
                <h3 class="font-bold text-xl mb-3 text-lean-orange">Escalabilidade</h3>
                <p class="text-gray-600 dark:text-gray-400">
                    Processos preparados para crescimento do negócio.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-24 bg-lean-orange text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold mb-6">
            Pronto para estruturar os seus processos?
        </h2>
        <p class="text-lg opacity-90 max-w-2xl mx-auto mb-8">
            Fale connosco e descubra como a gestão de processos
            pode elevar a performance da sua organização.
        </p>
        <a href="contacto"
           class="inline-block bg-white text-lean-orange font-semibold px-10 py-4 rounded-xl hover:bg-gray-100 transition">
            Solicitar Diagnóstico
        </a>
    </div>
</section>

<?php
include __DIR__ . '/../includes/footer.php';
include __DIR__ . '/../includes/scripts.php';
?>
