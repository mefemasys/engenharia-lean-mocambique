<?php
require_once __DIR__ . '/../config/bootstrap.php';

$pageTitle = "Sobre Nós";

include __DIR__ . '/../includes/head.php';
include __DIR__ . '/../includes/header.php';
?>

<section class="py-20 bg-white dark:bg-gray-900">
    <div class="container mx-auto px-4 space-y-24">

        <!-- HERO / QUEM SOMOS -->
        <div class="grid md:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-4xl font-bold mb-6">
                    Quem <span class="text-lean-blue">Somos</span>
                </h2>

                <p class="text-gray-600 dark:text-gray-400 text-lg leading-relaxed mb-6">
                    O Centro de Melhoria Contínua – Engenharia Lean Moçambique é uma organização focada
                    na transformação de processos, pessoas e resultados através de metodologias Lean,
                    Six Sigma e melhoria contínua.
                </p>

                <p class="text-gray-600 dark:text-gray-400 text-lg leading-relaxed">
                    Atuamos como parceiros estratégicos das organizações, ajudando-as a eliminar desperdícios,
                    aumentar produtividade e criar culturas sustentáveis de excelência operacional.
                </p>
            </div>

            <div class="relative">
                <div class="aspect-square bg-gray-100 dark:bg-gray-800 rounded-3xl flex items-center justify-center">
                    <i data-lucide="users" class="w-40 h-40 text-gray-300 dark:text-gray-700"></i>
                </div>
            </div>
        </div>

        <!-- MISSÃO | VISÃO | VALORES -->
        <div>
            <h3 class="text-3xl font-bold text-center mb-12">Nossa Essência</h3>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Missão -->
                <div class="bg-gray-50 dark:bg-gray-800 p-8 rounded-2xl shadow-sm">
                    <div class="bg-blue-100 dark:bg-blue-900 p-3 rounded-xl w-fit mb-4">
                        <i data-lucide="target" class="w-6 h-6 text-lean-blue"></i>
                    </div>
                    <h4 class="font-bold text-xl mb-3">Missão</h4>
                    <p class="text-gray-600 dark:text-gray-400">
                        Transformar processos e capacitar pessoas para alcançar excelência operacional
                        de forma sustentável.
                    </p>
                </div>

                <!-- Visão -->
                <div class="bg-gray-50 dark:bg-gray-800 p-8 rounded-2xl shadow-sm">
                    <div class="bg-green-100 dark:bg-green-900 p-3 rounded-xl w-fit mb-4">
                        <i data-lucide="eye" class="w-6 h-6 text-lean-green"></i>
                    </div>
                    <h4 class="font-bold text-xl mb-3">Visão</h4>
                    <p class="text-gray-600 dark:text-gray-400">
                        Ser referência em consultoria Lean e melhoria contínua em Moçambique
                        e na África Austral.
                    </p>
                </div>

                <!-- Valores -->
                <div class="bg-gray-50 dark:bg-gray-800 p-8 rounded-2xl shadow-sm">
                    <div class="bg-yellow-100 dark:bg-yellow-900 p-3 rounded-xl w-fit mb-4">
                        <i data-lucide="heart-handshake" class="w-6 h-6 text-yellow-500"></i>
                    </div>
                    <h4 class="font-bold text-xl mb-3">Valores</h4>
                    <ul class="text-gray-600 dark:text-gray-400 space-y-2 list-disc list-inside">
                        <li>Ética e transparência</li>
                        <li>Foco em resultados</li>
                        <li>Melhoria contínua</li>
                        <li>Respeito pelas pessoas</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- MODO OPERANDI -->
        <div>
            <h3 class="text-3xl font-bold mb-12 text-center">Nosso Modo Operandi</h3>

            <div class="grid md:grid-cols-4 gap-6">
                <?php
                $steps = [
                    ["icon" => "search", "title" => "Diagnóstico", "desc" => "Análise profunda dos processos e indicadores."],
                    ["icon" => "layers", "title" => "Desenho", "desc" => "Criação de soluções Lean adaptadas à realidade do cliente."],
                    ["icon" => "settings", "title" => "Implementação", "desc" => "Execução prática com equipas no terreno."],
                    ["icon" => "trending-up", "title" => "Sustentação", "desc" => "Acompanhamento e melhoria contínua."],
                ];

                foreach ($steps as $step): ?>
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-sm text-center">
                        <div class="mx-auto mb-4 bg-lean-blue/10 p-4 rounded-full w-fit">
                            <i data-lucide="<?= $step['icon']; ?>" class="w-6 h-6 text-lean-blue"></i>
                        </div>
                        <h4 class="font-bold mb-2"><?= $step['title']; ?></h4>
                        <p class="text-sm text-gray-600 dark:text-gray-400"><?= $step['desc']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- WHY US -->
        <div class="bg-lean-blue text-white rounded-3xl p-16">
            <h3 class="text-3xl font-bold mb-10 text-center">Porquê Escolher-nos?</h3>

            <div class="grid md:grid-cols-3 gap-8 text-center">
                <div>
                    <div class="text-4xl font-bold mb-2">+10</div>
                    <p class="opacity-90">Anos de experiência</p>
                </div>
                <div>
                    <div class="text-4xl font-bold mb-2">Lean</div>
                    <p class="opacity-90">Metodologia prática e aplicada</p>
                </div>
                <div>
                    <div class="text-4xl font-bold mb-2">100%</div>
                    <p class="opacity-90">Foco em resultados reais</p>
                </div>
            </div>
        </div>

      <!-- FAQ -->
<div>
    <h3 class="text-3xl font-bold mb-12 text-center">Perguntas Frequentes</h3>

    <div class="max-w-4xl mx-auto space-y-4 md:space-y-6">
        <?php
        $faqs = [
            [
                "q" => "O que é Engenharia Lean / Lean Thinking?",
                "a" => "A Engenharia Lean (ou Lean Thinking) é uma filosofia e metodologia de gestão focada em entregar o máximo de valor ao cliente, eliminando desperdícios em todas as formas (tempo, estoque, retrabalho, espera, transporte desnecessário, entre outros). Originada do Sistema Toyota de Produção, ela promove processos mais fluidos, eficientes e sustentáveis, podendo ser aplicada em manufatura, serviços, construção, saúde, TI e escritórios."
            ],
            [
                "q" => "Vocês atuam apenas em grandes empresas ou indústrias?",
                "a" => "Não. Atuamos com empresas de todos os tamanhos: pequenas, médias e grandes. Temos experiência tanto com indústrias tradicionais quanto com empresas de serviços, startups, clínicas, escritórios de engenharia, construtoras e varejo. O importante é a vontade de melhorar processos e a liderança engajada."
            ],
            [
                "q" => "Os resultados são garantidos?",
                "a" => "Não oferecemos garantia de resultados fixos em percentual, pois o sucesso depende diretamente do nível de comprometimento da liderança e da equipe da empresa. No entanto, a metodologia Lean é comprovadamente eficaz em milhares de organizações no mundo todo. Quando há disciplina na execução, costumamos ver ganhos entre 20–60% em produtividade, redução significativa de lead time e estoque, e melhora na qualidade em projetos bem conduzidos."
            ],
            [
                "q" => "Quanto tempo leva para ver os primeiros resultados?",
                "a" => "Os primeiros ganhos visíveis geralmente aparecem entre 8 e 16 semanas após o início do trabalho prático no Gemba (chão de fábrica ou área de processo). Projetos mais estruturados (implantação de fluxo, pull, nivelamento) costumam trazer resultados consolidados entre 4 e 12 meses, dependendo do tamanho da empresa e da complexidade dos processos."
            ],
            [
                "q" => "Vocês fazem apenas treinamento ou também implementação prática?",
                "a" => "Fazemos ambos. Oferecemos desde treinamentos rápidos e workshops (Kaizen, 5S, SMED, VSM, etc.) até projetos completos de transformação Lean com acompanhamento no dia a dia: diagnóstico, mapeamento de fluxo de valor, implantação de células, sistemas pull, gestão à vista, coaching de líderes e sustentação dos resultados."
            ],
            [
                "q" => "É possível aplicar Lean fora da indústria, por exemplo em serviços ou escritório?",
                "a" => "Sim, absolutamente. O Lean já é muito aplicado com sucesso em áreas administrativas, RH, financeiro, vendas, logística, TI, saúde, jurídico, construção civil (Lean Construction), escritórios de projetos e serviços em geral. Chamamos isso de Lean Office, Lean Services ou Lean Administrativo."
            ],
            [
                "q" => "Qual a diferença entre Lean e Lean Six Sigma?",
                "a" => "Lean foca principalmente na eliminação de desperdícios e na criação de fluxo contínuo. Six Sigma foca na redução da variabilidade e defeitos através de análise estatística. Muitas empresas combinam as duas abordagens (Lean Six Sigma) para obter resultados ainda mais robustos. Podemos trabalhar com Lean puro ou com integração Lean Six Sigma, dependendo da necessidade da sua empresa."
            ],
            [
                "q" => "Como funciona o processo de consultoria com vocês?",
                "a" => "1. Diagnóstico inicial (Gemba Walk + entrevistas + indicadores)<br>2. Apresentação de oportunidades e plano de ação prioritizado<br>3. Implantação prática com equipes multidisciplinares (Kaizens e projetos)<br>4. Treinamento e coaching no dia a dia<br>5. Sustentação com gestão visual, auditorias e indicadores de desempenho<br>6. Transferência de conhecimento para que a empresa consiga manter e evoluir sozinha."
            ],
            [
                "q" => "É caro implementar Lean?",
                "a" => "O investimento varia conforme o porte da empresa e o escopo. Normalmente o retorno sobre o investimento (ROI) é muito rápido — em muitos casos o projeto se paga em 6–12 meses com reduções de custo, estoque e ganhos de produtividade. Podemos estruturar projetos com fases e pagamento atrelado a resultados alcançados, quando possível."
            ],
            [
                "q" => "O que acontece se a equipe resistir às mudanças?",
                "a" => "A resistência é comum no início. Por isso começamos sempre pelo engajamento da liderança e pela comunicação clara do 'porquê'. Envolvemos as pessoas que fazem o trabalho diariamente nos Kaizens, mostramos resultados rápidos e concretos, e reconhecemos quem participa ativamente. Quando há resultados visíveis, a adesão costuma crescer naturalmente."
            ],
        ];

        foreach ($faqs as $faq): ?>
            <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                <h4 class="font-semibold text-lg mb-3 text-gray-900 dark:text-gray-100"><?= $faq['q']; ?></h4>
                <p class="text-gray-600 dark:text-gray-300 leading-relaxed"><?= $faq['a']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</div>
    </div>
</section>

<?php
include __DIR__ . '/../includes/footer.php';
include __DIR__ . '/../includes/scripts.php';
?>
