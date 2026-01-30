<?php
require_once __DIR__ . '/config/bootstrap.php';
$pageTitle = "Início";
include __DIR__ . '/includes/head.php';
include __DIR__ . '/includes/header.php';
?>

<!-- HERO -->
<section class="relative py-24 overflow-hidden bg-gradient-to-br from-blue-50 to-white dark:from-gray-900 dark:to-gray-800">
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl">
            <h1 class="text-5xl md:text-6xl font-extrabold mb-6 leading-tight">
                Centro de Melhoria Contínua<br>
                <span class="text-lean-blue">Engenharia Lean Moçambique</span>
            </h1>

            <p class="text-xl text-gray-600 dark:text-gray-300 mb-10 leading-relaxed">
                Ajudamos organizações a melhorar processos, desenvolver pessoas
                e sustentar resultados através de Lean, Six Sigma e gestão estratégica.
            </p>

            <div class="flex flex-wrap gap-4">
                <a href="<?= BASE_URL; ?>pages/contacto"
                   class="bg-lean-blue hover:bg-blue-600 text-white px-10 py-4 rounded-xl font-bold transition transform hover:-translate-y-1">
                    Falar com um Consultor
                </a>
                <a href="<?= BASE_URL; ?>pages/sobre"
                   class="bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 hover:border-lean-blue px-10 py-4 rounded-xl font-bold transition">
                    Saiba Mais Sobre Nós
                </a>
            </div>
        </div>
    </div>

    <div class="absolute right-0 top-0 w-1/3 h-full opacity-10 pointer-events-none">
        <i data-lucide="trending-up" class="w-full h-full text-lean-blue"></i>
    </div>
</section>

<!-- ESTATÍSTICAS -->
<section class="py-14 bg-white dark:bg-gray-900">
    <div class="container mx-auto px-4 md:px-16 lg:px-24">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-10 text-center">
            <div>
                <div class="text-4xl font-bold text-lean-blue">10+</div>
                <div class="text-gray-500 text-sm uppercase">Anos de Experiência</div>
            </div>
            <div>
                <div class="text-4xl font-bold text-lean-green">500+</div>
                <div class="text-gray-500 text-sm uppercase">Profissionais Capacitados</div>
            </div>
            <div>
                <div class="text-4xl font-bold text-lean-orange">100+</div>
                <div class="text-gray-500 text-sm uppercase">Projectos</div>
            </div>
            <div>
                <div class="text-4xl font-bold text-lean-red">95%</div>
                <div class="text-gray-500 text-sm uppercase">Satisfação</div>
            </div>
        </div>
    </div>
</section>

<!-- PILARES -->
<section class="py-20 bg-gray-50 dark:bg-gray-800">
    <div class="container mx-auto px-4 md:px-16 lg:px-24">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold mb-4">Pilares da Nossa Actuação</h2>
            <div class="w-20 h-1 bg-lean-blue mx-auto"></div>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <?php
            $pilares = [
                ["users","Liderança & Cultura","Mindset de excelência e melhoria contínua","lean-blue"],
                ["settings","Eficiência Operacional","Optimização de processos e recursos","lean-green"],
                ["check-square","Processos Padronizados","Consistência, qualidade e controlo","lean-orange"],
                ["layers","Gestão de Processos","Mapeamento, POPs e indicadores","lean-red"],
                ["bar-chart-3","Resultados Sustentáveis","Impacto mensurável no negócio","lean-cyan"],
                ["rocket","Transformação","Mudança organizacional estruturada","purple-500"],
            ];

            foreach ($pilares as $p): ?>
                <div class="p-8 bg-white dark:bg-gray-900 rounded-2xl shadow-lg border-b-4 border-<?= $p[3]; ?>">
                    <i data-lucide="<?= $p[0]; ?>" class="w-10 h-10 text-<?= $p[3]; ?> mb-6"></i>
                    <h3 class="font-bold text-xl mb-3"><?= $p[1]; ?></h3>
                    <p class="text-gray-500"><?= $p[2]; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- SERVIÇOS -->
<section class="py-20 bg-white dark:bg-gray-900">
    <div class="container mx-auto px-4 md:px-16 lg:px-24">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold mb-4">Serviços Especializados</h2>
            <div class="w-20 h-1 bg-lean-blue mx-auto"></div>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <a href="<?= BASE_URL; ?>pages/consultoria" class="group">
                <div class="p-8 bg-gray-50 dark:bg-gray-800 rounded-2xl shadow hover:shadow-xl transition">
                    <i data-lucide="briefcase" class="w-12 h-12 text-lean-blue mb-6"></i>
                    <h3 class="font-bold text-xl mb-3">Consultoria Lean</h3>
                    <p class="text-gray-500">Diagnóstico, planeamento e implementação.</p>
                </div>
            </a>

            <a href="<?= BASE_URL; ?>pages/formacao" class="group">
                <div class="p-8 bg-gray-50 dark:bg-gray-800 rounded-2xl shadow hover:shadow-xl transition">
                    <i data-lucide="graduation-cap" class="w-12 h-12 text-lean-green mb-6"></i>
                    <h3 class="font-bold text-xl mb-3">Formação</h3>
                    <p class="text-gray-500">Lean, Six Sigma, Kaizen e 5S.</p>
                </div>
            </a>

            <a href="<?= BASE_URL; ?>pages/gestao-processos" class="group">
                <div class="p-8 bg-gray-50 dark:bg-gray-800 rounded-2xl shadow hover:shadow-xl transition">
                    <i data-lucide="layers" class="w-12 h-12 text-lean-orange mb-6"></i>
                    <h3 class="font-bold text-xl mb-3">Gestão de Processos</h3>
                    <p class="text-gray-500">Padronização e melhoria contínua.</p>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- CTA FINAL -->
<section class="py-24 bg-lean-blue text-white text-center">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold mb-6">
            Pronto para melhorar os seus resultados?
        </h2>
        <p class="max-w-2xl mx-auto mb-8 opacity-90">
            Fale connosco e descubra como podemos apoiar a sua organização
            na jornada de excelência operacional.
        </p>
        <a href="<?= BASE_URL; ?>pages/contacto"
           class="bg-white text-lean-blue px-12 py-4 rounded-xl font-bold hover:bg-gray-100 transition">
            Agendar Conversa
        </a>
    </div>
</section>

<?php
include __DIR__ . '/includes/footer.php';
include __DIR__ . '/includes/scripts.php';
?>
